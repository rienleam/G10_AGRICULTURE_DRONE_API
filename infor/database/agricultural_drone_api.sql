-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 12:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agricultural_drone_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `drones`
--

CREATE TABLE `drones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `drone_type` varchar(255) NOT NULL,
  `battery_status` int(11) NOT NULL,
  `payload_capacity` varchar(255) NOT NULL,
  `current_latitude` varchar(255) NOT NULL,
  `current_longitude` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drones`
--

INSERT INTO `drones` (`id`, `name`, `drone_type`, `battery_status`, `payload_capacity`, `current_latitude`, `current_longitude`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'DJI Phantom 4 Pro', 'Harvesting', 90, '10 kilograms', '40.7128° N', '74.0060° W', '2023-05-27 03:48:08', '2023-05-27 03:48:08', 1),
(2, 'Parrot Anafi USA', 'Mapping', 70, '5 kilograms', '34.0522° N', '118.2437° W', '2023-05-27 03:48:08', '2023-05-27 03:48:08', 2),
(3, 'Autel Robotics EVO II', 'Sensing', 75, '3 kilograms', '51.5074° N', '0.1278° W', '2023-05-27 03:48:08', '2023-05-27 03:48:08', 1),
(4, 'Yuneec Typhoon H Pro', 'Mapping', 85, '6 kilograms', '19.4326° N', '99.1332° E', '2023-05-27 03:48:08', '2023-05-27 03:48:08', 1),
(5, 'DJI Matrice 300 RTK', 'Spraying', 80, '2.7 kilograms', '35.6895° N', '139.6917° E', '2023-05-27 03:48:08', '2023-05-27 03:48:08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`id`, `name`, `location`, `size`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'Coconut Farm', 'Chamkar Mon District: Road 271, Road 264, Norodom Boulevard', '10 hectare', 1, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(2, 'Dragon Fruit Farm', 'Daun Penh District: Preah Monivong Boulevard, Preah Sisowath Quay, Street 106', '6 hectare', 2, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(3, 'Apple Farm', 'Prampi Makara District: Mao Tse Toung Boulevard, Russian Federation Boulevard', '3 hectare', 3, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(4, 'Graps Farm', 'Mean Chey District: Veng Sreng Boulevard, National Road 4, National Road 3', '8 hectare', 4, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(5, 'Vegetable Farm', 'Russei Keo District: National Road 5, National Road 6, Kob Srov Street', '12 hectare', 5, '2023-05-27 03:48:08', '2023-05-27 03:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

CREATE TABLE `instructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `speed` varchar(255) NOT NULL,
  `altitude` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `drone_id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `speed`, `altitude`, `action`, `datetime`, `drone_id`, `plan_id`, `created_at`, `updated_at`) VALUES
(1, '60 kh/h', '3000 meters', 'stop', '2023-05-26 14:30:00', 1, 1, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(2, '70 kh/h', '3200 meters', 'stop', '2023-05-26 14:30:00', 2, 2, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(3, '65 kh/h', '2000 meters', 'stop', '2023-05-26 14:30:00', 3, 3, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(4, '80 kh/h', '3500 meters', 'stop', '2023-05-26 14:30:00', 4, 4, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(5, '50 kh/h', '1700 meters', 'stop', '2023-05-26 14:30:00', 5, 5, '2023-05-27 03:48:08', '2023-05-27 03:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `farm_id` bigint(20) UNSIGNED NOT NULL,
  `drone_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `image`, `farm_id`, `drone_id`, `created_at`, `updated_at`) VALUES
(1, 'https://img.freepik.com/premium-photo/bunch-grapes_694215-251.jpg?w=360', 1, 1, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(2, 'https://dragonfruit.net.vn/wp-content/uploads/2021/11/song-nam-dragon-fruit-farm-99-1196x800.jpg', 2, 2, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(3, 'https://t3.ftcdn.net/jpg/04/02/40/58/360_F_402405885_ukZ0bf9o1MXj6D2jmudY4ML41XVIkOSU.jpg', 3, 3, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(4, 'https://phnompenhpost.com/sites/default/files/styles/full-screen/public/happy-farm-3.jpg?itok=DuEKNruk', 4, 4, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(5, 'https://virginiatraveltips.com/wp-content/uploads/2022/06/Apple-Orchard_155143169.jpg', 5, 5, '2023-05-27 03:48:08', '2023-05-27 03:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_05_23_005144_create_drones_table', 1),
(16, '2023_05_23_005230_create_provinces_table', 1),
(17, '2023_05_23_005315_create_farms_table', 1),
(18, '2023_05_23_005328_create_maps_table', 1),
(19, '2023_05_27_080242_create_plans_table', 1),
(20, '2023_05_27_080426_create_instructions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_type` varchar(255) NOT NULL,
  `plan_details` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `farm_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_type`, `plan_details`, `area`, `user_id`, `farm_id`, `created_at`, `updated_at`) VALUES
(1, 'Harvesting Plan', 'The drone will be used for harvesting crops, such as fruit or vegetables', 'POLYGON((6.535406112670899 46.655990545464206,6.5360498428344735 46.655710711675226,6.535298824310304 46.654561905156164,6.534655094146729 46.654723917810095,6.535406112670899 46.655990545464206))', 1, 1, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(2, 'Spraying Plan', 'The drone will be used for spraying pesticides, herbicides, or fertilizers on crops', 'POLYGON((6.535406112670899 46.655990545464206,6.5360498428344735 46.655710711675226,6.535298824310304 46.654561905156164,6.534655094146729 46.654723917810095,6.535406112670899 46.655990545464206))', 2, 1, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(3, 'Mapping Plan', 'The drone will be used for creating detailed maps of the crop field', 'POLYGON((6.535406112670899 46.655990545464206,6.5360498428344735 46.655710711675226,6.535298824310304 46.654561905156164,6.534655094146729 46.654723917810095,6.535406112670899 46.655990545464206))', 3, 2, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(4, 'Sensing Plan', 'The drone will be used for collecting data on crop health and growth', 'POLYGON((6.535406112670899 46.655990545464206,6.5360498428344735 46.655710711675226,6.535298824310304 46.654561905156164,6.534655094146729 46.654723917810095,6.535406112670899 46.655990545464206))', 4, 2, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(5, 'Harvesting Plan', 'The drone will be used for harvesting crops, such as fruit or vegetables', 'POLYGON((6.535406112670899 46.655990545464206,6.5360498428344735 46.655710711675226,6.535298824310304 46.654561905156164,6.534655094146729 46.654723917810095,6.535406112670899 46.655990545464206))', 5, 3, '2023-05-27 03:48:08', '2023-05-27 03:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Siem Reap', '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(2, 'Kompong Thom', '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(3, 'Kompong Cham', '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(4, 'Banteaymeanchey', '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(5, 'Preah Vihear', '2023-05-27 03:48:08', '2023-05-27 03:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John', 'john@gmail.com', NULL, '$2y$10$Fa9Q702zCAMPxZRxiece1OTS2y9jotwxmU4pSSdGH8yMrt4Sce7E2', NULL, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(2, 'Reen', 'rien@gmail.com', NULL, '$2y$10$Q3SA6xloAUskbqOgmd46/OEISsg4NnchsPN6xYH.Q.qEWkblsr9hO', NULL, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(3, 'Sreyrea', 'sreyrea@gmail.com', NULL, '$2y$10$.ChZb69YjOZJVFPSGiJA7.EFJ0bgTKgCbDdsrvDWAgSDBmXyqeaGu', NULL, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(4, 'Chamnan', 'chamnan@gmail.com', NULL, '$2y$10$OWjVXauG6wATEKqP3z8gSexEfspNRXxQ2KH9TT/Rfw92C2P/TpCZm', NULL, '2023-05-27 03:48:08', '2023-05-27 03:48:08'),
(5, 'Darath', 'darath@gmail.com', NULL, '$2y$10$RZeUpg.tHGNLSm87u0oakukhT.VJhRVxhvGGMXYYgoK8JUUQKqPWm', NULL, '2023-05-27 03:48:08', '2023-05-27 03:48:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drones`
--
ALTER TABLE `drones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drones_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farms_province_id_foreign` (`province_id`);

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructions_drone_id_foreign` (`drone_id`),
  ADD KEY `instructions_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maps_farm_id_foreign` (`farm_id`),
  ADD KEY `maps_drone_id_foreign` (`drone_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plans_user_id_foreign` (`user_id`),
  ADD KEY `plans_farm_id_foreign` (`farm_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drones`
--
ALTER TABLE `drones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drones`
--
ALTER TABLE `drones`
  ADD CONSTRAINT `drones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `farms`
--
ALTER TABLE `farms`
  ADD CONSTRAINT `farms_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instructions`
--
ALTER TABLE `instructions`
  ADD CONSTRAINT `instructions_drone_id_foreign` FOREIGN KEY (`drone_id`) REFERENCES `drones` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `instructions_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `maps`
--
ALTER TABLE `maps`
  ADD CONSTRAINT `maps_drone_id_foreign` FOREIGN KEY (`drone_id`) REFERENCES `drones` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `maps_farm_id_foreign` FOREIGN KEY (`farm_id`) REFERENCES `farms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_farm_id_foreign` FOREIGN KEY (`farm_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
