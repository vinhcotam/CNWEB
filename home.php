<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>IDEA Bookstore</title>
</head>

<body>
    <?php
        include ('conf.php');
        if(isset($_GET['username']))
        $username = $_GET['username'];
        else if(isset($POST['username']))
        $username = $POST['username'];
            else $username='';
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
                        <img src="./img/Logo.png" height="70" alt="Logo" loading="lazy" />
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php?username=<?php echo $username?>">Home</a>
                        </li>
                        <?php if($username==''){
                        echo '<li class="nav-item">';
                        echo '    <a class="nav-link" href="login.php">????ng nh???p</a>';
                        echo '</li>';
                        echo '<li class="nav-item">';
                        echo '    <a class="nav-link" href="register.php">????ng k??</a>';
                        echo '</li>';

                        }
                        ?>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon -->
                    <a class="text-reset me-3" href="user/cart.php?username=<?php echo $username?>">
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
                            <a class="dropdown-item" href="#">T??nh tr???ng ????n h??ng</a>
                        </li>
                    </ul>

                    <!-- Avatar -->
                    <?php
                    $_SESSION['loginOK'] = $username;
                    ?>
                    <a class="d-flex align-items-center hidden-arrow" href="user/infor.php?username=<?php echo $username;?>"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="true" style="color: black;">
                        <i class="fas fa-user-circle" height="25" loading="lazy"></i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- endNavbar -->
    </header>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Carousel -->

    <!-- Search Box -->
    <section class="products section bg-gray mt-5">
        <div class="container">

            <form action="home.php?username=<?php echo $username; ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Ibookname" name="Ibookname">
                            <label for="floatingInput">T??n s??ch</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="Ibookauthor" name="Ibookauthor">
                            <label for="floatingInput">T??n t??c gi???</label>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="Iminprice" name="Iminprice" value="0">
                            <label for="floatingInput">Gi?? t???i thi???u</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" id="Imaxprice" name="Imaxprice" value="8000">
                            <label for="floatingInput">Gi?? t???i ??a</label>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="form-floating">
                        <button class="btn btn-primary" type="sumbit">T??m ki???m</button>
                    </div>
                </div>
            </form>
            <div class="container p-4">
                
            </div>
        </div>
        </div>
    </section>
    <p class="lead text-center text-muted">Danh s??ch s???n ph???m</p><div class="row">
                    <!-- The Loai -->
                    <div class="col-md-4">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Th??? lo???i
                        </button>
                        <ul class="dropdown-menu  w-100" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=C??? t??ch">C??? t??ch</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=Ti???u thuy???t">Ti???u thuy???t</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=Trinh th??m">Trinh th??m</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=Light novel">Light novel</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=?????i th?????ng">?????i th?????ng</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=T??nh c???m">T??nh c???m</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=Si??u nhi??n">Si??u nhi??n</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=H???c t???p">H???c t???p</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=Truy???n ng???n">Truy???n ng???n</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=H??i h?????c">H??i h?????c</a></li>
                            <li><a class="dropdown-item" href="home.php?username=<?php echo $username;?>&category=S??ch k?? n??ng">S??ch k?? n??ng</a></li>
                        </ul>
                    </div>

                    </div>

                </div>
    <div class="row">
        <?php
            if(isset($_GET['page'])){
                $page=$_GET['page'];
            }
            else{
                $page=1;
            }
            if(isset($_GET['category'])){
                $category=$_GET['category'];
                $bookname='';
                $author='';
            }
            else{
                $category="";
                if(isset($_POST['Ibookname'])){
                    $bookname=$_POST['Ibookname'];
                }
                if(isset($_POST['Ibookauthor'])){
                    $author=$_POST['Ibookauthor'];
                }
            }
            if(isset($_POST['Iminprice'])){
                $minprice=$_POST['Iminprice'];
            } else $minprice=0;
            if(isset($_POST['Imaxprice'])){
                $maxprice=$_POST['Imaxprice'];
            } else $maxprice=1000000000;
            include('loadcontent.php') ;
        ?>
    </div>
    <br>
    <div class="row" style="text-align: center;">
        <nav aria-label="">
            <?php
            $sqldemsach="select count(book_id) from tb_book where 1";
            if(isset($category))
            if($category!=''){
                $sqldemsach .= " and book_category like '%$category%'";
            }
            if(isset($bookname))
            if($bookname != ''){
                $sqldemsach .= " and book_name like '%$bookname%'";
            }
            if(isset($author))
            if($author !=''){
                $sqldemsach .= " and book_author like '%$author%'";
            }
            if(isset($minprice))
            if($minprice !=''){
                $sqldemsach .= " and book_price > $minprice";
            }
            if(isset($maxprice))
            if($maxprice !=''){
                $sqldemsach .= " and book_price < $maxprice";
            }
            $resultdemsach = mysqli_query($conn, $sqldemsach);
            $laydong=mysqli_fetch_array($resultdemsach);
            $sosach =  $laydong['count(book_id)']; 
            $sotrang = (int)(1 + $sosach/8);
            $nextp = $page+1;
            $prevp = $page-1;
        ?>
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if($page==1) echo 'disabled';?>">
                    <a class="page-link" href="home.php?page=<?php echo $prevp;?>&username=<?php echo $username;?>">Tr?????c</a>
                </li>
                <?php
                    for( $i=(int)1; $i<=$sotrang; $i++){
                        if($i==$page){
                            echo '<li class="page-item active" aria-current="page">
                                 <a class="page-link" href="home.php?page='.$i.'&username='.$username.'">'.$i.'</a>
                                 </li>';
                        }
                        else{
                            echo '<li class="page-item">
                                 <a class="page-link" href="home.php?page='.$i.'&username='.$username.'">'.$i.'</a>
                                 </li>';
                        }
                    }
                  ?>
                <li class="page-item <?php if($page==$sotrang) echo 'disabled';?>">
                    <a class="page-link" href="home.php?page=<?php echo $nextp;?>&username=<?php echo $username;?>">Sau</a>
                </li>
            </ul>
        </nav>
    </div>

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
                            175 T??y S??n, Qu???n ?????ng ??a, H?? N???i -
                            C??ng Ty C??? Ph???n Ph??t H??nh S??ch IDEA Group -
                            IDEA Bookstore nh???n ?????t h??ng tr???c tuy???n v?? giao h??ng t???n n??i. KH??NG h??? tr??? ?????t mua v??
                            nh???n
                            h??ng tr???c ti???p t???i v??n ph??ng c??ng nh?? t???t c??? H??? Th???ng IDEA tr??n to??n qu???c.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            D???ch v???
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">??i???u kho???n s??? d???ng</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Ch??nh s??ch b???o m???t</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Gi???i thi???u</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">H??? th???ng trung t??m - nh?? s??ch</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            H??? tr???
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Ch??nh s??ch ?????i tr??? - Ho??n ti???n</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Ph????ng th???c v???n chuy???n</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Ph????ng th???c thanh to??n v?? xu???t H??a ????n</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> H?? N???i, HN 10000, VN</p>
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
            ?? 2021 Copyright:
            <a class="text-reset fw-bold" href="">IDEA GROUP</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>