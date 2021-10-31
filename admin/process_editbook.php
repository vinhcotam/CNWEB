
    <?php
    include('../conf.php');
        if(isset($_POST["edit"])){
            $book_name = $_POST['book_name'];
            $book_price = $_POST['book_price'];
            $book_quantity = $_POST['book_quantity'];
            $book_category = $_POST['book_category'];
            $book_author = $_POST['book_author'];
            $book_intro = $_POST['book_intro'];
            $img_id = $_POST['img_id'];
            $img_url = $_POST['img_url'];
            $img_alt=$_POST['img_alt'];
            $book_id=$_POST['book_id'];
            $sql = "UPDATE tb_book SET book_name='$book_name',book_price='$book_price',
            book_quantity='$book_quantity',book_category='$book_category',book_author='$book_author',
            book_intro='$book_intro' WHERE book_id = $book_id";
            echo $sql2="update tb_img set img_url='$img_url' where img_id='$book_id'";
            $result = mysqli_query($conn,$sql);
            $result2 = mysqli_query($conn,$sql2);
}
    header(location:"editbook.php");
?>