<?php
include 'connectdb.php';
$quantity = $_POST["quantity"];
$id = $_POST["productChosen7"];
$query ='SELECT FName, LName FROM Customer WHERE CustomerID IN(SELECT CustomerID FROM Purchases WHERE ProductID = "'.$id.'" AND Quantity > "'.$quantity.'");';
$result = mysqli_query($connection,$query);
if(!$result){
die("query 7.2 failed");
}
echo '<ul>';
while($row = mysqli_fetch_assoc($result)){
echo '<li>'.$row["FName"].' '.$row["LName"];
}
echo '</ul>';
?>
