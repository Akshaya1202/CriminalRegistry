<!DOCTYPE html>
<html>
    <head><title>All Criminals</title></head>
<style>
table, th, td {
  border:1px solid white;
  padding: 20px; 
}
body{
    background-image: url("https://source.unsplash.com/W_5Eakb1598");
    color: white;
    }

</style>

<?php
    include 'Cconnect.php';
    $sql = "select * from `criminals`";
    $result=mysqli_query($con,$sql);

    echo "<table style='width:100%'>
        <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Crime</th>
        <th>Gender</th>
        <th>Location</th>
        <th>Convicted</th>
        </tr>";

    while($record=mysqli_fetch_assoc($result)){
        $name=$record['name'];
        $age=$record['age'];
        $location=$record['location'];
        $crime=$record['crime'];
        $convicted=$record['convicted'];
        $gender=$record['gender'];
        
        include 'criminaldetails.php';
    }
    echo "</table>";

?>
</body>
</html>