<?php
    include('header.php');
?>
<div class="container">
    <div class="row" style="min-height:1000px;">
        <div class="col-md-8">
            <div class="container" style="margin:0px; padding:0px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã đơn hàng</th>
                            <th scope="col">Tên người mua</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Ngày mua</th>
                            <th scope="col">Tên sách</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Trạng thái đơn hàng</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!--thay đổi-->
                        <?php
                                    include '../conf.php';
                                    $sql="select * from tb_receipt";
                                    $result=mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<td>'.$row['receipt_id'].'</td>';
                                    echo '<td>'.$row['user_email'].'</td>';
                                    echo '<td>'.$row['phone'].'</td>';
                                    echo '<td>'.$row['address'].'</td>';
                                    echo '<td>'.$row['date_buy'].'</td>';
                                    echo '<td>'.$row['book_id'].'</td>';
                                    echo '<td>'.$row['quantity'].'</td>';
                                    echo '<td>'.$row['total'].'</td>';
                                    $tt="Chưa xác nhận";
                                    if($row['status']==0){
                                        $tt="Chưa xác nhận";
                                    }else if($row['status']==1){
                                        $tt="Đã xác nhận và đang giao";
                                    }else if($row['status']==2){
                                        $tt="Đã giao";
                                    }
                                    echo '<td>'.$tt.'</td>';
                                    echo '<td><a href="verify.php?id='.$row['receipt_id'].'" class="btn btn-primary">Xác nhận đơn hàng</a></td>';
                                    echo '<td><a href="delreceipt.php?id='.$row['receipt_id'].'" class="btn btn-primary">Hủy đơn hàng</a></td>';
                                    echo '</tr>';   
                                        }
                                    }

                                ?>

                    </tbody>
                </table>
                <div class="col-md-6">
                    <a href="dashboard.php"><button class="btn btn-success w-100">Quay về dashboard</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include('footer.php');
    ?>