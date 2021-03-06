<?php
		if(isset($_GET['username'])){
            $username = $_GET['username'];
        }
        if($username==''){
            echo '<script language="javascript">';
            echo 'alert("Bạn cần đăng nhập để sử dụng tính năng này"); history.back();';
            echo '</script>';
        }
           
	include '../conf.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="../css/empty-cart.css">
    <title>Giỏ Hàng</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" href="#">
                        <img src="../img/Logo.png" height="70" alt="Logo" loading="lazy" />
                    </a>
                    <!-- Left links -->
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon -->
                    <a class="text-reset me-3" href="#">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <!-- Notifications -->
                    <a class="text-reset me-3 hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Tình trạng đơn hàng</a>
                        </li>
                    </ul>

                    <!-- Avatar -->
                    <a class="d-flex align-items-center hidden-arrow" href="infor.php?username=<?php echo $username;?>" id="navbarDropdownMenuLink"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="true">
                        <i class="fas fa-user-circle" height="25" loading="lazy" style="color: black;"></i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- endNavbar -->
    </header>

    <!-- Table -->
    <div class="container-fluid">
        <hr>
        <div class="row" style="float: right;">  
        <p onclick="location.reload();" style="font-size: 28px; color: green;">Làm mới  <i class="fas fa-sync-alt"></i></p>
        </div>
        <div class="shopping-cart mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope='col'>Người nhận</th>
                        <th scope="col">Tên sách</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Ngày đặt</th>
                        <th scope="col">Địa chỉ nhận hàng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql="select * from tb_receipt, tb_book, tb_img where tb_book.img_id = tb_img.img_id and tb_receipt.book_id = tb_book.book_id and user_email = '$username'";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                    echo '<tr>';
                    echo '<td>'.$row['user_name'].'</td>';
                    echo '<td>'.$row['book_name'].'</td>';
                    echo '<td><img style="height: 160px;" src="'.$row['img_url'].'"></td>';
                    echo '<td>'.$row['quantity'].'</td>';
                    echo '<td>'.$row['date_buy'].'</td>';
                    echo '<td>'.$row['address'].'</td>';
                    echo '<td>'.$row['book_price'].'</td>';
                    echo '<td>'.$row['total'].'</td>';
                    if($row['status'] == '0'){
                        echo '<td><p style="color: gray;">Chờ duyệt đơn</p></td>';
                        echo '<td><a href="processcancelorder.php?id='.$row['receipt_id'].'&username='.$username.'"><button class="btn btn-danger">Hủy đơn</button></a></td>';
                    }
                    if($row['status'] == '1'){
                        echo '<td><p class="text-warning">Chờ giao hàng</p></td>';
                        echo '<td><a href="processcancelorder.php?id='.$row['receipt_id'].'&username='.$username.'"><button class="btn btn-danger">Hủy đơn</button></a></td>';
                    }
                    if($row['status'] == '2'){
                        echo '<td><p style="color: green;">Đã nhận hàng</p></td>';
                    }
                    if($row['status'] == '3'){
                        echo '<td><p style="color: red;">Đã hủy</p></td>';
                    }
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- endTable -->

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>IDEA Bookstore
                        </h6>
                        <p>
                            175 Tây Sơn, Quận Đống Đa, Hà Nội -
                            Công Ty Cổ Phần Phát Hành Sách IDEA Group -
                            IDEA Bookstore nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận
                            hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống IDEA trên toàn quốc.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Dịch vụ
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Điều khoản sử dụng</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Chính sách bảo mật</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Giới thiệu</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Hệ thống trung tâm - nhà sách</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Hỗ trợ
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Chính sách đổi trả - Hoàn tiền</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Phương thức vận chuyển</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Phương thức thanh toán và xuất Hóa đơn</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Hà Nội, HN 10000, VN</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@ideagroup.net
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 84 xxx xxx xxx</p>
                        <p><i class="fas fa-print me-3"></i> + 84 xxx xxx xxy</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="">IDEA GROUP</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

</html>