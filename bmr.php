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

    
    <h2 align="center">Calculate Your BMR </h2> <br> 

    <form action= "" method="post" align="center">
    <div>
    Gender: <label for="bmrc-male">Male</label>
    <input type="radio" value="m" name="bmrc-gender" id="bmrc-male" checked />
    <label for="bmrc-female">Female</label>
    <input type="radio" value="f" name="bmrc-gender" id="bmrc-female" />
  </div>
  <div><br>
    <label for="bmrc-age">Age:</label>
    <input type="number" id="bmrc-age" />
  </div>
    <br><div>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<label for="bmrc-height">Height: </label>
    <input type="number" id="bmrc-height" />
    <label for="bmrc-inches">Inches</label>
    <input type="radio" value="in" name="bmrc-height-unit" id="bmrc-inches" checked />
    <label for="bmrc-centimeters">Centimeters</label>
    <input type="radio" value="cm" name="bmrc-height-unit" id="bmrc-centimeters" />
  </div><br> 
  <div>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<label for="bmrc-weight">Weight: </label>
    <input type="number" id="bmrc-weight" />
    <label for="bmrc-pounds">Pounds</label>
    <input type="radio" value="lb" name="bmrc-weight-unit" id="bmrc-pounds" checked />
    <label for="bmrc-kilograms">Kilograms</label>
    <input type="radio" value="kg" name="bmrc-weight-unit" id="bmrc-kilograms" />
  </div><br>
  <div>
  <button id="bmrc-button">Calculate</button><br>
  </div><br>
  <div>
    BMR: <input type="text" id="bmrc-result" disabled />
  </div>
    
    </form>

    <script>
  var button = document.querySelector('#bmrc-button');
var result = document.querySelector('#bmrc-result');

var gender;
var age;
var height;
var heightUnit;
var weight;
var weightUnit;

var genderCalc = function() {
  if (gender === 'm') {
    return 66;
  } else if (gender === 'f') {
    return 655;
  }
};

var weightCalc = function() {
  if (gender === 'm') {
    if (weightUnit === 'lb') {
      return 6.23 * weight;
    } else if (weightUnit === 'kg') {
      return 13.7 * weight;
    }
  } else if (gender === 'f') {
    if (weightUnit === 'lb') {
      return 4.35 * weight;
    } else if (weightUnit === 'kg') {
      return 9.6 * weight;
    }
  }
};

var heightCalc = function() {
  if (gender === 'm') {
    if (heightUnit === 'in') {
      return 12.7 * height;
    } else if (heightUnit === 'cm') {
      return 5 * height;
    }
  } else if (gender === 'f') {
    if (heightUnit === 'in') {
      return 4.7 * height;
    } else if (heightUnit === 'cm') {
      return 1.8 * height;
    }
  }
};

var ageCalc = function() {
  if (gender === 'm') {
    return 6.8 * age;
  } else if (gender === 'f') {
    return 4.7 * age;
  }
};

var bmrCalc = function() {
  return genderCalc() + weightCalc() + heightCalc() - ageCalc();
};

var calculate = function(e) {
  gender = document.querySelector('[name="bmrc-gender"]:checked').value;
  age = document.querySelector('#bmrc-age').value;
  height = document.querySelector('#bmrc-height').value;
  heightUnit = document.querySelector('[name="bmrc-height-unit"]:checked').value;
  weight = document.querySelector('#bmrc-weight').value;
  weightUnit = document.querySelector('[name="bmrc-weight-unit"]:checked').value;
  result.value = bmrCalc();
  e.preventDefault();
};

button.addEventListener('click', calculate);


    </script>





</body>
</html>