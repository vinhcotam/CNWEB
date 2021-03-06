<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/4register.css">
    <title>Đăng ký</title>
</head>

<body>
    <section class="vh-100 bg-image"
        style="background-image: url('https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4wppj?ver=6044') ;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 10px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Tạo tài khoản</h2>

                                <form action="" method="POST">

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="txtUser">Nhập tên tài khoản</label>
                                        <input type="text" id="txtUser" name="txtUser"
                                            class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="txtEmail">Nhập email</label>
                                        <input type="email" id="txtEmail" name="txtEmail"
                                            class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="pass">Nhập mật khẩu mới</label>
                                        <input onkeyup='checkpass();' type="password" id="txtPass1" name="txtPass1"
                                            class="form-control form-control-lg" />

                                    </div>
                                    <label class="form-label" for="txtPass2">Nhập lại mật khẩu</label>
                                    <input onkeyup='checkpass();' type="password" id="txtPass2" name="txtPass2"
                                        class="form-control form-control-lg" />
                            </div>
                            <div>
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
                                                if($user=='' || $email=='' ||$pass1 =='' ||$pass2==''){
                                                    echo "Hãy nhập đầy đủ thông tin";
                                                }else if($pass1==$pass2){
                                                    //ktra email hoac user da ton tai chua
                                                    $sql="select* from tb_user where user_email='$email'or user_name='$user'";
                                                    //echo $sql;
                                                    $result=mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)>0){
                                                        echo '<script language="javascript">';
                                                        echo 'alert("Email đã tồn tại");';
                                                        echo '</script>';
                                                    }
                                                    else{
                                                        $pass_hash=password_hash($pass1,PASSWORD_DEFAULT);
                                                        $code=md5(uniqid(rand(),true));
                                                        $sql2="Insert into tb_user (user_name,user_email,user_pass,user_code,level_user) values ('$user','$email','$pass_hash','$code','false')";
                                                        $result2=mysqli_query($conn,$sql2);
                                                        if($result2>=1){
                                                            //sendEmail('vinhcotam04052001@gmail.com',$code);
                                                            sendEmail($email,$code);
                                                        }
                                                    }
                                            //neu chua thi moi luu vao csdl va gui email
                                                }else{
                                                    //echo "mật khẩu không trùng";
                                                    echo "<span>mật khẩu không trùng</span>";
                                                }
                                            }                                           
                                            
                                        ?>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="sbmRegister" id="sbmRegister" disabled
                                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Đăng
                                    ký</button>
                            </div>
                            <script>
                            function checkpass() {
                                if (document.getElementById('txtPass1').value ==
                                    document.getElementById('txtPass2').value) {
                                    document.getElementById('sbmRegister').disabled = false;
                                } else {
                                    document.getElementById('sbmRegister').disabled = true;
                                }
                            }
                            </script>

                            <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản <a href="Login.php"
                                    class="fw-bold text-body"><u>Đăng nhập tại đây</u></a>
                            </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="js/checkpass.js"></script>
</body>

</html>