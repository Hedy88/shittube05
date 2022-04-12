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
                    <?php 
                    if (!isset($_GET['u'])) {
                        echo '<div class="errorBox">Please Select A User.</div>';
                        die();
                    }
                    ?>
                    <div style="padding: 0px 5px 0px 5px;">
                    <?php include './templates/profilemain.php'; ?>
                    <?php include './templates/footer.php'; ?>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>