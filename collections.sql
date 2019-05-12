-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2019 a las 15:53:03
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `collections`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stamps`
--

CREATE TABLE `stamps` (
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(100) NOT NULL,
  `glued` tinyint(1) NOT NULL,
  `term` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stamps`
--

INSERT INTO `stamps` (`picture`, `name`, `description`, `size`, `glued`, `term`) VALUES
('     images/bell1.jpg     ', ' Bell', ' The most famous bell of US ', '140x140', 1, ' 1820 '),
('      images/stamp2.jpg      ', ' One penny ', '  The mauritius  ', '140x140', 1, '  1847  '),
('     images/stamp3.jpg     ', ' Piramide de mayo', ' Is the oldest national monument in the city of Buenos Aires ', '140x140', 1, ' 1871'),
('     images/cents.jpg     ', ' Twelve Cents', ' It was created in 1945 ', '140x140', 1, ' 1945 '),
('     images/stamp5.jpg     ', ' Shelby GT-500 ', ' One of the best car ever created ', '140x140', 1, ' 1965 '),
('     images/stamp6.jpg     ', ' Volvo ', ' Sverige  ', '140x140', 1, ' 1958 '),
('     images/stamp7.jpg     ', ' Locomotive', ' Cuban locomotuve  ', '140x140', 1, ' 1980 '),
('      images/stamp8.jpg      ', ' Locomotive', ' locomotive depot in China ', '140x140', 1, '  1920  '),
('      images/stamp9.jpg      ', '  Rolls Royce ', '  First Royce  ', '140x140', 1, '  1903  '),
(' images/dodge.jpg ', ' Dodge Charger ', ' This car participated in a movie  ', '140x140', 1, ' 1969 '),
('     images/navio.jpg     ', ' Navio', ' English boat', '140x140', 1, ' 1913 '),
('  images/titanic.jpg  ', ' Titanic ', ' It was the largest of its time ', '140x140', 1, ' 1912 '),
('     images/papa.jpg     ', ' Papst XXIII ', ' Friede Auf  ', '140x140', 1, ' 1969 '),
('     images/torre.jpg     ', ' Eiffel Tower ', ' The most beautiful towe ', '140x140', 1, ' 1887 ');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
