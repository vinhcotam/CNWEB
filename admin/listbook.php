<?php
include('header.php');
?>
<div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Giá sách</th>
                    <th scope="col">Số lượng còn</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Ảnh bìa</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('../conf.php');
                $sql="select * from tb_book, tb_img where tb_book.img_id = tb_img.img_id";
                $result=mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    echo '<th scope="row">'.$row["book_id"].'</th>';
                    echo '<td>'.$row["book_name"].'</td>';
                    echo '<td>'.$row["book_price"].'</td>';
                    echo '<td>'.$row["book_quantity"].'</td>';
                    echo '<td>'.$row["book_category"].'</td>';
                    echo '<td>'.$row["book_author"].'</td>';
                    echo '<td>'.$row["book_intro"].'</td>';
                    echo '<td><img src="../'.$row["img_url"].'" alt="'.$row["img_alt"].'"  height="150"></td>';
                    echo '
                    <td><a href=editbook.php?id='.$row["book_id"].'><button class="btn btn-success">Sửa</button></a>
                    <a href=deletebook.php?id='.$row["book_id"].'><button class="btn btn-danger">Xóa sách</button></a><td>';
                    }
                }
                ?>
                
            </tbody>
        </table>

</div>
<?php
include('footer.php');
?>