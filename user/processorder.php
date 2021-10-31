<?php
include("../conf.php");
    $time =  date("Y-m-d h:i:s");
    $username = $_GET['username'];
    $quantity = $_GET['quantity'];
    $total = $_GET['total'];
    $book_id = $_GET['id'];
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $idreceipt = $username.$time;
    $sqlhoadon = "INSERT INTO tb_receipt(receipt_id, user_email, user_name, date_buy, status, book_id, quantity, total, phone, address)
     VALUES ('$idreceipt', '$username', '$name','$time',0,$book_id,$quantity,$total, $phone, '$address')";
     $resulthoadon = mysqli_query($conn, $sqlhoadon);
     if($resulthoadon>0){
        echo '<script language="javascript">';
        echo 'alert("Đặt hàng thành công"); window.close();';
        echo '</script>';
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Đặt hàng thất bại"); window.close();';
            echo '</script>';
        }
?>