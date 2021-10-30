<?php
    include 'header.php';
    include '../conf.php';
?>
<main>
    <h2>Thêm sách</h2>
    <form action="process_addbook.php" method="post">
        <div class="form-group row">
            <label for="book_name" class="col-sm-2 col-form-label">Tên sách</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="book_name" name="book_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="book_price" class="col-sm-2 col-form-label">Giá sách</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="book_price" name="book_price">
            </div>
        </div>
        <div class="form-group row">
            <label for="book_quantity" class="col-sm-2 col-form-label">Số lượng còn</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="book_quantity" name="book_quantity">
            </div>
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
                                    echo '<option value="'.$row['book_category'].'">'.$row['book_category'].'</option>';                               
                                }
                            }
                        ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="book_author" class="col-sm-2 col-form-label">Tác giả</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="book_author" name="book_author">
            </div>
        </div>
        <div class="form-group row">
            <label for="book_intro" class="col-sm-2 col-form-label">Giới thiệu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="book_intro" name="book_intro">
            </div>
        </div>
        <div class="form-group row">
            <label for="img_id" class="col-sm-2 col-form-label">Id ảnh</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="img_id" name="img_id">
            </div>
        </div>
        <div class="form-group row">
            <label for="img_url" class="col-sm-2 col-form-label">Nguồn ảnh</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="img_url" name="img_url">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </div>
    </form>
</main>
<?php
    include 'footer.php';
?>