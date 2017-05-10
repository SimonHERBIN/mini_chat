-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2017 at 10:35 AM
-- Server version: 10.1.22-MariaDB-
-- PHP Version: 7.0.16-3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `message`, `time`) VALUES
(1, 1, 'efze', '2017-05-08 18:08:29'),
(2, 1, 'zdazdfza', '2017-05-08 18:08:29'),
(3, 1, 'zdazdfza', '2017-05-08 18:08:29'),
(4, 1, 'zdazdfza', '2017-05-08 18:08:29'),
(5, 1, 'zdazdfza', '2017-05-08 18:08:29'),
(6, 1, 'thfg,gfn', '2017-05-08 18:08:29'),
(7, 1, 'salut', '2017-05-08 18:08:29'),
(8, 1, 'salut', '2017-05-08 18:08:29'),
(9, 1, 'klhjknlklk', '2017-05-08 18:08:29'),
(10, 1, 'klhjknlklk', '2017-05-08 18:08:29'),
(11, 1, 'aaaaaaaaaaaaaaa', '2017-05-08 18:08:29'),
(12, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-05-08 18:08:29'),
(13, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-05-08 18:08:29'),
(14, 1, 'popopopopopo', '2017-05-08 18:08:29'),
(15, 1, 'okok', '2017-05-08 18:08:29'),
(16, 1, 'plo', '2017-05-08 18:08:29'),
(17, 4, 'dalyl', '2017-05-08 18:08:29'),
(18, 6, 'salam', '2017-05-08 18:08:29'),
(19, 6, 'ds', '2017-05-08 18:08:29'),
(20, 6, 'pszja', '2017-05-08 18:08:29'),
(21, 6, 'ok', '2017-05-08 18:08:29'),
(22, 6, 'mlkjh', '2017-05-08 18:08:29'),
(23, 10, 'okokok', '2017-05-08 18:08:29'),
(24, 6, 'oui', '2017-05-08 18:08:29'),
(25, 6, 'okokokokok', '2017-05-08 18:09:03'),
(26, 6, 'okokokokok', '2017-05-08 18:09:12'),
(27, 6, 'okokokokok', '2017-05-08 18:10:20'),
(28, 6, 'non', '2017-05-08 18:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `lastname`, `pseudo`, `password`) VALUES
(1, 'po', 'pok', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, 'simon', 'hbn', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 'dalyl', 'azertyuuu', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(4, 'dalyl', 'dalyl', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(5, 'simon', 'simon', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(6, 'simon', 'simon2', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(7, 'ez', 'ze', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(8, 'test', 'test2', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(9, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'f7a9e24777ec23212c54d7a350bc5bea5477fdbb'),
(10, 'dylan', 'dromard', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
