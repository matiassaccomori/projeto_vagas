-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2020 às 02:41
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_user`
--

CREATE TABLE `login_user` (
  `usuario_ide` int(11) NOT NULL,
  `usuario` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Extraindo dados da tabela `login_user`
--

INSERT INTO `login_user` (`usuario_ide`, `usuario`, `senha`) VALUES
(1, 'matias', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'sandy', 'b745937c009e5ddad30064f3fc7cedf1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `cod_pessoa` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `endereco` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `telefone` varchar(16) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf32_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `estado_civil` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `grau` varchar(25) COLLATE utf32_unicode_ci NOT NULL,
  `estado_conclusao` varchar(25) COLLATE utf32_unicode_ci NOT NULL,
  `data_conclusao` date NOT NULL,
  `escola` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `curso` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `empresa` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  `atividades` varchar(500) COLLATE utf32_unicode_ci NOT NULL,
  `disp_viagens` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `disp_mudancas` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `pretensao` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `vaga_pretendida` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `curriculo` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`cod_pessoa`, `nome`, `endereco`, `telefone`, `email`, `cpf`, `data_nascimento`, `sexo`, `estado_civil`, `grau`, `estado_conclusao`, `data_conclusao`, `escola`, `curso`, `empresa`, `cargo`, `data_inicio`, `data_final`, `atividades`, `disp_viagens`, `disp_mudancas`, `pretensao`, `vaga_pretendida`, `curriculo`) VALUES
(293, 'Antonio da Silva', 'Rua 123', '54999445588', 'antonio@silva.com', '456.789.456-79', '1991-05-18', 'Masculino', 'Casado', 'TÃ©cnico', 'ConcluÃ­do', '2012-08-20', 'Escola 123', 'TÃ©cnico em Adm', 'Empresa 123', 'Gerente', '2000-08-15', '2020-11-16', 'Gerente da empresa em questÃ£o', 'No', 'No', '1950.00', 'Analista de Marketing', '2020-11-16 - Antonio da Silva.pdf'),
(294, 'Joana Dark', 'Rua 123', '(54) 99954-4555', 'joana@gmail.com', '545.454.545-45', '1995-12-05', 'Feminino', 'Solteiro', 'Superior', 'ConcluÃ­do', '2020-06-15', 'Uri', 'CC', 'Wesley Ltda', 'Pedreira', '2004-02-02', '2007-04-03', 'Fazia arte como pedreira', 'Yes', 'No', '9500.00', 'Web Designer Pleno', '2020-11-17 - Joana Dark.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id_vaga` int(11) NOT NULL,
  `vaga` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `atividade` varchar(600) COLLATE utf32_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id_vaga`, `vaga`, `atividade`, `foto`) VALUES
(129, 'Analista de Marketing', 'O anÃºncio de vaga perfeito Ã© objetivo. â€œEscrever Ã© a arte de cortar palavrasâ€, jÃ¡ dizia Carlos Drummond de Andrade. Explique resumidamente as atividades que ele irÃ¡ exercer. Se a lista tem mais de 20 itens, das duas uma: ou o candidato vai se aplicar sem ler atÃ© o final, ou terÃ¡ medo de se candidatar e ter sobrecarga de funÃ§Ãµes.', '2020-10-24 - Analista de Marketing.jpeg	'),
(130, 'Web Designer Pleno', 'A descriÃ§Ã£o (job description) de um trampo Ã© mais do que detalhes do anÃºncio de vaga, Ã© um anÃºncio da empresa para o candidato. Ã‰ como se os candidatos fossem clientes que vocÃª precisa convencer antes de se aplicarem.', '2020-10-24 - Web Designer Pleno.jpeg	'),
(131, 'Redator', 'Quando publicar um nome da vaga, pense como um candidato: vocÃª procuraria em plataformas de vagas por â€œVendedor Top de Linhaâ€ ou â€œRepresentante de Vendasâ€? Prefira tambÃ©m tÃ­tulos que descrevam o cargo que o candidato irÃ¡ ocupar ao invÃ©s das tarefas que irÃ¡ realizar.', '2020-10-24 - Redator.jpeg	'),
(132, 'Assistente Comercial', 'Realizar captaÃ§Ã£o e prospecÃ§Ã£o de clientes via telefone e redes sociais, e posterior agendamento e visitas e assim negociar e acompanhar propostas de vendas de cursos; Auxiliar na elaboraÃ§Ã£o da polÃ­tica comercial da empresa; Atendimento ao pÃºblico; Auxiliar de secretaria.\r\nNecessÃ¡rio ensino superior concluÃ­do ou cursando e CNH.', '2020-10-24 - Assistente Comercial.png	'),
(133, 'Caixa', 'Atendimento ao cliente, organizaÃ§Ã£o do ambiente de trabalho.', '2020-10-24 - Caixa.jpeg	');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`usuario_ide`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`cod_pessoa`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id_vaga`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login_user`
--
ALTER TABLE `login_user`
  MODIFY `usuario_ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `cod_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id_vaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
