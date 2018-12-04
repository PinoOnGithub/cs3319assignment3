<?php

include 'connectdb.php';
$id = $_POST["productChosen9"];
echo 'Number of purchases:<br>';
$query1 = 'SELECT COUNT(ProductID)as x FROM Purchases WHERE ProductID = "'.$id.'";';
$result = mysqli_query($connection,$query1);
if(!$result){
die("query 9.2 failed");
}
$row = mysqli_fetch_assoc($result);
echo $row["x"];

echo '<br><br>Product description: <br>';
$query2 = 'SELECT Description FROM Product WHERE ProductID = "'.$id.'";';
$result = mysqli_query($connection,$query2);
if(!$result){
die("query 9.3 failed");
}
$row = mysqli_fetch_assoc($result);
echo $row["Description"];
echo '<br><br>Total money made in sales of product:<br>';
$query3 = 'SELECT SUM(q*c)AS s FROM (SELECT Purchases.Quantity as q, Product.Cost as c FROM Purchases, Product WHERE Product.ProductID = Purchases.ProductID AND Product.ProductID = "'.$id.'") as t;';
$result = mysqli_query($connection,$query3);
if(!$result){
die("query 9.4 failed");
}
$row = mysqli_fetch_assoc($result);
echo '$'.$row["s"];
?>
