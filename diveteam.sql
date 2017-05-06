-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 11:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diveteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `trainer_id` int(11) NOT NULL,
  `day_name` varchar(20) NOT NULL,
  `day_preference` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`trainer_id`, `day_name`, `day_preference`) VALUES
(1, 'Thursday', ''),
(2, 'Saturday', ''),
(2, 'Sunday', ''),
(3, 'Friday', ''),
(3, 'Wednesday', ''),
(4, 'Saturday', ''),
(4, 'Sunday', ''),
(5, 'Saturday', ''),
(5, 'Sunday', ''),
(6, 'Friday', ''),
(6, 'Saturday', ''),
(6, 'Sunday', ''),
(7, 'Monday', ''),
(7, 'Sunday', ''),
(8, 'Friday', ''),
(8, 'Wednesday', ''),
(9, 'Friday', ''),
(9, 'Monday', ''),
(9, 'Sunday', ''),
(9, 'Thursday', ''),
(9, 'Tuesday', ''),
(9, 'Wednesday', ''),
(10, 'Saturday', ''),
(10, 'Sunday', ''),
(11, 'Saturday', ''),
(11, 'Sunday', ''),
(12, 'Saturday', ''),
(12, 'Sunday', ''),
(13, 'Friday', ''),
(13, 'Saturday', ''),
(13, 'Sunday', ''),
(13, 'Thursday', ''),
(13, 'Tuesday', ''),
(13, 'Wednesday', ''),
(14, 'Friday', 'PM'),
(14, 'Monday', 'PM'),
(14, 'Thursday', 'PM'),
(14, 'Tuesday', 'PM'),
(14, 'Wednesday', 'PM'),
(15, 'Friday', ''),
(15, 'Monday', ''),
(15, 'Saturday', ''),
(15, 'Sunday', ''),
(15, 'Thursday', ''),
(15, 'Tuesday', ''),
(15, 'Wednesday', ''),
(16, 'Monday', ''),
(16, 'Thursday', 'AM'),
(16, 'Tuesday', ''),
(16, 'Wednesday', ''),
(17, 'Friday', ''),
(17, 'Saturday', ''),
(17, 'Sunday', ''),
(18, 'Friday', ''),
(18, 'Monday', ''),
(18, 'Tuesday', ''),
(18, 'Wednesday', ''),
(19, 'Friday', ''),
(19, 'Monday', ''),
(19, 'Tuesday', ''),
(19, 'Wednesday', ''),
(20, 'Friday', ''),
(20, 'Saturday', ''),
(20, 'Sunday', ''),
(20, 'Thursday', ''),
(20, 'Tuesday', '');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `name`, `type`, `location`, `hidden`, `count`, `created_at`, `updated_at`) VALUES
(1, 'AAUS Scientific Diving Safety Manual', 'pdf', 'aausdivemanual', 0, 0, '2017-05-02 22:52:45', '2017-05-06 18:36:25'),
(2, 'Volunteer Dive Manual', 'pdf', 'volunteerdivemanual', 0, 0, '2017-05-02 22:52:45', '2017-05-02 22:52:45'),
(3, 'Dive Physical Form', 'pdf', 'divephysical', 0, 0, '2017-05-04 19:06:00', '2017-05-04 19:06:00'),
(4, 'AHA CPR Instructions', 'pdf', 'ahacprinstructions', 0, 0, '2017-05-04 19:06:00', '2017-05-04 19:06:00'),
(5, 'Dive Academy Training Checklist', 'pdf', 'academychecklist', 0, 0, '2017-05-04 19:06:21', '2017-05-04 19:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `title`, `phone`, `email`) VALUES
(1, 'Todd Hall', 'Corporate Dive Operations Manager', '3035614557', 'thall@ldry.com'),
(2, 'Daniel Redinger', 'Dive Safety Officer', '3035614557', 'dredinger@ldry.com'),
(3, 'Kym Yamauchi', 'Assistant Dive Safety Officer / Volunteer Coordinator', '3035614413', 'kyamauchi@ldry.com'),
(4, 'Jackie Eisenbaum', 'Volunteer Coordinator', '3035614474', 'jeisenbaum@ldry.com'),
(5, 'Rob Brynda', 'Curator of Fishes', '3035614467', 'rbrynda@ldry.com'),
(6, 'Jessica Miller', 'Assistant Curator of Fishes', '3035614488', 'jlmiller@ldry.com'),
(7, 'Meiling Roitz', 'Senior Aquarist', '3035614475', 'mroitz@ldry.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2017_05_02_223255_create_downloads_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `email`, `phone`, `active`) VALUES
(1, 'Todd Saemisch', 'todds@agi32.com', '7202317349', 1),
(2, 'Judd James', 'james@sharkbaitdiveclub.com', '3035893639', 1),
(3, 'Bill Hansen', 'whansen@mantatech.com', '3038624562', 1),
(4, 'Jeff Van Sambeek', 'jeff@lodestonedesign.com', '3038194134', 1),
(5, 'Andrea Van Sambeek', 'accidentalstamper@gmail.com', '3038194134', 1),
(6, 'Stuart Parker', 'saparker522@yahoo.com', '3038180459', 0),
(7, 'Tony Hayter', 'thayter37@hotmail.com', '3032501779', 1),
(8, 'Ed Goodman', 'egcinc99@msn.com', '3038829131', 1),
(9, 'Steve Smith', 'sgsmith1492@gmail.com', '3033494287', 1),
(10, 'Andrew Henrichs', 'aowi7280@hotmail.com', '9702268599', 1),
(11, 'Michelle Harrison', 'mbhdiver@gmail.com', '3036206030', 1),
(12, 'Kevin O''Brien', 'kpovine2@yahoo.com', '3039815202', 1),
(13, 'Jon DeBoer', 'santajon@centurylink.net', '3039078965', 1),
(14, 'Dave Robson', 'drobson2@netzero.com', '3039337158', 1),
(15, 'Bob Burrell', 'rburrell@q.com', '3032781672', 1),
(16, 'Bill Morgan', 'billmorgan123@aol.com', '3037598615', 1),
(17, 'Charlie Martien', 'cm@cmartien.com', '7203536308', 1),
(18, 'Barb Anders', 'yoblanders@yahoo.com', '3037770509', 1),
(19, 'Ed Yoblonski', 'edder@yahoo.com', '3037776965', 1),
(20, 'Steve Dupree', 'no1ofconsequenz@gmail.com', '9704120560', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'diveteam', 'diveteam', 'dredinger@ldry.com', '$2y$10$lnQhrzh.Q78beCSBFVHHOu5C54bLD3hj8EWUccsaY0VD.dCbLys4.', '1k9iK3iBfyJadEduMOO7M43NztOENInk7iZX21kTn0NQZnVsun63MzfZMRoK', '2017-05-06 01:51:51', '2017-05-06 01:51:51'),
(5, 'diveteam', 'diveteam', 'dredinger@ldry.com', '$2y$10$DxY4KFj.F.NC5GkI8EoykuKrIuPswP/9i4x1r17ZJsK4AbHhm64xW', 'PldEYSfKgEQ9spvh5FSWUX6uWAJbZ665gW0CjekaUKs6YeDeLaAS7uLhgvc6', '2017-05-06 02:50:29', '2017-05-06 02:50:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`trainer_id`,`day_name`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
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
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
