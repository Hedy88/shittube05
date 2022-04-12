<?php 
$fsql = mysqli_query($conn, "SELECT * FROM `videos` ORDER BY `uploaded_on` DESC LIMIT 21");
while ($fetch = mysqli_fetch_assoc($fsql)) { 
    $idvideolist = $fetch['id'];
    $namevideolist = htmlspecialchars($fetch['title']);
    $uploadervideolist = htmlspecialchars($fetch['uploaded_by']); 
    $uploadvideolist = htmlspecialchars($fetch['uploaded_on']); 
    $descvideolist = htmlspecialchars($fetch['description']);
?>
<div class="moduleEntry">
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr valign="top">
                <td><a href="video.php?v=<?php echo $idvideolist; ?>" class="bold" target="_parent"><img src="thumbs.php?thumb=<?php echo $idvideolist; ?>" class="moduleEntryThumb" width="80" height="60"></a></td>
                <td width="100%">
                    <div class="moduleFrameTitle"><a href="video.php?v=<?php echo $idvideolist; ?>" target="_parent"><?php echo $namevideolist; ?></a></div>
                    <div class="moduleFrameDetails">Added: <?php echo $uploadvideolist; ?><br>by <a href="/profile.php?u=<?php echo $uploadervideolist; ?>" target="_parent"><?php echo $uploadervideolist; ?></a>
                    </div>
                    <div class="moduleFrameDetails">Views: 6 <br> Comments: 2
                    </div>

                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php } ?>