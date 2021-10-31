<?php
    session_start();
    if(!isset($_SESSION['loginOK'])){
        header("Location:../login.php"); 
    }
    

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css/infor.css">
<!------ Include the above in your HEAD tag ---------->

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<?php
  include('../conf.php');
  if(isset($_GET['username']))
        $username = $_GET['username'];
        else if(isset($POST['username']))
        $username = $POST['username'];
            else $username='';
    $sql="select * from tb_user where user_email='$username'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
?>
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="../img/no-avatar.jpg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <?php
                echo '<div class="profile-usertitle">';
                echo  '   <div class="profile-usertitle-name">' ;
                         echo  '<p>'.$row['user_name'].' </p>';
                 echo   '</div>';
                 $trangthai="Chưa kích hoạt";
                    ?>

                <div class="profile-usertitle-job">
                    <?php  
                        if($row['user_status']=true){
                            $trangthai="Đã kích hoạt";
                            echo $trangthai;
                        }else{
                            echo $trangthai;
                        }
                        
                        ?>
                </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            Thông tin tổng quát </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-user"></i>
                            Chỉnh sửa tài khoản </a>
                    </li>
                    <li>
                        <a href="checkstatus.php?id=<?php echo $username;?>" target="_blank">
                            <i class="glyphicon glyphicon-ok"></i>
                            Tình trạng đơn hàng </a>
                    </li>
                    <li>
                        <a href="post.php?id=<?php echo $username;?>" target="_blank">
                        <i class="fas fa-comments"></i>Gửi ý kiến của bạn  </a>
                    </li>
                    <li>
                        <a href="../home.php?username=<?php echo $username ?>" target="_blank">
                        <i class="fas fa-home"></i>Quay về trang chủ </a>
                    </li>
                    <li>
                        <a href="../logout.php">
                            <i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>
    </div>
    <div class="col-md-9">
        <div class="profile-content">
            Some user related content goes here...
        </div>
    </div>
</div>
</div>
<?php
}
?>
<center>
    <strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">Idea Bookstore</a></strong>
</center>