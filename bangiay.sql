-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2023 lúc 03:06 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bangiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `hangsp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slsp` int(11) NOT NULL,
  `motasp` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhsp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `tensp`, `giasp`, `hangsp`, `slsp`, `motasp`, `hinhanhsp`) VALUES
(2, 'Giày chạy bộ Run One cho Nam - Xám', 295000, 'KALENJI', 80, 'Giày Thể Thao Nam DSM076000 nhận được nhiều đánh giá tích cực từ khách hàng, không chỉ về ngoại hình, màu sắc mà còn là chất lượng và chế độ bảo hành. ', 'p207647.png'),
(3, 'Giày thể thao AirFlex', 1200000, 'AirFlex', 12, 'Đôi giày thể thao AirFlex với thiết kế hiện đại, đế đệm êm ái và chất liệu chống thấm nước. Phù hợp cho các hoạt động thể thao và đi bộ hàng ngày.', '1714-4.png'),
(4, '[Mẫu Mới] Giày Thể Thao Chạy Bộ Goya Training Plus Xanh Rêu', 699000, 'GOYA', 2099, 'MÔ TẢ SẢN PHẨM Tên sản phẩm: Giày Thể Thao Chạy Bộ Goya Training Plus Xanh Rêu  Mang thiết kế phù hợp với môi trường thành phố thay đổi không ngừng, mẫu giày chạy bộ này sở hữu phần thân trên dệt kim siêu nhẹ ôm sát chuyển động tự nhiên của bước chân    THÔNG TIN SẢN PHẨM:  - Đế giày rộng nâng đỡ chuyển động ngang và lớp đệm đàn hồi giúp chuyển hồi năng lượng mỗi khi sải bước      - Năng lượng bất tận: Cao su IP là lớp cao su có độ đàn hồi tốt nhất từ trước đến nay của chúng tôi, mang đến khả năng chuyển hồi năng lượng tuyệt vời: Bạn dùng càng nhiều sức thì năng lượng hồi lại càng lớn      - Đế ngoài linh hoạt: Đế ngoài bằng cao su Phylon co giãn dưới lòng bàn chân để tăng lực cho từng bước chạy      - Lưỡi giày thích ứng: Cấu trúc lưỡi giày thích ứng phân bổ đều áp lực để ôm khít phần giữa bàn chân      - Có dây buộc an toàn, chắc chắn      - Thân giày trên dệt kim một lớp cùng với lưỡi giày thích ứng giúp nâng đỡ phần giữa bàn chân      - Cảm giác chắc chắn      - Chiều cao đế: 3cm      - Kiểu vòm bàn chân: Bình thường        Công dụng:  + Bảo vệ chân khỏi những vật cản không mong muốn  +Miếng đệm của giày thể thao giúp bạn tránh thương tích khi hoạt động  +Giày thể thao mang lại sự tự tin    Hướng dẫn bảo quản:  Hạn chế không nên để giày tiếp xúc nhiều với chất bẩn, chất tẩy rửa, đặc biệt là các chất bẩn cứng đầu như: Cà phê, Trà, Nhựa trái cây…  Bảo quản giày ở nơi khô ráo, thoáng mát…  Nếu không sử dụng thường xuyên thì nên bỏ giày vào bao ni lông bịt kín hoặc hộp đựng giày)  Không nên phơi giày dưới nắng quá gắt    Bảo hành đổi trả theo quy định shopee', 'aHR0cDovL3MzLmFwLW5vcnRoZWFzdC0xLndhc2FiaXN5cy5jb20vaG5jLWNybS1zMy5nZXRjb252ZXJzaW9uLmNvL3dlYmVjb20vMjAyMi8wNi82OTZlZTJiOTQwY2ZhYTE1MjMzNmUyYmE4ZDA5ZjBiZi5wbmc.jpg'),
(6, 'Nike Air Force 1 Da Lộn Xám Vải Trắng', 600000, 'NIKE', 100, 'Mẫu giày có thiết kế nổi bật từ da lông xám vừa sáng, vừa tối tạo nên cân bằng Đôi giày Nike này có thể phối được nhiều bộ đồ đi chơi đi học hay đi làm cũng rất tiện lợi', 'tải xuống.jpg'),
(7, 'Nike Dunk High Retro SE', 2390000, 'NIKE', 40, 'Giày Nike Air Force 1 Xám chuột Mới 2022 Đẹp & Chất là mẫu giày thuộc nhà Nike AF1  Mẫu giày có thiết kế nổi bật từ da lông xám vừa sáng, vừa tối tạo nên cân bằng Đôi giày Nike này có thể phối được nhiều bộ đồ đi chơi đi học hay đi làm cũng rất tiện lợi', 'dunk-high-retro-se-shoes-4HqFKX.jpg'),
(8, 'Giày nam sneaker đế tăng chiều cao 5cm Viền Đổi Màu Phản Quang nổi bật ', 163000, 'OEM', 50, 'MÔ TẢ SẢN PHẨM  GIỚI THIỆU SẢN PHẨM Thương hiệu : No BrandKích Thước : Size Nam: 39 - 40 - 41 - 42 - 43Màu Sắc : Đen  - Chất liệu : Da  - Đế : Cao su nguyên chất  - Size : 39-44  - Fullbox', 'f7508582270ed1fd8575b0e44eb25fb2.jpg'),
(9, 'Giày chạy bộ Run Active Grip cho nam', 895000, 'KALENJI ', 2000, 'Giày làm bằng chất liệu thông thoáng, phần mút dày ở gót và lưỡi gà. Đế đa năng của giày Run Active Grip giúp bạn chạy bộ dễ dàng trên đường phẳng và đường núi nhờ mang lại cảm giác thoải mái và độ bám tốt.', 'p2175064.png'),
(10, 'Giày dã ngoại cổ lửng chống thấm nước NH150 cho nam - Xanh', 1250000, 'QUECHUA ', 200, 'Giày cổ lửng chống thấm nước NH150 này dành cho những chuyến dã ngoại không thường xuyên trên địa hình bằng phẳng khi trời mưa. Mục tiêu của chúng tôi? Mang đến cho bạn đôi giày chống thấm nước, thoải mái và bám tốt ngay cả trên đường mòn dã ngoại không mấy bằng phẳng. Với mức giá hợp lý!', 'p2164460.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sinhnhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `sinhnhat`) VALUES
(10, 'admin', '123', '', '2023-06-23'),
(12, 'amin123', '', 'Ad@gmail.com', '2023-06-24'),
(13, 'admin123', '', 'Admin@gmail.com', '2023-06-08'),
(14, 'Admin123', '1234', 'Admin@gmail.com', '2023-06-25');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
