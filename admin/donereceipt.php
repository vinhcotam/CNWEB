<?php
    $receipt_id=$_GET['id'];
    include '../conf.php';
    $sql="update tb_receipt set status = 2 where receipt_id='$receipt_id'";
    $result=mysqli_query($conn,$sql);
    header("location:receipt.php");
?>