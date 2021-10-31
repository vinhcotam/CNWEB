<?php
    $receipt_id=$_GET['id'];
    include '../conf.php';
    $sql="update tb_receipt set status = 3";
    $result=mysqli_query($conn,$sql);
    header("location:receipt.php.php");


?>