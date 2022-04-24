-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 10:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `code` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`code`, `name`, `image`, `description`, `price`) VALUES
(554762, 'Coco Earrings', 'earring1.jpg', 'golden hoops', '46'),
(801794, 'Riviera Earrings', 'earring2.jpg', 'golden earring', '53'),
(490951, 'Martini Earrings', 'earring3.jpg', 'rose gold earrings', '61'),
(566915, 'Vnox Earrings', 'earring4.jpg', 'gold', '36'),
(983670, 'Vintage Necklace', 'necklace1.jpg', 'multiple necklace', '57'),
(560431, 'Priyaasi Necklace', 'necklace2.jpg', 'golden necklace', '40'),
(908812, 'Antique Necklace', 'necklace3.jpg', 'double necklace', '72'),
(656029, 'Aaliyah Necklace', 'necklace4.jpg', 'necklace and earrings', '52'),
(864336, 'Tribales Bracelet', 'bracelet1.jpg', 'rose gold bracelet', '66'),
(421052, 'Leiah Ring', 'ring1.jpg', 'diamond ring', '68'),
(508610, 'Linia Ring', 'ring2.jpg', 'diamond ring', '79'),
(670863, 'Glenan Bracelet', 'bracelet2.jpg', 'diamond bracelet', '46'),
(174270, 'Tennis Deluxe Bracelet', 'bracelet3.jpg', 'tennis bracelet', '54'),
(401364, 'Osborne Reef Ring', 'ring4.jpg', 'silver diamond ring', '56'),
(553372, 'Bloom Ring', 'ring3.jpg', 'bloom ring', '58'),
(26333, 'Yveline Bracelet', 'bracelet4.jpg', 'bracelet', '33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `username`, `password`) VALUES
('rinarexhepi946', 'Rina', 'Rexhepi', 'rinnaarexhepi@gmail.com', 'rinarexhepi', 'Asdfg.hjkl123'),
('lorentkelani927', 'Lorent', 'Kelani', 'lorentk@hotmail.com', 'lorentkelani', 'Lorent.K123'),
('elionrr452', 'Elion', 'Rragomi', 'erragomi@gmail.com', 'elionrr', 'Elion1190'),
('lorikpopajjj586', 'Lorik', 'Popaj', 'lorikp@gmail.com', 'lorikpopajjj', 'Loreik1234'),
('musli.thaqi468', 'Musli', 'Thaqi', 'musli.th@gmail.com', 'musli.thaqi', '12musa34'),
('poemapolloshka856', 'Poema', 'Polloshka', 'p.poema@gmail.com', 'poemapolloshka', 'Poemaaa123'),
('lizar797', 'Liza', 'Rexhepi', 'liza@gmail.com', 'lizar', 'rexhepiliza9011'),
('cadrakuedona860', 'Edona', 'Cadraku', 'edona-c@gmail.com', 'cadrakuedona', 'CeDoNa123'),
('rigonshporta447', 'Rigon', 'Shporta', 'rigonnn@hotmail.com', 'rigonshporta', 'rig0n.Shporta'),
('zamirabaliu627', 'Zamira', 'Baliu', 'zbaliu@gmail.com', 'zamirabaliu', 'Zamiraaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 10:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `code` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`code`, `name`, `image`, `description`, `price`) VALUES
(554762, 'Coco Earrings', 'earring1.jpg', 'golden hoops', '46'),
(801794, 'Riviera Earrings', 'earring2.jpg', 'golden earring', '53'),
(490951, 'Martini Earrings', 'earring3.jpg', 'rose gold earrings', '61'),
(566915, 'Vnox Earrings', 'earring4.jpg', 'gold', '36'),
(983670, 'Vintage Necklace', 'necklace1.jpg', 'multiple necklace', '57'),
(560431, 'Priyaasi Necklace', 'necklace2.jpg', 'golden necklace', '40'),
(908812, 'Antique Necklace', 'necklace3.jpg', 'double necklace', '72'),
(656029, 'Aaliyah Necklace', 'necklace4.jpg', 'necklace and earrings', '52'),
(864336, 'Tribales Bracelet', 'bracelet1.jpg', 'rose gold bracelet', '66'),
(421052, 'Leiah Ring', 'ring1.jpg', 'diamond ring', '68'),
(508610, 'Linia Ring', 'ring2.jpg', 'diamond ring', '79'),
(670863, 'Glenan Bracelet', 'bracelet2.jpg', 'diamond bracelet', '46'),
(174270, 'Tennis Deluxe Bracelet', 'bracelet3.jpg', 'tennis bracelet', '54'),
(401364, 'Osborne Reef Ring', 'ring4.jpg', 'silver diamond ring', '56'),
(553372, 'Bloom Ring', 'ring3.jpg', 'bloom ring', '58'),
(26333, 'Yveline Bracelet', 'bracelet4.jpg', 'bracelet', '33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `username`, `password`) VALUES
('rinarexhepi946', 'Rina', 'Rexhepi', 'rinnaarexhepi@gmail.com', 'rinarexhepi', 'Asdfg.hjkl123'),
('lorentkelani927', 'Lorent', 'Kelani', 'lorentk@hotmail.com', 'lorentkelani', 'Lorent.K123'),
('elionrr452', 'Elion', 'Rragomi', 'erragomi@gmail.com', 'elionrr', 'Elion1190'),
('lorikpopajjj586', 'Lorik', 'Popaj', 'lorikp@gmail.com', 'lorikpopajjj', 'Loreik1234'),
('musli.thaqi468', 'Musli', 'Thaqi', 'musli.th@gmail.com', 'musli.thaqi', '12musa34'),
('poemapolloshka856', 'Poema', 'Polloshka', 'p.poema@gmail.com', 'poemapolloshka', 'Poemaaa123'),
('lizar797', 'Liza', 'Rexhepi', 'liza@gmail.com', 'lizar', 'rexhepiliza9011'),
('cadrakuedona860', 'Edona', 'Cadraku', 'edona-c@gmail.com', 'cadrakuedona', 'CeDoNa123'),
('rigonshporta447', 'Rigon', 'Shporta', 'rigonnn@hotmail.com', 'rigonshporta', 'rig0n.Shporta'),
('zamirabaliu627', 'Zamira', 'Baliu', 'zbaliu@gmail.com', 'zamirabaliu', 'Zamiraaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
