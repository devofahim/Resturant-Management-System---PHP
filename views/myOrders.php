<?php include '../controllers/session.php';?>

<?php include '../includes/header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css"/> 
    <title> My Orders </title>
</head>
<body>

<div class="main">
<?php
require_once('../models/db.php'); 
$conn = mysqli_connect('localhost' , 'root' , '' , 'tamim');

if(isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];

    $sql = "DELETE FROM orders WHERE id = $deleteid";
    if(mysqli_query($conn,$sql) == TRUE) {
        header('location: myOrders.php' );
    }
}

?>

<?php

$sql = "SELECT * FROM orders where username='$myself'";
$query = mysqli_query($conn,$sql);

echo "";

while($data = mysqli_fetch_assoc($query)) {

$id = $data['id'];
$item = $data['item'];
$price = $data['price'];
$location = $data['location'];
$quantity = $data['quantity'];
$pnumber = $data['pnumber'];
$vat = 10;
$totalamount = $price * $quantity + $vat;


echo "<div class='carde'>
<h3> $item </h3> Order ID:  $id  <br>
Price:  $price Tk <br>
Total Amount + Vat: $totalamount Tk<br>
 Location: $location <br>
 Quantiry: $quantity <br>
 Phone Number: $pnumber <br>
 </div>

<div class='cardd'> <span class='buttonOrder'><a href='../views/myOrders.php?deleteid=$id' class='text-white'><font color='white'> Cancel Order </font> </a>
</span> 
</div>";


};

?>

</div>

</body>
</html>