-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 06:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `pwd`) VALUES
(1, 'admin', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `views` varchar(255) NOT NULL DEFAULT '0',
  `added_by` int(11) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `thread_id`, `title`, `description`, `views`, `added_by`, `add_time`) VALUES
(1, 1, 'First Post', 'This is my first post.', '12', 1, '2019-12-08 16:46:40'),
(2, 1, 'Second Post', 'This is second post.', '10', 1, '2019-12-08 15:28:28'),
(3, 1, 'Third Title', 'This is third post.', '19', 1, '2019-12-08 16:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `post_id`, `title`, `description`, `added_by`, `add_time`) VALUES
(1, 1, 'Why this is first post?', 'Why this is first post?', '1', '2017-09-07 09:50:51'),
(2, 1, 'This is second reply', 'This is second reply', '1', '2017-09-07 09:57:16'),
(3, 1, 'Third', 'Third', '1', '2017-09-07 10:00:54'),
(4, 3, 'Demo Title.', 'Demo Message.', '1', '2017-09-07 13:52:21'),
(5, 4, 'Read Carefully', 'Read Carefully', '1', '2017-09-07 14:24:52'),
(6, 2, 'who is the best in coding??', 'amit ranbir', '2', '2019-12-08 15:18:44'),
(7, 2, 'who is the best in coding??', 'ranbir', '2', '2019-12-08 15:18:58'),
(8, 2, 'who is the best in coding??', 'asdfgh', '2', '2019-12-08 15:28:28'),
(9, 1, 'who is the best in coding??', 'anybody can be but u r not for sure\r\n', '2', '2019-12-08 16:43:34'),
(10, 1, 'who is the best in coding??', 'ammit is the best in coding', '3', '2019-12-08 16:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `views` varchar(255) NOT NULL DEFAULT '0',
  `added_by` int(11) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `topic_id`, `title`, `description`, `views`, `added_by`, `add_time`) VALUES
(1, 3, 'Instructions', 'Instruction', '22', 1, '2019-12-08 16:45:46'),
(3, 3, 'Read Carefully', 'Read Carefully', '16', 1, '2017-12-08 14:35:50'),
(4, 4, 'How are you?', 'How are you?', '37', 1, '2019-12-08 16:44:58'),
(5, 3, 'who is the best in coding??', 'guess??', '7', 1, '2019-12-08 17:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `added_by` varchar(255) NOT NULL DEFAULT '0',
  `add_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `title`, `description`, `added_by`, `add_time`) VALUES
(3, 'Instructions', '<p>Instructions</p>', '0', '2017-09-02 16:32:13'),
(4, 'General Topic', '<p>General Topic</p>', '0', '2017-09-02 16:32:19'),
(5, 'Computers', '<p>Computers</p>', '0', '2017-09-02 16:33:11'),
(6, 'Education', '<p>Education</p>', '0', '2017-09-02 16:33:29'),
(7, 'Mobile', '<p>Mobile</p>', '0', '2017-09-02 16:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `username`, `img`, `email`, `pwd`, `address`, `reg_time`) VALUES
(1, 'Amit kumar', 'ammy', '', 'ammy@gmail.com', '123456', 'phagwara', '2019-12-08 15:12:42'),
(2, 'sumit kumar', 'sumit', '', 'sumit@gmail.com', '123456', 'phagwara', '2019-12-08 15:16:41'),
(3, 'shruti kumari', 'shruti', '', 'shruti@gmail.com', 'shruti', 'jharkhand', '2019-12-08 16:44:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
