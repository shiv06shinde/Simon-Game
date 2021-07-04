<!DOCTYPE html>
<html lang="en">

    <head>
        <title>How to play</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style>

        body{
        }

        div{
            margin: 50px 50px 38px 50px;
            border: 5px solid gray;
            padding: 20px;
            display: none;
        }

        ul {
            font-size: 28px;
            color: white;
        }

        h1{
            text-decoration: underline;
            text-align: center;
        }

        button{
            padding: 15px 50px;
            margin-left: 620px;
            border-radius: 10px;
            background-color: #e0cad2;
            border: 1px solid black;
        }

    </style>

    <body>
        <div id="panel">
            <h1>HOW TO PLAY :</h1>
            <ul style="line-height:200%;list-style-type:square">
                <li>Press the START button. Simon will give the first signal. Repeat the signal by pressing the same color lens.</li>
                <li>Simon will duplicate the first signal and add one. Repeat these two signals by pressing the same color lenses, in order.</li>
                <li>Simon will duplicate these first two signals and add one.</li>
                <li>Continue playing as long as you can repeat each sequence of signals correctly. After the 4th, 8th and 10th signals in a sequence, Simon automatically speeds up.</li>
                <li>Before starting the game choose the level of difficulty.</li>
            </ul>
            <button id="back"><b>BACK</b></button>
            <audio autoplay loop>
            <source src="themes/Superboy.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        </div>

    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#panel").slideDown("medium",function(){
                
                $("body").css({background:'linear-gradient(#e87ba9,#ed619c,#d44c85,#e00b65,#ad024a,#87043b)'});
                
            });
            
        })

        $('#back').click(function(){
            window.location.replace("menu.php");
        });
    </script>

</html>