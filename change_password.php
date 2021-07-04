<?php
        include("connect.php");
        if(isset($_POST["submit"])){
            $user=$_POST["username"];
            $curr_pass=$_POST["password"];
            $new_pass=$_POST["new_password"];
            $msg=null;
            $msg1=null;

            $sql="Select * from credentials where user_name='$user' and user_password=('$curr_pass')";
            
            $res=mysqli_query($conn,$sql);

            if(! $res)
            {
                echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
            }

            if(mysqli_num_rows($res)>0){
                $sql1 = "UPDATE credentials SET user_password=('$new_pass') where user_name='$user' ";
                if(mysqli_query($conn,$sql1)){
                    $msg= "Your password has been changed successfully";
                }
                else{
                    echo "ERROR: Could not execute $sql1. " . mysqli_error($conn);
                }
                
            }
            else{
                $msg1="Failed to change the password.Recheck your entries";
            }
            //header('Refresh: 3; url=register.php');
        }
        
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
    </head>
    <style>
        .register{
            border: 1px solid black;
            width: 500px;
            height: 300px;
            text-align: center;
            margin: 0 auto;
        }


    </style>
    <body>
        <div class="register">
            <h1>!!CHANGE PASSWORD!!</h1>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <label><b>USERNAME:</b></label>
                <input type="text" name="username" placeholder="Enter Username" required <?php if(!empty($msg)){ echo "disabled";} ?> ><br><br>
                <label><b>CURRENT PASSWORD:</b></label>
                <input type="text" name="password" placeholder="Enter Current Password" required <?php if(!empty($msg)){ echo "disabled";} ?> ><br><br>
                <label><b>NEW PASSWORD:</b></label>
                <input type="text" name="new_password" placeholder="Enter New Password" required <?php if(!empty($msg)){ echo "disabled";} ?> ><br><br>
                <input type="submit" name="submit" value="Submit" <?php if(!empty($msg)){ echo "disabled";} ?> >
            </form>
            <h3><?php if(!empty($msg1)){echo $msg1;} ?></h3>
        </div>

        <?php
        if(!empty($msg)){
            echo "<div style='border: 1px solid black;
            text-align: center;
            width: 500px;
            margin: 0 auto;
            margin-top: 100px;
            display: show;'>
        
            <h3>$msg</h3>
            <a href='login.php'><button>Back</button></a>
        </div>";
        }
        ?>
       
    </body>

    

</html>