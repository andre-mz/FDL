-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 05, 2023 at 09:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_activity`
--

CREATE TABLE `table_activity` (
  `id_activity` int(11) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `titulo` text NOT NULL,
  `activ_image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `data_acont` varchar(3) NOT NULL,
  `mes_acont` varchar(10) NOT NULL,
  `ano_acont` text NOT NULL,
  `local_acont` varchar(50) NOT NULL,
  `publicado_por` varchar(50) NOT NULL,
  `data_adicionado` datetime NOT NULL DEFAULT current_timestamp(),
  `adicionado` date NOT NULL DEFAULT current_timestamp(),
  `update_at` varchar(50) NOT NULL,
  `update_por` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_activity`
--

INSERT INTO `table_activity` (`id_activity`, `categoria`, `titulo`, `activ_image`, `content`, `data_acont`, `mes_acont`, `ano_acont`, `local_acont`, `publicado_por`, `data_adicionado`, `adicionado`, `update_at`, `update_por`) VALUES
(25, 'noticia', 'Ajuda Humanitaria', '1690211647-image1170x530cropped.jpg', 'O chefe humanitário declarou estar claro que a pandemia de Covid-19 ainda não acabou, e que países menos desenvolvidos enfrentam privações no acesso a vacinas.\r\n\r\nA meta é que “o apelo global possa dar um vislumbre de esperança para milhões de pessoas que precisam desesperadamente dele.” O Ocha estima que mais de 1% da população mundial está deslocada e que a pobreza extrema esteja novamente em alta.\r\n\r\nNa maioria das crises, mulheres e meninas são as que mais sofrem à medida que as desigualdades de gênero e os riscos de proteção aumentam.', '15', 'Novembro', '2023', '', 'dalton andre', '2023-07-21 10:27:59', '2023-07-21', '2023-07-24 as 05:14:07pm', 'dalton andre'),
(26, 'evento', 'PRINCIPAIS MENSAGENS DA LEI', '1690211314-img.jpg', 'In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.', '18', 'Julho', '2023', '', 'dalton andre', '2023-07-22 20:08:18', '2023-07-22', '2023-07-24 as 05:15:41pm', 'dalton andre'),
(28, 'evento', 'O novo financiamento da União Europeia', '1690228121-moz_20200825_wfp-falume-bachir_9289.jpg', 'Esta <strong>nova</strong>  ajuda humanitária da União Europeia (UE) à região procura dar uma resposta às consequências humanitárias da violência no norte de Moçambique, para onde serão canalizados 7,86 milhões de euros de financiamento.\r\n\r\nAlém disso, a ajuda da UE vai apoiar medidas contra a crise sócio-económica no Zimbabwe, para fazer face à insegurança alimentar e para apoiar a preparação e resposta à COVID-19.\r\n\r\nNo Madagáscar, a UE vai prestar assistência para fazer face à grave crise alimentar e nutricional. Outros 6 milhões de euros serão dedicados a ajudar crianças de toda a região a terem acesso à educação. Outros 8 milhões de euros serão fornecidos para melhorar a preparação da região para desastres.\r\n\r\nO Comissário Europeu para a Gestão de Crises, Janez Lenarčič, afirmou que “a região da África Austral e do Oceano Índico é altamente vulnerável a vários perigos naturais, incluindo ciclones, secas e epidemias. Em alguns países da região, isso é exacerbado por um ambiente político e socioeconômico desafiador, enquanto a situação geral é agravada ainda mais devido à pandemia do coronavírus. A assistência da UE visa atenuar as consequências humanitárias nas populações mais vulneráveis ​​e melhorar a preparação para catástrofes na região.”\r\n\r\nA pandemia de coronavírus exacerbou uma situação já difícil na África Austral e na região do Oceano Índico, já conhecida por enfrentar riscos naturais, incluindo secas e ciclones recorrentes, além de desafios económicos e políticos. Os desastres representam uma importante fonte de risco para as populações mais vulneráveis ​​e podem prejudicar os ganhos de desenvolvimento. Devido à pandemia do coronavírus, muitas famílias pobres enfrentam dificuldades alimentares e não alimentares devido aos bloqueios e outras medidas restritivas relacionadas ao coronavírus.\r\n\r\nDesde 2014, a UE mobilizou mais de 237 milhões de euros em assistência à região, prestando especial atenção à preparação para catástrofes. A UE fornece ainda ajuda sob a forma de transferências financeiras de emergência a pessoas vulneráveis ​​afectadas por catástrofes e está também a ajudar a responder às necessidades alimentares e nutricionais nas áreas afectadas.\r\n\r\nCom a deterioração da situação de segurança na província de Cabo Delgado, no norte de Moçambique, a UE está a apoiar as pessoas deslocadas e afectadas vulneráveis ​​com abrigo, alimentação, protecção e acesso a cuidados de saúde.', '15', 'Junho', '2023', '', 'dalton andre', '2023-07-24 21:43:48', '2023-07-24', '2023-07-24 as 09:48:41pm', 'dalton andre'),
(29, 'evento', 'Ajuda do ciclone Freddy chega a Madagascar', '1690229517163-Madagascar-Freddy-relief-1-1200x800px.jpg', 'Membros da primeira igreja Metodista Unida em Madagascar prontificaram-se e serem as mãos e os pés de Jesus para as pessoas devastadas pelo ciclone Freddy no início deste ano.\r\n\r\nRicocheteando pelo Oceano Índico por cinco semanas, o ciclone tropical causou estragos na nação insular, bem como em Malawi, Moçambique, África do Sul e Zimbábue, matando mais de 1.400 pessoas.\r\n\r\n“Trouxemos alimentos para oferecer aos nossos irmãos e irmãs aqui em Andranomavo II, no distrito de Mananjary, como resposta ao seu sofrimento após o ciclone Freddy,” disse Justin Rakotoarimanana, membro da Igreja Metodista Unida Ambodifasika em Antananarivo, capital de Madagascar.\r\n\r\nA comida foi comprada por meio de uma subvenção da Comissão de Socorro da Metodista Unida, que também concedeu doações para fornecer rações de emergência e suprimentos de higiene para as proximidades de Moçambique e Malawi em resposta ao ciclone Freddy.\r\n\r\nA ajuda à Madagascar foi distribuída em Andranomavo, uma das comunidades rurais mais pobres do país, situada a cerca de 335 milhas de Antananarivo.\r\n\r\nA pobreza no país é galopante, em parte devido ao isolamento da ilha de Madagascar da África a oeste e da Ásia a leste.\r\n\r\nJean Aime Ratovohery, pastor leigo e líder espiritual da Igreja Metodista Unida de Ambodifasika, disse que a congregação começou a trabalhar depois que o ciclone atingiu a área.\r\n\r\n“Ouvimos o clamor dos filhos de Deus e fomos movidos a agir. Entramos em contato com o governo e lideranças locais,” disse ele.\r\n\r\nMais de 150 famílias foram assistidas com o apoio da UMCOR, e a igreja trabalhou com Boto André, chefe da aldeia e vice-prefeito.', '16', 'Março', '2023', '', 'dalton andre', '2023-07-24 22:11:57', '2023-07-24', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_funcionario`
--

CREATE TABLE `table_funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `nr_funcionario` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `local_nascimento` varchar(10) NOT NULL,
  `nome_pai` varchar(30) NOT NULL,
  `nome_mae` varchar(30) NOT NULL,
  `nome_conjugue` varchar(30) NOT NULL,
  `nivel_academico` varchar(20) NOT NULL,
  `estado_academico` varchar(30) NOT NULL,
  `local_emissao` varchar(30) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `nr_documento` varchar(20) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `nacionalidade` varchar(30) NOT NULL,
  `naturalidade` varchar(30) NOT NULL,
  `morada` varchar(30) NOT NULL,
  `cidade_atual` varchar(30) NOT NULL,
  `ano_entrada` varchar(10) NOT NULL,
  `departament` varchar(20) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `local` varchar(20) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `contato_pessoal` varchar(10) NOT NULL,
  `contato_emergencia` varchar(10) NOT NULL,
  `por` text NOT NULL,
  `data_adic` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_funcionario`
--

INSERT INTO `table_funcionario` (`id_funcionario`, `nr_funcionario`, `nome`, `idade`, `local_nascimento`, `nome_pai`, `nome_mae`, `nome_conjugue`, `nivel_academico`, `estado_academico`, `local_emissao`, `tipo_documento`, `nr_documento`, `estado_civil`, `genero`, `nacionalidade`, `naturalidade`, `morada`, `cidade_atual`, `ano_entrada`, `departament`, `cargo`, `local`, `categoria`, `contato_pessoal`, `contato_emergencia`, `por`, `data_adic`) VALUES
(2, '', 'Dalton Bernardo Andre', '2023-06-28', 'Chimoio', 'Bernardo Andre', 'Margarida Hilario Sona', '', 'Licenciado', 'concluido', 'Chimoio', 'BI', '0603547854Q', 'solteiro', 'M', 'Mocambique', 'Chimoio', '7 de Setembro', 'Chimoio', '2023-06-28', 'Informatica', 'WEB DEVELOPER/IT SUP', 'Chimoio', 'colaborador', '848400000', '843333252', '', '2023-06-28'),
(3, '', 'Chique Enersto', '1996-01-01', 'Beira', 'Ernesto Chiquenhane Chidoco Jo', 'Ermelinda Francisco Zava', '', 'Licenciado', 'concluido', 'Chimoio', 'BI', '070101961986P', 'solteiro', 'M', 'Mocambique', 'Beira', '16 de Junho', 'Chimoio', '2023-07-03', 'Informatica', 'Tecnico de comunicacao e imagem', 'Chimoio', 'funcionario', '877527755', '877527755', '', '2023-07-05'),
(4, '', 'Andirson Victorino Cândido Quemela', '1997-06-03', 'Maputo', 'Victorino Cândido Quemela', 'N/A', 'N/A', 'Licenciado', 'cursando', 'Chimoio', 'BI', '0645647704A', 'solteiro', 'M', 'Mocambique', 'Maputo', '16 de Junho', 'Chimoio', '2023-10-03', 'Informatica', 'TÉCNICO DE REDES/IT SUPPORT', 'Chimoio', 'funcionario', '848400000', '865555555', '', '2023-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `table_galery`
--

CREATE TABLE `table_galery` (
  `id_foto` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `foto` text NOT NULL,
  `descricao` text NOT NULL,
  `data_adicionado` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_galery`
--

INSERT INTO `table_galery` (`id_foto`, `titulo`, `foto`, `descricao`, `data_adicionado`) VALUES
(8, 'Ajuda Humanitaria', '1690895751image1170x530cropped.jpg', 'Ajuda Humanitaria', '2023-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id_user` int(11) NOT NULL,
  `loginid` varchar(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `level` tinyint(4) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id_user`, `loginid`, `name`, `password`, `level`, `estado`) VALUES
(10, '2023123456', 'dalton andre', '7c222fb2927d828af22f592134e8932480637c0d', 1, 1),
(11, '2023000000', 'Ges.Estagios', '7c4a8d09ca3762af61e59520943dc26494f8941b', 5, 1),
(12, '2023127422', 'Chique Ernesto', 'bb1c66f2405d926cccbe7729524c9d86a33eb0b1', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_activity`
--
ALTER TABLE `table_activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `table_funcionario`
--
ALTER TABLE `table_funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `table_galery`
--
ALTER TABLE `table_galery`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_activity`
--
ALTER TABLE `table_activity`
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `table_funcionario`
--
ALTER TABLE `table_funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_galery`
--
ALTER TABLE `table_galery`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
