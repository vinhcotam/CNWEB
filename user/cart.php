<?php
	session_start();
		$book_id = $_GET['id'];
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
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Login.php">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../register.php">Đăng ký</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon -->
                    <a class="text-reset me-3" href="cart.php">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <!-- Notifications -->
                    <a class="text-reset me-3 hidden-arrow" href="#" id="navbarDropdownMenuLink"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Tình trạng đơn hàng</a>
                        </li>
                    </ul>

                    <!-- Avatar -->
                    <a class="d-flex align-items-center hidden-arrow" href="infor.php"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="true">
                        <i class="fas fa-user-circle" height="25" loading="lazy" style="color: black;"></i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- endNavbar -->
    </header>

    <!-- Table -->
    <div class="container-fluid">
        <div class="shopping-cart mt-5">
            <table class="table">
                <thead>
                    <tr >
                        <th scope="col">Tên sách</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <?php
                $sql="select * from tb_book,tb_img where tb_book.img_id=tb_img.img_id and book_id=$book_id";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){              
                ?>
                <tbody>
                    <?php
                            echo '<tr>';    
                                echo        '<td>'.$row["book_name"].'</td>';
                                echo '<td><img src="../'.$row["img_url"].'" alt="'.$row["img_alt"].'"  height="150"></td>';
                                echo '<td >'.$_GET['qty'].'</td>';
                                echo '<td >'.$row["book_price"].'</td>';
                                echo '<td >'. $row["book_price"] * $_GET['qty'].'</td>';
                                echo '<td >';
                                echo    '<a href="delcart.php?id='.$book_id.'" type="button" class="btn btn-danger">Delete</a>';
                                echo '</td>';
                        echo '</tr>';
                ?>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <div class="checkout-button" style="text-align: center;">
                <a href="checkout.php" class="btn btn-primary btn-lg active mt-2 mb-4" role="button"
                    aria-pressed="true">Thanh Toán</a>
            </div>
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