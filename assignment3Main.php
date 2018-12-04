<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pino.com</title>
<link rel="stylesheet" type = "text/css" href = "./styles.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<div id = "question1">
<h2>Customers:</h2>
<?php
include 'step1.php'
?>
</div>
<div id = "question2">
<h2>Products:</h2>
<?php
include 'step2.php'
?>
</div>
<div id = "question3">
<h2>Make purchase:</h2>
<?php
include 'step3.php';
?>
</div>
<div id = "question4">
<h2>Insert new customer:</h2>
<?php
include 'step4.php';
?>
</div>
<div id = "question5">
<h2>Update phone number:</h2>
<?php
include 'step5.php';
?>
</div>
<div id = "question6">
<h2> Delete customer: </h2>
<?php
include 'step6.php';
?>
</div>
<div id = "question7">
<h2>Customers who purchased more than a given quantity of a given product: </h2>
<?php
include 'step7.php';
?>
</div>
<div id = "question8">
<h2>Products that have never been purchased:</h2>
<?php
include 'step8.php';
?>
</div>
<div id = "question9">
<h2>Analysis of sales for Product:</h2>
<?php
include 'step9.php';
?>
</div>
<?php
mysqli_close($connection);
?>
</body>
</html>
