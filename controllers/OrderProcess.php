
<?php include '../controllers/session.php';?>

<?php
require_once('../models/db.php'); 
if($_GET['id']) {
    $getid = $_GET['id'];

    $sql = "SELECT * FROM products where id=$getid";
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($query);

    $id = $data['id'];
    $item = $data['item'];
    $price = $data['price'];
    
}

    if(isset($_POST['update'])) {
        
        $id = $_POST['id'];
        $item = $_POST['item'];
        $price = $_POST['price'];
        $myself = $_POST['username'];
        $location = $_POST['location'];
        $pnumber = $_POST['pnumber'];
        $quantity = $_POST['quantity'];
        
        
      

        $sql1 = "INSERT INTO orders (username, location, pnumber , quantity, item, price) 
             VALUES ('$myself', '$location', '$pnumber', '$quantity', '$item', '$price')";
            
        if(mysqli_query($conn,$sql1) == TRUE) {
            echo "Data Updated.";
           header("location: ../Views/myOrders.php");
            
        }else{
            echo $conn -> connect_errno;
            echo "Data not updated.";
        }
    }




?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Order Now  || Tamim's Restuerant </title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-3">

</div>
<div class="col-6 pt-4 mt-4 border border-success">
<h2> Order Now </h2> <br>

<form name="RegForm" action="../controllers/OrderProcess.php" method="post" onsubmit="return ValidationForm()">
<h3> <?php echo $item ?> </h3>    
<label type="price"> Per Item <?php echo $price ?> Tk</label> <br>
    
<input type="text" class="form-control" id="item" name="item" value="<?php echo $item ?> " hidden><br>

 <label type="firstname"> Item Quantity: </label><br>
<input type="number" class="form-control" id="quantity" name="quantity" value="1"><br>

 <label type="firstname"> Location: </label><br>
<input type="text" class="form-control" id="location" name="location" value=""><br>

<label type="firstname"> Phone Number: </label><br>
<input type="text" class="form-control" id="pnumber" name="pnumber" value=""><br>
<input type="text" id="price" name="price" value="<?php echo $price; ?>" hidden> 

<input type="text" id="username" name="username" value="<?php echo $myself ?>" hidden> 
<input type="text" id="id" name="id" value="<?php echo $id ?>" hidden> 
 
<input type="submit" class="btn btn-primary" value="Order Now" name="update">
</form><br>
</div>

</div>
            
</div>

<script src="../js/my.js"></script>

</body>
</html>


