<?php
include 'connectdb.php';
$id = $_POST["customerChosen6"];
$query = 'DELETE FROM Customer WHERE CustomerID = "'.$id.'";';
$result = mysqli_query($connection,$query);
if(!$result){
die("query 6.2 failed");
}
echo 'Customer succesfully deleted.';
?>
