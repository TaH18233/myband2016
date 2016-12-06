-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2015 at 09:50 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `needforspeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
`id` int(11) NOT NULL,
  `video` text NOT NULL,
  `title` text NOT NULL,
  `info` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `video`, `title`, `info`, `image`) VALUES
(1, 'https://www.youtube.com/embed/LgPcP9wW-4Y', '<h3>Road and Track presents: The Need For Speed</h3>', '<p>Uitgave: 1994<br>\r\n                    Console: Playstation, Microsoft Windows, 3DO, Sega Saturn, DOS\r\n                </p>', 'nfs_1.jpg'),
(2, 'https://www.youtube.com/embed/1AxDVyx4pfM', '<h3>Need For Speed SE</h3>', '<p>Uitgave: 1995<br>\r\n                    Console: Playstation, Microsoft Windows, 3DO, Sega Saturn, DOS\r\n                </p>', 'nfs_2.jpg'),
(3, 'https://www.youtube.com/embed/3kMYEEpTPXM', '<h3>Need For Speed II</h3>', '<p>Uitgave: 1997<br>\r\n                    Console: Playstation, Microsoft Windows\r\n                </p>', 'nfs_3.jpg'),
(4, 'https://www.youtube.com/embed/iMc5KE6lT4M', '<h3>Need For Speed II SE</h3>', '<p>Uitgave: 1997<br>\r\n                    Console: Playstation, Microsoft Windows\r\n                </p>', 'nfs_4.jpg'),
(5, 'https://www.youtube.com/embed/pP8KnhHNvqY', '<h3>Need For Speed III Hot Pursuit</h3>', '<p>Uitgave: 1998\r\n                    <br>\r\n                    Console: Playstation, Microsoft Windows,<br>\r\n                    Playstation 2.\r\n                </p>', 'nfs_5.jpg'),
(6, 'https://www.youtube.com/embed/TqdFzmtIit0', '<h3>Need For Speed Road Challenge</h3>', ' <p>Uitgave: 1999\r\n                    <br>\r\n                    Console: Playstation, Microsoft Windows\r\n                </p>', 'nfs_6.jpg'),
(7, 'https://www.youtube.com/embed/0hO-EHNuG1A', '<h3>Need For Speed Porsche 2000</h3>', '<p>Uitgave: 2000\r\n                    <br>\r\n                    Console: Playstation, Microsoft Windows, Game Boy Advange\r\n                </p>', 'nfs_7.jpg'),
(8, 'https://www.youtube.com/embed/GeaA1CqCWFA', '<h3>Need For Speed Hot Pursuit 2</h3>', '<p>Uitgave: 2002\r\n                    <br>\r\n                    Console: Playstation 2, Microsoft Windows, Xbox<br>\r\n                    Nintendo Gamecube\r\n                </p>', 'nfs_8.jpg'),
(9, 'https://www.youtube.com/embed/daN2FVAqOHA', '<h3>Need For Speed Underground</h3>', '<p>Uitgave: 2004\r\n                    <br>\r\n                    Console: Playstation 2, Microsoft Windows, Xbox<br>\r\n                    Nintendo Gamecube, Gameboy Advance<br>\r\n                    Nintendo DS, Playstation Portable\r\n                </p>', 'nfs_9.jpg'),
(10, 'https://www.youtube.com/embed/H06IaFncHJA', '<h3>Need For Speed Underground 2</h3>', '<p>Uitgave: 2004\r\n                    <br>\r\n                    Console: Playstation 2, Microsoft Windows, Xbox<br>\r\n                    Nintendo Gamecube, Gameboy Advance<br>\r\n                    Nintendo DS, Playstation Portable\r\n                </p>', 'nfs_10.jpg'),
(11, 'https://www.youtube.com/embed/gyfWr3QhFSk', '<h3>Need For Speed Underground Rivals</h3>', '<p>Uitgave: 2005\r\n                    <br>\r\n                    Console: Playstation Portable\r\n                </p>', 'nfs_11.jpg'),
(12, 'https://www.youtube.com/embed/3I6BLurNt5g', '<h3>Need For Speed Most Wanted</h3>', '<p>Uitgave: 2005\r\n                    <br>\r\n                    Console: Playstation 2, Playstation Portable,<br>\r\n                    Xbox 360, Windows, Nintendo DS, Ios<br>\r\n                    Nintendo Gamecube</p>', 'nfs_12.jpg'),
(13, 'https://www.youtube.com/embed/8sg3QT3rJkI', '<h3>Need For Speed Carbon</h3>', ' <p>Uitgave: 2006\r\n                    <br>\r\n                    Console: Console: Playstation 2, Playstation Portable,<br>\r\n                    Xbox 360, Windows, Nintendo DS, Ios<br>\r\n                    Nintendo Gamecube, Arcadekasten\r\n                </p>', 'nfs_13.jpg'),
(14, 'https://www.youtube.com/embed/fPIZe-jaxgM', ' <h3>Need For Speed Pro Street</h3>', '<p>Uitgave: 2007\r\n                    <br>\r\n                    Console: Playstation 2, playstation 3,<br>\r\n                    Xbox 360, Playstation Portable,<br>\r\n                    Windows, Nintendo Ds, Wii\r\n                </p>', 'nfs_14.jpg\r\n'),
(15, 'https://www.youtube.com/embed/HVhYrwyqrYo', '<h3>Need For Speed Undercover</h3>', '<p>Uitgave: 2008\r\n                    <br>\r\n                    Console: Playstation 3, Xbox 360, Windows,<br>\r\n                    Wii, Nintendo Ds, Ios\r\n                </p>', 'nfs_15.jpg'),
(16, 'https://www.youtube.com/embed/hIzgZpOBlK0', '<h3>Need For Speed Shift</h3>', '<p>Uitgave: 2009\r\n                    <br>\r\n                    Console: Android, Playstation 3, Xbox 360,<br>\r\n                    Windows, Ios, Playstation Portable\r\n                </p>', 'nfs_16.jpg'),
(17, 'https://www.youtube.com/embed/vlapBAuZRl8', ' <h3>Need For Speed World</h3>', '<p>Uitgave: 2010\r\n                    <br>\r\n                    Console: Windows\r\n                </p>', 'nfs_17.jpg'),
(18, 'https://www.youtube.com/embed/D6ouHWP0KrY', '<h3>Need For Speed Hot Pursuit</h3>', '<p>Uitgave: 2010\r\n                    <br>\r\n                    Console: Playstation 3, Android, Windows,<br>\r\n                    Xbox 360, Ios\r\n                </p>', 'nfs_18.jpg'),
(19, 'https://www.youtube.com/embed/0mvB5Avylyk', '<h3>Need For Speed Shift Unleashed</h3>', '<p>Uitgave: 2011\r\n                    <br>\r\n                    Console: Playstation 3, Xbox 360, Windows,<br>\r\n                    Ios, Android\r\n                </p>', 'nfs_19.jpg'),
(20, 'https://www.youtube.com/embed/7F8ADHPxFqw', '<h3>Need For Speed The run</h3>', '<p>Uitgave: 2011\r\n                    <br>\r\n                    Console: Nintendo 3DS, Wii, Ios, Windows,<br>\r\n                    Playstation 3, Xbox 360\r\n                </p>', 'nfs_20.jpg'),
(21, 'https://www.youtube.com/embed/Y5wssYZHVWc', '<h3>Need For Speed Most Wanted</h3>', '<p>Uitgave: 2012\r\n                    <br>\r\n                    Console: Playstation 3, Xbox 360, Windows,<br>\r\n                    Playstaton Portable vita, Ios\r\n                </p>', 'nfs_21.jpg'),
(22, 'https://www.youtube.com/embed/Y5wssYZHVWc', '<h3>Need For Speed Rivals</h3>', '<p>Uitgave: 2013\r\n                    <br>\r\n                    Console: Playstation 3, Playstation 4,<br>\r\n                    Xbox One, Xbox 360, Windows\r\n                </p>', 'nfs_22.jpg'),
(23, 'https://www.youtube.com/embed/Y5wssYZHVWc', ' <h3>Need For Speed No Limits</h3>', '<p>Uitgave: 2015\r\n                    <br>\r\n                    Console: Android, Ios\r\n                </p>', 'nfs_23.jpg'),
(24, 'https://www.youtube.com/embed/Y5wssYZHVWc', '<h3>Need For Speed</h3>', '<p>Uitgave: 2015\r\n                    <br>\r\n                    Console: Windows, Playstation 4, <br>\r\n                    Xbox One, Ios,\r\n                </p>', 'nfs_24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsarticles`
--

CREATE TABLE `newsarticles` (
`id` int(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsarticles`
--

INSERT INTO `newsarticles` (`id`, `title`, `text`, `image`, `date_created`) VALUES
(1, 'Need For Speed programmeertaal.', 'Elke Need For Speed is geprogrammeerd in Java. ', '', '2015-10-08 20:58:30'),
(2, 'EEN NIEUW TIJDPERK VOOR NEED FOR SPEED', 'De race franchise die je kent en waar je van houdt is terug. Need for Speed gaat dit najaar terug naar zijn roots, met een nachtelijke open wereld, uitgebreide auto customization en een meeslepend verhaal, wat je helemaal meeneemt in de ervaring. Met dank aan onze eigen community van Speedhunters, is Need for Speed vormgegeven door hen die het verleden, het heden en de toekomst van authentieke urban car culture ademen. In Need for Speed zal je naar hartenlust het uiterlijk van je auto kunnen aanpassen en kan je de prestaties ervan verbeteren met must-have opties om er een echte unieke creatie van te maken.Op de komende E3 zullen we meer laten zien van de aanpassingsmogelijkheden en zal je meer informatie krijgen over Need for Speed.\r\n\r\n\r\n', '', '2015-10-08 20:55:16'),
(3, 'Overleef het ravijn\r\n', 'Verlaat de straten en ga in de ravijnen buiten de stad de strijd aan met rivaliserende bazen. In de gloednieuwe racetypen Canyon Duel (ravijnrace) en Drift (slippen) worden je vaardigheden en zenuwen tot het uiterste op de proef gestel', '', '2015-10-08 20:58:16'),
(4, 'Riskeer alles in het heetst van de strijd', 'Welkom in Redview County, waar politie en racers het voordurend tegen elkaar opnemen in zenuwslopende straatraces. Beide partijen gaan meedogenloos de strijd aan om de nationale, lokale en sociale media te veroveren en de beste auto’s, aanpassingen en technologie te verdienen. Zet alles op het spel. Vertrouw niemand.', '', '2015-10-08 21:00:27'),
(5, 'Rivaliteit met hoge inzet', 'Straatracers zijn eenlingen. In hun wendbare auto''s, gemaakt voor snelle races en epische achtervolgingen, zijn ze slechts uit op hun eigen glorie. Agenten werken in teams om racers te achtervolgen en arresteren en gebruiken daarbij alles wat de politie in huis heeft. Verander van rol wanneer je maar wilt en kijk hoe de inzet steeds hoger wordt. Met het nieuwe scoresysteem kun je je Speed Points op het spel zetten om nog grotere beloningen te verdienen.', '', '2015-10-08 21:01:10'),
(6, 'Jouw auto, jouw persoonlijkheid', 'Verhoog de prestaties van je auto met de nieuwste upgrades en technologie. Pas je racemonster aan met nieuwe lak, designs, speciale kentekenborden, velgen en stickers. Maak je vrienden en rivalen jaloers met het uiterlijk van je auto. Sla verschillende configuraties op en hou verschillende autopakketten achter de hand om in elke situatie een fantastische indruk te maken.', '', '2015-10-08 21:01:44'),
(7, 'Achtervolgings- en ontsnappingstechnologieën', 'De intense race-ervaringen worden nog heftiger met speciale technologieën en upgrades voor beide partijen. Racers kunnen ontsnappingstechnologieën gebruiken, zoals stoorzenders en elektromagnetische stoten. Politieagenten kunnen gebruikmaken van schokgolven, wegversperringen, helikopterondersteuning en nog veel meer om racers het leven zuur te maken. Welke kant van de wet je ook kiest, met de juiste technologie blijf je je rivalen altijd een stap voor.', '', '2015-10-08 21:02:27'),
(8, 'Racen zonder regels', 'De snelste overleeft in Need for Speed Most Wanted, een game die het ‘echte-autogevoel’ van deze reeks combineert met de intense snelheid en agressie van Burnout. Rem, drift en vecht je een weg langs politie en rivalen, puur en alleen met je rijvaardigheid en een flinke dosis nitro.', '', '2015-10-08 21:03:40'),
(9, 'Versla je vrienden', 'Autolog 2 voert de intense concurrentiestrijd nog verder op met gepersonaliseerde race-aanbevelingen en feeds waarmee je je vrienden op de hoogte houdt van je belangrijke scores, snelheden en tijden. Verdien altijd en op elk systeem Need for Speed-punten. Als je er genoeg verzamelt, hebben je vrienden het nakijken en word jij de Most Wanted.', '', '2015-10-08 21:04:37'),
(10, 'Open wereld', 'Schud de politie af op jouw manier. Spring over schansen en neem sluiproutes. Hou je schuil of schud de politie af in omgevingen waarin je de unieke voordelen van jouw auto ten volle kunt benutten. Alles draait om vrijheid. Rij waar je maar wilt met je vrienden. Ontdek verborgen gameplay of gebruik je kennis van de stad om je rivalen te verslaan in een oneindige reeks uitdagingen.', '', '2015-10-08 21:10:48'),
(11, 'Race-manoeuvres', 'Dankzij de compleet nieuwe game-engine kun je waanzinnige race-manoeuvres maken om uit handen van de politie te blijven.', '', '2015-10-08 21:15:00'),
(12, 'Rich authentic customization.', 'Build a car to reflect your character with extensive visual and performance customization options. Because your ride should look as good as it handles.', '', '2015-10-08 21:18:44'),
(13, 'West Coast playground.', 'Discover Ventura Bay. From the dense city streets to the winding roads that lead you to the harbor and through the canyons, this is your home turf.', '', '2015-10-08 21:19:24'),
(14, 'Play your way.', 'Need for Speed returns with 5 unique ways to play: Speed, Style, Build, Crew and Outlaw, enabling you to earn reputation and ultimately win your way.', '', '2015-10-08 21:19:56'),
(15, 'PRE-ORDER BONUS: NEED FOR SPEED PERFORMANCE PACK AND STYLING PACK.', '• Includes an Exclusive Styling Sticker, Spoiler, RIMS, and Splitter.<br>\r\n• The Performance Pack includes an exclusive Performance Sticker, and early access to a High Performance Turbocharger, Engine Block, and Exhaust.\r\n', '', '2015-10-08 21:21:22'),
(16, 'GET EXTRA IN-GAME CONTENT WHEN YOU GO WITH THE DELUXE EDITION.', '• Lifetime discount on all items using in-game currency.<br>\r\n• Tricked-out starter car.<br>\r\n• Exclusive wraps.<br>\r\n• Unique Identifying Sticker.<br>', '', '2015-10-08 21:22:31'),
(17, 'Front and Rear Tire Pressure', 'Changing tire pressure is a way to fine-tune the grip relationships between front and rear. Whether adding more grip to the front or less grip to the rear it will result in a car that initiates drift more easily. Likewise removing grip from the front or adding grip to the rear will result in a car that is less likely to lose its back end when turning.', '', '2015-10-08 21:26:03'),
(18, 'Steer Response', 'A fast steer response enables more reactive, twitchier steering suited to drift. A slower steer response is steadier and more controlled.', '', '2015-10-08 21:26:30'),
(19, 'Braking Drift Assist', 'Braking Drift Assist ON increases the possibility to initiate a braking drift. Turning this OFF decreases the possibility to initiate a braking drift.', '', '2015-10-08 21:27:03'),
(20, 'Handbrake Strength', 'A strong handbrake makes it easier to turn 180 degrees. A weaker handbrake can be used for drift initiation with less loss of speed & potentially a method for chaining drifts. ', '', '2015-10-08 21:27:38'),
(21, 'Nitrous', 'Tuning towards Power will make the nitrous more powerful, but its duration is decreased. Increasing Duration will make the nitrous less powerful, but it lasts longer.', '', '2015-10-08 21:28:05'),
(22, 'Forced Induction', 'Forced Inductions come in many forms. A Supercharger will be most noticeable at lower RPM’s unlike a Turbocharger which tends to provide less boost until the engine is running at higher RPM’s. In all cases though, installing or upgrading your forced induction will give your engine an excess of torque providing an easy way to get fast, and more importantly, get fast quick.', '', '2015-10-08 21:28:40'),
(23, 'Electric System', 'A lighter battery can shed precious weight from the car, while good grounds and electrical connections ensure your ECU and ignition are always working properly.', '', '2015-10-08 21:29:08'),
(24, 'Cylinder Heads', 'Cylinder head upgrades can change the size and design of the ports which define the volume of air and fuel that flow to the combustion chamber. Better airflow is the key to allowing your engine to create additional power.', '', '2015-10-08 21:29:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsarticles`
--
ALTER TABLE `newsarticles`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `newsarticles`
--
ALTER TABLE `newsarticles`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;