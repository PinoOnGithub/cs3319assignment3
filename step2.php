<?php
include 'connectdb.php';

echo '<p> Order By:<p>';

echo '<form action="./step2part2.php" method="post" name = "question2form">';
echo '<input type="radio" name="whichtype" value="Description"> Description<br>';
echo '<input type="radio" name="whichtype" value="Cost" checked> Price<br><br>';
echo '<input type="radio" name="des" value="DESC"> Descending<br>';
echo '<input type="radio" name="des" value="ASC" checked> Ascending<br>';
echo '<input type="submit" value="Show all products" id = "question2submit">';
echo '</form>';
?>

