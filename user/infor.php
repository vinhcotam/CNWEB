<?php
    session_start();
    if(!isset($_SESSION['loginOK'])){
        header("Location:../login.php"); 
    }

?>