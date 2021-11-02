<?php
    $book_name =$_POST['book_name'];
    $book_price =$_POST['book_price'];
    $book_quantity =$_POST['book_quantity'];
    $book_category =$_POST['book_category'];
    $book_author =$_POST['book_author'];
    $book_intro =$_POST['book_intro'];
    $img_id =$_POST['img_id'];
    $img_url =$_POST['img_url'];

    include '../conf.php';
    $sql = "INSERT INTO tb_book (book_name, book_price, book_quantity, book_category, book_author,book_intro,img_id)
    VALUES ('$book_name','$book_price','$book_quantity','$book_category','$book_author','$book_intro','$img_id')";
         $sql2="Insert into tb_img(img_id,img_url) values ('$img_id','$img_url')";
    $result=mysqli_query($conn,$sql);

     $resul2t=mysqli_query($conn,$sql2);
    if($result>0){
        header("Location: listbook.php");
    }else{
        echo '<script language="javascript">';
        echo 'alert("Không thêm được sách"); history.back();';
        echo '</script>';
    }
    mysqli_close($conn);
?>