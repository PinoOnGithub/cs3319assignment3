<?php
include 'connectdb.php';
$query = "SELECT Description FROM Product WHERE ProductID NOT IN(SELECT ProductID FROM Purchases);";
$result = mysqli_query($connection,$query);
if(!$result){
die("query 8 failed");
}
echo '<ul>';
while($row = mysqli_fetch_assoc($result)){
echo '<li>'.$row["Description"];
}
echo '</ul>';
?>
