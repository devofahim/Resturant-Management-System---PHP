<link rel="stylesheet" href="../css/style.css"/> 


    <div class="sidebar">
      <h2> Online Resturant Management System </h2>
      <ul class="nav">
        <li>
          <a href="../views/dashboard.php">
            <i class="fas fa-server"></i>
            <span>Dashboard</span>
          </a>
        </li>
       
        <li>
          <a href="../views/myOrders.php">
            <i class="fas fa-cog"></i>
            <span>My Orders</span>
          </a>
        </li>

        <li>
          <a href="../views/contactUs.php">
            <i class="fas fa-cog"></i>
            <span> Contact Us</span>
          </a>
        </li>

        <li>

      <!--ajax -->


        <div id="demo">
        <a onclick="loadData()">
            <span> Announcement </span>
          </a>
          </li>
        <li>
          <div class="background"><br>
        <center>  <img src="../img/avatar.png" height="50" width="50"/><br>
      <?php echo $myself; ?> </h2> <br><br> <p> <a href="../controllers/logOut.php"> Logout </a></p> 
    
     <?php
require('../models/db.php');
$sql = "SELECT * FROM users where username='$myself'";
$query = mysqli_query($conn,$sql);



while($data = mysqli_fetch_assoc($query)) {
$id = $data['Id'];
$username = $data['username'];
$email = $data['email'];
$pnumber = $data['pnumber'];
$location = $data['location'];


echo "Email: $email <br>

Phone Number: $pnumber <br>
Location: $location <br>";
};


?>
<br>

<?php echo 
"<span class='buttonStatus'><a href='../controllers/edit_profile.php?id=$id' class='text-white'><font color='white'> Edit Profile </font> </a>
</span> "?>
    </center> </div> </div> 
    
</li>

 
      </ul>

    </div>

   
  </body>
</html>
	
	