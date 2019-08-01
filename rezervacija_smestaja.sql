-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 07:44 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezervacija_smestaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

CREATE TABLE `anketa` (
  `idAnketa` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rezultat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`idAnketa`, `naziv`, `rezultat`) VALUES
(1, 'Awesome', 2),
(2, 'Good', 1),
(3, 'Not bad', 3),
(4, 'Horrifying', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cene`
--

CREATE TABLE `cene` (
  `idCena` int(11) NOT NULL,
  `vrednost1` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cene`
--

INSERT INTO `cene` (`idCena`, `vrednost1`) VALUES
(1, 'Price: $24'),
(2, 'Price: $28'),
(3, 'Price: $25'),
(4, 'Price: $18'),
(5, 'Price: $19'),
(6, 'Price: $17');

-- --------------------------------------------------------

--
-- Table structure for table `drzava`
--

CREATE TABLE `drzava` (
  `idDrzava` int(11) NOT NULL,
  `imeDrzave` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drzava`
--

INSERT INTO `drzava` (`idDrzava`, `imeDrzave`) VALUES
(1, 'Engleska');

-- --------------------------------------------------------

--
-- Table structure for table `dvokrevetna`
--

CREATE TABLE `dvokrevetna` (
  `idDvo` int(11) NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idZvezdice` int(11) NOT NULL,
  `naslov2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idGost` int(11) NOT NULL,
  `idKvadrat` int(11) NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `idCena` int(11) NOT NULL,
  `idTip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dvokrevetna`
--

INSERT INTO `dvokrevetna` (`idDvo`, `slika`, `naslov`, `idZvezdice`, `naslov2`, `idGost`, `idKvadrat`, `opis`, `idCena`, `idTip`) VALUES
(3, 'images/double3.jpg', 'Featured Room', 2, 'Double Room 3', 3, 4, 'This is our double room number three in this list. Informations about room are presented.', 3, 2),
(4, 'images/double4.jpg', 'Featured Room', 2, 'Double Room 4', 3, 2, 'This is our double room number four in this list. Informations about room are presented.', 4, 2),
(5, 'images/double5.jpg', 'Featured Room', 2, 'Double Room 5', 3, 3, 'This is our double room number five in this list. Informations about room are presented.', 1, 2),
(6, 'images/double6.jpg', 'Featured Room', 2, 'Double Room 6', 3, 6, 'This is our double room number six in this list. Informations about room are presented.', 5, 2),
(7, 'images/double1.jpg', 'Featured Room', 2, 'Double Room 2', 3, 1, 'This is our double room number two in this list. Informations about room are presented.', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gosti`
--

CREATE TABLE `gosti` (
  `idGost` int(11) NOT NULL,
  `brojGostiju` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gosti`
--

INSERT INTO `gosti` (`idGost`, `brojGostiju`) VALUES
(2, '1 Guest'),
(3, '2 Guests'),
(4, '3 Guests');

-- --------------------------------------------------------

--
-- Table structure for table `grad`
--

CREATE TABLE `grad` (
  `idGrad` int(11) NOT NULL,
  `imeGrada` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idDrzava` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grad`
--

INSERT INTO `grad` (`idGrad`, `imeGrada`, `idDrzava`) VALUES
(1, 'London', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `idHotel` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idZvezdice` int(11) NOT NULL,
  `idGrad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`idHotel`, `naziv`, `adresa`, `idZvezdice`, `idGrad`) VALUES
(1, 'Luxury Hotel', 'London 1st Avenue 22', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_tipsobe`
--

CREATE TABLE `hotel_tipsobe` (
  `idHotelTip` int(11) NOT NULL,
  `idHotel` int(11) NOT NULL,
  `idTip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jednokrevetna`
--

CREATE TABLE `jednokrevetna` (
  `idJed` int(11) NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idZvezdice` int(11) NOT NULL,
  `naslov2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idGost` int(11) NOT NULL,
  `idKvadrat` int(11) NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `idCena` int(11) NOT NULL,
  `idTip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jednokrevetna`
--

INSERT INTO `jednokrevetna` (`idJed`, `slika`, `naslov`, `idZvezdice`, `naslov2`, `idGost`, `idKvadrat`, `opis`, `idCena`, `idTip`) VALUES
(2, 'images/img_2.jpg', 'Featured Room', 2, 'Single Room 2', 2, 5, 'This is our single room number two in this list. Informations about room are presented.', 4, 1),
(3, 'images/single2.jpg', 'Featured Room', 2, 'Single Room 3', 2, 3, 'This is our single room number three in this list. Informations about room are presented.', 3, 1),
(4, 'images/single3.jpg', 'Featured Room', 2, 'Single Room 4', 2, 6, 'This is our single room number four in this list. Informations about room are presented.', 1, 1),
(5, 'images/single4.jpg', 'Featured Room', 2, 'Single Room 5', 2, 4, 'This is our single room number five in this list. Informations about room are presented.', 5, 1),
(6, 'images/single5.jpg', 'Featured Room', 2, 'Single Room 6', 2, 1, 'This is our single room number six in this list. Informations about room are presented.', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `aktivan` bit(1) NOT NULL DEFAULT b'0',
  `datum_registracije` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uloga_id` int(3) UNSIGNED NOT NULL,
  `korisnicko_ime` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `email`, `lozinka`, `aktivan`, `datum_registracije`, `uloga_id`, `korisnicko_ime`, `token`) VALUES
(1275, 'Nikola', 'Kalincevic', 'kalincevicnikola8@gmail.com', '79d4b4306b05ae785e12817466ef806a', b'1', '2018-06-10 20:53:06', 1, 'kalina', '2e24b3fcbdb4e92d6ee93a3bfb4ec5b5eca0dce9'),
(1414, 'Relja', 'Popovic', 'reljaaa@gmail.com', '30aa804fdab95648959b4ac3a5d482b0', b'1', '2018-06-12 08:42:50', 2, 'reljaaaa', '45c0d6c9213c685a39e93f0e0400a25e17309b28'),
(1417, 'Nemanjica', 'Avramovica', 'nece22222a@gmail.com', 'fcacff7a17ea25237175fe9ca8f7ab5c', b'1', '2018-06-12 22:46:41', 2, 'nemanjaaaaaaa', '9eef7bd3b0572289260e92f75b4a34e823fd3900'),
(1419, 'Strahinja', 'Banovic', 'straleaaa@gmail.com', 'e187536f003f16ddc9f53f58dcd56a1e', b'1', '2018-06-12 22:48:38', 2, 'strahinjaaa', '4e88ee60416ff61e8b8cfe2d478a96a8db15012e'),
(1440, 'Marko', 'Markovic', 'nek22i@gmail.com', '5e62acdd710b73f98d9c6723da8fbcb0', b'0', '2018-06-12 22:50:31', 2, 'batica', '7ce97683d394201e0800a36974a58f4649d05862');

-- --------------------------------------------------------

--
-- Table structure for table `kvadratura`
--

CREATE TABLE `kvadratura` (
  `idKvadrat` int(11) NOT NULL,
  `vrednost` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kvadratura`
--

INSERT INTO `kvadratura` (`idKvadrat`, `vrednost`) VALUES
(1, '24 ft'),
(2, '22 ft'),
(3, '27 ft'),
(4, '19 ft'),
(5, '17 ft '),
(6, '20 ft');

-- --------------------------------------------------------

--
-- Table structure for table `linkovi`
--

CREATE TABLE `linkovi` (
  `idLink` int(10) NOT NULL,
  `imeLinka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `putanja` text COLLATE utf8_unicode_ci NOT NULL,
  `roditelj` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linkovi`
--

INSERT INTO `linkovi` (`idLink`, `imeLinka`, `putanja`, `roditelj`) VALUES
(1, 'Home', 'index.php?page=home', 0),
(3, '1# Room ', 'index.php?page=singleRoom', 0),
(4, '2# Room', 'index.php?page=doubleRoom', 0),
(5, '3# Room', 'index.php?page=tripleRoom', 0),
(6, 'Blog', 'index.php?page=vesti', 0),
(7, 'About', 'index.php?page=informacije', 0),
(9, 'Register', 'index.php?page=register', 0),
(10, 'Booking', 'index.php?page=rezervacije', 0);

-- --------------------------------------------------------

--
-- Table structure for table `osoblje`
--

CREATE TABLE `osoblje` (
  `idOsoblje` int(11) NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekst2` text COLLATE utf8_unicode_ci NOT NULL,
  `idHotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `osoblje`
--

INSERT INTO `osoblje` (`idOsoblje`, `slika`, `tekst`, `naslov`, `tekst2`, `idHotel`) VALUES
(1, 'images/person_1.jpg', 'STAFF', 'Michelle Aguilar', 'She is working like Front Desk Clerks. As the name implies, she is in the reception area, which is the first place guests go when they arrive at a hotel. As a front desk clerk she\'ll need to verify a guest\'s reservation. If the guest doesn\'t have a reservation, she\'ll need to check room availability.', 1),
(2, 'images/person_2.jpg', 'STAFF', 'Chris Standworth', 'He is our hotel porter.He usually dress in uniform, so that guests recognize that he is employee of the hotel. As soon as a guest checks in at the front desk, he helps the guest take his or her luggage to the room and makes sure the room is acceptable to the guest.', 1),
(3, 'images/person_3.jpg', 'COOK', 'Rob McDonald', 'He is working like Kitchen Staff. As the name implies, as a kitchen staff member he may be cooking, washing dishes, preparing salads, ordering supplies, planning menus, or similar duties, depending on your job. As an entry level kitchen staff member, he is most likely preparing foods for senior cooks or chefs.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `idRez` int(11) NOT NULL,
  `datumOd` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `datumDo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `brojGostiju` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipsobe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8_unicode_ci NOT NULL,
  `idHotel` int(11) NOT NULL,
  `imeSobe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`idRez`, `datumOd`, `datumDo`, `brojGostiju`, `tipsobe`, `komentar`, `idHotel`, `imeSobe`, `email`) VALUES
(85, '2017-05-24', '2017-06-23', '0', '0', '', 1, '0', 'jaja@gmail.com'),
(86, '2018-06-22', '2018-06-25', '2', '2', 'Rezervacija...', 1, '9', 'pera@gmail.com'),
(118, '2018-03-21', '2018-03-26', '3', '3', 'Komentar....', 1, '14', 'zika@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tipsobe`
--

CREATE TABLE `tipsobe` (
  `idTip` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tipsobe`
--

INSERT INTO `tipsobe` (`idTip`, `naziv`) VALUES
(1, 'Jednokrevetna'),
(2, 'Dvokrevetna'),
(3, 'Trokrevetna');

-- --------------------------------------------------------

--
-- Table structure for table `trokrevetna`
--

CREATE TABLE `trokrevetna` (
  `idTro` int(11) NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idZvezdice` int(11) NOT NULL,
  `naslov2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idGost` int(11) NOT NULL,
  `idKvadrat` int(11) NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `idCena` int(11) NOT NULL,
  `idTip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trokrevetna`
--

INSERT INTO `trokrevetna` (`idTro`, `slika`, `naslov`, `idZvezdice`, `naslov2`, `idGost`, `idKvadrat`, `opis`, `idCena`, `idTip`) VALUES
(2, 'images/triple2.jpg', 'Featured Room', 2, 'Triple Room 2', 4, 6, 'This is our triple room number two in this list. Informations about room are presented.', 6, 3),
(3, 'images/triple3.jpg', 'Featured Room', 2, 'Triple Room 3', 4, 2, 'This is our triple room number three in this list. Informations about room are presented.', 2, 3),
(4, 'images/triple4.jpg', 'Featured Room', 2, 'Triple Room 4', 4, 5, 'This is our triple room number four in this list. Informations about room are presented.', 4, 3),
(5, 'images/triple5.jpg', 'Featured Room', 2, 'Triple Room 5', 4, 4, 'This is our triple room number five in this list. Informations about room are presented.', 5, 3),
(6, 'images/triple6.jpg', 'Featured Room', 2, 'Triple Room 6', 4, 3, 'This is our triple room number six in this list. Informations about room are presented.', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `id` int(2) UNSIGNED NOT NULL,
  `naziv` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id`, `naziv`) VALUES
(1, 'admin'),
(2, 'korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `idVest` int(11) NOT NULL,
  `slikaVest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekst1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekst2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekst3` text COLLATE utf8_unicode_ci NOT NULL,
  `idHotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`idVest`, `slikaVest`, `tekst1`, `tekst2`, `tekst3`, `idHotel`) VALUES
(1, 'images/img_5.jpg', 'New Rooms', 'Big rooms for All', 'Big rooms like this gives you great comfort and relaxation. Reserve this room and enjoy...', 1),
(2, 'images/person_4.jpg', 'News', 'New Staff Added', 'Adam Hart is our new hotel manager. He will join us in a couple of days. We want him a welcome and a lot of success at our hotel.', 1),
(3, 'images/person_6.jpg', 'News', 'New Staff Added', 'Michael Morisson is our new waiter. He will join us in a couple of days. We want him a welcome and a lot of success at our hotel.', 1),
(5, 'images/new33.jpg', 'New Rooms ', 'Incredible Room', 'Our new incredible room which have jacuzzi inside. She is very suitable for rest. More information soon...', 1),
(6, 'images/new22.jpg', 'Rooms', 'New Room', 'New modern room which have powerful TV we present to us. More informations soon.', 1),
(7, 'images/new44.jpg', 'Rooms', 'New Room', 'New beautyful room with balcony. It is a paradise for relaxation. Reserve this room now.', 1),
(8, 'images/new1.jpg', 'New Rooms', 'Luxurious Rooms for All', 'We present to us new room with a beautiful view to the sea. This room will be available for next few days.', 1),
(9, 'images/new55.jpg', 'Rooms', 'New Room', 'Kitchen in our new room is sensation. Just reserve this room, cook and enjoy...', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zvezdice`
--

CREATE TABLE `zvezdice` (
  `idZvezdice` int(11) NOT NULL,
  `brojZvezdica` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zvezdice`
--

INSERT INTO `zvezdice` (`idZvezdice`, `brojZvezdica`) VALUES
(2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anketa`
--
ALTER TABLE `anketa`
  ADD PRIMARY KEY (`idAnketa`);

--
-- Indexes for table `cene`
--
ALTER TABLE `cene`
  ADD PRIMARY KEY (`idCena`);

--
-- Indexes for table `drzava`
--
ALTER TABLE `drzava`
  ADD PRIMARY KEY (`idDrzava`);

--
-- Indexes for table `dvokrevetna`
--
ALTER TABLE `dvokrevetna`
  ADD PRIMARY KEY (`idDvo`),
  ADD KEY `idZvezdice` (`idZvezdice`),
  ADD KEY `idGost` (`idGost`),
  ADD KEY `idKvadrat` (`idKvadrat`),
  ADD KEY `idCena` (`idCena`),
  ADD KEY `idTip` (`idTip`);

--
-- Indexes for table `gosti`
--
ALTER TABLE `gosti`
  ADD PRIMARY KEY (`idGost`);

--
-- Indexes for table `grad`
--
ALTER TABLE `grad`
  ADD PRIMARY KEY (`idGrad`),
  ADD KEY `idDrzava` (`idDrzava`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`idHotel`),
  ADD KEY `idZvezdice` (`idZvezdice`),
  ADD KEY `idGrad` (`idGrad`);

--
-- Indexes for table `hotel_tipsobe`
--
ALTER TABLE `hotel_tipsobe`
  ADD PRIMARY KEY (`idHotelTip`),
  ADD KEY `idHotel` (`idHotel`),
  ADD KEY `idTip` (`idTip`);

--
-- Indexes for table `jednokrevetna`
--
ALTER TABLE `jednokrevetna`
  ADD PRIMARY KEY (`idJed`),
  ADD KEY `idZvezdice` (`idZvezdice`),
  ADD KEY `idGost` (`idGost`),
  ADD KEY `idKvadrat` (`idKvadrat`),
  ADD KEY `idTip` (`idTip`),
  ADD KEY `cena` (`idCena`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`),
  ADD KEY `uloga_id` (`uloga_id`);

--
-- Indexes for table `kvadratura`
--
ALTER TABLE `kvadratura`
  ADD PRIMARY KEY (`idKvadrat`);

--
-- Indexes for table `linkovi`
--
ALTER TABLE `linkovi`
  ADD PRIMARY KEY (`idLink`);

--
-- Indexes for table `osoblje`
--
ALTER TABLE `osoblje`
  ADD PRIMARY KEY (`idOsoblje`),
  ADD KEY `idHotel` (`idHotel`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`idRez`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idTip` (`tipsobe`),
  ADD KEY `idHotel` (`idHotel`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `tipsobe`
--
ALTER TABLE `tipsobe`
  ADD PRIMARY KEY (`idTip`);

--
-- Indexes for table `trokrevetna`
--
ALTER TABLE `trokrevetna`
  ADD PRIMARY KEY (`idTro`),
  ADD KEY `idZvezdice` (`idZvezdice`),
  ADD KEY `idGost` (`idGost`),
  ADD KEY `idKvadrat` (`idKvadrat`),
  ADD KEY `idCena` (`idCena`),
  ADD KEY `idTip` (`idTip`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `naziv` (`naziv`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`idVest`),
  ADD KEY `idHotel` (`idHotel`);

--
-- Indexes for table `zvezdice`
--
ALTER TABLE `zvezdice`
  ADD PRIMARY KEY (`idZvezdice`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anketa`
--
ALTER TABLE `anketa`
  MODIFY `idAnketa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cene`
--
ALTER TABLE `cene`
  MODIFY `idCena` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drzava`
--
ALTER TABLE `drzava`
  MODIFY `idDrzava` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dvokrevetna`
--
ALTER TABLE `dvokrevetna`
  MODIFY `idDvo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gosti`
--
ALTER TABLE `gosti`
  MODIFY `idGost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grad`
--
ALTER TABLE `grad`
  MODIFY `idGrad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `idHotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_tipsobe`
--
ALTER TABLE `hotel_tipsobe`
  MODIFY `idHotelTip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jednokrevetna`
--
ALTER TABLE `jednokrevetna`
  MODIFY `idJed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1441;

--
-- AUTO_INCREMENT for table `kvadratura`
--
ALTER TABLE `kvadratura`
  MODIFY `idKvadrat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `linkovi`
--
ALTER TABLE `linkovi`
  MODIFY `idLink` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `osoblje`
--
ALTER TABLE `osoblje`
  MODIFY `idOsoblje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `idRez` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tipsobe`
--
ALTER TABLE `tipsobe`
  MODIFY `idTip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trokrevetna`
--
ALTER TABLE `trokrevetna`
  MODIFY `idTro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `idVest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zvezdice`
--
ALTER TABLE `zvezdice`
  MODIFY `idZvezdice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dvokrevetna`
--
ALTER TABLE `dvokrevetna`
  ADD CONSTRAINT `dvokrevetna_ibfk_1` FOREIGN KEY (`idTip`) REFERENCES `tipsobe` (`idTip`),
  ADD CONSTRAINT `dvokrevetna_ibfk_2` FOREIGN KEY (`idCena`) REFERENCES `cene` (`idCena`),
  ADD CONSTRAINT `dvokrevetna_ibfk_3` FOREIGN KEY (`idKvadrat`) REFERENCES `kvadratura` (`idKvadrat`),
  ADD CONSTRAINT `dvokrevetna_ibfk_4` FOREIGN KEY (`idGost`) REFERENCES `gosti` (`idGost`),
  ADD CONSTRAINT `dvokrevetna_ibfk_5` FOREIGN KEY (`idZvezdice`) REFERENCES `zvezdice` (`idZvezdice`);

--
-- Constraints for table `grad`
--
ALTER TABLE `grad`
  ADD CONSTRAINT `grad_ibfk_1` FOREIGN KEY (`idDrzava`) REFERENCES `drzava` (`idDrzava`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`idGrad`) REFERENCES `grad` (`idGrad`),
  ADD CONSTRAINT `hotel_ibfk_2` FOREIGN KEY (`idZvezdice`) REFERENCES `zvezdice` (`idZvezdice`);

--
-- Constraints for table `hotel_tipsobe`
--
ALTER TABLE `hotel_tipsobe`
  ADD CONSTRAINT `hotel_tipsobe_ibfk_1` FOREIGN KEY (`idHotel`) REFERENCES `hotel` (`idHotel`),
  ADD CONSTRAINT `hotel_tipsobe_ibfk_2` FOREIGN KEY (`idTip`) REFERENCES `tipsobe` (`idTip`);

--
-- Constraints for table `jednokrevetna`
--
ALTER TABLE `jednokrevetna`
  ADD CONSTRAINT `jednokrevetna_ibfk_1` FOREIGN KEY (`idZvezdice`) REFERENCES `zvezdice` (`idZvezdice`),
  ADD CONSTRAINT `jednokrevetna_ibfk_2` FOREIGN KEY (`idGost`) REFERENCES `gosti` (`idGost`),
  ADD CONSTRAINT `jednokrevetna_ibfk_3` FOREIGN KEY (`idKvadrat`) REFERENCES `kvadratura` (`idKvadrat`),
  ADD CONSTRAINT `jednokrevetna_ibfk_4` FOREIGN KEY (`idTip`) REFERENCES `tipsobe` (`idTip`),
  ADD CONSTRAINT `jednokrevetna_ibfk_5` FOREIGN KEY (`idCena`) REFERENCES `cene` (`idCena`);

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`uloga_id`) REFERENCES `uloga` (`id`);

--
-- Constraints for table `osoblje`
--
ALTER TABLE `osoblje`
  ADD CONSTRAINT `osoblje_ibfk_1` FOREIGN KEY (`idHotel`) REFERENCES `hotel` (`idHotel`);

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `rezervacija_ibfk_1` FOREIGN KEY (`idHotel`) REFERENCES `hotel` (`idHotel`);

--
-- Constraints for table `trokrevetna`
--
ALTER TABLE `trokrevetna`
  ADD CONSTRAINT `trokrevetna_ibfk_1` FOREIGN KEY (`idTip`) REFERENCES `tipsobe` (`idTip`),
  ADD CONSTRAINT `trokrevetna_ibfk_2` FOREIGN KEY (`idKvadrat`) REFERENCES `kvadratura` (`idKvadrat`),
  ADD CONSTRAINT `trokrevetna_ibfk_3` FOREIGN KEY (`idZvezdice`) REFERENCES `zvezdice` (`idZvezdice`),
  ADD CONSTRAINT `trokrevetna_ibfk_4` FOREIGN KEY (`idCena`) REFERENCES `cene` (`idCena`),
  ADD CONSTRAINT `trokrevetna_ibfk_5` FOREIGN KEY (`idGost`) REFERENCES `gosti` (`idGost`);

--
-- Constraints for table `vesti`
--
ALTER TABLE `vesti`
  ADD CONSTRAINT `vesti_ibfk_1` FOREIGN KEY (`idHotel`) REFERENCES `hotel` (`idHotel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
