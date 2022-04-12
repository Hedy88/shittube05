<table width="180" cellspacing="0" cellpadding="0" border="0" bgcolor="#EEEEDD" align="center">
			<tbody><tr>
				<td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
				<td><img src="./img/pixel.gif" width="1" height="5"></td>
				<td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="./img/pixel.gif" width="5" height="1"></td>
				<td width="170">

				<div style="padding: 2px 5px 10px 5px;">
				<div style="font-size: 14px; font-weight: bold; margin-bottom: 8px; color: #666633;">Last 4 users online... </div>
				<?php 
				$lastlogonsql = mysqli_query($conn, "SELECT * FROM users ORDER BY lastLogin DESC LIMIT 4");

				while ($row = mysqli_fetch_array($lastlogonsql)) {
					$username2 = htmlspecialchars($row['username']);
				?>
				
					<div style="font-size: 12px; font-weight: bold; margin-bottom: 5px;"><a href="profile.php?u=<?php echo $username2; ?>"><?php echo $username2; ?></a></div>

					<div style="font-size: 12px; margin-bottom: 8px; padding-bottom: 10px; border-bottom: 1px dashed #CCCC66;"><a href="profile_videos.php?user=<?php echo $username2; ?>"><img src="./img/icon_vid.gif" alt="Videos" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;" width="14" height="14" border="0"></a> (<a href="profile_videos.php?user=meesh">0</a>)
					 | <a href="profile_favorites.php?user=meesh"><img src="./img/icon_fav.gif" alt="Favorites" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;" width="14" height="14" border="0"></a> (<a href="profile_favorites.php?user=<?php echo $username2; ?>">0</a>)
					 | <a href="profile_friends.php?user=meesh"><img src="./img/icon_friends.gif" alt="Friends" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;" width="14" height="14" border="0"></a> (<a href="profile_friends.php?user=<?php echo $username2; ?>"><?php echo $username2; ?></a>)</div>

				<?php 
				}
				?>
				
									
				<div style="font-weight: bold; margin-bottom: 5px;">Icon Key:</div>
				<div style="margin-bottom: 4px;"><img src="./img/icon_vid.gif" alt="Videos" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;" width="14" height="14" border="0"> - Videos</div>
				<div style="margin-bottom: 4px;"><img src="./img/icon_fav.gif" alt="Favorites" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;" width="14" height="14" border="0"> - Favorites</div>
				<img src="./img/icon_friends.gif" alt="Friends" style="vertical-align: text-bottom; padding-left: 2px; padding-right: 1px;" width="14" height="14" border="0"> - Friends
				
				</div>

				</td>
				<td><img src="./img/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="./img/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="./img/pixel.gif" width="1" height="5"></td>
				<td><img src="./img/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>