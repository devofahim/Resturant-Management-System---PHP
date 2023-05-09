<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title> Register Now 
		|| Tamim's Restuerant 
	</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<div class="main"> 
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Registration Form</h4>
							<form name="RegForm" method="POST" class="my-login-validation" action="../controllers/registercheck.php" onsubmit="return ValidationForm()">
								<div class="form-group">
									<label for="username">Username: </label>
									<input type="text" class="form-control" id="username" name="username" value="">
								
								</div>

								<div class="form-group">
                                <label for="password">Password: </label>
									
							
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    
								</div>

								<div class="form-group">
									<label for="email">Email: </label>
									<input type="text" class="form-control" id="email" name="email" value="">
								
								</div>

								<div class="form-group">
									<label for="location">Location: </label>
									<input type="text" class="form-control" id="location" name="location" value="">
								
								</div>


								<div class="form-group">
									<label for="pnumber">Phone Number: </label>
									<input type="text" class="form-control" id="pnumber" name="pnumber" value="">
								
								</div>





								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
									Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already Registered?   <a href="../views/login.php">Login Here</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
	<script src="../js/validations.js"></script>
</body>
</html>