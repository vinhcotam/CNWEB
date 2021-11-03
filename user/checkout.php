<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Thanh Toán</title>
</head>

<body>
    <?php
        session_start();
        if(!isset($_SESSION['loginOK'])){
            echo '<script language="javascript">';
            echo 'alert("Bạn cần phải đăng nhập"); window.location.href = "../login.php"';
            echo '</script>';
            //header("Location:../login.php"); 
        }
    include ("../conf.php");
    if(isset($_GET['id'])) 
    $book_id=$_GET['id'];
    if(isset($_GET['username']))
    $username=$_GET['username'];
    if(isset($_GET['quantity']))
    $quantity=$_GET['quantity'];
    $sqluser = "select * from tb_user where user_email = '$username'";
    $sqlbook = "select * from tb_book, tb_img where book_id = '$book_id' and tb_book.img_id = tb_img.img_id";
    $resultuser = mysqli_query($conn, $sqluser);
    $resultbook = mysqli_query($conn, $sqlbook);
    $rowuser = mysqli_fetch_array($resultuser);
    $rowbook = mysqli_fetch_array($resultbook);
    $shipprice = 0;//
    ?>
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
                            <a class="nav-link" href="../Home.php?username=<?php echo $username?>">Home</a>
                        </li>
                        <?php if($username==''){
                        echo '<li class="nav-item">';
                        echo '    <a class="nav-link" href="login.php">Đăng nhập</a>';
                        echo '</li>';
                        echo '<li class="nav-item">';
                        echo '    <a class="nav-link" href="register.php">Đăng ký</a>';
                        echo '</li>';
                        }
                        ?>
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
                    <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
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
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="../user/infor.php?username=<?php echo $username;?>"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="../img/avatar1.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="infor.php?username=<?php echo $username;?>">Hồ sơ của tôi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- endNavbar -->
    </header>

    <!-- Checkout -->
    <section>
        <div>
            <div class="d-flex align-items-start bg-light pb-4 pb-4" style="height: 400px;">
                <div class="col-md-6">
                    <div class="billingdetail">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h4 class="widget-title">Thông tin Hóa đơn</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-outline">
                                            <label class="form-label" for="typeText">
                                                <h6>Họ và tên</h6>
                                            </label>
                                            <input type="text" id="iName" class="form-control"
                                                value="<?php echo $rowuser['user_name']?>">
                                        </div>
                                        <div class="form-outline">
                                            <label class="form-label" for="typeText">
                                                <h6>Số điện thoại</h6>
                                            </label>
                                            <input type="text" id="iPhone" class="form-control">
                                        </div>
                                        <div class="form-outline">
                                            <label class="form-label" for="typeText">
                                                <h6>Địa chỉ</h6>
                                            </label>
                                            <input type="text" id="iAddress" class="form-control">
                                        </div>
                                    </th>
                                </tr>
                        </table>
                    </div>
                    <div class="paymentmethod">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h4 class="widget-title"> Phương thức Thanh toán </h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Thanh toán tiền mặt khi nhận hàng
                                            </label>
                                        </div>
                                    </th>
                                </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-checkout-details">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h4 class="widget-title" style="text-align: center;">Đơn Hàng</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            <a class="pull-left" href="book.php">
                                                <div class="product-info" style="text-align: center;">
                                                    <img width="90" src="<?php echo $rowbook['img_url']?>" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <ul>
                                            <h5><?php echo $rowbook['book_name']?></h5>
                                            <li>
                                                <span>Giá:</span>
                                                <span><?php echo $rowbook['book_price']?>$</span>
                                            </li>
                                            <li>
                                                <span>Số lượng:</span>
                                                <span><?php echo $quantity?></span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <h6>Thành tiền:</h6>
                                            </li>
                                            <li>
                                                <h6>Phí vận chuyển:</h6>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>
                                                <span><?php echo $bookprice = 1*(int)$rowbook['book_price']* $_GET['quantity']; ?>$</span>
                                            </li>
                                            <li>
                                                <span><?php echo $shipprice;?>$</span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <h6>Tổng:</h6>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>
                                                <span><?php echo $total = $bookprice+$shipprice;?>$</span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="checkoutbutton bg-light pt-5 pb-2" style="text-align: center;">
                    <button type="button" id="btnorder" class="btn btn-primary btn-lg">Tiến hành đặt hàng</button>
            </div>
            <script>
                var bt = document.getElementById('btnorder');
                bt.addEventListener('click', function() {
                    var name = document.getElementById("iName").value;
                    var phone = document.getElementById('iPhone').value;
                    var address = document.getElementById('iAddress').value;
                    if (name == '') {
                        alert('Vui lòng nhập tên');
                        return;
                    }
                    if (phone == '') {
                        alert('Vui lòng nhập số điện thoại');
                        return;
                    }
                    if (address == '') {
                        alert('Vui lòng nhập địa chỉ nhận hàng');
                        return;
                    }
                    window.open("processorder.php"+
                    "?id="+'<?php echo $book_id;?>'+
                    "&quantity="+'<?php echo $quantity;?>'+
                    "&username="+'<?php echo $username;?>'+
                    "&total="+'<?php echo $total;?>'+
                    "&name="+name+"&phone="+phone+"&address="+address
                    );
                })
            </script>

    </section>
    <!-- endCheckout -->

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