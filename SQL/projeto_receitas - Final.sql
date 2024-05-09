-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/05/2024 às 13:53
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_receitas`
--
DROP DATABASE IF EXISTS `projeto_receitas`;
CREATE DATABASE IF NOT EXISTS `projeto_receitas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projeto_receitas`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `receitas`
--

CREATE TABLE `receitas` (
  `email_usuario` varchar(100) NOT NULL,
  `ID_receita` int(11) NOT NULL,
  `nome_receita` text NOT NULL,
  `resumo_receita` text NOT NULL,
  `ingredientes_receita` text NOT NULL,
  `modopreparo_receita` text NOT NULL,
  `Endereco_receita` text NOT NULL,
  `datacadastro_receita` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `receitas`
--

INSERT INTO `receitas` (`email_usuario`, `ID_receita`, `nome_receita`, `resumo_receita`, `ingredientes_receita`, `modopreparo_receita`, `Endereco_receita`, `datacadastro_receita`) VALUES
('321@gmail.com', 3, 'salmão a la carte', 'Preparar um prato sofisticado e cheio de sabor pode ser mais fácil do que você imagina! O filé de salmão ao forno é uma opção deliciosa e simples de fazer, ideal para aqueles momentos em que desejamos uma refeição rápida, saudável e repleta de sabores intensos. Confira o passo a passo completo e delicie-se com este prato delicioso!', '-500 g de filé de salmão\r\n-Orégano a gosto\r\n-Sal a gosto\r\n-Limão\r\n-Azeitonas fatiadas sem caroço\r\n-3 colheres de sopa de Molho de soja (shoyu)\r\n-Azeite a gosto\r\n-1/2 cebola fatiada', 'Tempo de preparo: 50min\r\n\r\n\r\n1. Lave o salmão com suco de limão.\r\n\r\n2. Aqueça o azeite e adicione a cebola fatiada, deixando no fogo até que fique transparente. Reserve.\r\n\r\n3. Cubra uma assadeira com papel alumínio de maneira que a sobra dê para forrar todo o peixe.\r\n\r\n4. Sobre o papel alumínio na assadeira, coloque o peixe já temperado com sal, regue com azeite e shoyu.\r\n\r\n5. Decore com fatias de azeitonas e um pouco de orégano. \r\n\r\n6. Despeje a cebola por cima. \r\n\r\n7. Embrulhe com o papel alumínio, de maneira que o líquido não derrame quando começar a esquentar. \r\n\r\n8. Leve ao forno médio para assar por cerca de 30 minutos.\r\n\r\n9. Sirva com legumes e salada verde.', 'cardapio-a-la-carte-salmao.jpg', '2024-04-03 00:33:45'),
('123@gmail.com', 4, 'Abóbora com carne e couve', 'teste5', '-1 abóbora-japonesa (sem semente)\r\n-1 colher (chá) sal\r\n-1/2 cebola cortada em quadradinhos\r\n-1 lata de cerveja (350 ml)\r\n-1 lata de creme de leite\r\n-500 g de contrafilé cortado em cubos\r\nazeite de oliva\r\n-1 tomate médio (sem pele e sementes) em cubos\r\n-1/2 maço de couve (em tiras finas)\r\n-2 sachês de Sazon vermelho', 'Tempo de preparo: 45min\r\n\r\n1. Em uma assadeira média, coloque a abóbora-japonesa, sem sementes, cubra com papel-alumínio e leve ao forno médio (180 ºC), pré-aquecido, por aproximadamente por 45 minutos, ou até que enfiando uma faca, a polpa esteja macia.\r\n\r\n2. Polvilhe 2 sachês de Sazon vermelho e com 1 colher (chá) de sal.\r\n\r\n3. Em uma panela média, aqueça 3 colheres (sopa) de azeite de oliva em fogo alto e refogue meia cebola média cortada em quadradinhos, a carne e 1 tomate médio, sem pele e sem sementes, em cubos, por 8 minutos, ou até desmanchar o tomate. Refogue com 1 lata de cerveja (350 ml) e cozinhe por 10 minutos, ou até reduzir o líquido pela metade. Junte meio maço de couve, em tiras finas e 1 lata de creme de leite, e deixe por mais 6 minutos, ou até levantar fervura.\r\n\r\n4. Coloque tudo no interior da abóbora e sirva em seguida.', 'Abóbora com carne e couve.jpeg', '2024-04-01 23:11:11'),
('321@gmail.com', 5, 'Estrogonofe de berinjela', '', '-300 g de berinjela com casca\r\n-5 colheres de azeite\r\n-2 colheres (sopa) de alho picado\r\n-1 lata de creme de leite\r\n-400 g de carne moída\r\n-1 cebola média ralada\r\n-1 lata de molho de tomate (a mesma medida de água)\r\n-sal e molho de pimenta a gosto', 'Modo de preparo\r\n\r\n1. Aqueça o azeite e refogue a cebola e o alho, acrescente a carne e tempere com sala e a pimenta.\r\n\r\n2. Cozinhe a carne por 5 minutos e junte a berinjela cortadas em cubos, adicione o molho de tomate e a água e cozinhe até as berinjelas ficarem macias.\r\n\r\n3. Retire do fogo e junte o creme de leite, coloque sal se necessário, mexa delicadamente e sirva com arroz branco.', 'estrogonof de carne.jpg', '2024-04-01 23:59:02'),
('321@gmail.com', 6, 'Filé de Merluza Di Volpi', '', '-1 kg de filé de merluza\r\n-6 tomates grandes maduros cortado em rodelas\r\n-50ml de azeite de oliva virgem\r\n-500 ml de leite de coco de boa qualidade\r\n-Sal e pimenta-do-reino a gosto\r\n-4 cebolas grandes cortadas em rodelas\r\n-40 ml de azeite de dendê\r\n-1 colherinha de cafezinho de páprica picante\r\n-1 pimenta vermelha dedo de moça', 'Modo de preparo: 40min\r\n\r\n1. Deixe os filés de merluza descongelarem, reserve enquanto fatia as cebolas os tomates e a pimenta dedo-de-moça, retirando as sementes desta.\r\n\r\n2. Com todos os ingredientes organizados separadamente comece a montagem em uma panela de aprox 5 litros com tampa, de preferência com fundo triplo.\r\n\r\n3. Cubra o fundo da panela com o azeite de oliva.\r\n\r\n4. A primeira camada será de cebolas.\r\n\r\n5. Depois uma camada de tomates, salpicando levemente com sal.\r\n\r\n6. Depois uma camada de filés de merluza, salpicando levemente com sal, pimenta-do-reino e páprica.\r\n\r\n7. Assim sucessivamente até acomodar todos os ingredientes.\r\n\r\n8. Feito isto despejar o leite de coco, o azeite de dendê e a pimenta vermelha.\r\n\r\n9. Levar ao fogo médio por aproximadamente 30 minutos.\r\n\r\n10. Deixar para apurar o sal no final, quando estiver quase pronto, pois elimina a possibilidade de erro.\r\n\r\n11. Este prato conquista substancialmente pelo aroma, além de ser delicioso.\r\n\r\n12. Pode ser servido com arroz branco ou a grega, e uma salada verde.', 'Filé de Merluza Di Volpi.jpg', '2024-04-02 00:00:24'),
('matheushenriqueh818@gmail.com', 7, 'Declaração de Imposto de Renda ao Molho Burocrático', 'Uma receita fiscal deliciosa para satisfazer até os paladares mais exigentes da Receita Federal. Uma mistura perfeita de documentos e números para um prato sem igual.', '1 dose de paciência\r\n2 folhas de comprovantes de rendimentos\r\n3 colheres de sonegação zero\r\n1 pitada de dedução de despesas\r\n1 toque de informações bancárias', '1. Em uma panela de papelaria, misture todos os ingredientes com cuidado e atenção.\r\n2. Cozinhe em fogo baixo, preenchendo os formulários com precisão.\r\n3. Não esqueça de adicionar as informações bancárias e comprovantes de rendimentos.\r\n4. Deixe a receita descansar e revisite-a para garantir sua consistência.\r\n5. Sirva quente e aguarde a apreciação da Receita Federal.', 'Receita_Federal_do_Brasil.png', '2024-04-02 00:46:38'),
('123@gmail.com', 15, 'ultima receita', 'ultima receita', 'ultima receita', 'ultima receita', 'ultima receita.jpeg', '2024-05-08 12:42:40'),
('123@gmail.com', 16, 'ultima de verdade', 'ultima de verdade', 'ultoma', 'ultima', 'torta de liquidificador.webp', '2024-05-08 12:44:29'),
('123@gmail.com', 40, 'ytrew', 'a foto se manteve', 'fghjklç', 'vfghjklç', '47910c9249f843da99cdbcad8ce8bc00pessoa_4.jpeg', '2024-05-09 01:50:16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `email_usuario` varchar(100) NOT NULL,
  `nome_usuario` varchar(75) NOT NULL,
  `telefone_usuario` varchar(15) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`email_usuario`, `nome_usuario`, `telefone_usuario`, `senha_usuario`, `data_cadastro`) VALUES
('123@gmail.com', 'matheus', '(18) 12345-6789', '123', '2024-04-01 11:53:13'),
('321@gmail.com', 'theus', '(18) 98765-4321', '321', '2024-04-01 12:07:21'),
('matheush@gmail.com', 'matheush', '(18) 98176-5441', '123', '2024-05-01 17:20:56'),
('matheushenriqueh818@gmail.com', 'Matheus Henrique Cella Carrasco', '(18) 98153-5950', '123456', '2024-04-02 00:42:42');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`ID_receita`),
  ADD KEY `email_usuario` (`email_usuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `ID_receita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `receitas`
--
ALTER TABLE `receitas`
  ADD CONSTRAINT `receitas_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `usuario` (`email_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
