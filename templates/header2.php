<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr valign="top">
            <td rowspan="2" style="padding: 0px 5px 5px 5px;" width="130"><a href="index.php"><img src="./img/logo.png" alt="shitTube" width="120" height="48" border="0"></a></td>
            <td valign="top">

                <table width="670" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr valign="top">
                            <td style="padding: 0px 5px 0px 5px; font-style: italic;">Oh my god, it's another 2005 revival!</td>
                            <td align="right">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
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
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td width="100%">
                <div style="font-size: 12px; font-weight: bold; float: right; padding: 10px 5px 0px 5px;"><a href="upload.php">Upload</a> &nbsp;//&nbsp; <a href="browse.php">Browse</a> &nbsp;//&nbsp; <a href="my_friends_invite.php">Invite</a></div>
                <table cellspacing="0" cellpadding="2" border="0">
                    <tbody>
                        <tr>
                            <form method="GET" action="results.php"></form>
                            <td>
                                <input type="text" value="" name="search" size="30" maxlength="128" style="color:#ff3333; font-size: 14px; padding: 2px;">
                            </td>
                            <td>
                                <input type="submit" value="Search Videos">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<table style="margin: 5px 0px 10px 0px;" width="800" cellspacing="0" cellpadding="0" border="0" bgcolor="#D5E5F5" align="center">
	<tbody><tr>
		<td><img src="./img/box_login_tl.gif" width="5" height="5"></td>
		<td><img src="./img/pixel.gif" width="1" height="5"></td>
		<td><img src="./img/box_login_tr.gif" width="5" height="5"></td>
	</tr>
	<tr>
		<td><img src="./img/pixel.gif" width="5" height="1"></td>
		
		<td>

		<table width="790" cellspacing="0" cellpadding="0" border="0">
				<tbody><tr>
					<td>
						<table cellspacing="0" cellpadding="2" border="0">
						<tbody><tr>
							<td>&nbsp;<a href="index.php" class="bold">Home</a></td>
							<td>&nbsp;|&nbsp;</td>
							<td><a href="my_videos.php">My Videos</a></td>
							<td>&nbsp;|&nbsp;</td>
							<td><a href="my_favorites.php">My Favorites</a></td>
							<td>&nbsp;|&nbsp;</td>
							<td><a href="my_friends.php">My Friends</a></td>
							<!-- <td>&nbsp;|&nbsp;</td>
							<td><a href="my_groups.php" >My Groups</a></td> -->
							<td>&nbsp;|&nbsp;</td>
							<td><a href="my_messages.php">My Messages</a></td>
						</tr>
						</tbody></table>
					</td>
					<td align="right"><div style="padding: 2px;"><a href="my_profile.php"><img src="./img/icon_profile.gif" style="vertical-align: text-bottom; padding-left: 5px; padding-right: 1px;" width="14" height="14" border="0"></a> <a href="my_profile.php">My Profile</a>&nbsp;</div></td>
				</tr>
			</tbody></table>
			
			</td>
	
		<td><img src="./img/pixel.gif" width="5" height="1"></td>
	</tr>
	<tr>
		<td><img src="./img/box_login_bl.gif" width="5" height="5"></td>
		<td><img src="./img/pixel.gif" width="1" height="5"></td>
		<td><img src="./img/box_login_br.gif" width="5" height="5"></td>
	</tr>
</tbody></table>