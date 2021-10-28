-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2021 lúc 05:41 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_book`
--

CREATE TABLE `tb_book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `book_price` float DEFAULT NULL,
  `book_quantity` int(11) NOT NULL,
  `book_category` varchar(255) DEFAULT NULL,
  `book_author` varchar(255) DEFAULT NULL,
  `book_intro` varchar(255) NOT NULL,
  `img_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_book`
--

INSERT INTO `tb_book` (`book_id`, `book_name`, `book_price`, `book_quantity`, `book_category`, `book_author`, `book_intro`, `img_id`) VALUES
(1, 'Hoàng tử bé', 200, 120, 'Cổ tích', 'Không rõ', 'Không có mô tả', 'cotich1'),
(2, 'GOTH', 200, 120, 'Kinh dị', 'OTSUCHI', 'Không có mô tả', 'kinhdi1'),
(3, 'Kafka bên bờ biển', 150, 100, 'Tiểu thuyết', 'Haruki Murakami', 'Kafka bên bờ biển (海辺のカフカ Umibe no Kafuka?) là tiểu thuyết của nhà văn người Nhật Bản Haruki Murakami (2002). Sự xuất sắc của tác phẩm này đã giúp ông được trao giải thưởng văn học Franz Kafka năm 2006[1]. Bản dịch tiếng Việt của Dương Tường được hoàn tất', 'tieuthuyet1'),
(4, 'Phía sau nghi can', 500, 340, 'Trinh thám', 'Higashino Keigo', 'Phía sau nghi can X (容疑者Xの献身 Yōgisha Ekkusu no Kenshin) là một bộ tiểu thuyết được viết vào năm 2005 bởi Higashino Keigo, cuốn thứ ba trong seri Thám tử Galileo (tức nhân vật Manabu Yukawa) và đây là tác phẩm thành công nhất của ông từ trước đến nay. Cuốn', 'trinhtham1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_img`
--

CREATE TABLE `tb_img` (
  `img_id` varchar(255) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `img_alt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_img`
--

INSERT INTO `tb_img` (`img_id`, `img_url`, `img_alt`) VALUES
('cotich1', 'book-img/Co-tich-1.jpg', 'Hoàng tử bé'),
('kinhdi1', 'book-img/Kinh-di-3.jpg', 'GOTH'),
('tieuthuyet1', 'book-img/Tieu-thuyet-1.jfif', 'Kafka bên bờ biển'),
('trinhtham1', 'book-img/Trinh-tham-1.jpg', 'Phía sau nghi can');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_receipt`
--

CREATE TABLE `tb_receipt` (
  `receipt_id` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `date_buy` date NOT NULL,
  `sale_off` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `level_user` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`user_name`, `user_email`, `user_pass`, `user_status`, `user_code`, `level_user`) VALUES
('a', 'levanduongl70@gmail.com', '$2y$10$wOZ64.sublbL9o6Pk8OswutUgZjfU2oOBd84mkwwzKvmSbw4mzYGa', 0, 'ac5dc87550e728a9255a14f2bbacc805', 0),
('aa', 'aaa@gmail.com', '$2y$10$YoxcoAIW7CXv3FJldnvGBe6.MJ3GbhzQAS/EpHT5pEctt8Wh2DA4u', 0, '2a0eb02d059c1266951e577f1665570e', 0),
('admin', 'vinhvinh4501@gmail.com', '$2y$10$Y.1aViyB5pbxN1hUwP6QeeXBdqMOjIBEV0v33dGUD0fIwOeghpYD2', 1, 'c5bfb92d80bde3f62abfacc08a62c3fb', 1),
('vinh', 'vinhcotam04052001@gmail.com', '$2y$10$a6aG2eleM2fqSehjK3UNJORg.0Sfln8xD5n4LDa2jCgOx3acg72..', 1, '5829d162726b78fdf7f196022f046d2e', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
