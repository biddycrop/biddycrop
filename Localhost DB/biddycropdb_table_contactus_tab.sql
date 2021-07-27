
-- --------------------------------------------------------

--
-- Table structure for table `contactus_tab`
--

CREATE TABLE `contactus_tab` (
  `id` int(3) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
