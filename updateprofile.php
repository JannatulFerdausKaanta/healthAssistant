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





<?php
$con=mysqli_connect('localhost','root', '','healthassistant');


@$_GET['id'];
@$_GET['username'];
@$_GET['Gender'];
@$_GET['phone'];
@$_GET['address'];
@$_GET['blood'];
@$_GET['password'];
?>

    <h2 align="center">Update My Information</h2> <br> 



    <form method="get"  align="center">
    Id :
        <input type="number" name="eid" value="<?php echo $_GET['id']?>" disabled> <br> <br>
        Name :
        <input type="text" name="en" value="<?php echo $_GET['username']?>"> <br> <br>
        
        
         
        Gender : &nbsp
        <input type="text" name="egen"  value="<?php echo $_GET['Gender']?>"> 
        <br> <br>
        
        Contact Number :
        <input type="number" name="ecn" value="<?php echo $_GET['phone']?>"> <br> <br>
       
        Address :
        <input type="text" name="eaddr" value="<?php echo $_GET['address']?>"> <br> <br>
        Blood :
        <input type="text" name="esalary" value="<?php echo $_GET['blood']?>"> <br> <br>
        Password :
        <input type="text" name="epass" value="<?php echo $_GET['password']?>"> <br> <br>
        
        <input type="submit" name="Update" value="Update">
    </form>

    <?php
    if (isset($_GET['Update'])){

        $id=$_GET['eid'];
        $name=$_GET['en'];
     
        $gender=$_GET['egen'];
        $contact=$_GET['ecn'];
        
        $address=$_GET['eaddr'];
        $blood=$_GET['esalary'];
        $password=$_GET['epass'];
        
        
        
        
        
        $sql="UPDATE `user` SET `id`='$id',`username`='$name',`Gender`='$gender',`password`='$password',`phone`='$contact',`address`='$address',`blood`='$blood''WHERE
        `id`='$id'";

       $row=mysqli_query($con,$sql);
      
        if (isset($row)){
            header("Location:user_profile.php");
        }
      
        
}
    ?>







</body>
</html>