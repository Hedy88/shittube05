<div class="tableSubTitle">API Keys</div>
<span class="highlight">Introduction</span>
<div style="margin-left: 10px; margin-right: 10px; padding-top: 10px; padding-bottom: 10px;">
	API Keys are a way for your application to request signed in actions to our servers. 
	<br><br>
    With API Keys, you can create message bots and interate shitTube's features with your site or application.
    <br><br>
    However, misuse and abuse of this API will cause your API key to be rejected and an API Ban.
</div>
<span class="highlight">Request an API Key.</span>
<div style="margin-left: 10px; margin-right: 10px; padding-top: 10px; padding-bottom: 10px;">
    By clicking the link below, you will receive an API Key. If you already have a valid API Key, this button will reset and give you a new one.
    <br><br>
    <a href="./libs/api/genkey.php">Generate a new API Key</a>
</div>
<span class="highlight">Current API Key</span>
<div style="margin-left: 10px; margin-right: 10px; padding-top: 10px; padding-bottom: 10px;">
    WARNING: Do not publicly post your API Key. With your API Key, a person can comment and message on behalf.
    <br><br>
    Current API Key:
    <br><br>
    <?php 
    $username = $_SESSION['username'];
    $apisql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    
    $row = mysqli_fetch_assoc($apisql);
    ?>
    <div class="codeArea"><?php echo $row['apiKey']; ?></div>
</div>