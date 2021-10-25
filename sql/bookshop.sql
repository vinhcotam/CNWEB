-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2021 lúc 10:54 AM
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
  `book_category` float DEFAULT NULL,
  `book_author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_img`
--

CREATE TABLE `tb_img` (
  `img_id` varchar(255) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `img_alt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('admin', 'vinhvinh4501@gmail.com', '$2y$10$Y.1aViyB5pbxN1hUwP6QeeXBdqMOjIBEV0v33dGUD0fIwOeghpYD2', 1, 'c5bfb92d80bde3f62abfacc08a62c3fb', 1),
('vinhvinhvinh', 'vinhcotam04052001@gmail.com', '$2y$10$dECGO4.3oCucp5padQPl7ukcihEw.3RVDVwBuMzWC4DBBPSTub5qG', 1, '72a5ce6ac3b432864dee5f7050d63be6', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Chỉ mục cho bảng `tb_img`
--
ALTER TABLE `tb_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
