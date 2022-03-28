-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

CREATE DATABASE IF NOT EXISTS `Blog`;


--
-- Table structure for table `blogs`
--
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
)

--
-- Dumping data for table `blogs`
--
INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `active`, `user_id`, `created_at`) VALUES
(1, 'This is cool title of mahin', '                            This is dummy text This is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy text                        ', 'default.jpg', 0, 1, '2020-07-19 05:09:17'),
(2, 'a title of blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupi', 'analysis-blackboard-board-bubble-355952.jpg', 1, 3, '2020-07-19 07:03:46'),
(3, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupi', 'blue-and-silver-stetoscope-40568.jpg', 1, 1, '2020-07-19 09:42:57'),
(4, 'This is another Cool title', 'This is dummy text This is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dumasdasd asd asd asd as', 'default.jpg', 1, 3, '2020-07-19 05:09:17'),
(5, 'This is Cool title 3', 'This is dummy text This is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy text', 'communication.jpg', 1, 3, '2020-07-19 05:09:17'),
(6, 'This is another Cool title 4', 'This is dummy text This is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dumasdasd asd asd asd as', 'grass-field-1250346.jpg', 1, 5, '2020-07-19 05:09:17'),
(7, 'This is Cool title', 'This is dummy text This is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy text', 'editorial.jpg', 1, 4, '2020-07-19 05:09:17'),
(8, 'This is Cool title 3', 'This is dummy text This is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy text', 'graphics.jpg', 1, 5, '2020-07-19 05:09:17'),
(9, 'This is another Cool title 4', 'This is dummy text This is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dummy textThis is dumasdasd asd asd asd as', 'default.jpg', 1, 1, '2020-07-19 05:09:17'),
(11, 'My First Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'mac.jpg', 1, 11, '2020-07-21 18:22:58');

-- --------------------------------------------------------



--
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` tinytext NOT NULL,
  `phone` tinytext,
  `password` tinytext NOT NULL,
  `image` tinytext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);


--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

