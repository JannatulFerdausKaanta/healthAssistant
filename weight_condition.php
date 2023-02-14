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
    <h2 align="center">Weight Condition</h2> <br> 

    <form action= "" method="post" align="center">
       
         Your Weight (kg):  <input type="text" id="w" name="weight"><br><br>
         Your Height (cm):  <input type="text" id ="h" name="height"><br><br>
         <br>
         <input type="button" value="Calculate BMI" onClick="calculateBmi()"><br />
          <br>
          <div id="bm"></div>
          <div id="output">YOUR BMI</div>
    </form>

    <script>
     function calculateBmi() 
{

	var weight = document.getElementById('w').value
	var height = document.getElementById('h').value
	
	if(weight > 0 && height > 0)
	{	
		var BMI = weight/(height/100*height/100)
		document.getElementById("bm").innerHTML = BMI
		
		if(BMI < 18.5)
		{
			document.getElementById("output").innerHTML =  "Underweight"
		}
		
		if(BMI > 18.5 && BMI < 25)
		{
			document.getElementById("output").innerHTML =  "Normal Weight"
		}
		
		if(BMI > 25)
		{
			document.getElementById("output").innerHTML = "Overweight"
		}
	}
}


    </script>





</body>
</html>