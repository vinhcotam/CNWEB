<?php
    include 'conf.php';
    $sql="select * from tb_book, tb_img where tb_book.img_id = tb_img.img_id";
    
    if(isset($category))
    if($category!='default'){
        $sql .= " and book_category like '$category'";
    }
    if(isset($bookname))
    if($bookname != ''){
        $sql .= " and book_name like '%$bookname%'";
    }
    if(isset($author))
    if($author !=''){
        $sql .= " and book_author = '$author'";
    }
    if(isset($minprice))
    if($minprice !=''){
        $sql .= " and book_price > $minprice";
    }
    if(isset($maxprice))
    if($maxprice !=''){
        $sql .= " and book_price < $maxprice";
    }if(isset($page)){
        $tmp = 8*($page-1);
        $sql .= " limit $tmp,8";
    }
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
    echo '<div class="col-sm-3">';
    echo '    <div class="card" style="width: 100%; height: 100%;">';
    echo '        <br><div class="row">';
    echo '            <div class="col-2"></div>';
    echo '            <div class="col-8" style="max-height: 350px; min-height: 100px;">';
    echo '                <a href="book.php?book_id='.$row['book_id'].'"><img src="'.$row['img_url'].'" class="card-img-top" style=" width: 100%; max-height: 300px;"';
    echo '                    alt="'.$row['img_alt'].'">';
    echo '            </div>';
    echo '            <div class="col-2"></div>';
    echo '        </div>';
    echo '        <div class="card-body">';
    echo '            <h5><a class="card-title " style="text-decoration: none; color: black;" href="book.php?book_id='.$row['book_id'].'">'.$row['book_name'].'</a></h5>';
    echo '            <p class="card-text">'.$row['book_author'].'</p>';
    echo '            <p class="card-text" style="color: red;">'.$row['book_price'].'$</p>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
    }
?>