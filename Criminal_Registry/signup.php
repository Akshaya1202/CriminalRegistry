<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'Tconnect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql = "select * from `tourists` 
    where username='$username'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            //echo "User already exists";
            $user=1;
        }
        else{
            $sql="insert into `tourists` (username,password)
            values('$username','$password')";
            $result=mysqli_query($con,$sql);
            if($result){
                //echo "Signup successfull";
                $success=1;
                header('location:signin.php');
                }
            else{
                die(mysqli_error($con));
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="CRMS.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    </head>
    <body>
        <header>
            <h1> Crime Record Management System </h1>
        </header>
        <br>
        <br>
        <br>
                <div class="container">
                <form action="signup.php" method="post">
                    <h2> Sign Up </h2>
                    <fieldset>
                        <p>
                        <label for="email"><b>Username</b></label>
                        <input type="text" placeholder="Enter Email" name="username" required>
                        </p>
                        <p>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                        </p>
                    <br>
                    <div class="clearfix">
                        <button type="submit" class="signupbtn">Sign Up</button>
                        <?php
                        if($user){
                            echo '<div><h1>
                            <strong>Error!</strong> User already exists</h1>
                        </div>';
                        }
                        ?>
                      </div>
                    </div>
                    </fieldest>
                  </form>
                  
    </body>
    </html>

