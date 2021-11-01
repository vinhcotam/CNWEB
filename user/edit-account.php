<?php
    include '../conf.php';
        $user_email=$_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Chỉnh sửa Tài khoản</title>
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
                                <h2 class="text-uppercase text-center mb-5">Chỉnh sửa tài khoản</h2>
                                <?php
                                    $sql="select * from tb_user where user_email='$user_email'";
                                    $result=mysqli_query($conn, $sql);
                                    if( mysqli_num_rows($result)>0){
                                        $row = mysqli_fetch_assoc($result);
                                        $user_name=$row['user_name'];
                                        $user_pass_hash=$row['user_pass'];
                                    }
                                ?>
                                <form action="process-editacc.php" method="POST">
                                    <input name="user_email" type="email" hidden="hidden" value="<?php echo $user_email; ?>">
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="user_name">Tên người dùng</label>
                                        <input type="text" id="user_name" name="user_name"
                                            class="form-control form-control-lg"
                                            value="<?php echo $row['user_name']; ?>" />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="pass">Nhập mật khẩu cũ</label>
                                        <input type="password" id="pass" name="pass"
                                            class="form-control form-control-lg" />
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="pass1">Nhập mật khẩu mới</label>
                                        <input type="emapasswordil" onkeyup="checkpass();" id="pass1" name="pass1"
                                            class="form-control form-control-lg" />
                                    </div>
                                    <label class="form-label" for="pass2">Nhập lại mật khẩu mới</label>
                                    <input type="emapasswordil" onkeyup="checkpass();" id="pass2" name="pass2"
                                        class="form-control form-control-lg" />
                            <p id = "warning"></p>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" id="sbChange" name="sbChange" disabled
                                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Lưu thay
                                    đổi</button>
                            </div>
                            <script>
                            function checkpass() {
                                var warning = document.getElementById('warning');
                                if(document.getElementById('pass1').value ==''){
                                    document.getElementById('sbChange').disabled = true;
                                    warning.innerHTML = 'Mật khẩu không được bỏ trống';
                                }
                                else if (document.getElementById('pass1').value ==
                                    document.getElementById('pass2').value) {
                                    document.getElementById('sbChange').disabled = false;
                                    warning.innerHTML = '';
                                }
                                else {
                                    document.getElementById('sbChange').disabled = true;
                                    warning.innerHTML = 'Nhập lại sai';
                                }
                                
                            }
                            </script>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>