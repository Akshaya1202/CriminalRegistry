<?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'Tconnect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "select * from `tourists` 
    where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:Home.html');
        }
        else{
            $invalid=1;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signin</title>
        <link rel="stylesheet" href="CRMS.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    </head>
    <body>
        <header>
            <br>
            <br>
            <br>
            <br>
            <h1> Crime Record Management System </h1>
        </header>
        <br>
        <br>
        <main>
            <section>
                <br>
                <br>
                <br>
                <h2> Sign in </h2>
                <div class="card">
                <form action="signin.php" method="post">
                    <fieldset>
                        <p>
                            <label for="Username"><b>Username</b></label>
                            <input type="text" name="username" id="username" placeholder="Enter your Police ID" required>
                        </p>
                        <p>
                            <label for="Password"><b>Password</b></label>
                            <input type="password" name="password" id="password" placeholder="Enter your password" required>
                        </p>
                    
                    <button type="submit">Sign in</button>

                    <?php
        if($invalid){
          echo '<div>
          <h1><strong>Error!</strong> Invalid data</h1>
        </div>';
        }
        ?>
            </fieldset>
                </form>
            </div>
            </section>

        </main>
    
    </body>
</html>