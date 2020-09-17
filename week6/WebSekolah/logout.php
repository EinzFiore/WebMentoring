<?php 
    session_start();

    $_SESSION['role_id']='';
    $_SESSION['username']='';
    
    unset($_SESSION['role_id']);
    unset($_SESSION['username']);
    
    session_unset();
    session_destroy();
    header('Location:login.php');
?>