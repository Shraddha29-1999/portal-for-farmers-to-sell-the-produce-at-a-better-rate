-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 09:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobileno` int(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `username`, `mobileno`, `city`, `address`, `password`, `created_at`) VALUES
(18, 'shraddha g', 2147483647, 'mumbai', 'asx', '$2y$10$hus3A9e7eWa.hwJ5vZyvzeqUrHE7B73kMyfQ9ZmHctH5mYA1NW1va', '2020-11-01 14:40:28'),
(19, 'gs', 2147483647, 'ned', 'as', '$2y$10$dlIfo1HfXqNCLcOIV8aVRumi0xtZaNmxKgp.mfBrAqHsTAezC.jd.', '2020-11-01 14:46:08'),
(20, 'bbb', 2147483647, 'asxas', 'as', '$2y$10$rbiUj1eaNhGGMW4fKIsJA.UbXAxxxGPeWybERnOyZjpdhNtpABzDG', '2020-11-01 14:48:40'),
(21, 'sgg', 2147483647, 'nanded', 'as', '$2y$10$uQ2FEj8izFEJMIoM0hZTI.s286alF7glrwM1E9pVmyzl1JmjcN69u', '2020-11-01 15:13:31'),
(22, 'jojo', 2147483647, 'mumbai', 'as', '$2y$10$daNbVUxm4YS3h6DTYgah/OIeehCKucdIZHOeW8xOKKy2OwF9iEJki', '2020-11-01 15:17:47'),
(23, 'mane', 2147483647, 'ss', 'sdc', '$2y$10$6qJ5jfYdeHI3HmCO76Q21OIrHcw8aU1/N8Yi6eVHdFiIzAZHA98Vu', '2020-11-01 15:22:11'),
(24, 'v shraddha', 2147483647, 'hyd', 'asd', '$2y$10$0VMrnHIAIOvhTlpmX4BcNu5RJcPFlb7mxTOpk6X7YPrBAwK/SGlMK', '2020-11-02 13:20:22'),
(25, 'bbbb', 2147483647, 'mumbai', 'as', '$2y$10$S4KGtBVvpN5y.Yc7NLAwKudaMD6lXvZec7rfABvpPSS/A0GOtx7Ri', '2020-11-02 18:25:11'),
(26, 'ko', 1234567890, 'ss', 'm', '$2y$10$fGvXg7eEpUOKqVIXzpgEsO4hYGXfNM/NOS3y1xYKuXEb/IDZLh.Jy', '2020-11-15 15:24:33'),
(27, 'mo', 2147483647, 'sdc', 'sd', '$2y$10$P.kojHbKyx02nho.xuF0.uc5lT8qm87PVJzY0r3OUmDf.0xz30jvK', '2020-11-17 13:42:58'),
(28, 'kkkk', 2147483647, 'nanded', 'jhgfd', '$2y$10$c2bjI1a17pI6DwBl8E2Ox.iINOoS0b6MKd8j30qMR/JRdtkdLLbgy', '2020-11-28 14:20:44'),
(29, 'shu', 1234567890, 'ned', 'as', '$2y$10$4XVrmggwYaCauRVZG2oT6e9OE3zVAuBv7Xpwdad1LEoVlEYKBOKIq', '2020-12-08 17:42:49'),
(30, 'momo', 2147483647, 'nanded', 'assd', '$2y$10$7saUF.0gq1Xss4l80QVyCuDf.KOQiAJEoCyHNth/bY2ifC/KtxWcq', '2020-12-10 13:12:44'),
(31, 'mk', 2147483647, 'ss', 'ss', '$2y$10$DsZCJJfMhEVXTYVQIqhDKevFE7jBcFlfDW8LcX2qhOhUOZ7.j3ypm', '2020-12-18 09:56:42'),
(32, 'vaish', 1234543223, 'nanded', 'zs', '$2y$10$1M/WsiyFpUB/ZkpBmrapcuSKSuNYIPhZ1a.YtLicaa/QR6omOY5d.', '2020-12-19 07:07:39'),
(33, 'paddy', 2147483647, 'Nanded', 'Nd-41 Jay bhavani nager , cidco , nanded', '$2y$10$TxstGskLG1C/YH7tAuiFg.hk7lCq8sQM1WfAwxXtxmKkyqcMnJYsi', '2020-12-29 18:09:04'),
(34, 'shraddha gundale', 2147483647, 'nanded', 'ggggg', '$2y$10$8IHpMgftWMKg.B1nyuRvVeJvFB01WbUfN3xHaAy4udu.2REpnuz5q', '2020-12-30 12:48:06'),
(35, '123456', 78, 'Nanded', 'sdg', '$2y$10$y2Ac8tswgJoNx/qS5RqdAOdxC35J0nTpsm/oN4DvO5EfHYcg446r2', '2020-12-30 12:50:15'),
(36, 'paddy g', 2147483647, 'ned', 'dsg hj', '$2y$10$nQwrNcuZH9oP8Sw.IlNp9emKiH9jdLeigxBroqFFSoxHPX/RiSjTm', '2020-12-30 12:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_product`
--

CREATE TABLE `farmer_product` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `prodesc` varchar(255) NOT NULL,
  `qty` int(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `pimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer_product`
--

INSERT INTO `farmer_product` (`id`, `name`, `price`, `prodesc`, `qty`, `category`, `pimage`) VALUES
(44, 'carrot', 500, 'dfghjkjhg', 33, 'Vegetable', 'carrots.jpg'),
(65, 'mango', 100, 'fresh mangoes', 3000, 'Vegetable', 'fruit1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `pro_name` varchar(60) NOT NULL,
  `pro_price` int(20) NOT NULL,
  `pro_desc` varchar(200) NOT NULL,
  `pro_img` varchar(200) NOT NULL,
  `pro_quant` int(200) NOT NULL,
  `pro_cat` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_name`, `pro_price`, `pro_desc`, `pro_img`, `pro_quant`, `pro_cat`) VALUES
(5, 'orange', 30, 'gfd', 'carrot.jpg', 2, 0),
(7, 'apple', 30, 'sa', 'carrot.jpg', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobileno` int(12) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mobileno`, `city`, `address`, `password`, `created_at`) VALUES
(1, 'shubham', 1234567890, 'nanded', 'nanded', '$2y$10$MwbTCGK4VOLb9yGEQZ0ZNODeO3cnfidiKxK0XVqGhC6JUmW6DIm2K', '2020-10-17 17:58:18'),
(2, 'shraddha', 1234567890, 'nanded', 'nanded', '$2y$10$cUzFICV0lwjTARKuPjz.3uOCrDy5TVok9ufYBnIelaLx9OvOOljRe', '2020-10-17 17:59:15'),
(3, 'shaddu', 2147483647, 'ned', 'g', '$2y$10$yd.IjkpxV4gRXfbObYGyPeBVM6Eew8fU62VmWOtTzQo2hvbmUMXfi', '2020-10-17 18:01:08'),
(4, 'yash', 987654345, 'hyd', 'nn', '$2y$10$Ez7TNZKngLnBVGFNJwXYP.dFgkj0q16JCKtwYkeZ9da3RDJo3.HIK', '2020-10-27 12:53:36'),
(5, 'ff', 1234567890, 'nanded', 'ned', '$2y$10$25ex3MGFPB53EwgM9rf7ZOH696LE5YYqEFpqdiYIvcbgY9lz5MeVS', '2020-10-28 15:18:55'),
(6, 'gugu', 765434567, 'ss', 's', '$2y$10$2Gf7NJCWokFTFshvFjerYOMMd5Irx.9D4S.HeBjS1Mz3FqNHUcCyG', '2020-10-30 13:37:31'),
(7, 'yoyo', 987654356, 'mumbai', 'oiuy', '$2y$10$Mj/oaJ7BPLC1RK5TV940b.RyE9T6JIQczUtCNcTtax4./s5NndOXe', '2020-10-31 18:09:06'),
(8, 'kk', 2147483647, 's', 'xz', '$2y$10$gnOAphsPyxwCoOb9duD1veFTeHRYF3PTym7s1DtBQ4UU/LWVTzuvG', '2020-11-01 13:27:04'),
(9, 'gsss', 2147483647, 'as', 'wased', '$2y$10$GEDIi5vj/nuSGjIlpsjBGe8PrwNxSbITTr3RvF9I1yUS5XySer8Vq', '2020-11-01 15:12:36'),
(10, 'anji', 2147483647, 'goa', 'sdf', '$2y$10$YefXbvmIMmMf3M4z7.X3oOJgFh1bmt7bsukkUVrcuf/x3vi/QQu.W', '2020-11-01 15:20:23'),
(11, 'gs', 2147483647, 'mumbai', 'as', '$2y$10$XBhPgLLOYndXpHbvu4Heyu4a5TWaa.nlVJRP8oD7o7WQVLypmPGSK', '2020-11-02 13:12:23'),
(12, 'shraddha v', 2147483647, 'pune', 'sdfg', '$2y$10$S/f5QV2MMqP9k88sPlW1UeATfAXJHPVbhXYepbtruuUOAafA7nYyu', '2020-11-02 13:18:26'),
(13, 'kokoo', 2147483647, 'ned', 'sd', '$2y$10$jd6X3e3QNq3CDFE/YoWrZejjg2yD2TX37Ejjpwq63/wxSFf2mso1G', '2020-11-02 18:24:05'),
(14, 'mona', 2147483647, 'nanded', 'asx', '$2y$10$vx86HFqvQTB749N0vXclr.DyCPUg8xhW2orj2dfKySb20KZGtH59G', '2020-11-17 12:27:08'),
(15, 'kiki', 2147483647, 'ned', 'sdfghj', '$2y$10$IqNuip4C4sU5ftlFREP61uqEQc0QW3BcaNBsz1dF2QZuV4ErgykPq', '2020-11-28 14:19:29'),
(16, 'seemag', 2147483647, 'nanded', 'ggg', '$2y$10$G8R/Pz73EUMnIztzje6yHOe4SBntyt2c2/tAORvDP925la7Q1ZIgC', '2020-12-14 15:05:28'),
(17, 'tuttu', 2147483647, 'nanded', 'rrr', '$2y$10$wCxOKFc2XOjEsXnwNCFgy.XN2OUnh8qE5QIWEt3y6l4Te3zJNJ4TO', '2020-12-18 09:55:04'),
(18, 'vaish', 1232123432, 'ss', 'aa', '$2y$10$IUIlbisF3c3LrH94bXXyGOkngVdYwvSgiAIR./420pIWO9UI3Ffmy', '2020-12-19 06:57:34'),
(19, 'paddy', 2147483647, 'Nanded', 'Nd-41 Jay bhavani nager , cidco , nanded', '$2y$10$.6YehArR3k6FXLVwvAX3xOKiz.eduzeg1bwxYLyFg0Pwhe7oXtiey', '2020-12-29 18:07:25'),
(20, 'komal', 456787654, 'hydrabad', 'gsjl hl', '$2y$10$ZRiBUS7OKxqsaazfKw53o.efU.kFIlR79m/AnT5xcablpmZvQTYFu', '2020-12-29 18:49:19'),
(21, 'shraddhag', 2147483647, 'Nanded', 'Nd-41 Jay bhavani nager , cidco , nanded', '$2y$10$7Uh2K4WQMe/J.tcQHju.j.s6VNL1N1pRVm/N0ejE5kyRlaCvbhdoC', '2020-12-30 12:22:41'),
(22, 'komal j', 2147483647, 'Nanded', 'Nd-41 Jay bhavani nager , cidco , nanded', '$2y$10$aMygUdKPw7K9GGKdLHUhkeOPJISI50c7vLdzZegVVoe/4lO.RdiWq', '2020-12-30 12:56:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_product`
--
ALTER TABLE `farmer_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `farmer_product`
--
ALTER TABLE `farmer_product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
