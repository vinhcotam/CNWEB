<?php
    session_start(); //Dịch vụ bảo vệ
    if(isset($_SESSION['loginOK'])){
        unset($_SESSION['loginOK']);
        unset($_SESSION['admin']);
        header("Location:login.php"); 
    }
?>
 