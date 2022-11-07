-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2022 lúc 04:33 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopdienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'hoaadmin', '25f9e794323b453885f5181f1b624d0b', 1),
(2, 'namadmin', '25f9e794323b453885f5181f1b624d0b', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(11, 12, '3095', 0),
(12, 12, '8209', 0),
(13, 11, '5943', 0),
(14, 13, '5281', 0),
(15, 11, '3033', 0),
(16, 11, '4796', 0),
(17, 11, '3615', 0),
(18, 11, '9386', 0),
(19, 24, '5888', 1),
(20, 25, '9047', 1),
(21, 25, '6111', 1),
(22, 0, '1942', 1),
(23, 0, '4971', 1),
(24, 0, '3127', 1),
(25, 0, '5387', 1),
(26, 0, '818', 1),
(27, 0, '2400', 1),
(28, 0, '3779', 1),
(29, 0, '7882', 1),
(30, 0, '3189', 1),
(31, 25, '3756', 1),
(32, 25, '5750', 1),
(33, 25, '1977', 1),
(34, 25, '1936', 1),
(35, 25, '4540', 0),
(36, 25, '432', 1),
(37, 25, '4463', 1),
(38, 25, '1270', 1),
(39, 25, '6662', 1),
(40, 25, '5478', 1),
(41, 25, '6394', 1),
(42, 25, '762', 1),
(43, 25, '5445', 1),
(44, 25, '1740', 1),
(45, 26, '5369', 1),
(46, 26, '7936', 1),
(47, 26, '7993', 1),
(48, 26, '8151', 1),
(49, 26, '7439', 1),
(50, 26, '2057', 1),
(51, 26, '4783', 1),
(52, 26, '9767', 1),
(53, 26, '9305', 1),
(54, 25, '7429', 1),
(55, 25, '3882', 1),
(56, 25, '781', 1),
(57, 27, '7672', 1),
(58, 27, '387', 1),
(59, 27, '4007', 1),
(60, 27, '5957', 1),
(61, 27, '1297', 1),
(62, 27, '6639', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `hinhthuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`, `hinhthuc`) VALUES
(17, '8581', 26, 1, ''),
(18, '3095', 26, 1, ''),
(19, '8209', 25, 1, ''),
(20, '5943', 25, 1, ''),
(21, '5281', 25, 1, ''),
(22, '5281', 23, 1, ''),
(23, '3033', 28, 1, ''),
(24, '4796', 28, 1, ''),
(25, '3615', 28, 1, ''),
(26, '9386', 28, 1, ''),
(27, '5888', 32, 2, ''),
(28, '9047', 32, 1, ''),
(29, '6111', 33, 1, ''),
(30, '6111', 30, 1, ''),
(31, '1942', 44, 1, ''),
(32, '1942', 46, 1, ''),
(33, '1942', 45, 1, ''),
(34, '4971', 46, 1, ''),
(35, '4971', 45, 1, ''),
(36, '3127', 46, 1, ''),
(37, '5387', 45, 1, ''),
(38, '5387', 44, 1, ''),
(39, '818', 45, 2, ''),
(40, '818', 46, 1, ''),
(41, '3779', 45, 1, ''),
(42, '3756', 45, 1, ''),
(43, '3756', 46, 1, ''),
(44, '5750', 46, 1, ''),
(45, '1977', 46, 1, ''),
(46, '1936', 46, 1, ''),
(47, '4540', 46, 1, ''),
(48, '4540', 45, 1, ''),
(49, '432', 45, 1, ''),
(50, '4463', 46, 1, ''),
(51, '1270', 58, 1, ''),
(52, '6662', 56, 1, ''),
(53, '5478', 56, 1, ''),
(54, '6394', 56, 1, ''),
(55, '762', 56, 1, ''),
(56, '5445', 47, 1, ''),
(57, '1740', 56, 1, ''),
(58, '5369', 56, 1, ''),
(59, '7936', 58, 1, ''),
(60, '7993', 56, 1, ''),
(61, '7993', 47, 1, ''),
(62, '8151', 58, 1, ''),
(63, '7439', 58, 1, ''),
(64, '7439', 53, 1, ''),
(65, '2057', 56, 2, ''),
(66, '2057', 53, 1, ''),
(67, '4783', 53, 1, ''),
(68, '9767', 53, 1, ''),
(69, '9767', 54, 1, ''),
(70, '9305', 53, 1, ''),
(71, '7429', 58, 1, ''),
(72, '7429', 63, 1, ''),
(73, '3882', 64, 1, ''),
(74, '3882', 62, 1, ''),
(75, '781', 47, 1, ''),
(76, '7672', 62, 2, ''),
(77, '387', 61, 1, ''),
(78, '4007', 62, 1, ''),
(79, '5957', 61, 4, ''),
(80, '1297', 61, 2, ''),
(81, '6639', 62, 2, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(24, 'namlepro', 'harryden@gmail.com', 'điện bàn', '12345', '0343370703'),
(25, 'namle123', 'namle2001vlogs@gmail.com', 'điện bàn', '12345', '0964980259'),
(26, 'hoa 001', 'nguyentanhoa@gmail.com', 'điện phước', '12345', '0343370703'),
(27, 'le dang hoai nam', 'namle2001vlogs@gmail.com', 'quang nam', '1234', '0964980259'),
(28, 'le dang hoai nam', 'namle2001vlogs@gmail.com', 'quang nam', '1234', '0964980259'),
(29, 'nhilee', 'namle12hfro@gmail.com', 'quang nam', '1234', '0964980259'),
(30, 'le nam 111A', 'namle2001vlogs@gmail.com', 'quang nam', '1234', '0964980259'),
(31, 'le dang hoai nam le', 'namle1232hfro@gmail.com', 'quang nam', '1234', '0964980259'),
(32, 'le dang hoai nam ', 'namle2002vlogs@gmail.com', 'quang nam', '1234', '0964980259');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(7, 'IPHONE', 0),
(8, 'SAMSUNG', 0),
(9, 'OPPO', 0),
(10, 'NOKIA', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `hinhanh1` varchar(255) NOT NULL,
  `hinhanh2` varchar(255) NOT NULL,
  `hinhanh3` varchar(255) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `giagoc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `hinhanh1`, `hinhanh2`, `hinhanh3`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`, `giagoc`) VALUES
(47, 'OPPO A95 8GB-128GB', 'SPOPP001', '6900000', 4, '1642340011_oppo-a74-den-1-org.jpg', '1642340011_oppo-find-x3-pro-den-1-org.jpg', '1642340011_oppo-find-x3-pro-xanh-1-org.jpg', '1642340011_oppo-a74-den-1-org.jpg', '128GB', 'Thông tin sản phẩm\r\nSau khi ra mắt OPPO Reno5 chưa lâu thì OPPO lại cho ra mẫu smartphone mới mang tên OPPO Reno6 với hàng loạt cải tiến mới về ngoại hình bên ngoài lẫn hiệu năng bên trong, mang đến trải nghiệm vượt bật cho người dùng.\r\nChip Dimensity 900 5G hiệu năng ổn định\r\nOPPO Reno6 được trang bị vi xử lý MediaTek Dimensity 900 đáp ứng mọi nhu cầu giải trí hàng ngày, có thể chơi tất cả các game phổ biến hiện nay, tạo ấn tượng rất mạnh mẽ cho người dùng trải nghiệm mượt mà với cấu hình ổn định.', 1, 9, '7900000'),
(53, 'Điện thoại Samsung Galaxy A32 ', 'SPGLXA32', '6490000', 3, '1641984899_samsung-galaxy-a32-4g-tim-1-org.jpg', '1641984899_samsung-galaxy-a32-4g-xanh-1-org.jpg', '1641984899_samsung-galaxy-a32-4g-den-1-org.jpg', '1641984899_samsung-galaxy-a32-4g-trang-1-org.jpg', '128', 'Samsung Galaxy A32 4G là chiếc điện thoại thuộc phân khúc tầm trung nhưng sở hữu nhiều ưu điểm vượt trội về màn hình lớn sắc nét, bộ bốn camera 64 MP cùng vi xử lý hiệu năng cao và được bán ra với mức giá vô cùng tốt.\r\nThiết kế thời thượng cùng màu sắc bắt mắt\r\nSamsung Galaxy A32 4G có mặt lưng nhựa cao cấp với thiết kế đơn giản, trang nhã, không chỉ giúp bảo vệ máy mà còn tăng độ bóng bẩy cho smartphone, mang đến vẻ ngoài đẳng cấp cho người sở hữu.', 1, 8, '6490000'),
(54, 'Samsung Galaxy Z Fold3 5G', 'SPGLZ01', '41990000', 4, '1641985626_samsung-galaxy-z-fold-3-1-1-org.jpg', '1641985626_samsung-galaxy-z-fold-3-green-gc-org.jpg', '1641985626_samsung-galaxy-z-fold-3-green-gc-org.jpg', '1641985626_samsung-galaxy-z-fold-3-silver-gc-org.jpg', '256GB', 'Thông tin sản phẩm\r\nGalaxy Z Fold3 5G, chiếc điện thoại được nâng cấp toàn diện về nhiều mặt, đặc biệt đây là điện thoại màn hình gập đầu tiên trên thế giới có camera ẩn (08/2021). Sản phẩm sẽ là một “cú hit” của Samsung góp phần mang đến những trải nghiệm mới cho người dùng.\r\nThiết kế nâng tầm smartphone màn hình gập\r\nCó thể thấy mẫu smartphone Galaxy Z Fold3 lần này vẫn giữ nguyên ngoại hình cùng cơ chế màn hình gập mở dạng quyển sách như của tiền nhiệm, hồ biến chiếc smartphone thành một chiếc máy tính bảng mini một cách dễ dàng và ngược lại.', 1, 8, '42990000'),
(56, 'iphone-13-mini-128gb-xanh-duong', 'SPIP01', '19900000', 3, '1642340201_iphone 13 promax .jpg', '1642340201_1635426056_ip13.jpg', '1642340201_1639469243_1635426056_ip13.jpg', '1642340201_1640597746_1635426498_iphone-12.jpg', '64GB', 'iPhone 13 Pro Max 256GB - siêu phẩm mang trên mình bộ vi xử lý Apple A15 Bionic hàng đầu, màn hình Super Retina XDR 120 Hz, cụm camera khẩu độ f/1.5 cực lớn, tất cả sẽ mang lại cho bạn những trải nghiệm tuyệt vời chưa từng có.\r\nThiết kế đẳng cấp, sang trọng\r\niPhone 13 Pro Max vẫn sẽ kế thừa thiết kế đặc trưng của iPhone 12 Series, vẫn là một sản phẩm với khung viền được hoàn thiện từ thép không gỉ, hai mặt trước sau được trang bị kính cường lực bóng bẩy.', 1, 7, '25900000'),
(58, 'iphone-13-mini-128gb-xanh-duong', 'SPIP01', '19900000', 4, '1642339627_1635426498_iphone-12.jpg', '1642339627_1640597746_1635426498_iphone-12.jpg', '1642339627_1639469243_1635426056_ip13.jpg', '1642339627_1635426056_ip13.jpg', '64GB', 'Thông tin sản phẩm\r\niPhone 13 Pro Max 512GB một siêu phẩm đến từ nhà Apple chắc chắn đang được rất nhiều sự quan tâm từ iFan. Chiếc điện thoại này sở hữu màn hình siêu đẹp, hiệu năng bức phá từ con chip Apple A15 Bionic sẽ cho bạn trải nghiệm tuyệt vời, từ những tác vụ thông thường cho đến các ứng dụng chuyên nghiệp.\r\nThiết kế sang trọng, đậm chất Apple\r\nSang trọng - lịch lãm là những từ sẽ hiện lên đầu tiên khi nói về thiết kế của iPhone 13. Phần khung được làm từ thép không gỉ được tạo hình vuông vức, mặt lưng bằng kính vô cùng đẹp mắt, ở phiên bản này vẫn được giữ lại tai thỏ nhưng với một kích nhỏ gọn hơn 20% so với trước đây, việc thu nhỏ tai thỏ giúp màn hình trong rộng rãi hơn.', 1, 7, '29900000'),
(60, 'Samsung Galaxy A52s (8GB|128GB) Chính Hãng', 'SPGLX03', '9290000', 3, '1642339946_1635426662_samsung-galaxy-z-flip-3.jpg', '1642339946_1642258693_1635426662_samsung-galaxy-z-flip-3.jpg', '1642339946_samsung-galaxy-a32-4g-den-1-org.jpg', '1642339946_samsung-galaxy-a52-den-1-org.jpg', '128gb', 'Thông tin sản phẩm\r\nSamsung đã chính thức giới thiệu chiếc điện thoại Galaxy A52s 5G đến người dùng, đây phiên bản nâng cấp của Galaxy A52 5G ra mắt cách đây không lâu, với ngoại hình không đổi nhưng được nâng cấp đáng kể về thông số cấu hình bên trong.\r\nThiết kế đặc trưng Galaxy A', 1, 8, '9690000'),
(61, 'Điện thoại Nokia G10', 'SPNK1', '3690000', 3, '1642258886_nokia-g10-1-3.jpg', '1642258886_nokia-g10-1-3.jpg', '1642258886_nokia-g10-1-3.jpg', '1642258886_nokia-g10-1-3.jpg', '64GB', 'Thông tin sản phẩm\r\nNokia G10 cùng với Nokia G20 là bộ đôi smartphone đầu tiên thuộc dòng G-series của Nokia, người dùng sẽ trải nghiệm lâu dài với dung lượng pin lớn, thiết kế thời trang và hoạt động trên hệ điều hành Android 11 nguyên bản, tối ưu sự mượt mà và hỗ trợ cập nhật đến 3 năm.\r\nMàn hình rộng hiển thị tuyệt vời từ nhiều góc nhìn\r\nTheo xu hướng chung, Nokia G10 trang bị màn hình tràn viền 6.5 inch, tối ưu bởi thiết kế giọt nước chứa camera selfie, phần viền trên và 2 bên được làm mỏng tối đa, cạnh dưới có phần dày hơn nhưng với cách đặt logo Nokia khéo léo giúp cho thiết kế trở nên cân đối và hài hòa.\r\n\r\n', 1, 10, '3990000'),
(62, 'Điện thoại Nokia C20 ', 'SPNK2', '2490000', 4, '1642258985_nokia-c20-vang-1-1-org.jpg', '1642258985_nokia-c20-xanhduong-1-org.jpg', '1642258985_nokia-c20-vang-1-1-org.jpg', '1642258985_nokia-c20-xanhduong-1-org.jpg', '32Gb', 'Nokia C20 sở hữu thiết kế và cấu hình được tối giản nhưng vẫn có đầy đủ tính năng giải trí đa phương tiện của smartphone thông thường. Với một mức giá siêu hấp dẫn là người dùng phổ thông đã có trong tay mẫu điện thoại giá rẻ đến từ Nokia. \r\nChất liệu bền hoàn thiện cứng cáp\r\nNokia C20 được hoàn thiện từ chất liệu vỏ polycarbonate cứng cáp mang đến độ bền cao, bạn sẽ yên tâm hơn khi sử dụng hay mang đi trong mọi hoạt động hằng ngày.', 1, 10, '2490000');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
