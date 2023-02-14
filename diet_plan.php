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
    <h2 align="center"> </h2> <br> 

   <Table border="1" align="center">
    <tr align="center">
      <td>
       <h3> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Calculate BMR  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h3>
          <p>Basal Metabolic Rate, known as BMR, is the rate at which the body expends energy to maintain essential life functions while at complete rest. The majority of these essential functions continue mostly unnoticed—things like the heart beating, the lungs inhaling and exhaling air, the kidneys filtering waste, new cell creation, maintaining proper body temperature, and more.</p>
          <a href="bmr.php" > <button>Click here</button></a><br><br>
      </td>
      <td align="center">
          <h3> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Calculate TDEE  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h3>
          <p>Total daily energy expenditure (TDEE) estimates how many calories your body burns daily by accounting for three major contributing factors: your basal metabolic rate (BMR), your activity level and the thermic effect of food metabolism.You think of TDEE as adding in everything you do in a normal day to your basal metabolic rate  calculation. And once you start using a TDEE calculator, weight loss will likely follow.</p>
          <a href="tdee.html" > <button>Click here</button></a><br><br>
      </td>
    </tr>
   </Table>




</body>
</html>