--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'ทางเข้า'),
(2, 'สมัคร'),
(3, 'หวยออนไลน์'),
(4, 'สล็อตออนไลน์'),
(5, 'คาสิโนออนไลน์'),
(6, 'กีฬาออนไลน์'),
(7, 'โปรโมชั่น'),
(8, 'ลิงค์รับทรัพย์'),
(9, 'ดาวน์โหลด'),
(10, 'ติดต่อ'),
(11, 'แทงบอล'),
(12, 'เกี่ยวกับเรา'),
(13, 'ทดลองเล่น');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `name`, `keyword`) VALUES
(1, 'Admin', 'A'),
(2, 'Webmaster', 'B');

-- --------------------------------------------------------
--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `firstname`, `lastname`, `username`, `password`, `image_path`) VALUES
(36, 1, 'admin', 'admin', 'admin', '6c31fc0f69bbf07cba275ff861d99123', '1125451648.jpg');


