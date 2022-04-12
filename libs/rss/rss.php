<?php 
include '../config/config.php';
include '../config/db_auth.php';
header( "Content-type: text/xml");

$rsql = mysqli_query($conn, "SELECT * FROM `videos` ORDER BY  `uploaded_on` DESC LIMIT 5");
?>
<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
    <channel>
        <title>shittube | RSS</title>
        <link>http://localhost/</link>
        <description>Get latest updates from our RSS feed</description>
        <language>en-us</language>
        <?php 
        while ($row = mysqli_fetch_array($rsql)) {
            $author = htmlspecialchars($row['uploaded_by']); 
            $desc = htmlspecialchars($row['description']);
            $date = htmlspecialchars($row['uploaded_on']);
            $title = htmlspecialchars($row['title']);
            $id = htmlspecialchars($row['id']);
        ?>
        <item>
            <author>rss@shittube (<?php echo $author; ?>)</author>
            <link>#</link>
            <description>
                <![CDATA[
                    <img src="http://localhost/thumbs.php?thumb=<?php echo $id; ?>"  align="right" border="0" width="120" height="90" vspace="4" hspace="4">
                    <p>
                        <?php echo $desc;?>
                    </p>
                    <p>
                        Author: <a href="http://localhost/profile.php?u=<?php echo $author; ?>"><?php echo $author; ?></a><br>
                        Added: <?php echo $date; ?>
                    </p>
                ]]>
            </description>
			<title><?php echo $title; ?></title>
			<credit><?php echo $author; ?></credit>
        </item>
        <?php } ?>
    </channel>
</rss>
