<?php
    include 'conf.php';
    
    $sql="select * from tb_book, tb_img where tb_book.img_id = tb_img.img_id";

    if(isset($category))
    if($category!=''){
        $sql .= " and book_category like '%$category%'";
    }
    if(isset($bookname))
    if($bookname != ''){
        $sql .= " and book_name like '%$bookname%'";
    }
    if(isset($author))
    if($author !=''){
        $sql .= " and book_author like '%$author%'";
    }
    if(isset($minprice))
    if($minprice !=''){
        $sql .= " and book_price > $minprice";
    }
    if(isset($maxprice))
    if($maxprice !=''){
        $sql .= " and book_price < $maxprice";
    }
    $sql .=" order by book_id asc";
    if(isset($page)){
        $tmp = 8*($page-1);
        $sql .= " limit $tmp,8";
    }
    $ok=0;
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
        $ok=1;
    echo '<div class="col-sm-3" style="--bs-gutter-x: 5px;--bs-gutter-y: 5px;">';
    echo '    <div class="card" style="width: 100%; height: 100%;">';
    echo '        <br><div class="row">';
    echo '            <div class="col-1"></div>';
    echo '            <div class="col-10">';
    echo '                <a href="book.php?book_id='.$row['book_id'].'&username='.$username.'"><img src="'.$row['img_url'].'" width=400 style ="width: 100%; height:auto;"class="card-img-top"';
    echo '                    alt="'.$row['img_alt'].'">';
    echo '            </div>';
    echo '            <div class="col-1"></div>';
    echo '        </div>';
    echo '        <div class="card-body">';
    echo '            <h5><a class="card-title " style="text-decoration: none; color: black;" href="book.php?book_id='.$row['book_id'].'">'.$row['book_name'].'</a></h5>';
    echo '            <p class="card-text" >'.$row['book_author'].'</p>';
    echo '            <div class="row" ><h6 class="card-text position-absolute bottom-0 start-0" style="color: red; ">'.$row['book_price'].'$</h6>';
    echo '            <p class="card-text position-absolute bottom-0 start-50"" style="color: green;">Còn: '.$row['book_quantity'].'</p></div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
    }
    if($ok==0){
        echo '<h3 class="text-center">Không có sản phẩm nào</h3>';
    }
?>