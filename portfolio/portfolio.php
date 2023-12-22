<?php
    date_default_timezone_set('Europe/Kiev'); 
    $currentHour = date('G');

    if ($currentHour >= 20 || $currentHour < 8) {
        $backgroundColor = "#1c1711"; 
        $textColor = 'blanchedalmond'; 
    } else {
        $backgroundColor = '#B7A99A'; 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo $textColor; ?>;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
</head>
<div id="topbot">
    <a href="#topsite" id="scrollBtn" onclick="coment_users()"><b>↓</b></a>
</div>
<a name="topsite"></a>
<link rel = "Stylesheet" href="portallini.css">
<body>
    <body>
        <div class="header">
            <div class="headlogo">
                <img class="logo" src="../ph/Que.png">
                <b class="namelogo">Que?</b>
            </div>
            <div class="headbotton">
                <a href="../home/home.php">Home</a>
                <a href="../about/about.php">About</a>
                <a href="portfolio.php">Portfolio</a>
                <a href="#contact">Contacts</a>
            </div>
        </div>
    
    <body>

    <div class="titleblock">
             <hr color=""></hr>
          <p id="title">Extensions developed under the "Battle-System" name</p>
          <hr color=""></hr>
    </div>


    
    <div>
        <p id="content">Table of Content</p>
        <hr color=""></hr>
        <ol start="1" class="contentdetails">
            <li><a href="#1">Clash!</a></li>
            <li><a href="#2">Rumble!</a></li>
            <li><a href="#3">Ticker!</a></li>
            <li><a href="#4">PDF!</a></li>
            <li><a href="#5">Marked!</a></li>
            <li><a href="#6">Flip!</a></li>
            <li><a href="#7">Scry!</a></li>
            <li><a href="#8">Smoke & Spectre!</a></li>
            <li><a href="#9">Theatre!</a></li>
            <li><a href="#10">Calendar!</a></li>

        </ol>
        <hr color=""></hr>
    </div>
    
    <div>
        
        <a name="1" class="artikletitleblock">Clash!</a>
        
        <pre class="textblock">Without diving too much into game rules Clash! helps Game Masters to automate initiative order, spend less time calculating hp, 
        <br /> and quickly reference creature's stat blocks mid-game.</pre>
        <?php include 'imagesClash.php'; ?>

        <a name="2" class="artikletitleblock">Rumble!</a>
        <pre class="textblock">Small chat window between players with advanced dice rolling commands.Rolls from Clash! logs themself here and as of late 2023, 
        <br />other extensions can send roll requests for Rumble!.</pre>
        <?php include 'imagesRumble.php'; ?>

        <a name="3" class="artikletitleblock">Ticker!</a>
        <pre class="textblock">A simple timer for GameMasters that also displays from the player's view. </pre>
        <?php include 'imagesTicker.php'; ?>

        <a name="4" class="artikletitleblock">PDF!</a>
        <pre class="textblock">Basic PDF reader to consult with the rulebook or your character sheet. </pre>
        <?php include 'imagesPDF.php'; ?>

        <a name="5" class="artikletitleblock">Marked!</a>
        <pre class="textblock">Tool to keep track of conditions. With the ability to create custom ones on the fly.</pre>
        <?php include 'imagesMarked.php'; ?>

        <a name="6" class="artikletitleblock">Flip!</a>
        <pre class="textblock">Tool to bind 2 tokens as 1 with the ability to change between them in 1 click.</pre>
        <?php include 'imagesFlip.php'; ?>

        <a name="7" class="artikletitleblock">Scry!</a>
        <pre class="textblock">In some scenes finding the correct token can take some time. Scry! is a scene-wide search for tokens.</pre>
        <?php include 'imagesScry.php'; ?>

        <a name="8" class="artikletitleblock">Smoke & Spectre!</a>
        <pre class="textblock">The successor to Dynamic Fog of War! (This project was taken over with permission from Armindo Flores)
        <a  href="https://www.reddit.com/r/OwlbearRodeo/comments/181iqkb/smoke_spectre_basic_walkthrough_video_dynamic_fog/?share_id=eRGbpM1zKbWFlJ-GbgDll&utm_content=1&utm_medium=android_app&utm_name=androidcss&utm_source=share&utm_term=1">Basics of Smoke & Spectre!</a>
        </pre>

        <a name="9" class="artikletitleblock">Theatre!</a>
        <pre class="textblock">Dialogue delivery tool themed to resemble your average JRPG dialogue box. It supports character portraits, paging,
        <br /> and direct messages. </pre>
        <?php include 'imagesTheatre.php'; ?>

        <a name="10" class="artikletitleblock">Calendar!</a>
        <pre class="textblock">9 months later Que? expanded his first extension.  Now you can create a custom calendar and moon phases. </pre>
        <?php include 'imagesCalendar.php'; ?>
    </div>


    <a name="bottomsite"></a>
    <p id="content">Comment</p>
    <div class="coment2"> <?php include 'comment_public.php'; ?></div>
    <form  action="script.php"  method="post" class="form1" name="web_form">
        <div class="formname">
            <label for="name" >Name:</label><br>
            <textarea id="name" name="name" type="text" placeholder="Alex"></textarea>
        </div>
        <div class="formname">
            <label >Extension</label><br>
            <select id="selec" name="select" >
                <option value="Clash!">Clash!</option>
                <option value="Rumble!">Rumble!</option>
                <option value="Ticker!">Ticker!</option>
                <option value="PDF!">PDF!</option>
                <option value="Marked!">Marked!</option>
                <option value="Flip!">Flip!</option>
                <option value="Scry!">Scry!</option>
                <option value="Smoke & Spectre!">Smoke & Spectre!</option>
                <option value="Theatre!">Theatre!</option>
                <option value="Calendar!">Calendar!</option>
            </select><br><br>
        </div>


        <div class="formname">
            <label for="impression">Your review:</label><br>
            <textarea id="impression"  style="width: 310px; height: 147px;" onclick="clearTextarea()" name="impression" type="text" >write now ...</textarea>
        </div>

        <button type="submit" name="submit" id="submitBtn"  onclick="coment_users()" class="button">Send</button>

    </form>


    
    <div>
        <a name="contact" id="titlecontact">Contacts</a>
        <ul type="squere" class="list">
            <li><a id="link" href="https://ko-fi.com/que_question_mark">Ko-fi</a></li>
            <li><a id="link" href="https://www.patreon.com/battlesystem">Patreon</a></li>
            <li><a id="link" href="https://discordapp.com/users/226551828106575881">Discord</a></li>
            <li>Email:  manuel@battle-system.com</li>
        </ul>
    </div>

    <script src="porfolio.js"></script>
    <script src="location.js"></script>
    </body>
</body>
</html>