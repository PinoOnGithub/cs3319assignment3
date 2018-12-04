<ol>
<?php
include 'connectdb.php';
   $customerChosen= $_POST["customerChosen"];
   $query = "SELECT Description FROM Product WHERE ProductID IN(SELECT ProductID FROM Purchases WHERE CustomerID =".$customerChosen." )";
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("dafw2f2ftabase query1 failed.");
     }
echo 'Products purchased by customer:<br><br>';
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["Description"];
     }
?>
</ol>
<?php
mysqli_free_result($result);
?>
