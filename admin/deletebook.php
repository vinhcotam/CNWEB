<?php
    include 'header.php';
    include '../conf.php';
    if(isset($_GET['book_id'])){
        $id=$_GET['book_id'];
    }
    $sql = "update tb_book set book_quantity=0 where book_id ='$id'";
    //echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result>0){
        header("Location: listbook.php");
    }else{
        echo '<script language="javascript">';
        echo 'alert("Xóa thất bại"); history.back();';
        echo '</script>';
    }
    mysqli_close($conn);
?>