<?php
session_start();
if(!isset($_SESSION['username'])){

    header("Location:user_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>
    <nav align="center">
    <img class="logo" src="image/logo4.png">
    
    </nav> <br>
    <div align="center">
    <a href="user_profile.php">My profile</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
       
       
       <a class="nav" href="weight_condition.php">Weight Condition</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a class="nav" href="diet_plan.php">Diet Plan</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a class="nav" href="doctor_suggestion.php">Doctor Suggestion</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a class="nav" href="blood_collection.php">Blood Collection</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="logout.php">Logout</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    </div> <br> <br>

    <h1 align="center"> <?php echo $_SESSION['username']?> </h1>
    
   
   
    <h2 align="center">Collect Blood</h2>

    <?php
$user = $_SESSION['username'];
$con= mysqli_connect("localhost","root","","healthassistant");
$sql= "SELECT  `blood`, `username`, `Gender`, `phone`, `address` FROM `user`";
$res=mysqli_query($con,$sql);

?>
<table align="center" border="1">
<tr><td>Blood Group</td>
<td>Name</td>
<td>Gender</td>
<td>Contact Number</td>
<td>Address</td></tr>

<?php
 while($row=mysqli_fetch_assoc($res))
{ ?>

<tr><td><?php echo $row["blood"]?></td>
<td><?php echo $row["username"]?></td>
<td><?php echo $row["Gender"]?></td>
<td><?php echo $row["phone"]?></td>
<td><?php echo $row["address"]?></td></tr>






<?php
}
?>

</table>
</body>
</html>