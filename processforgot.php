<?php
    //ktra tinh hop le du lieu
    //nhan du lieu tu form
    include('sendcode.php');
    include('conf.php');
    if(isset($_POST['sbForgot'])){
        $email=$_POST['txtEmail'];
    }
    $sql="select * from tb_user where user_email='$email'";
    //echo $sql;
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<=0){
        echo 'email Khong ton tai';
    }
    else{
        $code=md5(uniqid(rand(),true));
            sendEmail($email,$code);
    }
    //neu chua thi moi luu vao csdl va gui email

?>