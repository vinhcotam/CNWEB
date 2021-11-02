<?php
    session_start(); //Dịch vụ bảo vệ
    //session_destroy();
    if(isset($_SESSION['loginOK'])){
        unset($_SESSION['loginOK']);
        unset($_SESSION['admin']);
        header("Location:login.php"); 
    }    
    if(isset($_SESSION['admin'])){
        unset($_SESSION['admin']);
        header("Location:login.php"); 
    }
    
?>
 