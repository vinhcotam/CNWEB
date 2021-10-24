<?php
    //ktra tinh hop le du lieu
    //nhan du lieu tu form
    include('send.php');
    include('conf.php');
    if(isset($_POST['sbmRegister'])){
        $user=$_POST['txtUser'];
        $email=$_POST['txtEmail'];
        $pass1=$_POST['txtPass1'];
        $pass2=$_POST['txtPass2'];
    }
    


    //ktra email hoac user da ton tai chua
    $sql="select* from tb_user where user_email='$email'or user_name='$user'";
    //echo $sql;
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo 'da ton tai';
    }
    else{
        $pass_hash=password_hash($pass1,PASSWORD_DEFAULT);
        $code=md5(uniqid(rand(),true));
        $sql2="Insert into tb_user (user_name,user_email,user_pass) values ('$user','$email','$pass_hash')";
        $result2=mysqli_query($conn,$sql2);
        if($result2>=1){
            //sendEmail('vinhcotam04052001@gmail.com',$code);
            sendEmail($email,$code);
        }
    }
    //neu chua thi moi luu vao csdl va gui email

?>