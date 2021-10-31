<?php
    include '../conf.php';
    if(isset($_POST["sbChange"])){
        $user_email=$_POST['email'];
        $user_name=$_POST['user_name'];
        $pass=$_POST['pass'];
        $pass1=$_POST['pass1'];
        $pass2=$_POST['pass2'];
        $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
        if($user_name=='' ||$pass1 =='' ||$pass2==''){
            echo "Hãy nhập đầy đủ thông tin";
        }
        else{
            // $sql="select* from tb_user where user_email='$user_email' and user_pass='$pass_hash'";
            // echo $pass_hash;
            // $result=mysqli_query($conn,$sql);
            // if(mysqli_num_rows($result)==0){
            //     echo 'K đúng mật khẩu';
            // }else{
                // echo 'Khớp mật khẩu';
                $pass_hash1=password_hash($pass1,PASSWORD_DEFAULT);
                $sql2="update tb_user set user_name ='$user_name',user_pass='$pass_hash1' where user_email='$user_email'";
                $result2=mysqli_query($conn,$sql2);
                echo "Đổi thành công";
                header("Location:../login.php");
            // }   
        }
}

?>