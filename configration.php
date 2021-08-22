<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$passwored = "";
$db = "ARBank";

 $conn = mysqli_connect($server,$username,$passwored,$db);

 if($conn){
     //echo "Connection Successful";
     ?>
     <script>
         alert("Connection Successful")
     </script>

     <?php
 }else{
     die("Connection Failed".mysqli_connect_errno());
 }
 ?>