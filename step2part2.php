<ol>
<?php
include 'connectdb.php';
$ascOrDesc = $_POST["des"];
$descOrPrice = $_POST["whichtype"];
$query = "SELECT * FROM Product ORDER BY ".$descOrPrice." ".$ascOrDesc.";";
$result = mysqli_query($connection,$query);
 if (!$result) {
         die("database query2 failed.");
     }
 while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["Description"]." - $".$row["Cost"];
     }
     mysqli_free_result($result);

?>
</ol>

