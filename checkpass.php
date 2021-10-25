<?php
    session_start();
    //unset($_SESSION['loginOK']);
    if(isset($_POST['sbLogin'])){
        $useremail = $_POST['txtEmail'];
        $password_raw = $_POST['txtPass'];
    }
    //gsu mat khau nhap tren form login
    include('conf.php');
    $sql="select * from tb_user where user_email='$useremail'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $password_hash=$row['user_pass'];
        $level=$row['level_user'];
        echo $password_hash;
        //ktra co khop mk k
        if(password_verify($password_raw,$password_hash) && $level==true){
            $_SESSION['loginOK'] = $useremail;
            header('Location:admin/dashboard.php');
        }if (password_verify($password_raw,$password_hash) && $level==false){
            $_SESSION['loginOK'] = $useremail;
            header("Location:../home.php"); 
        }
        else{
            echo 'mat khau khong khop';
        }
    }else{
        echo 'email khong ton tai';
    }

?>