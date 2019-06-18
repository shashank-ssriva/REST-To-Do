CREATE DATABASE IF NOT EXISTS `my_to_do_db`;
USE my_to_do_db
--
-- Table structure for table `my_to_do_tb`
--

CREATE TABLE IF NOT EXISTS `my_to_do_tb` (
  `task` text NOT NULL,
  `date` text NOT NULL,
  `priority` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;
