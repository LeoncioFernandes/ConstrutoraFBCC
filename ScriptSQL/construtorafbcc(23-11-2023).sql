-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2023 às 20:59
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `construtorafbcc`
--
CREATE DATABASE IF NOT EXISTS `construtorafbcc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `construtorafbcc`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `data_time_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `login`, `senha`, `ativo`, `data_time_cadastro`) VALUES
(1, 'Leoncio Fernandes de Oliveira Filho', 'leonciofernandes', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2023-11-15 17:48:28'),
(4, 'Igor Brito', 'igorbrito', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2023-11-16 12:14:03'),
(5, 'Tamyres Câmara', 'tamirescamara', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2023-11-16 12:15:45'),
(6, 'Evando Filho Costa', 'evandocosta', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2023-11-16 12:16:01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `data_time_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `login`, `senha`, `ativo`, `data_time_cadastro`) VALUES
(1, 'Leoncio Fernandes (Cliente)', 'leonciofernandes', 'e10adc3949ba59abbe56e057f20f883e', 1, '2023-11-23 16:30:47');

-- --------------------------------------------------------

--
-- Estrutura para tabela `faleconosco`
--

DROP TABLE IF EXISTS `faleconosco`;
CREATE TABLE IF NOT EXISTS `faleconosco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `data_hora_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `faleconosco`
--

INSERT INTO `faleconosco` (`id`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `data_hora_cadastro`) VALUES
(1, 'Leoncio', 'lions_216@hotmail.com', '83991698468', 'Assunto3', 'fdgsdtfhrewstydfghsdftydfst', '2023-11-16 16:10:09');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paginas`
--

DROP TABLE IF EXISTS `paginas`;
CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `conteudo` text NOT NULL,
  `visivel_menu` int(11) NOT NULL,
  `visivel_rodape` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `paginas`
--

INSERT INTO `paginas` (`id`, `nome`, `link`, `tag`, `conteudo`, `visivel_menu`, `visivel_rodape`) VALUES
(1, 'Quem somos', 'quemsomos', '', '<h1>Construtora FBCC: Inovação, Qualidade e Compromisso com o Futuro</h1>\r\n\r\n<div style=\"text-align: justify\">\r\n<p>Num capítulo recente, a Construtora Fernandes Brito Costa Câmara (FBCC) emergiu como uma visão arrojada de inovação e qualidade no cenário da construção civil. Fundada por visionários apaixonados por arquitetura e desenvolvimento urbano, a FBCC personifica ambição, determinação e um compromisso inabalável com a construção do futuro.</p>\r\n\r\n<p>A história da FBCC começou em 2023, impulsionada por uma inspiração clara: criar não apenas edificações, mas espaços que inspiram, encantam e enraízam-se na vida das pessoas. Desde então, cada tijolo colocado representa a promessa de construir não apenas estruturas físicas, mas comunidades vibrantes e sustentáveis.</p>\r\n\r\n<p>Nos últimos meses, a FBCC vivenciou uma fase inicial repleta de desafios, enfrentados com determinação por uma equipe ávida por conhecimento. Imersa em projetos residenciais e comerciais, a construtora explorou ideias inovadoras e incorporou as últimas tendências em arquitetura e design. Cada projeto, independentemente do tamanho, tornou-se uma valiosa oportunidade para aprimorar habilidades, forjar parcerias sólidas e fortalecer os valores fundamentais que guiam a FBCC rumo a um futuro cada vez mais promissor.</p>\r\n\r\n<p>Num futuro mais recente, a FBCC continua a destacar-se não apenas pela excelência em suas construções, mas pela contínua dedicação a uma abordagem centrada no cliente. A empresa mantém sua mentalidade ágil, adaptando-se proativamente às necessidades dinâmicas do mercado imobiliário e valorizando o feedback valioso de cada cliente. Essa abordagem centrada no cliente não é apenas uma característica do passado, mas um compromisso contínuo que define a identidade da FBCC no presente e molda suas aspirações para o futuro.</p>\r\n\r\n<p>A inovação tornou-se a espinha dorsal da FBCC. Desde a implementação de práticas construtivas sustentáveis até a adoção de tecnologias de ponta, a construtora posiciona-se na vanguarda do setor, projetando não apenas estruturas duradouras, mas moldando o futuro do desenvolvimento urbano.</p>\r\n\r\n<p>Hoje, a Construtora FBCC celebra seus primeiros passos rumo ao futuro, com uma equipe dedicada, uma carteira diversificada de projetos e uma visão clara do que está por vir. Cada projeto é uma nova página na história em crescimento da construtora, e a jornada está apenas começando. A FBCC está ansiosa para deixar uma marca significativa no panorama da construção, construindo não apenas edifícios, mas um legado de inovação, excelência e impacto positivo nas comunidades que toca.</p>\r\n</div>', 1, 1),
(2, 'Fale Conosco', 'faleconosco', '', '', 1, 1),
(3, 'Projeto 1', 'projeto1', 'imovel', '', 1, 0),
(4, 'Projeto 2', 'projeto2', 'imovel', '', 1, 0),
(6, 'Termos de Uso', 'termosdeuso', '', '<h2>Termos de Uso<br>CONSTRUTORA FERNANDES BRITO COSTA CÂMARA</h2>\r\n\r\n<div><h3>1. Aceitação dos Termos</h3></div>\r\n<div><p style=\"text-align: justify\">Ao acessar ou usar [Nome da Empresa/Site] (\"nós\", \"nosso\" ou \"o site\"), você concorda em cumprir e aceitar estes Termos de Uso (\"Termos\"). Se você não concordar com estes Termos, por favor, não use o site</p></div>\r\n\r\n<div><h3>2. Uso do Site</h3></div>\r\n<div><p style=\"text-align: justify\">Você concorda em usar o site apenas para fins legais e de acordo com todas as leis e regulamentos aplicáveis. Você é responsável por todas as informações, dados, textos, fotos, gráficos ou outros materiais que você enviar ou postar no site. Você concorda em não usar o site para qualquer atividade ilegal, prejudicial, difamatória, fraudulenta, invasiva de privacidade ou que viole direitos de propriedade intelectual de terceiros</p></div>\r\n\r\n<div><h3>3. Privacidade</h3></div>\r\n<div><p style=\"text-align: justify\">Suas informações pessoais estão sujeitas à nossa Política de Privacidade, que você pode consultar [Inserir um link para a Política de Privacidade]. Ao usar o site, você concorda com a coleta e o uso de suas informações de acordo com nossa Política de Privacidade.</p></div>\r\n\r\n<div><h3>4. Propriedade Intelectual</h3></div>\r\n<div><p style=\"text-align: justify\">Todo o conteúdo presente no site, incluindo, mas não se limitando a, texto, gráficos, logotipos, ícones e imagens, é de propriedade exclusiva de [Nome da Empresa/Site] e está protegido por leis de direitos autorais e outras leis de propriedade intelectual. Você não tem permissão para reproduzir, distribuir, modificar, exibir publicamente ou criar trabalhos derivados do conteúdo do site sem o consentimento prévio por escrito         de [Nome da Empresa/Site].</p></div>\r\n\r\n<div><h3>5. Isenção de Responsabilidade</h3></div>\r\n<div><p style=\"text-align: justify\">O site é fornecido \"como está\" e [Nome da Empresa/Site] não oferece garantias de qualquer tipo em relação ao seu funcionamento ou conteúdo. [Nome da Empresa/Site] não se responsabiliza por quaisquer danos diretos, indiretos, incidentais, consequentes ou especiais resultantes do uso ou incapacidade de uso do site.</p></div>\r\n\r\n<div><h3>6. Alterações nos Termos</h3></div>\r\n<div><p style=\"text-align: justify\">Reservamo-nos o direito de alterar estes Termos a qualquer momento, e tais alterações serão efetivas imediatamente após a publicação no site. Recomendamos que você reveja periodicamente os Termos para se manter atualizado sobre quaisquer mudanças.</p></div>\r\n\r\n<div><h3>7. Contato</h3></div>\r\n<div><p style=\"text-align: justify\">Se você tiver alguma dúvida ou preocupação sobre estes Termos de Uso, entre em contato         conosco em [Inserir informações de contato]. </p></div>\r\n\r\n<div><h3>8. Encerramento de Conta</h3></div>\r\n<div><p style=\"text-align: justify\">Reservamo-nos o direito de encerrar ou suspender sua conta ou acesso ao site a qualquer momento, por qualquer motivo, sem aviso prévio.</p></div>\r\n\r\n<div><p>Estes Termos de Uso foram atualizados pela última vez em [Inserir data de atualização].</p></div>', 0, 1),
(7, 'Política de Privacidade', 'politicadeprivacidade', '', '<h2>Política de Privacidade<br>CONSTRUTORA FERNANDES BRITO COSTA CÂMARA</h2>\r\n\r\n<div><h3>1. Informações de Coleta</h3></div>\r\n<div><p style=\"text-align: justify\">[Nome da Empresa/Site] coleta informações pessoais quando você se registra, faz uma compra, participa de pesquisas, interage com nosso site ou aplicativo, ou usa nossos serviços. Essas informações podem incluir, mas não se limitam a:<br>\r\nNome<br>\r\nEndereço de e-mail<br>\r\nEndereço postal<br>\r\nNúmero de telefone<br>\r\nInformações de pagamento<br>\r\nInformações de conta</p></div>\r\n\r\n<div><h3>2. Uso das Informações</h3></div>\r\n<div><p style=\"text-align: justify\">Utilizamos as informações pessoais coletadas para os seguintes fins:<br>\r\nPersonalizar sua experiência no site ou aplicativo<br>\r\nProcessar transações<br>\r\nEnviar e-mails periódicos relacionados a produtos e serviços<br>\r\nMelhorar nosso atendimento ao cliente<br>\r\nAdministrar pesquisas ou promoções</p></div>\r\n\r\n<div><h3>3. Proteção das Informações</h3></div>\r\n<div><p style=\"text-align: justify\">Implementamos medidas de segurança para proteger suas informações pessoais contra acesso não autorizado, alteração, divulgação ou destruição. Seus dados de pagamento são processados por provedores de pagamento seguros e não armazenamos suas informações de pagamento em nossos servidores.</p></div>\r\n\r\n<div><h3>4. Compartilhamento de Informações</h3></div>\r\n<div><p style=\"text-align: justify\">Não vendemos, trocamos ou transferimos suas informações pessoais para terceiros fora da [Nome da Empresa/Site] sem seu consentimento, exceto quando necessário para fornecer os serviços solicitados ou exigido por lei.</p></div>\r\n\r\n<div><h3>5. Cookies e Tecnologias Semelhantes</h3></div>\r\n<div><p style=\"text-align: justify\">Utilizamos cookies e tecnologias semelhantes para rastrear as preferências dos usuários e melhorar a experiência de navegação. Você pode controlar o uso de cookies nas configurações do seu navegador</p></div>\r\n\r\n<div><h3>6. Links para Terceiros</h3></div>\r\n<div><p style=\"text-align: justify\">Nosso site ou aplicativo pode conter links para sites de terceiros. Não somos responsáveis pelas práticas de privacidade desses sites. Recomendamos que você leia as políticas de privacidade de terceiros ao acessar seus sites.</p></div>\r\n\r\n<div><h3>7. Menores de Idade</h3></div>\r\n<div><p style=\"text-align: justify\">Não coletamos intencionalmente informações de menores de 18 anos. Se você é pai ou responsável e acredita que seu filho nos forneceu informações pessoais, entre em contato conosco para que possamos remover essas informações.</p></div>\r\n\r\n<div><h3>8. Alterações na Política de Privacidade</h3></div>\r\n<div><p style=\"text-align: justify\">Reservamo-nos o direito de modificar esta Política de Privacidade a qualquer momento. As alterações serão efetivas imediatamente após a publicação na página de Política de Privacidade.</p></div>\r\n\r\n<div><h3>9. Contato</h3></div>\r\n<div><p style=\"text-align: justify\">Se você tiver dúvidas ou preocupações sobre esta Política de Privacidade, entre em contato conosco em [Inserir informações de contato].</p></div>\r\n\r\n<div><p>Esta Política de Privacidade foi atualizada pela última vez em [Inserir data de atualização].</p></div>', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
