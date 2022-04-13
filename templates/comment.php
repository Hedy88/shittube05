<a name="comment"></a>
<?php if (isset($_SESSION['username'])) {?>
<div style="padding-bottom: 5px; font-weight: bold; color: #444;">Comment on this video:</div>
<form name="comment_form" id="comment_form" method="post" action="./libs/comments/comment.php" target="invisible">
    <input type="hidden" name="video_id" value="<?php echo $id; ?>">
    <textarea style="resize: none;" name="comment" cols="55" rows="3"></textarea>
    <br>
    <input type="submit" name="comment_button" value="Add Comment">
</form>
<br>
<?php } ?>
<?php 
$commentsql = mysqli_query($conn, "SELECT * FROM comment WHERE video_id = '$id'");
?>
<div class="commentsTitle">Comments:</div>
<?php 
while ($row = mysqli_fetch_array($commentsql)) {
    $comment = htmlspecialchars($row['comment']);
    $cposter = htmlspecialchars($row['poster']);
    $cdate = htmlspecialchars($row['date']);
?>
<div class="commentsEntry">"<?php echo $comment; ?>"<br> - <a href="profile.php?u=<?php echo $cposter; ?>"><?php echo $cposter; ?></a> // <a href="profile_videos.php?user=grkb">Videos</a> 
    | <a href="profile_favorites.php?user=grkb">Favorites</a>
    (4) - (<?php echo $cdate; ?>)
</div>
<?php } ?>
</td>