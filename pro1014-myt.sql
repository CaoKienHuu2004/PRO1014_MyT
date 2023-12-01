-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 04:53 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pro1014-myt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `idCart` int(11) NOT NULL,
  `idProducts` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL,
  `Total_product` int(11) NOT NULL,
  `Total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `idCategories` int(11) NOT NULL,
  `Name_C` varchar(150) NOT NULL,
  `Img_C` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`idCategories`, `Name_C`, `Img_C`) VALUES
(0, 'Lập trình', 'code'),
(1, 'Đồ Họa', 'edit-3'),
(2, 'Marketing', 'bar-chart'),
(3, 'Giáo Trình', 'book-open'),
(4, 'Ngoại Ngữ', 'bookmark'),
(5, 'Tin Học', 'file-minus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProducts` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Good_or_bad` int(11) DEFAULT NULL,
  `Content` text NOT NULL,
  `Star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img`
--

CREATE TABLE `img` (
  `idImg` int(11) NOT NULL,
  `idProducts` int(11) NOT NULL,
  `Img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img`
--

INSERT INTO `img` (`idImg`, `idProducts`, `Img`) VALUES
(1, 3, 'portfolio-06.jpg'),
(2, 3, 'portfolio-01.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaded`
--

CREATE TABLE `loaded` (
  `idLoaded` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Payment` varchar(150) NOT NULL,
  `Money` double NOT NULL,
  `Pcoin` int(10) NOT NULL,
  `Date` datetime NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `idOrder` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Name_seller` varchar(150) NOT NULL,
  `Phone_seller` int(11) NOT NULL,
  `Email_seller` varchar(100) NOT NULL,
  `Name_buyer` varchar(150) NOT NULL,
  `Phone_buyer` int(11) NOT NULL,
  `Email_buyer` varchar(100) NOT NULL,
  `Date_oder` datetime NOT NULL,
  `Payments` varchar(100) NOT NULL,
  `Total_Pcion` int(11) NOT NULL,
  `Check_out` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idCategories` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `img` varchar(100) NOT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `Describe` longtext NOT NULL,
  `Price` int(11) NOT NULL,
  `Price_2` int(11) DEFAULT NULL,
  `Date_Sale` date DEFAULT NULL,
  `Instruct` longtext NOT NULL,
  `Test` tinyint(4) NOT NULL DEFAULT 0,
  `status` enum('pending','approved') NOT NULL DEFAULT 'pending',
  `view` int(10) NOT NULL DEFAULT 0,
  `best_saler` int(10) NOT NULL DEFAULT 0,
  `File` varchar(255) NOT NULL DEFAULT 'không có files'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`idProduct`, `idUser`, `idCategories`, `Name`, `img`, `img1`, `Describe`, `Price`, `Price_2`, `Date_Sale`, `Instruct`, `Test`, `status`, `view`, `best_saler`, `File`) VALUES
(1, 1, 0, 'Template HTML&CSS MyT + Bootstrap 5', 'portfolio-06.jpg', NULL, 'Template HTML&CSS MyT + Bootstrap 5 là một giải pháp thiết kế web hiện đại và linh hoạt, được tối ưu hóa cho Sàn Giao dịch Tài nguyên Sinh viên MyT. Được xây dựng trên cơ sở Bootstrap 5, nó mang lại trải nghiệm người dùng đồng nhất và linh hoạt trên nhiều thiết bị, từ máy tính đến điện thoại di động.', 75, 50, '2023-11-30', '<b>Tính Năng Chính:</b>\n<br>\n1. Giao Diện Thân Thiện:<br>\nThiết kế giao diện sáng tạo và thân thiện với người dùng.<br>\nMàu sắc tinh tế và dễ tùy chỉnh để phản ánh định danh thương hiệu của MyT.\n<br><br>\n2. Responsive Bootstrap 5:<br>\nĐược xây dựng trên Bootstrap 5, đảm bảo trang web tương thích với mọi loại màn hình.\n<br><br>\n3. Trang Chủ Thông Tin:<br>\nHiển thị thông tin chính về MyT và các dịch vụ cung cấp.<br>\nHỗ trợ hình ảnh và biểu đồ để minh họa thông tin một cách trực quan.\n<br><br>\n4. Tìm Kiếm và Lọc:<br>\nGiao diện tìm kiếm và lọc linh hoạt cho phép người dùng dễ dàng tìm kiếm tài nguyên sinh viên.\n<br><br>\n5. Trang Chi Tiết Sản Phẩm:<br>\nTrang độc lập cho mỗi sản phẩm/tài nguyên, với thông tin chi tiết và hình ảnh.<br>\nNút liên kết đến các tính năng khác như đặt hàng hoặc liên hệ.\n<br><br>\n6. Quản lý Tài Khoản:<br>\nTrang đăng nhập và đăng ký để quản lý tài khoản cá nhân.<br>\nTích hợp các tính năng quản lý tài khoản như thay đổi mật khẩu và thông tin cá nhân.\n<br><br>\n7. Trang Liên Hệ:<br>\nForm liên hệ để người dùng có thể gửi câu hỏi hoặc phản hồi.\n<br><br>\n8. Footer Thông Tin:<br>\nFooter chứa thông tin liên hệ, liên kết đến trang mạng xã hội và các liên kết quan trọng khác.<br>\n<br>\n<hr>\n<br>\n<b>HƯỚNG DẪN CÀI ĐẶT</b><br>\nBước 1: Tải và Giải Nén Tệp:<br>\nTải tệp template HTML&CSS từ nguồn cung cấp.<br>\nNếu tệp là một file nén (ví dụ: ZIP), giải nén nó bằng cách sử dụng một chương trình giải nén như WinRAR hoặc 7-Zip.<br><br>\nBước 2: Mở VSCode và Mở Thư Mục Dự Án:<br>\nCài đặt Visual Studio Code nếu bạn chưa có nó. Bạn có thể tải nó từ trang web chính thức: Visual Studio Code.<br>\nMở VSCode sau khi cài đặt xong.<br>\nNhấn vào biểu tượng thư mục ở thanh bên trái hoặc sử dụng tổ hợp phím Ctrl + O (Windows/Linux) hoặc Cmd + O (Mac) để mở một thư mục.<br><br>\nBước 3: Chọn Thư Mục Dự Án:<br>\nChọn thư mục dự án bạn đã giải nén từ bước 1 và nhấn \"Select Folder\" để mở nó trong VSCode.<br><br>\nBước 4: Chỉnh Sửa và Xem Trang Web:<br>\nMở tệp HTML chính (thường là index.html) bằng cách nhấp vào tên tệp trong thanh bên trái.<br>\nKhi tệp HTML được mở, bạn có thể xem mã nguồn HTML và chỉnh sửa nếu cần thiết.\nĐể xem trang web trong trình duyệt tích hợp của VSCode, nhấn tổ hợp phím Alt + B hoặc nhấp vào biểu tượng \"Go Live\" ở góc dưới cùng bên phải của VSCode. Trình duyệt mặc định của bạn sẽ mở trang web.<br><br>\nBước 5: Chỉnh Sửa và Lưu Trực Tiếp:<br>\nChỉnh sửa tệp HTML hoặc CSS và lưu thay đổi.<br>\nTrình duyệt sẽ tự động làm mới để hiển thị kết quả ngay lập tức.<br>\nVới các bước trên, bạn có thể dễ dàng mở và chỉnh sửa một dự án HTML&CSS trong Visual Studio Code một cách thuận tiện.\n', 1, 'approved', 19, 0, 'không có files'),
(2, 0, 1, 'Bộ ấn phẩm - Nhận diện thương hiệu Hoa Sen', 'portfolio-06.jpg', NULL, 'Bộ Nhận Diện Thương Hiệu \"Hoa Sen\" là một biểu tượng của sự tinh tế và thuần khiết. Logo, với hình ảnh bông sen tinh khôi, tạo nên một diện mạo duyên dáng và quý phái. Màu trắng và vàng chủ đạo tôn lên sự thuần khiết và giàu có, tạo nên một không gian thương hiệu trang nhã và đẳng cấp. Sự kết hợp của hình ảnh sen, màu sắc ấn tượng và slogan \"Nở Hoa Sen - Nở Văn Minh\" tạo ra một ấn tượng mạnh mẽ và gắn kết thương hiệu với giá trị văn hóa và tinh thần tốt đẹp. Bộ nhận diện thương hiệu \"Hoa Sen\" là sự hoàn hảo hóa của sự đẳng cấp và tinh tế.', 35, NULL, NULL, '<b>Mô tả cụ thể</b><br><br>\n1. Logo:<br>\nMô Tả: Logo của Hoa Sen là hình ảnh của một bông sen tinh khôi, được thiết kế với đường nét tinh tế và màu sắc trấn an, thường là màu trắng và vàng. Bông sen là biểu tượng của sự thuần khiết và tinh khôi.<br>\nSử Dụng: Logo xuất hiện trên mọi ấn phẩm của Hoa Sen, từ sản phẩm đến trang web, tạo ra một hình ảnh nhận diện mạnh mẽ.<br><br>\n2. Màu Sắc:<br>\nChủ Đạo: Màu chủ đạo của thương hiệu Hoa Sen là trắng và vàng. Trắng tượng trưng cho sự thuần khiết và trong trắng, trong khi vàng thường biểu thị sự quý phái và giàu có.<br>\nBiến Thể: Các biến thể màu sắc, chẳng hạn như màu xanh lá cây nhẹ và hồng nhạt, có thể được sử dụng để làm nổi bật các yếu tố cụ thể.<br><br>\n3. Phông Chữ:<br>\n\nChọn Lựa: Một phông chữ độc đáo và dễ đọc được chọn để phản ánh đặc trưng của thương hiệu. Phông chữ có thể là một biến thể của phông chữ serif để thêm tính lịch sự và truyền thống.<br>\nSử Dụng: Phông chữ được sử dụng không chỉ trong logo mà còn trong các văn bản trên trang web, tài liệu in và quảng cáo.<br><br>\n4. Hình Ảnh Đi kèm:<br>\n\nChủ Đề Hình Ảnh: Các hình ảnh chủ đề xoay quanh đề tài sen, cây sen, hoặc các sản phẩm liên quan đến sen. Hình ảnh nổi bật với ánh sáng tốt, màu sắc sống động và chất lượng cao.<br>\nPhong Cách Nhiếp Ảnh: Có thể sử dụng nhiếp ảnh tự nhiên với ánh sáng mềm hoặc hình ảnh sáng tạo để tạo ra sự thu hút.<br><br>\n5. Slogan và Tagline:\n<br>\nSlogan Chính: Một khẩu hiệu ngắn gọn và ấn tượng, như \"Nở Hoa Sen - Nở Văn Minh,\" có thể đi kèm với logo để tăng cường thông điệp thương hiệu.<br>\nTagline Đặc Biệt: Đôi khi, các sản phẩm hoặc dự án cụ thể có thể đi kèm với các tagline riêng biệt để tạo ra ấn tượng sâu sắc hơn.<br><br>\n6. Ứng Dụng Đa Nền Tảng:\n<br>\nTrên Sản Phẩm: Bộ nhận diện thương hiệu được tích hợp chặt chẽ vào bao bì và nhãn sản phẩm, tạo nên sự nhận biết mạnh mẽ trong các cửa hàng và trên thị trường.<br>\nTrong Truyền Thông: Xuất hiện trên các ấn phẩm quảng cáo, tài liệu tiếp thị, và trang web của Hoa Sen, tạo ra một trải nghiệm đồng nhất cho khách hàng.<br><br>\nBộ nhận diện thương hiệu \"Hoa Sen\" nhấn mạnh sự tinh tế, thuần khiết, và giữ cho mình ổn định trong mọi ứng dụng để tạo ra một ấn tượng mạnh mẽ và đặc biệt.\n<br>\n<hr>\n<br>\n<b>HƯỚNG DẪN CÀI ĐẶT</b><br><br>\nBước 1: Chọn Định Dạng Tệp và Tải Về:\n<br>\nSau khi bạn đã chọn bộ ấn phẩm, trang web thường sẽ cung cấp nhiều định dạng tệp để tải xuống. Đối với Adobe Illustrator, bạn có thể muốn chọn định dạng AI hoặc EPS nếu có sẵn.<br>\nNhấp vào nút \"Tải Xuống\" hoặc tương tự để bắt đầu quá trình tải về.<br><br>\nBước 2: Giải Nén (Nếu Có):\n<br>\nNếu tệp bạn tải về là một file nén (ví dụ: ZIP), bạn cần giải nén nó bằng cách sử dụng một chương trình giải nén như WinRAR hoặc 7-Zip.<br><br>\nBước 3: Mở Tệp Trong Adobe Illustrator:\n<br>\nMở Adobe Illustrator trên máy tính của bạn.<br>\nChọn \"File\" và sau đó \"Open\" để mở tệp AI hoặc EPS mà bạn đã tải về.', 1, 'approved', 54, 25, 'không có files'),
(3, 1, 0, 'Bộ tổng hợp website PHP Quản lý sinh viên AP', 'portfolio-06.jpg', 'portfolio-01.jpg', 'Bộ tổng hợp website PHP Quản lý sinh viên AP là một giải pháp thiết kế web hiện đại và linh hoạt, được tối ưu hóa. Được xây dựng trên cơ sở Bootstrap 5, nó mang lại trải nghiệm người dùng đồng nhất và linh hoạt trên nhiều thiết bị, từ máy tính đến điện thoại di động.', 75, 25, '2023-12-12', '<b>Tính Năng Chính:</b>\r\n<br>\r\n1. Giao Diện Thân Thiện:<br>\r\nThiết kế giao diện sáng tạo và thân thiện với người dùng.<br>\r\nMàu sắc tinh tế và dễ tùy chỉnh để phản ánh định danh thương hiệu của MyT.\r\n<br><br>\r\n2. Responsive Bootstrap 5:<br>\r\nĐược xây dựng trên Bootstrap 5, đảm bảo trang web tương thích với mọi loại màn hình.\r\n<br><br>\r\n3. Trang Chủ Thông Tin:<br>\r\nHiển thị thông tin chính về MyT và các dịch vụ cung cấp.<br>\r\nHỗ trợ hình ảnh và biểu đồ để minh họa thông tin một cách trực quan.\r\n<br><br>\r\n<img class=\"community-img\" src=\"view/layout/assets/images/community/community-post-01.jpg\" alt=\"Nft_Community-image\"><br><br>\r\n4. Tìm Kiếm và Lọc:<br>\r\nGiao diện tìm kiếm và lọc linh hoạt cho phép người dùng dễ dàng tìm kiếm tài nguyên sinh viên.\r\n<br><br>\r\n5. Trang Chi Tiết Sản Phẩm:<br>\r\nTrang độc lập cho mỗi sản phẩm/tài nguyên, với thông tin chi tiết và hình ảnh.<br>\r\nNút liên kết đến các tính năng khác như đặt hàng hoặc liên hệ.\r\n<br><br>\r\n6. Quản lý Tài Khoản:<br>\r\nTrang đăng nhập và đăng ký để quản lý tài khoản cá nhân.<br>\r\nTích hợp các tính năng quản lý tài khoản như thay đổi mật khẩu và thông tin cá nhân.\r\n<br><br>\r\n7. Trang Liên Hệ:<br>\r\nForm liên hệ để người dùng có thể gửi câu hỏi hoặc phản hồi.\r\n<br><br>\r\n8. Footer Thông Tin:<br>\r\nFooter chứa thông tin liên hệ, liên kết đến trang mạng xã hội và các liên kết quan trọng khác.<br>\r\n<br>\r\n----------------------------\r\n<br>\r\n<b>HƯỚNG DẪN CÀI ĐẶT</b><br>\r\nBước 1: Tải và Giải Nén Tệp:<br>\r\nTải tệp template HTML&CSS từ nguồn cung cấp.<br>\r\nNếu tệp là một file nén (ví dụ: ZIP), giải nén nó bằng cách sử dụng một chương trình giải nén như WinRAR hoặc 7-Zip.<br><br>\r\nBước 2: Mở VSCode và Mở Thư Mục Dự Án:<br>\r\nCài đặt Visual Studio Code nếu bạn chưa có nó. Bạn có thể tải nó từ trang web chính thức: Visual Studio Code.<br>\r\nMở VSCode sau khi cài đặt xong.<br>\r\nNhấn vào biểu tượng thư mục ở thanh bên trái hoặc sử dụng tổ hợp phím Ctrl + O (Windows/Linux) hoặc Cmd + O (Mac) để mở một thư mục.<br><br>\r\nBước 3: Chọn Thư Mục Dự Án:<br>\r\nChọn thư mục dự án bạn đã giải nén từ bước 1 và nhấn \"Select Folder\" để mở nó trong VSCode.<br><br>\r\nBước 4: Chỉnh Sửa và Xem Trang Web:<br>\r\nMở tệp HTML chính (thường là index.html) bằng cách nhấp vào tên tệp trong thanh bên trái.<br>\r\nKhi tệp HTML được mở, bạn có thể xem mã nguồn HTML và chỉnh sửa nếu cần thiết.\r\nĐể xem trang web trong trình duyệt tích hợp của VSCode, nhấn tổ hợp phím Alt + B hoặc nhấp vào biểu tượng \"Go Live\" ở góc dưới cùng bên phải của VSCode. Trình duyệt mặc định của bạn sẽ mở trang web.<br><br>\r\nBước 5: Chỉnh Sửa và Lưu Trực Tiếp:<br>\r\nChỉnh sửa tệp HTML hoặc CSS và lưu thay đổi.<br>\r\nTrình duyệt sẽ tự động làm mới để hiển thị kết quả ngay lập tức.<br>\r\nVới các bước trên, bạn có thể dễ dàng mở và chỉnh sửa một dự án HTML&CSS trong Visual Studio Code một cách thuận tiện.\r\n', 0, 'approved', 163, 44, 'không có files'),
(4, 0, 1, 'Bộ ấn phẩm - Nhận diện thương hiệu Starbuck', 'portfolio-06.jpg', NULL, 'Bộ Nhận Diện Thương Hiệu \"Starbuck\" là một biểu tượng của sự tinh tế và thuần khiết. Logo, với hình ảnh bông sen tinh khôi, tạo nên một diện mạo duyên dáng và quý phái. Màu trắng và vàng chủ đạo tôn lên sự thuần khiết và giàu có, tạo nên một không gian thương hiệu trang nhã và đẳng cấp. Sự kết hợp của hình ảnh sen, màu sắc ấn tượng và slogan \"Nở Hoa Sen - Nở Văn Minh\" tạo ra một ấn tượng mạnh mẽ và gắn kết thương hiệu với giá trị văn hóa và tinh thần tốt đẹp. Bộ nhận diện thương hiệu \"Hoa Sen\" là sự hoàn hảo hóa của sự đẳng cấp và tinh tế.', 30, 15, '2023-12-30', '<b>Mô tả cụ thể</b><br><br>\r\n1. Logo:<br>\r\nMô Tả: Logo của Hoa Sen là hình ảnh của một bông sen tinh khôi, được thiết kế với đường nét tinh tế và màu sắc trấn an, thường là màu trắng và vàng. Bông sen là biểu tượng của sự thuần khiết và tinh khôi.<br>\r\nSử Dụng: Logo xuất hiện trên mọi ấn phẩm của Hoa Sen, từ sản phẩm đến trang web, tạo ra một hình ảnh nhận diện mạnh mẽ.<br><br>\r\n2. Màu Sắc:<br>\r\nChủ Đạo: Màu chủ đạo của thương hiệu Hoa Sen là trắng và vàng. Trắng tượng trưng cho sự thuần khiết và trong trắng, trong khi vàng thường biểu thị sự quý phái và giàu có.<br>\r\nBiến Thể: Các biến thể màu sắc, chẳng hạn như màu xanh lá cây nhẹ và hồng nhạt, có thể được sử dụng để làm nổi bật các yếu tố cụ thể.<br><br>\r\n3. Phông Chữ:<br>\r\n\r\nChọn Lựa: Một phông chữ độc đáo và dễ đọc được chọn để phản ánh đặc trưng của thương hiệu. Phông chữ có thể là một biến thể của phông chữ serif để thêm tính lịch sự và truyền thống.<br>\r\nSử Dụng: Phông chữ được sử dụng không chỉ trong logo mà còn trong các văn bản trên trang web, tài liệu in và quảng cáo.<br><br>\r\n4. Hình Ảnh Đi kèm:<br>\r\n\r\nChủ Đề Hình Ảnh: Các hình ảnh chủ đề xoay quanh đề tài sen, cây sen, hoặc các sản phẩm liên quan đến sen. Hình ảnh nổi bật với ánh sáng tốt, màu sắc sống động và chất lượng cao.<br>\r\nPhong Cách Nhiếp Ảnh: Có thể sử dụng nhiếp ảnh tự nhiên với ánh sáng mềm hoặc hình ảnh sáng tạo để tạo ra sự thu hút.<br><br>\r\n5. Slogan và Tagline:\r\n<br>\r\nSlogan Chính: Một khẩu hiệu ngắn gọn và ấn tượng, như \"Nở Hoa Sen - Nở Văn Minh,\" có thể đi kèm với logo để tăng cường thông điệp thương hiệu.<br>\r\nTagline Đặc Biệt: Đôi khi, các sản phẩm hoặc dự án cụ thể có thể đi kèm với các tagline riêng biệt để tạo ra ấn tượng sâu sắc hơn.<br><br>\r\n6. Ứng Dụng Đa Nền Tảng:\r\n<br>\r\nTrên Sản Phẩm: Bộ nhận diện thương hiệu được tích hợp chặt chẽ vào bao bì và nhãn sản phẩm, tạo nên sự nhận biết mạnh mẽ trong các cửa hàng và trên thị trường.<br>\r\nTrong Truyền Thông: Xuất hiện trên các ấn phẩm quảng cáo, tài liệu tiếp thị, và trang web của Hoa Sen, tạo ra một trải nghiệm đồng nhất cho khách hàng.<br><br>\r\nBộ nhận diện thương hiệu \"Hoa Sen\" nhấn mạnh sự tinh tế, thuần khiết, và giữ cho mình ổn định trong mọi ứng dụng để tạo ra một ấn tượng mạnh mẽ và đặc biệt.\r\n<br>\r\n<hr>\r\n<br>\r\n<b>HƯỚNG DẪN CÀI ĐẶT</b><br><br>\r\nBước 1: Chọn Định Dạng Tệp và Tải Về:\r\n<br>\r\nSau khi bạn đã chọn bộ ấn phẩm, trang web thường sẽ cung cấp nhiều định dạng tệp để tải xuống. Đối với Adobe Illustrator, bạn có thể muốn chọn định dạng AI hoặc EPS nếu có sẵn.<br>\r\nNhấp vào nút \"Tải Xuống\" hoặc tương tự để bắt đầu quá trình tải về.<br><br>\r\nBước 2: Giải Nén (Nếu Có):\r\n<br>\r\nNếu tệp bạn tải về là một file nén (ví dụ: ZIP), bạn cần giải nén nó bằng cách sử dụng một chương trình giải nén như WinRAR hoặc 7-Zip.<br><br>\r\nBước 3: Mở Tệp Trong Adobe Illustrator:\r\n<br>\r\nMở Adobe Illustrator trên máy tính của bạn.<br>\r\nChọn \"File\" và sau đó \"Open\" để mở tệp AI hoặc EPS mà bạn đã tải về.', 1, 'approved', 5, 1, 'không có files'),
(5, 0, 1, 'Bộ ấn phẩm - Nhận diện thương hiệu FPT', 'portfolio-01.jpg', 'portfolio-01.jpg', 'Bộ Nhận Diện Thương Hiệu \"FPT\" là một biểu tượng của sự tinh tế và thuần khiết. Logo, với hình ảnh bông sen tinh khôi, tạo nên một diện mạo duyên dáng và quý phái. Màu trắng và vàng chủ đạo tôn lên sự thuần khiết và giàu có, tạo nên một không gian thương hiệu trang nhã và đẳng cấp. Sự kết hợp của hình ảnh sen, màu sắc ấn tượng và slogan \"Nở Hoa Sen - Nở Văn Minh\" tạo ra một ấn tượng mạnh mẽ và gắn kết thương hiệu với giá trị văn hóa và tinh thần tốt đẹp. Bộ nhận diện thương hiệu \"Hoa Sen\" là sự hoàn hảo hóa của sự đẳng cấp và tinh tế.', 50, 40, '2023-12-30', '<b>Mô tả cụ thể</b><br><br>\r\n1. Logo:<br>\r\nMô Tả: Logo của Hoa Sen là hình ảnh của một bông sen tinh khôi, được thiết kế với đường nét tinh tế và màu sắc trấn an, thường là màu trắng và vàng. Bông sen là biểu tượng của sự thuần khiết và tinh khôi.<br>\r\nSử Dụng: Logo xuất hiện trên mọi ấn phẩm của Hoa Sen, từ sản phẩm đến trang web, tạo ra một hình ảnh nhận diện mạnh mẽ.<br><br>\r\n2. Màu Sắc:<br>\r\nChủ Đạo: Màu chủ đạo của thương hiệu Hoa Sen là trắng và vàng. Trắng tượng trưng cho sự thuần khiết và trong trắng, trong khi vàng thường biểu thị sự quý phái và giàu có.<br>\r\nBiến Thể: Các biến thể màu sắc, chẳng hạn như màu xanh lá cây nhẹ và hồng nhạt, có thể được sử dụng để làm nổi bật các yếu tố cụ thể.<br><br>\r\n3. Phông Chữ:<br>\r\n\r\nChọn Lựa: Một phông chữ độc đáo và dễ đọc được chọn để phản ánh đặc trưng của thương hiệu. Phông chữ có thể là một biến thể của phông chữ serif để thêm tính lịch sự và truyền thống.<br>\r\nSử Dụng: Phông chữ được sử dụng không chỉ trong logo mà còn trong các văn bản trên trang web, tài liệu in và quảng cáo.<br><br>\r\n4. Hình Ảnh Đi kèm:<br>\r\n\r\nChủ Đề Hình Ảnh: Các hình ảnh chủ đề xoay quanh đề tài sen, cây sen, hoặc các sản phẩm liên quan đến sen. Hình ảnh nổi bật với ánh sáng tốt, màu sắc sống động và chất lượng cao.<br>\r\nPhong Cách Nhiếp Ảnh: Có thể sử dụng nhiếp ảnh tự nhiên với ánh sáng mềm hoặc hình ảnh sáng tạo để tạo ra sự thu hút.<br><br>\r\n5. Slogan và Tagline:\r\n<br>\r\nSlogan Chính: Một khẩu hiệu ngắn gọn và ấn tượng, như \"Nở Hoa Sen - Nở Văn Minh,\" có thể đi kèm với logo để tăng cường thông điệp thương hiệu.<br>\r\nTagline Đặc Biệt: Đôi khi, các sản phẩm hoặc dự án cụ thể có thể đi kèm với các tagline riêng biệt để tạo ra ấn tượng sâu sắc hơn.<br><br>\r\n6. Ứng Dụng Đa Nền Tảng:\r\n<br>\r\nTrên Sản Phẩm: Bộ nhận diện thương hiệu được tích hợp chặt chẽ vào bao bì và nhãn sản phẩm, tạo nên sự nhận biết mạnh mẽ trong các cửa hàng và trên thị trường.<br>\r\nTrong Truyền Thông: Xuất hiện trên các ấn phẩm quảng cáo, tài liệu tiếp thị, và trang web của Hoa Sen, tạo ra một trải nghiệm đồng nhất cho khách hàng.<br><br>\r\nBộ nhận diện thương hiệu \"Hoa Sen\" nhấn mạnh sự tinh tế, thuần khiết, và giữ cho mình ổn định trong mọi ứng dụng để tạo ra một ấn tượng mạnh mẽ và đặc biệt.\r\n<br>\r\n<hr>\r\n<br>\r\n<b>HƯỚNG DẪN CÀI ĐẶT</b><br><br>\r\nBước 1: Chọn Định Dạng Tệp và Tải Về:\r\n<br>\r\nSau khi bạn đã chọn bộ ấn phẩm, trang web thường sẽ cung cấp nhiều định dạng tệp để tải xuống. Đối với Adobe Illustrator, bạn có thể muốn chọn định dạng AI hoặc EPS nếu có sẵn.<br>\r\nNhấp vào nút \"Tải Xuống\" hoặc tương tự để bắt đầu quá trình tải về.<br><br>\r\nBước 2: Giải Nén (Nếu Có):\r\n<br>\r\nNếu tệp bạn tải về là một file nén (ví dụ: ZIP), bạn cần giải nén nó bằng cách sử dụng một chương trình giải nén như WinRAR hoặc 7-Zip.<br><br>\r\nBước 3: Mở Tệp Trong Adobe Illustrator:\r\n<br>\r\nMở Adobe Illustrator trên máy tính của bạn.<br>\r\nChọn \"File\" và sau đó \"Open\" để mở tệp AI hoặc EPS mà bạn đã tải về.', 0, 'approved', 20, 5, 'không có files'),
(6, 0, 0, 'Template HTML&CSS NFT NodeJS + ES6', 'portfolio-06.jpg', NULL, 'Template HTML&CSS NFT NodeJS + ES6 là một giải pháp thiết kế web hiện đại và linh hoạt, được tối ưu hóa cho Sàn Giao dịch Tài nguyên NFT. Được xây dựng trên cơ sở NodeJS + ES6, nó mang lại trải nghiệm người dùng đồng nhất và linh hoạt trên nhiều thiết bị, từ máy tính đến điện thoại di động.', 100, 75, '2023-11-30', '<b>Tính Năng Chính:</b>\r\n<br>\r\n1. Giao Diện Thân Thiện:<br>\r\nThiết kế giao diện sáng tạo và thân thiện với người dùng.<br>\r\nMàu sắc tinh tế và dễ tùy chỉnh để phản ánh định danh thương hiệu của MyT.\r\n<br><br>\r\n2. Responsive Bootstrap 5:<br>\r\nĐược xây dựng trên Bootstrap 5, đảm bảo trang web tương thích với mọi loại màn hình.\r\n<br><br>\r\n3. Trang Chủ Thông Tin:<br>\r\nHiển thị thông tin chính về MyT và các dịch vụ cung cấp.<br>\r\nHỗ trợ hình ảnh và biểu đồ để minh họa thông tin một cách trực quan.\r\n<br><br>\r\n4. Tìm Kiếm và Lọc:<br>\r\nGiao diện tìm kiếm và lọc linh hoạt cho phép người dùng dễ dàng tìm kiếm tài nguyên sinh viên.\r\n<br><br>\r\n5. Trang Chi Tiết Sản Phẩm:<br>\r\nTrang độc lập cho mỗi sản phẩm/tài nguyên, với thông tin chi tiết và hình ảnh.<br>\r\nNút liên kết đến các tính năng khác như đặt hàng hoặc liên hệ.\r\n<br><br>\r\n6. Quản lý Tài Khoản:<br>\r\nTrang đăng nhập và đăng ký để quản lý tài khoản cá nhân.<br>\r\nTích hợp các tính năng quản lý tài khoản như thay đổi mật khẩu và thông tin cá nhân.\r\n<br><br>\r\n7. Trang Liên Hệ:<br>\r\nForm liên hệ để người dùng có thể gửi câu hỏi hoặc phản hồi.\r\n<br><br>\r\n8. Footer Thông Tin:<br>\r\nFooter chứa thông tin liên hệ, liên kết đến trang mạng xã hội và các liên kết quan trọng khác.<br>\r\n<br>\r\n<hr>\r\n<br>\r\n<b>HƯỚNG DẪN CÀI ĐẶT</b><br>\r\nBước 1: Tải và Giải Nén Tệp:<br>\r\nTải tệp template HTML&CSS từ nguồn cung cấp.<br>\r\nNếu tệp là một file nén (ví dụ: ZIP), giải nén nó bằng cách sử dụng một chương trình giải nén như WinRAR hoặc 7-Zip.<br><br>\r\nBước 2: Mở VSCode và Mở Thư Mục Dự Án:<br>\r\nCài đặt Visual Studio Code nếu bạn chưa có nó. Bạn có thể tải nó từ trang web chính thức: Visual Studio Code.<br>\r\nMở VSCode sau khi cài đặt xong.<br>\r\nNhấn vào biểu tượng thư mục ở thanh bên trái hoặc sử dụng tổ hợp phím Ctrl + O (Windows/Linux) hoặc Cmd + O (Mac) để mở một thư mục.<br><br>\r\nBước 3: Chọn Thư Mục Dự Án:<br>\r\nChọn thư mục dự án bạn đã giải nén từ bước 1 và nhấn \"Select Folder\" để mở nó trong VSCode.<br><br>\r\nBước 4: Chỉnh Sửa và Xem Trang Web:<br>\r\nMở tệp HTML chính (thường là index.html) bằng cách nhấp vào tên tệp trong thanh bên trái.<br>\r\nKhi tệp HTML được mở, bạn có thể xem mã nguồn HTML và chỉnh sửa nếu cần thiết.\r\nĐể xem trang web trong trình duyệt tích hợp của VSCode, nhấn tổ hợp phím Alt + B hoặc nhấp vào biểu tượng \"Go Live\" ở góc dưới cùng bên phải của VSCode. Trình duyệt mặc định của bạn sẽ mở trang web.<br><br>\r\nBước 5: Chỉnh Sửa và Lưu Trực Tiếp:<br>\r\nChỉnh sửa tệp HTML hoặc CSS và lưu thay đổi.<br>\r\nTrình duyệt sẽ tự động làm mới để hiển thị kết quả ngay lập tức.<br>\r\nVới các bước trên, bạn có thể dễ dàng mở và chỉnh sửa một dự án HTML&CSS trong Visual Studio Code một cách thuận tiện.\r\n', 1, 'approved', 153, 40, 'không có files'),
(7, 0, 2, 'Bộ website wordpress bán hàng thời trang CHOI chuẩn SEO', 'portfolio-01.jpg', NULL, 'Đây là bộ sản phẩm website wordpress xịn nhất năm 2023 chuẩn SEO dành cho dân Marketing.', 25, NULL, NULL, 'Đang cập nhật ...', 0, 'approved', 26, 7, 'không có files'),
(8, 0, 4, 'Topnotch Level 2 dành cho Giảng viên', 'portfolio-01.jpg', NULL, 'Không có mô tả...', 0, NULL, NULL, 'Không có chi tiết', 1, 'approved', 150, 25, 'không có files');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trade`
--

CREATE TABLE `trade` (
  `idTrade` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL,
  `Type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Avata_img` varchar(100) DEFAULT NULL,
  `Banner_img` varchar(100) DEFAULT NULL,
  `Name_U` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Address` text DEFAULT NULL,
  `Bio` varchar(250) DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `Role` tinyint(4) NOT NULL DEFAULT 0,
  `Total_Pcoin` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `Username`, `Pass`, `Avata_img`, `Banner_img`, `Name_U`, `Email`, `Phone`, `Address`, `Bio`, `Major`, `Role`, `Total_Pcoin`) VALUES
(0, 'admin', '123', 'boy-avater.png', '', 'Quản Trị Viên', 'quantrivien@gmail.com', 374244751, 'TP.HCM', 'Lập Trình Viên + Nhà điều hành MyT Việt Nam', 'Web Dev', 1, 320),
(1, 'lyhuu123', '13102004caokienhuu', 'client-3.png', NULL, 'Cao Kiến Hựu', 'lyhuu5570@gmail.com', 374244751, NULL, NULL, NULL, 0, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `withdraw`
--

CREATE TABLE `withdraw` (
  `idUser` int(11) NOT NULL,
  `idWithdraw` int(11) NOT NULL,
  `Payments` varchar(150) NOT NULL,
  `Money` double NOT NULL,
  `Pcoin` int(10) NOT NULL,
  `Date` datetime NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategories`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`);

--
-- Chỉ mục cho bảng `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`idImg`);

--
-- Chỉ mục cho bảng `loaded`
--
ALTER TABLE `loaded`
  ADD PRIMARY KEY (`idLoaded`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idOrder`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- Chỉ mục cho bảng `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`idTrade`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Chỉ mục cho bảng `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`idWithdraw`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
