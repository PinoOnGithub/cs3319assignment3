<?php
include 'connectdb.php';
$query1 = "SELECT * FROM Customer";
$query2 = "SELECT * FROM Product";
$result = mysqli_query($connection,$query1);
if(!$result){
die("query 3.1 failed");
}
echo '<form action = "./step3part2.php" method = "post">';
echo "Select customer: <br>";
while($row = mysqli_fetch_assoc($result)){
echo '<input type = "radio" name = "customerChosen3" value = ';
echo $row["CustomerID"];
echo ">";
echo $row["FName"].' '.$row["LName"].'<br>';
}
echo '<br><br>';
echo 'Select product: <br>';
$result = mysqli_query($connection,$query2);
if(!$result){
die("query 3.2 failed");
}
while($row = mysqli_fetch_assoc($result)){
echo '<input type = "radio" name = "productChosen3" value = '.$row["ProductID"].'>';
echo $row["Description"].'<br>';
}
echo '<br><br>';
echo 'Quantity:<br>';
echo '<input type="number" name = "quantity3">';
echo '<br><input type="submit" value = "Confirm choice">';
echo '</form>';
?>
