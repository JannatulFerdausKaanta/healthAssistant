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
    <h2 align="center">Doctor Suggestion</h2> <br> 



    <Table border="1" align="center">
    <tr align="center">
      <td>
       <h3> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Enter Your Diseases:   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h3>
       <form name="form2" action= "" method="post" align="center">
   
<input type="text" name="cp"><br><br>     
<input  type="submit" name="submit" value="submit">  


    </form>

    <?php
   $ab = @$_POST['cp'];

$ccp='cardiac problem';
if($ab==$ccp)
{

echo " <br>  Suggested Doctor : Cardiology";  

}

$np='Neural problem';
if($ab==$np)
{

echo " <br>  Suggested Doctor : Neurology";  

}

$lp='liver problem';
if($ab==$lp)
{

echo " <br>  Suggested Doctor : Hepatobiliary";  

}

$kp='kidney problem';
if($ab==$kp)
{

echo " <br>  Suggested Doctor : urology";  

}

$pp='padeatric problem';
if($ab==$pp)
{

echo " <br>  Suggested Doctor :paediatric";  

}

$gp='gynocological problem';
if($ab==$gp)
{

echo " <br>  Suggested Doctor :gynaecologist";  

}

$tp='teeth problem';
if($ab==$tp)
{

echo " <br>  Suggested Doctor :dentist";  

}

$bp='bones problem';
if($ab==$bp)
{

echo " <br>  Suggested Doctor :orthopaedic";  

}

$mp='other';
if($ab==$mp){

echo " <br>  Suggested Doctor :Medicine";  

}



?>
          
          <br><br>
      </td>
      <td align="center">
          <h3> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Diseases List  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h3>
          <ul>
  <li>cardiac problem</li>
  <li>Neural problem</li>
  <li>liver problem</li>
  <li>kidney problem</li>
  <li>padeatric problem</li>
  <li>gynocological problem</li>
  <li>teeth problem</li>
  <li>bones problem</li>
  <li>other</li>
</ul>
         <br><br>
      </td>
    </tr>
   </Table>

    
   

  





</body>
</html>


 
 
