<div id="uploadVid">
	<h2 style="color:green">Video Upload (Step 2 of 2)</h2>
	
	<form name="uploadForm" id="uploadForm" method="post" action="upload2.php" enctype="multipart/form-data">
	<input type="text" name="title" style="display:none;" value="<?php echo $_POST["title"]; ?>" hidden>
	<textarea name="desc" maxlength="500" form="uploadForm" style="width:295px;overflow:hidden;resize:none;display:none;" rows="3" hidden><?php echo $_POST["desc"]; ?></textarea>
	
	<center><table class="dataEntryTableSmall">
		<tbody><tr>
                <td width="125px" valign="top" align="right"><span style="font-size: 14px;font-weight:bold;">File:</span></td>
                <td style="background-color:#FEFFE0; color:#808536; padding:13px;"><input type="file" name="fileToUpload" id="fileToUpload" style="color:black" accept="video/mp4,video/x-ms-wmv,video/x-msvideo,video/quicktime,video/x-flv,video/x-matroska" required=""><br>
				<p><b>Max file size: 50 MB. No copyrighted or obscene material.</b><br>After uploading, you can edit or remove this video at anytime under the "My Videos" link on the top of the page.</p></td>
            </tr>
            <tr>
                <td valign="top" align="right"><span></span></td>
                <td><br><h3>PLEASE BE PATIENT, THIS MAY TAKE SEVERAL MINUTES. ONCE COMPLETED, YOU WILL SEE A CONFIRMATION MESSAGE.</h3></td>
            </tr>
<tr>
                <td width="" align="right" style="white-space: nowrap;"></td>
                <td>
        <br>
<input type="submit" id="upload" name="upload" value="Upload Video">
        </td>
            </tr>   
    </tbody></table></center>
	</form>
</div>