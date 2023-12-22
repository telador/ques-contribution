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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
</head>
<link rel = "Stylesheet" href="port.css">
<body>
    <div class="header">
        <div class="headlogo">
            <img class="logo" src="../ph/Que.png">
            <b class="namelogo">Que?</b>
        </div>
        <div class="headbotton">
            <a href="home.php">Home</a>
            <a href="../about/about.php">About</a>
            <a href="../portfolio/portfolio.php">Portfolio</a>
            <a href="#contact">Contacts</a>
        </div>
    </div>

    <div id="titlepage">
        <h1 id="title">Que?'s contribution to Owlbear</h1> 
    </div>
    <div>

        <a id="textblock">Owlbear is a simple system-agnostic VTT. It was created by 2 people in early 2020 and is gaining regular updates. </a> 

        <img class="photoblock" src="../ph/owlbear.png">
    </div>
    <div>
            <p class="textblock2"> <?php include 'text.php'; ?></p>
            <img class="photoblock" src="../ph/extensions.png">
    </div>
    <form action="" class="form1" id="login-form">
        <div class="formname">
            <h2>Log in</h2>
        </div>
        <div class="formname">
            <label for="email">Email *</label><br>
            <input type="email" id="email" name="email"  placeholder="your email..." required><br>
        </div>
        <div class="formname">
            <label  for="password">Password *</label><br>
            <input type="password" id="password" name="password" required>
            
        </div>
        </div>
        <div id="error" style="color:red"></div>
        <button  type="button" class="button" onclick="login()">Log in</button>
        <div class="input_output">
            <p>Unregistered? <a href="#as" onclick="toggleForm()">Sing up</a></p>
        </div>
        </form>

    <form action="registration.php"  method="post" id="register-form" style="display:none"  class="form1">
        <div class="formname">
		    <h2>Sing up</h2>
        </div>
        <div class="formname">
		    <label for="reg-email">Email *</label>
		    <input type="email" id="reg-email" name="reg-email" required><br><br>
            <div id="email-error" style="color:red;"></div>
        <script src="validate-email.js"></script>
		</div>
        <div class="formname">
            <label for="reg-password">Password: *</label>
		    <input type="password" id="reg-password" name="reg-password" required><br><br>
        </div>
        <div class="formname">
            <label for="confirm-password">Password confirmation *</label>
		    <input type="password" id="confirm-password" name="confirm-password" required><br><br>
        </div>
        <div id="error2" style="color:red"></div>
        <button onclick="register()" name="submit" type="button" class="button">Sing up</button>
        <div class="input_output">
		    <p>Already have an account?<a href="#as" onclick="toggleForm()">Log in</a></p>
        </div>
    </form>

    <form id="exit-form" style="display:none"  class="form1">
        <button onclick="exit_id()" class="button">Log out</button>
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
    <script src="home.js"></script>
</body>
</html>