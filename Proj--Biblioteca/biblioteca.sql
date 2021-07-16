-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jul-2021 às 16:50
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livros`
--

CREATE TABLE `tb_livros` (
  `cod_livro` int(1) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_bin NOT NULL,
  `autor` varchar(50) COLLATE utf8_bin NOT NULL,
  `sinopse` varchar(5000) COLLATE utf8_bin NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `cod_isbn` varchar(25) COLLATE utf8_bin NOT NULL,
  `foto` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_livros`
--

INSERT INTO `tb_livros` (`cod_livro`, `titulo`, `autor`, `sinopse`, `tipo`, `cod_isbn`, `foto`) VALUES
(1, 'Ponte para Terabítia', 'Katherine Paterson ', 'Jess Aarons tem 10 anos, acaba de ingressar na 5ª série e o que mais deseja na vida é ser campeão de corrida da escola. Bem agora, quando tem todas as chances de ganhar, tinha de aparecer Leslie Burke, uma novata na vila - e, ainda por cima, menina! - para desafiá-lo e, pior que isso, ganhar dele? Mas Jess não sabe que Leslie vai lhe propor desafios muito maiores que ganhar ou perder uma corrida. Pouco a pouco, ele vai se afeiçoando a essa menina, tão diferente das outras de sua comunidade rural. Até que, juntos, os dois criaram um reino mágico e solene, chamado Terabítia, onde governam soberanos, protegidos das ameaças e zombarias da vida cotidiana. Neste livro, Katherine Paterson narra uma história de intensa amizade e coragem, que vai cativar o jovem leitor.', 1, '978-8516050528', 'Capa Livro1.jpg'),
(2, '1984', 'George Orwell', 'O livro narra a história de Winston Smith, homem de meia idade e membro do Partido Externo. Trabalhava como funcionário do Ministério da Verdade, onde reescrevia e alterava dados de acordo com os interesses do Partido. Os capítulos do livro podem ser divididos em três partes: a primeira parte relata como era a sociedade criada por George Orwell, uma sociedade inspirada na opressão dos regimes totalitários das décadas de 30 e 40. O mundo era dividido em três nações distintas: Oceania (onde Winston vivia), Eurásia e Lestásia, territórios que se mantinham em guerra uns contra os outros. Cada nação era governada pelo Partido, que era coordenado pelo Grande Irmão (Big Brother) e pelos membros do Partido Interno. O restante da população era dividido entre os membros do Partido Externo e a prole. Os membros do Partido Interno eram pessoas ricas e com benefícios, já o Partido Externo não possuía benefícios, mas não era totalmente abandonado quanto à prole. O lema do Partido era: “GUERRA É PAZ, LIBERDADE É ESCRAVIDÃO E IGNORÂNCIA É FORÇA”.   O Partido era representado pelos quatros Ministérios, o da Verdade, responsável por tudo que é escrito seguindo a lógica de que o Partido é infalível e nunca errou. O Ministério da Paz, responsável pela guerra, o Ministério da Fartura, responsável pela economia e o Ministério do Amor, responsável pela espionagem e controle da população. Como ferramenta de espionagem, eram usadas as teletelas que observavam todos os membros do Partido a todo instante. A segunda parte do livro conta a revolução interna de Winston, pois ele não concordava com os ideais do Partido. Winston conhece uma jovem chamada Julia e começa a ter encontros escondidos com ela, pois relacionamentos eram extremamente proibidos pelo Partido. Comprar no mercado comum, usar qualquer tipo de adereço, ficar muito tempo sozinho ou andar nos bairros onde a prole vivia eram, também, proibidos. A terceira parte mostra o desfecho do livro, onde Orwell evidencia que a prática totalitarista é eficiente em manter a ordem, pois as pessoas que eram pegas pelo Ministério da Verdade sumiam e todas as evidências de sua existência eram apagadas ou eram torturadas e reeducadas para voltar à sociedade.', 1, '978-8535914849', 'Capa Livro2.jpg'),
(3, 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Um piloto cai com seu avião no deserto e ali encontra uma criança loura e frágil. Ela diz ter vindo de um pequeno planeta distante. E ali, na convivência com o piloto perdido, os dois repensam os seus valores e encontram o sentido da vida. Com essa história mágica, sensível, comovente, às vezes triste, e só aparentemente infantil, o escritor francês Antoine de Saint-Exupéry criou há 70 anos um dos maiores clássicos da literatura universal. Não há adulto que não se comova ao se lembrar de quando o leu quando criança. Trata-se da maior obra existencialista do século XX, segundo Martin Heidegger. Livro mais traduzido da história, depois do Alcorão e da Bíblia, ele agora chega ao Brasil em nova edição, completa, com a tradução de Luiz Fernando Emediato e enriquecida com um caderno ilustrado sobre a obra e a curta e trágica vida do autor.', 1, '978-8522005239', 'Capa Livro3.jpg'),
(4, 'O Hobbit', 'J. R. R. Tolkien', 'O Hobbit conta a história de Bilbo Bolseiro, um Hobbit pacato e satisfeito cuja vida vira de cabeça para baixo quando ele se junta ao mago Gandalf e a treze anões em sua jornada para reaver um tesouro roubado. É uma viagem repleta de perigos – e no fim Bilbo encara sozinho o guardião do tesouro, o mais terrível dragão de toda a Terra-Média. O Hobbit, prelúdio fascinante de J. R. R. Tolkien ao Senhor dos Anéis, é um dos livros mais adorados de todos os tempos. Cuidadosamente condensada e ilustrada, esta versão em quadrinhos tornou-se por si só um best-seller clássico.', 0, '978-8595084742', 'Capa Livro4.jpg'),
(5, 'Hamlet', 'William Shakespeare', 'Um jovem príncipe se reúne com o fantasma de seu pai, que alega que seu próprio irmão, agora casado com sua viúva, o assassinou. O príncipe cria um plano para testar a veracidade de tal acusação, forjando uma brutal loucura para traçar sua vingança. Mas sua aparente insanidade logo começa a causar estragos — para culpados e inocentes. Esta é a sinopse da tragédia de Shakespeare, agora em nova e fluente tradução de Lawrence Flores Pereira. Mas a trama inventada pelo dramaturgo inglês vai muito além disso: Hamlet é um dos momentos mais altos da criação artística mundial, um retrato — eletrizante e sempre contemporâneo — da vida emocional de um homo sapiens adulto.', 1, '978-8582850145', 'Capa Livro5.jpg'),
(6, 'Dom Quixote', 'Miguel de Cervantes', 'Apaixonado por histórias de cavalaria, Alonso Quijano passa a acreditar que é um cavaleiro andante. Em seu delírio, muda o nome para Dom Quixote de la Mancha, veste-se com uma armadura improvisada, faz de Dulcineia sua amada, a quem quer dedicar suas glórias e seus feitos. O vizinho Sancho Pança torna-se seu fiel escudeiro. Nenhum cavaleiro andante teve a ousadia de Dom Quixote. Tampouco viveu suas aventuras e desventuras, que aqui são contadas de forma divertida e emocionante.', 0, '978-8525425669', 'Capa Livro6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_livros`
--
ALTER TABLE `tb_livros`
  ADD PRIMARY KEY (`cod_livro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_livros`
--
ALTER TABLE `tb_livros`
  MODIFY `cod_livro` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
