-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2022 a las 22:19:50
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `IdDatos` int(4) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `second_name` varchar(45) DEFAULT NULL,
  `first_surname` varchar(45) DEFAULT NULL,
  `second_surname` varchar(45) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `sex` varchar(3) DEFAULT NULL,
  `document_type` varchar(65) DEFAULT NULL,
  `document_number` int(40) DEFAULT NULL,
  `expedition_city` varchar(45) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `department` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `neighborhood` varchar(40) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `cell_phone` int(15) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `academic_level` varchar(12) DEFAULT NULL,
  `profession` varchar(40) DEFAULT NULL,
  `role` varchar(40) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `activation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`IdDatos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `IdDatos` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
