
<?php
include 'connectdb.php';
$query = "SELECT * FROM Customer ORDER BY LName";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo 'Customer Name: Phone Number - City - ID';
echo '<br><br>';
echo '<form action = "./step1part2.php" method = "post" name = "question1form">';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type = "radio" name = "customerChosen" value = '.$row["CustomerID"].'>';
    echo $row["FName"]." ".$row["LName"].": ".$row["PhoneNumber"]." - ".$row["City"]." - ".$row["CustomerID"];
    echo '<br>';     
}
echo '<br>';
echo '<input type = "submit" value = "Show products purchased">';
echo '</form>';

mysqli_free_result($result);
?>


