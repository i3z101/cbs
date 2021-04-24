-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 12:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mId` bigint(20) UNSIGNED NOT NULL,
  `mName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mGenre` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`mGenre`)),
  `mPoster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mDesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mCreator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mGuide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mRating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mTime` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`mTime`)),
  `cinemaId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mId`, `mName`, `mGenre`, `mPoster`, `mDesc`, `mCreator`, `mGuide`, `mRating`, `mTime`, `cinemaId`, `created_at`, `updated_at`) VALUES
(1, 'Ant man', '[\"Action\",\"Thriller\",\"Science fiction\",\"Mystery\"]', '608487a0d2e91_Ant man.jpg', 'Ant man is a movie from marvel', 'Marvel', 'R', '4.5', '[\"11:00\",\"15:00\",\"23:00\",\"01:00\"]', 1, '2021-04-24 13:03:28', '2021-04-24 13:03:28'),
(2, 'Bad boys', '[\"Action\",\"Thriller\",\"Comedy\"]', '60849d81d1d43_Bad boys.jpg', 'Bad boys is a thriller movie', 'Sony', 'PG', '4', '[\"13:00\",\"15:00\",\"17:00\"]', 1, '2021-04-24 14:36:49', '2021-04-24 14:36:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mId`),
  ADD KEY `movie_cinemaid_foreign` (`cinemaId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `mId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_cinemaid_foreign` FOREIGN KEY (`cinemaId`) REFERENCES `cinema` (`cId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
