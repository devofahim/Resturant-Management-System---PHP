<?php include '../controllers/session.php';?>

<?php include '../includes/header.php';?>

<?php require_once('../models/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="main">  
<img src="../img/food2.jpg" height="300px" width="97.6%"/>



<?php

$sql = "SELECT * FROM products";
$query = mysqli_query($conn,$sql);



while($data = mysqli_fetch_assoc($query)) {

$id = $data['id'];
$item = $data['item'];
$price = $data['price'];
$status = $data['status'];
$discount = $data['discount'];


echo "<div class='carde'>
<h3> $item </h3> 
Price:  $price Tk
 </div>

<div class='carde'> <span class='buttonOrder'><a href='../controllers/OrderProcess.php?id=$id' class='text-white'><font color='white'> Order Now </font> </a>
</span> 
 <span class='buttonStatus'> $status </font> </span>  <span class='buttonStatus'> $discount </font> </span> </div>   ";

};

?>
<script src="../js/my.js"></script>
</div>
</body>
</html>


