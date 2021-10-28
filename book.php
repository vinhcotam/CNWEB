<?php
  session_start();
$book_id=$_GET['book_id'];
include 'conf.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Chi tiết sản phẩm</title>
</head>

<body>
    <?php
    include 'conf.php';
        $sql="select * from tb_book,tb_img where tb_book.img_id=tb_img.img_id and book_id='$book_id '";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
    ?>
    <div class="col-md">
        <div class="thumbnail img-center">
            <img src="<?php echo $row['img_url'] ?>" alt="" height="300px">
            <div class="caption">

                <h3><?php echo $row['book_name'] ?></h3>
                <p class="cost">Giá:<?php echo $row['book_price'] ?></p>
                <p class="author">Tác giả:<?php echo $row['book_author'] ?></p>
                <p class="category">Thể loại:<?php echo $row['book_category'] ?></p>
                <p class="intro">Giới thiệu:<?php echo $row['book_intro'] ?></p>
                <p class="btn-cost">
                    <a href="home.php" class="btn btn-success" role="button">Quay lại trang chủ</a>
                <form method="post" action="./user/cart.php">
                    <input type="hidden" name="bookid" value="<?php echo $book_id;?>">
                    <input type="submit" value="Thêm vào giỏ hàng" name="cart" class="btn btn-primary">
                </form>
                </p>
            </div>
        </div>
    </div>
    <?php
        }
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>