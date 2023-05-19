<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = ""; 
$db = 'school';

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
if($conn){
  //echo "Success";
}else{
    //echo "Fail";
}


?>