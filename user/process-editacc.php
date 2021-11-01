<?php
    include '../conf.php';
    if(isset($_POST["sbChange"])){
        $new_password = $_POST['pass1'];
        $new_username = $_POST['user_name'];
        $useremail = $_POST['user_email'];
        $old_password= $_POST['pass'];
    }
    $sqlold="select * from tb_user where user_email = '$useremail'";
    $resultold = mysqli_query($conn, $sqlold);
    $rowold = mysqli_fetch_assoc($resultold);
    $old_password_hash = $rowold['user_pass'];
    if(password_verify($old_password,$old_password_hash)){
        $new_password_hash= password_hash($new_password,PASSWORD_DEFAULT);
        $sql = "update tb_user set user_pass ='$new_password_hash', user_name = '$new_username' where user_email = '$useremail'";
        $result = mysqli_query($conn, $sql);
        if($result>0){
            echo '<script language="javascript">';
            echo 'alert("Đổi mật khẩu thành công");
            setTimeout(function(){
            }, 5000); ';
            echo '</script>';
            header('location:../login.php');
        }
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Bạn đã nhập sai mật khẩu cũ"); history.back();';
        echo '</script>';
    }
?>