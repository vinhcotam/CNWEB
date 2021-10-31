<?php
    include 'header.php';
    include '../conf.php';
    if(isset($_GET['book_id'])){
        $book_id=$_GET['book_id'];
    }
    $sql="select * from tb_book, tb_img where tb_book.img_id=tb_img.img_id and book_id=$book_id";
    $result=mysqli_query($conn, $sql);
    if( mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $book_id=$row['book_id'];
        $book_name=$row['book_name'];
        $book_category=$row['book_category'];
        $book_price=$row['book_price'];
        $book_quantity=$row['book_quantity'];
        $book_author=$row['book_author'];
        $book_intro=$row['book_intro'];
        $img_id=$row['img_id'];
        $img_url=$row['img_url'];
    }
?>

<head>

</head>
<main>
    <h2>Edit</h2>


    <form action="process_editbook.php" method="POST">
        <label for="book_id">Mã sách: <?php echo $book_id; ?></label>
        <input type="text" hidden="hidden" name="book_id" value="<?php echo $book_id; ?>">
        <input type="text" hidden="hidden" name="img_id" value="<?php echo $img_id; ?>">
        <div class="form-floating">
            <input type="text" class="form-control" id="book_name" name="book_name" value="<?php echo $book_name;?>">
            <label for="floatingInput">Tên sách</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="book_category" name="book_category" value="<?php echo $book_category;?>">
            <label for="floatingInput">Thể loại</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="book_price" name="book_price" value="<?php echo $book_price;?>">
            <label for="floatingInput">Giá</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="book_quantity" name="book_quantity" value="<?php echo $book_quantity;?>">
            <label for="floatingInput">Số lượng</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="book_author" name="book_author" value="<?php echo $book_author;?>">
            <label for="floatingInput">Tên tác giả</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="book_intro" name="book_intro" value="<?php echo $book_intro;?>">
            <label for="floatingInput">Giới thiệu</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="img_url" name="img_url" value="<?php echo $img_url;?>">
            <label for="floatingInput">Đường dẫn ảnh</label>
        </div>
        <button type="submit" class="btn btn-primary" name="edit">Sửa</button>
    </form>
    <br>
        <button id="review" class="btn btn-warning">Ấn vào đây để xem trước ảnh</button>
    <script>
        var btn= document.getElementById('review');
        btn.onclick = function(){
        var link= document.getElementById('img_url').value;
            window.open(link);
        }
    </script>
</main>

<?php
    include 'footer.php';
?>