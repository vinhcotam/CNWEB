<?php
    include 'header.php';
    include '../conf.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
?>

<head>

</head>
<main>
    <h2>Edit</h2>
    <?php
        $sql="SELECT * FROM tb_book,tb_img WHERE book_id=$id and tb_book.img_id=tb_img.img_id";
        $res=mysqli_query($conn, $sql);
        if($res==true)
        {
            if(mysqli_num_rows($res)==1)
            {
                $row=mysqli_fetch_assoc($res);
                $book_name = $row['book_name'];
                $book_price = $row['book_price'];
                $book_quantity = $row['book_quantity'];
                $book_category = $row['book_category'];
                $book_author = $row['book_author'];
                $book_intro = $row['book_intro'];
                $img_id = $row['img_id'];
                $img_url = $row['img_url'];
                $img_alt = $row['img_alt'];
                
            }
            else
            {
                header('location:"dashboard.php"');
            }
        }
    ?>
    <?php
        if(isset($_POST["edit"])){
            $book_name = $_POST['book_name'];
            $book_price = $_POST['book_price'];
            $book_quantity = $_POST['book_quantity'];
            $book_category = $_POST['book_category'];
            $book_author = $_POST['book_author'];
            $book_intro = $_POST['book_intro'];
            $img_url = $_POST['img_url'];
            $img_alt=$_POST['img_alt'];
            $sql = "UPDATE tb_book SET book_name='$book_name',book_price='$book_price',
            book_quantity='$book_quantity',book_category='$book_category',book_author='$book_author',
            book_intro='$book_intro'WHERE book_id = $id";
            $result = mysqli_query($conn,$sql);
            //$sql2="update tb_img set img_url='$img_url'";
           // $result2 = mysqli_query($conn,$sql2);
            header("location:listbook.php");
            //echo "LOI";
}

?>


    <form action="" method="POST">
        <label for="book_id" name="book_id">Mã: <?php echo $id; ?></label>

        <div class="mb-3">
            <label for="book_name" class="form-label">Tên sách</label>
            <input type="text" class="form-control" name="book_name" value="<?php echo $row['book_name']; ?>">
        </div>
        <div class="mb-3">
            <label for="book_price" class="form-label">Giá sách</label>
            <input type="text" class="form-control" name="book_price" value="<?php echo $row['book_price']; ?>">
        </div>
        <div class="mb-3">
            <label for="book_quantity" class="form-label">Số lượng còn</label>
            <input type="number" class="form-control" name="book_quantity" value="<?php echo $row['book_quantity']; ?>">
        </div>
        <div class="mb-3">
            <label for="book_author" class="form-label">Tác giả</label>
            <input type="text" class="form-control" name="book_author" value="<?php echo $row['book_author']; ?>">
        </div>
        <div class="mb-3">
            <label for="book_intro" class="form-label">Giới thiệu sách</label>
            <input type="text" class="form-control" name="book_intro" value="<?php echo $row['book_intro']; ?>">
        </div>
        <div class="mb-3">
            <label for="img_url" class="form-label">Hình ảnh</label>
            <?php echo '<img src="'.$row["img_url"].'" alt="'.$row["img_alt"].'"  height="150">'; ?>
        </div>
        <div class="mb-3">
            <label for="category" class="col-sm-2 col-form-label">Thể loại</label>
            <div class="col-sm-10">
                <select name="category" id="category">
                    <?php
                            $sql = "SELECT * FROM tb_book ";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)){
                                while($row=mysqli_fetch_assoc($result)){                      
                                   echo '<option value="">'.$row['book_category'].'</option>';                                 
                                }
                            }
                        ?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" value="edit" name="edit">Sửa</button>
    </form>
</main>

<?php
    include 'footer.php';
?>