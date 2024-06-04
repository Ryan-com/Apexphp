-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.32-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dump della struttura di tabella database-apex.arene
CREATE TABLE IF NOT EXISTS `arene` (
  `nome_arena` char(50) NOT NULL DEFAULT '',
  `foto_arena` char(50) NOT NULL DEFAULT '',
  `mappa` char(50) NOT NULL DEFAULT '',
  `descrizione_arena` longtext DEFAULT NULL,
  PRIMARY KEY (`nome_arena`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database-apex.arene: ~0 rows (circa)

-- Dump della struttura di tabella database-apex.leggende
CREATE TABLE IF NOT EXISTS `leggende` (
  `nome_leggenda` char(50) NOT NULL,
  `banner` char(50) NOT NULL,
  `descrizione_txt` longtext DEFAULT NULL,
  `foto_leggenda` char(255) DEFAULT NULL,
  `professione` char(50) DEFAULT NULL,
  `copertina` char(255) DEFAULT NULL,
  `link_video` longtext DEFAULT NULL,
  PRIMARY KEY (`nome_leggenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database-apex.leggende: ~4 rows (circa)
INSERT INTO `leggende` (`nome_leggenda`, `banner`, `descrizione_txt`, `foto_leggenda`, `professione`, `copertina`, `link_video`) VALUES
	('Ash', 'Ash banner.png', "Nata nelle spietate terre della Frontiera, la dott.ssa Ashleigh Reid imparò molto presto che l\'unica persona di cui avrebbe mai potuto fidarsi era se stessa. Un giorno fu ingaggiata da un gruppo di mercenari per un\'operazione molto delicata: rubare un tipo di carburante sperimentale oggetto di studio nella città di Olympus, nelle Terre Straniere. Era il lavoro perfetto per lei, così si infiltrò tra i ricercatori manipolandoli psicologicamente per anni. Quando il laboratorio andò distrutto, anche lei morì.\r\nO forse no.\r\nIl suo cervello fu trasferito nell\'involucro di un simulacro, ma l\'operazione provocò una grave amnesia. Inoltre, il trauma della 'morte' finì per scindere la sua personalità. Ash è la personificazione del lato freddo, perfezionista e assetato di potere della dott.ssa Reid. Ma dietro quell\'apparenza forte e sicura di sé si cela qualcosa di inquietante. Quando Horizon riuscì ad accedere ai suoi codici di programmazione, la struttura che teneva in catene la fragile (ma non per questo meno intelligente) personalità sopita di Leigh iniziò a cedere. Ash si unisce agli Apex Games per dimostrare di aver trasceso la sua natura umana. Leigh, tuttavia, è determinata a dimostrare che si sbaglia.", 'Ash-c.png', 'Istigatrice tagliente', 'Ash-w.png', 'https://www.youtube.com/watch?time_continue=2&v=1R'),
	('Ballistic', 'Ballistic banner.png', "August era l\'unico erede del patrimonio dei Brinkman, costruito su una fitta rete di affari illeciti. Ma quando i suoi genitori finirono nei guai, il giovane si ritrovò da solo ad amministrare la loro fortuna. Ricco, furioso e ormai sulla via dell\'autodistruzione, August si unì ai Thunderdome Games, i precursori degli odierni Apex Games. Fu così che, con lo pseudonimo di Ballistic, ascese rapidamente al successo. Il suo stile spietato, spericolato ed egoista lo rese la prima vera celebrità dei Thunderdome.", 'Ballistic-c.png', 'Tiratore raffinato', 'Ballistic-w.png', 'https://www.youtube.com/watch?v=piOCG6ETQzI&source'),
	('Bangalore', 'Bangalore banner.png', "Proveniente da una famiglia di militari in cui lei, i genitori e i quattro fratelli maggiori servivano l\'IMC, Bangalore è sempre stata eccezionale nell\'arte della guerra. Grande sostenitrice dell\'IMC, era un\'allieva brillante all\'Accademia Militare, nonché l\'unica cadetta in grado di smontare un Peacekeeper, equipaggiarlo con un hop-up strozzatura di precisione e riassemblarlo in meno di 20 secondi, a occhi chiusi.", 'Bangalore-c.png', 'Soldato professionista', 'Ballistic-w.png', 'https://www.youtube.com/watch?v=JyJhFYNob30'),
	('Bloodhound', 'Bloodhound banner.png', "Bloodhound è unə abile cacciatorə, conosciutə in ogni angolo delle Terre Straniere e della Frrontiera per le sue capacità. Figliə di due ingegneri dello stabilimento New Dawn su Talos, venne cresciutə dallo zio Artur dopo la morte dei suoi genitori, rimasti uccisi in un\'esplosione che rase al suolo la struttura in cui lavoravano. Artur insegnò a Bloodhound la saggezza degli antichi, che dà grande importanza al valore della natura e si oppone all\'avanzare della tecnologia. Ma la tecnologia ha sempre affascinato Bloodhound, che ha persino trovato il modo di fondere vecchio e nuovo per uccidere il Goliath che tormentava la gente del suo villaggio. Quel momento ha cambiato la sua vita per sempre.", 'Bloodhound-c.png', 'Cacciatorə tecnologicə', 'Bloodhound-w.png', 'https://www.youtube.com/watch?v=euWTbVdRGv0&source');

-- Dump della struttura di tabella database-apex.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `foto_profilo` text DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database-apex.utenti: ~2 rows (circa)
INSERT INTO `utenti` (`username`, `password`, `email`, `foto_profilo`) VALUES
	('asd', 'asd', 'ssssss', '../Foto/Foto-profilo/Bloodhound.png'),
	('Gianni', 'a', '', '../Foto/Foto-profilo/Bloodhound.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
