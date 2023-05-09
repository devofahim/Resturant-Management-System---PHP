<?php include '../controllers/session.php';?>
<?php include '../includes/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title> Contact Us
		|| Tamim's Restuerant 
	</title>

</head>



<div class="main"> 
			<div class="carde">
							<form name="RegForm" method="POST" class="my-login-validation" action="../controllers/ContactUsSubmit.php" onsubmit="return ValidationForm()">
								
									<label for="username">Username: </label>
									<input type="text" class="form-control" id="username" name="username" value="<?php echo $myself; ?>" readonly>
								
								<br>
<br>
								
                                <label for="password">Messages:  </label> <br> 
									
							
									<input id="messages" type="text" class="form-control" name="messages" style="font-size: 18pt; height: 200px; width:280px; ">
								    <br>
								

						
									<button type="submit" class="buttonorange">
									Submit
									</button>
						
						 <br>
									   <a href="./dashboard.php">Go Back</a>
								
							</form>
						
					
					
				

</div>
	<script src="../js/validations.js"></script>
</body>
</html>