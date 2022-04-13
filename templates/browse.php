<table width="80%" cellspacing="0" cellpadding="0" border="0" bgcolor="#CCCCCC" align="center">
    <tbody>
        <tr>
            <td><img src="img/box_login_tl.gif" width="5" height="5"></td>
            <td width="100%"><img src="img/pixel.gif" width="1" height="5"></td>
            <td><img src="img/box_login_tr.gif" width="5" height="5"></td>
        </tr>
        <tr>
            <td><img src="img/pixel.gif" width="5" height="1"></td>
            <td>
                <div class="moduleTitleBar">
                    <div class="moduleTitle">
                        Videos
                    </div>
                </div>
                <?php 
                $sql = mysqli_query($conn, "SELECT * FROM `videos` ORDER BY `uploaded_on`");

                while ($row = mysqli_fetch_array($sql)) {
                    $title = htmlspecialchars($row['title']);
                    $uploaded_by = htmlspecialchars($row['uploaded_by']);
                    $id = htmlspecialchars($row['id']);
                    $uploaded_on = htmlspecialchars($row['uploaded_on']);
                ?>
                <div class="moduleFeatured">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr valign="top">
                                <td width="20%" align="center"><a href="watch.php?v=Yg3Nx-jBz9w"><img src="thumbs.php?thumb=<?php echo $id; ?>" class="moduleFeaturedThumb" width="120" height="90"></a>
                                    <div class="moduleFeaturedTitle"><a href="video.php?v=<?php echo $id; ?>"><?php echo $title; ?></a>
                                    </div>
                                    <div class="moduleFeaturedDetails">Added: <?php echo $uploaded_on; ?>
                                        <br>by <a href="profile.php?u=<?php echo $uploaded_by; ?>"><?php echo $uploaded_by; ?></a>
                                        <!-- (<a href="profile.php?user=BillyIsReal">10</a>) -->
                                    </div>
                                    <div class="moduleFeaturedDetails" style="padding-bottom: 5px;">
                                        Views: 1 | Comments: 0</div>
                                </td>

                </div>
                <?php } ?>
            </td>
            <td><img src="img/pixel.gif" width="5" height="1"></td>
        </tr>
        <tr>
            <td><img src="img/box_login_bl.gif" width="5" height="5"></td>
            <td><img src="img/pixel.gif" width="1" height="5"></td>
            <td><img src="img/box_login_br.gif" width="5" height="5"></td>
        </tr>
    </tbody>
</table>