<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <nav align="center">
    <img class="logo" src="image/logo4.png">
    </nav>
    <br> <br>

 <h2 align="center">Log in</h2>
 <form action="user_validation.php" method="post" align="center">
    Username :
    <input type="text" name="auser"> <br> <br>
    Password :
    <input type="text" name="apass"> <br> <br>
    <input type="submit" name="submit" value="Login"> 

 </form>

 <div align="center">
  <p >Create New Account</p> 
    <a href="user_signup.php" ><button align="center"> Sign up </button></a>
  </div>

</body>
</html>