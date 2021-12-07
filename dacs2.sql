-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2021 lúc 08:07 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dacs2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `blog_id`, `ten`, `noidung`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 'dũ trần viết', 'hay', '2021-11-24 08:43:32', '2021-11-24 08:43:32', NULL),
(2, 4, 'TranVietDu', 'tuyệt', '2021-11-27 02:52:09', '2021-11-27 02:52:09', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tennguoiviet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `luotxem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `tennguoiviet`, `tieude`, `noidung`, `anh`, `created_at`, `updated_at`, `deleted_at`, `luotxem`) VALUES
(4, 13, 'Nguyễn Vân Anh', 'Sinh viên có nên đi làm thêm không?', '<p>Chào mừng các bạn đang đến với series các bài viết về <a href=\"https://www.bangtinvieclam.com/search/label/G%C3%B3c%20sinh%20vi%C3%AAn\"><strong>Định hướng nghề nghiệp</strong></a>&nbsp;cho sinh viên và người chưa có kinh nghiệm của&nbsp;<strong>Blog Nghề Nghiệp</strong>. Tôi là Thành HR sẽ đồng hành cùng bạn trong khoá học này. Và chủ đề mà chúng ta cùng nhau tìm hiểu ngày hôm nay là&nbsp;Sinh viên có nên đi làm thêm không?</p><p>Nhiều bạn đặt câu hỏi với mình rằng: Em mới vừa tốt nghiệp và đang làm <a href=\"https://www.bangtinvieclam.com/2020/08/cach-tao-cv-xin-viec-don-gian.html\">CV phỏng vấn xin việc</a>, vậy mục kinh nghiệm làm việc em nên ghi như thế nào?</p><p>Tôi hỏi: Quá trình đi học em có đi làm thêm hay tham gia các hoạt động đoàn trường, các công tác xã hội không? Đồ án thực tập và quá trình đi thực tập thực tế doanh nghiệp em có gì nổi trội hay không?</p><p>Em trả lời: Dạ không, em chỉ tập trung học 100% để lấy tấm bằng xuất sắc thôi ạ. Nên không có thời gian đi làm thêm, cũng như không đầu tư nhiều cho thời gian thực tập mà chỉ làm theo yêu cầu của trường để hoàn thành chương trình thôi ạ. Vậy câu hỏi đặt ra là sinh viên có nên đi làm thêm hay không?</p><p>Thật ra, sẽ không có câu trả lời chính xác cho mọi đối tượng, mọi tình huống khác nhau. Nên, mình xin đưa ra các lợi ích của việc đi làm thêm khi còn là sinh viên để các bạn tự xem xét theo thực tế cá nhân của bạn. Hy vọng bạn sẽ có một quyết định phù hợp và chính xác cho mình nhé!</p>', 'viec-lam-part-time68.jpg', '2021-11-21 06:32:16', '2021-12-01 03:57:24', '2021-12-01 03:57:24', 13),
(5, 13, 'Nguyễn Vân Anh', 'Sinh viên có nên đi làm thêm không?', '<p>Chào mừng các bạn đang đến với series các bài viết về <a href=\"https://www.bangtinvieclam.com/search/label/G%C3%B3c%20sinh%20vi%C3%AAn\"><strong>Định hướng nghề nghiệp</strong></a>&nbsp;cho sinh viên và người chưa có kinh nghiệm của&nbsp;<strong>Blog Nghề Nghiệp</strong>. Tôi là Thành HR sẽ đồng hành cùng bạn trong khoá học này. Và chủ đề mà chúng ta cùng nhau tìm hiểu ngày hôm nay là&nbsp;Sinh viên có nên đi làm thêm không?</p><p>Nhiều bạn đặt câu hỏi với mình rằng: Em mới vừa tốt nghiệp và đang làm <a href=\"https://www.bangtinvieclam.com/2020/08/cach-tao-cv-xin-viec-don-gian.html\">CV phỏng vấn xin việc</a>, vậy mục kinh nghiệm làm việc em nên ghi như thế nào?</p><p>Tôi hỏi: Quá trình đi học em có đi làm thêm hay tham gia các hoạt động đoàn trường, các công tác xã hội không? Đồ án thực tập và quá trình đi thực tập thực tế doanh nghiệp em có gì nổi trội hay không?</p><p>Em trả lời: Dạ không, em chỉ tập trung học 100% để lấy tấm bằng xuất sắc thôi ạ. Nên không có thời gian đi làm thêm, cũng như không đầu tư nhiều cho thời gian thực tập mà chỉ làm theo yêu cầu của trường để hoàn thành chương trình thôi ạ. Vậy câu hỏi đặt ra là sinh viên có nên đi làm thêm hay không?</p><p>Thật ra, sẽ không có câu trả lời chính xác cho mọi đối tượng, mọi tình huống khác nhau. Nên, mình xin đưa ra các lợi ích của việc đi làm thêm khi còn là sinh viên để các bạn tự xem xét theo thực tế cá nhân của bạn. Hy vọng bạn sẽ có một quyết định phù hợp và chính xác cho mình nhé!</p>', 'viec-lam-part-time68.jpg', '2021-11-21 06:32:16', '2021-12-01 03:57:26', '2021-12-01 03:57:26', 5),
(6, 13, 'Nguyễn Vân Anh', 'Sinh viên có nên đi làm thêm không?', '<p>Chào mừng các bạn đang đến với series các bài viết về <a href=\"https://www.bangtinvieclam.com/search/label/G%C3%B3c%20sinh%20vi%C3%AAn\"><strong>Định hướng nghề nghiệp</strong></a>&nbsp;cho sinh viên và người chưa có kinh nghiệm của&nbsp;<strong>Blog Nghề Nghiệp</strong>. Tôi là Thành HR sẽ đồng hành cùng bạn trong khoá học này. Và chủ đề mà chúng ta cùng nhau tìm hiểu ngày hôm nay là&nbsp;Sinh viên có nên đi làm thêm không?</p><p>Nhiều bạn đặt câu hỏi với mình rằng: Em mới vừa tốt nghiệp và đang làm <a href=\"https://www.bangtinvieclam.com/2020/08/cach-tao-cv-xin-viec-don-gian.html\">CV phỏng vấn xin việc</a>, vậy mục kinh nghiệm làm việc em nên ghi như thế nào?</p><p>Tôi hỏi: Quá trình đi học em có đi làm thêm hay tham gia các hoạt động đoàn trường, các công tác xã hội không? Đồ án thực tập và quá trình đi thực tập thực tế doanh nghiệp em có gì nổi trội hay không?</p><p>Em trả lời: Dạ không, em chỉ tập trung học 100% để lấy tấm bằng xuất sắc thôi ạ. Nên không có thời gian đi làm thêm, cũng như không đầu tư nhiều cho thời gian thực tập mà chỉ làm theo yêu cầu của trường để hoàn thành chương trình thôi ạ. Vậy câu hỏi đặt ra là sinh viên có nên đi làm thêm hay không?</p><p>Thật ra, sẽ không có câu trả lời chính xác cho mọi đối tượng, mọi tình huống khác nhau. Nên, mình xin đưa ra các lợi ích của việc đi làm thêm khi còn là sinh viên để các bạn tự xem xét theo thực tế cá nhân của bạn. Hy vọng bạn sẽ có một quyết định phù hợp và chính xác cho mình nhé!</p>', 'viec-lam-part-time68.jpg', '2021-11-21 06:32:16', '2021-12-01 03:57:29', '2021-12-01 03:57:29', 6),
(7, 13, 'Nguyễn Vân Anh', 'Sinh viên có nên đi làm thêm không?', '<p>Chào mừng các bạn đang đến với series các bài viết về <a href=\"https://www.bangtinvieclam.com/search/label/G%C3%B3c%20sinh%20vi%C3%AAn\"><strong>Định hướng nghề nghiệp</strong></a>&nbsp;cho sinh viên và người chưa có kinh nghiệm của&nbsp;<strong>Blog Nghề Nghiệp</strong>. Tôi là Thành HR sẽ đồng hành cùng bạn trong khoá học này. Và chủ đề mà chúng ta cùng nhau tìm hiểu ngày hôm nay là&nbsp;Sinh viên có nên đi làm thêm không?</p><p>Nhiều bạn đặt câu hỏi với mình rằng: Em mới vừa tốt nghiệp và đang làm <a href=\"https://www.bangtinvieclam.com/2020/08/cach-tao-cv-xin-viec-don-gian.html\">CV phỏng vấn xin việc</a>, vậy mục kinh nghiệm làm việc em nên ghi như thế nào?</p><p>Tôi hỏi: Quá trình đi học em có đi làm thêm hay tham gia các hoạt động đoàn trường, các công tác xã hội không? Đồ án thực tập và quá trình đi thực tập thực tế doanh nghiệp em có gì nổi trội hay không?</p><p>Em trả lời: Dạ không, em chỉ tập trung học 100% để lấy tấm bằng xuất sắc thôi ạ. Nên không có thời gian đi làm thêm, cũng như không đầu tư nhiều cho thời gian thực tập mà chỉ làm theo yêu cầu của trường để hoàn thành chương trình thôi ạ. Vậy câu hỏi đặt ra là sinh viên có nên đi làm thêm hay không?</p><p>Thật ra, sẽ không có câu trả lời chính xác cho mọi đối tượng, mọi tình huống khác nhau. Nên, mình xin đưa ra các lợi ích của việc đi làm thêm khi còn là sinh viên để các bạn tự xem xét theo thực tế cá nhân của bạn. Hy vọng bạn sẽ có một quyết định phù hợp và chính xác cho mình nhé!</p>', 'viec-lam-part-time68.jpg', '2021-11-21 06:32:16', '2021-11-27 04:38:56', '2021-11-27 04:38:56', 7),
(8, 1, 'Lâm Tấn', 'Tổng hợp kinh nghiệm làm thêm mà sinh viên cần biết', '<p>1.4. Đừng ngại thay đổi công việc khi không phù hợp Nếu như bạn đã cố gắng hết khả năng của mình trong một khoảng thời gian tương đối dài (1-3 tháng) mà không thấy phù hợp thì hãy tìm một công việc khác, một môi trường khác thích hợp hơn. Đừng cố “lì” không chịu thay đổi chỉ vì ngại đi phỏng vấn, ngại thích nghi với môi trường mới, ngại tìm việc làm, ngại làm hồ sơ,… Những cái “ngại” này sẽ là rào cản lớn để bạn đi đến thành công.&nbsp;</p><p>1.5. Làm việc part time đừng quá kỳ vọng vào tăng lương hay chế độ bảo hiểm Tính chất của công việc part time là tạm thời và thường xuyên thay đổi sao cho phù hợp với thời gian rảnh của sinh viên. Đôi khi các bạn cũng xin nghỉ đột xuất vì lý do nào đó. Chính vì thế mà cơ hội tăng lương và chế độ bảo hiểm sẽ ưu tiên cho người làm full time lâu dài. Nếu như muốn tăng lương bạn phải có hiệu quả công việc tốt và cho nhà tuyển dụng thấy sự chăm chỉ, cống hiến của bạn.<br><br>Nguồn bài viết: https://jobsgo.vn/blog/kinh-nghiem-lam-part-time/</p>', 'viec-lam-part-time88.jpg', '2021-12-01 04:00:30', '2021-12-03 02:59:50', NULL, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(10) UNSIGNED NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `be` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioithieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `tamnhin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sumenh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `diachi`, `tieude`, `facebook`, `twitter`, `in`, `be`, `gioithieu`, `created_at`, `updated_at`, `deleted_at`, `tamnhin`, `sumenh`) VALUES
(1, 'Nam Dương/Quảng Vinh/Quảng Điền/Thừ Thiên Huế', 'PTJOB', NULL, NULL, NULL, NULL, 'kdsljhgfkldsjhgklfjhkvklcxjvdkjfsf', NULL, NULL, NULL, 'sdfsdfdsfsdfsdfsdf', 'sdfsdfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_23_094152_create_tintuyendungs_table', 1),
(6, '2021_10_27_143147_create_tintimviecs_table', 2),
(7, '2021_10_28_075249_create_lienhe_table', 2),
(8, '2021_10_28_151803_create_blogs_table', 2),
(9, '2021_10_30_114412_slider', 2),
(10, '2021_11_01_132029_create_y_kien_nguoi_dung_table', 2),
(11, '2021_11_09_095729_updatetintuyendung', 3),
(12, '2021_10_24_161632_create_binhluan_table', 4),
(13, '2021_11_20_141454_update_blog_table', 5),
(14, '2021_11_20_141814_update_tintuyendung_table', 6),
(15, '2021_11_20_142030_update_user_table', 6),
(16, '2021_11_10_050738_create_binhluan_table', 7),
(17, '2021_11_22_150904_update_lien_he_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `name`, `image`, `mota`, `trangthai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Tuyển Dụng', '2020032616062543.jpg', 'Không', 1, '2021-11-29 00:59:48', '2021-12-01 21:22:35', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintimviecs`
--

CREATE TABLE `tintimviecs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganhnghe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintimviecs`
--

INSERT INTO `tintimviecs` (`id`, `user_id`, `ten`, `ngaysinh`, `gioitinh`, `sdt`, `email`, `nganhnghe`, `diachi`, `mota`, `anh`, `created_at`, `updated_at`, `deleted_at`) VALUES
(25, 13, 'Trần Quang Minh', '2005-02-10', 'Nam', '0329073096', 'minh@gmail.com', 'Phục vụ', '18 Lê Thiện Trị - Ngũ Hành Sơn - Đà Nẵng', '<ul><li>Muốn có công việc phục vụ quán cafe, nhà hàng</li><li>Công việc có thể hỗ trợ xoay ca</li></ul>', 'anhtv178.jpg', '2021-12-03 02:26:49', '2021-12-03 02:26:49', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuyendungs`
--

CREATE TABLE `tintuyendungs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenquan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganhnghe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `ngayhethan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuyendungs`
--

INSERT INTO `tintuyendungs` (`id`, `user_id`, `tieude`, `tenquan`, `diachi`, `soluong`, `nganhnghe`, `luong`, `thoigian`, `mota`, `anh`, `created_at`, `updated_at`, `deleted_at`, `ngayhethan`) VALUES
(41, 20, 'Tuyển dụng phục vụ', '3012 Coffee&Tea', 'Lô 48-52 Trần Hưng Đạo, Sơn Trà, Tp Đà Nẵng ( đối diện chung cư Mornachy).', '1', 'Phục vụ', '20k/h', '6h-12h', '<p>Công việc phục vụ quán cafe&nbsp;</p><p>Lương theo giờ, được thưởng tip</p><p>Có thể xoay ca hỗ trợ cho học sinh, sinh viên</p>', 'review-nhung-quan-cafe-dep-o-thanh-pho-moi-binh-duong-843.jpg', '2021-12-03 02:37:36', '2021-12-03 02:37:36', NULL, '2021-12-24 16:36:00'),
(43, 1, 'Tuyển Pha Chế', 'Dũ Cafe', '279 Nguyễn Tri Phương,Hải Châu,Đà Nẵng', '2', 'Pha Chế', '20k/h', '6h-12h', '<p>Không yêu cầu</p>', 'quan-cafe-dep-quan-4-sai-gon4-min24.jpg', '2021-12-03 20:20:06', '2021-12-03 20:20:06', NULL, '2021-12-09 10:18:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `provider`, `provider_id`, `user_token`) VALUES
(1, 'TranVietDu', 'tranvietdu054@gmail.com', NULL, '1', '$2y$10$WeCPOq0rsACj27zGrICADeiY2YVOgTvN9pglq0bSKR/xpbO4TGtsC', NULL, '2021-11-09 02:52:03', '2021-11-22 06:39:30', NULL, '', '', 'blUiLsjodXHIEcBI'),
(13, 'tranvietdu00', 'minh@gmail.com', NULL, '0', '$2y$10$b1kiReYxZlcst/P8CWzMAewzZD9tDp.Njib3vKF9L58lqxbvWP0Gu', NULL, '2021-11-20 09:09:17', '2021-11-20 09:43:00', NULL, '', '', NULL),
(19, 'Thuong', 'trandu054@gmail.com', NULL, '0', '$2y$10$w.z6lJzNFoZ1J4gHQUn0Ze26mzGjD0SpAVVh.FI6qXcS/wtt8EOYu', NULL, '2021-11-27 02:58:11', '2021-11-27 04:15:36', NULL, '', '', NULL),
(20, 'dũ trần viết', 'tvdu.20it12@vku.udn.vn', NULL, '0', 'Đăng nhập bằng google', NULL, '2021-12-01 23:16:26', '2021-12-01 23:16:26', NULL, 'google', '107184632955756619435', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ykiennguoidung`
--

CREATE TABLE `ykiennguoidung` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ykiennguoidung`
--

INSERT INTO `ykiennguoidung` (`id`, `user_id`, `ten`, `noidung`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 'TranVietDu', 'tốt', '2021-11-29 02:33:12', '2021-11-29 02:33:12', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binhluan_blog_id_foreign` (`blog_id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintimviecs`
--
ALTER TABLE `tintimviecs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tintimviecs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `tintuyendungs`
--
ALTER TABLE `tintuyendungs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tintuyendungs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `ykiennguoidung`
--
ALTER TABLE `ykiennguoidung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ykiennguoidung_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tintimviecs`
--
ALTER TABLE `tintimviecs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tintuyendungs`
--
ALTER TABLE `tintuyendungs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `ykiennguoidung`
--
ALTER TABLE `ykiennguoidung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tintimviecs`
--
ALTER TABLE `tintimviecs`
  ADD CONSTRAINT `tintimviecs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tintuyendungs`
--
ALTER TABLE `tintuyendungs`
  ADD CONSTRAINT `tintuyendungs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ykiennguoidung`
--
ALTER TABLE `ykiennguoidung`
  ADD CONSTRAINT `ykiennguoidung_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
