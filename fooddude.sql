-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 11:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddude`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `res_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageType` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zactive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `res_id`, `image`, `imageType`, `zactive`, `created_at`, `updated_at`) VALUES
(1, 1, '8wQbMBrssu4Ha0pZvec6.jpg', 'Food', '1', '2021-09-24 05:43:13', '2021-09-24 05:43:13'),
(2, 1, '3JSbuGUuEJBsKrtH1ZZH.jpg', 'Interior', '1', '2021-09-24 05:43:32', '2021-09-24 05:43:32'),
(3, 1, 'K8NNx2CghUILkXubVcQX.jpg', 'Exterior', '1', '2021-09-24 05:46:33', '2021-09-24 05:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `hours`
--

CREATE TABLE `hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `res_id` int(11) NOT NULL,
  `hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tableQty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zactive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`id`, `res_id`, `hours`, `tableQty`, `zactive`, `created_at`, `updated_at`) VALUES
(1, 5, '7 PM', '3', '1', '2021-09-17 04:23:40', '2021-09-17 05:03:53'),
(2, 5, '8 PM', '5', '0', '2021-09-17 04:23:52', '2021-09-17 05:04:04'),
(4, 2, '10.30 PM', '1', '1', '2021-09-17 05:04:20', '2021-09-17 05:04:20'),
(5, 1, '8.30 PM', '3', '1', '2021-09-17 10:37:17', '2021-09-23 11:13:32'),
(6, 1, '10.30 PM', '-5', '1', '2021-09-17 10:37:24', '2021-09-18 09:06:30'),
(7, 1, '11 PM', '7', '1', '2021-09-18 09:07:06', '2021-09-18 09:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `res_id` int(11) NOT NULL,
  `res_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nutrition` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menuType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subCatergory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `res_id`, `res_name`, `price`, `description`, `ingredients`, `nutrition`, `menuType`, `foodType`, `category`, `subCatergory`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dream Resturant', '550', 'Talk about it: The best defense is a good offense. Ask your child how they would respond if someone were mean to them online. What should they do? Is it okay to forward a text message making fun of someone', NULL, '*960kcl', 'Pizza', NULL, 'Big Chese', 'Chese Burger', 'V44CfJi8rjO9CEzdY0gr.jpg', '2021-09-23 12:58:27', '2021-09-23 12:58:27'),
(2, 1, 'Dream Resturant', '145', 'Talk about it: The best defense is a good offense. Ask your child how they would respond if someone were mean to them online. What should they do? Is it okay to forward a text message making fun of someone', NULL, '*890kcl', 'Burger', NULL, 'King', 'Chese Burger', 'V44CfJi8rjO9CEzdY0gr.jpg', '2021-09-23 13:00:38', '2021-09-23 13:00:38'),
(3, 1, 'Dream Resturant', '1250', 'Talk about it: The best defense is a good offense. Ask your child how they would respond if someone were mean to them online. What should they do? Is it okay to forward a text message making fun of someone', 'Talk about it: The best defense is a good offense. Ask your child how they would respond if someone were mean to them online. What should they do? Is it okay to forward a text message making fun of someone', '*760kcl', 'Pizza', NULL, 'Sicilian Pizza', 'Greek Pizza', 'i9TVGFgVylc64pdlNoiN.jpg', '2021-09-24 00:02:07', '2021-09-24 00:02:07'),
(4, 1, 'Dream Resturant', '2500', 'revent it: Stealing your child’s phone or their passwords to social networking accounts is not an ideal way to understand what’s going on in their digital world. Use a parental', 'revent it: Stealing your child’s phone or their passwords to social networking accounts is not an ideal way to understand what’s going on in their digital world. Use a parental', '*660kcl', 'Pizza', NULL, 'Detroit Pizza', 'St. Louis Pizza', 'ndZZAewm3YNi9IB5g0RO.jpg', '2021-09-24 00:03:43', '2021-09-24 00:03:43'),
(5, 1, 'Dream Resturant', '350', 'Deal with it: Teach them to never respond, save the evidence and report the incident to an adult they trust. Next, engage school', 'Deal with it: Teach them to never respond, save the evidence and report the incident to an adult they trust. Next, engage school', '*560kcl', 'Burger', NULL, 'Beef Burgers', 'Bison', 'Afmc44gPUfOszRwrpDVt.jpg', '2021-09-24 00:04:54', '2021-09-24 00:04:54'),
(6, 1, 'Dream Resturant', '450', 'She asked her son about it and was shocked to hear an older boy on his bus had been sending these types of texts for about two months', 'She asked her son about it and was shocked to hear an older boy on his bus had been sending these types of texts for about two months', '*560kcl', 'Soap', NULL, 'Laundry Soap', 'Guest Soap', '0a3U5Yt5XMymYEnn5kv3.jpg', '2021-09-24 00:05:45', '2021-09-24 00:05:45');

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
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2021_09_17_100358_create_hours_table', 2),
(19, '2021_09_11_170023_create_restaurants_table', 4),
(21, '2021_09_17_110650_create_galleries_table', 5),
(22, '2021_09_17_182132_create_orders_table', 5),
(23, '2021_09_18_175233_create_menus_table', 6),
(24, '2021_09_09_125416_create_recipes_table', 7),
(25, '2021_10_20_102653_create_save_recipes_table', 8),
(26, '2014_10_12_000000_create_users_table', 9),
(27, '2021_10_21_200803_create_zlogs_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `res_id` int(11) NOT NULL,
  `res_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `fName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialReq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hour_id` int(11) NOT NULL DEFAULT 0,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people` int(11) NOT NULL,
  `zactive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `res_id`, `res_name`, `user_id`, `fName`, `lname`, `mobile`, `specialReq`, `hour_id`, `hour`, `date`, `people`, `zactive`, `created_at`, `updated_at`, `email`, `transaction_id`) VALUES
(1, 1, 'Dream Resturant', 2, 'Nafis', 'Khan', '01641377742', NULL, 0, '8.30 PM', '2021-09-23', 1, 'Confrim', '2021-09-23 23:57:11', '2021-09-23 23:57:11', 'admin@demo.com', '614d68b7bdb2f'),
(2, 1, 'Dream Resturant', 2, 'Jesmin', 'Khan', '01819778233', NULL, 0, '11 PM', '2021-09-23', 1, 'Confrim', '2021-09-24 04:35:15', '2021-09-24 04:35:15', 'admin@demo.com', '614da9e3cf593'),
(3, 1, 'Dream Resturant', 2, 'Dipu', 'Chakma', '01611111111', NULL, 0, '10.30 PM', '2021-09-23', 1, 'Confrim', '2021-09-24 05:01:58', '2021-09-24 05:01:58', 'jihad@vshop.com', '614db0269f85f'),
(4, 1, 'Dream Resturant', 2, 'Jabir', 'Khan', '01819778233', NULL, 0, '10.30 PM', '2021-09-30', 6, 'Confrim', '2021-09-24 05:02:39', '2021-09-24 05:02:39', 'admin@demo.com', '614db04fb53b5'),
(5, 1, 'Dream Resturant', 2, 'Jesmin', 'Khan', '01819778233', 'geee', 0, '10.30 PM', '2021-09-25', 5, 'Confrim', '2021-09-24 05:25:48', '2021-09-24 05:25:48', 'admin@demo.com', '614db5bc2d8a4'),
(6, 1, 'Dream Resturant', 2, 'Habib', 'Khan', '01819778233', NULL, 0, '10.30 PM', '2021-10-07', 8, 'Confrim', '2021-09-24 05:28:03', '2021-09-24 05:28:03', 'admin@demo.com', '614db6438af9f'),
(7, 1, 'Dream Resturant', 2, 'Nafis', 'Khan', '01819778233', NULL, 0, '10.30 PM', '2021-09-25', 5, 'Confrim', '2021-09-24 05:29:38', '2021-09-24 05:29:38', 'admin@demo.com', '614db6a234758'),
(8, 1, 'Dream Resturant', 2, 'Nafis', 'Khan', '01641377742', NULL, 0, '10.30 PM', '2021-10-21', 4, 'Confrim', '2021-10-14 02:04:35', '2021-10-14 02:04:35', 'admin@demo.com', '6167e493b5f00'),
(9, 1, 'Dream Resturant', 2, 'Nafis', 'Khan', '01819778233', NULL, 0, '11 PM', '2021-11-05', 5, 'Complete', '2021-10-21 15:00:15', '2021-10-21 15:00:15', 'admin@demo.com', '6171d4dfcd6b8'),
(10, 1, 'Dream Resturant', 1, 'Habib', 'Islam', '01611111111', 'Hello', 0, '11 PM', '2021-10-21', 4, 'Confrim', '2021-10-21 15:13:33', '2021-10-21 15:13:33', 'chanchal@abl.com', '6171d7fd972f1'),
(11, 1, 'Dream Resturant', 1, 'Beauty', 'Khan', '01611111111', 'D', 0, '11 PM', '2021-10-31', 18, 'Not Complete', '2021-10-21 15:19:24', '2021-10-21 15:19:24', 'chanchal@abl.com', '6171d95c13427'),
(12, 1, 'Dream Resturant', 1, 'Tanjir', 'Khan', '01611111111', NULL, 0, '10.30 PM', '2021-10-29', 8, 'Not Complete', '2021-10-21 15:25:37', '2021-10-21 15:25:37', 'chanchal@abl.com', '6171dad1aacbf'),
(13, 1, 'Dream Resturant', 1, 'Jabir', 'Khan', '01641377742', NULL, 0, '8.30 PM', '2021-10-27', 5, 'Complete', '2021-10-21 15:28:23', '2021-10-21 15:28:23', 'admin@demo.com', '6171db7735ee9'),
(14, 1, 'Dream Resturant', 2, 'Jesmin', 'Khan', '01641377742', 'gr', 0, '10.30 PM', '2021-10-28', 4, 'Wating Room', '2021-10-21 15:33:37', '2021-10-21 15:33:37', 'admin@demo.com', '6171dcb126fdd'),
(15, 1, 'Dream Resturant', 2, 'Jabir', 'Khan', '01819778233', NULL, 0, '8.30 PM', '2021-10-27', 15, 'Decline', '2021-10-21 15:35:18', '2021-10-21 15:35:18', 'admin@demo.com', '6171dd16b9840'),
(16, 1, 'Dream Resturant', 1, 'Jesmin', 'Khan', '01641377742', NULL, 0, '10.30 PM', '2021-10-22', 1, 'Confirm', '2021-10-22 10:07:27', '2021-10-22 10:07:27', 'chanchal@abl.com', '6172e1bf1b52c'),
(17, 1, 'Dream Resturant', 1, 'Nafis', 'Khan', '01641377742', NULL, 0, '8.30 PM', '2021-10-22', 1, 'Pending', '2021-10-22 10:08:31', '2021-10-22 10:08:31', 'admin@demo.com', '6172e1ff6b788'),
(18, 1, 'Dream Resturant', 1, 'Jesmin', 'Khan', '01641377742', NULL, 0, '10.30 PM', '2021-10-22', 1, 'Wating Room', '2021-10-22 10:09:25', '2021-10-22 10:09:25', 'chanchal@abl.com', '6172e2352c726');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `title`, `author`, `image`, `description`, `ingre`, `cat`, `method`, `duration`, `created_at`, `updated_at`, `published_at`) VALUES
(1, NULL, 'Temporibus aspernatur placeat hic excepturi fugiat voluptas.', 'Mrs. Emmalee Abernathy', 'w0AqZ87G2OQ006EExgt3.jpg', 'Ratione maiores nostrum aut nemo. Totam tempore velit illo aut. Deleniti aut perferendis in aut est. Ipsa voluptatem aliquam id atque. In maxime et consequatur ipsum sint corporis. Reiciendis et reiciendis sunt est. Rerum sed ab qui iste nesciunt soluta. Et eveniet sed autem vel iusto omnis. Dolores ad iusto autem in. Voluptatem expedita expedita corporis totam.', NULL, NULL, NULL, '30 Munites', '2021-09-16 03:28:06', '2021-09-16 03:28:06', NULL),
(2, NULL, 'Libero in laborum inventore sapiente fuga nam.', 'Mrs. Geraldine Smitham II', 'w0AqZ87G2OQ006EExgt3.jpg', 'Occaecati perspiciatis doloribus distinctio quo est est aut. Quis quia reiciendis accusamus. Et ullam rerum exercitationem illo exercitationem. Quia est impedit enim eaque inventore. Voluptatum et recusandae et occaecati qui velit. Eum vitae omnis sed id eligendi molestiae fugit. A alias non exercitationem cum. Vitae dignissimos dolore dolores non fuga nesciunt. Harum iure voluptates et esse et. Sed eum voluptates est aut nulla sunt voluptatem.', NULL, NULL, NULL, '30 Munites', '2021-09-16 03:28:06', '2021-09-16 03:28:06', NULL),
(3, NULL, 'Est totam quia adipisci nostrum non laborum.', 'Adonis Price', 'w0AqZ87G2OQ006EExgt3.jpg', 'Id et laboriosam ullam facere illum consequatur. Aspernatur et est exercitationem rem. Occaecati ea tempora earum accusamus accusantium deserunt qui quo. Eius voluptatum repudiandae necessitatibus dolore sed autem consequatur quis. At veniam praesentium ipsum et excepturi. Amet debitis et quia debitis. Eos expedita vitae ducimus fugiat amet voluptatem. Voluptas veniam voluptates corporis. Sequi voluptas dolor fugit eos qui. Pariatur vel similique aut vero.', NULL, NULL, NULL, '20 Munites', '2021-09-16 03:28:06', '2021-09-16 03:28:06', NULL),
(4, NULL, 'Maxime voluptatum molestiae quas molestiae vitae veritatis.', 'Mrs. Marielle Carter', 'w0AqZ87G2OQ006EExgt3.jpg', 'Voluptatem voluptas recusandae quaerat dolorum et. Magnam nihil minima amet. Dolorem amet sequi exercitationem vel voluptatem consequatur placeat. Suscipit perspiciatis fuga quasi libero. Veritatis et amet facere ab sed eveniet beatae. Quis cum neque aspernatur aut. Omnis quidem sit molestiae expedita sapiente dolorem quia. Quam velit sequi voluptatum laborum officia. Error iste cupiditate sequi ratione. Et doloribus sequi aut qui.', NULL, NULL, NULL, '10 Munites', '2021-09-16 03:28:06', '2021-09-16 03:28:06', NULL),
(5, NULL, 'Libero soluta iure et modi aut.', 'Ezequiel Kshlerin', 'w0AqZ87G2OQ006EExgt3.jpg', 'Accusantium corporis culpa eligendi omnis harum tempora. Ipsum delectus nulla eum. Quas repudiandae sit suscipit odit exercitationem sed maiores aliquam. Praesentium quo maiores temporibus alias. Quia quo reprehenderit dolores magnam minus velit ipsa. Eaque qui delectus accusantium aut voluptatum repellat. Saepe placeat sint quia velit vel tempore. Aliquid nemo quasi iure iure. Accusamus explicabo velit amet enim. Ut sed et ut exercitationem.', NULL, NULL, NULL, '10 Munites', '2021-09-16 03:28:06', '2021-09-16 03:28:06', NULL),
(6, NULL, 'Quia autem asperiores autem rem deleniti.', 'Laury Jacobi', 'w0AqZ87G2OQ006EExgt3.jpg', 'Est omnis voluptates aspernatur voluptate unde nisi. Ut sed et molestiae omnis nemo. Ut et rem et nulla consequatur reiciendis et. Distinctio dolorem eum amet et velit. Voluptatem accusamus aspernatur autem minima. Ea saepe quam sed odit necessitatibus enim provident. Aspernatur corporis itaque ut eos sit. Est voluptatum et et distinctio tenetur consequatur explicabo. Ducimus dolorem dignissimos modi in aut. Ab ipsa explicabo quae ullam aut dolorem atque accusamus.', NULL, NULL, NULL, '50 Munites', '2021-09-16 03:28:06', '2021-09-16 03:28:06', NULL),
(7, NULL, 'Consequatur quo earum perferendis repellat qui mollitia temporibus animi.', 'Berta Fahey', 'w0AqZ87G2OQ006EExgt3.jpg', 'Explicabo veritatis occaecati reprehenderit sit aut sed repellat. Reiciendis qui voluptatem esse eaque aut. Quis et hic omnis quis assumenda. Earum sed et voluptatibus. Ea fugiat laudantium id sint sint. Voluptatem tempore quia provident similique magnam earum inventore. Asperiores dolores accusamus quibusdam eaque eum temporibus. Sapiente tempora et aliquam accusantium facilis id numquam nihil. Et quidem optio iusto ut sit et. Itaque et iure at necessitatibus.', NULL, NULL, NULL, '30 Munites', '2021-09-16 03:28:06', '2021-09-16 03:28:06', NULL),
(8, NULL, 'Culpa necessitatibus aspernatur laborum saepe ut perspiciatis.', 'Charity Leuschke', 'w0AqZ87G2OQ006EExgt3.jpg', 'Quia omnis neque exercitationem dolores veritatis non. Id ab fugit assumenda labore. Qui corrupti rem saepe repudiandae rem sit iure repellat. Ea quia sint eum. Expedita enim expedita earum minus facilis. Blanditiis aut recusandae error pariatur voluptas. Impedit explicabo tenetur ut qui illo. Perspiciatis nemo enim in voluptas. Officiis dicta id consectetur in autem velit consectetur nisi. Fuga qui voluptas reiciendis aut.', NULL, NULL, NULL, '50 Munites', '2021-09-16 03:28:07', '2021-09-16 03:28:07', NULL),
(9, NULL, 'Eius officia est et et eveniet.', 'Israel Hahn', 'w0AqZ87G2OQ006EExgt3.jpg', 'Porro sed soluta quaerat et repudiandae officia recusandae. Dolores provident ut beatae dolorem eius eum praesentium. Itaque et saepe quibusdam dolores tempore. Voluptates consequatur ut molestiae eaque est. Voluptatem eligendi reiciendis eveniet. Sint voluptatum qui non nam non qui quidem voluptate. Reiciendis est ex ipsam illo optio consectetur autem. Ut sint modi fugiat recusandae odio veniam. Et non est cum sit qui et. Eos est dignissimos quod eos enim praesentium.', NULL, NULL, NULL, '10 Munites', '2021-09-16 03:28:07', '2021-09-16 03:28:07', NULL),
(10, NULL, 'Veritatis aspernatur eveniet ratione libero totam consectetur.', 'Gaston Stark', 'w0AqZ87G2OQ006EExgt3.jpg', 'Quia consectetur optio non sit sit quia ipsa. Repellendus dolorem ex consequatur excepturi. Ea nisi non sapiente et. Nisi beatae est qui aliquid nesciunt et. Consectetur rerum adipisci accusantium rem sit perferendis similique. Reiciendis qui voluptas quos. Quas pariatur recusandae explicabo ut. Eum laborum deleniti accusamus est. Corporis deserunt fugiat reprehenderit quaerat rem ut iusto dolores. Reiciendis quaerat voluptatem quisquam doloremque.', NULL, NULL, NULL, '10 Munites', '2021-09-16 03:28:07', '2021-09-16 03:28:07', NULL),
(11, NULL, 'Oatmeal Cookies', 'Nafis', 'w0AqZ87G2OQ006EExgt3.jpg', 'Crunchy around the edges, softer in the center, these oatmeal cookies feature the nutty taste and nubbly texture of oats.', NULL, 'Lunch', NULL, '4', '2021-10-13 11:41:23', '2021-10-13 11:41:23', NULL),
(12, NULL, 'Oatmeal Cookies', 'Nafis', 'w0AqZ87G2OQ006EExgt3.jpg', 'Crunchy around the edges, softer in the center, these oatmeal cookies feature the nutty taste and nubbly texture of oats.', NULL, 'Lunch', NULL, '4', '2021-10-13 11:41:59', '2021-10-13 11:41:59', NULL),
(13, NULL, 'Oatmeal Cookies', 'Nafis', 'w0AqZ87G2OQ006EExgt3.jpg', 'Crunchy around the edges, softer in the center, these oatmeal cookies feature the nutty taste and nubbly texture of oats.', NULL, 'Lunch', NULL, '4', '2021-10-13 11:43:26', '2021-10-13 11:43:26', NULL),
(14, NULL, 'OLIVE GARDEN COPYCAT ZUPPA TOSCANA', 'Tanjir Khan', 'z8E9IOR3NFZEomG4cy1O.jpg', 'Chop or slice uncooked sausage into small pieces and cook until browned and meat is ground in bottom of your soup pan over med-high heat.', 'Reduce heat back to medium and place, potatoes, in the pot. and slowly add the Chicken Stock and water and stir. (use Chicken Bouillon envelope for extra flavor is Chicken Stock is weak).', 'Dinner', 'Reduce heat to lowest setting and sprinkle in your kale and cooked bacon and slowly pour cream while stirring.', '2', '2021-10-13 12:04:14', '2021-10-13 12:04:14', NULL),
(15, NULL, 'OVEN-FRIED CHICKEN CHIMICHANGAS', 'Miss Anle', 'sRfPfdpPxrjMuh0DtTVG.jpg', 'lace about 1/4 cup of the chicken mixture in the center of each tortilla', 'lace about 1/4 cup of the chicken mixture in the center of each tortilla', 'Brekfast', 'lace about 1/4 cup of the chicken mixture in the center of each tortilla', '1', '2021-10-13 12:07:01', '2021-10-13 12:07:01', NULL),
(16, NULL, 'Fold opposite sides over filling', 'Miss Anle', 'jFF95GqYfSHqKBVLHL0j.jpg', 'These are great! The only thing I changed was I didn\'t use the green onion we don\'t like them and I used taco season on fresh chicken breast. This is one of the few meals everyone in my family likes. Concrete Greeley', 'I changed was I didn\'t use the green onion we don\'t like them and I used taco season on fresh chicken breast. This is one of the few meals everyone', 'Dinner', 'These are great! The only thing I changed was I didn\'t use the green onion we don\'t like them and I used taco season on fresh chicken breast. This is one of the few meals everyone in my family likes. Concrete Greeley', '4', '2021-10-13 12:08:06', '2021-10-13 12:08:06', NULL),
(17, NULL, 'Testing', 'Nafis', 'J3GTfB66MlfzrhRThhLZ.jpg', 'These are great! The only thing I changed was I didn\'t use the green onion we don\'t like them and I used taco season on fresh chicken breast. This is one of the few meals everyone in my family likes. Concrete Greeley', 'These are great! The only thing I changed was I didn\'t use the green onion .\r\nwe don\'t like them and I used taco season on fresh chicken breast. This is one of the few meals everyone in my family likes. Concrete Greeley', 'Lunch', 'These are great! The only thing I changed was I didn\'t use the green onion we don\'t like them and I used taco season on fresh chicken breast. This is one of the few meals everyone in my family likes. Concrete Greeley', '5 min', '2021-10-20 04:06:54', '2021-10-20 04:06:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `res_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diningInfo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zactive` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `mobile`, `email`, `owner`, `res_name`, `city`, `description`, `location`, `website`, `pass`, `image`, `view_count`, `note`, `diningInfo`, `zactive`, `created_at`, `updated_at`) VALUES
(1, '01641377742', 'nafischonchol@gmail.com', 'Nafis Chonchol', 'Dream Resturant', 'TANGAIL', 'Realtime driving directions to Dream Resturant - Tangail, based on live traffic updates and', 'Victoria road, Tangail', 'dream.com', '$2y$10$j8zK2qmgUz/89tXQ4eUiB.9Szk/W3YXlg08GjyoDWT/hPvhWmBufG', 'wfbXdm4jhsLDCyFfvxUF.jpg', 0, 'We are looking forward to having you in for our 7-course tasting menu! At the moment, we are not accommodating any dietary restrictions. We are a very small team at the moment and once we are streamlined we will be accepting dietary restrictions! Please bear with us! Thank you and cannot wait to have you in!', 'We have a 15 minute grace period. Please call us if you are running later than 15 minutes after your reservation time.\r\n\r\nWe may contact you about this reservation, so please ensure your email and phone number are up to date.\r\n\r\nYour table will be reserved for 2 hours.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `save_recipes`
--

CREATE TABLE `save_recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `save_recipes`
--

INSERT INTO `save_recipes` (`id`, `user_id`, `recipe_id`, `created_at`, `updated_at`) VALUES
(1, 2, 15, NULL, NULL),
(2, 2, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_point` int(11) NOT NULL DEFAULT 100,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_point`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nafis Chonchol', 'nafis@gmail.com', NULL, '$2y$10$UqSDfuWW6R/wRszUcC3tHuRaTrcN.gN/1OSkf2mlq5ycXtB2e1kKu', 30, NULL, '2021-10-21 13:41:23', '2021-10-21 13:41:23'),
(2, 'Nafis Chonchol', 'chonchol@gmail.com', NULL, '$2y$10$UqSDfuWW6R/wRszUcC3tHuRaTrcN.gN/1OSkf2mlq5ycXtB2e1kKu', 30, NULL, '2021-10-21 13:41:23', '2021-10-21 13:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `zlogs`
--

CREATE TABLE `zlogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `zinfo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ztoken` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zactive` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zlogs`
--

INSERT INTO `zlogs` (`id`, `created_at`, `updated_at`, `user_id`, `zinfo`, `ztoken`, `zactive`) VALUES
(1, NULL, NULL, 1, '{\"_token\":\"bugcsQH2wboOCA4JvcfocUxz5GisijLwb38Ukzvi\",\"date\":\"2021-11-05\",\"people\":\"5\",\"location\":null,\"hour\":\"11 PM\"}', 'bugcsQH2wboOCA4JvcfocUxz5GisijLwb38Ukzvi', 1),
(2, NULL, NULL, 1, '{\"_token\":\"KgNzPOTyozyy3OOCHUkZjJzEYBQRpBxySMM3oOp4\",\"res_id\":\"1\",\"date\":\"2021-10-21\",\"people\":\"4\",\"hour\":\"11 PM\"}', 'KgNzPOTyozyy3OOCHUkZjJzEYBQRpBxySMM3oOp4', 1),
(3, NULL, NULL, 1, '{\"_token\":\"xWvuFgMPUXS2TYmtZIG78KtmqvRYx2byWWlimbDX\",\"res_id\":\"1\",\"date\":\"2021-10-31\",\"people\":\"18\",\"hour\":\"11 PM\"}', 'xWvuFgMPUXS2TYmtZIG78KtmqvRYx2byWWlimbDX', 1),
(4, NULL, NULL, 1, '{\"_token\":\"9s9FWgfx1RNyvuVGgHvAAvimUolxcGoRV12uPGbG\",\"date\":\"2021-10-29\",\"people\":\"8\",\"location\":null,\"hour\":\"10.30 PM\",\"res_id\":\"1\"}', '9s9FWgfx1RNyvuVGgHvAAvimUolxcGoRV12uPGbG', 1),
(5, NULL, NULL, 1, '{\"_token\":\"5BSzkAAiX6CcZjkenBvEwdwVP7uvrIY5yZaeG65J\",\"res_id\":\"1\",\"date\":\"2021-10-27\",\"people\":\"5\",\"hour\":\"8.30 PM\"}', '5BSzkAAiX6CcZjkenBvEwdwVP7uvrIY5yZaeG65J', 1),
(6, NULL, NULL, 2, '{\"_token\":\"91z8BCsp2pPlOsQe3hKiZMZc1MOgEkd5QPrSkoiZ\",\"date\":\"2021-10-28\",\"people\":\"4\",\"location\":null,\"hour\":\"10.30 PM\",\"res_id\":\"1\"}', '91z8BCsp2pPlOsQe3hKiZMZc1MOgEkd5QPrSkoiZ', 1),
(7, NULL, NULL, 2, '{\"_token\":\"gfAGZaTmq1lK4UmfBfOXHRG3kBOlI3vdX78vfTxE\",\"res_id\":\"1\",\"date\":\"2021-10-27\",\"people\":\"15\",\"hour\":\"8.30 PM\"}', 'gfAGZaTmq1lK4UmfBfOXHRG3kBOlI3vdX78vfTxE', 1),
(8, NULL, NULL, 1, '{\"_token\":\"15iReSmHoQD28LrmISjOSRCbY4MppS476ZXN9b6I\",\"date\":\"2021-10-22\",\"people\":\"1\",\"location\":null,\"hour\":\"10.30 PM\",\"res_id\":\"1\"}', '15iReSmHoQD28LrmISjOSRCbY4MppS476ZXN9b6I', 1),
(9, NULL, NULL, 1, '{\"_token\":\"5f3GmxBDt68ATrKG9NlkpRevnzwiGVZhg6Aq8DR6\",\"date\":\"2021-10-22\",\"people\":\"1\",\"location\":null,\"hour\":\"10.30 PM\",\"res_id\":\"1\"}', '5f3GmxBDt68ATrKG9NlkpRevnzwiGVZhg6Aq8DR6', 1),
(10, NULL, NULL, 1, '{\"_token\":\"5f3GmxBDt68ATrKG9NlkpRevnzwiGVZhg6Aq8DR6\",\"date\":\"2021-10-22\",\"people\":\"1\",\"location\":null,\"hour\":\"10.30 PM\",\"res_id\":\"1\"}', '5f3GmxBDt68ATrKG9NlkpRevnzwiGVZhg6Aq8DR6', 1),
(11, NULL, NULL, 1, '{\"_token\":\"5f3GmxBDt68ATrKG9NlkpRevnzwiGVZhg6Aq8DR6\",\"date\":\"2021-10-22\",\"people\":\"1\",\"location\":null,\"hour\":\"10.30 PM\",\"res_id\":\"1\"}', '5f3GmxBDt68ATrKG9NlkpRevnzwiGVZhg6Aq8DR6', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_recipes`
--
ALTER TABLE `save_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zlogs`
--
ALTER TABLE `zlogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hours`
--
ALTER TABLE `hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `save_recipes`
--
ALTER TABLE `save_recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zlogs`
--
ALTER TABLE `zlogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
