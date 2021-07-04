<?php
        include("connect.php");
        if(isset($_POST["submit1"])){
            $user=$_POST["username"];
            $pass=$_POST["password"];
            $email=$_POST["email"];
            $msg=null;
            
            $sql="Select * from credentials where user_name='$user' ";
            
            $res=mysqli_query($conn,$sql);

            if(! $res)
            {
                echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
            }

            if(mysqli_num_rows($res)>0){
                $msg= "Username already exists!! Re-enter the credentials to sign up";
            }
            else{
                $sql1="INSERT INTO credentials (user_name,user_password,user_email) VALUES ('$user',('$pass'),'$email');";
                
                if(mysqli_query($conn,$sql1)){
                    $msg= "You have successfully registered!!<br>Please sign-in to start the game.";
                }else{
                    echo "ERROR: Could not execute insert $sql1. " . mysqli_error($conn);
                   }
            };
            //header('Refresh: 3; url=register.php');
        }
        
    mysqli_close($conn);
?>


<?php
        include("connect.php");
        if(isset($_POST["submit"])){
            $user=$_POST["username"];
            $pass=$_POST["password"];
            $msg1=null;
            
            $sql="Select * from credentials where user_name='$user' and user_password= ('$pass')";
            
            $res= mysqli_query($conn,$sql);

            if(! $res)
            {
                echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
            }

            if(mysqli_num_rows($res)>0){
                header('Refresh: 1; url=home.php');
            }
            else{
                $msg1="Invalid Username or Password!!";
            };
            //header('Refresh: 3; url=register.php');
        }
        
    mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Width=device-width , initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"
    crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SIMON GAME</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    h3{
        margin-top: 20px;
        margin-bottom: 10px;
    }
</style>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="post" action="<?php $_SERVER['PHP_SELF']?>" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn solid">
                    <br>
                    <p><a href="change_password.php">Forgot Your Password?</a></p>

                    <h3><?php if(!empty($msg)){echo $msg;header('refresh:3,url=login.php');}
                                else if(!empty($msg1)){echo $msg1;header('refresh:300,url=login.php');}?>
                    </h3>

                    <!--<p class="social-text">Or sign in with social platform</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa fa-linkedin-in"></i>
                        </a>
                    </div>-->
                </form>


                <form method="post" action="<?php $_SERVER['PHP_SELF']?>" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <input type="submit" name="submit1" value="Sign up" class="btn solid">
                   
                    <!--<p class="social-text">Or sign up with social platform</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa fa-linkedin-in"></i>
                        </a>
                    </div>-->
                </form>
            </div>
        </div>
        <div class="panels-container">            
            <div class="panel left-panel">
                <div class="content">
                    <h3>One of us</h3>
                    <p>Welcome back , keep computing with your friends and score as high
                        as you can.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>

                <img src="images/game.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>New here</h3>
                    <p>Hello Welcome to the game. Follow the
                        colour pattern as long as you can and set your own record.
                    </p> 
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>

                <img src="images/Login.svg" class="image" alt="">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="myscript.js"></script>
    <script>
        $('#login').click(function(){
            window.location.replace('home.php')
        });
    </script>

</body>
</html>