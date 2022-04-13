<?php 
$username = $_SESSION["username"]; 
$upload_msg = "";
$donotcontinue = 0;
function randstr($len, $charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-"){
    return substr(str_shuffle($charset),0,$len);
}
function delete_directory($dirname) {
         if (is_dir($dirname))
           $dir_handle = opendir($dirname);
     if (!$dir_handle)
          return false;
     while($file = readdir($dir_handle)) {
           if ($file != "." && $file != "..") {
                if (!is_dir($dirname."/".$file))
                     unlink($dirname."/".$file);
                else
                     delete_directory($dirname.'/'.$file);
           }
     }
     closedir($dir_handle);
     rmdir($dirname);
     return true;
}

$url_id = randstr(10);
$folder_id = randstr(26);
$vid_id = randstr(26);

if(isset($_POST["upload"])){
$vextension  = pathinfo( $_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION );
$target_file = "content/preload/$vid_id.$vextension";
$target_folder = "content/video/"; // why the hell is there a folder id???
$preload_folder = "content/preload/";
$target_thumb = "content/thumbs/".$url_id.".jpg";

$thumbcmd = "$ffmpeg -i $target_file -vf \"thumbnail\" -frames:v 1 -s 120x90 $target_thumb";
if (!file_exists($target_folder)) {
	mkdir($target_folder);
}
if (!file_exists($preload_folder)) {
	mkdir($preload_folder);
}
    if(isset($_POST['upload']) AND isset($_SESSION["username"])){
        $name       = $_FILES['fileToUpload']['name'];  
        $temp_name  = $_FILES['fileToUpload']['tmp_name'];  // gets video info and thumbnail info
				if(move_uploaded_file($temp_name, $target_file) && $donotcontinue == 0){
					if($conn === false){
						die("ERROR: Could not connect. " . mysqli_connect_error()); // cannot connect to database therefore it stops uploading
						}
						if($vextension != "mp4" && $vextension != "mkv" && $vextension != "wmv" && $vextension != "flv" && $vextension != "avi" && $vextension != "mov" && $vextension != "3gp") {
							echo "<center><h1>Your video is an incompatible format.<br>To continue uploading this video, convert it to a supported format.</h1></center>";
							die();
						}
						$width = exec("$ffprobe -v error -select_streams v:0 -show_entries stream=width -of default=nw=1:nk=1 ".$target_file);
						$height = exec("$ffprobe -v error -select_streams v:0 -show_entries stream=height -of default=nw=1:nk=1 ".$target_file);
						$checkerror = exec("$ffmpeg -v error -i ".$target_file." -f null - >error.log 2>&1");
						if ( '' == file_get_contents("error.log") )
						{
							// good file, continues with process of uploading
							unlink("error.log");
						} else {
							echo "<center><h1>Your video is invalid or corrupt. Please choose a different file.</h1></center>";
							delete_directory($preload_folder);
							die();
						}
						if($width && $height < 2160) {
							// continues with upload
						} else {
							echo "<center><h1>Your video is too large. The limit is up to 2160x2160.</h1></center>";
							delete_directory($preload_folder);
							die();
						}
						$id = mysqli_real_escape_string($conn, $url_id);
						$title = $_POST['title'];
						$desc = $_POST['desc'];
						$uploader = mysqli_real_escape_string($conn, $username);
						exec("$ffmpeg -i ".$target_file." -vf scale=320x240 -c:v libx264 -b:a 56k  -c:a aac -ar 22050 content/video/$url_id.mp4");
						exec("$ffmpeg -i ".$target_file." -vf scale=320x240 -c:v flv1 -b:a 80k  -c:a mp3 -ar 22050 content/video/$url_id.flv");
						$failcount = 0;
						
						clearstatcache();
						if ( 0 == filesize("content/video/$url_id.mp4") ) {
							unlink("content/video/$url_id.mp4");
							delete_directory($preload_folder);
							$failcount++;
						}

						if($failcount == 1) {
							unlink("content/video/$url_id.mp4");
							delete_directory($preload_folder);
							die("<center><h1>Your video was unable to be uploaded.<br>If you see this screen, report it to staff/admin.</h1></center>");
						}
						exec($thumbcmd);
						$datenow = date("Y-m-d");
						$stmt = $conn->prepare("INSERT INTO videos (id, title, description, uploaded_by, file, file2, thumb, uploaded_on) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"); // add title, desc, through prepared statements
						$stmt->bind_param('ssssssss', $url_id, $title, $desc, $uploader, $target_file, $target_file2, $target_thumb, $datenow);
						// set params
						$target_file = $target_folder . "/" . $url_id . ".mp4";
						$target_file2 = $target_folder . "/" . $url_id . ".flv";
						$stmt->execute();
						$stmt = $conn->prepare("UPDATE users SET recent_vid = ? WHERE username = ?"); // add title, desc, through prepared statements
						$stmt->bind_param("ss", $url_id,$uploader);
						$stmt->execute();
						delete_directory($preload_folder);
						
						
						$timestamp = date("c", strtotime("now"));
						echo "<script>window.location.replace('upload_complete.php?v=".$url_id."');</script>";
						
						} else {
				$upload_msg = 'You should select a file to upload!';
			}
		}
	} else {
		
	}

?>