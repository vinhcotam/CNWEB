<?php
	session_start();
	if(isset($_POST['cart'])){
		$book_id = $_POST['bookid'];
	}
	include '../conf.php';
	
?>
<form action="cart.php" method="post">
    <table class="table">
        <tr>
            <th>Tên sách</th>
            <th>Giá tiền</th>
            <th>Số trang</th>
            <th>Tổng tiền</th>
        </tr>
        
    </table>
    <input type="submit" class="btn btn-primary" name="save_change" value="Save Changes">
</form>