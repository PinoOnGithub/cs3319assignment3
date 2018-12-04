<?php
include 'connectdb.php';
$query = "SELECT * FROM Product;";
$result = mysqli_query($connection,$query);
if(!$result){
die("database query 7.1 failed");
}
echo "Choose product: <br><br>";
echo '<form action = "./step7part2.php" method = "post">';
while($row = mysqli_fetch_assoc($result)){
echo '<input type = "radio" name = "productChosen7" value = "'.$row["ProductID"].'">';
echo $row["Description"].'<br>';
}
echo '<br><input type = "number" name = "quantity" value = "Confirm quantity">';
echo '<br><input type="submit" value = "Confirm choice">';
echo '</form>';

?>
