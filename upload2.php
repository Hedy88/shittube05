<?php
include './libs/config/config.php';
include './libs/config/db_auth.php';
session_start();

include './libs/auth/checksession.php';
include './libs/uploader/uploader.php';
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
                    <div style="padding: 0px 5px 0px 5px;">
                    <?php include './templates/up2.php'; ?>
                    <?php include './templates/footer.php'; ?>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>