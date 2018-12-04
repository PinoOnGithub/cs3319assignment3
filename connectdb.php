<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'password';
$dbname = '251061143assign2db';
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno()){
    die("Failed to connect to database :".mysqli_connect_error()."(".mysqli_connect_errno().")");
}
?>
