<?php
// $category = $_GET('category');
include('../conf.php');
$sql="select * from tb_book, tb_img where tb_book.img_id = tb_img.img_id";
if(isset($category))
if($category!='default'){
    $sql .= " and book_category like '$category'";
}
if(isset($bookname))
if($bookname != ''){
    $sql .= " and book_name = '$bookname'";
}
if(isset($author))
if($author !=''){
    $sql .= " and book_author = '$author'";
}

$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
    echo '<tr>';
    echo '<th scope="row">'.$row["book_id"].'</th>';
    echo '<td>'.$row["book_name"].'</td>';
    echo '<td>'.$row["book_price"].'$</td>';
    echo '<td>'.$row["book_quantity"].'</td>';
    echo '<td>'.$row["book_category"].'</td>';
    echo '<td>'.$row["book_author"].'</td>';
    echo '<td>'.$row["book_intro"].'</td>';
    echo '<td><img src="../'.$row["img_url"].'" alt="'.$row["img_alt"].'"  height="150"></td>';
    echo '
    <td><div class="row">
    <a href=editbook.php?id='.$row["book_id"].'><button class="btn btn-success w-100">Sửa</button></a>
    <br><br>
     <a href=deletebook.php?id='.$row["book_id"].'><button class="btn btn-danger w-100">Xóa sách</button></a>
    </div></td>';
    }
}

?>