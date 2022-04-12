<?php
$username = htmlspecialchars($_GET['u']);
$profile_sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

$row = mysqli_fetch_assoc($profile_sql);

$aboutme = htmlspecialchars($row['aboutme']);
$lastlogon = htmlspecialchars($row['lastLogin']);
?>
<div style="padding: 0px 5px 0px 5px;">
    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody>
            <tr valign="top">

                <td style="padding-right: 15px;" width="595">
                    <div style="border: 1px solid #CCCCCC; padding: 15px 15px 30px 15px;">
                        <div style="font-size: 18px; font-weight: bold; color: #CC6633; margin-bottom: 2px;">Hello. I'm <?php echo $username; ?>.</div>
                        <div class="profileLabel">Last logon:</div><?php echo $lastlogon; ?><div class="profileLabel">About Me:</div>
                        <?php echo $aboutme; ?>
                        <?php 
                        if (isset($_SESSION['username'])) {
                            if ($_SESSION['username'] == $username) {
                                echo '<div class="profileLabel">Edit your profile:</div>
                                <a href="./edit_profile.php">Edit Profile</a>
                                ';
                            }
                        }
                        ?>
                    </div>
                </td>

            <?php
            if (!isset($_SESSION["username"])) {
             include './templates/profile1.php'; 
            } else {
                include './templates/profile2.php';
            }
            ?>
            
            </tr>
            <tr>
                <td><img src="./img/box_login_bl.gif" width="5" height="5"></td>
                <td><img src="./img/pixel.gif" width="1" height="5"></td>
                <td><img src="./img/box_login_br.gif" width="5" height="5"></td>
            </tr>
        </tbody>
    </table>
</div>
</td>
</tr>


</tbody>
</table>

</div>