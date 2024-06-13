-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 10:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablica`
--

CREATE TABLE `tablica` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `kratki_opis` text NOT NULL,
  `sadrzaj` text NOT NULL,
  `arhiva` tinyint(1) NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT 'latest_news',
  `kategorija` varchar(50) NOT NULL DEFAULT 'latest_news',
  `korisnicko_ime` varchar(55) NOT NULL,
  `ime` varchar(55) NOT NULL,
  `prezime` varchar(55) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tablica`
--

INSERT INTO `tablica` (`id`, `naslov`, `autor`, `kratki_opis`, `sadrzaj`, `arhiva`, `category`, `kategorija`, `korisnicko_ime`, `ime`, `prezime`, `lozinka`, `razina`) VALUES
(20, 'Toto Wolff statement', 'Pero peric', 'Wolff says \'everything making more sense\' for Mercedes after strong weekend in Montreal', 'However, the team’s prospects seem to have improved during recent weekends, culminating in their first pole position and podium of the year with George Russell in Montreal, while Lewis Hamilton also scored his best race result of the season so far in P4.\r\n\r\nReflecting on whether this is the most confident that he has felt since the beginning of 2022 that the outfit can maintain this progress with no further obstacles ahead, Wolff sounded an optimistic but cautious note.\r\n\r\n“I’m always a bit worried when you get carried away that everything seems to now fall into place, because this is a difficult sport!” the Team Principal said after the race at the Circuit Gilles Villeneuve.\r\n\r\n', 0, 'latest_news', 'latest_news', '', '', '', '', 0),
(21, 'The F1 Points System ', 'John Doe', 'The F1 Points System awards points to drivers based on their finishing positions in each race. Here\'s a quick breakdown:', '1st place: 25 points\r\n2nd place: 18 points\r\n3rd place: 15 points\r\n4th place: 12 points\r\n5th place: 10 points\r\n6th place: 8 points\r\n7th place: 6 points\r\n8th place: 4 points\r\n9th place: 2 points\r\n10th place: 1 point\r\n\r\nPoints are also awarded for the fastest lap if the driver finishes within the top 10. Understanding these points is crucial for tracking drivers\' standings throughout the F1 season.', 0, 'latest_news', 'latest_news', '', '', '', '', 0),
(22, 'BOTTAS: SAUBER FIX FOR F1 STRUGGLES \"NOT ROCKET SCIENCE\"', 'Larry Larry', 'Valtteri Bottas has insisted the way to turn around Sauber\'s Formula 1 fortunes is \"not rocket science\" after another scoreless weekend at the Canadian Grand Prix.', 'The Hinwil-based outfit is the only team not to score points in the current campaign, having seen its qualifying performances drop since the start of the season.\r\nBottas had been running well in mixed conditions in Montreal before pitting \"one lap too early\" to switch to slicks as the track surface dried, eventually finishing 13th, 10 seconds adrift of Pierre Gasly in the last of the points-paying position.\r\nWith five cars retiring - three of which were regular points finishers in Ferrari\'s Carlos Sainz and Charles Leclerc, and Red Bull\'s Sergio Perez - an opportunity was missed for Sauber to get on the scoreboard, especially with rivals Alpine securing two top-10 spots.', 0, 'latest_news', 'latest_news', '', '', '', '', 0),
(23, 'Leclerc completes latest Pirelli 2025 tyre test', 'John Pro', 'Charles Leclerc has conducted a day of running at Mugello as part of a Pirelli tyre test for 2025.', 'Charles Leclerc completed the first day of a two-day Pirelli tyre test at Mugello, the Italian circuit owned by Ferrari which hosted a Grand Prix in 2020. \r\n\r\nThe Italian tyre manufacturer was gathering further data for its 2025 compounds, with Leclerc having driven 630 kilometres. \r\n\r\n120 laps were completed by the 26-year-old, who retired last weekend from the Canadian Grand Prix. ', 0, 'latest_news', 'latest_news', '', '', '', '', 0),
(24, 'Verstappen given Red Bull upgrade boost: \'Data is promising\'', 'Lando Norris', 'Max Verstappen and Red Bull currently lead both championships by a healthy margin, and this will be welcome news.', 'Max Verstappen\'s bid for a fourth consecutive F1 title has received a considerable boost at a time when Red Bull\'s pursuers are gathering momentum.\r\n\r\nVerstappen pulled off a crucial victory in Canada on Sunday as the Circuit Gilles Villeneuve was not expected to be favourable to Red Bull, allowing him to open up a 54-point lead over Ferrari\'s Charles Leclerc in the drivers\' standings.\r\n\r\nWith Red Bull extending its advantage in the constructors\' championship to 49 points after Ferrari suffered its worst weekend for two years after both cars retired, both team and driver are in a comfortable position going into F1\'s return to Europe and a triple-header that should suit the RB20.', 0, 'latest_news', 'latest_news', '', '', '', '', 0),
(25, 'TECH WEEKLY: Has Mercedes’ new front wing finally made them a contender again?', 'Larry Larry', 'In Montreal last weekend, Mercedes were genuinely competitive for the first time this season, with George Russell setting pole position and leading the early part of the race before ultimately finishing third.', 'In Montreal last weekend, Mercedes were genuinely competitive for the first time this season, with George Russell setting pole position and leading the early part of the race before ultimately finishing third.\r\n\r\nThe team are being understandably cautious about hailing this as the breakthrough which will see them continuing such form for the rest of the season, but it was clear that around the sequence of slow wall-lined corners in Montreal, the car for the first time gave its drivers a front end in which they could feel confident, allowing them to attack the circuit.', 0, 'latest_news', 'tech_talk', '', '', '', '', 0),
(26, 'EXPLAINED: From more agile cars to \'X-mode\' and \'Z-mode\' – unpicking the 2026 aerodynamics regulations', 'Danny Pro', 'Formula 1 cars are going to look different from 2026 with new rules dictating that the machines are smaller, lighter and more agile. After the FIA revealed the new set of aerodynamics regulations, we bring you the highlights…', 'Okay, you’ve piqued my interest. How much smaller are we talking?\r\nThe sport\'s governing body have moved to create a more agile car that\'s both shorter and narrower than the current F1 machines.\r\n\r\nREAD MORE: FIA unveils Formula 1 regulations for 2026 and beyond featuring more agile cars and active aerodynamics\r\n\r\nThey’ve slashed the wheelbase (length) by 200mm (around the length of your average reusable drinks bottle) to 3400mm while the width has been cut by 100mm (the length of your average chocolate bar) to 1900mm. The floor width has been cut by 150mm, too.', 0, 'latest_news', 'tech_talk', '', '', '', '', 0),
(27, 'TECH WEEKLY: How Mercedes\' new front wing hopes to address a significant shortfall with the W15', 'Mark B', 'Mercedes’ new front wing – introduced on the car of George Russell in Monaco – has abandoned the original W15 wing’s ‘legality tube’ feature.\r\n\r\nThe original wing – which was still being used on Lewis Hamilton’s car at Monaco – featured a very deep top element, but only in the middle third of the wing’s span.', 'Mercedes’ new front wing – introduced on the car of George Russell in Monaco – has abandoned the original W15 wing’s ‘legality tube’ feature.\r\n\r\nThe original wing – which was still being used on Lewis Hamilton’s car at Monaco – featured a very deep top element, but only in the middle third of the wing’s span.Mercedes’ new front wing – introduced on the car of George Russell in Monaco – has abandoned the original W15 wing’s ‘legality tube’ feature.\r\n\r\nThe original wing – which was still being used on Lewis Hamilton’s car at Monaco – featured a very deep top element, but only in the middle third of the wing’s span.', 0, 'latest_news', 'tech_talk', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablica`
--
ALTER TABLE `tablica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablica`
--
ALTER TABLE `tablica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
