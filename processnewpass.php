<?php
   include('conf.php');
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $code = $_POST['code'];
   // echo $conn;
   //echo $result;
    // 3. XỬ lý kết quả
    $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
    $sql_2 = "update tb_user set user_pass = '$pass_hash',user_code='$code' WHERE user_email='$email'";
    $result_2 = mysqli_query($conn,$sql_2);

    if($result_2 > 0){
        echo "<span>Đã đổi được mật khẩu</span>"; 
    }
    else{
       echo 'Không đổi được mật khẩu';
    }
?>