<?php
    include('conf.php');
    if(isset($_POST['sbNew'])){
        $email = $_POST['email'];
        $pass1 = $_POST['txtPass1'];
        $pass2  = $_POST['txtPass2'];
        $code = $_POST['code'];
    }
    // 1. Kết nối DB Server
    
   // echo $conn;
    // 2. Truy vấn dữ liệu
    $sql = "SELECT * FROM tb_user WHERE user_email='$email' OR user_code='$code'";
    $result = mysqli_query($conn,$sql);
   //echo $result;
    // 3. XỬ lý kết quả
    $pass_hash=password_hash($pass1,PASSWORD_DEFAULT);
    
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)
        $sql_2 = "update tb_user set user_pass = '$pass_hash',user_code='$code' WHERE user_email='$email' ";
        $result_2 = mysqli_query($conn,$sql_2);

        if($result_2 > 0){
            echo 'Đã đổi được mật khẩu';
        }
    }else{
       echo 'Không đổi được mật khẩu';
    }
?>