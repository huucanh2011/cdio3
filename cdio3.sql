-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 17, 2019 lúc 12:27 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cnpm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banve`
--

CREATE TABLE `banve` (
  `id` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL,
  `ThanhTien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NgayBan` date NOT NULL,
  `idTaiKhoan` int(10) UNSIGNED NOT NULL,
  `idGhe` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(10) UNSIGNED NOT NULL,
  `Diem` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idPhim` int(10) UNSIGNED NOT NULL,
  `idTaiKhoan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `id` int(10) UNSIGNED NOT NULL,
  `Cot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` double(7,2) NOT NULL,
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0,
  `idRap` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`id`, `Cot`, `Hang`, `Gia`, `TrangThai`, `idRap`, `created_at`, `updated_at`) VALUES
(1, '1', 'A', 55000.00, 1, 1, NULL, NULL),
(2, '2', 'A', 55000.00, 0, 1, NULL, NULL),
(5, '3', 'A', 55000.00, 1, 1, NULL, NULL),
(6, '4', 'A', 55000.00, 0, 1, NULL, NULL),
(7, '5', 'A', 55000.00, 0, 1, '2019-06-01 20:15:29', '2019-06-01 20:15:29'),
(8, '6', 'A', 55000.00, 0, 1, '2019-06-01 20:18:26', '2019-06-01 20:18:26'),
(9, '7', 'A', 55000.00, 0, 1, '2019-06-01 20:18:53', '2019-06-01 20:18:53'),
(10, '8', 'A', 55000.00, 0, 1, '2019-06-01 20:20:12', '2019-06-01 20:20:12'),
(11, '1', 'A', 55000.00, 0, 2, '2019-06-01 20:24:33', '2019-06-01 20:24:33'),
(12, '2', 'A', 55000.00, 0, 2, '2019-06-01 20:25:32', '2019-06-01 20:25:32'),
(13, '3', 'A', 55000.00, 0, 2, '2019-06-01 20:26:20', '2019-06-01 20:26:20'),
(14, '4', 'A', 55000.00, 0, 2, '2019-06-01 20:26:32', '2019-06-01 20:26:32'),
(15, '9', 'A', 55000.00, 0, 1, '2019-06-01 20:26:38', '2019-06-01 20:26:38'),
(16, '5', 'A', 55000.00, 0, 2, '2019-06-01 20:26:42', '2019-06-01 20:26:42'),
(17, '10', 'A', 55000.00, 0, 1, '2019-06-01 20:27:07', '2019-06-01 20:27:07'),
(18, '6', 'A', 55000.00, 0, 2, '2019-06-01 20:27:22', '2019-06-01 20:27:22'),
(19, '7', 'A', 55000.00, 0, 2, '2019-06-01 20:27:32', '2019-06-01 20:27:32'),
(20, '1', 'B', 55000.00, 0, 1, '2019-06-01 20:27:33', '2019-06-01 20:27:33'),
(21, '8', 'A', 55000.00, 0, 2, '2019-06-01 20:27:43', '2019-06-01 20:27:43'),
(22, '2', 'B', 55000.00, 0, 1, '2019-06-01 20:27:49', '2019-06-01 20:27:49'),
(23, '9', 'A', 55000.00, 0, 2, '2019-06-01 20:27:57', '2019-06-01 20:27:57'),
(24, '10', 'A', 55000.00, 0, 2, '2019-06-01 20:28:07', '2019-06-01 20:28:07'),
(25, '1', 'B', 55000.00, 0, 2, '2019-06-01 20:28:24', '2019-06-01 20:28:24'),
(26, '2', 'B', 55000.00, 0, 2, '2019-06-01 20:28:39', '2019-06-01 20:28:39'),
(27, '3', 'B', 55000.00, 0, 2, '2019-06-01 20:31:20', '2019-06-01 20:31:20'),
(28, '3', 'B', 55000.00, 0, 1, '2019-06-01 20:31:51', '2019-06-01 20:31:51'),
(29, '5', 'B', 55000.00, 0, 2, '2019-06-01 20:31:53', '2019-06-01 20:31:53'),
(30, '4', 'B', 55000.00, 0, 1, '2019-06-01 20:32:09', '2019-06-01 20:32:09'),
(31, '6', 'B', 55000.00, 0, 2, '2019-06-01 20:32:16', '2019-06-01 20:32:16'),
(32, '5', 'B', 55000.00, 0, 1, '2019-06-01 20:32:24', '2019-06-01 20:32:24'),
(33, '7', 'B', 55000.00, 0, 2, '2019-06-01 20:32:28', '2019-06-01 20:32:28'),
(34, '6', 'B', 55000.00, 0, 1, '2019-06-01 20:32:34', '2019-06-01 20:32:34'),
(35, '7', 'B', 55000.00, 0, 1, '2019-06-01 20:32:43', '2019-06-01 20:32:43'),
(36, '8', 'B', 55000.00, 0, 2, '2019-06-01 20:32:51', '2019-06-01 20:32:51'),
(37, '8', 'B', 55000.00, 0, 1, '2019-06-01 20:32:52', '2019-06-01 20:32:52'),
(38, '9', 'B', 55000.00, 0, 1, '2019-06-01 20:33:01', '2019-06-01 20:33:01'),
(39, '9', 'B', 55000.00, 0, 2, '2019-06-01 20:33:01', '2019-06-01 20:33:01'),
(40, '10', 'B', 55000.00, 0, 1, '2019-06-01 20:33:10', '2019-06-01 20:33:10'),
(41, '10', 'B', 55000.00, 0, 2, '2019-06-01 20:33:12', '2019-06-01 20:33:12'),
(42, '1', 'C', 80000.00, 0, 1, '2019-06-01 20:33:45', '2019-06-01 20:33:45'),
(43, '1', 'C', 80000.00, 0, 1, '2019-06-01 20:33:55', '2019-06-01 20:33:55'),
(44, '3', 'C', 80000.00, 0, 1, '2019-06-01 20:34:32', '2019-06-01 20:34:32'),
(45, '4', 'C', 80000.00, 0, 1, '2019-06-01 20:34:42', '2019-06-01 20:34:42'),
(46, '5', 'C', 80000.00, 0, 1, '2019-06-01 20:34:51', '2019-06-01 20:34:51'),
(47, '1', 'C', 80000.00, 0, 2, '2019-06-01 20:34:55', '2019-06-01 20:34:55'),
(48, '6', 'C', 80000.00, 0, 1, '2019-06-01 20:35:01', '2019-06-01 20:35:01'),
(49, '2', 'C', 80000.00, 0, 2, '2019-06-01 20:35:06', '2019-06-01 20:35:06'),
(50, '7', 'C', 80000.00, 0, 1, '2019-06-01 20:35:10', '2019-06-01 20:35:10'),
(51, '8', 'C', 80000.00, 0, 1, '2019-06-01 20:35:19', '2019-06-01 20:35:19'),
(52, '9', 'C', 80000.00, 0, 1, '2019-06-01 20:35:28', '2019-06-01 20:35:28'),
(53, '10', 'C', 80000.00, 0, 1, '2019-06-01 20:35:37', '2019-06-01 20:35:37'),
(54, '3', 'C', 80000.00, 0, 2, '2019-06-01 20:36:10', '2019-06-01 20:36:10'),
(55, '4', 'C', 80000.00, 0, 2, '2019-06-01 20:36:23', '2019-06-01 20:36:23'),
(56, '1', 'D', 80000.00, 0, 1, '2019-06-01 20:36:26', '2019-06-01 20:36:26'),
(57, '2', 'D', 80000.00, 0, 1, '2019-06-01 20:36:36', '2019-06-01 20:36:36'),
(58, '3', 'D', 80000.00, 0, 1, '2019-06-01 20:36:47', '2019-06-01 20:36:47'),
(59, '4', 'D', 80000.00, 0, 1, '2019-06-01 20:36:55', '2019-06-01 20:36:55'),
(60, '5', 'C', 80000.00, 0, 2, '2019-06-01 20:37:00', '2019-06-01 20:37:00'),
(61, '6', 'C', 80000.00, 0, 2, '2019-06-01 20:37:10', '2019-06-01 20:37:10'),
(62, '7', 'C', 80000.00, 0, 2, '2019-06-01 20:37:23', '2019-06-01 20:37:23'),
(63, '8', 'C', 80000.00, 0, 2, '2019-06-01 20:37:43', '2019-06-01 20:37:43'),
(64, '5', 'D', 80000.00, 0, 1, '2019-06-01 20:37:44', '2019-06-01 20:37:44'),
(65, '6', 'D', 80000.00, 0, 1, '2019-06-01 20:37:54', '2019-06-01 20:37:54'),
(66, '9', 'C', 80000.00, 0, 2, '2019-06-01 20:38:03', '2019-06-01 20:38:03'),
(67, '7', 'D', 80000.00, 0, 1, '2019-06-01 20:38:03', '2019-06-01 20:38:03'),
(68, '8', 'D', 80000.00, 0, 1, '2019-06-01 20:38:12', '2019-06-01 20:38:12'),
(69, '9', 'D', 80000.00, 0, 1, '2019-06-01 20:38:21', '2019-06-01 20:38:21'),
(70, '10', 'C', 80000.00, 0, 2, '2019-06-01 20:38:22', '2019-06-01 20:38:22'),
(71, '10', 'D', 80000.00, 0, 1, '2019-06-01 20:38:30', '2019-06-01 20:38:30'),
(72, '1', 'E', 80000.00, 0, 1, '2019-06-01 20:38:49', '2019-06-01 20:38:49'),
(73, '1', 'D', 80000.00, 0, 2, '2019-06-01 20:38:53', '2019-06-01 20:38:53'),
(74, '2', 'E', 80000.00, 0, 1, '2019-06-01 20:38:58', '2019-06-01 20:38:58'),
(75, '3', 'E', 80000.00, 0, 1, '2019-06-01 20:39:13', '2019-06-01 20:39:13'),
(76, '4', 'E', 80000.00, 0, 1, '2019-06-01 20:39:22', '2019-06-01 20:39:22'),
(77, '5', 'E', 80000.00, 0, 1, '2019-06-01 20:39:33', '2019-06-01 20:39:33'),
(78, '2', 'D', 80000.00, 0, 2, '2019-06-01 20:39:39', '2019-06-01 20:39:39'),
(79, '6', 'E', 80000.00, 0, 1, '2019-06-01 20:39:41', '2019-06-01 20:39:41'),
(80, '7', 'E', 80000.00, 0, 1, '2019-06-01 20:39:52', '2019-06-01 20:39:52'),
(81, '8', 'E', 80000.00, 0, 1, '2019-06-01 20:40:01', '2019-06-01 20:40:01'),
(82, '9', 'E', 80000.00, 0, 1, '2019-06-01 20:40:32', '2019-06-01 20:40:32'),
(83, '10', 'E', 80000.00, 0, 1, '2019-06-01 20:40:42', '2019-06-01 20:40:42'),
(84, '3', 'D', 80000.00, 0, 2, '2019-06-01 20:41:31', '2019-06-01 20:41:31'),
(85, '4', 'D', 80000.00, 0, 2, '2019-06-01 20:41:41', '2019-06-01 20:41:41'),
(86, '5', 'D', 80000.00, 0, 2, '2019-06-01 20:41:56', '2019-06-01 20:41:56'),
(87, '6', 'D', 80000.00, 0, 2, '2019-06-01 20:42:25', '2019-06-01 20:42:25'),
(88, '7', 'D', 80000.00, 0, 2, '2019-06-01 20:42:37', '2019-06-01 20:42:37'),
(89, '8', 'D', 80000.00, 0, 2, '2019-06-01 20:42:56', '2019-06-01 20:42:56'),
(90, '9', 'D', 80000.00, 0, 2, '2019-06-01 20:43:29', '2019-06-01 20:43:29'),
(91, '10', 'D', 80000.00, 0, 2, '2019-06-01 20:43:39', '2019-06-01 20:43:39'),
(92, '1', 'E', 80000.00, 0, 2, '2019-06-01 20:43:49', '2019-06-01 20:43:49'),
(93, '2', 'E', 80000.00, 0, 2, '2019-06-01 20:44:03', '2019-06-01 20:44:03'),
(94, '3', 'E', 80000.00, 0, 2, '2019-06-01 20:44:20', '2019-06-01 20:44:20'),
(95, '4', 'E', 80000.00, 0, 2, '2019-06-01 20:45:09', '2019-06-01 20:45:09'),
(96, '5', 'E', 80000.00, 0, 2, '2019-06-01 20:45:24', '2019-06-01 20:45:24'),
(97, '6', 'E', 80000.00, 0, 2, '2019-06-01 20:45:43', '2019-06-01 20:45:43'),
(98, '7', 'E', 80000.00, 0, 2, '2019-06-01 20:45:57', '2019-06-01 20:45:57'),
(99, '1', 'A', 55000.00, 0, 3, '2019-06-01 20:46:06', '2019-06-01 20:46:06'),
(100, '8', 'E', 80000.00, 0, 2, '2019-06-01 20:46:07', '2019-06-01 20:46:07'),
(101, '9', 'E', 80000.00, 0, 2, '2019-06-01 20:46:17', '2019-06-01 20:46:17'),
(102, '10', 'E', 80000.00, 0, 2, '2019-06-01 20:46:27', '2019-06-01 20:46:27'),
(103, '2', 'A', 55000.00, 0, 3, '2019-06-01 20:46:42', '2019-06-01 20:46:42'),
(104, '3', 'A', 55000.00, 0, 3, '2019-06-01 20:46:59', '2019-06-01 20:46:59'),
(105, '4', 'A', 55000.00, 0, 3, '2019-06-01 20:47:10', '2019-06-01 20:47:10'),
(106, '5', 'A', 55000.00, 0, 3, '2019-06-01 20:47:36', '2019-06-01 20:47:36'),
(107, '6', 'A', 55000.00, 0, 3, '2019-06-01 20:47:54', '2019-06-01 20:47:54'),
(108, '7', 'A', 55000.00, 0, 3, '2019-06-01 20:48:24', '2019-06-01 20:48:24'),
(109, '8', 'A', 55000.00, 0, 3, '2019-06-01 20:48:39', '2019-06-01 20:48:39'),
(110, '9', 'A', 55000.00, 0, 3, '2019-06-01 20:51:04', '2019-06-01 20:51:04'),
(111, '10', 'A', 55000.00, 0, 3, '2019-06-01 20:52:10', '2019-06-01 20:52:10'),
(112, '1', 'B', 55000.00, 0, 3, '2019-06-01 20:52:19', '2019-06-01 20:52:19'),
(113, '2', 'B', 55000.00, 0, 3, '2019-06-01 20:52:33', '2019-06-01 20:52:33'),
(114, '3', 'B', 55000.00, 0, 3, '2019-06-01 20:52:59', '2019-06-01 20:52:59'),
(115, '4', 'B', 55000.00, 0, 3, '2019-06-01 20:53:29', '2019-06-01 20:53:29'),
(116, '5', 'B', 55000.00, 0, 3, '2019-06-01 20:53:38', '2019-06-01 20:53:38'),
(117, '6', 'B', 55000.00, 0, 3, '2019-06-01 20:53:50', '2019-06-01 20:53:50'),
(118, '7', 'B', 55000.00, 0, 3, '2019-06-01 20:53:58', '2019-06-01 20:53:58'),
(119, '8', 'B', 55000.00, 0, 3, '2019-06-01 20:54:07', '2019-06-01 20:54:07'),
(120, '9', 'B', 55000.00, 0, 3, '2019-06-01 20:54:15', '2019-06-01 20:54:15'),
(121, '10', 'B', 55000.00, 0, 3, '2019-06-01 20:54:31', '2019-06-01 20:54:31'),
(122, '1', 'C', 80000.00, 0, 3, '2019-06-01 20:54:48', '2019-06-01 20:54:48'),
(123, '2', 'C', 80000.00, 0, 3, '2019-06-01 20:54:57', '2019-06-01 20:54:57'),
(124, '3', 'C', 80000.00, 0, 3, '2019-06-01 20:55:26', '2019-06-01 20:55:26'),
(125, '4', 'C', 80000.00, 0, 3, '2019-06-01 20:55:40', '2019-06-01 20:55:40'),
(126, '5', 'C', 80000.00, 0, 3, '2019-06-01 20:55:47', '2019-06-01 20:55:47'),
(127, '6', 'C', 80000.00, 0, 3, '2019-06-01 20:55:57', '2019-06-01 20:55:57'),
(128, '7', 'C', 80000.00, 0, 3, '2019-06-01 20:56:06', '2019-06-01 20:56:06'),
(129, '8', 'C', 80000.00, 0, 3, '2019-06-01 20:56:15', '2019-06-01 20:56:15'),
(130, '9', 'C', 80000.00, 0, 3, '2019-06-01 20:56:24', '2019-06-01 20:56:24'),
(131, '10', 'C', 80000.00, 0, 3, '2019-06-01 20:56:50', '2019-06-01 20:56:50'),
(132, '1', 'D', 80000.00, 0, 3, '2019-06-01 20:57:03', '2019-06-01 20:57:03'),
(133, '2', 'D', 80000.00, 0, 3, '2019-06-01 20:57:14', '2019-06-01 20:57:14'),
(134, '3', 'D', 80000.00, 0, 3, '2019-06-01 20:57:22', '2019-06-01 20:57:22'),
(135, '4', 'D', 80000.00, 0, 3, '2019-06-01 20:57:29', '2019-06-01 20:57:29'),
(136, '5', 'D', 80000.00, 0, 3, '2019-06-01 20:57:37', '2019-06-01 20:57:37'),
(137, '6', 'D', 80000.00, 0, 3, '2019-06-01 20:57:46', '2019-06-01 20:57:46'),
(139, '7', 'D', 80000.00, 0, 3, '2019-06-01 20:58:02', '2019-06-01 20:58:02'),
(140, '8', 'D', 80000.00, 0, 3, '2019-06-01 20:58:09', '2019-06-01 20:58:09'),
(141, '9', 'D', 80000.00, 0, 3, '2019-06-01 20:58:16', '2019-06-01 20:58:16'),
(142, '10', 'D', 80000.00, 0, 3, '2019-06-01 20:58:25', '2019-06-01 20:58:25'),
(143, '1', 'E', 80000.00, 0, 3, '2019-06-01 20:58:32', '2019-06-01 20:58:32'),
(144, '2', 'E', 80000.00, 0, 3, '2019-06-01 20:58:39', '2019-06-01 20:58:39'),
(145, '3', 'E', 80000.00, 0, 3, '2019-06-01 20:58:48', '2019-06-01 20:58:48'),
(146, '4', 'E', 80000.00, 0, 3, '2019-06-01 20:59:16', '2019-06-01 20:59:16'),
(147, '5', 'E', 80000.00, 0, 3, '2019-06-01 20:59:38', '2019-06-01 20:59:38'),
(148, '6', 'E', 80000.00, 0, 3, '2019-06-01 20:59:45', '2019-06-01 20:59:45'),
(149, '7', 'E', 80000.00, 0, 3, '2019-06-01 20:59:52', '2019-06-01 20:59:52'),
(150, '8', 'E', 80000.00, 0, 3, '2019-06-01 21:00:03', '2019-06-01 21:00:03'),
(151, '9', 'E', 80000.00, 0, 3, '2019-06-01 21:00:09', '2019-06-01 21:00:09'),
(152, '10', 'E', 80000.00, 0, 3, '2019-06-01 21:00:15', '2019-06-01 21:00:15'),
(154, '4', 'B', 55000.00, 0, 2, NULL, NULL);

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
(1, '2019_04_06_043723_tao_bang_slide', 1),
(2, '2019_04_13_071631_taobang_quyen', 1),
(3, '2019_04_13_071815_tao_bang_tai_khoan', 1),
(4, '2019_04_29_034120_tao_bang_the_loai_phim', 1),
(5, '2019_04_29_043708_tao_bang_phim', 1),
(6, '2019_04_29_043804_tao_bang_danh_gia', 1),
(7, '2019_04_29_043856_tao_bang_tin_tuc_phim', 1),
(8, '2019_04_29_043929_tao_bang_rap', 1),
(9, '2019_04_29_044102_tao_bang_ghe', 1),
(10, '2019_05_29_034840_tao_bang_ngay_chieu', 1),
(11, '2019_05_29_034841_tao_bang_suat_chieu', 1),
(12, '2019_05_30_044202_tao_bang_ve', 1),
(13, '2019_06_29_044907_tao_bang_ban_ve', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngaychieu`
--

CREATE TABLE `ngaychieu` (
  `id` int(10) UNSIGNED NOT NULL,
  `NgayChieu` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ngaychieu`
--

INSERT INTO `ngaychieu` (`id`, `NgayChieu`, `created_at`, `updated_at`) VALUES
(1, '2019-05-27', NULL, NULL),
(2, '2019-05-28', NULL, NULL),
(3, '2019-05-29', NULL, NULL),
(4, '2019-05-30', NULL, NULL),
(5, '2019-06-03', NULL, NULL),
(6, '2019-06-04', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenPhim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DaoDien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `QuocGiaSanXuat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NgonNgu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Trailer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiGian` int(10) UNSIGNED NOT NULL,
  `NgayKhoiChieu` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `DoTuoiPhuHop` int(10) UNSIGNED NOT NULL,
  `idTheLoaiPhim` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id`, `TenPhim`, `Hinh`, `NoiDung`, `DaoDien`, `QuocGiaSanXuat`, `NgonNgu`, `Trailer`, `ThoiGian`, `NgayKhoiChieu`, `NgayKetThuc`, `DoTuoiPhuHop`, `idTheLoaiPhim`, `created_at`, `updated_at`) VALUES
(1, 'Avenger Endgame', 'Avengers-Poster.jpg', 'Cú búng tay của Thanos đã khiến toàn bộ dân số biến mất một nửa. Các siêu anh hùng đánh mất bạn bè, người thân và đánh mất cả chính mình. Bộ sáu Avengers đầu tiên tứ tán. Iron Man kẹt lại ngoài không gian, Hawkeye mất tích. Thor, Captain America, Hulk và Black Widow đều chìm trong nỗi đau vô tận vì mất đi những người thân yêu. Họ phải làm gì để cứu vãn mọi chuyện ở Avengers: Hồi Kết? Điều khán giả quan tâm nhất hiện nay chính là ai sẽ còn sống và ai sẽ ra đi khi Avengers: Endgame kết thúc. Captain America là người có khả năng ra đi cao nhất khi Chris Evans đã tuyên bố từ bỏ chiếc áo Đại Úy Mỹ. Iron Man Tony Stark- người mở đầu của vũ trụ điện ảnh Marvel cũng có khả năng “bay màu” tương tự. Thor sau tội lỗi “không nhắm vào đầu” cũng thuộc danh sách nguy hiểm. Những người duy nhất chắc chắn còn sống sau Avengers: Hồi Kết là Nick Fury, Maria Hill và cậu bé Người Nhện Peter Parker. Ngoài ra, vai trò của chị Đại Captain Marvel với sức mạnh khủng khiếptrong câu chuyện này là gì? Câu trả lời sẽ có trong Avengers: Endgame. Là siêu phẩm được trông đợi nhất 2019, Avengers: Endgame đã khiến toàn cầu xôn xao khi tung trailer vào 07.12.2018. Chỉ trong vòng 24 giờ, trailer nhận được gần 300 triệu lượt xem và trở thành trailer có lượt xem cao nhất mọi thời đại. Trailer thứ hai cũng phá đảo Internet và chỉ chịu thua trailer trước. Poster Avengers: Endgame cũng được hưởng ứng mạnh mẽ, khiến cả thế giới phát cuồng. Gần như chắc chắn, Avengers 2019 sẽ là bộ phim doanh thu cao nhất năm nay.\r\n', 'Anthony Russo, Joe Russo', 'Mỹ', 'English phụ đề Tiếng việt', 'https://www.youtube.com/embed/q6UDgv5TGWA', 180, '2019-05-10', '2019-07-10', 18, 1, NULL, NULL),
(2, 'ALADDIN', 'poster-aladdin_1556858921828.jpg', 'Aladdin 2019 là phiên bản live action của bộ phim hoạt hình nổi tiếng ra mắt vào năm 1992. Trong phiên bản này, siêu sao Hollywood Will Smith vào vai Thần Đèn. Gia cảnh khốn cùng, xuất thân bần hàn, chàng trai khu ổ chuột Aladdin làm thế nào để gặp gỡ và được nàng công chúa Jasmine mạnh mẽ xinh đẹp đem lòng yêu thương? Đó là nhờ một vị thần đầy quyền năng - Thần Đèn. Một câu chuyện dài và bí ẩn được Disney kể lại.', 'Guy Ritchie', 'Mỹ', 'English phụ đề tiếng việt', 'https://www.youtube.com/embed/xzMIs5u4r8o', 120, '2019-05-22', '2019-06-10', 15, 2, NULL, NULL),
(4, 'John Wick 3', '5cc9048494558130591736_1557458327329.jpg', 'Sau khi trở thành \"giải thưởng lớn\" của giới sát thủ toàn cầu, siêu sát thủ John Wick phải cùng chú chó cưng lên đường chạy trốn. Với giá 14 triệu $, John Wick trở thành mục tiêu béo bở của bất cứ kẻ săn đầu người nào.', 'Chad Stahelski', 'Mỹ', 'English phụ đề Tiếng việt', 'https://www.youtube.com/embed/yfG4GS9b5To', 127, '2019-05-20', '2019-06-10', 18, 1, NULL, NULL),
(5, 'Cua lại vợ bầu', 'cualaivobau-payoff_1547456445915.jpg', 'Trọng Thoại và Nhã Linh yêu nhau đã được bảy năm. Những lỗi lầm nho nhỏ bắt đầu tích tụ thành mâu thuẫn cực lớn đẩy cả hai xa nhau. Lại thêm sự xuất hiện của người cũ Quý Khánh càng khiến Nhã Linh xao lòng. Và rồi, cô có thai. Rốt cuộc đứa bé là của ai và Nhã Linh sẽ chọn người đàn ông nào đi tiếp cùng mình?  Sở hữu dàn diễn viên được đông đảo công chúng biết đến- kết hợp thế hệ diễn viên trẻ và các bậc lão làng kỳ cựu, cộng thêm kịch bản vui tươi nhưng chẳng kém phần cảm động, Cua Lại Vợ Bầu là điển hình cho công thức thành công gần như 100% của phim Việt mùa Tết.', 'Nhất Trung', 'Việt Nam', 'Tiếng việt', 'https://www.youtube.com/embed/0HSIUZtxeKM', 102, '2019-05-10', '2019-06-10', 15, 3, NULL, NULL),
(6, 'Ước hẹn mùa thu', 'uochenmuathu1_1554878664659.jpg', 'Thanh xuân thời niên thiếu của bạn là gì? Có phải là một ai đó để nhớ, để tiếc nuối mỗi khi nghĩ về? Pha Lê (Hoàng Oanh) và Duy (Trần Quốc Anh) của “Ước Hẹn Mùa Thu” cũng từng có một thanh xuân như thế…', 'Nguyễn Quang Dũng', 'Việt Nam', 'Tiếng việt', 'https://www.youtube.com/embed/vANJb4Z_qaE', 111, '2019-05-26', '2019-06-10', 15, 3, NULL, NULL),
(7, 'GODZILLA: KING OF THE MONSTERS', 'godzilla-king-of-the-monsters--vietnamese-teaser-poster_1550650219764.jpg', 'Đây là tác phẩm thứ ba thuộc vũ trụ điện ảnh quái vật của hãng Legendary và Warner Bros.. Theo đó, bộ phim có bối cảnh diễn ra vài năm sau sự kiện của phần trước. Lúc này, Godzilla phải đối mặt với những quái vật hết sức mạnh mẽ như Rồng ba đầu King Ghidorah, Rodan và sâu bướm Mothra.', 'Michael Dougherty', 'Mỹ', 'English phụ đề Tiếng việt', 'https://www.youtube.com/embed/Jc-K7QATtbg', 140, '2019-05-26', '2019-06-10', 15, 1, NULL, NULL),
(8, 'Vô gian đạo', 'vogiandaoposter_1557386618293.jpg', 'Bộ phim làm về đề tài cờ bạc bịp đầu tiên ở Việt Nam với sự tham gia của loạt gương mặt trẻ đầy tiềm năng: La Thành, Xuân Nghị, Huỳnh Anh... hứa hẹn sẽ đem đến cho khán giả màn trình diễn vô cùng hài hước, thú vị.', 'Trần Việt Anh', 'Việt Nam', 'Tiếng việt', 'https://www.youtube.com/embed/kXnKPi6vIjQ', 113, '2019-05-26', '2019-06-10', 15, 2, NULL, NULL),
(9, 'THE SECRET LIFE OF PETS 2', 'pet_1558690331193.jpg', 'Tiếp tục theo chân Max và những người bạn, phần 2 của The Secret Life of Pets 2 sẽ kể về câu chuyện của những chú thú cưng sau khi chủ của chúng đi làm hoặc đi học mỗi ngày.', 'Chris Renaud', 'Mỹ', 'English phụ đề Tiếng việt', 'https://www.youtube.com/embed/a-ATxE1KmZA', 86, '2019-05-29', '2019-06-10', 15, 2, NULL, NULL),
(10, 'FAST & FURIOUS: HOBBS & SHAW', '1080wx1920h-1_1556005808825.jpg', 'Trời ơi tin được không?! Ai mà ngờ được rằng sẽ có một ngày Luke Hobbs và Deckard Shaw lại trở thành đồng minh của nhau để cùng chống lại kẻ ác, bảo vệ nhân loại chúng ta?!', 'David Leitch', 'Mỹ', 'English phụ đề Tiếng việt', 'https://www.youtube.com/embed/pH7leY4mWec', 150, '2019-06-05', '2019-06-30', 15, 1, NULL, NULL),
(11, 'SPIDER-MAN: FAR FROM HOME', 'spider-man_1558596633242.jpg', 'Trong chuyến du lịch đến châu Âu, Peter Parker và những người bạn của mình đụng độ phải một kẻ thù mới. Không những vậy, cậu còn được diện kiến Nick Fury. Liệu thử thách mới của Spider-Man sẽ khó khăn đến mức độ nào? Và vai trò của Mysterio có tác động ra sao đến chuyện phim? Hãy chờ đón bom tấn siêu anh hùng này vào tháng 7.2019 nhé!', 'Jon Watts', 'Mỹ', 'English phụ đề Tiếng việt', 'https://www.youtube.com/embed/vjYCAnjB48s', 150, '2019-06-06', '2019-06-30', 15, 1, NULL, NULL),
(12, 'KRASUE: INHUMAN KISS', 'nuhonmaquai_1558600977704.jpg', 'Tại một ngôi làng ở Thái Lan, vì mắc phải lời nguyền của Ma lai rút ruột - Krasue nên hàng đêm, đầu của cô gái trẻ Sai tách ra khỏi thân thể và đi săn lùng thú vật. Để bảo vệ gia súc của mình, dân làng bắt đầu truy lùng Krasue. Riêng chỉ có anh chàng bạn thân Noi vẫn luôn sát cánh, bảo vệ Sai đến cuối cùng.', 'Sitisiri Mongkolsiri', 'Thái Lan', 'Thái phụ đề Tiếng việt', 'https://www.youtube.com/embed/yaO0wMzwses', 121, '2019-06-07', '2019-06-30', 18, 4, NULL, NULL),
(13, 'FRIEND ZONE', 'poster_1551426978021.jpg', 'Phim kể về câu chuyện oái ăm của Palm - anh chàng trót đem lòng yêu Gink nhưng đáng tiếc cô chỉ xếp anh vào vùng \"friend zone\". Chuyện tình đơn phương cứ thế kéo dài không hồi kết khi Palm không thể nói ra tấm lòng mình, còn Gink lại hẹn hò với chàng trai khác...', 'Chayanop Boonprakob', 'Thái Lan', 'Thái phụ đề Tiếng việt', 'https://www.youtube.com/embed/A6gZd_SZoCs', 120, '2019-06-04', '2019-06-30', 15, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenQuyen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`id`, `TenQuyen`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Nhân viên', NULL, NULL),
(3, 'Thành viên', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rap`
--

CREATE TABLE `rap` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenRap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rap`
--

INSERT INTO `rap` (`id`, `TenRap`, `created_at`, `updated_at`) VALUES
(1, 'Rạp A', NULL, NULL),
(2, 'Rạp B', NULL, NULL),
(3, 'Rạp C', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `Ten`, `Hinh`, `NoiDung`, `Link`, `created_at`, `updated_at`) VALUES
(1, 'Avenger', 'banner-t03-2048-x-682-kc_1555576784949.jpg', 'Avenger', 'test', NULL, NULL),
(2, 'Doremon', 'doremon.jpg', 'Doremon', 'test', NULL, NULL),
(5, 'Test', 'Banner_thang_5.jpg', 'Test', 'Test', NULL, NULL),
(7, 'Test', 'banner-2048x682_1558954184808.jpg', 'Test', 'Test', NULL, NULL),
(10, 'Lật mặt', 'Alb2_lat_mat.jpg', 'Lật mặt', 'Test', '2019-05-31 10:02:46', '2019-05-31 10:02:46'),
(11, 'Test', 'H2BR_2048x682_1558584069148.jpg', 'Test', 'Test', '2019-06-02 19:21:47', '2019-06-02 19:21:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suatchieu`
--

CREATE TABLE `suatchieu` (
  `id` int(10) UNSIGNED NOT NULL,
  `GioChieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idNgaychieu` int(10) UNSIGNED NOT NULL,
  `idPhim` int(10) UNSIGNED NOT NULL,
  `idRap` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suatchieu`
--

INSERT INTO `suatchieu` (`id`, `GioChieu`, `idNgaychieu`, `idPhim`, `idRap`, `created_at`, `updated_at`) VALUES
(10, '17h', 1, 9, 1, NULL, NULL),
(11, '18h:30', 1, 2, 1, NULL, NULL),
(13, '20h:30', 2, 5, 2, NULL, NULL),
(14, '21h', 2, 4, 1, NULL, NULL),
(15, '22h', 3, 7, 2, NULL, NULL),
(16, '23h:30', 4, 6, 2, NULL, NULL),
(17, '24h', 4, 9, 1, NULL, NULL),
(18, '17h', 4, 8, 1, NULL, NULL),
(19, '20', 4, 9, 3, '2019-06-01 21:49:35', '2019-06-01 21:49:35'),
(20, '16h : 00', 5, 6, 2, '2019-06-01 22:27:50', '2019-06-01 22:27:50'),
(21, '16h : 00', 5, 7, 3, '2019-06-01 22:27:57', '2019-06-01 22:27:57'),
(22, '16h : 00', 5, 9, 1, '2019-06-01 22:27:57', '2019-06-01 22:27:57'),
(23, '19h : 00', 5, 6, 3, '2019-06-01 22:28:39', '2019-06-01 22:28:39'),
(24, '19h : 00', 5, 9, 2, '2019-06-01 22:28:40', '2019-06-01 22:28:40'),
(25, '19h : 00', 5, 7, 1, '2019-06-01 22:28:42', '2019-06-01 22:28:42'),
(26, '22h : 00', 5, 6, 1, '2019-06-01 22:29:19', '2019-06-01 22:29:19'),
(27, '22h : 00', 5, 7, 2, '2019-06-01 22:29:19', '2019-06-01 22:29:19'),
(28, '22h : 00', 5, 9, 3, '2019-06-01 22:29:21', '2019-06-01 22:29:21'),
(29, '10h : 00', 6, 9, 1, '2019-06-01 22:36:43', '2019-06-01 22:36:43'),
(30, '10h : 00', 6, 6, 2, '2019-06-01 22:36:43', '2019-06-01 22:36:43'),
(31, '10h : 00', 6, 7, 3, '2019-06-01 22:36:44', '2019-06-01 22:36:44'),
(32, '13h : 00', 6, 9, 3, '2019-06-01 22:37:03', '2019-06-01 22:37:03'),
(33, '13h : 00', 6, 6, 1, '2019-06-01 22:37:03', '2019-06-01 22:37:03'),
(34, '13h : 00', 6, 7, 2, '2019-06-01 22:37:05', '2019-06-01 22:37:05'),
(35, '16h : 00', 6, 7, 1, '2019-06-01 22:37:20', '2019-06-01 22:37:20'),
(36, '16h : 00', 6, 6, 3, '2019-06-01 22:37:21', '2019-06-01 22:37:21'),
(37, '16h : 00', 6, 9, 2, '2019-06-01 22:37:21', '2019-06-01 22:37:21'),
(38, '19h : 00', 6, 9, 2, '2019-06-01 22:37:41', '2019-06-01 22:37:41'),
(39, '19h : 00', 6, 7, 3, '2019-06-01 22:37:42', '2019-06-01 22:37:42'),
(40, '19h : 00', 6, 6, 1, '2019-06-01 22:37:51', '2019-06-01 22:37:51'),
(41, '22h : 00', 6, 6, 2, '2019-06-01 22:38:23', '2019-06-01 22:38:23'),
(42, '22h : 00', 6, 9, 3, '2019-06-01 22:38:31', '2019-06-01 22:38:31'),
(43, '22h : 00', 6, 7, 1, '2019-06-01 22:38:33', '2019-06-01 22:38:33'),
(44, '13h', 6, 1, 3, '2019-07-07 01:07:23', '2019-07-07 01:07:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaTheNH` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `Hinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CMND` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThanhPho` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Quan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idQuyen` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `email`, `password`, `HoTen`, `MaTheNH`, `GioiTinh`, `NgaySinh`, `Hinh`, `CMND`, `Sdt`, `ThanhPho`, `Quan`, `DiaChi`, `idQuyen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$QvbPGpOZo1eVpSBsANKdTeUQ8AsR5MnXUaXnYs7KGz3xYQgPwl1Re', 'Hữu Cảnh', NULL, 1, '1998-01-01', 'XYVg_48395933_778378725830784_8701028722884476928_o.jpg', '206099912', '0935646465', 'DaNang', 'Thanh Khe', '114', 1, NULL, NULL, '2019-06-02 10:18:01'),
(2, 'thanhvien@gmail.com', '$2y$10$7qmWpqZNufIr/Ue5SC2wMugpjjglSdWjmfhlU/KB9Um/r/Ho9YoKy', 'Tùng', NULL, 1, '1998-01-01', '', '206099912', '0935646465', 'DaNang', 'TK', '113', 3, NULL, NULL, '2019-06-01 05:47:14'),
(3, 'thanhvien1@gmail.com', '$2y$10$0jVzCkGat.rDnPHtGR05GOm4eDKKfefYbn3AoSD0lBb1kAbH.wSpm', 'Thanh', NULL, 2, '1998-01-01', '', '206099912', '0935646465', 'DaNang', 'TK', '113', 3, NULL, NULL, '2019-06-01 05:44:31'),
(4, 'thanhvien2@gmail.com', '$2y$10$9/2dzfD6jlT4hiKVSzVRPOohKiGpE60oQiau9c3i48MZtpm9csZyW', 'Test', NULL, 0, '2019-05-28', 'noimage.jpg', '12312312312312123', '12123123132132', 'Đà Nẵng', 'Sơn Trà', '12345', 3, NULL, '2019-05-31 11:14:42', '2019-06-01 05:45:43'),
(5, 'admin1@gmail.com', '$2y$10$Czp.DUjdMyhBp5/fX9E/4OZ8s3SszDPQXL/asmjZwt88Q6HBOzsvO', 'Admin 1', NULL, 1, '1998-10-07', 'noimage.jpg', '20123123123', '1234567890', 'Đà Nẵng', 'Cẩm Lệ', '123', 3, NULL, '2019-06-01 03:47:12', '2019-06-01 05:47:19'),
(6, 'thanhtungak112@gmail.com', '$2y$10$uVq3SIG5EzTd1EGezH.uuepBnfFnKI1q4JHougWgxevV6IL8u5oU.', 'Nguyễn Đỗ Thanh Tùng', NULL, 1, '1998-08-23', 'noimage.jpg', '114 Nguyễn Giãn Thanh, Đà  Nẵng', '0969123077', 'Đà Nẵng', NULL, '114 Nguyễn Giãn Thanh, Đà  Nẵng', 1, NULL, '2019-06-01 19:40:15', '2019-06-02 07:42:18'),
(7, 'hungvu2607@gmail.com', '$2y$10$moGqDfjcCxPHHZvcgmBq4O.EYbXUlLM.KzPVbWeriWiWwpEL0fT5W', 'Hưng Vũ Ngọc', NULL, 1, '2019-05-26', 'noimage.jpg', '72 nguyễn xuân nhĩ hải châu đà nẵng, 72', '0389771012', 'Đà Nẵng', 'Thanh Khê', '72 nguyễn xuân nhĩ hải châu đà nẵng, 72', 1, NULL, '2019-06-01 19:42:05', '2019-06-01 19:43:33'),
(8, 'dkavpro213@gmail.com', '$2y$10$D62EEYPmKHBcI46Z6rkXTOcqk9cRZtqhidcjZse5vAKDgjhVL0UtC', 'Phạm Hữu Phong', NULL, 1, '2024-04-20', 'noimage.jpg', '09 Hoà an 05', '0354904688', 'Đà Nẵng', 'Liên Chiểu', '09 Hoà an 05', 1, NULL, '2019-06-01 20:43:26', '2019-06-01 20:44:05'),
(9, 'a@gmail.com', '$2y$10$ZOMTXcHM2LjJy5aSB2WD5ehkRlS09AB/Z5IFQlzow6aCHPsRBiyya', 'aaaaaa', NULL, 1, '2019-07-10', 'noimage.jpg', '2312312312312', '123123123123', 'Hồ Chí Minh', 'Tân Bình', '1', 3, NULL, '2019-07-07 01:10:20', '2019-07-07 01:12:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloaiphim`
--

CREATE TABLE `theloaiphim` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenTheLoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloaiphim`
--

INSERT INTO `theloaiphim` (`id`, `TenTheLoai`, `created_at`, `updated_at`) VALUES
(1, 'Hành động', NULL, NULL),
(2, 'Hài Hước', NULL, NULL),
(3, 'Tình Cảm', NULL, NULL),
(4, 'Kinh dị', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintucphim`
--

CREATE TABLE `tintucphim` (
  `id` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TomTat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintucphim`
--

INSERT INTO `tintucphim` (`id`, `TieuDe`, `TomTat`, `NoiDung`, `Hinh`, `created_at`, `updated_at`) VALUES
(15, 'Vũ Trụ Điện Ảnh Marvel Sẽ Ra Sao Sau Avengers: Endgame?', 'Trong thời gian chờ đợi bom tấn này phá kỷ lục huyền thoại Avatar, hãy cùng ngẫm lại những gì vũ trụ Marvel đang...', '<p>Avengers: Endgame- chương bi tr&aacute;ng h&agrave;o h&ugrave;ng nhất suốt 11 năm qua của vũ trụ điện ảnh Marvel đ&atilde; ra mắt v&agrave; ph&aacute; đảo to&agrave;n bộ thế giới v&agrave;o 25.4.2019 vừa rồi. Bộ phim li&ecirc;n tiếp lập h&agrave;ng loạt kỷ lục ph&ograve;ng v&eacute; để đời, trở th&agrave;nh niềm tự h&agrave;o cho to&agrave;n bộ fan MCU n&oacute;i ri&ecirc;ng v&agrave; fan Marvel n&oacute;i chung. Trong thời gian chờ đợi bom tấn n&agrave;y ph&aacute; kỷ lục huyền thoại Avatar, h&atilde;y c&ugrave;ng ngẫm lại những g&igrave; vũ trụ Marvel đang sở hữu sau Hồi Kết. C&aacute;c d&ograve;ng thời gian mới được sinh ra Như ch&uacute;ng ta đ&atilde; biết, d&ugrave; biệt đội si&ecirc;u anh h&ugrave;ng cố hết sức chặt tất cả c&agrave;nh nh&aacute;nh thời gian theo lời hứa với Thượng Cổ T&ocirc;n Giả l&uacute;c lấy timestone, mọi thứ vẫn chẳng thể theo &yacute; họ. Hiện tại MCU tồn tại &iacute;t nhất 4 d&ograve;ng thời gian D&ograve;ng thời gian ch&iacute;nh thuộc Avengers: Endgame D&ograve;ng thời gian bị thay đổi ở 2014 khi Thanos đến tương lai, nơi đ&oacute; kh&ocirc;ng c&ograve;n Thanos v&agrave; đ&agrave;n con. D&ograve;ng thời gian bị thay đổi ở 2012 khi Loki cầm khối Tesseract biến mất, nh&oacute;m Hydra ở S.H.I.E.L.D tưởng Captain America l&agrave; đồng minh khi anh n&oacute;i &ldquo;Hail Hydra&rdquo; v&agrave; Steve ở d&ograve;ng thời gian ấy biết Bucky c&ograve;n sống. D&ograve;ng thời gian bị thay đổi ở sau thế chiến thứ II khi Captain America trở về sống với Peggy v&agrave; nhiều khả năng giải cứu lu&ocirc;n Bucky khỏi Hydra cũng như ngăn chặn c&aacute;i chết của vợ chồng Howard Stark. Chưa kể đến, hai timeline dường như đ&atilde; thay đổi ở Asgard 2013 khi Frigga biết con trai m&igrave;nh bị &ldquo;tương lai đối xử tệ&rdquo; thế n&agrave;o v&agrave; ở New Jersey 1970 khi Howard Stark gặp Tony Stark. Nh&oacute;m Avengers gốc Ở vũ trụ điện ảnh Marvel, điều g&igrave; cũng c&oacute; thể xảy ra nhưng một điều hiện tại ch&uacute;ng ta chắc chắn rằng khoảnh khắc Avengers Assemble của Iron Man, Captain America, Hulk, Thor, Hawkeye v&agrave; Black Widow chẳng thể n&agrave;o nh&igrave;n thấy nữa. Sau Avengers: Endgame, nh&oacute;m Avengers nguy&ecirc;n bản nay mỗi người mỗi ngả. Tony Stark chắc chắn sẽ kh&ocirc;ng trở lại, c&oacute; chăng l&agrave; những đoạn hồi ức về anh sẽ được đưa v&agrave;o phim để tri &acirc;n s&acirc;u sắc cho Robert Downey Jr. Tương tự, gần như ch&uacute;ng ta sẽ kh&ocirc;ng thấy G&oacute;a Phụ Đen ở tương lai. An ủi rằng c&ocirc; n&agrave;ng Scarlett Johansson xinh đẹp quyến rũ c&ograve;n bộ phim ri&ecirc;ng sẽ c&ocirc;ng chiếu năm 2020, hiện chưa x&aacute;c định thời điểm n&agrave;o. Chiếc khi&ecirc;n Captain America đ&atilde; trao cho người kh&aacute;c nhưng Steve Rogers vẫn xuất hiện với vai tr&ograve; cameo MCU tương lai nếu Chris Evans gật đầu đồng &yacute;. Clint Barton sẽ trở th&agrave;nh người đạo tạo cho nh&oacute;m Avengers trẻ trong TV series Hawkeye m&agrave; Disney+ l&ecirc;n s&oacute;ng 2020. Thor sẽ tham gia c&ugrave;ng nh&oacute;m Vệ binh dải ng&acirc;n h&agrave; để phi&ecirc;u lưu ở Guadians Of The Galaxy Vol.3 năm 2021 trước khi tạm biệt MCU hoặc ra mắt Thor 4. Hiện tại, chỉ c&oacute; Hulk l&agrave; kh&ocirc;ng thể x&aacute;c định tương lai. Biết đ&acirc;u anh sẽ kết hợp c&ugrave;ng Ant-Man ở một cuộc phi&ecirc;u lưu mới khi bộ đ&ocirc;i Khổng lồ - T&iacute; hon tạo n&ecirc;n &ldquo;phản ứng h&oacute;a học&rdquo; rất h&agrave;i hước ở Endgame. C&aacute;c nh&acirc;n vật kh&aacute;c Đ&ocirc;i t&igrave;nh nh&acirc;n số khổ Scarlet Witch- Vision t&aacute;i ngộ bằng TV series ri&ecirc;ng với nhiều tin đồn lấy bối cảnh ở thập ni&ecirc;n 50. Giả thiết nhiều người tin tưởng nhất hiện nay ch&iacute;nh l&agrave; Wanda qu&aacute; đau khổ sau c&aacute;i chết của người y&ecirc;u n&ecirc;n tạo ra một thực tại kh&aacute;c nơi cả hai được sống c&ugrave;ng nhau. Loki cũng sẽ ra mắt series ri&ecirc;ng tr&ecirc;n Disney. Đ&acirc;y hẳn l&agrave; Loki cướp khối Tesseract, thay đổi d&ograve;ng thời gian ở 2012. Thần lừa đảo sẽ đi đ&acirc;u, t&aacute;i ngộ anh trai thế n&agrave;o, tương lai của vũ trụ nơi đ&oacute; sẽ thay đổi ra sao? H&agrave;ng t&aacute; c&acirc;u hỏi sẽ khiến c&aacute;c fan nhấp nhỏm kh&ocirc;ng y&ecirc;n chờ ng&agrave;y khởi chiếu. Sau khi cởi c&aacute;nh Falcon v&agrave; trở th&agrave;nh Captain America mới, Sam Wilson sẽ xuất hiện trong một series truyền h&igrave;nh c&ugrave;ng &ldquo;Winter Soldier&rdquo; ki&ecirc;m &ldquo;White Wolf&rdquo; Bucky Barnes. Bộ đ&ocirc;i h&agrave;i hước n&agrave;y chắc chắn sẽ c&ograve;n xuất hiện ở tương lai MCU. Harley Keener &ndash; cậu b&eacute; được Tony Stark truyền cảm hứng ng&agrave;y n&agrave;o ở Iron Man 3 t&aacute;i xuất ở đoạn kết Endgame. Liệu cậu c&oacute; trở th&agrave;nh Iron Man mới? Hay Morgan Stark &ndash; c&ocirc; con g&aacute;i v&ocirc; c&ugrave;ng đ&aacute;ng y&ecirc;u của Tony v&agrave; Pepper sẽ đảm nhận vai tr&ograve; nặng nề đ&oacute;? Tuy Disney- Marvel chưa c&ocirc;ng bố thời điểm cụ thể nhưng chắc chắn c&aacute;c nh&acirc;n vật chủ chốt trong phase 4 MCU đều sẽ xuất hiện th&ecirc;m &iacute;t nhất một phim ri&ecirc;ng nữa. Stephen Strange sẽ phải giải quyết kha kh&aacute; rắc rối ở tr&aacute;i đất khi ph&acirc;n nửa người trở lại sau 5 năm. Đừng qu&ecirc;n, anh c&ograve;n kẻ th&ugrave; ki&ecirc;m bạn cũ Mordo nguy hiểm v&ocirc; c&ugrave;ng. Captain Marvel giữ lời hứa &ldquo;thanh to&aacute;n nợ nần&rdquo; c&ugrave;ng thầy cũ Yon-Rogg c&ugrave;ng kẻ cầm đầu hại c&ocirc; mất k&yacute; ức &ndash; Tr&iacute; Tuệ Tối Cao. &ldquo;Ho&agrave;ng thượng&rdquo; Black Panther c&oacute; vẻ &ldquo;dễ thở&rdquo; nhất khi Wakanda được cận thần trung th&agrave;nh Okoye duy tr&igrave; ổn định l&uacute;c anh v&agrave; c&ocirc; em g&aacute;i Shuri tan biến. Tuy nhi&ecirc;n, với số phận l&ecirc;n ng&ocirc;i chưa l&acirc;u đ&atilde; chết v&agrave;i lần, xem chừng t&igrave;nh h&igrave;nh của T&rsquo;Challa cũng chẳng khả quan cho lắm. Chuẩn bị cho phase 4 Trở lại với vũ trụ điện ảnh MCU hiện tại, vẫn c&ograve;n qu&aacute; nhiều điều b&otilde; ngỏ sau Hồi Kết. V&agrave; cần tới 129 ph&uacute;t ở Spider-Man: Far From Home để giải quyết. Trailer mới nhất Người Nhện Xa Nh&agrave; tiết lộ một b&iacute; mật khủng khiếp - Sau những c&uacute; b&uacute;ng tay li&ecirc;n tục, multi universe &ndash; đa vũ trụ h&igrave;nh th&agrave;nh. Marvel- Disney sẽ thoải m&aacute;i hơn trong việc thực hiện c&aacute;c phim điện ảnh- truyền h&igrave;nh cũng như nhanh ch&oacute;ng đem Deadpool gia nhập Avengers v&agrave; reboot to&agrave;n bộ vũ trụ X-Men. Dẫu sao, khi ekip l&agrave;m phim Marvel lu&ocirc;n th&iacute;ch lừa t&igrave;nh kh&aacute;n giả, trước ng&agrave;y phim mới Spider-Man: Far From Home c&ocirc;ng chiếu, hầu hết cũng chỉ l&agrave; suy đo&aacute;n.</p>', 'mjpl_mv5bzwexodq5zjgtnwnjoc00zdq3lwflm2etzmi1yzdlodbjndkzxkeyxkfqcgdeqxvynjg2njqwmdq--v1-sx1777-cr0-0-1777-937-al-_1557903107809.jpg', '2019-06-02 00:03:32', '2019-06-02 00:03:32'),
(16, 'Thần Sấm Thor: Chẳng Còn Gì Để Mất!', 'Có lẽ các fan Thor lạc quan nhất cũng không ngờ rằng thần Sấm sẽ “gượng dậy” và trở lại mạnh mẽ sau cú flop Thor: The Dark World', '<p>C&oacute; lẽ c&aacute;c fan Thor lạc quan nhất cũng kh&ocirc;ng ngờ rằng thần Sấm sẽ &ldquo;gượng dậy&rdquo; v&agrave; trở lại mạnh mẽ sau c&uacute; flop Thor: The Dark World &ndash; bộ phim bị đ&aacute;nh gi&aacute; l&agrave; phim tệ nhất vũ trụ điện ảnh Marvel từ trước đến nay. Thor mạnh nhất nh&igrave; comic Marvel - vị thần ch&iacute;n c&otilde;i, nắm trong tay c&acirc;y b&uacute;a MjoInir, điều khiển sấm s&eacute;t. Thế nhưng, khi xuất hiện ở &nbsp;MCU v&agrave;o năm 2011, Thor Odinson kh&ocirc;ng thể hiện được khả năng vốn c&oacute;. Để c&acirc;n bằng với si&ecirc;u anh h&ugrave;ng Tr&aacute;i Đất, Thần Sấm chịu cảnh &ldquo;d&igrave;m h&agrave;ng&rdquo; kinh khủng. L&agrave; ho&agrave;ng tử vương quốc Asgard, v&igrave; qu&aacute; xốc nổi m&agrave; Thor Odinson bị cha m&igrave;nh đ&agrave;y xuống Tr&aacute;i Đất. Cộng th&ecirc;m m&agrave;n &ldquo;g&oacute;p vui&rdquo; đ&acirc;m sau lưng từ cậu em trai Loki, Thần Sấm đ&atilde; quen ki&ecirc;u ngạo lần đầu ti&ecirc;n trải qua nhiều ng&agrave;y khốn khổ đến su&yacute;t mất mạng. Tuy nhi&ecirc;n, nhờ khoảng thời gian n&agrave;y, Thor trưởng th&agrave;nh hơn. Anh được c&ocirc;ng nhận c&oacute; tư c&aacute;ch nắm giữ c&acirc;y b&uacute;a thần quyền năng, gi&agrave;nh lại địa vị. Tiếp đ&oacute;, con trai Odin gia nhập Avengers, trở th&agrave;nh trụ cột biệt đội si&ecirc;u anh h&ugrave;ng v&agrave; bảo vệ ch&iacute;n c&otilde;i Midgard. &nbsp;&nbsp; Phần đầu debut kh&aacute; th&agrave;nh c&ocirc;ng c&ugrave;ng The Avengers g&acirc;y sốt, Thor: The Dark World trở lại nhưng g&acirc;y thất vọng nặng nề cho kh&aacute;n giả. Những miếng h&agrave;i lỗi thời cộng th&ecirc;m cốt chuyện nh&agrave;m ch&aacute;n khiến Thần Sấm tụt hậu hẳn so với Người Sắt v&agrave; Đội Trưởng Mỹ. Iron Man 2 n&acirc;ng tầm vũ trụ điện ảnh Marvel, Captain America: Winter Soldier thay đổi ho&agrave;n to&agrave;n MCU c&ograve;n Thor: The Dark World chỉ l&agrave; mớ b&ograve;ng bong khiến giới ph&ecirc; b&igrave;nh lẫn người h&acirc;m mộ hết lời ch&ecirc; bai. H&igrave;nh ảnh con trai Odin ở Avengers: Age Of Ultron lại c&agrave;ng mờ nhạt, c&oacute; phần thua s&uacute;t cả nh&acirc;n vật mới như Scarlet Witch. May mắn thay, mọi chuyện đ&atilde; thay đổi từ khi Taika Waititi đến MCU. Bằng sự h&agrave;i hước th&ocirc;ng minh, Taika thổi cho Thor: Ragnarok một luồng gi&oacute; mới, đưa c&acirc;u chuyện về Thần Sấm đạt đỉnh cao. Nhờ cameo Stan Lee, Thor cắt đi m&aacute;i t&oacute;c thề đ&atilde; th&agrave;nh thương hiệu, dẹp bỏ c&aacute;ch g&acirc;y h&agrave;i bằng sự ngớ ngẩn m&agrave; trở n&ecirc;n c&oacute; duy&ecirc;n lạ thường. Từng h&agrave;nh động v&agrave; lời n&oacute;i của Thần Sấm đều dễ d&agrave;ng khiến c&aacute;c fan cười lăn cười b&ograve;. Đ&ocirc;i l&uacute;c vẫn ngốc nghếch ng&acirc;y thơ nhưng biết &ldquo;ăn miếng trả miếng&rdquo; v&agrave; sử dụng m&aacute;nh lới để đạt được mục đ&iacute;ch. Tự tin v&agrave;o chất lượng phim, Marvel khiến thế giới kinh ngạc v&igrave; mạnh dạn đưa Thor: Ragnarok tr&igrave;nh chiếu v&agrave;o 3.11.2017, cạnh tranh gần như trực diện với si&ecirc;u bom tấn 300 triệu $ Justice League của DCEU. Bị đ&aacute;nh gi&aacute; l&agrave; &ldquo;k&egrave;o dưới&rdquo;, con trai Odin xuất sắc gi&agrave;nh chiến thắng ngoạn mục trước bộ sậu h&ugrave;ng hậu Superman, Batman, Wonder Woman, Cyborg v&agrave; The Flash khi thua về hơn 853 triệu $ tại ph&ograve;ng v&eacute; to&agrave;n cầu. Thần Sấm thu h&uacute;t đ&ocirc;ng đảo người h&acirc;m mộ hơn bao giờ hết. H&igrave;nh ảnh Thor lần đầu ti&ecirc;n đạt tầm ảnh hưởng ngang cơ Iron Man, Captain America v&agrave; cậu em Tr&ugrave;m Lừa Đảo Loki. Ở Ragnarok, c&acirc;u chuyện về cuộc đời Thor Odinson đạt đến tột c&ugrave;ng vinh quang. Dẫu &ldquo;nước mất nh&agrave; tan&rdquo; nhưng anh c&oacute; được sự ủng hộ từ thần d&acirc;n, những người bạn trung th&agrave;nh v&agrave; từ cậu em trai vừa &ldquo;quay đầu&rdquo;. Tuy nhi&ecirc;n, cuộc vui đ&oacute; chỉ tồn tại v&agrave;i ph&uacute;t ngắn ngủi. Con t&agrave;u chở d&acirc;n tị nạn Asgard gặp phải chiến hạm khổng lồ của Thanos. V&agrave; ở mở đầu Avengers: Infinity War, ph&eacute;p m&agrave;u đ&atilde; chẳng xảy ra. Một nửa người Asgard bị giết, Loki chết trước mặt Thor c&ograve;n bản th&acirc;n thần Sấm tr&ocirc;i dạt ngo&agrave;i vũ trụ cho tới l&uacute;c may mắn được nh&oacute;m Star Lord giải cứu. C&oacute; thể n&oacute;i kh&ocirc;ng Avengers n&agrave;o chịu nhiều nỗi đau mất m&aacute;t to lớn như con trai Odin. Anh mất mẹ, mất cha, mất qu&ecirc; hương, mất d&acirc;n tộc, đến mắt cũng mất lu&ocirc;n. Mọi thứ c&agrave;ng tận c&ugrave;ng khốn khổ hơn khi Thor v&agrave; Loki vừa l&agrave;m h&ograve;a sau bao năm &ldquo;đấu đ&aacute;&rdquo; th&igrave; Loki lại chết trước mặt anh. Trước l&uacute;c bị Thanos b&oacute;p chết, Thần Lừa Đảo đ&atilde; từng n&oacute;i rằng &ldquo;Em hứa với anh, anh trai. Mặt trời sẽ soi s&aacute;ng ch&uacute;ng ta lần nữa.&rdquo; Liệu c&oacute; ph&eacute;p m&agrave;u n&agrave;o gi&uacute;p Loki sống lại? Đem nỗi đau biến th&agrave;nh &nbsp;quyết t&acirc;m tột độ, Thor su&yacute;t chết để r&egrave;n c&acirc;y b&uacute;a Stormbreaker đủ sức ti&ecirc;u diệt Thanos. Tuy nhi&ecirc;n, chỉ v&igrave; bất cẩn v&agrave; bốc đồng, anh để Thanos thực hiện được &acirc;m mưu. Thần Sấm tưởng &ldquo;chẳng c&ograve;n g&igrave; để mất&rdquo; đ&atilde; mất đi một nửa vũ trụ. Trong Avengers: Endgame, anh sẽ phải l&agrave;m thế n&agrave;o để chuộc lại sai lầm? Tin rằng, d&ugrave; phải hy sinh bản th&acirc;n m&igrave;nh, Thor cũng chẳng chối từ. Nhờ Thor: Ragnarok, h&igrave;nh ảnh Thần Sấm gần như ho&agrave;n thiện. Nếu Steve Rogers l&atilde;nh đạo, Tony Stark l&agrave; nh&agrave; t&agrave;i trợ th&igrave; Thor đảm nhận th&aacute;nh ngoại giao. Anh chẳng mất nhiều thời gian để l&agrave;m quen với biệt đội si&ecirc;u anh h&ugrave;ng Avengers, nhanh ch&oacute;ng thu phục đội qu&acirc;n c&aacute;ch mạng Korg v&agrave; dễ d&agrave;ng kết th&acirc;n c&ugrave;ng nh&oacute;m Vệ binh dải ng&acirc;n h&agrave;. Ngay cả Rocket Racoon kh&oacute; t&iacute;nh c&ograve;n y&ecirc;u th&iacute;ch con trai Odin. So với &ldquo;Captain America&rdquo; Chris Evans hết mong kho&aacute;c &aacute;o Đội Trưởng Mỹ, &ldquo;Iron Man&rdquo; Robert Downey Jr. n&ecirc;n kết th&uacute;c những cuộc phi&ecirc;u lưu v&agrave; d&agrave;nh thời gian cho gia đ&igrave;nh th&igrave; c&acirc;u chuyện của Thor c&ograve;n nhiều điểm để khai th&aacute;c sau Avengers: Hồi Kết, Chris Hemsworth cũng chưa b&agrave;y tỏ th&aacute;i độ ch&aacute;n l&agrave;m Thần Sấm. V&igrave; vậy, d&ugrave; biết hy vọng hết sức mong manh, c&aacute;c fan lu&ocirc;n mong muốn c&oacute; th&ecirc;m phần 4. Dĩ nhi&ecirc;n, điều kiện ti&ecirc;n quyết l&agrave; Taika Waititi vẫn được l&agrave;m đạo diễn.&nbsp;</p>', 'fpgA_1.jpg', '2019-06-02 00:12:32', '2019-06-02 00:12:32'),
(17, 'Captain America: Rút Lui Bình Yên Hay Hy Sinh Ở Phút Cuối Cùng?', 'Từ anh thanh niên dáng nhỏ thó nhưng gan to “Tôi có thể đánh nhau cả ngày.” tới Captain America thủ lĩnh Avengers là quãng đường rất dài Steve Rogers đã trải qua.', '<p>Từ anh thanh ni&ecirc;n d&aacute;ng nhỏ th&oacute; nhưng gan to &ldquo;T&ocirc;i c&oacute; thể đ&aacute;nh nhau cả ng&agrave;y.&rdquo; tới Captain America thủ lĩnh Avengers l&agrave; qu&atilde;ng đường rất d&agrave;i Steve Rogers đ&atilde; trải qua. Kh&ocirc;ng sở hữu sấm chớp như Thor, chẳng th&ocirc;ng minh tinh tế bằng Black Widow, sức mạnh thua xa Hulk, c&agrave;ng chẳng sở hữu quyền năng ph&eacute;p thuật khủng khiếp cỡ Scarlet Witch, thậm ch&iacute; c&ograve;n chả bay được như Falcon, Captain America vẫn vững v&agrave;ng ở vị tr&iacute; thủ lĩnh tinh thần cả Biệt đội si&ecirc;u anh h&ugrave;ng. V&agrave;o mọi t&igrave;nh huống, tiếng n&oacute;i Đại &Uacute;y Mỹ đều c&oacute; trọng lượng nhất định. Steven Grant Rogers vốn l&agrave; một thằng nh&oacute;c thấp b&eacute; nhẹ c&acirc;n, sinh ng&agrave;y 4.7.1918 tại Brooklyn. Với l&ograve;ng y&ecirc;u nước to lớn di truyền từ người cha Joseph Rogers đ&atilde; hy sinh thời thế chiến thứ nhất, cậu đăng k&yacute; tham gia qu&acirc;n đội để chiến đấu trong thế chiến thứ hai c&ugrave;ng người bạn th&acirc;n nhất James Buchanan Barnes. Thế nhưng, Steve lu&ocirc;n bị từ chối v&igrave; th&acirc;n h&igrave;nh suy dinh dưỡng trầm trọng. Thay t&ecirc;n đổi họ, l&agrave;m giả nh&acirc;n th&acirc;n, quyết t&acirc;m của cậu nh&oacute;c được tiến sĩ Abraham Erskine nh&igrave;n thấy. V&agrave; sau nhiều lần thử th&aacute;ch, &ocirc;ng quyết định chọn Steve cho dự &aacute;n t&acirc;m huyết cả đời &ndash; dự &aacute;n tạo ra si&ecirc;u anh h&ugrave;ng. Tuy nhi&ecirc;n, th&acirc;n h&igrave;nh to lớn c&ugrave;ng sức khỏe vượt trội kh&ocirc;ng phải l&agrave; mấu chốt để Steve Rogers trở th&agrave;nh Captain America. Suốt một thời gian d&agrave;i sau khi ti&ecirc;m huyết thanh si&ecirc;u chiến binh, Steve chỉ l&agrave; con khỉ l&agrave;m tr&ograve; tr&ecirc;n s&acirc;n khấu nhằm vận động thanh ni&ecirc;n Mỹ ra tiền tuyến. Chỉ đến l&uacute;c cứu cậu bạn th&acirc;n Bucky khỏi hang ổ Ph&aacute;t X&iacute;t, anh mới đi bước đầu ti&ecirc;n trong h&agrave;nh tr&igrave;nh trở th&agrave;nh biểu tượng tinh thần nước Mỹ. Trở th&agrave;nh huyền thoại nhờ t&igrave;nh y&ecirc;u d&agrave;nh cho Peggy, t&igrave;nh bạn ch&iacute; cốt với Bucky v&agrave; chiếc khi&ecirc;n do Howard Stark l&agrave;m ra, Steve hy sinh bản th&acirc;n để t&igrave;m c&aacute;ch kết th&uacute;c cuộc chiến. Nhiều khả năng lần n&agrave;y, v&igrave; kết th&uacute;c cuộc chiến v&ocirc; cực, anh cũng sẽ ra đi. So trong loạt phim si&ecirc;u anh h&ugrave;ng của MCU, trilogy về Captain America c&oacute; bước ph&aacute;t triển tốt nhất. Captain America: The First Avenger tuy kh&ocirc;ng qu&aacute; xuất sắc nhưng lại l&agrave; t&aacute;c phẩm anh h&ugrave;ng chiến tranh đầy bi tr&aacute;ng, vừa đau thương vừa h&agrave;o h&ugrave;ng. Bộ phim kinh ph&iacute; 140 triệu $ n&agrave;y kiếm cho Marvel số lời nhẹ nh&agrave;ng hơn 370 triệu $. Sang đến Captain America: Winter Soldier, h&igrave;nh ảnh Đại &Uacute;y Mỹ c&oacute; sự đột ph&aacute; v&ocirc; c&ugrave;ng mạnh mẽ, trở th&agrave;nh nh&acirc;n vật được ủng hộ ngang cơ với Iron Man Tony Stark. Phim tập hợp h&agrave;ng loạt sự kiện g&acirc;y shock: Bucky trở th&agrave;nh Winter Soldier, Nick Fury bị &ldquo;giết&rdquo;, Hydra h&oacute;a ra vẫn tồn tại ngay trong ch&iacute;nh S.H.I.E.L.D v&agrave; dĩ nhi&ecirc;n kh&oacute; thể qu&ecirc;n nụ h&ocirc;n &ldquo;v&igrave; ngụy trang&rdquo; giữa Steve Rogers v&agrave; &ldquo;Black Widow&rdquo; Natasha Romanoff. Tuy t&aacute;c phẩm kinh ph&iacute; 170 triệu $ chưa ph&aacute; mốc tỷ đ&ocirc; m&agrave; &ldquo;chỉ&rdquo; kiếm 714 triệu $ ph&ograve;ng v&eacute; to&agrave;n cầu nhưng c&oacute; &yacute; nghĩa quan trọng thay đổi ho&agrave;n to&agrave;n MCU. Đa số fan c&ocirc;ng nhận đ&acirc;y l&agrave; phim hay nhất từ trước đến nay của vũ trụ điện ảnh Marvel. Những m&agrave;n chiến đấu tay đ&ocirc;i đỉnh cao trong phim vẫn được c&aacute;c fan chia sẻ v&agrave; t&aacute;n tụng đến tận h&ocirc;m nay. Loạt phim về Cap đoạt tới đỉnh cao ph&ograve;ng v&eacute; ở Captain Ameirca: Civil War. 250 triệu $ chi ph&iacute; gi&uacute;p Marvel thu về hơn 1,153 tỷ $ tr&ecirc;n to&agrave;n thế giới. Đối thủ Marvel - DC Comic phải t&aacute;i mặt khi si&ecirc;u phẩm Batman v Superman: Dawn Of Justice với c&ugrave;ng kinh ph&iacute; v&agrave; ph&aacute;t h&agrave;nh trước đ&oacute; hai th&aacute;ng chỉ thu về 873 triệu $. Cuộc giải cứu Bucky khiến Steve Rogers bỏ lại chiến khi&ecirc;n Đội Trưởng Mỹ v&agrave; trở th&agrave;nh kẻ lưu vong đến Wakanda. Biệt Đội Si&ecirc;u Anh H&ugrave;ng chia rẽ s&acirc;u sắc theo hai #teamCap v&agrave; #teamIronMan. V&agrave; cho đến tận h&ocirc;m nay, thủ lĩnh của hai phe vẫn chưa c&oacute; cơ hội gặp lại nhau để h&ograve;a giải. Hiện tại, trong số c&aacute;c Avengers, Cap l&agrave; người c&oacute; khả năng chết cao nhất th&ocirc;ng qua trailer v&agrave; poster Avengers: Endgame. Hơn bất cứ ai thuộc d&agrave;n diễn vi&ecirc;n, Chris Evans đ&atilde; qu&aacute; ch&aacute;n ng&aacute;n việc kho&aacute;c l&ecirc;n người chiếc &aacute;o Đội Trưởng Mỹ. Suốt t&aacute;m năm qua, d&ugrave; tham gia bao nhi&ecirc;u dự &aacute;n điện ảnh độc lập, chịu thương chịu kh&oacute; diễn đủ loại phim h&agrave;nh x&aacute;c, người ta vẫn nhớ đến anh qua chiếc khi&ecirc;n cờ Hoa Kỳ. So với vai diễn &ldquo;Human Torch&rdquo; Johnny Storm ở Fantastic 4, Captain America &ldquo;đ&oacute;ng khung&rdquo; Chris Evans. L&agrave; diễn vi&ecirc;n lu&ocirc;n muốn ph&aacute;t triển năng lực diễn xuất, l&agrave; nh&agrave; sản xuất ki&ecirc;m đạo diễn đam m&ecirc; điện ảnh m&atilde;nh liệt, anh muốn đổi thay. Ch&iacute;nh v&igrave; thế, sự hy sinh đầy anh h&ugrave;ng của Steve Rogers trong Avengers: Hồi Kết chốt c&uacute; tuyệt vời cho nh&acirc;n vật, đưa Captain America được nhớ m&atilde;i. Ngo&agrave;i ra, tr&aacute;i với Iron Man v&agrave; Thor chưa c&oacute; người thừa kế, d&ugrave; Steve c&oacute; chết đi, chiếc khi&ecirc;n Captain vẫn c&oacute; kẻ kế vị. Cậu bạn th&acirc;n l&acirc;u năm Bucky Barnes hay anh bạn th&acirc;n &iacute;t năm Sam Wilson c&oacute; thừa khả năng trở th&agrave;nh người đảm nhận. Tương tự Cap, Chiến Binh M&ugrave;a Đ&ocirc;ng v&agrave; Falcon đều l&agrave; những người l&iacute;nh d&agrave;y dạn trận mạc. Ở Avengers: Infinity War, ngo&agrave;i việc chỉ huy v&agrave; đ&aacute;nh cho đ&aacute;m &ldquo;l&acirc;u la&rdquo; Thanos một trận ra tr&ograve;, Captain America mang chiếc khi&ecirc;n mới từ vibranium dường như l&eacute;p vế trước sức mạnh thần th&aacute;nh của Thor v&agrave; bộ gi&aacute;p nano Iron Man sở hữu. Trong trailer Avengers: Endgame mới nhất, tr&ecirc;n tay ch&agrave;ng Captain đ&atilde; xuất hiện lại chiến khi&ecirc;n quen thuộc. Một chiến binh c&oacute; sức mạnh qu&aacute; cỏn con so với Thanos n&ecirc;n l&agrave;m thế n&agrave;o? Anh hy sinh để đồng đội tiến l&ecirc;n hay kết liễu Thanos rồi c&ugrave;ng chết? Anh sẽ r&uacute;t lui để về huấn luyện cho những Avengers trẻ hay đến thi&ecirc;n đường v&agrave; b&ugrave; đắp cho Peggy Carter điệu nhảy m&igrave;nh c&ograve;n nợ? Avengers: Hồi Kết c&ocirc;ng chiếu v&agrave;o 26.4.2019 sẽ cho ch&uacute;ng ta c&acirc;u trả lời.</p>', 'K6nB_2.jpg', '2019-06-02 00:14:05', '2019-06-02 00:14:05'),
(18, 'Dàn Sao Việt Thích Thú Check-in Tại Galaxy Tràng Thi', 'Sau đêm ra mắt đầu tiên tại TP. Hồ Chí Minh, dàn diễn viên Ước Hẹn Mùa Thu đã có mặt tại Hà Nội để tiếp tục các hoạt động quảng bá cho bộ phim.', '<p>&nbsp;</p>\r\n\r\n<p>Sau đ&ecirc;m ra mắt đầu ti&ecirc;n tại TP. Hồ Ch&iacute; Minh, d&agrave;n diễn vi&ecirc;n Ước Hẹn M&ugrave;a Thu đ&atilde; c&oacute; mặt tại H&agrave; Nội để tiếp tục c&aacute;c hoạt động quảng b&aacute; cho bộ phim. Tối ng&agrave;y 8.5, c&aacute;c diễn vi&ecirc;n trẻ Ho&agrave;ng&nbsp;Oanh, Quốc Anh, Nhan Ph&uacute;c Vinh, Kay Trần,&hellip; đ&atilde; c&oacute; mặt tại Galaxy Tr&agrave;ng Thi, H&agrave; Nội để quảng b&aacute; bộ phim Ước Hẹn M&ugrave;a Thu. Galaxy Tr&agrave;ng Thi l&agrave; cụm rạp mới khai trương c&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u của Galaxy Cinema, tọa lạc tại vị tr&iacute; trung t&acirc;m v&ocirc; c&ugrave;ng đắc địa. Đ&acirc;y cũng l&agrave; lợi thế gi&uacute;p Ước Hẹn M&ugrave;a Thu c&oacute; thể tiếp cận được nhiều hơn c&aacute;c kh&aacute;n giả&nbsp;trẻ tại thủ đ&ocirc;.&nbsp; Quốc Anh chia sẻ niềm vui &quot;nh&acirc;n gấp đ&ocirc;i&quot; khi anh ra H&agrave; Nội v&agrave; được gặp gia đ&igrave;nh. Trong&nbsp;Ước Hẹn M&ugrave;a Thu, diễn xuất của diễn vi&ecirc;n trẻ được đ&aacute;nh gi&aacute; l&agrave; c&oacute; nhiều tiến bộ hơn so với Trạng Quỳnh. &nbsp; Nhan Ph&uacute;c Vinh đầy lịch l&atilde;m tại sự kiện. Anh cũng rất h&aacute;o hức khi đến H&agrave; Nội đ&uacute;ng dịp thời tiết m&aacute;t mẻ. Ho&agrave;ng Oanh xinh đẹp, dịu d&agrave;ng tại sự kiện ra mắt phim ở&nbsp;Galaxy Tr&agrave;ng Thi Trong khi đ&oacute;, Kay Trần xuất hiện với&nbsp;phong c&aacute;ch &quot;chất lừ&quot; quen thuộc &nbsp; Ước Hẹn M&ugrave;a Thu l&agrave; dự &aacute;n điện ảnh tiếp theo của đạo diễn Nguyễn Quang Dũng sau Th&aacute;ng Năm Rực Rỡ. Phim ch&iacute;nh thức ra mắt tr&ecirc;n to&agrave;n quốc từ ng&agrave;y 10.5.2019.<br />\r\n<br />\r\n&nbsp;</p>', 'kWnR_pic 2.jpg', '2019-06-02 00:14:12', '2019-06-02 00:14:12'),
(19, 'Hành Trình Của Gã Khổng Lồ Xanh Hulk', 'Tại vũ trụ điện ảnh Marvel, hiếm có nhân vật nào lận đận như Bruce Banner/ Hulk.  Chưa tới mười năm, vai này đã đổi đến ba người.', '<p>Tại vũ trụ điện ảnh Marvel, hiếm c&oacute; nh&acirc;n vật n&agrave;o lận đận như Bruce Banner/ Hulk. &nbsp;Chưa tới mười năm, vai n&agrave;y đ&atilde; đổi đến ba người. &ldquo;Hulk&rdquo; 2003 Eric Bana v&agrave; &ldquo;Hulk&rdquo; 2008 Edward Norton đều l&agrave; những diễn vi&ecirc;n đẹp trai v&agrave; thực lực h&agrave;ng đầu Hollywood. Tuy nhi&ecirc;n, cuối c&ugrave;ng chỉ Mark Ruffalo trụ lại với nh&acirc;n vật d&agrave;i l&acirc;u, suốt s&aacute;u bộ phim từ The Avengers 2012 đến nay. L&agrave; diễn vi&ecirc;n t&agrave;i năng, d&ugrave; kh&ocirc;ng điển trai bằng hai bạn diễn trước, Mark Ruffalo đ&atilde; thổi luồng gi&oacute; mới, mang đến Hulk đặc sắc, n&oacute;ng nảy xen lẫn đ&aacute;ng y&ecirc;u tr&ecirc;n m&agrave;n ảnh rộng. C&aacute;c fan Marvel cũng thừa nhận anh l&agrave; g&atilde; khổng lồ xanh hợp vai nhất từ trước đến nay. Đặc biệt, sau khi Mark c&oacute; m&agrave;n tr&igrave;nh diễn xuất sắc ở Thor: Ragnarok. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bruce Banner l&agrave; một trong những bộ &oacute;c xuất sắc nhất team Avengers, tiến sĩ sở hữu bảy tấm bằng danh gi&aacute;. Thế nhưng, sau tai nạn thảm khốc, thỉnh thoảng Bruce mất kiểm so&aacute;t, biến th&agrave;nh con qu&aacute;i vật khổng lồ xanh th&iacute;ch đập ph&aacute; mọi thứ. Bruce Banner phải từ bỏ tất cả, sự nghiệp bản th&acirc;n c&ugrave;ng c&ocirc; bạn g&aacute;i Betty Ross xinh đẹp để sống trốn chui trốn nhủi v&ograve;ng quanh thế giới đến ng&agrave;y Black Widow t&igrave;m đến v&agrave; mời anh gia nhập Biệt Đội Si&ecirc;u Anh H&ugrave;ng. Kết hợp giữa Bruce đầu &oacute;c thi&ecirc;n t&agrave;i c&ugrave;ng Hulk mạnh khủng khiếp, Bruce Banner đ&atilde; kh&ocirc;ng &iacute;t lần &ldquo;c&acirc;n&rdquo; team, cứu nguy nh&oacute;m si&ecirc;u anh h&ugrave;ng giữa cảnh ng&agrave;n c&acirc;n treo sợi t&oacute;c. Tuy vậy, việc chẳng thể kiểm so&aacute;t con qu&aacute;i vật xanh cũng khiến anh g&acirc;y ra h&agrave;ng t&aacute; rắc rối cho bạn b&egrave;. G&oacute;a Phụ Đen su&yacute;t mất mạng c&ograve;n Thần Sấm lẫn Người Sắt phải mất nhiều c&ocirc;ng sức để khuất phục l&uacute;c Hulk nổi đi&ecirc;n. &nbsp;Sau khi đ&aacute;nh bại Ultron, Bruce trong h&igrave;nh dạng Hulk bay thẳng l&ecirc;n vũ trụ, lưu lạc tới h&agrave;nh tinh Sakaar v&agrave; trở th&agrave;nh v&otilde; sĩ v&ocirc; địch tại đấu trường. Nhờ sự xuất hiện Thần Sấm Thor, Bruce trở lại l&agrave; ch&iacute;nh m&igrave;nh. Anh theo ch&acirc;n Thor tới Asgard, đụng độ Thanos rồi rơi thẳng xuống m&aacute;i nh&agrave; &ldquo;B&aacute;c Sỹ Lạ&rdquo; Doctor Strange. Bruce v&agrave; Hulk ch&iacute;nh l&agrave; c&uacute; lừa lớn nhất Avenger: Infinity War. Ở trailer Cuộc Chiến V&ocirc; Cực, Hulk chiến đấu c&ugrave;ng team Cap nơi Wakanda. Thế nhưng, ch&uacute;ng ta đều biết, v&igrave; thua đau l&uacute;c &ldquo;x&aacute;p l&aacute; c&agrave;&rdquo; c&ugrave;ng Thanos, g&atilde; khổng lồ xanh đ&atilde; sợ h&atilde;i trốn lu&ocirc;n. Cuối c&ugrave;ng, Bruce phải d&ugrave;ng đến bộ gi&aacute;p Hulkbuster m&agrave; Iron Man chế tạo, cố gắng hết sức để gi&agrave;nh chiến thắng c&aacute;ch biệt gang tấc với t&ecirc;n đệ tử Thanos. Lần n&agrave;y, Marvel kh&ocirc;ng hề cho Hulk xuất hiện ở trailer Avengers: Endgame. Ngay cả tr&ecirc;n poster Avengers 2019, Bruce Banner l&agrave; kẻ duy nhất mặc đồ vest trang trọng giữa c&aacute;c bạn đang mặc gi&aacute;p chiến đấu. Theo th&oacute;i Marvel troll fan từ trước nay, nhiều khả năng Hulk sẽ c&oacute; mặt trong Avengers: Hồi Kết. X&eacute;t ở s&aacute;u th&agrave;nh vi&ecirc;n Avengers đầu ti&ecirc;n, Bruce Banner thuộc nh&oacute;m người &iacute;t c&oacute; khả năng hy sinh. Nh&acirc;n vật n&agrave;y c&ograve;n nhiều điều để khai th&aacute;c v&agrave; c&oacute; mối t&igrave;nh đang b&otilde; ng&otilde; với Black Widow- người sẽ ra phim ri&ecirc;ng v&agrave;o năm 2020. D&ugrave; việc &ldquo;Hulk&rdquo; Mark Ruffalo ra mắt phim ri&ecirc;ng c&oacute; phần kh&oacute; khăn v&igrave; anh đ&atilde; lớn tuổi v&agrave; hai bộ phim chiếu rạp Hulk l&agrave;m nh&acirc;n vật ch&iacute;nh trước đ&acirc;y chẳng được th&agrave;nh c&ocirc;ng. Tuy nhi&ecirc;n, trước n&eacute;t duy&ecirc;n m&agrave;n ảnh m&agrave; Mark thổi cho Hulk, kh&aacute;n giả rất mong chờ một phần do anh đ&oacute;ng ch&iacute;nh. Bằng tiềm lực của Marvel &amp; Disney hiện tại, tin rằng khiến phim mới về Hulk th&agrave;nh c&ocirc;ng ph&ograve;ng v&eacute; chẳng phải l&agrave; điệp vụ bất khả thi. Trước mắt, h&atilde;y c&ugrave;ng chờ đ&oacute;n g&atilde; khổng lồ xanh trong si&ecirc;u phẩm sẽ c&agrave;n qu&eacute;t c&aacute;c rạp chiếu phim mang t&ecirc;n Avengers: Endgame ra mắt ng&agrave;y 26.04.2019.</p>', 'gRRn_3.jpg', '2019-06-02 00:16:04', '2019-06-02 00:16:04'),
(20, 'Black Widow: Nữ Siêu Anh Hùng Ảnh Hưởng Nhất MCU', 'Nữ siêu anh hùng duy nhất thuộc nhóm Avengers đầu tiên- Black Widow luôn được cả nhà sản xuất lẫn các fan dành rất nhiều tình cảm.', '<p>Nữ si&ecirc;u anh h&ugrave;ng duy nhất thuộc nh&oacute;m Avengers đầu ti&ecirc;n- Black Widow lu&ocirc;n được cả nh&agrave; sản xuất lẫn c&aacute;c fan d&agrave;nh rất nhiều t&igrave;nh cảm. Thủ vai n&agrave;ng điệp vi&ecirc;n lại l&agrave; nữ minh tinh người Mỹ sexy nhất h&agrave;nh tinh Scarlett Johansson, chẳng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Natasha Romanoff sở hữu sức mạnh yếu ớt giữa d&agrave;n si&ecirc;u năng lực lại được h&acirc;m mộ cuồng nhiệt đến thế. Vũ trụ điện ảnh Marvel bước v&agrave;o năm thứ mười một, Scarlett Johansson cũng đ&atilde; bước sang tuổi ba mươi lăm, nhan sắc n&agrave;ng kh&ocirc;ng thể rực rỡ như thời gian trước. H&agrave;ng t&aacute; c&ocirc; đ&agrave;o xinh đẹp n&oacute;ng bỏng v&agrave; trẻ trung như Scarlet Witch (Elizabeth Olsen), Nebula (Karen Gillan)&hellip; được c&aacute;c nh&agrave; l&agrave;m phim bổ sung để vườn hoa Biệt đội si&ecirc;u anh h&ugrave;ng MCU th&ecirc;m m&agrave;u sắc. Tuy nhi&ecirc;n, địa vị Black Widow vẫn hết sức vững chắc trong l&ograve;ng người h&acirc;m mộ. Xuất hiện lần đầu ti&ecirc;n ở Iron Man 2, G&oacute;a Phụ Đen do S.H.I.E.L.D c&agrave;i v&agrave;o l&agrave;m nh&acirc;n vi&ecirc;n cho Tony Stark v&agrave; c&ocirc; người y&ecirc;u Pepper Potts. Ph&acirc;n cảnh đầu ti&ecirc;n chỉ v&agrave;i ph&uacute;t ngắn ngủi gi&uacute;p &ldquo;Natalie Rushman&rdquo; khoe trọn vẹn vẻ đẹp kiều diễn c&ugrave;ng khả năng v&otilde; thuật v&ocirc; địch, chỉ mất v&agrave;i gi&acirc;y đ&atilde; hạ đo v&aacute;n anh vệ sĩ Happy. Sau đ&oacute;, c&ocirc; c&ograve;n được &ldquo;bại tướng&rdquo; ki&ecirc;m đạo diễn phim ưu &aacute;i thể hiện ph&acirc;n đoạn h&agrave;nh động đắt gi&aacute;. D&ugrave; chỉ v&agrave;o vai thứ ch&iacute;nh, Black Widow nhanh ch&oacute;ng g&acirc;y ấn tượng mạnh mẽ. Sang đến The Avengers, nữ điệp vi&ecirc;n th&ocirc;ng minh gợi cảm n&agrave;y lại tiếp tục tặng một trường đoạn v&otilde; thuật m&atilde;n nh&atilde;n cho c&aacute;c fan- hạ nh&oacute;m kẻ th&ugrave; khi bị tr&oacute;i. Kh&ocirc;ng sở hữu sức mạnh phi thường nhưng Natasha chẳng hề mắc mưu của Thần Lừa Đảo Loki, c&ocirc; l&agrave; người gi&uacute;p Hawkeye Clint Barton tho&aacute;t khỏi ma thuật tẩy n&atilde;o v&agrave; cũng g&oacute;p c&ocirc;ng lớn chặng đứng qu&acirc;n đo&agrave;n x&acirc;m lược m&agrave; Thanos gửi đến Tr&aacute;i Đất. Sau m&agrave;n thả sức tung hint với &ldquo;Hawkeye&rdquo; Clint Barton trong The Avengers (2012) v&agrave; c&oacute; nụ h&ocirc;n bất ngờ với Đội Trưởng Mỹ ở Captain America: Winter Soldier (2014), đường t&igrave;nh &aacute;i n&agrave;ng G&oacute;a Phụ Đen đột ngột rẽ sang &ldquo;Hulk&rdquo; Bruce Banner. Tuy nhi&ecirc;n, ng&agrave;y vui chưa bao l&acirc;u th&igrave; Hulk lưu lạc đến h&agrave;nh tinh Sakaar. L&uacute;c Bruce trở về Tr&aacute;i Đất chiến đấu c&ugrave;ng team Cap tại Wakanda, cả hai vẫn hết sức ngượng ng&ugrave;ng. Đặc biệt, v&agrave;o mỗi phần phim, Natasha lại thay đổi một kiểu t&oacute;c kh&aacute;c nhau. T&oacute;c đỏ xoăn quyến rũ (Iron Man 2), t&oacute;c d&agrave;i &eacute;p thẳng (Captain America: Winter Soldier), t&oacute;c bạch kim (Avengers: Infinity War)&hellip; Tạo h&igrave;nh được khen nhiều nhất của c&ocirc; ch&iacute;nh l&agrave; m&aacute;i t&oacute;c đỏ ngắn ở The Avengers. Cũng ch&iacute;nh bởi điều n&agrave;y, Natasha đang g&acirc;y rất nhiều thắc mắc tại sao c&ocirc; đổi đến ba kiểu đầu chỉ trong hai ph&uacute;t rưỡi trailer Endgame. Việc nữ điệp vi&ecirc;n tập bắn bằng s&uacute;ng lục c&agrave;ng khiến kh&aacute;n giả t&ograve; m&ograve; hơn v&igrave; d&ugrave;ng s&uacute;ng đối ph&oacute; kẻ ngay cả Stormbreaker thần th&aacute;nh mới l&agrave;m bị thương chẳng kh&aacute;c n&agrave;o tr&ograve; đ&ugrave;a C&aacute; th&aacute;ng Tư. Avengers: Endgame chưa ra mắt nhưng fan Black Widow đ&atilde; nhận tin vui. Sau nhiều năm, cuối 2018, Marvel ch&iacute;nh thức tuy&ecirc;n bố G&oacute;a Phụ Đen sẽ c&oacute; phim ri&ecirc;ng. Những th&ocirc;ng tin về phim mới vẫn c&ograve;n rất &iacute;t ỏi, chỉ biết l&agrave; nữ đạo diễn Berlin Syndrome &ndash; Cate Shortland ngồi ghế đạo diễn v&agrave; kịch bản phim do Ned Benson chắp b&uacute;t. Từng c&oacute; tin đồn ng&ocirc;i sao xinh đẹp người Anh Emma Watson tham gia phim nhưng cuối c&ugrave;ng vai diễn quan trọng n&agrave;y được giao cho Florence Pugh- một c&aacute;i t&ecirc;n c&ograve;n &iacute;t người biết tới. D&ugrave; vậy, việc chưa x&aacute;c định mốc thời gian diễn ra phim ri&ecirc;ng dẫn đến Black Widow vẫn thuộc top nh&acirc;n vật c&oacute; khả năng hy sinh ở Avengers: Endgame. Sức mạnh chỉ bằng hạt c&aacute;t khi đối ph&oacute; với Thanos h&ugrave;ng mạnh, liệu c&aacute;i đầu th&ocirc;ng minh c&oacute; gi&uacute;p Natasha Romanoff sống s&oacute;t qua Hồi Kết Avengers?</p>', 'FDsP_4.jpg', '2019-06-02 00:17:19', '2019-06-02 00:17:19'),
(21, 'Hawkeye: Có Tỏa Sáng Như Lời MCU Đã Hứa?', 'Từng khiến chiếc tàu bay hiện đại bậc nhất của S.H.I.L.E.D suýt rơi ở The Avengers (2012), chẳng ai hiểu nổi tại sao càng ngày Hawkeye lại càng yếu ớt thảm thương.', '<p>Từng khiến chiếc t&agrave;u bay hiện đại bậc nhất của S.H.I.L.E.D su&yacute;t rơi ở The Avengers (2012), chẳng ai hiểu nổi tại sao c&agrave;ng ng&agrave;y Hawkeye lại c&agrave;ng yếu ớt thảm thương. Hawkeye xuất hiện cameo lần đầu ti&ecirc;n ở Thor 1. Kh&aacute;n giả dễ d&agrave;ng ấn tượng với tay đặc vụ lạnh l&ugrave;ng su&yacute;t nữa &ldquo;xử&rdquo; lu&ocirc;n Thần Sấm đang lưu lạc trần gian. G&atilde; cung thủ ch&iacute;nh thức ra mắt ở Avengers, t&agrave;i b&aacute;ch ph&aacute;t b&aacute;ch tr&uacute;ng chẳng hề l&eacute;p vế bất cứ ai. Đời tư Clint Barton được đ&agrave;o s&acirc;u hơn ở phim hay Avengers: Age Of Ultron, Hawkeye đ&atilde; đưa nh&oacute;m Avengers tới nh&agrave; anh. Giữa biệt đội si&ecirc;u anh h&ugrave;ng to&agrave;n c&aacute;c FA hoặc vẫn đang hẹn h&ograve;, Hawkeye sớm một vợ ba con. T&igrave;nh y&ecirc;u s&acirc;u nặng người đ&agrave;n &ocirc;ng &iacute;t n&oacute;i d&agrave;nh cho gia đ&igrave;nh c&agrave;ng chứng minh r&otilde; r&agrave;ng sau khi Captain America v&agrave; Iron Man &ldquo;ly dị&rdquo; ở Civil War, d&ugrave; rất muốn theo team Cap nhưng Hawkeye phải chấp nhận r&uacute;t lui v&igrave; th&acirc;n nh&acirc;n. Với c&aacute;c fan ch&agrave;ng Ưng, Avengers: Infinity War l&agrave; nỗi buồn kh&oacute; qu&ecirc;n, Clint Barton mất t&iacute;ch cả phim lẫn mid credit v&agrave; after credit. D&ugrave; anh em đạo diễn Russo l&yacute; giải rằng Hawkeye c&oacute; nhiệm vụ phải l&agrave;m. Thế nhưng, cho tới giờ- Avengers: Hồi Kết sắp ra mắt, ngo&agrave;i chuyện h&eacute; lộ rằng gia đ&igrave;nh Hawkeye đ&atilde; tan biến sau c&uacute; b&uacute;ng tay của Thanos c&ograve;n anh trở th&agrave;nh Ronin, lang bạt ch&eacute;m giết mafia ở Nhật trong trailer th&igrave; ch&uacute;ng ta chẳng ch&uacute;t manh mối n&agrave;o về sứ mệnh b&iacute; mật đ&oacute;. Khả năng cao đ&acirc;y chỉ l&agrave; c&uacute; lừa nữa bởi Marvel! Những nh&acirc;n vật với sức mạnh tầm&hellip; vũ trụ xuất hiện ng&agrave;y c&agrave;ng nhiều, năng lực bắn cung đơn giản ng&agrave;y c&agrave;ng lộ r&otilde; sự thua s&uacute;t. Chưa kể c&aacute;c nh&agrave; sản xuất Marvel dường như th&iacute;ch &ldquo;d&igrave;m h&agrave;ng&rdquo; vị anh h&ugrave;ng chẳng mấy mạnh n&agrave;y. Từ kẻ l&agrave;m Thần Lừa Đảo Loki ng&atilde; sấp mặt khỏi t&agrave;u (The Avengers), Hawkeye trở th&agrave;nh g&aacute;nh nặng (Age Of Ultron), thua thảm thương cả Vision, Black Widow lẫn Black Panther (Captain America: Civil War). Ch&iacute;nh Jeremy Renner cũng từng lấy việc qu&aacute; yếu ra l&agrave;m tr&ograve; đ&ugrave;a tr&ecirc;n show truyền h&igrave;nh. Chuyện ch&agrave;ng cung thủ đ&aacute;nh nổi Thanos kh&oacute; tin chẳng thua g&igrave; Black Widow d&ugrave;ng s&uacute;ng lục bắn g&atilde; Titan. Vậy trong phần phim mới n&agrave;y, năng lực của Hawkeye liệu c&oacute; tăng l&ecirc;n khi trở th&agrave;nh Ronin? Trở lại Avengers: Hồi Kết sau thời gian mất t&iacute;ch, Hawkeye thay đổi ho&agrave;n to&agrave;n từ trang phục đến kiểu t&oacute;c. Ở Special Look mới c&ocirc;ng bố, thậm ch&iacute; cung thủ c&ograve;n &ldquo;xăm trổ&rdquo; k&iacute;n tay. Những dấu hiệu bề ngo&agrave;i gi&uacute;p kh&aacute;n giả c&agrave;ng nhận r&otilde; sự thay đổi kinh ho&agrave;ng l&uacute;c Clint Barton mất cả gia đ&igrave;nh. V&igrave; Marvel đối xử chẳng kh&aacute;c g&igrave; &ldquo;con ghẻ&rdquo;, việc Hawkeye hy sinh ở Avengers 2019 cũng nhiều khả năng xảy ra. Ở The Avengers, Hawkeye kh&ocirc;ng ngần ngại trực tiếp đối đầu c&ugrave;ng Loki nhằm trả mối th&ugrave; bị tẩy n&atilde;o. Nay khi Thanos tước của anh hết thảy, d&ugrave; yếu hơn h&agrave;ng trăm ng&agrave;n lần, chắc chắn cung thủ sẽ l&agrave;m mọi thứ để đem mọi người trở lại, hoặc &iacute;t nhất l&agrave; trả th&ugrave;. Giữa d&agrave;n sao vũ trụ điện ảnh Marvel, Jeremy Renner xếp h&agrave;ng thực lực, đ&atilde; chứng minh qua hai đề cử Oscar v&agrave; nhiều giải thưởng kh&aacute;c suốt hơn hai mươi năm sự nghiệp. Hy vọng, nhờ Avengers: Endgame, Hawkeye sẽ c&oacute; một phần phim mới ho&agrave;nh tr&aacute;ng, xứng đ&aacute;ng vị thế Avengers thế hệ đầu ti&ecirc;n. Ngo&agrave;i ra, c&aacute;c fan Hawkeye đang hy vọng được t&aacute;i ngộ anh Ưng trong phần phim ri&ecirc;ng về Black Widow ra mắt v&agrave;o 2020. &nbsp;</p>', 'AnVG_pic 4.jpeg', '2019-06-02 00:18:31', '2019-06-02 00:18:31'),
(22, '4 Lý Do Khiến Giới Trẻ Thủ Đô Không Thể Bỏ Qua Galaxy Tràng Thi', 'Sau Mipec Long Biên, Galaxy Tràng Thi là cụm rạp thứ hai thuộc hệ thống rạp Galaxy Cinema xuất hiện tại Hà Nội.', '<p>Sau Mipec Long Bi&ecirc;n, Galaxy Tr&agrave;ng Thi l&agrave; cụm rạp thứ hai thuộc hệ thống rạp Galaxy Cinema xuất hiện tại H&agrave; Nội. Liệu Galaxy Tr&agrave;ng Thi c&oacute; những điểm hấp dẫn g&igrave; để thu h&uacute;t được giới trẻ H&agrave; th&agrave;nh? 1. Vị tr&iacute; v&ocirc; c&ugrave;ng đắc địa Galaxy Tr&agrave;ng Thi tọa lạc tại tầng 4 t&ograve;a nh&agrave; Nguyễn Kim, số 10B Tr&agrave;ng Thi, quận Ho&agrave;n Kiếm. Đ&acirc;y ch&iacute;nh l&agrave; trung t&acirc;m hội tụ bản sắc văn h&oacute;a của thủ đ&ocirc; với nhiều địa điểm vui chơi giải tr&iacute;, tham quan nổi tiếng h&agrave;ng đầu. Đối diện với Galaxy Tr&agrave;ng Thi ch&iacute;nh l&agrave; Thư viện Quốc gia Việt Nam, nơi lưu trữ &ldquo;di sản văn h&oacute;a th&agrave;nh văn&rdquo; lớn nhất đất nước. Ngo&agrave;i ra, ngay gần kề nơi đ&acirc;y c&ograve;n c&oacute; nhiều địa chỉ m&agrave; bất kỳ ai đặt ch&acirc;n đến H&agrave; Nội cũng muốn gh&eacute; qua như: Hồ Gươm, khu phố cổ, Nh&agrave; Thờ Lớn, phố đi bộ Đinh Ti&ecirc;n Ho&agrave;ng,... Kh&ocirc;ng chỉ tham quan ngắm cảnh, xung quanh Galaxy Tr&agrave;ng Thi c&ograve;n c&oacute; nhiều địa chỉ nổi tiếng bởi nhiều m&oacute;n ăn ngon đặc trưng của thủ đ&ocirc; như: b&uacute;n đậu H&agrave;ng Khay, Trung t&acirc;m Kem Tr&agrave;ng Tiền, kem bờ hồ Thủy Tạ, cafe trứng Đinh Ti&ecirc;n Ho&agrave;ng, phở trộn L&atilde;n &Ocirc;ng, b&uacute;n ốc Nguyễn Si&ecirc;u, b&uacute;n chả Hương Li&ecirc;n, b&uacute;n thang Cầu Gỗ, hoa quả dầm T&ocirc; Tịch... Từ Galaxy Tr&agrave;ng Thi, chỉ mất một &iacute;t ph&uacute;t, c&aacute;c bạn c&oacute; thể t&igrave;m thấy một loạt địa chỉ ăn uống nức danh H&agrave; th&agrave;nh 2. Cơ sở vật chất hiện đại v&agrave; th&acirc;n thiện với m&ocirc;i trường Với 4 ph&ograve;ng chiếu, Galaxy Tr&agrave;ng Thi tr&igrave;nh chiếu đủ hai định dạng 2D v&agrave; 3D phục vụ tối đa nhu cầu của kh&aacute;ch h&agrave;ng. Hệ thống &acirc;m thanh v&ograve;m Dolby 7.1 hiện đại sẽ mang đến cho kh&aacute;n giả những trải nghiệm sống động như thật. Chưa dừng lại ở đấy, Galaxy Tr&agrave;ng Thi c&ograve;n sở hữu nhiều yếu tố đặc biệt, tạo n&ecirc;n sự kh&aacute;c biệt, nổi bật với c&aacute;c cụm rạp kh&aacute;c của Galaxy Cinema. Đầu ti&ecirc;n, Galaxy Tr&agrave;ng Thi l&agrave; rạp duy nhất tr&ecirc;n to&agrave;n quốc sử dụng to&agrave;n bộ m&aacute;y chiếu laser, từ đ&oacute; đem lại cho người xem những thước phim v&ocirc; c&ugrave;ng rực rỡ, xinh đẹp một c&aacute;ch đồng đều, to&agrave;n diện tr&ecirc;n to&agrave;n m&agrave;n h&igrave;nh. Kh&ocirc;ng chỉ c&oacute; vậy, việc sử dụng m&aacute;y chiếu laser c&ograve;n gi&uacute;p bảo vệ m&ocirc;i trường v&igrave; tiết kiệm điện năng (chỉ bằng 1/3 c&aacute;c loại m&aacute;y th&ocirc;ng thường) v&agrave; giảm thải chất rắn (b&oacute;ng đ&egrave;n sau khi sử dụng). Đ&acirc;y ch&iacute;nh l&agrave; động th&aacute;i tiếp theo nhằm chung tay x&acirc;y dựng một h&agrave;nh tinh xanh từ Galaxy Cinema sau việc sử dụng hơn 1000 tấm pin năng lượng mặt trời, th&ocirc;ng qua đ&oacute; giảm tải gần 50% lượng điện ti&ecirc;u thụ th&ocirc;ng thường. Một điểm kh&aacute;c biệt nữa đ&oacute; ch&iacute;nh l&agrave; thay v&igrave; sử dựng ghế nỉ, to&agrave;n bộ ghế ngồi tại Galaxy Tr&agrave;ng Thi l&agrave; ghế da với k&iacute;ch thước lớn hơn. Kh&ocirc;ng chỉ l&agrave; yếu tố thẩm mỹ, những chiếc ghế da n&agrave;y chắc chắn c&ograve;n đem đến cho kh&aacute;n giả cảm gi&aacute;c thoải m&aacute;i, thư gi&atilde;n hơn rất nhiều khi thưởng thức những bộ phim tại rạp. Galaxy Tr&agrave;ng Thi l&agrave; rạp duy nhất sử dụng ghế da thay cho ghế nỉ, đem đến sự sang trọng v&agrave; thoải m&aacute;i cho người xem 3. Thiết kế kh&ocirc;ng gian sang chảnh, trẻ trung B&ecirc;n cạnh việc đầu tư c&ocirc;ng nghệ hiện đại, thiết bị t&acirc;n tiến v&agrave; x&acirc;y dựng đ&uacute;ng theo ti&ecirc;u chuẩn rạp phim quốc tế, nội thất Galaxy Tr&agrave;ng Thi được thiết kế ho&agrave;n to&agrave;n mới mẻ v&agrave; trẻ trung nhằm phục vu nhu cầu &quot;selfie&quot; của giới trẻ hiện đại. Từ khu vực mua v&eacute; l&ecirc;n đến tầng 5 ph&ograve;ng chiếu, chắc chắn sẽ c&oacute; nhiều g&oacute;c ph&ograve;ng, bối cảnh khiến c&aacute;c bạn trẻ &ldquo;chết m&ecirc; chết mệt&rdquo; v&agrave; kh&ocirc;ng cầm được, chỉ muốn lấy m&aacute;y ảnh ra để chụp lại ngay tức th&igrave;. Loạt kh&ocirc;ng gian sống ảo cực chất tại Galaxy Tr&agrave;ng Thi 4. Đội ngũ nh&acirc;n vi&ecirc;n nhiệt t&igrave;nh, ưu đ&atilde;i hấp dẫn Với thương hiệu uy t&iacute;n của Galaxy Cinema đ&atilde; x&acirc;y dựng từ 16 năm qua, cụm rạp n&agrave;y nhất định sẽ khiến kh&aacute;n giả thủ đ&ocirc; h&agrave;i l&ograve;ng bởi dịch vụ th&acirc;n thiện. Đặc biệt, mức gi&aacute; v&ocirc; c&ugrave;ng &ldquo;kinh tế&rdquo; c&ugrave;ng việc &aacute;p dụng nhiều chương tr&igrave;nh khuyến m&atilde;i hấp dẫn l&agrave; ưu điểm nổi bật của Galaxy Cinema m&agrave; bất kỳ ai cũng kh&ocirc;ng thể bỏ qua. Điển h&igrave;nh như từ ng&agrave;y 5.5 - 1.6.2019, khi mua 02 v&eacute; xem phim tại Galaxy Tr&agrave;ng Thi, c&aacute;c Stars sẽ được nhận ngay 01&nbsp;thẻ c&agrave;o&nbsp;(tỷ lệ tr&uacute;ng thưởng 100%) để&nbsp;c&oacute; cơ hội tr&uacute;ng&nbsp;một loạt phần qu&agrave; si&ecirc;u hấp dẫn: Xe&nbsp;máy UMG Selena 125cc, vali SANTA BARBARA, voucher giảm 10% balo Aber, voucher xem phim, bắp ngọt, nước ngọt, bóp Canvas.&nbsp; Vậy c&ograve;n chần chừ g&igrave; nữa m&agrave; kh&ocirc;ng nhanh ch&acirc;n đến Galaxy Tr&agrave;ng Thi đi n&agrave;o! Rạp đ&atilde; ch&iacute;nh thức đi v&agrave;o hoạt động từ ng&agrave;y 27.4.2019.</p>', 'uS7b_pic 3.jpg', '2019-06-02 00:24:12', '2019-06-02 00:24:12');
INSERT INTO `tintucphim` (`id`, `TieuDe`, `TomTat`, `NoiDung`, `Hinh`, `created_at`, `updated_at`) VALUES
(23, 'Iron Man Tony Stark: Công Thần Sáng Lập MCU', 'Từ một nhân vật hạng B chẳng mấy ai biết đến, Iron Man Tony Stark đã trở thành siêu anh hùng nổi danh hàng đầu thế giới.', '<p>Từ một nh&acirc;n vật hạng B chẳng mấy ai biết đến, Iron Man Tony Stark đ&atilde; trở th&agrave;nh si&ecirc;u anh h&ugrave;ng nổi danh h&agrave;ng đầu thế giới, c&oacute; phần lấn &aacute;t cả những Superman, Batman, Spider-Man trong thập kỷ vừa qua. Độ tuổi trung ni&ecirc;n, chiều cao vừa đủ, vẻ ngo&agrave;i lịch l&atilde;m c&ugrave;ng h&agrave;ng ria m&eacute;p nam t&iacute;nh&hellip; &nbsp;Anthony Edward &quot;Tony&quot; Stark l&agrave; con trai tỷ ph&uacute; c&ocirc;ng nghệ Howard Stark, t&agrave;i năng n&agrave;o k&eacute;m g&igrave; người cha vĩ đại.</p>\r\n\r\n<p><img alt=\"iron man\" src=\"https://www.galaxycine.vn/media/2019/3/20/mv5bmti5ody5ntuzmf5bml5banbnxkftztcwotazntizmw--v1-sy1000-cr0-0-1420-1000-al-_1553074176319.jpg\" style=\"height:507px; width:720px\" /></p>\r\n\r\n<p>Tony c&oacute; tất cả từ tiền bạc đến danh vọng khi l&agrave; nh&agrave; cung cấp vũ kh&iacute; cho ch&iacute;nh phủ Mỹ. Cuộc đời tay chơi Stark c&oacute; lẽ cứ quay cuồng với những ph&aacute;t minh c&ugrave;ng c&aacute;c cuộc vui th&acirc;u đ&ecirc;m suốt s&aacute;ng nếu anh kh&ocirc;ng bất ngờ rơi v&agrave;o tay nh&oacute;m qu&acirc;n phiến loạn. Chịu cảnh giam cầm, thoi th&oacute;p v&igrave; mảnh đạn gặm trong tim, Tony mới nhận ra m&igrave;nh cần đổi kh&aacute;c. Được người bạn mới Yinsen gi&uacute;p sức, Tony Stark chế tạo ra bộ gi&aacute;p chiến đấu ở ho&agrave;n cảnh khốn khổ nhất. Anh ti&ecirc;u diệt đ&aacute;m phiến qu&acirc;n, trở th&agrave;nh Iron Man. C&aacute;i chết của Yinsen m&atilde;i m&atilde;i thay đổi cuộc đời Tony. Ng&agrave;i tỷ ph&uacute; chấm dứt ho&agrave;n to&agrave;n việc bu&ocirc;n b&aacute;n vũ kh&iacute;. &nbsp; Dĩ nhi&ecirc;n, kh&ocirc;ng thể kh&ocirc;ng nhắc đến mối t&igrave;nh với c&ocirc; n&agrave;ng Pepper Potts l&agrave; điểm tựa vững chắc cho Tony Stark. Người phụ nữ mạnh mẽ, th&ocirc;ng minh tuy chẳng sở hữu si&ecirc;u năng lực phi thường nhưng lu&ocirc;n l&agrave; hậu phương vững chắc v&agrave; nhiều lần gi&uacute;p Tony trong t&igrave;nh huống ng&agrave;n c&acirc;n treo sợi t&oacute;c. Giữa l&uacute;c c&aacute;c si&ecirc;u anh h&ugrave;ng kh&aacute;c như Peter Parker, Bruce Wayne hay Clark Kent phải khổ sở giấu đi danh t&iacute;nh, chịu hiểu lầm, bị mất người y&ecirc;u&hellip; Tony Stark đ&atilde; ki&ecirc;u ngạo ngẩng cao đầu, tự tin c&ocirc;ng bố cho to&agrave;n thế giới &ndash; &ldquo;T&ocirc;i l&agrave; Iron Man.&rdquo; Avengers: Endgame l&agrave; bộ phim thứ mười Iron Man xuất hiện tại MCU. Từ kẻ bất cần đời, anh thay đổi dần &ldquo;người&rdquo; hơn, nh&acirc;n văn hơn. Đ&ocirc;i mắt nh&agrave; tỷ ph&uacute; bớt đi sự ng&ocirc;ng cuồng, th&ecirc;m nhiều trầm tĩnh. Sự xuất hiện của những kẻ ngo&agrave;i h&agrave;nh tinh như Thor, cơn &aacute;c mộng về c&aacute;i chết thảm khốc m&agrave; biệt đội Avengers phải đối mặt đ&atilde; d&agrave;y v&ograve; Tony, khiến anh ng&agrave;y c&agrave;ng cẩn trọng v&agrave; chế tạo ra th&ecirc;m nhiều thứ vũ kh&iacute; si&ecirc;u việt hơn. Đỉnh cao th&agrave;nh tựu l&agrave; bộ gi&aacute;p nano trong Avengers: Infinity War, khiến hết thảy kh&aacute;n giả đều phải trầm trồ kinh ngạc v&agrave; ngay cả t&ecirc;n Titan Thanos cũng phải đổ một giọt m&aacute;u. C&aacute; t&iacute;nh độc lập v&agrave; ki&ecirc;u ngạo khiến Tony Stark c&oacute; vẻ xa c&aacute;ch mọi người. Tuy nhi&ecirc;n, tr&ecirc;n thực tế anh l&agrave; kẻ bỏ ra rất nhiều t&igrave;nh cảm. Chẳng l&atilde;nh đạo tinh thần như Captain America nhưng anh lại l&agrave; nh&agrave; t&agrave;i trợ nhiệt t&igrave;nh. Trụ sở Avengers với c&ocirc;ng nghệ tối t&acirc;n c&ugrave;ng kho vũ kh&iacute; hiện đại nhất lu&ocirc;n được Tony chuẩn bị cho biệt đội si&ecirc;u anh h&ugrave;ng. Nh&agrave; tỷ ph&uacute; ngăn cản Người Nhện &ldquo;h&agrave;nh hiệp&rdquo; chỉ v&igrave; cậu c&ograve;n qu&aacute; nhỏ. Tuy nhi&ecirc;n, ở Avengers: Infinity War, trước Peter Parker trẻ tuổi đầy nhiệt huyết, Tony bằng l&ograve;ng c&ocirc;ng nhận cậu nh&oacute;c l&agrave; th&agrave;nh vi&ecirc;n Avengers. Th&ocirc;ng minh, c&aacute; t&iacute;nh, sẵn s&agrave;ng hy sinh t&iacute;nh mạng để bảo vệ tr&aacute;i đất&hellip; Tony Stark lu&ocirc;n l&agrave; si&ecirc;u anh h&ugrave;ng được h&acirc;m mộ nhất MCU. Chẳng c&oacute; g&igrave; kh&oacute; hiểu khi d&ugrave; l&agrave;m tất cả chỉ để bảo vệ cậu bạn th&acirc;n thiết Bucky, Captain America vẫn trở th&agrave;nh &ldquo;tội đồ&rdquo; trong mắt nhiều fan MCU v&igrave; để xảy ra Civil War với Người Sắt. Kết th&uacute;c Cuộc Chiến V&ocirc; Cực đau thương, Iron Man bất lực chứng kiến những người bạn chiến đấu tan biến th&agrave;nh tro bụi. Bản th&acirc;n anh cũng bị kẹt ở h&agrave;nh tinh Titan c&ugrave;ng c&ocirc; n&agrave;ng nửa người nửa m&aacute;y Nebula. Khi trailer đầu ti&ecirc;n Avengers: Endgame được tung ra, chứng kiến cảnh Tony thoi th&oacute;p chờ chết, h&agrave;ng loạt người h&acirc;m mộ đ&atilde; tweet cho Cơ quan h&agrave;ng kh&ocirc;ng v&agrave; vũ trụ Hoa Kỳ NASA để y&ecirc;u cầu họ cứu Iron Man. C&oacute; lẽ, trước sự lo lắng qu&aacute; lớn của người h&acirc;m mộ về Người Sắt, Marvel đ&atilde; chiều l&ograve;ng kh&aacute;n giả bằng trailer 2 với sự xuất hiện của Tony tại Tr&aacute;i Đất. &ldquo;Thi&ecirc;n t&agrave;i, tỷ ph&uacute;, tay chơi v&agrave; nh&agrave; từ thiện&rdquo; Tony Stark sẽ l&agrave;m g&igrave; để cứu vũ trụ khỏi t&igrave;nh thế thảm thương hiện tại, để sự đ&aacute;nh đổi Doctor Strange d&agrave;nh cho anh kh&ocirc;ng l&agrave; v&ocirc; nghĩa? Th&ecirc;m nữa, anh c&ugrave;ng Steve Rogers đối mặt thế n&agrave;o sau cuộc nội chiến tổn thương cả hai? &nbsp; L&agrave; truyền kỳ tr&ecirc;n m&agrave;n ảnh, c&acirc;u chuyện về Iron Man cũng l&agrave; huyền thoại ngo&agrave;i đời. Vai diễn Iron Man đ&atilde; gi&uacute;p Robert Downey Jr. vực dậy sự nghiệp đang ở b&ecirc;n bờ vực thẳm, đưa anh lần nữa l&ecirc;n đến đỉnh cao nghề nghiệp. Iron Man gi&uacute;p Marvel từ một studio sắp ph&aacute; sản đứng dậy th&agrave;nh c&ocirc;ng, đặt nền m&oacute;ng vững chắc cho đế chế Marvel h&ugrave;ng mạnh ng&agrave;y nay. Dĩ nhi&ecirc;n, Marvel đền đ&aacute;p &ldquo;đại c&ocirc;ng thần&rdquo; hết sức xứng đ&aacute;ng bằng khoản lương cứng h&agrave;ng chục triệu $ cộng th&ecirc;m phần trăm doanh thu phim. Số phận Tony sau Avengers: Hồi Kết vẫn l&agrave; dấu chấm hỏi n&ecirc;n việc anh c&oacute; xuất hiện ở Spider-Man: Far From Home hay kh&ocirc;ng vẫn đang l&agrave; điều b&iacute; ẩn. Ngo&agrave;i ra, sức ảnh hưởng khổng lồ Iron Man tạo ra hiện nay phải kể đến c&ocirc;ng lao của ng&agrave;i gi&aacute;m đốc điều h&agrave;nh Marvel - Kevin Feige. Giữa l&uacute;c cả thế giới vẫn đang mải m&ecirc; sản xuất phim chuỗi, vị l&atilde;nh đạo t&agrave;i ba n&agrave;y đ&atilde; c&oacute; những &yacute; nghĩ &ldquo;Cao hơn. Nhanh hơn. Xa hơn&rdquo; khi x&acirc;y dựng ra một vũ trụ điện ảnh. Bắt đầu từ Iron Man, Marvel đ&atilde; x&acirc;y dựng n&ecirc;n MCU đi trước c&aacute;c đối thủ khoảng c&aacute;ch xa vời vợi. V&agrave; chắc chắn rằng, d&ugrave; sau n&agrave;y đế chế MCU c&oacute; đạt tới tầm cao n&agrave;o, Iron Man Tony Stark vẫn lu&ocirc;n l&agrave; c&ocirc;ng thần vĩ đại nhất trong tim người h&acirc;m mộ vũ trụ điện ảnh Marvel.&nbsp;</p>', 'rJme_2-1499057920127_1553073553160.jpg', '2019-06-02 10:09:18', '2019-06-02 10:09:18');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banve`
--
ALTER TABLE `banve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banve_idtaikhoan_foreign` (`idTaiKhoan`),
  ADD KEY `banve_idghe_foreign` (`idGhe`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhgia_idphim_foreign` (`idPhim`),
  ADD KEY `danhgia_idtaikhoan_foreign` (`idTaiKhoan`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ghe_idrap_foreign` (`idRap`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ngaychieu`
--
ALTER TABLE `ngaychieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phim_idtheloaiphim_foreign` (`idTheLoaiPhim`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rap`
--
ALTER TABLE `rap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suatchieu_idngaychieu_foreign` (`idNgaychieu`),
  ADD KEY `suatchieu_idphim_foreign` (`idPhim`),
  ADD KEY `suatchieu_idrap_foreign` (`idRap`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `taikhoan_email_unique` (`email`),
  ADD KEY `taikhoan_idquyen_foreign` (`idQuyen`);

--
-- Chỉ mục cho bảng `theloaiphim`
--
ALTER TABLE `theloaiphim`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintucphim`
--
ALTER TABLE `tintucphim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banve`
--
ALTER TABLE `banve`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ghe`
--
ALTER TABLE `ghe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `ngaychieu`
--
ALTER TABLE `ngaychieu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `rap`
--
ALTER TABLE `rap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `theloaiphim`
--
ALTER TABLE `theloaiphim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tintucphim`
--
ALTER TABLE `tintucphim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banve`
--
ALTER TABLE `banve`
  ADD CONSTRAINT `banve_idghe_foreign` FOREIGN KEY (`idGhe`) REFERENCES `ghe` (`id`),
  ADD CONSTRAINT `banve_idtaikhoan_foreign` FOREIGN KEY (`idTaiKhoan`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_idphim_foreign` FOREIGN KEY (`idPhim`) REFERENCES `phim` (`id`),
  ADD CONSTRAINT `danhgia_idtaikhoan_foreign` FOREIGN KEY (`idTaiKhoan`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD CONSTRAINT `ghe_idrap_foreign` FOREIGN KEY (`idRap`) REFERENCES `rap` (`id`);

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `phim_idtheloaiphim_foreign` FOREIGN KEY (`idTheLoaiPhim`) REFERENCES `theloaiphim` (`id`);

--
-- Các ràng buộc cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD CONSTRAINT `suatchieu_idngaychieu_foreign` FOREIGN KEY (`idNgaychieu`) REFERENCES `ngaychieu` (`id`),
  ADD CONSTRAINT `suatchieu_idphim_foreign` FOREIGN KEY (`idPhim`) REFERENCES `phim` (`id`),
  ADD CONSTRAINT `suatchieu_idrap_foreign` FOREIGN KEY (`idRap`) REFERENCES `rap` (`id`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_idquyen_foreign` FOREIGN KEY (`idQuyen`) REFERENCES `quyen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
