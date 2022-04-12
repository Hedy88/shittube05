<?php
        $conn = new mysqli($mysql_data['db_host'], $mysql_data['db_user'], $mysql_data['db_pass'], $mysql_data['db_name']);
         
        if ($conn->connect_error) {
          die("Error: DB Connection Failed. If you are a user, Please report this to the HokCock Discord");
        }
?>