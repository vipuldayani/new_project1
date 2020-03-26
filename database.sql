-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2018 at 02:10 AM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blade2wi_project5_vipul`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `id` int(11) NOT NULL,
  `about_title` varchar(100) NOT NULL DEFAULT '',
  `latest_title` varchar(200) NOT NULL DEFAULT '',
  `switch` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`id`, `about_title`, `latest_title`, `switch`) VALUES
(1, 'About us', 'This sentence summarizes the main idea of the paragraph. It may also lead the reader to the topic of the next paragraph. ', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus_image`
--

CREATE TABLE `tbl_aboutus_image` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutus_image`
--

INSERT INTO `tbl_aboutus_image` (`id`, `image`, `name`) VALUES
(9, 'ma.jpg', 'Abram Oliver'),
(14, 'fa.jpg', 'Action Lily'),
(15, 'fb.png', 'Adley Olivia'),
(16, 'mb.jpg', 'Alby Charlie');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `subject` varchar(200) NOT NULL DEFAULT '',
  `message` varchar(200) NOT NULL DEFAULT '',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`, `created_date`) VALUES
(2, 'the modification', 'vipuldayani55@gmail.com', 'datay', 'smsm\r\n', '2018-10-02 08:09:43'),
(5, 'Work name', 'vipuldayani55@gmail.com', 'mathe', '789', '2018-10-08 14:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id` int(11) NOT NULL,
  `main_title` varchar(255) NOT NULL DEFAULT '',
  `sub_title` varchar(200) NOT NULL DEFAULT '',
  `address_title` varchar(255) NOT NULL DEFAULT '',
  `sub_address` varchar(255) NOT NULL DEFAULT '',
  `profile` varchar(255) NOT NULL DEFAULT '',
  `designed` varchar(255) NOT NULL DEFAULT '',
  `switch` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `main_title`, `sub_title`, `address_title`, `sub_address`, `profile`, `designed`, `switch`) VALUES
(1, 'Contact Us', 'This sentence summarizes the main idea of the paragraph. It may also lead the reader to the topic of the next paragraph.', 'Vesperr Labs Inc', 'Home: B 403,Maruti Residency,Surat,Gujarat.\r\n\r\nPhone: +91 456 987 1230\r\n\r\nSkype: abcd@gmail.com\r\n\r\nEmail: wxyz@gmail.com ', 'Social Profiles', 'Â© Vesperr labs Inc - All right reserved Created by bladephp.co', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id` int(11) NOT NULL,
  `main_title` varchar(255) NOT NULL DEFAULT '',
  `sub_title` varchar(255) NOT NULL DEFAULT '',
  `switch` varchar(255) NOT NULL DEFAULT '0',
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `main_title`, `sub_title`, `switch`, `created_date`) VALUES
(1, 'Welcome to bladephp creative studio', 'This image is free for personal educational and non commercial usage', 'on', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `active` varchar(255) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `email`, `password`, `active`, `created_date`) VALUES
(1, 'admin@bladephp.co', '123456', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `image`) VALUES
(1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `one_title` varchar(100) NOT NULL DEFAULT '',
  `two_title` varchar(200) NOT NULL DEFAULT '',
  `switch` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `one_title`, `two_title`, `switch`) VALUES
(1, 'Portfolio', 'This is the part of the paragraph that presents details, facts, examples, quotes and arguments that support the main idea. ', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_image`
--

CREATE TABLE `tbl_portfolio_image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio_image`
--

INSERT INTO `tbl_portfolio_image` (`id`, `image`, `name`) VALUES
(3, 'pf.jpg', 'Management Work'),
(5, 'pa.jpg', 'Meeting'),
(6, 'pj.jpg', 'Product Work'),
(7, 'pk.jpg', 'Web Developer'),
(8, 'ps.jpg', 'Designer'),
(9, 'pg.jpg', 'Web Service'),
(10, 'pa.jpg', 'Work name'),
(11, 'pk.jpg', 'Place work');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `service_title` varchar(100) NOT NULL DEFAULT '',
  `sub_service` varchar(200) NOT NULL DEFAULT '',
  `switch` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `service_title`, `sub_service`, `switch`) VALUES
(1, 'Our services', 'This paragraph describes something or someone. For example, you can write a descriptive paragraph describing your best friend ', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_icon`
--

CREATE TABLE `tbl_service_icon` (
  `id` int(11) NOT NULL,
  `icon1` varchar(255) NOT NULL DEFAULT '',
  `sub_title1` varchar(255) NOT NULL DEFAULT '',
  `last_title1` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service_icon`
--

INSERT INTO `tbl_service_icon` (`id`, `icon1`, `sub_title1`, `last_title1`) VALUES
(2, 'fa fa-building-o', 'Building Design', 'A paragraph is a unit of writing that consists of one or more sentences topic. '),
(3, 'fa fa-camera', 'Photographer', 'A paragraph is a unit of writing that consists of one or more sentences topic. '),
(4, ' fa fa-car', 'Work Shop', 'A paragraph is a unit of writing that consists of one or more sentences topic. \r\n'),
(5, ' fa fa-cogs', 'Settings Work', 'A paragraph is a unit of writing that consists of one or more sentences topic. '),
(6, 'fa fa-building-o', 'Building Design ', 'A paragraph is a unit of writing that consists of one or more sentences topic. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shareicon`
--

CREATE TABLE `tbl_shareicon` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(200) NOT NULL DEFAULT '',
  `target` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shareicon`
--

INSERT INTO `tbl_shareicon` (`id`, `icon`, `link`, `target`) VALUES
(3, 'fa fa-instagram ', 'https://www.instagram.com ', 'on'),
(4, 'fa fa-send-o ', 'https://www.send.com ', 'on'),
(5, 'fa fa-whatsapp ', 'https://www.whatsapp.com ', 'on'),
(6, 'fa fa-google-plus-square ', 'https://www.googleplus.com ', 'on'),
(7, 'fa fa-pinterest ', 'https://www.pinterest.com ', 'on'),
(8, 'fa fa-twitter ', 'https://www.twitter.com ', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_title`
--

CREATE TABLE `tbl_title` (
  `id` int(11) NOT NULL,
  `title_main_title` varchar(255) NOT NULL DEFAULT '',
  `title_sub_title` varchar(255) NOT NULL DEFAULT '',
  `title_text1` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_title`
--

INSERT INTO `tbl_title` (`id`, `title_main_title`, `title_sub_title`, `title_text1`) VALUES
(1, 'Vesperr one page site template with bootstrap - bladephp', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aboutus_image`
--
ALTER TABLE `tbl_aboutus_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portfolio_image`
--
ALTER TABLE `tbl_portfolio_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_icon`
--
ALTER TABLE `tbl_service_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shareicon`
--
ALTER TABLE `tbl_shareicon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_title`
--
ALTER TABLE `tbl_title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_aboutus_image`
--
ALTER TABLE `tbl_aboutus_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_portfolio_image`
--
ALTER TABLE `tbl_portfolio_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_service_icon`
--
ALTER TABLE `tbl_service_icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_shareicon`
--
ALTER TABLE `tbl_shareicon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_title`
--
ALTER TABLE `tbl_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
