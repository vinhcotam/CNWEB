<?php
    $receipt_id=$_GET['id'];
    $quantity=$_GET['qty'];
    $book_id=$_GET['bookid'];
    include '../conf.php';
    $sql="update tb_receipt set status = 1 where receipt_id='$receipt_id' ";
    $sql2="Update tb_book set book_quantity=book_quantity-$quantity where book_id='$book_id'";
    $result=mysqli_query($conn,$sql);
    $result2=mysqli_query($conn,$sql2);
    header("location:receipt.php");
?>