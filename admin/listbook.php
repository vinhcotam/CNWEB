<?php
    session_start();
    if(!isset($_SESSION['loginOK'])){
        header("Location:../home.php"); 
    }
    if(!isset($_SESSION['admin'])){
        echo '<script language="javascript">';
        echo 'alert("Bạn không có quyền truy cập vào admin"); history.back();';
        echo '</script>';
        // header("Location:../home.php"); 
    }
include('header.php');
$author='';
$bookname='';
if(isset($_GET['category'])){
    $category=$_GET['category'];
}
else {
    $category='default';
    if(isset($_POST['Ibookname']))
    $bookname=$_POST['Ibookname'];
    if(isset($_POST['Ibookauthor']))
    $author = $_POST['Ibookauthor'];
}
?>
<div class="container-fluid">
    <div class="row">
        <h3 class="text-center">Tìm Sách</h3>
        <div class="col-md-6">
            <form action="listbook.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Ibookname" name="Ibookname" value = "<?php echo $bookname?>">
                    <label for="floatingInput">Tên sách</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="Ibookauthor" name = "Ibookauthor" value = "<?php echo $author?>">
                    <label for="floatingInput">Tên tác giả</label>
                </div>
                <div class="form-floating">
                    <button class="btn btn-primary" type="sumbit">Tìm kiếm</button>
                    <a href="addbook.php" class="btn btn-primary" type="sumbit">Thêm sách</a>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle w-50" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Lọc theo thể loại
                </button>
                <ul class="dropdown-menu w-50" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dropdown-item" href="listbook.php?category=Tiểu thuyết">Tiểu thuyết</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="listbook.php?category=Trinh thám">Trinh thám</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="listbook.php?category=Kinh dị">Kinh dị</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="listbook.php?category=Lãng mạn">Lãng mạn</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="listbook.php?category=Truyện ngắn">Truyện ngắn</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="listbook.php?category=Light Novel">Light Novel</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="listbook.php?category=Cổ tích">Cổ tích</a>
                    </li>
                </ul>
            </div>
            <p>
                
            </p>
            <div class="col-md-6">
            <a href="dashboard.php"><button class="btn btn-success w-100">Quay về dashboard</button></a>
            </div>
            
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="col">ID</th>
                <th class="col-2">Tên sách</th>
                <th class="col">Giá sách</th>
                <th class="col">Số lượng còn</th>
                <th class="col">Thể loại</th>
                <th class="col">Tác giả</th>
                <th class="col-4">Mô tả</th>
                <th class="col">Ảnh bìa</th>
                <th class="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody id="bodytable">
            <?php
            include('loadtable.php')
            ?>
        </tbody>
    </table>

</div>

<script>
function filter1(category) {
    $category = category;
    load('loadtable.php');
}
</script>
<?php
include('footer.php');
?>