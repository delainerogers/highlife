

<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "cooldata";
$connection = mysqli_connect($servername, $username, $password, $dbname);
  
  $name = $_POST['YourName'];
  $gend = $_POST['gender'];
  $age  = $_POST['age'];
  $wtlb = $_POST['weight'];
  $htin = $_POST['height'];
  $exe  = $_POST['exercise'];


  $query = "INSERT INTO profile (name,wt,ht,age,gender,exercise) VALUES ('$name','$wtlb','$htin','$age','$gend','$exe');";



  $result=mysqli_query($connection,$query);

  if($result)
  {

    echo $msg="Success";
  } else{
  echo $msg="Fail";

}
?>