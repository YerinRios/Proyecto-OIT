-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2022 a las 23:15:45
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
-- Base de datos: `dbformulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datab`
--

CREATE TABLE `datab` (
  `id` int(4) DEFAULT NULL,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre1` varchar(45) NOT NULL,
  `nombre2` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `edad` int(2) NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `tipo_documento` varchar(65) NOT NULL,
  `numero_documento` int(40) NOT NULL,
  `ciudad_expedicion` varchar(45) NOT NULL,
  `pais` varchar(40) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `barrio` varchar(40) NOT NULL,
  `telefono` int(12) NOT NULL,
  `celular` int(15) NOT NULL,
  `correo` varchar(225) NOT NULL,
  `nivel_academico` varchar(40) NOT NULL,
  `profesion` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_activacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
