<?php
include 'connectdb.php';

echo 'First Name: <br>';
echo '<form action = "./step4part2.php" method = "post">';
echo '<input type = "text" name = "customerFirstName"><br>';
echo 'Last Name: <br>';
echo '<input type = "text" name = "customerLastName"><br>';
echo 'Customer ID: <br>';
echo '<input type = "number" name = "ID"><br>';
echo 'Phone number: <br>';
echo '<input type = "text" name = "phone"><br>';
echo 'City: <br>';
echo '<input type = "text" name = "city"><br>';
echo 'AgentID: <br>';
echo '<input type = "number" name = "agent"><br>';
echo '<input type = "submit" value = "Insert new customer">';
echo '</form>';
?>
