-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2018 às 13:24
-- Versão do servidor: 10.1.30-MariaDB
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
-- Database: `tabela`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `idadm` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`idadm`, `nome`, `senha`) VALUES
(1, 'lucas', 'ab56b4d92b40713acc5af89985d4b786 ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idCadastro` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `sobrenome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idCadastro`, `nome`, `sobrenome`, `email`, `telefone`, `usuario`, `senha`, `imagem`) VALUES
(31, 'Lucas', 'Lunardelli Almeida', 'lucasl.lunardelli@gmail.com', '(56)7893-3310', 'lucas', 'ab56b4d92b40713acc5af89985d4b786', 'imagens/23622376_1637654159626610_18077638265799362_n.jpg'),
(34, 'Camilla', 'Uckers', 'camillauckers@anatel.com.br', '(21)3325-1028', 'emt_audacia', '9f7b0c36272cf9b3608ae0a33b1a4ade', 'imagens/BiPgqaiIYAAjIPT.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL,
  `coment` longtext NOT NULL,
  `idNoticia` int(11) NOT NULL,
  `date` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`idComentario`, `coment`, `idNoticia`, `date`, `hora`) VALUES
(57, 'Muito legal.', 1, '2014-10-20', '17:04:00'),
(58, 'Demais. ', 2, '2014-10-20', '17:06:00'),
(62, 'Eu fui e gostei.', 7, '2014-10-21', '20:35:00'),
(66, 'Vou estar entrando em contato nos proximos dias', 8, '2014-11-08', '18:04:00'),
(67, 'Duo estÃ¡ com tudo em! parabens Ã  equipe', 8, '2014-11-08', '18:04:00'),
(68, 'Da ate uma emoÃ§ao vendo essas fotos, olhares tÃ£o sinceros... Amei', 2, '2014-11-09', '21:01:00'),
(69, 'Marcelle Ã© metida demais, detesto essa garota', 1, '2014-11-09', '21:02:00'),
(70, 'Show', 8, '2014-11-11', '13:33:00'),
(71, 'Massa fera', 8, '2014-12-04', '13:29:00'),
(73, 'Massa!!!', 9, '2018-11-18', '22:48:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `idEvento` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`idEvento`, `nome`) VALUES
(1, 'Evento Corporativo'),
(2, 'Evento Social'),
(3, 'Evento Artistico'),
(4, 'Evento Novo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `idMensagem` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensagem` longtext NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`idMensagem`, `email`, `mensagem`, `data`, `hora`) VALUES
(4, 'lucasl.lunardelli@gmail.com', 'Teste de mensagem. Hora e data. ', '2014-10-19', '15:14:00'),
(5, 'eng.walteralmeida@gmail.com', 'Teste de envio comum. ', '2014-10-19', '15:17:00'),
(6, 'lucasl.lunardelli@gmail.com', 'Entrem em contato comigo. Obrigado. ', '2014-10-22', '19:10:00'),
(7, 'lucasl.lunardelli@gmail.com', 'OlÃ¡, seja muito bem vindo, sou muito bem vindo. ParabÃ©ns e obrigado. ', '2018-11-18', '22:38:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `idNoticia` int(11) NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `subtitulo` varchar(150) NOT NULL,
  `noticia` longtext NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `imagem1` varchar(100) NOT NULL,
  `imagem2` varchar(100) NOT NULL,
  `imagem3` varchar(100) NOT NULL,
  `imagem4` varchar(100) NOT NULL,
  `curtir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `titulo`, `subtitulo`, `noticia`, `data`, `hora`, `imagem1`, `imagem2`, `imagem3`, `imagem4`, `curtir`) VALUES
(1, '15 Anos Marcelle Alves', 'Pre-ensaio de fotos de Marcelle 15 Anos', '      O aniversário de Marcelle aconteceu em Maio deste ano, as fotos que aqui serÃ£o exibidas sÃ£o de total autoria de MMarinho (fotÃ³grafo contratado pela nossa empresa), por isso pedimos que nÃ£o compartilhe a imagem publicamente. <br><br>\r\n\r\nFotos de MMarinho.     ', '2014-10-19', '16:11:00', 'imagens/966579_638034322951392_5869258998740271860_o.jpg', 'imagens/10271310_638034219618069_8095317417448118085_o.jpg', 'imagens/10014518_638034446284713_7595301121040919869_o.jpg', 'imagens/10287020_638034082951416_4929216431802395968_o.jpg', 60),
(2, 'Casamento Fernanda e Rafael', 'Veja as fotos de casamento da Fernanda e Rafael.', '   Foi realizado pela Duo em setembro o casamento de Fernanda e Rafael, confira as fotos.    ', '2014-10-19', '16:02:00', 'imagens/noticias/1798656_721871934558025_886082152681943881_n.jpg', 'imagens/noticias/1911886_721871281224757_6612103122736333643_n.jpg', 'imagens/noticias/10599461_721870687891483_8913623671110954499_n.jpg', 'imagens/noticias/10671483_721870811224804_6136744888540257104_n.jpg', 70),
(3, 'Noite de Premiao Top Nikkey 2014', 'Confira algumas fotos do evento. ', '  As marcas que estÃ£o em primeiro lugar na memÃ³ria dos consumidores nipo-brasileiro, moradores em Londrina, em 2014, foram premiadas na 10Âª ediÃ§Ã£o do Top Nikkey, pesquisa que vem mapeando a lembranÃ§a espontÃ¢nea de marcas nas geraÃ§Ãµes da comunidade nipo-brasileira desde 2004. Na ediÃ§Ã£o deste ano, 80 empresas foram premiadas, representando 11 categorias de consumo. As fotos mostram quem foi conferir:\r\n\r\nMatÃ©ria da pÃ¡gina Frizz.          ', '2018-11-18', '22:42:00', 'imagens/noticias/12-taiane-biassi-e-suzi-shawarski.jpg', 'imagens/noticias/6-sayuri-araki-e-mity.jpg', 'imagens/noticias/5-priscila-scandelae-e-marco-aliberti.jpg', 'imagens/noticias/3-bruna-g-es-renato-gomes-e-vilson-basseto.jpg', 50),
(7, 'Um Jardim Sem Fim', 'Espetáculo infantil realizado no Teatro Marista de Londrina', 'Ontem foi a primeira noite do espetáculo: Um Jardim sem Fim, apresentado pelas crianças da Educaçao Infantil e elenco. O que podemos dizer sobre o evento? Que o mesmo foi sensacional e emocionante!<br> \r\nNoti­cia da pagina Colegio Marista <br>\r\nColaboraçao: Duo Produçoes.<br>\r\nFotos: Del Bambini.', '2014-10-21', '20:34:00', 'imagens/noticias/1900380_530137940455646_6966279049649296661_o.jpg', 'imagens/noticias/10628927_530138330455607_2027357589020429456_o.jpg', 'imagens/noticias/10697348_530140343788739_8796392182232592670_o.jpg', 'imagens/noticias/10708573_530139113788862_1158650662342702240_o.jpg', 32),
(8, 'Ensaio de prÃ©-casamento Gessica & Celso', 'Confira! As fotos sÃ£o de WManini', 'Veja uma prÃ©via do ensaio de casamento da Gessica e do Celso que serÃ¡ realizado pela Duo ProduÃ§Ãµes e Eventos. Entre em contato e agende seu pedido.     ', '2018-11-18', '22:41:00', 'imagens/noticias/10671265_918041128223184_4750311911675754870_n.jpg', 'imagens/noticias/10704072_918041064889857_8062895917638850416_n.jpg', 'imagens/noticias/casamento1.jpg', 'imagens/noticias/1511771_918040951556535_1582868827811896182_n.jpg', 121),
(9, 'Medicina UEL 2018', 'Do projeto ao final feliz sempre!!!', 'Quando a turma comemora com duas festas, Ã© preciso idealizar, produzir e realizar dois projetos diferenciados! E nÃ³s amamos poder explorar diferentes possibilidades!! A turma de Medicina da UEL teve um dia para o jantar e um dia para o baile, e fica difÃ­cil dizer qual foi mais bonito! Acompanhem as fotos do Baile, que aconteceu no Villa Planalto, com decoraÃ§Ã£o de Beto Burim, e tirem suas prÃ³prias conclusÃµes! Ã‰ dificil escolher!!!', '2018-11-18', '22:47:00', 'imagens/noticias/form.jpg', 'imagens/noticias/30822454_2095923453964968_4953095786400442920_o.jpg', 'imagens/noticias/30821048_2095923513964962_3220903035184348978_o.jpg', 'imagens/noticias/30425184_2095923517298295_9070073737828403837_o.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `sobre` varchar(60) NOT NULL,
  `email` varchar(90) NOT NULL,
  `local` varchar(100) NOT NULL,
  `campo` longtext CHARACTER SET utf8 NOT NULL,
  `eventos` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idPedido`, `sobre`, `email`, `local`, `campo`, `eventos`, `data`, `hora`) VALUES
(28, 'Qualquer coisa', '', 'Nao sei', 'Sugestao', 'Evento Corporativo', '2014-10-16', '20:52:00'),
(33, 'Pedido', '', 'Evento', 'Teste', 'Evento Corporativo', '2014-10-21', '22:27:00'),
(34, 'Luz', 'lucasl.lunardelli@gmail.com', 'LONDRINAtest', 'estset', 'Evento Corporativo', '2018-11-18', '18:25:00'),
(35, 'test', 'lucasl.lunardelli@gmail.com', 'setset', 'setset', 'Evento Corporativo', '2018-11-18', '18:25:00'),
(38, 'Evento Corporativo', 'lucasl.lunardelli@gmail.com', 'Uniware ', 'ConfraternizaÃ§Ã£o de fim de ano. ', 'Evento Corporativo', '2018-11-18', '21:36:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`idadm`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idCadastro`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idEvento`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`idMensagem`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `idadm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idCadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `idMensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
