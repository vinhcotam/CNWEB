<?php
    if(isset($_GET['id']))
    $receipt_id = $_GET['id'];
    if(isset($_GET['username']))
    $username = $_GET['username'];
    $sql="update tb_receipt set status=3 where receipt_id='$receipt_id'";
    include('../conf.php');
    $result = mysqli_query($conn, $sql);
    echo '<script language="javascript">';
    echo 'alert("Đã hủy"); history.back();';
    echo '</script>';
?>