-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Чрв 03 2019 р., 00:20
-- Версія сервера: 10.1.39-MariaDB
-- Версія PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `registration`
--

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `picture`) VALUES
(1, 'viktor', 'admin@admin.ua', '25d55ad283aa400af464c76d713c07ad', 'uploads/puzzle.jpg'),
(2, 'viktor2', 'admin2@admin.ua', 'a9fe2e71c6b43e95a9a431f65e894714', 'uploads/2.jpg'),
(3, 'dd', 'dd@dd.dd', '1aabac6d068eef6a7bad3fdf50a05cc8', 'uploads/3.jpg'),
(4, 'v1', 'aa@a.ua', '202cb962ac59075b964b07152d234b70', 'uploads/4.jpg'),
(5, '1', 'd@a.aa', '202cb962ac59075b964b07152d234b70', 'uploads/5.jpg'),
(6, '22', 'a2@a2.ua', '202cb962ac59075b964b07152d234b70', 'uploads/6.jpg'),
(7, 'cc', 'c@c.yycc', '9df62e693988eb4e1e1444ece0578579', 'uploads/7.jpg'),
(8, 'bb', 'ddb@dd.dd', '202cb962ac59075b964b07152d234b70', 'uploads/8.jpg'),
(9, 'w', 'w@w.yy', '6512bd43d9caa6e02c990b0a82652dca', 'uploads/9.jpg'),
(10, 'ww', 'g@m.ff', '3295c76acbf4caaed33c36b1b5fc2cb1', 'uploads/10.jpg'),
(11, 'mm', 'mm@mm.ua', '9fe8593a8a330607d76796b35c64c600', 'uploads/puzzle.jpg'),
(12, 'ff', 'ff@bb.ua', '250cf8b51c773f3f8dc8b4be867a9a02', 'uploads/img_avatar1.png'),
(13, 'sd', 'sd@gh.yu', '99c5e07b4d5de9d18c350cdf64c5aa3d', 'uploads/left3.png'),
(14, 'nmk', 'klj@jkl.kl', '99c5e07b4d5de9d18c350cdf64c5aa3d', 'uploads/img_avatar1.png'),
(15, 'aa', 'aa@aa.aa', '47bce5c74f589f4867dbd57e9ca9f808', 'uploads/devopsteam.jpg'),
(16, 'ssss', 'ss@ss.ss', '9f6e6800cfae7749eb6c486619254b9c', 'uploads/right1.png'),
(17, 'hhhhhh', 'hh@hh.hh', '526773a918780d6a31c569d638cf4a07', 'uploads/1.jpg'),
(18, 'x', 'x@x.x', '9dd4e461268c8034f5c8564e155c67a6', 'uploads/4.jpg'),
(19, 'c', 'c@c.c', '4a8a08f09d37b73795649038408b5f33', 'uploads/1.jpg'),
(20, 'vv', 'vv@vv.vv', 'c4055e3a20b6b3af3d10590ea446ef6c', 'uploads/2.jpg'),
(21, 'aaaa', 'aa@vv.nn', '4124bc0a9335c27f086f24ba207a4912', 'uploads/4.jpg'),
(22, 'sss', 'sss@sss.ss', '9f6e6800cfae7749eb6c486619254b9c', 'uploads/BL.png'),
(23, 'fff', 'fff@ff.ff', '633de4b0c14ca52ea2432a3c8a5c4c31', 'uploads/BR.png'),
(24, 'gg', 'gg@gg.gg', '73c18c59a39b18382081ec00bb456d43', 'uploads/calculator.png'),
(25, 'hhh', 'hh@hhhh.hhh', '5e36941b3d856737e81516acd45edc50', 'uploads/devopsteam.jpg'),
(26, 'rrr', 'rrr@rr.rr', '514f1b439f404f86f77090fa9edc96ce', 'uploads/left.png'),
(27, 'ttt', 'ttt@tt.tt', 'accc9105df5383111407fd5b41255e23', 'uploads/left1.png'),
(28, 'yyy', 'yyy@yy.yy', '2fb1c5cf58867b5bbc9a1b145a86f3a0', 'uploads/left3.png'),
(29, 'uu', 'uu@uu.uu', '6277e2a7446059985dc9bcf0a4ac1a8f', 'uploads/left4.png'),
(30, 'ii', 'ii@ii.ii', '7e98b8a17c0aad30ba64d47b74e2a6c1', 'uploads/lfon.png');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
