<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bạn muốn nói điều gì ?</title>
</head>

<body>
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100" style="padding-left: 15px;margin-left:auto;">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card" style="border-radius: 10px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Gửi lời nhắn đến hệ thống</h2>
                                <form action="processpost.php" method="post">
                                    <?php
                                            $username = $_GET['id'];
                                    ?>
                                    <input name="email" id="email" value="<?php echo $username; ?>" hidden="hidden">
                                    <div class="form-outline mb-2">
                                        <div class="form-outline mb-2">
                                            <label class="form-label" for="email">Nhập email</label>
                                            <input type="email" id="email" name="email"
                                                class="form-control form-control-lg" />
                                        </div>
                                        <label class="form-label" for="cmt">Hãy điền vào đây</label>
                                        <input type="text" id="cmt" name="cmt" class="form-control form-control-lg" />
                                    </div>
                            </div>
                            <div class="col-md-12" style="text-align: center;">
                                <button id="sbCmt" name="sbCmt" type="sumbit" class="btn btn-success ">Gửi</button>
                            </div>
                            <div class="col-md-12" style="text-align: center;">
                                <a href="infor.php?username=<?php echo $username; ?>" type="sumbit"
                                    class="btn btn-primary ">Quay về trang
                                    cá nhân</a>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>