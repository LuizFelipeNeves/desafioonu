-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Out-2018 às 13:29
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacoes`
--

DROP TABLE IF EXISTS `operacoes`;
CREATE TABLE IF NOT EXISTS `operacoes` (
  `id_operacoes` int(11) NOT NULL AUTO_INCREMENT,
  `id_translados` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `unidade` int(11) NOT NULL,
  PRIMARY KEY (`id_operacoes`),
  KEY `fk_operacoes_translados` (`id_translados`),
  KEY `fk_operacoes_unidade1` (`unidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`id_pais`, `nome`) VALUES
(1, 'África do Sul'),
(2, 'Albânia'),
(3, 'Alemanha'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Anguilla'),
(7, 'Antigua'),
(8, 'Arábia Saudita'),
(9, 'Argentina'),
(10, 'Armênia'),
(11, 'Aruba'),
(12, 'Austrália'),
(13, 'Áustria'),
(14, 'Azerbaijão'),
(15, 'Bahamas'),
(16, 'Bahrein'),
(17, 'Bangladesh'),
(18, 'Barbados'),
(19, 'Bélgica'),
(20, 'Benin'),
(21, 'Bermudas'),
(22, 'Botsuana'),
(23, 'Brasil'),
(24, 'Brunei'),
(25, 'Bulgária'),
(26, 'Burkina Fasso'),
(27, 'Butão'),
(28, 'Cabo Verde'),
(29, 'Camarões'),
(30, 'Camboja'),
(31, 'Canadá'),
(32, 'Cazaquistão'),
(33, 'Chade'),
(34, 'Chile'),
(35, 'China'),
(36, 'Cidade do Vaticano'),
(37, 'Colômbia'),
(38, 'Congo'),
(39, 'Coréia do Sul'),
(40, 'Costa do Marfim'),
(41, 'Costa Rica'),
(42, 'Croácia'),
(43, 'Dinamarca'),
(44, 'Djibuti'),
(45, 'Dominica'),
(46, 'EUA'),
(47, 'Egito'),
(48, 'El Salvador'),
(49, 'Emirados Árabes'),
(50, 'Equador'),
(51, 'Eritréia'),
(52, 'Escócia'),
(53, 'Eslováquia'),
(54, 'Eslovênia'),
(55, 'Espanha'),
(56, 'Estônia'),
(57, 'Etiópia'),
(58, 'Fiji'),
(59, 'Filipinas'),
(60, 'Finlândia'),
(61, 'França'),
(62, 'Gabão'),
(63, 'Gâmbia'),
(64, 'Gana'),
(65, 'Geórgia'),
(66, 'Gibraltar'),
(67, 'Granada'),
(68, 'Grécia'),
(69, 'Guadalupe'),
(70, 'Guam'),
(71, 'Guatemala'),
(72, 'Guiana'),
(73, 'Guiana Francesa'),
(74, 'Guiné-bissau'),
(75, 'Haiti'),
(76, 'Holanda'),
(77, 'Honduras'),
(78, 'Hong Kong'),
(79, 'Hungria'),
(80, 'Iêmen'),
(81, 'Ilhas Cayman'),
(82, 'Ilhas Cook'),
(83, 'Ilhas Curaçao'),
(84, 'Ilhas Marshall'),
(85, 'Ilhas Turks & Caicos'),
(86, 'Ilhas Virgens (brit.)'),
(87, 'Ilhas Virgens(amer.)'),
(88, 'Ilhas Wallis e Futuna'),
(89, 'Índia'),
(90, 'Indonésia'),
(91, 'Inglaterra'),
(92, 'Irlanda'),
(93, 'Islândia'),
(94, 'Israel'),
(95, 'Itália'),
(96, 'Jamaica'),
(97, 'Japão'),
(98, 'Jordânia'),
(99, 'Kuwait'),
(100, 'Latvia'),
(101, 'Líbano'),
(102, 'Liechtenstein'),
(103, 'Lituânia'),
(104, 'Luxemburgo'),
(105, 'Macau'),
(106, 'Macedônia'),
(107, 'Madagascar'),
(108, 'Malásia'),
(109, 'Malaui'),
(110, 'Mali'),
(111, 'Malta'),
(112, 'Marrocos'),
(113, 'Martinica'),
(114, 'Mauritânia'),
(115, 'Mauritius'),
(116, 'México');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
  `identificador` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `data_nascimento` date NOT NULL,
  `pais` varchar(255) NOT NULL,
  `passaporte` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`identificador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`identificador`, `nome`, `foto`, `data_nascimento`, `pais`, `passaporte`, `status`) VALUES
(1, 'Luiz', NULL, '1998-10-23', 'Brasil', 2147483647, 0),
(2, 'Lucas', NULL, '1999-04-15', 'Brasil', 31123123, 2),
(3, 'Matheus', NULL, '1998-11-06', 'Brasil', 2147483647, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `translados`
--

DROP TABLE IF EXISTS `translados`;
CREATE TABLE IF NOT EXISTS `translados` (
  `id_translados` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `tipo_viagem` int(11) NOT NULL,
  `origem` int(11) NOT NULL,
  `destino` int(11) NOT NULL,
  PRIMARY KEY (`id_translados`),
  KEY `fk_translados_pessoas1` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

DROP TABLE IF EXISTS `unidade`;
CREATE TABLE IF NOT EXISTS `unidade` (
  `id_unidade` int(11) NOT NULL AUTO_INCREMENT,
  `cidade` varchar(255) NOT NULL,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id_unidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `operacoes`
--
ALTER TABLE `operacoes`
  ADD CONSTRAINT `fk_operacoes_translados` FOREIGN KEY (`id_translados`) REFERENCES `translados` (`id_translados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_operacoes_unidade1` FOREIGN KEY (`unidade`) REFERENCES `unidade` (`id_unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `translados`
--
ALTER TABLE `translados`
  ADD CONSTRAINT `fk_translados_pessoas1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoas` (`identificador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
