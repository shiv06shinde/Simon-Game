<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Simon Game</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="new_game.css">
    </head>

    <body>

        <header>
            <img class="title_img" src="images/img4.jpg" alt="title image">
            <h1 class="title_name"><i>SIMON SAYS</i></h1>
        </header>

        <nav>
            <ul class="menubar">
                <li id="new"> New Game </li>
                <li id="level"> Level 
                    <div class="dropdown-content">
                       <span id="easy">Easy</span>
                       <span id="medium">Medium</span>
                       <span id="difficult">Difficult</span>
                    </div>
                </li>
                <!--<li id="multi"> Multi-Player 
                    <div class="dropdown-content drpdwn_cont">
                       <span>1-player</span>
                       <span>2-player</span>
                    </div>
                </li>-->
                <li id="exit"> Exit </li>
            </ul>
        </nav> 

        <div class="container" id="cont">
            <div class="game top_div">
                <button class="button btn green" id="green">
                    <div class="inner">
                        <i class="bottom right"></i>
                    </div>
                </button>

                <button class="button btn red" id="red">
                    <div class="inner">
                        <i class="bottom left"></i>
                    </div>
                </button>
            </div>

            <div class="circle">
            </div>
        
            <h2 class="center_text">SIMON</h2>

            <div class="game">
                <button class="button btn yellow" id="yellow">
                    <div class="inner">
                        <i class="top right"></i>
                    </div>
                </button>

                <button class="button btn blue" id="blue">
                    <div class="inner">
                        <i class="top left"></i>
                    </div>
                </button>
            </div>

            <h1 class="tostart_text" id="tostart"><i>TAP TO START THE GAME</i></h1>
            <h1 class="tostart_text1" id="game_over1"></h1>
            <h1 class="tostart_text1" id="game_over2"></h1>
        </div>

    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="game.js" charset="utf-8"></script>

</html>