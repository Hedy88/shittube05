<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody><tr valign="top">
		<td rowspan="2" style="padding: 0px 5px 5px 5px;" width="130"><a href="index.php"><img src="./img/logo.png" alt="shitTube" style="vertical-align: middle; " width="120" height="48" border="0"></a></td>
		<td valign="top">
		
		<table width="670" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr valign="top">
				<td style="padding: 0px 5px 0px 5px; font-style: italic;">Down the shitter™</td>
				<td align="right">
				
				<table cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
		
							
					<?php if (!isset($_SESSION['username'])) { ?>
                        <td><a href="signup.php" class="bold">Sign Up</a></td>
                        <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                        <td><a href="login.php">Log In</a></td>
                        <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                        <td style="padding-right: 5px;"><a href="help.php">Help</a></td>
                    <?php } else {?>
                        <td>Welcome, <?php echo htmlspecialchars($_SESSION['username']);?></td>
                        <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                        <td><a href="upload.php">Upload</a></td>
                        <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                        <td><a href="./libs/auth/logout.php">Logout</a></td>
                        <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                        <td style="padding-right: 5px;"><a href="help.php">Help</a></td>
                    <?php } ?>
		
										
					</tr>
				</tbody></table>
				
				</td>
			</tr>
		</tbody></table>
		</td>
	</tr>
	<tr valign="bottom">
		<td>
		
		<table cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
				<td>
				<table style=" background-color: #DDDDDD; margin: 5px 2px 0px 5px; border-bottom: 1px solid #DDDDDD; " cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./img/pixel.gif" width="1" height="5"></td>
						<td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="index.php">Home</a></td>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./img/pixel.gif" width="1" height="5"></td>
						<td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="browse.php">Videos</a></td>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./img/pixel.gif" width="1" height="5"></td>
						<td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="channels.php">Channels</a></td>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./img/pixel.gif" width="1" height="5"></td>
						<td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="upload.php">Upload</a></td>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
				<td>
				<table style=" background-color: #BECEEE; margin: 5px 2px 1px 0px; " cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
						<td><img src="./img/pixel.gif" width="1" height="5"></td>
						<td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
					</tr>
					<tr>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
						<td style="padding: 0px 20px 5px 20px; font-size: 13px; font-weight: bold;"><a href="my_friends_invite.php">Invite Friends</a></td>
						<td><img src="./img/pixel.gif" width="5" height="1"></td>
					</tr>
				</tbody></table>
				</td>
			</tr>
		</tbody></table>
		</td>
	</tr>
	
</tbody></table>
<table style="margin-bottom: 10px;" width="800" cellspacing="0" cellpadding="0" border="0" bgcolor="#DDDDDD" align="center">
	<tbody><tr>
		<td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
		<td><img src="./img/pixel.gif" width="1" height="5"></td>
		<td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
	</tr>
	<tr>
		<td><img src="./img/pixel.gif" width="5" height="1"></td>
		<td style="padding: 2px;" width="790" align="center">

		<table cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
				<td style="font-size: 10px;">&nbsp;</td>
				
								
				<td><a href="my_videos.php">My Videos</a></td>
				<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="my_favorites.php">My Favorites</a></td>
				<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="my_friends.php">My Friends</a></td>
				<!-- <td>&nbsp;|&nbsp;</td>
				<td style="  "><a href="my_groups.php">My Groups</a></td> -->
				<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="my_messages.php">My Messages</a></td>
				<td style="padding: 0px 10px 0px 10px;">|</td>
				<td><a href="my_profile.php">My Profile</a></td>
				
								
								
								
				<td style="font-size: 10px;">&nbsp;</td>
			</tr>
		</tbody></table>
			
		</td>
		<td><img src="./img/pixel.gif" width="5" height="1"></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #FFFFFF"><img src="./img/box_login_bl.gif" width="5" height="5"></td>
		<td style="border-bottom: 1px solid #BBBBBB"><img src="./img/pixel.gif" width="1" height="5"></td>
		<td style="border-bottom: 1px solid #FFFFFF"><img src="./img/box_login_br.gif" width="5" height="5"></td>
	</tr>
</tbody></table>