<?php
    include 'conf.php';
    
    $sql="select * from tb_book, tb_img where tb_book.img_id = tb_img.img_id order by book_id asc";

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
    }
    if(isset($page)){
        $tmp = 8*($page-1);
        $sql .= " limit $tmp,8";
    }

    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
    echo '<div class="col-sm-3" style="--bs-gutter-x: 5px;--bs-gutter-y: 5px;">';
    echo '    <div class="card" style="width: 100%; height: 100%;">';
    echo '        <br><div class="row">';
    echo '            <div class="col-1"></div>';
    echo '            <div class="col-10">';
    echo '                <a href="book.php?book_id='.$row['book_id'].'"><img src="'.$row['img_url'].'" width=400 style ="width: 100%; height:auto;"class="card-img-top"';
    echo '                    alt="'.$row['img_alt'].'">';
    echo '            </div>';
    echo '            <div class="col-1"></div>';
    echo '        </div>';
    echo '        <div class="card-body">';
    echo '            <h5><a class="card-title " style="text-decoration: none; color: black;" href="book.php?book_id='.$row['book_id'].'">'.$row['book_name'].'</a></h5>';
    echo '            <p class="card-text" >'.$row['book_author'].'</p>';
    echo '            <div class="row" ><h6 class="card-text col-md-6" style="color: red; ">'.$row['book_price'].'$</h6>';
    echo '            <p class="card-text col-md" style="color: green;">Còn lại: '.$row['book_quantity'].'</p></div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
    }
?>