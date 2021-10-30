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
    <link rel="stylesheet" href="../css/infor.css">
    <title>Thông tin đơn hàng của bạn</title>
</head>

<body>

    <main>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Tên người mua</th>
                    <th scope="col">Mã sách</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Tình trạng đơn hàng</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //4 bước
                    //b1:
                    include('../conf.php');
                    $username = $_GET['id'];
                    //b2
                    $sql="select * from tb_receipt where user_name= '$username'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['receipt_id'].'</th>';
                            echo '<td>'.$row['user_name'].'</td>';
                            echo '<td>'.$row['book_id'].'</td>';
                            echo '<td>'.$row['quantity'].'</td>';
                            echo '<td>'.$row['total'].'</td>';                      
                            echo '<td>'.$row['status'].'</td>';
                            echo '<td><a href="deleteReceipt.php?id='.$row['receipt_id'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i>delete</a></td>';
                            echo '</tr>';   
                        }
                    }
                ?>
            </tbody>
        </table>
        <div class="profile-usermenu">
            <ul class="nav">
                <li>
                    <a href="infor.php?username=<?php echo $username; ?>" target="_blank">
                    <i class="fas fa-house-user"></i>Quay về trang cá nhân </a>
                </li>
            </ul>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>