<?php
include 'connectdb.php';

$query = "SELECT * FROM Product;";
$result = mysqli_query($connection,$query);
if(!$result){
die("database query 9.1 failed");
}
echo "Choose product: <br><br>";
echo '<form action = "./step9part2.php" method = "post">';
while($row = mysqli_fetch_assoc($result)){
echo '<input type = "radio" name = "productChosen9" value = "'.$row["ProductID"].'">';
echo $row["Description"].'<br>';
}
echo '<br><input type="submit" value = "Confirm choice">';
echo '</form>';

?>
