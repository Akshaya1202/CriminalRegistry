<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'Cconnect.php';
    $name=$_POST['name'];
    $age=$_POST['age'];
    $location=$_POST['location'];
    $crime=$_POST['crime'];
    $convicted=$_POST['convicted'];
    $gender=$_POST['gender'];

    $sql="insert into `criminals` (name,age,location,crime,convicted,gender)
    values('$name','$age','$location','$crime','$convicted','$gender')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:allcriminals.php');
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add</title>
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
                <form action="addcriminals.php" method="post">
                    <fieldset>
                        <p>
                            <label for="name"><b>Name</b></label>
                            <input type="text" name="name" id="name" placeholder="Enter name" required>
                        </p>
                        <p>
                            <label for="age"><b>Age</b></label>
                            <input type="number" name="age" id="age" placeholder="Enter age" required>
                        </p>
                        <p>
                            <label for="location"><b>Location</b></label>
                            <input type="text" name="location" id="location" placeholder="Enter location" required>
                        </p>
                        <p>
                            <label for="crime"><b>Crime</b></label>
                            <input type="text" name="crime" id="crime" placeholder="Enter crime" required>
                        </p>
                        <p>
                            <label for="convicted"><b>Convicted</b></label>
                            <input type="number" name="convicted" id="convicted" required>
                        </p>
                        <p>
                            <label for="gender"><b>Gender</b></label>
                            <input type="text" name="gender" id="gender" placeholder="Enter gender" required>
                        </p>
                    
                    <button type="submit">Submit</button>
            </fieldset>
                </form>
            </div>
            </section>

        </main>
    
    </body>
</html>