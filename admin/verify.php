<?php
    $receipt_id=$_GET['id'];
    include '../conf.php';
    $sql="update tb_receipt set status = 1";
    $result=mysqli_query($conn,$sql);
    header("location:receipt.php.php");


?>