<?php
session_start();
$con= mysqli_connect("localhost","root","","healthassistant");

$ausername = $_POST['auser'];
$apass = $_POST['apass'];

$query = "SELECT `username`, `password` FROM `user` where username='$ausername' && password ='$apass'";
$res = mysqli_query($con,$query);

$num = mysqli_num_rows($res);

if($num==1)
{
  $_SESSION['username'] = $ausername;
  header("Location:user_profile.php");
}
else{
    header("Location:user_login.php");

}


?>