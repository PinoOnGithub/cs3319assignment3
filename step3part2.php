<?php
include 'connectdb.php';
$customerID = $_POST["customerChosen3"];
$productID = $_POST["productChosen3"];
$quantity = $_POST["quantity3"];
$query = "SELECT * FROM Purchases;";
$result = mysqli_query($connection,$query);
if(!$result){
die("database query 3.1 failed");
}
while($row=mysqli_fetch_assoc($result)){
if($row["CustomerID"]==$customerID && $row["ProductID"]==$productID){
$oldQuantity = $row["Quantity"];
$newQuantity = $oldQuantity + $quantity;
$query1 = 'UPDATE Purchases SET Quantity = '.$newQuantity.' WHERE CustomerID = '.$customerID.' AND ProductID = '.$productID.';';
break;
}
else{
$query1 = 'INSERT INTO Purchases (CustomerID,ProductID,Quantity) VALUES ('.$customerID.','.$productID.','.$quantity.');';
}
}
$result = mysqli_query($connection,$query1);
if(!$result){
die("database query 3.2 failed");
}
echo "Purchase succesfully made!";



?>
