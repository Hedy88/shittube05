<table width="595" cellspacing="0" cellpadding="0" border="0" bgcolor="#CCCCCC" align="center">
    <tbody>
        <tr>
            <td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
            <td width="100%"><img src="./img/pixel.gif" width="1" height="5"></td>
            <td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
        </tr>
        <tr>
            <td><img src="./img/pixel.gif" width="5" height="1"></td>
            <td width="585">
                <div class="moduleTitleBar">
                    <div class="moduleTitle">
                        <div style="float: right; padding: 1px 5px 0px 0px; font-size: 12px;"><a href="browse.php">See More Videos</a></div>
                        Today's Featured Videos
                    </div>
                </div>

                <?php 
                $fsql = mysqli_query($conn, "SELECT * FROM `videos` ORDER BY `uploaded_on` DESC LIMIT 10");
                while ($fetch = mysqli_fetch_assoc($fsql)) { 
                    $idvideolist = $fetch['id'];
                    $namevideolist = htmlspecialchars($fetch['title']);
                    $uploadervideolist = htmlspecialchars($fetch['uploaded_by']); 
                    $uploadvideolist = htmlspecialchars($fetch['uploaded_on']); 
                    $descvideolist = htmlspecialchars($fetch['description']);
                ?>
                <div class="moduleEntry">
                    <table width="565" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr valign="top">
                                <td><a href="video.php?v=<?php echo $idvideolist; ?>"><img src="./thumbs.php?thumb=<?php echo $idvideolist; ?>" class="moduleEntryThumb" width="120" height="90"></a></td>
                                <td width="100%">
                                    <div class="moduleEntryTitle"><a href="video.php?v=<?php echo $idvideolist; ?>"><?php echo htmlspecialchars($namevideolist); ?></a></div>
                                    <div class="moduleEntryDescription"><?php echo htmlspecialchars($descvideolist); ?></div>
                                    <div class="moduleEntryTags">
                                        Tags // PLACEHOLDER1 : PLACEHOLDER2</div>
                                    <div class="moduleEntryDetails">Added: <?php echo $uploadvideolist ?> by <a href="profile.php?u=<?php echo htmlspecialchars($uploadervideolist); ?>"> <?php echo htmlspecialchars($uploadervideolist); ?></a></div>
                                    <div class="moduleEntryDetails">Views: 307 | Comments: 3</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php } ?>

               

            </td>
            <td><img src="./img/pixel.gif" width="5" height="1"></td>
        </tr>
        <tr>
            <td><img src="./img/box_login_bl.gif" width="5" height="5"></td>
            <td><img src="./img/pixel.gif" width="1" height="5"></td>
            <td><img src="./img/box_login_br.gif" width="5" height="5"></td>
        </tr>
    </tbody>
</table>