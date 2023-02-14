
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
    </nav>
    
    <h2 align="center">Sign up</h2>
    <form  name="form1" action="" method="post" onsubmit="return check()" enctype="multipart/form-data" align="center">
    Id :
    <input type="number" name="eid"> <br> <br>
    Name :
    <input type="text" name="en"> <br> <br>
    
    Gender : &nbsp
    Male : <input type="radio" name="egen" value="Male"> &nbsp
    Female :
    <input type="radio" name="egen" value="Female"> <br> <br>
    Phone :
    <input type="number" name="phn"> <br> <br>
    Address :
    <input type="text" name="addr"> <br> <br>
    Blood Group :
    <input type="text" name="bg"> <br> <br>
    Password :
    <input type="password" name="epass"> <br> <br>
    <input type="submit" name="submit" value="Register"> <br> <br>
   
 </form>
  <div align="center">
  <p >Already Have an Account ?</p> 
    <a href="user_login.php" ><button align="center"> Log in</button></a>
  </div>
     
 <script>
    function check(){

   var id = document.form1.eid.value;
   var name = document.form1.en.value;
   var gender = document.form1.egen.value;
   var phone = document.form1.phn.value;
   var address = document.form1.addr.value;
   var blood = document.form1.bg.value;
   var password = document.form1.epass.value;
   
   if (id==""){
    alert("id can not be empty");
    return false;
   }
   if (name==""){
    alert("name can not be empty");
    return false;
   }
   
   if (gender==""){
    alert("gender can not be empty");
    return false;
   }
   
   if (phone==""){
    alert("phone can not be empty");
    return false;
   }

   if (address==""){
    alert("address can not be empty");
    return false;
   }
   if (blood==""){
    alert("Blood Group can not be empty");
    return false;
   }
   
   if (password==""){
    alert("password can not be empty");
    return false;
   }
  



    }
 </script>
<?php

$con= mysqli_connect("localhost","root","","healthassistant");

if(isset($_POST['submit'])){

$id =$_POST['eid'];
$name =$_POST['en'];
$gender =$_POST['egen'];
$phone =$_POST['phn'];
$address =$_POST['addr'];
$blood =$_POST['bg'];
$password =$_POST['epass'];



$sql="INSERT INTO `user`(`id`, `username`, `Gender`, `password`, `phone`, `address`, `blood`) VALUES ('$id','$name','$gender','$password','$phone','$address','$blood')";


mysqli_query($con,$sql);

}

?>

 
</body>
</html>