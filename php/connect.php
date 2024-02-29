<?php
$servername="localhost";
$username="root";
$dbname="database";
$password="";

   $conn=mysqli_connect("$servername","$username","$password","$dbname");
   //$conn=mysqli_connect("localhost","root","kavitharaj277@gmail.com","","AK_wp");

     if(!$conn)
     {
      die("error detected".mysqli_error($conn));
     }
     else{
      echo"connection successfully done";
     }


  ?>