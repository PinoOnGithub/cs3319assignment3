<?php
session_start();
?>
<?php 
include 'connectdb.php';
$id = $_SESSION["step5id"];
$num = $_POST["newNumber"];
$query = 'UPDATE Customer SET PhoneNumber = "'.$num.'" WHERE CustomerID = "'.$id.'";';
$result = mysqli_query($connection,$query);
if(!$result){
die("query 5.2 failed");
}
echo 'Phone number succesfully updated.';

?>
