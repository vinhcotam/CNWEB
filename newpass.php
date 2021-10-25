<?php
include("conf.php");
    $email = $_GET['email'];
    $code  = $_GET['code'];

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
    <title>Mật khẩu mới</title>
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
                                <h2 class="text-uppercase text-center mb-5">Đặt mật khẩu</h2>
                                <form action="processnewpass.php" method="POST">
                                    <input name="email" value="<?php echo $email; ?>" hidden="hidden">
                                    <input name="code" value="<?php echo $code; ?>" hidden="hidden">
                                    <div class="form-outline mb-2">
                                    <div class="form-outline mb-2">
                                    <label class="form-label" for="txtPass1">Nhập mật khẩu mới</label>
                                        <input type="password" id="txtPass1" name="txtPass1"  class="form-control form-control-lg" />
                                        
                                    </div>
                                    <label class="form-label" for="txtPass2">Nhập lại mật khẩu</label>
                                        <input type="password" id="txtPass2" name="txtPass2"  class="form-control form-control-lg" />
                                        
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="sbNew"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Đặt lại mật khẩu</button>
                                    </div>
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
</body>

</html>