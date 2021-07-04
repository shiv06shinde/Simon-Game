<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style>

        body{
            background-color: black;
        }

        img{
            width: 60%;
            margin-left: 20%;
            margin-top: 50px;
        }

        h2{
            margin-top: 40px;
            margin-left: 42%;
            margin-bottom: 20%;
            color: white;
            animation:blinkingText 3s infinite;
        }
        @keyframes blinkingText{
            0%{     color: white;    }
            20%{    color: transparent;    }
            49%{    color: white;    }
            60%{    color: transparent; }
            100%{   color: white;    }
        }

    </style>

    <body onclick="gotomenu()">

        <audio autoplay loop>
            <source src="themes/Intro Screen.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        
        <img src="images/img3.gif" alt="Simon game">
        <h2>TAP  TO CONTINUE....</h2>

    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        function gotomenu(){
            window.location.replace("menu.php");
        }

        $(document).ready(function(){
            
        })

    </script>

</html>

<!--
1] difficulty levels
2] no of tries
3] high score
4] 2-player game

-->