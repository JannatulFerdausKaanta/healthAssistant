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
    
   
   
    <h2 align="center">My Profile</h2>

    <?php
$user = $_SESSION['username'];
$con= mysqli_connect("localhost","root","","healthassistant");
$sql= "SELECT *FROM user Where username ='$user'";
$res=mysqli_query($con,$sql);

?>
<table align="center" border="1">

<?php
 while($row=mysqli_fetch_assoc($res))
{ ?>

<tr> <td>ID</td> <td><?php echo $row["id"]?></td></tr>
<tr><td>Name</td><td><?php echo $row["username"]?></td></tr>
<tr><td>Gender</td><td><?php echo $row["Gender"]?></td></tr> 
<tr><td>Contact Number</td><td><?php echo $row["phone"]?></td></tr>
<tr><td>Address</td><td><?php echo $row["address"]?></td></tr>
<tr><td>Blood Group</td><td><?php echo $row["blood"]?></td></tr>
<tr><td>Password</td><td><?php echo $row["password"]?></td></tr>

<tr >

<td colspan="2" ><button>&nbsp &nbsp &nbsp &nbsp &nbsp<a  href="updateprofile.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["username"] ?>&gender=<?php echo $row["Gender"] ?>&phone=<?php echo $row["phone"] ?>&address=<?php echo $row["address"] ?> &blood=<?php echo $row["blood"] ?>&password=<?php echo $row["password"] ?>" >  Update My Profile </a>&nbsp &nbsp &nbsp &nbsp &nbsp</button></td>

</tr>



<?php
}
?>

</table>
</body>
</html>