<div class="tableSubTitle">shitTube API</div>
<span class="highlight">Introduction</span>
<div style="margin-left: 10px; margin-right: 10px; padding-top: 10px; padding-bottom: 10px;">
	shitTube now has an API that you (yes, you) can mess arround with
	<br><br>
    With the shitTube API, you can create message bots and interate shitTube's features with your site or application.
    <br><br>
    However, misuse and abuse of this API will cause your IP to be API Banned
</div>
<span class="highlight">Getting Started</span>
<div style="margin-left: 10px; margin-right: 10px; padding-top: 10px; padding-bottom: 10px;">
    You can request an API key if you would like to add signed in actions to your application <a href="./api_key.php">here</a> (requires to be signned in).
</div>
<span class="highlight">Documentation</span>
<div style="margin-left: 10px; margin-right: 10px; padding-top: 10px; padding-bottom: 10px;">
    Our main API link is 
    <br><br>
    <div class="codeArea">http://<?php echo $sitename; ?>/api/</div>
    <div class="apiLabel">
		<span class="nav">/users/getuser.php?u=USERNAME_HERE</span>
		<br>
		<br>
		This (GET) request will return a user's info
	</div>
    <div class="codeArea">
    {
    <br>
        "username": "username",
    <br>
        "recent_vid": "users_recent_vid_id",
    <br>
        "lastLogin": "YYYY-MM-DD",
    <br>
        "isBanned": "returns_1_if_user_is_banned",
    <br>
        "aboutme": "users_aboutme",
    <br>
        "profile_link": "http://<?php echo $sitename; ?>/profile.php?u=username"
    <br>
    }
	</div>
    <div class="apiLabel">
		<span class="nav">/users/listusers.php</span>
		<br>
		<br>
		This request will list every user's information
	</div>
    <div class="codeArea">
    [
    <br>
        {
    <br>
            "username": "username",
    <br>
            "recent_vid": "users_recent_vid_id",
    <br>
            "lastLogin": "YYYY-MM-DD",
    <br>
            "isBanned": "returns_1_if_user_is_banned",
    <br>
            "aboutme": "users_aboutme",
    <br>
            "profile_link": "http://<?php echo $sitename; ?>/profile.php?u=username"
    <br>
        },
    <br>
        {
    <br>
            "username": "username2",
    <br>
            "recent_vid": "users_recent_vid_id",
    <br>
            "lastLogin": "YYYY-MM-DD",
    <br>
            "isBanned": "returns_1_if_user_is_banned",
    <br>
            "aboutme": "users_aboutme",
    <br>
            "profile_link": "http://<?php echo $sitename; ?>/profile.php?u=username2"
    <br>
        }
    <br>
    ]
	</div>
    <div class="apiLabel">
		<span class="nav">/video/getvideo.php?v=VIDEO_ID</span>
		<br>
		<br>
		This request will return video information
	</div>
    <div class="codeArea">
    {
    <br>
        "title": "video_title",
    <br>
        "id": "video_id",
    <br>
        "thumb": "http://<?php echo $sitename; ?>/thumbs.php?thumb=video_id",
    <br>
        "uploader": "uploader",
    <br>
        "video_link": "http://<?php echo $sitename; ?>/video.php?v=video_id",
    <br>
        "description": "video_description",
    <br>
        "uploaded_on": "YYYY-MM-DD"
    <br>
    }
    </div>
    <div class="apiLabel">
		<span class="nav">/video/featured.php</span>
		<br>
		<br>
		This request will return featured video information
	</div>
    <div class="codeArea">
[
    <br>
  {
    <br>
    "title": "video_title",
    <br>
    "id": "video_id",
    <br>
    "uploaded_on": "YYYY-MM-DD",
    <br>
    "thumb": "http://<?php echo $sitename; ?>/thumbs.php?thumb=video_id",
    <br>
    "uploader": "uploader",
    <br>
    "description": "video_description",
    <br>
    "video_link": "http://<?php echo $sitename; ?>/video.php?v=video_id",
    <br>
  },
  <br>
  {
    <br>
    "title": "video2_title",
    <br>
    "id": "video2_id",
    <br>
    "uploaded_on": "0000-00-00",
    <br>
    "thumb": "http://<?php echo $sitename; ?>/thumbs.php?thumb=video2_id",
    <br>
    "uploader": "uploader",
    <br>
    "description": "video2_description",
    <br>
    "video_link": "http://<?php echo $sitename; ?>/video.php?v=video2_id",
    <br>
  }
  <br>
]
    </div>
    <div class="apiLabel">
		<span class="nav">/video/recently_viewed.php</span>
		<br>
		<br>
		This request will return recently viewed video information
	</div>
    <div class="codeArea">
        [
        <br>
            {
            <br>
            "id": "video_id",
            <br>
            "thumbnail": "http:/<?php echo $sitename; ?>/thumbs.php?thumb=video_id",
            <br>
            "title": "video_title",
            <br>
            "secsago": "... minutes ago",
            <br>
            "video_link": "http:/<?php echo $sitename; ?>/video.php?v=video_id"
            <br>    
            },
            {
            <br>
            "id": "video_id",
            <br>
            "thumbnail": "http:/<?php echo $sitename; ?>/thumbs.php?thumb=video_id",
            <br>
            "title": "video_title",
            <br>
            "secsago": "... seconds ago",
            <br>
            "video_link": "http:/<?php echo $sitename; ?>/video.php?v=video_id"
            <br>    
            }
        <br>    
        ]
    </div>
    <div class="apiLabel">
		<span class="nav">/video/listvideo.php</span>
		<br>
		<br>
		This request will list all videos available
	</div>
    <div class="codeArea">
    [
        <br>
    {
    <br>
        "title": "video_title",
    <br>
        "id": "video_id",
    <br>
        "thumb": "http://<?php echo $sitename; ?>/thumbs.php?thumb=video_id",
    <br>
        "uploader": "uploader",
    <br>
        "video_link": "http://<?php echo $sitename; ?>/video.php?v=video_id",
    <br>
        "description": "video_description",
    <br>
        "uploaded_on": "YYYY-MM-DD"
    <br>
    },
    {
    <br>
        "title": "video_title",
    <br>
        "id": "video_id",
    <br>
        "thumb": "http://<?php echo $sitename; ?>/thumbs.php?thumb=video_id",
    <br>
        "uploader": "uploader",
    <br>
        "video_link": "http://<?php echo $sitename; ?>/video.php?v=video_id",
    <br>
        "description": "video_description",
    <br>
        "uploaded_on": "YYYY-MM-DD"
    <br>
    }
    <br>
    ]
    </div>
</div>
<span class="highlight">API Keys - Authentication Errors</span>
<div style="margin-left: 10px; margin-right: 10px; padding-top: 10px; padding-bottom: 10px;">
If you get an error while authenticating your API key, here is what it means:
    <div class="apiLabel">
		<span class="nav">API Key Invalid</span>
		<br>
		<br>
		This is the response when your API key is invalid
	</div>
    <div class="codeArea">
    {"response":"apiKey Invaild."}
    </div>
    <div class="apiLabel">
		<span class="nav">API Key Required</span>
		<br>
		<br>
		This is the response when an API key is required.
	</div>
    <div class="codeArea">
    {"response":"API Key Required"}
    </div>
</div>
<span class="highlight">API Key - Requests</span>
<div style="margin-left: 10px; margin-right: 10px; padding-top: 10px; padding-bottom: 10px;">
API Key Requests 
<div class="apiLabel">
		<span class="nav">/requests/comment.php?token=API_KEY&msg=COMMENT&video_id=VIDEO_ID</span>
		<br>
		<br>
		This request will make a comment a video
	</div>
    <div class="codeArea">
    {"response":"Comment Successfully Added."}
    </div>
</div>