-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 07, 2020 at 12:46 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `calc`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `small_src` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `src`, `small_src`, `is_active`) VALUES
(1, 'Ноутбук Lenovo IdeaPad 110-15IBR (80T700С2RK)', 'Устройство справится с любыми профессиональными, бытовыми и учебными задачами, включая просмотр качественного видео и работу с офисными приложениями. Оно снабжено современным процессором Intel и оперативной памятью с большим объёмом.', 18990, 'uploads/7.jpg', 'uploads/mini/7.jpg', 1),
(2, 'Ноутбук HP 15-bs516ur 2GF21EA', 'Встроенный адаптер Wi-Fi a/c поддерживает такую же высокую скорость передачи данных, как линия Ethernet. При этом он сохраняет устойчивое соединение с роутером на большом расстоянии. Кроме того, ноутбук снабжён всем необходимым для подключения периферийного оборудования, включая порты USB и HDMI, а также передатчик Bluetooth.', 22500, 'uploads/5a48e1b05e92bbc5a50a809e516e1edf.jpg', 'uploads/mini/5a48e1b05e92bbc5a50a809e516e1edf.jpg', 1),
(16, 'Тест', 'тест', 11111, 'uploads/64270.jpg', 'uploads/mini/64270.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
