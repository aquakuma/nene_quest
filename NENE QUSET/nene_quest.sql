-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 
-- サーバのバージョン： 10.4.6-MariaDB
-- PHP のバージョン: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `nene_quest`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `players`
--

CREATE TABLE `players` (
  `id` int(10) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `score` char(7) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `players`
--

INSERT INTO `players` (`id`, `name`, `score`, `time`, `date`) VALUES
(1, 'ひふみ', '100', '00:00:50', '2020-02-28'),
(2, 'こう', '40', '00:01:11', '2020-03-01'),
(3, 'あおば', '50', '00:01:17', '2020-03-02'),
(4, 'りん', '30', '00:01:27', '2020-02-22'),
(5, 'はじめ', '70', '00:01:07', '2020-02-12'),
(6, 'ゆん', '15', '00:01:47', '2020-02-15'),
(7, 'ねね', '101', '00:00:57', '2020-02-26'),
(8, 'うみこ', '125', '00:00:47', '2020-02-25'),
(9, 'もみじ', '35', '00:01:37', '2020-02-17'),
(10, 'つばめ', '45', '00:01:07', '2020-02-18'),
(12, 'たち', '6', '00:00:14', '2020-03-02');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `players`
--
ALTER TABLE `players`
  ADD KEY `id` (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
