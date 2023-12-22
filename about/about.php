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
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <link rel = "Stylesheet" href="portal.css">
</head>
<body>
    <div id="head_main"></div>
    <div class="wrapper">
        <div id="weather" class="weather">
            
        </div>
    
    </div>
    <script src="about.js" type="text/babel"></script>
    <script src="weather.js" type="text/babel"></script>
</body>
</html>