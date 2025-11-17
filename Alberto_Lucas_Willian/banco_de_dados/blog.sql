-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2025 at 06:56 PM
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
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `blog_simples`
--

CREATE TABLE `blog_simples` (
  `blog_id` int(11) NOT NULL,
  `blog_id_usuario` int(11) NOT NULL,
  `blog_nome_usuario` varchar(255) NOT NULL,
  `blog_titulo` varchar(255) NOT NULL,
  `blog_conteudo` varchar(255) NOT NULL,
  `blog_imagem` varchar(255) NOT NULL,
  `blog_data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cadastro_usuario`
--

CREATE TABLE `cadastro_usuario` (
  `cadastro_id` int(11) NOT NULL,
  `cadastro_nome` varchar(255) NOT NULL,
  `cadastro_senha` varchar(255) NOT NULL,
  `cadastro_tipo` varchar(255) NOT NULL,
  `cadastro_tel` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comentario_blog`
--

CREATE TABLE `comentario_blog` (
  `comentario_id` int(11) NOT NULL,
  `comentario_id_blog` int(11) NOT NULL,
  `comentario_nome_usuario` int(11) NOT NULL,
  `comentario_conteudo` varchar(255) NOT NULL,
  `comentario_data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_simples`
--
ALTER TABLE `blog_simples`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  ADD PRIMARY KEY (`cadastro_id`),
  ADD UNIQUE KEY `cadastro_tel` (`cadastro_tel`);

--
-- Indexes for table `comentario_blog`
--
ALTER TABLE `comentario_blog`
  ADD PRIMARY KEY (`comentario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_simples`
--
ALTER TABLE `blog_simples`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  MODIFY `cadastro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comentario_blog`
--
ALTER TABLE `comentario_blog`
  MODIFY `comentario_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
