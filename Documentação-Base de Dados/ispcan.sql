-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2021 às 12:58
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ispcan`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_aluno` (`nome_aluno` NVARCHAR(20))  BEGIN
if nome_aluno is null or nome_aluno='' then
select * from tbl_estudantes;
else
select * from tbl_estudantes where nome like CONCAT('%',nome_aluno,'%');
END if;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_text` (`nomec` NVARCHAR(20), `numeroc` NVARCHAR(20))  BEGIN
if( exists (select * from dados where  numero=numeroc)) then

select 'Senha ja existe';
else
insert into dados(nome,numero) values(nomec,numeroc);

END if;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cursos`
--

CREATE TABLE `tbl_cursos` (
  `codigo_curso` int(11) NOT NULL,
  `nome_curso` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `duracao` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `sala` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `bloco` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `periodo` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `data_de_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_de_modificacao` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbl_cursos`
--

INSERT INTO `tbl_cursos` (`codigo_curso`, `nome_curso`, `duracao`, `sala`, `bloco`, `periodo`, `data_de_criacao`, `data_de_modificacao`) VALUES
(16, 'Engenharia Informática', '4 Anos', '1', 'A', 'Manhã', '2021-11-29 22:40:45', NULL),
(17, 'Engenharia de Telecomunicação', '5 Anos', '2', 'A', 'Manhã', '2021-11-30 07:55:56', NULL),
(18, 'Engenharia de Construção Civil', '5 Anos', '3', 'H', 'Tarde', '2021-11-30 08:01:28', NULL),
(19, 'Engenharia Agronômica', '4 Anos', '1', 'A', 'Tarde', '2021-12-01 08:49:05', '2021-12-01 17:35:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_estudantes`
--

CREATE TABLE `tbl_estudantes` (
  `codigo_aluno` int(11) NOT NULL,
  `nome` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `numero` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `bi` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `data_de_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_de_alteracao` date DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_estudantes`
--

INSERT INTO `tbl_estudantes` (`codigo_aluno`, `nome`, `genero`, `email`, `numero`, `bi`, `nascimento`, `data_de_criacao`, `data_de_alteracao`, `id_curso`) VALUES
(37, 'Joana Pedro Marmando', 'Femenino', 'www.GasparCaiango@gmail.com', '945675908', '23457867ME980', '1995-03-10', '2021-11-23 19:01:25', NULL, NULL),
(46, 'jonas', NULL, NULL, NULL, NULL, NULL, '2021-11-27 14:56:48', NULL, NULL),
(47, 'Celio', NULL, NULL, NULL, NULL, NULL, '2021-11-27 14:57:35', NULL, NULL),
(48, 'Fm', NULL, NULL, NULL, NULL, NULL, '2021-11-27 14:58:13', NULL, NULL),
(49, 'Alirio', 'Masculino', NULL, NULL, NULL, NULL, '2021-11-27 15:00:11', NULL, NULL),
(50, 'XXX', NULL, NULL, NULL, NULL, NULL, '2021-11-27 15:05:55', NULL, NULL),
(51, 'wwww', 'Masculino', 'www888', NULL, NULL, NULL, '2021-11-27 15:16:15', NULL, NULL),
(52, 'qw', 'Masculino', 'www888', '9777', NULL, NULL, '2021-11-27 15:26:53', NULL, NULL),
(53, 'jombo', 'Masculino', 'www888', '9777', 'wwww.88777888', NULL, '2021-11-27 15:30:07', NULL, NULL),
(54, 'xdp', 'Masculino', 'www888', '97779988', 'wwww.88777888', '1995-04-03', '2021-11-27 15:32:42', NULL, NULL),
(89, 'Jussy be', 'Masculino', 'jussy@gmail.com', '93456387', 'AO1253432797me', '2000-11-12', '2021-11-30 07:59:52', NULL, 19),
(90, 'Mateus Agostinho', 'Masculino', 'NPRAPANGO@gmail.com', '923657892', 'AO435627989ME047', '1998-04-02', '2021-12-01 08:48:00', NULL, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo_usuario` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo_usuario`, `nome`, `senha`) VALUES
(3, 'Célio', '292827'),
(4, 'Abel', '00000'),
(5, 'Adilson', '11111'),
(6, 'eu', '22222');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_cursos`
--
ALTER TABLE `tbl_cursos`
  ADD PRIMARY KEY (`codigo_curso`);

--
-- Índices para tabela `tbl_estudantes`
--
ALTER TABLE `tbl_estudantes`
  ADD PRIMARY KEY (`codigo_aluno`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_cursos`
--
ALTER TABLE `tbl_cursos`
  MODIFY `codigo_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tbl_estudantes`
--
ALTER TABLE `tbl_estudantes`
  MODIFY `codigo_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbl_estudantes`
--
ALTER TABLE `tbl_estudantes`
  ADD CONSTRAINT `tbl_estudantes_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tbl_cursos` (`codigo_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
