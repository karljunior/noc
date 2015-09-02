-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.11-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para noc
CREATE DATABASE IF NOT EXISTS `noc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `noc`;


-- Copiando estrutura para tabela noc.tb_contatos
CREATE TABLE IF NOT EXISTS `tb_contatos` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificação do contato',
  `nome` varchar(50) NOT NULL COMMENT 'Nome do contato',
  `linkwiki` varchar(300) NOT NULL COMMENT 'Link do contato no infrawiki',
  PRIMARY KEY (`idcontato`),
  KEY `idcontato` (`idcontato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Contém a relação de contatos para o escalation';

-- Copiando dados para a tabela noc.tb_contatos: 0 rows
DELETE FROM `tb_contatos`;
/*!40000 ALTER TABLE `tb_contatos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_contatos` ENABLE KEYS */;


-- Copiando estrutura para tabela noc.tb_escalation
CREATE TABLE IF NOT EXISTS `tb_escalation` (
  `idescalation` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificação do Escalation',
  `idpop` int(11) NOT NULL COMMENT 'Identificação do POP',
  `nivel` int(1) NOT NULL COMMENT 'Niveis de acionamento',
  `subnivel` int(1) NOT NULL COMMENT 'Subniveis de acionamento',
  `idcontato` int(11) NOT NULL COMMENT 'Identificação do contato',
  `acaoesperada` varchar(5000) NOT NULL COMMENT 'Descrição das ações de cada contato em caso de incidente',
  PRIMARY KEY (`idescalation`),
  KEY `idescalation` (`idescalation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela contém os escalations dos procedimentos';

-- Copiando dados para a tabela noc.tb_escalation: ~0 rows (aproximadamente)
DELETE FROM `tb_escalation`;
/*!40000 ALTER TABLE `tb_escalation` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_escalation` ENABLE KEYS */;


-- Copiando estrutura para tabela noc.tb_incidente
CREATE TABLE IF NOT EXISTS `tb_incidente` (
  `idincidente` int(11) NOT NULL AUTO_INCREMENT,
  `numeroIM` varchar(15) NOT NULL,
  `ambiente` varchar(30) NOT NULL,
  `severidade` varchar(15) NOT NULL,
  `descincidente` varchar(150) NOT NULL,
  `ocorrencia` varchar(1000) NOT NULL,
  `impacto` varchar(1500) NOT NULL,
  `datainicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `datafim` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` char(1) NOT NULL COMMENT 'O=Ope C=Closed',
  `data` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Data que o registro foi inserido',
  PRIMARY KEY (`idincidente`),
  KEY `idincidente` (`idincidente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabela de incidentes';

-- Copiando dados para a tabela noc.tb_incidente: ~3 rows (aproximadamente)
DELETE FROM `tb_incidente`;
/*!40000 ALTER TABLE `tb_incidente` DISABLE KEYS */;
INSERT INTO `tb_incidente` (`idincidente`, `numeroIM`, `ambiente`, `severidade`, `descincidente`, `ocorrencia`, `impacto`, `datainicio`, `datafim`, `status`, `data`) VALUES
	(1, 'IM05009', 'ATG', 'Advertência', 'Arquivo /share02/xml/skus.xml não atualizado', 'Arquivo XML não atualizado', 'Poderá prejudicar as campanhas de marketing da loja azul através dos parceiros', '2013-11-21 17:37:35', '0000-00-00 00:00:00', 'O', '0000-00-00 00:00:00'),
	(2, 'IM04874', 'EP', 'Advertência', 'free disk space on piquet on volume /', 'Espaço em disco se esgotando', 'Prejudicar rotinas caso o disco se esgote', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'C', '0000-00-00 00:00:00'),
	(3, 'IM04867', 'Infra Itapevi', 'Alta', 'Itapevi-Link-MPLS-Transit - Communication interrupted or not responding', 'Link MPLS Transit Itapevi indisponível', 'Acesso a rede Netshoes comprometido, porém sem impacto enquanto o link da Algar estiver operacional.', '2013-11-21 17:45:52', '0000-00-00 00:00:00', 'F', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tb_incidente` ENABLE KEYS */;


-- Copiando estrutura para tabela noc.tb_notificacoes
CREATE TABLE IF NOT EXISTS `tb_notificacoes` (
  `idnotificacao` int(11) NOT NULL AUTO_INCREMENT,
  `idincidente` int(11) NOT NULL,
  `tipo` char(1) NOT NULL COMMENT 'O=Open F=Follow C=Closed',
  `para` varchar(1000) NOT NULL COMMENT 'Destinatarios',
  `cc` varchar(1000) NOT NULL COMMENT 'Grupo de interesse',
  `acoes` varchar(1000) NOT NULL COMMENT 'Ações Esperadas/Executadas',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data da notificação',
  `descricao` varchar(1000) NOT NULL COMMENT 'Descrição da atualização',
  `numeroIM` varchar(20) NOT NULL COMMENT 'Numero do chamado no HPSM',
  `evidencias` longblob NOT NULL,
  PRIMARY KEY (`idnotificacao`),
  KEY `idincidente` (`idincidente`),
  CONSTRAINT `FK_IDINCIDENTE` FOREIGN KEY (`idincidente`) REFERENCES `tb_incidente` (`idincidente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela de notificações do incidente';

-- Copiando dados para a tabela noc.tb_notificacoes: ~0 rows (aproximadamente)
DELETE FROM `tb_notificacoes`;
/*!40000 ALTER TABLE `tb_notificacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_notificacoes` ENABLE KEYS */;


-- Copiando estrutura para tabela noc.tb_pop
CREATE TABLE IF NOT EXISTS `tb_pop` (
  `idpop` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificação do POP',
  `nome` varchar(100) NOT NULL COMMENT 'Nome do POP',
  `descricao` varchar(200) NOT NULL COMMENT 'Descrição do Incidente',
  `objetivo` varchar(1000) NOT NULL COMMENT 'Objetivo da Monitoria',
  `impacto` varchar(1000) NOT NULL COMMENT 'Impacto do Incidente',
  `prioridade` int(1) NOT NULL COMMENT 'Prioridade do Incidente',
  `tfa` int(1) NOT NULL COMMENT 'Tempo de ação do NOC',
  `grupointeresse` varchar(1000) NOT NULL COMMENT 'Interessados em receber as notificações do NOC',
  `script` varchar(5000) NOT NULL COMMENT 'Script da monitoria executada no BD',
  PRIMARY KEY (`idpop`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela noc.tb_pop: ~0 rows (aproximadamente)
DELETE FROM `tb_pop`;
/*!40000 ALTER TABLE `tb_pop` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pop` ENABLE KEYS */;


-- Copiando estrutura para tabela noc.tb_triggers
CREATE TABLE IF NOT EXISTS `tb_triggers` (
  `idtrigger` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificação da Trigger',
  `idpop` int(11) NOT NULL COMMENT 'Identificação do POP',
  `host` varchar(200) NOT NULL COMMENT 'Nome do host de monitoração',
  `descricaoitem` varchar(1000) NOT NULL COMMENT 'Nome do item de monitoração',
  `triggername` varchar(3000) NOT NULL COMMENT 'Nome do alerta em caso de incidente',
  `threshold` varchar(1000) NOT NULL COMMENT 'Nivel em que será gerado o alerta de acordo com a coleta',
  `severidade` varchar(30) NOT NULL COMMENT 'Severidade do alerta',
  `linkeventos` varchar(200) NOT NULL COMMENT 'Link de eventos no Zabbix',
  PRIMARY KEY (`idtrigger`),
  KEY `idtrigger` (`idtrigger`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Contém a descrição dos alertas gerados pelo Zabbix';

-- Copiando dados para a tabela noc.tb_triggers: ~0 rows (aproximadamente)
DELETE FROM `tb_triggers`;
/*!40000 ALTER TABLE `tb_triggers` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_triggers` ENABLE KEYS */;


-- Copiando estrutura para tabela noc.tb_updates
CREATE TABLE IF NOT EXISTS `tb_updates` (
  `idupdate` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificação da atualização',
  `idpop` int(11) NOT NULL COMMENT 'Identificação do POP',
  `data` varchar(30) NOT NULL COMMENT 'Data da atualização',
  `responsavel` varchar(50) NOT NULL COMMENT 'Nome de quem fez a atualização',
  `descricao` varchar(500) NOT NULL COMMENT 'Descrição das alterações feitas no POP',
  PRIMARY KEY (`idupdate`),
  KEY `idupdate` (`idupdate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Controle de atualizações feitas no POP';

-- Copiando dados para a tabela noc.tb_updates: ~0 rows (aproximadamente)
DELETE FROM `tb_updates`;
/*!40000 ALTER TABLE `tb_updates` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_updates` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
