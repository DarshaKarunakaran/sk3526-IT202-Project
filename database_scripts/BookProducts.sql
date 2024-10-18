-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql2.njit.edu
-- Generation Time: Oct 18, 2024 at 03:55 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sk3526`
--

-- --------------------------------------------------------

--
-- Table structure for table `BookProducts`
--

CREATE TABLE IF NOT EXISTS `BookProducts` (
  `BookProductID` int(11) NOT NULL,
  `BookProductCode` varchar(10) NOT NULL,
  `BookProductName` varchar(255) NOT NULL,
  `BookProductAuthor` varchar(255) NOT NULL,
  `BookDescription` text NOT NULL,
  `BookCategoryID` int(11) NOT NULL,
  `BookWholesalePrice` decimal(10,2) NOT NULL,
  `BookListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `BookProducts`
--

INSERT INTO `BookProducts` (`BookProductID`, `BookProductCode`, `BookProductName`, `BookProductAuthor`, `BookDescription`, `BookCategoryID`, `BookWholesalePrice`, `BookListPrice`, `DateCreated`) VALUES
(1000, 'PERCY', 'The Lightning Thief', 'Rick Riordan', 'The Lightning Thief is a young adult fantasy novel about a 12-year-old boy who discovers he is a demigod. He must return Zeus''s stolen lightning bolt to prevent a war between the gods.', 100, 11.99, 14.99, '2024-10-15 10:38:55'),
(1001, 'HARRY', 'Harry Potter', 'JK Rowling', 'The Harry Potter series is about an orphan boy who discovers he is a wizard. He attends Hogwarts School of Witchcraft and Wizardry, where he learns about friendship, bravery, and the battle against dark forces.', 100, 8.99, 10.99, '2024-10-15 10:38:57'),
(1002, 'POP', 'The Poppy Wars', 'RF Kuang', 'The Poppy War is a grimdark fantasy that draws its plot and politics from mid-20th-century China. The conflict in the novel is based on the Second Sino-Japanese War and explores the effects of war on its characters.', 100, 6.99, 8.99, '2024-10-15 10:38:59'),
(2000, 'ATOM', 'Atomic Habits', 'James Clear', 'This bestselling self-help book focuses on the power of small, consistent changes to improve one''s life. It provides practical strategies for building good habits and breaking bad ones.', 200, 7.99, 12.99, '2024-10-15 10:40:02'),
(2001, 'IKI', 'Ikigai', 'Hector Garcia', 'Ikigai explores the Japanese concept of finding one''s purpose in life. The book analyzes the habits and beliefs of the world''s longest-living people, providing insights into living a fulfilling life.', 200, 6.99, 8.99, '2024-10-15 10:40:04'),
(2002, 'REL', 'Self-Reliance', 'Ralph Waldo Emmerson', 'This book encourages readers to trust their own instincts and ideas. Emerson argues that true fulfillment comes from individuality and self-discovery.', 200, 7.99, 12.99, '2024-10-15 10:40:05'),
(3000, 'LAB', 'The Food Lab', 'Kenji Lopez-Alt', 'This book explains the science of cooking through recipes, instructions, and explanations. It helps cooks of all levels understand the why behind the methods, making cooking easier and more enjoyable.', 300, 15.99, 18.99, '2024-10-15 10:40:22'),
(3001, 'BET', 'Betty Crocker Cookbook', 'Betty Crock Editors', 'This classic cookbook made extensive use of photography and charts to make its techniques accessible to beginning cooks. It features a wide variety of recipes that are simple yet delicious.', 300, 15.99, 18.99, '2024-10-15 10:40:27'),
(3002, 'MAG', 'Magnolia Table', 'Joanna Gaines', 'Magnolia Table by Joanna Gaines is a collection of family recipes and personal stories. Each recipe is designed to bring family and friends together around the table.', 300, 15.99, 18.99, '2024-10-15 10:40:30'),
(4000, 'DUNE', 'Children Of Dune', 'Frank Herbert', 'Children Of Dune tells the story of young Paul Atreides, whose family accepts the stewardship of the planet Arrakis. The novel explores themes of power, responsibility, and the complexities of leadership.', 400, 6.99, 7.99, '2024-10-15 10:40:33'),
(4001, 'DIV', 'Divergent', 'Veronica Roth', 'In Divergent, the story follows Beatrice Prior, a teenager who discovers she is Divergent. This means she doesn''t fit into any one of the five factions that divide her post-apocalyptic Chicago society, leading her on a journey of self-discovery.', 400, 6.99, 7.99, '2024-10-15 10:40:34'),
(4002, 'TIME', 'This is How You Lose The Time War', 'Amal El-Mohtar', 'An unlikely correspondence forms between two rival agents who are hellbent on securing the best possible future for their warring factions. Their letters reveal a profound connection that transcends time and space.', 400, 6.99, 7.99, '2024-10-15 10:40:35'),
(5000, 'FRIDA', 'Frida: A Biography of Frida Kahlo', 'Hayden Herrera', 'This biography focuses on the life and struggles of Frida Kahlo. It delves into her artistic legacy and the personal challenges she faced throughout her life.', 500, 15.99, 17.99, '2024-10-15 10:40:36'),
(5001, 'SEUSS', 'Becoming Dr. Seuss', 'Brian Jones', 'A Biography of the life of Dr. Seuss, written by Brian Jones. It explores his creative journey and the beloved characters he brought to life through his books.', 500, 15.99, 17.99, '2024-10-15 10:40:38'),
(5002, 'CLEO', 'Cleopatra: A Life', 'Stacy Schiff', 'The Pulitzer Prize-winning biographer brings to life the most intriguing woman in the history of the world: Cleopatra, the last queen of Egypt. This biography examines her reign, her relationships, and her lasting impact on history.', 500, 15.99, 17.99, '2024-10-15 10:40:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BookProducts`
--
ALTER TABLE `BookProducts`
 ADD PRIMARY KEY (`BookProductID`), ADD UNIQUE KEY `BookProductCode` (`BookProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
