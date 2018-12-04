<?php
include 'connectdb.php';

$query = "SELECT * FROM Customer;";
$result = mysqli_query($connection,$query);
if(!$result){
die("database query 5.1 failed");
}
echo "Choose customer: <br><br>";
echo '<form action = "./step5part2.php" method = "post">';
while($row = mysqli_fetch_assoc($result)){
echo $row["customerID"];
echo '<input type = "radio" name = "customerChosen5" value = "'.$row["CustomerID"].'">';
echo $row["FName"].' '.$row["LName"].'<br>';
}
echo '<br><input type="submit" value = "Confirm choice">';
echo '</form>';

?>
