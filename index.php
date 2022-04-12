<?php 
include './libs/config/config.php';
include './libs/config/db_auth.php';
session_start();
?>
<html>
    <head>
        <?php include './meta.php'; ?>
    </head>
    <body>
        <table width="800" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody>
                <tr>
                <td style="padding-bottom: 25px;" bgcolor="#FFFFFF">
                    <?php include './templates/header.php'; ?>
                    <div class="infoBox">welcome to shitTube's beta.</div>
                    <div style="padding: 0px 5px 0px 5px;">
                    <table width="790" cellspacing="0" cellpadding="0" border="0" align="center">
	                    <tbody>
                            <tr valign="top">
		                        <td style="padding-right: 15px;">
                                    <?php if (isset($_SESSION['username'])) {
                                        include './templates/home1loggedin.php';
                                    } else { include './templates/home1.php'; } ?> 
                                    <br>
                                    <?php include './templates/featuredvids.php'; ?>
                                </td>
                                <td width="180">
                                    <?php
                                    if (!isset($_SESSION['username'])) {
                                    include './templates/home2.php'; 
                                    }
                                    ?>
                                    <div style="margin-top: 10px;">
                                        <?php include './templates/contest.php'; ?>
                                    </div>
                                    <div style="margin-top: 10px;">
                                        <?php include './templates/lastlogon.php'; ?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php include './templates/footer.php'; ?>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>