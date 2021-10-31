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
        $sql="SELECT * FROM tb_img,tb_book WHERE book_id=$id and tb_book.img_id=tb_img.img_id";
        echo $sql;
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
                $img_url = $row['img_url'];
                $img_alt = $row['img_alt'];
                
            }
            else
            {
                header('location:"dashboard.php"');
            }
        }
    ?>


    <form action="process_editbook.php" method="POST">
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
            <input type="text" name="img_id" hidden="hidden " value="<?php echo $row['img_id']; ?>">
            <input type="text" name="img_alt" hidden="hidden " value="<?php echo $row['img_alt']; ?>">
            <input type="text" name="book_id" hidden="hidden " value="<?php echo $row['book_id']; ?>">
            <?php echo '<img src="'.$row["img_url"].'" alt="'.$row["img_alt"].'"  height="150">'; ?>
                <label for="img_url" class="col-sm-2 col-form-label">Thay ảnh</label>
                    <input type="text" class="form-control" id="img_url" name="img_url">
            </div>
        </div>
        <div class="mb-3">
            <label for="book_category" class="col-sm-2 col-form-label">Thể loại</label>
            <div class="col-sm-10">
                <select name="book_category" id="book_category">
                    <?php
                            $sql = "SELECT * FROM tb_book ";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)){
                                while($row=mysqli_fetch_assoc($result)){                      
                                   echo '<option value="'.$row['book_category'].'">'.$row['book_category'].'</option>';                                 
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