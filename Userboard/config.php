<?php
$sever = 'localhost';
$username = 'root';
$password ='';
$db_name ='library';


// Create connection
$conn = mysqli_connect($sever,$username,$password,$db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>