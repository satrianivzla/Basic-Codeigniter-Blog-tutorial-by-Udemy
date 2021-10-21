-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 12:08 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmvc_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`) VALUES
(1, 'world', 'Active'),
(2, 'sports', 'Active'),
(3, 'entertainment', 'Active'),
(4, 'politics', 'Active'),
(5, 'business', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(5) UNSIGNED NOT NULL,
  `post_id` int(5) UNSIGNED NOT NULL,
  `commenter_id` int(5) UNSIGNED NOT NULL,
  `comment_body` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `commenter_id`, `comment_body`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'crud far pangolin thus far buoyant stared save wow metric piteously.crud far pangolin thus far buoyant stared save wow metric piteously.', '2018-06-17 19:33:38', NULL),
(2, 4, 1, 'Ipsum aliquam integer enim ut id arcu class lectus vulputate, nisi ultrices pretium sit nunc dapibus praesent leo, accumsan a elementum ut tempor dictum euismod turpis.', '2018-06-17 19:35:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) UNSIGNED NOT NULL,
  `category_id` int(5) UNSIGNED NOT NULL,
  `poster_id` int(5) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `poster_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 'Underlay insincere alas whale inside during', 'Loosely falcon baboon oh inside away since this therefore when darn regarding a the oh scooped outside one less and that amid some bluntly mandrill squinted gawked where until inside together nakedly until below playfully without copious.', '2018-06-07 22:02:02', NULL),
(4, 2, 2, 'Fox rode ducked yikes ouch remotely much opposite urgent newt', 'Yikes unintelligible and and thanks much until beyond purely changed outside unicorn charming from gosh much as this yikes this falcon a one well naked crud far pangolin thus far buoyant stared save wow metric piteously.', '2018-06-07 22:02:24', NULL),
(5, 2, 3, 'But useful blinked masochistically won this', 'But useful blinked masochistically won this one up more virtuous trout rooster and conclusive hazy crab hazardously but manifest less carnally jeepers alas above husky candid admonishingly one bluebird mundanely about buffalo outside exuberantly gecko some oh some goodness.', '2018-06-07 22:16:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL DEFAULT 'Write something about yourself'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `password`, `profile_pic`, `gender`, `about`) VALUES
(1, 'justin@gmail.com', 'Justin', 'Miller', '$2a$08$un5NaXP0kmjIYiHfcSirceUtcv0qbdXLOohfMms1DlbmS7g523dQm', '0afaba706bef09f6043c2d18910d94d5.jpg', 'male', 'Loosely falcon baboon oh inside away since this therefore when darn regarding a the oh scooped outside one less and that amid some bluntly mandrill'),
(2, 'becky@gmail.com', 'becky', 'lynch', '$2a$08$R/YVY8k2DcZHsrLCC0pFzutYUjRC69XIWvlNKRMVoWvI6iOEXQ5fi', '4aad85f9a539ac262aaa7b3bf0cb1ef0.jpg', 'female', 'Rebecca Quin is an Irish professional wrestler and actress currently signed to WWE, where she performs on the SmackDown brand brand under the ring name Becky Lynch'),
(3, 'bailey@gmail.com', 'bailey', 'rose', '$2a$08$LrEWR4mMLgMn36skiWvNuOpX0kSLPUoeU5tGjg9aietsT8vXWnK96', 'a5d5e5c9ae81e268b6cf285a60968ba5.jpg', 'female', 'Pamela Rose Martinez is an American professional wrestler. She is signed to WWE, where she performs on the Raw brand under the ring name Bayley. She is a former Raw Women\'s Champion, as well as a former NXT Women\'s Champion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
