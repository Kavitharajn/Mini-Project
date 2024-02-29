<?php
$info="";
require('database.php');

if(isset($POST["regi"])){
  $uname=$_GET["uname"];
  $email=$_POST["email"];
  $pwd=$_POST["password"];

  $query="INSERT INTO registration (uname,email,pwd) VALUES ('$uname','$email','$pwd');
  $result = mysqli_query($con, $query);

  if($result)
  {
    $info="<span style='color:green;'>Registered successfully </span>";
    echo $info;
  }
  else
  {
    $info = "<span style='color:red;'>Registration failed</span>";
  }

}
?>
