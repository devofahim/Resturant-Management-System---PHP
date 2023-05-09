
<?php
require_once('../models/db.php'); 

if($_GET['id']) {
    $getid = $_GET['id'];

    $sql = "SELECT * FROM users where id=$getid";
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($query);

    $id = $data['Id'];
    $username = $data['username'];
    $email = $data['email'];
    $pnumber = $data['pnumber'];
    $location = $data['location'];
    
}

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $location = $_POST['location'];

       

        $sql1 = "UPDATE users SET username='$username' , email ='$email', pnumber='$pnumber', location='$location'  WHERE Id = '$id'";

        if(mysqli_query($conn,$sql1) == TRUE) {
            header('location: ../views/dashboard.php');
            echo "Data Updated.";
        }else{
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
	<title>Edit Profiel</title>
	
	<link rel="stylesheet" href="../css/style.css"/>

</head>
<body>
<div class="container">
<h2> Edit Information </h2> <br>
<form action="../controllers/edit_profile.php" method="post">
    <label type="username"> username: <font color="blue"> <?php echo $username ?> </font>  </label>
    <input type="hidden" class="form-control" id="username" name="username" value="<?php echo $username ?>"><br>
<input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>"><br>
<input type="number" class="form-control" id="pnumber" name="pnumber" value="<?php echo $pnumber ?>"><br>
<input type="text" class="form-control" id="location" name="location" value="<?php echo $location ?>"><br>
<input type="hidden" id="id" name="id" value="<?php echo $id ?>"> <br>
<input type="submit" class="buttonOrder" value="Update" name="update">
</form><br> <a href="../views/dashboard.php"> <= Go back </a> 
</div>
</div>      

</body>
</html>