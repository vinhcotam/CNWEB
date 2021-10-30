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
                                <th scope="col">Email khách</th>
                                <th scope="col">Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!--thay đổi-->
                            <?php
                                    include '../conf.php';
                                    $sql="select * from tb_post";
                                    $result=mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<td>'.$row['user_email'].'</td>';
                                    echo '<td>'.$row['comment'].'</td>';
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