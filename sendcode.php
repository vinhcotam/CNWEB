<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
function sendEmail($recipient,$code){
    // 1. Cài đặt môi trường sử dụng phpmailer
    // 2. Tạo ra đối tượng PHPMailer
    $mail = new PHPMailer(true); //Biến $mail đang là 1 object

    // 3. Xử lý gửi Email thông qua đối tượng $mail
    // Quá trình này có thể có lỗi phát sinh, dừng thực thi chương trình.
    try{
        // Cấu hình tài khoản (Server) để gửi Email
        $mail->SMTPDebug = 0;// Enable verbose debug output
        $mail->isSMTP();// gửi mail SMTP
        $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
        $mail->SMTPAuth = true;// Enable SMTP authentication
        $mail->Username = 'vinhcotam04052001@gmail.com';// SMTP username
        $mail->Password = 'mjotmrkgtokjpwyn'; // SMTP password bqicengzsrdwtrdf
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587; // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        // Cấu hình thuộc tính hiển thị của người gửi - người nhận
        $mail->setFrom('vinhcotam04052001@gmail.com', 'The Idea Bookstore');

        $mail->addReplyTo('vinhcotam04052001@gmail.com', 'The Idea Bookstore');

        $mail->addAddress($recipient); // Đây là địa chỉ Email người nhận > sau này sẽ là BIẾN

        $mail->isHTML(true);   // Set email format to HTML
        $mail->Subject = '[The Idea Bookstore] Lấy lại mật khẩu';
        // Nội dung Email
       
        $mail->Body = 'Nhấp vào đây để kích hoạt: <a href="http://localhost:2001/CNWEB/newpass.php?email='.$recipient.'&code='.$code.'">Nhấp vào đây</a>';
        // Gửi thư
        if($mail->send()){
            echo 'Thư đã gửi đi thành công!';
        }

    }catch(Exception $e){
        echo "Lỗi ".$e->getMessage();
    }

}

?>