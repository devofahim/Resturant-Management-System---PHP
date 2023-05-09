

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || Resturant Management System</title>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <div class="main"> 
<form name="myForm" method="POST" action="../controllers/loginCheck.php" enctype="">
       <div class="container"> 
        <center>
                <img src="../img/logo.png" height="130" width="130"/> 
        </center> 
            <label>Username : </label> 
            <input type="text" placeholder="Enter Username" name="username"> <br>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" > <br>
            <button type="submit">Login</button> 
            <input type="checkbox" checked="checked"> Remember me 
            <br>
            <font color="white">  Not registered ? </font> <a href="../views/signup.php"> Register Now! </a> 
        </div> 
    </form>   
</div>

</body>
</html>




  <script src="../js/my.js"></script>







