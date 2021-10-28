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
        echo "<div>Đã đổi được mật khẩu</div>"; 
        echo "<a href='login.php'>Nhấn vào đây để về trang đăng nhập</a>";
    }
    else{
       echo 'Không đổi được mật khẩu';
    }
?>
<?php
//   include('conf.php');
//   if(isset($_POST['sbNew'])){
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     $code = $_POST['code'];
//     $pass2 = $_POST['txtPass2'];
//     if($pass ='' || $pass2=''){
//       echo "Hãy nhập đầy đủ";
//     }else if($pass!=$pass2){
//       echo "Mật khẩu không khớp";
//     }else{
//       $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
//       $sql_2 = "update tb_user set user_pass = '$pass_hash',user_code='$code' WHERE user_email='$email'";
//       $result_2 = mysqli_query($conn,$sql_2);

//       if($result_2 > 0){
//           echo "<span>Đã đổi được mật khẩu</span>"; 
//       }
//       else{
//         echo 'Không đổi được mật khẩu';
//       }
//     }
//   }
?>
