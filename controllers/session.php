<?php
    session_start();
    if(!isset($_SESSION['username'])) {
    header('Location: /views/login.php');
    
    }
    else{
        $myself = $_SESSION['username'];
    
    }
    ?>
