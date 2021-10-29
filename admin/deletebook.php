<?php
    include 'header.php';
    include '../conf.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    $sql = "delete from tb_book where book_id ='$id'";
    //echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result>0){
        header("Location: listbook.php");
    }else{
        echo "Loi";
    }
    mysqli_close($conn);
?>