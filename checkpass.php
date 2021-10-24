<?php
    include('conf.php');
    session_start();
    //unset($_SESSION['loginOK']);
   // $useremail = $_POST['txtEmail'];
   if(isset($_POST['sbmLogin'])){
    $user_email=$_POST['txtEmail'];
    $password_raw = $_POST['txtPass'];
   
}
    echo $user_email;
    echo $password_raw;
    //gsu mat khau nhap tren form login
    $sql="select * from tb_user where user_email='$user_email'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $password_hash=$row['user_pass'];
        
        echo $password_hash;
        //ktra co khop mk k
        if(password_verify($password_raw,$password_hash)){
            $_SESSION['loginOK'] = $useremail;
            header('Location:admin/index.php');
        }else{
            echo 'mat khau khong khop';
        }
    }else{
        echo 'email khong ton tai';
    }

?>