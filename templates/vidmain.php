<?php 
$id = htmlspecialchars($_GET['v']);
$psql = mysqli_query($conn, "SELECT * FROM videos WHERE id = '$id'");
$lastWatched = date('Y-m-d H:i:s');
$p2sql = mysqli_query($conn, "UPDATE videos SET lastWatched = '$lastWatched' WHERE id = '$id'");
$row = mysqli_fetch_assoc($psql);

$title = htmlspecialchars($row['title']);
$description = htmlspecialchars($row['description']);
$video = htmlspecialchars($row['file']);
$date = htmlspecialchars($row['uploaded_on']);
$uploaded_by = htmlspecialchars($row['uploaded_by']);
?>
<table width="795" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody>
        <tr valign="top">
            <td style="padding-right: 15px;" width="515">
                <div class="tableSubTitle"><?php echo $title; ?></div>
                <div style="font-size: 13px; font-weight: bold; text-align:center;">
                    <a href="mailto:?subject=<?php echo $title; ?>&amp;body=localhost/watch.php?v="<?php echo $id; ?>">Share</a>
                    // <a href="#comment">Comment</a>
                    // <a href="add_favorites.php?video_id=73c9qLgCQ-k" target="invisible" onclick="return FavoritesHandler();">Add to
                            Favorites</a>                    // <a href="outbox.php?user=#&amp;subject=#">Contact Me</a>
                </div>
				<div id="interactDiv">
	<div id="playerDiv" style="padding-bottom: 10px; padding-top: 10px;">
				<link rel="stylesheet" href="./libs/05player/player.css">
				<figure id="videoContainer" oncontextmenu="return false;">
					<video id="video" controls preload="metadata" width="425" height="350" src="<?php echo $video; ?>"><object width="425" height="350"><param name="movie" value="player2.swf?video_id=<?php echo $video; ?>&l=<?php echo $length; ?>"</param><embed src="player2.swf?video_id=<?php echo $video; ?>&l=<?php echo $length; ?>" type="application/x-shockwave-flash" width="425" height="350"></embed></object>	
					</video>
					<div id="video-controls" class="controls" data-state="hidden">
						<button id="playpause" type="button" data-state="play">Play/Pause</button>
						<div class="progress">
							<progress id="progress" value="0" min="0">
								<span id="progress-bar"></span>
							</progress>
						</div>
						<button id="mute" type="button" data-state="mute">Mute/Unmute</button>
					</div>
				</figure>
				
				<script src="./libs/05player/player.js"></script>
				</div>	
			
				</div>	
                                <table width="425" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                    <tr>
                        <td>
                            <div class="watchDescription">
                                <?php echo $description; ?>
                                <div class="watchAdded" style="margin-top: 5px;">
                                </div>
                            </div>
                            <div class="watchAdded">
                                Added: <?php echo $date; ?> by <a href="profile.php?user=<?php echo $uploaded_by; ?>"><?php echo $uploaded_by; ?></a> //
                                <a href="profile_videos.php?user=<?php echo $uploaded_by; ?>">Videos</a> | <a href="profile_favorites.php?user=<?php echo $uploaded_by; ?>">Favorites</a>
                                (1)
                            </div>
                            <div class="watchDetails">
                                Views: Placeholder | <a href="#comment">Comments</a>: Placeholder
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!-- watchTable -->
                <!-- watchTable -->
                <div style="padding: 15px 0px 10px 0px;">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#E5ECF9" align="center">
                        <tbody>
                        <tr>
                            <td><img src="img/box_login_tl.gif" width="5" height="5"></td>
                            <td width="100%"><img src="img/pixel.gif" width="1" height="5"></td>
                            <td><img src="img/box_login_tr.gif" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <form name="linkForm" id="linkForm"></form>
                            <td><img src="img/pixel.gif" width="5" height="1"></td>
                            <td align="center">
                                <div style="font-size: 11px; font-weight: bold; color: #CC6600; padding: 5px 0px 5px 0px;">
                                    Share this video! Copy and paste this link:
                                </div>
                                <div style="font-size: 11px; padding-bottom: 15px;">
                                    <input name="video_link" type="text" onclick="javascript:document.linkForm.video_link.focus();document.linkForm.video_link.select();" value="http://<?php echo $sitename; ?>/video.php?v=<?php echo $id; ?>" size="50" readonly="true" style="font-size: 10px; text-align: center;">
                                </div>
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
                </div>
                <?php include './templates/comment.php'; ?>
                            </td>
            <td width="280">
                <table width="280" cellspacing="0" cellpadding="0" border="0" bgcolor="#CCCCCC" align="center">
                    <tbody>
                    <tr>
                        <td><img src="img/box_login_tl.gif" width="5" height="5"></td>
                        <td><img src="img/pixel.gif" width="1" height="5"></td>
                        <td><img src="img/box_login_tr.gif" width="5" height="5"></td>
                    </tr>
                    <tr>
                        <td><img src="img/pixel.gif" width="5" height="1"></td>
                        <td width="270">
                            <div class="moduleTitleBar">
                                <table width="270" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                    <tr valign="top">
                                        <td>
                                            <div class="moduleFrameBarTitle">Tag
                                                // <?php echo $title; ?>                                                
                                            </div>
                                        </td>
                                        <td align="right">
                                            <div style="font-size: 11px; margin-right: 5px;"><a href="results.php?&amp;search=chinese+cs+hacks+" target="_parent">See more Results</a></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <iframe id="side_results" name="side_results" src="vidlist.php" scrolling="auto" marginheight="0" marginwidth="0" width="270" height="400" frameborder="0">
                                [Content for browsers that don't support iframes goes here]
                            </iframe>
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
                <br>
				            </td>
        </tr>
        </tbody>
    </table>
            </div>
    </td></tr>
    </tbody>
</table>
                
    </table>