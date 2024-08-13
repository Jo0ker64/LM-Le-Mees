-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2024 at 04:09 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lm`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240813073910', '2024-08-13 07:39:37', 74),
('DoctrineMigrations\\Version20240813154702', '2024-08-13 15:47:11', 96),
('DoctrineMigrations\\Version20240813154926', '2024-08-13 15:49:29', 46),
('DoctrineMigrations\\Version20240813155100', '2024-08-13 15:51:02', 43);

-- --------------------------------------------------------

--
-- Table structure for table `formules`
--

CREATE TABLE `formules` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formules`
--

INSERT INTO `formules` (`id`, `title`, `ingredient`, `price`) VALUES
(1, 'Formule S Snacking', 'Un snacking * au choix et une boisson', '7,50 €'),
(2, 'Formule S Salade', 'Une salade * au choix  et une boisson', '10,50 €'),
(3, 'Formule M Snacking', 'Un snacking * au choix avec une boisson et un dessert', '10,50 €'),
(4, 'Formule M Salade', 'Une salade * au choix avec une boisson et un dessert', '13,10 €'),
(5, 'Formule L Snacking', 'Un snacking * au choix avec une boisson, un dessert et un café', '11,80 €'),
(6, 'Formule L Salade', 'Une salade * au choix avec une boisson, un dessert et un café', '14,40 €');

-- --------------------------------------------------------

--
-- Table structure for table `gourmandises`
--

CREATE TABLE `gourmandises` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gourmandises`
--

INSERT INTO `gourmandises` (`id`, `title`, `ingredient`, `price`) VALUES
(1, 'Cookies', 'aux pépites de chocolats', '1,50 €'),
(2, 'Muffin', 'aux myrtilles ou au chocolat', '2,40 €'),
(3, 'Chocolatine', 'Chocolatine', '1,20 €'),
(4, 'Croissant', 'au beurre', '1,10 €'),
(5, 'Tiramusu', 'au café ou aux fruits rouge', '2,40 €'),
(6, 'Salade', 'de fruits', '2,40 €'),
(7, 'Pana cotta', 'aux fruits rouges ou mangue passion', '2,40 €');

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pizza_chef`
--

CREATE TABLE `pizza_chef` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pizza_chef`
--

INSERT INTO `pizza_chef` (`id`, `title`, `ingredient`, `price`) VALUES
(1, 'Calzone', 'Base tomate, Mozzarella, Champignons, Jambon blanc, Oeuf, Origan', '12,90 €'),
(2, 'Burger', 'Base tomate, Mozzarella, Boeuf haché, Cheddar, Oignons, Origan', '12,90 €'),
(3, 'Flammekueche', 'Crème fraîche, Mozzarella, Oignons, Lardons', '12,90 €');

-- --------------------------------------------------------

--
-- Table structure for table `pizza_creme`
--

CREATE TABLE `pizza_creme` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pizza_creme`
--

INSERT INTO `pizza_creme` (`id`, `title`, `ingredient`, `price`) VALUES
(1, '4 Fromages', 'Chèvre, Roquefort, Gorgonzola, Fromages, Origan', '12,90 €'),
(2, 'Capra', 'Chèvre, Lardons, Oignons, Fromages, Miel, Origan', '12,90 €'),
(3, 'Saumon', 'Saumon fumé, Citron, Fromages, Aneth', '12,90 €'),
(4, 'Savoyarde', 'Reblochon, Lardons, Pomme de terre, Oignons, Fromages, Origan', '12,90 €'),
(5, 'Freccino', 'Poulet, Curry, Ananas, Poivrons, Oignons, Fromages, Origan', '12,90 €');

-- --------------------------------------------------------

--
-- Table structure for table `pizza_tomate`
--

CREATE TABLE `pizza_tomate` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pizza_tomate`
--

INSERT INTO `pizza_tomate` (`id`, `title`, `ingredient`, `price`) VALUES
(1, 'Tomino', 'Jambon blanc, Champignons, Fromages, Origan', '9,50 €'),
(2, 'Margarita', 'Mozzarella, Basilic, Tomates Carises, Parmesan, Huile d\'olive', '9,50 €'),
(3, 'Pepperoni', 'Chorizo, Poivrons, Oignons, Fromages, Origan. Après cuisson : Sauce basilic', '12,90 €'),
(4, 'Veggie', 'Champignons de Paris, Poivrons, Oignons, Fromages, Origan', '12,90 €');

-- --------------------------------------------------------

--
-- Table structure for table `salade_bar`
--

CREATE TABLE `salade_bar` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salade_bar`
--

INSERT INTO `salade_bar` (`id`, `title`, `ingredient`, `price`) VALUES
(1, 'Composez vous même votre salade sur une base riz, salade verte ou pâte', 'Choisisez ensuite 5 ingrédients supplémentaires*', '12,50 €');

-- --------------------------------------------------------

--
-- Table structure for table `snacking`
--

CREATE TABLE `snacking` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `snacking`
--

INSERT INTO `snacking` (`id`, `title`, `ingredient`, `price`) VALUES
(1, 'Sandwich', 'Poulet crudité, Thon crudité, Jambon crudité, Serano brebis', '6,00 €'),
(2, 'Paninis', 'Poulet curry, Jambon fromage, Burger, Paninis du moment', '5,50 €'),
(3, 'Tacos', 'Kebab, Poulet', '7,50 €'),
(4, 'Burger', 'Poulet, Steak haché', '6,90 €'),
(5, 'Pâtes', 'Poulet curry, Carbonnara, Bolognaise', '9,90 €'),
(6, 'Quiche', 'Lorraine ou Aux légumes', '3,70 €'),
(7, 'Plats', 'Hachi parmentier, Tartiflette, Plat du jour', '9,90 €');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `formules`
--
ALTER TABLE `formules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gourmandises`
--
ALTER TABLE `gourmandises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexes for table `pizza_chef`
--
ALTER TABLE `pizza_chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza_creme`
--
ALTER TABLE `pizza_creme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza_tomate`
--
ALTER TABLE `pizza_tomate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salade_bar`
--
ALTER TABLE `salade_bar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacking`
--
ALTER TABLE `snacking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formules`
--
ALTER TABLE `formules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gourmandises`
--
ALTER TABLE `gourmandises`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pizza_chef`
--
ALTER TABLE `pizza_chef`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pizza_creme`
--
ALTER TABLE `pizza_creme`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pizza_tomate`
--
ALTER TABLE `pizza_tomate`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salade_bar`
--
ALTER TABLE `salade_bar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `snacking`
--
ALTER TABLE `snacking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
