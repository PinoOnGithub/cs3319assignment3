<?php
session_start();
?>
<?php
include 'connectdb.php';
$id = $_POST["customerChosen5"];
$_SESSION["step5id"]= $id;
$query = 'SELECT * FROM Customer WHERE CustomerID = "'.$id.'";';
$result = mysqli_query($connection,$query);
if(!$result){
die("database query 5.2 failed");
}
$row = mysqli_fetch_assoc($result);
echo 'Current phone number: '.$row["PhoneNumber"];
echo '<form action = "./step5part3.php" method = "post">';
echo '<input type = "number" name = "newNumber">';
echo '<input type = "submit" value = "Confirm new number">';
echo '</form>';
?>
