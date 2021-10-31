<?php
    session_start();
    if(!isset($_SESSION['loginOK'])){
        header("Location:../home.php"); 
    }
    include('header.php');
?>

<div class="container-fluid">
    <div class="row" style="min-height:1000px;">
        <div class="col-md-4">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 100%; height: 100%">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
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
                            Thông tin tài khoản khách 
                        </a>
                    </li>
                    <li class="nav-item">
                        <hr>
                    </li>
                    <li>
                        <a href="listbook.php" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Quản lý sách
                        </a>
                    </li>
                    <li class="nav-item">
                        <hr>
                    </li>
                    <li>
                        <a href="receipt.php" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            Quản lý đơn hàng
                        </a>
                    </li>
                    <li>
                        <a href="comment.php" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Comment của người dùng
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
                            <a class="nav-link" href="../logout.php">
                                <button class="btn btn-danger" type="submit">Đăng xuất</button>
                            </a>
                        </li>
                    </ul>
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Địa chỉ email</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!--thay đổi-->
                                <?php
                    //4 bước
                    //b1:
                    include '../conf.php';
                    //b2
                    $sql="select * from tb_user where level_user=0";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td>'.$row['user_name'].'</td>';
                            echo '<td>'.$row['user_email'].'</td>';
                            echo '</tr>';   
                        }
                    }
                ?>

                                <!--thay đổi-->
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<?php
    include('footer.php');
    ?>