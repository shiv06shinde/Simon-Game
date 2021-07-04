<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Menu Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style>

        body{
            background-image: url(images/img1.jpg);
        }

        div{
            margin-top: 8%; 
            margin-left: 50px;
        }

        .button1{
            position: relative;
            padding: 30px 115px;
            border-radius: 40px;
            font-size: 22px;
            outline: none;
            color: white;
            background: linear-gradient(#fae969,#f2b80a,#916e06);
            animation: btn1 1s 1;
            animation-direction: normal;
        }

        @keyframes btn1 {
            0%  {left: 77%; top: 30px;}
            100% {left: 38%; top: 30px;}
        }

        .button1:hover{
            padding: 40px 145px;
            border-radius: 60px;
            left: 36%;
        }

        .button2{
            position: relative;
            padding: 30px 108px;
            border-radius: 40px;
            font-size: 22px;
            outline: none;
            color: white;
            background: linear-gradient(#2becff,#059dab,#047c87);
            animation: btn2 1s 1;
            animation-direction: normal;
        }

        @keyframes btn2 {
            0%  {left: 77%; top: 30px;}
            100% {left: 38%; top: 30px;}
        }

        .button2:hover{
            padding: 40px 145px;
            border-radius: 60px;
            left: 36%;
        }

        .button3{
            position: relative;
            padding: 30px 102px;
            border-radius: 40px;
            font-size: 22px;
            outline: none;
            color: white;
            background: linear-gradient(#2becff,#059dab,#047c87);
            animation: btn3 1s 1;
            animation-direction: normal;
        }

        @keyframes btn3 {
            0%  {left: 0%; top: 30px;}
            100% {left: 38%; top: 30px;}
        }

        .button3:hover{
            padding: 40px 138px;
            border-radius: 60px;
            left: 36%;
        }

        .button4{
            position: relative;
            padding: 30px 152px;
            border-radius: 40px;
            font-size: 22px;
            outline: none;
            color: white;
            background: linear-gradient(#e85f68,#73062a,#4f021b);
            animation: btn4 1s 1;
            animation-direction: normal;
        }

        @keyframes btn4 {
            0%  {left: 77%; top: 30px;}
            100% {left: 38%; top: 30px;}
        }

        .button4:hover{
            padding: 40px 188px;
            border-radius: 60px;
            left: 36%;
        }

        .button1,.button2, .button3, .button4{
            left: 38%;
            top: 30px;
            margin-top: 30px;
        }

        .center {
            position: fixed;
            left: 35%;
            top: 30%;
            width: 30%;
            border-radius: 10px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 8px 16px 0 grey, 0 10px 24px 0 grey;
        }

        .hideform {
            display: none;
        }

        .center span{
            font-size: 30px;
        }
        
        .btn{
            padding: 10px 30px;
            background-color: lightgrey;
            border-radius: 10px;
            font-size: 20px;
            margin-top: 40px;
            margin-left: 20px;
        }

        .btn:hover{
            padding: 15px 35px;
        }

        #close{
            background-color: red;
            color: white;
        }

        #close:hover{
            padding: 5px 8px;
        }

    </style>


    <body>
        <div>
            <button onclick="new_game()" class="button1"><b>NEW GAME</b></button><br>
            <!--<button onclick="high_score()" class="button2"><b>HIGH SCORE</b></button><br>-->
            <button onclick="how_to_play()" class="button3"><b>HOW TO PLAY</b></button><br>
            <button onclick="closethegame()" class="button4"><b>EXIT</b></button>
        </div>

        <audio autoplay loop >
            <source id="theme" src="themes/Ipsi.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <div class="center hideform">
            <button id="close" style="float: right;">X</button>
            <span> Are you sure, you want to exit ?</span><br>
            <button class="btn" id="Yes">Yes</button>
            <button class="btn" id="No">No</button>
        </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">

            function closethegame(){
			}

            function how_to_play(){
                window.location.replace("how_to_play.php");
            }

            function high_score(){
                window.location.replace("high_score.php");
            }

            function new_game(){
                window.location.replace("new_game.php");
            }

            $('.button4').on('click', function () {
                $('.center').show();
            })

            $('#close').on('click', function () {
                $('.center').hide();
            })

            $('#No').on('click', function () {
                $('.center').hide();
            })

            $('#Yes').on('click', function () {
                window.location.replace("home.php");
            })

    </script>

</html>