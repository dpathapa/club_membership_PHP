-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 13, 2019 at 11:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `comment_box`
--

DROP TABLE IF EXISTS `comment_box`;
CREATE TABLE `comment_box` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_box`
--

INSERT INTO `comment_box` (`id`, `member_id`, `name`, `comments`, `date_posted`) VALUES
(1, 19, 'Jane', 'Welcome to our club!!dd', '2019-05-13'),
(2, 61, 'Sia', 'Great timings!! keep it up', '2019-05-12'),
(3, 61, 'Sia', 'Great timings!! keep it up', '2019-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 1, 'Country swimming championship', 'Stafford Leisure Center', '2019-03-27', 'swimming.jpg', 'Stafford Leisure Center is organinzing a swimming charity event on 12th April, 2019 to help raise amount for cancer research.\r\n\r\nThis events is open for all level of swimmers. \r\n\r\nThe registration for the event closes on 28th of march.\r\n\r\nRegistration fee : ï¿½20 per person.\r\nVennu            : Stafford Leisure Center, stafford.\r\nTime             :11am - 2pm\r\n\r\n', 'swimming event, April', 'welcome everyone!!', ''),
(7, 7, 'Free public swimmimg', 'Stafford Lesuire Center', '2019-03-27', 'swimming.jpg', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean rutrum justo purus, id tempus est condimentum at. Mauris sit amet mi vel tellus tincidunt convallis. Donec ullamcorper lacus non dolor luctus, sit amet efficitur mauris sodales. Integer lobortis ut dolor ac convallis. Ut aliquet, tellus ac auctor porta, nisl ante vulputate quam, ac tincidunt dui massa quis lectus. Sed sollicitudin augue eget iaculis posuere. Vestibulum tellus magna, tristique sit amet volutpat eu, tincidunt sed ligula. Sed sit amet magna arcu. Mauris pharetra sem a neque sodales egestas. Nullam pulvinar risus sem, eget porta nisl semper semper. Fusce vel erat elementum, ultrices ipsum dictum, ullamcorper libero.\r\n\r\nUt nec leo aliquet, sagittis risus vitae, lobortis tortor. Sed eget risus id nisi viverra aliquet eu vel erat. Nulla suscipit, dolor vel efficitur ornare, ipsum tortor vehicula sem, in lacinia purus magna et dui. Nam ut nulla volutpat, sagittis sem id, iaculis sapien. Duis vitae auctor metus. Phasellus orci augue, tristique vitae mauris quis, tempus tempor turpis. Duis metus ligula, finibus et lorem non, tempus vulputate sapien. Phasellus nunc neque, ultricies in justo sed, aliquet aliquam leo. Sed nisl augue, volutpat id urna a, euismod egestas ligula. Morbi at malesuada ipsum. Sed vel ipsum dolor. Etiam eu mi purus. Proin gravida ultrices orci, eu posuere orci viverra et. Aliquam ullamcorper, felis et vestibulum dignissim, odio risus dictum nisl, aliquam consequat lacus enim at quam. Pellentesque eleifend justo et risus rutrum consequat.', 'swimming, free', '', ''),
(8, 7, 'test', 'test', '2019-05-10', '', 'test', 'test', '4', 'tsts');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'member'),
(2, 'coach'),
(3, 'admin'),
(4, 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `swim_records`
--

DROP TABLE IF EXISTS `swim_records`;
CREATE TABLE `swim_records` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_categories` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `member_id` int(11) NOT NULL,
  `time_recorded` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swim_records`
--

INSERT INTO `swim_records` (`event_id`, `event_name`, `event_categories`, `event_date`, `member_id`, `time_recorded`) VALUES
(1, 'College Road CLUB CHAMPIONSHIPS Sprint ', 'Junior Boys 100m Individual Medley', '2018-10-12', 41, '10.10'),
(2, 'College Road CLUB CHAMPIONSHIPS Sprints October 2016	\r\n', 'Junior Girls 100m Individual Medley\r\n', '2018-10-12', 10, '18.59'),
(4, 'College Road CLUB CHAMPIONSHIPS Sprints October 2016	', 'Intermediate Girls 100m Individual Medley', '2018-10-12', 8, '9.11'),
(5, 'College Road CLUB CHAMPIONSHIPS Sprints October 2016	', 'Senior Girls 100m Individual Medley\r\n', '2018-10-12', 34, '11.16'),
(6, 'College Road CLUB CHAMPIONSHIPS Distance\r\n', 'Junior Boys 100m Individual Medley\r\n', '2018-09-18', 10, '16.22'),
(7, 'College Road CLUB CHAMPIONSHIPS Distance', 'Junior Girls 100m Freestyle', '2018-09-18', 8, '11.34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_address` text NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_telephone` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_age`, `user_address`, `user_email`, `user_telephone`, `Date`, `user_role`, `randSalt`) VALUES
(1, 'Shaun123', '1234', 'Shaun', 'Smith', 30, '23 New Street, Birmingham, B45 3TH', 'shaun@gmail.com', '07889766568', '2019-03-27', 'parent', '$2y$10$iusesomecrazystrings22'),
(16, 'rick123', '1234', 'Ricky', 'Moore', 21, 'Stafford', 'moore@gmail.com', '0127687898', '2019-03-27', 'coach', '$2y$10$iusesomecrazystrings22'),
(18, 'brooke123', '1234', 'Manny', 'Brookes', 28, 'Birmingham, B45 3RT', 'brooke@admin.ac.uk', '0127687654', '2019-05-13', 'admin', '$2y$10$iusesomecrazystrings22'),
(19, 'h.Jane', '1234', 'Jane', 'Mary', 24, 'Stafford', 'hilton@gmailcom', '0766543434', '2019-05-10', 'member', '$2y$10$iusesomecrazystrings22'),
(61, 'sia123', 'Password1', 'siam', 'malhotra', 19, 'cv11 6rt', 'sia@email.com', '0789786789', '2019-05-12', 'member', '$2y$10$iusesomecrazystrings22'),
(62, 'san123', 'Password1', 'santosh', 'thapa', 26, 'cv11 6rt', 'email@email.com', '0123456789', '2019-05-12', 'admin', '$2y$10$iusesomecrazystrings22'),
(63, 'ane123', 'Password1', 'ane', 'anne', 19, 'cv11 6re', 'ane@example.com', '0756456789', '2019-05-12', 'member', '$2y$10$iusesomecrazystrings22'),
(64, 'man1234', '$2y$10$eMGe3dlhZ.t01gRZj1L3YOD7Jljb52RPjMwNjqW.//dEowqk0NZG6', 'manav', 'thapa', 34, 'cv11 4er', 'n@email.com', '0123456789', '2019-05-12', 'member', '$2y$10$iusesomecrazystrings22'),
(66, 'coach1', '$2y$10$CQSgpRQP.zfF0Cg8HtLeueItYL3QUl3vY95RbjyVXIDjX/ZGuwCHi', 'Ricky', 'Brand', 27, 'ST12 5RT', 'ricky@example.com', '0745678903', '2019-05-12', 'coach', '$2y$10$iusesomecrazystrings22'),
(67, 'deepa1', '$2y$10$.O5Kx8hgnMH1R3em/WVEi.ScUtFxVacqxgT.YrJPDp06eqzjRYpVy', 'deepa', 'thapa', 19, 'cv11 6qr', 'test@gmail.com', '0123456789', '2019-05-13', 'member', '$2y$10$iusesomecrazystrings22');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`) VALUES
(2, 16, 2),
(1, 18, 3),
(4, 19, 1),
(3, 61, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_box`
--
ALTER TABLE `comment_box`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`member_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swim_records`
--
ALTER TABLE `swim_records`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_id` (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_box`
--
ALTER TABLE `comment_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `swim_records`
--
ALTER TABLE `swim_records`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_box`
--
ALTER TABLE `comment_box`
  ADD CONSTRAINT `comment_box_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
