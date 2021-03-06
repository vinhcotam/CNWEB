-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2021 lúc 03:04 PM
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
  `book_category` varchar(10000) DEFAULT NULL,
  `book_author` varchar(255) DEFAULT NULL,
  `book_intro` varchar(255) NOT NULL,
  `img_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_book`
--

INSERT INTO `tb_book` (`book_id`, `book_name`, `book_price`, `book_quantity`, `book_category`, `book_author`, `book_intro`, `img_id`) VALUES
(1, 'Hoàng tử bé', 200, 120, 'Cổ tích', 'Antoine De Saint-Expéry', 'được xuất bản năm 1943, là tiểu thuyết nổi tiếng nhất của nhà văn và phi công Pháp Antoine de Saint-Exupéry. Ông đã thuê ngôi biệt thự The Bevin House ở Asharoken, Long Island, New York trong khi viết tác phẩm này.', 'cotich1'),
(2, 'Thám tử lừng danh Conan tập 67', 11, 321, 'Trinh thám', 'Gosho Aoyama', 'Conan và mọi người chứng kiến một vụ đánh bom ở trung tâm mua sắm. Tại hiện trưởng, lại thấy cả bóng dáng Akai Shuichi, Okiya Subaru và cả Gin!! Trong tình thế ngàn cân treo sợi tóc, Conan sẽ giải quyết ra sao? Trong tập này còn có \"Sát nhân Goth - Loli -', 'conan67'),
(3, 'Kafka bên bờ biển', 150, 100, 'Tiểu thuyết', 'Haruki Murakami', 'Kafka bên bờ biển (海辺のカフカ Umibe no Kafuka?) là tiểu thuyết của nhà văn người Nhật Bản Haruki Murakami (2002). Sự xuất sắc của tác phẩm này đã giúp ông được trao giải thưởng văn học Franz Kafka năm 2006[1]. Bản dịch tiếng Việt của Dương Tường được hoàn tất', 'tieuthuyet1'),
(4, 'Phía sau nghi can', 500, 340, 'Trinh thám', 'Higashino Keigo', 'Phía sau nghi can X (容疑者Xの献身 Yōgisha Ekkusu no Kenshin) là một bộ tiểu thuyết được viết vào năm 2005 bởi Higashino Keigo, cuốn thứ ba trong seri Thám tử Galileo (tức nhân vật Manabu Yukawa) và đây là tác phẩm thành công nhất của ông từ trước đến nay. Cuốn', 'trinhtham1'),
(5, 'Truyện cổ Andersen', 650, 1000, 'Cổ tích', 'Hans Christian Andersen', 'Truyện Cổ Andersen đi theo tuổi thơ mỗi đứa trẻ, cùng lớn lên với mỗi người, và ở mỗi độ tuổi khác nhau, khi đọc Andersen lại có một cảm nhận mới mẻ, tinh tế hơn, sâu sắc hơn.', 'cotich2'),
(6, 'Ác quỷ nam kinh', 1000, 1500, 'Kinh dị', 'Mo Hyder', 'Thảm sát Nam Kinh, cũng thường được gọi là vụ \"Cưỡng hiếp Nam Kinh\", là một tội ác chiến tranh do quân đội Nhật Bản tiến hành bên trong và xung quanh Nam Kinh, Trung Quốc sau khi thành phố này rơi vào tay Quân đội Thiên hoàng Nhật Bản ngày 13 tháng 12 năm', 'kinhdi2'),
(7, 'Lắng nghe hơi thở', 150, 120, 'Tiểu thuyết', 'Lưu Đình Long', 'Lắng nghe gió hát (風の歌を聴け Kaze no uta wo kike?) là tên tiểu thuyết đầu tay phát hành năm 1979 của nhà văn Nhật Bản Murakami Haruki. Lắng nghe gió hát xuất hiện lần đầu trong số tháng 6 năm 1979 của Gunzo (một trong những tạp chí văn học có ảnh hưởng nhất ', 'tieuthuyet2'),
(8, 'Grimgar tập 1', 500, 350, 'Light novel', 'Ao Jyumonji', 'là một light novel của Nhật Bản do Ao Jūmonji viết và Eiri Shirai vẽ minh họa. Câu chuyện kể về một nhóm người đột nhiên thấy mình trong một thế giới tưởng tượng không có ký ức từ trước khi họ đến, và kể về những cuộc đấu tranh của họ để tồn tại.', 'lighnovel1'),
(9, 'Grimgar tập 2', 500, 350, 'Light novel', 'Ao Jyumonji', 'là một light novel của Nhật Bản do Ao Jūmonji viết và Eiri Shirai vẽ minh họa. Câu chuyện kể về một nhóm người đột nhiên thấy mình trong một thế giới tưởng tượng không có ký ức từ trước khi họ đến, và kể về những cuộc đấu tranh của họ để tồn tại.', 'lightnovel2'),
(14, 'Sách Giáo Khoa Bộ Lớp 10 - Sách Bài Học (Bộ 14 Cuốn)', 10, 800, 'Học tập', 'Bộ Giáo Dục Và Đào Tạo', 'Sách Giáo Khoa Bộ Lớp 10 - Sách Bài Học (Bộ 14 Cuốn) (2021)\r\n\r\nBao Gồm:\r\n\r\nSTT	Tên sản phẩm\r\n1	Giáo dục Quốc phòng - An ninh 10\r\n2	Đại số 10\r\n3	Hình học 10\r\n4	Vật lí 10\r\n5	Hoá học 10\r\n6	Sinh học 10\r\n7	Công nghệ 10 - Nông, lâm, ngư nghiệp, tạo lập doanh ng', 'sgk10full'),
(15, 'Date A Live Tập 12 Itsuka Disaster', 17, 109, 'Tình cảm, Siêu nhiên', 'Koushi Tachibana', 'Date A Live - Tập 12\r\n\r\nNgày 1 tháng 2, khi cái lạnh thấu xương tìm đến với thành phố Tengu, Itsuka Shidou đột nhiên vượt ngoài tầm kiểm soát. Cậu lần lượt phá các kỷ lục thế giới trong các bộ môn về thể chất, hơn nữa còn làm vỡ cửa kính và nứt tường chỉ ', 'datealive12'),
(18, 'Chuyện tình thanh xuân bi hài của tôi quả nhiên là sai lầm tập 12', 18, 33, 'Light novel , Học đường', 'Wataru WATARI', 'Chuyện Tình Thanh Xuân Bi Hài Của Tôi Quả Nhiên Là Sai Lầm - Tập 12\r\n\r\nChuyện tình thanh xuân bi hài của tôi quả nhiên là sai lầm. (tên gốc: Yahari Ore no Seishun Rabukome wa Machigatteiru., gọi tắt là Oregairu), là một trong những series light novel ăn k', 'oregairu12'),
(19, 'Chuyện tình thanh xuân bi hài của tôi quả nhiên là sai lầm tập 6.5', 18, 63, 'Light Novel, Đời thường', 'Wataru WATARI', 'Chuyện Tình Thanh Xuân Bi Hài Của Tôi Quả Nhiên Là Sai Lầm - Tập 6.5\r\n\r\nChuyện tình thanh xuân bi hài của tôi quả nhiên là sai lầm. (tên gốc: Yahari Ore no Seishun Rabukome wa Machigatteiru., gọi tắt là Oregairu), là một trong những series light novel ăn ', 'oregairu6.5');

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
('conan67', 'https://cdn0.fahasa.com/media/catalog/product/cache/2/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_183331.jpg', 'conan'),
('cotich1', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_187010.jpg', 'Hoàng tử bé'),
('cotich2', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_227106.jpg', 'Truyện cổ Andersen'),
('datealive12', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/q/q/qqqqdal1img_5916_2.jpg', 'Date A Live Tập 12 - Itsuka Disaster'),
('kinhdi2', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_182830.jpg', 'Ác quỷ nam kinh'),
('lighnovel1', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/g/r/grimgar-tap-1---tai-ban-2019_1.jpg', 'Grimgar'),
('lightnovel2', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/g/r/grimgar---ao-anh-va-tro-tan-vol-2.jpg', 'Grimgar'),
('oregairu12', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/c/h/chuyenhuan-04-biacung_1.jpg', 'chuyện tình thanh xuân bi hài của tôi quả nhiên là sai lầm tập 12'),
('oregairu6.5', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/c/h/chuy_n-t_nh-thanh-xu_n-bi-h_i-65.jpg', 'chuyện tình thanh xuân bi hài của tôi quả nhiên là sai lầm tập 6.5'),
('sgk10full', 'https://cdn0.fahasa.com/media/catalog/product/cache/2/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/3/3/3300000001135.jpg', 'Trọn bộ sách giáo khoa lớp 10'),
('tieuthuyet1', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_32831.jpg', 'Kafka bên bờ biển'),
('tieuthuyet2', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_234633.jpg', 'Lắng nghe hơi thở'),
('trinhtham1', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_187738.jpg', 'Phía sau nghi can'),
('test', 'https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/600x600/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_49929.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` int(11) NOT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_post`
--

INSERT INTO `tb_post` (`post_id`, `user_email`, `comment`) VALUES
(1, 'vinhcotam04052001@gmail.com', 'mong web sớm phát hành one piece'),
(2, 'vinhcotam04052001@gmail.com', 'mong web sớm phát hành naruto'),
(3, 'vinhcotam04052001@gmail.com', 'mong web phát triển thêm về giao diện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_receipt`
--

CREATE TABLE `tb_receipt` (
  `receipt_id` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `date_buy` date NOT NULL,
  `status` int(4) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_receipt`
--

INSERT INTO `tb_receipt` (`receipt_id`, `user_email`, `user_name`, `date_buy`, `status`, `book_id`, `quantity`, `total`, `phone`, `address`) VALUES
('aaa@gmail.com2021-10-31 03:53:37', 'aaa@gmail.com', 'aa', '2021-10-31', 1, 4, 1, 500, 9999, 'Hà Nội'),
('aaa@gmail.com2021-10-31 04:03:01', 'aaa@gmail.com', 'aa', '2021-10-31', 2, 4, 1, 500, 9999, 'Hà Nội'),
('aaa@gmail.com2021-10-31 04:04:16', 'aaa@gmail.com', 'aa', '2021-10-31', 1, 4, 4, 2000, 4332, '3424'),
('aaa@gmail.com2021-10-31 04:17:10', 'aaa@gmail.com', 'aa', '2021-10-31', 1, 1, 1, 200, 3222222, '13'),
('vinhcotam04052001@gmail.com2021-11-01 02:10:53', 'vinhcotam04052001@gmail.com', 'vinh1111111', '2021-11-01', 0, 1, 1, 200, 123, 'Thường Tín'),
('vinhcotam04052001@gmail.com2021-11-01 02:46:55', 'vinhcotam04052001@gmail.com', 'vinh1111111', '2021-11-01', 0, 4, 2, 1000, 1, 'thường tín');

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
('vinh1111111', 'vinhcotam04052001@gmail.com', '$2y$10$C2pqnGfTsoBJ2dEehlfjNupWBNxJAJmX67FmcXE4cCuD3IeBf3ILC', 1, '5829d162726b78fdf7f196022f046d2e', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Chỉ mục cho bảng `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`);

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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
