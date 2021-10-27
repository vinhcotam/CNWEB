<?php
include('header.php');
?>
<div class="container-fluid">
    <div class="row">
        <h3 class="text-center">Tìm Sách</h3>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nhật ký trong tù">
                <label for="floatingInput">Tên sách</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Nguyễn Ái Quốc">
                <label for="floatingInput">Tên tác giả</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Thể loại
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Tiểu thuyết</a></li>
                    <li><a class="dropdown-item" href="#">Trinh thám</a></li>
                    <li><a class="dropdown-item" href="#">Kinh dị</a></li>
                    <li><a class="dropdown-item" href="#">Lãng mạn</a></li>
                    <li><a class="dropdown-item" href="#">Truyện ngắn</a></li>
                    <li><a class="dropdown-item" href="#">Light Novel</a></li>
                </ul>
            </div>
        </div>
    </div>
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