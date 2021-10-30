<?php
    $user_email =$_POST['email'];
    $user_cmt =$_POST['cmt'];
    include('../conf.php');
    $sql = "INSERT INTO tb_post (user_email,comment)
    VALUES ('$user_email','$user_cmt')";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result>0){
        header("Location: infor.php?username=$user_email");
    }else{
        echo "Loi";
    }
    mysqli_close($conn);
?>