<table width="595" cellspacing="0" cellpadding="0" border="0" bgcolor="#E5ECF9" align="center">
			<tbody><tr>
				<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
				<td width="100%"><img src="img/pixel.gif" width="1" height="5"></td>
				<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
			</tr>
			<tr>
				<td><img src="img/pixel.gif" width="5" height="1"></td>
				<td style="padding: 5px 0px 10px 0px;">
				
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody>
					                    <tr valign="top">
                    <td style="border-right: 1px dashed #369; padding: 0px 10px 10px 10px; color: #444;" width="60%">
                    <div style="font-size: 16px; font-weight: bold; margin-bottom: 5px;">My Account Overview</div>
                    <strong>User Name</strong>: <a href="/profile.php?user=<?php echo htmlspecialchars($_SESSION['username']); ?>"><?php echo htmlspecialchars($_SESSION['username']); ?></a><br>
                    </td>
                    <td style="padding: 0px 10px 10px 10px; color: #444;" width="40%">
                    <div style="font-size: 14px; font-weight: bold; margin-bottom: 5px;">Things To Do</div>
                    <ul>
                    <li><a href="/my_profile.php">Edit Your Profile</a></li>
                    <li><a href="/my_videos_upload.php">Upload something</a></li>
                    </ul>
                    </td>
                    </tr>
									</tbody></table>
				
				</td>
				<td><img src="img/pixel.gif" width="5" height="1"></td>
			</tr>
			<tr>
				<td><img src="img/box_login_bl.gif" width="5" height="5"></td>
				<td><img src="img/pixel.gif" width="1" height="5"></td>
				<td><img src="img/box_login_br.gif" width="5" height="5"></td>
			</tr>
		</tbody></table>