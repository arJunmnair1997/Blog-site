-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 07:44 AM
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
-- Database: `blog_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(4, 'About Laravel', 'Laravel is a free, open-source PHP web application framework created by Taylor Otwell. It was first released in 2011 and has since become one of the most popular PHP frameworks for building web applications.\r\n\r\nLaravel provides a wide range of features and tools for web development, including routing, middleware, views, controllers, database migration, authentication, and more. It follows the Model-View-Controller (MVC) architectural pattern, which helps developers separate the application\'s logic from its presentation.\r\n\r\nOne of the key advantages of Laravel is its intuitive syntax and expressive code, which makes it easier for developers to write and maintain code. It also has a large and active community of developers who contribute to its development and provide support for other developers.\r\n\r\nLaravel also integrates well with other tools and technologies, including popular front-end frameworks like Vue.js and React, and it can be used to build a wide range of web applications, from simple websites to complex enterprise-level applications.', '1683608877_laravel-featured-3.png', '2023-05-08 23:37:58', '2023-05-08 23:37:58'),
(5, 'Biriyani', 'Biryani is a popular South Asian rice dish that originated in the Indian subcontinent. It is typically made with a mixture of long-grain rice, spices, and meat (such as chicken, beef, lamb, or goat) or vegetables. The dish is often garnished with nuts, raisins, and fried onions.\r\n\r\nThe recipe for biryani varies depending on the region and the cook, but it typically involves layering the rice and meat or vegetables in a pot and cooking them together with spices, such as cumin, coriander, turmeric, and garam masala. The dish may also include other ingredients like yogurt, saffron, and tomato.\r\n\r\nBiryani is a rich and flavorful dish that is often served on special occasions like weddings, festivals, and other celebrations. It is also a popular street food in many parts of South Asia and is enjoyed by people of all ages and backgrounds.', '1683608962_mutton-biriyani-recipe.jpeg', '2023-05-08 23:39:22', '2023-05-08 23:39:22'),
(6, 'The Real \"Gandharvan\"', 'Pathmarajan (1954-1991) was a renowned Indian film director and screenwriter from the state of Kerala. He is considered one of the most influential filmmakers in the history of Malayalam cinema and is known for his unique style and socially relevant themes.\r\n\r\nPathmarajan started his career in the film industry as a screenwriter and made his directorial debut in 1980 with the film \"Peruvazhiyambalam\". He went on to direct several critically acclaimed and commercially successful films, including \"Namukku Parkkan Munthiri Thoppukal\" (1986), \"Thoovanathumbikal\" (1987), and \"Idavela\" (1989).\r\n\r\nHis films were known for their exploration of complex human emotions and relationships, as well as their critique of social norms and conventions. Pathmarajan often dealt with taboo subjects such as extramarital affairs, sex, and caste discrimination, and his films were noted for their poetic and visual storytelling.', '1683609108_pappettan.jpg', '2023-05-08 23:41:48', '2023-05-08 23:41:48'),
(7, 'The Complete Actor', 'Mohanlal Viswanathan Nair, commonly known as Mohanlal, is a renowned Indian actor, producer, and playback singer who primarily works in the Malayalam film industry. He is widely considered one of the greatest actors in the history of Indian cinema and has won numerous awards and accolades for his performances.\r\n\r\nMohanlal began his acting career in 1978 with the film \"Thiranottam\" and went on to become one of the most successful actors in the Malayalam film industry. He has acted in more than 350 films in a career spanning over four decades, and has also appeared in several Hindi, Tamil, Telugu, and Kannada films.\r\n\r\nMohanlal is known for his versatility as an actor and has played a wide range of roles throughout his career. He has received several awards for his performances, including five National Film Awards, nine Kerala State Film Awards, and numerous Filmfare Awards.\r\n\r\nApart from acting, Mohanlal has also produced and directed films, and is a trained classical singer who has lent his voice to several songs in his films. He is also actively involved in philanthropic work, and has been associated with various charitable organizations over the years.', '1683609243_mohanlal.jpg', '2023-05-08 23:44:03', '2023-05-08 23:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(8, 7, 'Arjun', 'Good To Know', '2023-05-08 23:46:26', '2023-05-08 23:46:26'),
(9, 7, 'Arjun', 'Good To Know', '2023-05-08 23:46:54', '2023-05-08 23:46:54'),
(10, 7, 'Krish', 'Okay', '2023-05-09 00:02:25', '2023-05-09 00:02:25'),
(11, 6, 'Manu', 'Thanks', '2023-05-09 00:03:18', '2023-05-09 00:03:18'),
(12, 6, 'Hari', 'Good to know', '2023-05-09 00:06:32', '2023-05-09 00:06:32');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_05_08_064012_create_blogs_table', 1),
(12, '2023_05_08_114118_create_comments_table', 1),
(13, '2023_05_08_152456_create_reply_comments_table', 2),
(14, '2023_05_08_153550_create_reply_comments_table', 3),
(15, '2023_05_08_160234_create_reply_comments_table', 4);

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
-- Table structure for table `reply_comments`
--

CREATE TABLE `reply_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reply_comments`
--

INSERT INTO `reply_comments` (`id`, `name`, `content`, `comment_id`, `created_at`, `updated_at`) VALUES
(7, 'Admin', 'Thank You', 8, '2023-05-08 23:46:39', '2023-05-08 23:46:39'),
(8, 'Hari', 'Thank You', 9, '2023-05-08 23:47:21', '2023-05-08 23:47:21'),
(9, 'Arjun', 'Okay', 9, '2023-05-08 23:50:48', '2023-05-08 23:50:48'),
(10, 'Manu', 'ok', 9, '2023-05-09 00:02:12', '2023-05-09 00:02:12'),
(11, 'Admin', 'Okay', 11, '2023-05-09 00:06:20', '2023-05-09 00:06:20'),
(12, 'admin', 'Thx', 10, '2023-05-09 00:07:01', '2023-05-09 00:07:01');

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
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$CSyeYXQIYTEmN4AuBBeFDOBk3Ch.tMp8VXH4Bo//yhxcSM3r/gOPm', NULL, '2023-05-08 09:35:28', '2023-05-08 09:35:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_comments_comment_id_foreign` (`comment_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reply_comments`
--
ALTER TABLE `reply_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD CONSTRAINT `reply_comments_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
