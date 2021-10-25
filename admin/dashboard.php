<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>IDEA Bookshop - Admin</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="min-height:1000px;">
            <div class="col-md-4">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 100%; height: 100%">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-4">IDEA Bookshop</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Danh mục
                            </a>
                        </li>
                        <li class="nav-item">
                            <hr>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Thành phần
                            </a>
                        </li>
                        <li class="nav-item">
                            <hr>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                Tùy chỉnh
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                Trang
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                                Bảng
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container-fluid" style="margin:0px; padding:0px;">
                    <div class="row">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="text-reset me-3" href="#">
                                    <i class="fas fa-bell" style="margin-top: 18px;"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <img src="../img/avatar-1.jpg" class="rounded-circle" height="25" alt="" loading="lazy"
                                    style="margin-top: 15px;" />
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <button class="btn btn-danger">Đăng xuất</button>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="row">
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav justify-content-start">
                                <li class="nav-item">
                                    <h2>Danh mục</h2>
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-6">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <button class="btn btn-success">Tạo bản báo cáo</button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <div class="card py-2 shadow border-primary">
                                <div class="card-body">
                                    <h5 class="card-title">Doanh thu(tháng)
                                    <i class="fab fa-bitcoin fa-3x" style="float:right;"></i></h5>
                                    <p class="card-text">???</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <div class="card py-2 shadow border-success">
                                <div class="card-body">
                                    <h5 class="card-title">Doanh thu(quý)
                                    <i class="fas fa-coins fa-3x" style="float:right;"></i></h5>
                                    <p class="card-text">???</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <div class="card py-2 shadow border-danger">
                                <div class="card-body">
                                    <h5 class="card-title">Lượt truy cập
                                    <i class="fas fa-mouse-pointer fa-3x" style="float:right;"></i></h5>
                                    <p class="card-text">???</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <div class="card py-2 shadow border-warning">
                                <div class="card-body">
                                    <h5 class="card-title">Sách bán trong tháng
                                    <i class="fas fa-shopping-cart fa-3x" style="float:right;"></i></h5>
                                    <p class="card-text">???</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>