<?php
include 'connectdb.php';
$fname = $_POST["customerFirstName"];
$lname = $_POST["customerLastName"];
$id = $_POST["ID"];
$phone = $_POST["phone"];
$city = $_POST["city"];
$agent = $_POST["agent"];
$query = 'INSERT INTO Customer VALUES("'.$agent.'","'.$id.'","'.$fname.'","'.$lname.'","'.$city.'","'.$phone.'");';
if(!mysqli_query($connection,$query)){
die("Error, customer ID already exists; please insert again with different ID");
}
echo "Customer succesfully added.";
?>
