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


-- Dump della struttura del databse database-apex
CREATE DATABASE IF NOT EXISTS `database-apex`
USE `database-apex`;

-- Dump della struttura di tabella database-apex.arene
CREATE TABLE IF NOT EXISTS `arene` (
  `nome_arena` char(50) NOT NULL DEFAULT '',
  `foto_arena` char(50) NOT NULL DEFAULT '',
  `mappa` char(50) NOT NULL DEFAULT '',
  `descrizione_arena` longtext DEFAULT NULL,
  PRIMARY KEY (`nome_arena`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database-apex.arene: ~5 rows (circa)
INSERT INTO `arene` (`nome_arena`, `foto_arena`, `mappa`, `descrizione_arena`) VALUES
	('Canyon dei Re', '../Foto/Mappe/Canyon dei re.jpg', '', 'Un tempo semplice insediamento su Solace, l isola conosciuta come Canyon dei Re prosperò grazie all IMC, che la scelse come luogo di ricerca e sviluppo. Ospitava una base aerea, un impianto di depurazione dell\'acqua e numerose altre strutture a supporto delle operazioni IMC. Per scaricare la tensione, i soldati dell IMC di stanza partecipavano a combattimenti in stile gladiatorio in un\'area che chiamavano "Arena": erano a tutti gli effetti gli antenati degli Apex Games. Ma all\'oscuro di tutti, Canyon dei Re era anche sede di strutture sotterranee che nascondevano le più vertiginose operazioni dell IMC, come un progetto top secret sulla tecnologia fasica e un programma volto alla creazione di un esercito di simulacri controllato da un\'unica mente.'),
	('Confini del Mondo', '../Foto/Mappe/Confini del mondo.jpg', '', 'Pianeta inospitale caratterizzato da una forte attività vulcanica. Talos fu considerato inabitabile finché un composto minerale raro non fu trovato sotto la sua superficie. La IMC costruì delle torri termoregolatrici per raffreddare i flussi di lava su Talos e permettere l estrazione di risorse. La struttura che ospitava le torri venne chiamata ottimisticamente New Dawn ("Nuova Aurora"), e la città di Confini del Mondo si sviluppò intorno a essa. In seguito, un esplosione in una delle torri congelò fatalmente l area circostante. Confini del Mondo fu abbandonata, salvo per una piccola comunità di cacciatori che un tempo disdegnava la tecnologia (guidata dalla leggenda locale Bloodhound).'),
	('Luna distrutta', '../Foto/Mappe/Luna distrutta.jpg', '', 'Prima che una meteora e una leggenda ne cambiassero le sorti, Cleo illuminava i cieli di Boreas. Gli abitanti del pianeta ancora non lo sapevano, ma oltre a squarciare la luna e a distruggerne la superficie, la meteora li avrebbe condotti sulla via della distruzione. Fu solo quando i ricercatori scoprirono una connessione tra la luna e i sempre più frequenti cataclismi di Boreas che le nazioni del pianeta unirono le forze per guarire Cleo, dando vita al progetto Hope. Così, quello che fino ad allora era stato un satellite disabitato divenne una colonia popolata da ricercatori, ingegneri e costruttori. Pian piano gli squarci furono richiusi, le rocce celesti divennero campi fioriti e nacquero nuove tecnologie.'),
	('Olympus', '../Foto/Mappe/Olympus.png', '', 'Costruita su un sogno, un tempo Olympus era un\'utopia fluttuante tra le nuvole che si estendono su Psamathe. Qui le menti più brillanti delle Terre Straniere erano solite riunirsi per scambiarsi idee e dare vita a incredibili scoperte scientifiche e artistiche. Tuttavia, un incidente in un laboratorio di ricerca sperimentale generò una gigantesca bolla di energia fasica, costringendo gli abitanti ad abbandonare la città. Con l aiuto della Commissione dei mercenari, la Hammond Robotics trasformò il luogo in una nuova arena per gli Apex Games.'),
	('Passo della Tempesta', '../Foto/Mappe/Passo della tempesta.jpg', '', 'Quest isola non è sempre stata così deserta. Splendida e ricca di risorse, Passo della Tempesta fu inizialmente scelta come località per le prime spedizioni dell\'IMC su Gaea. Tuttavia, non appena si scoprì che l\'isola era costantemente devastata da intense tempeste tropicali, i team dell\'IMC fondarono un insediamento permanente nella vicina Suotamo. Per far fronte al crescente fabbisogno energetico della città, usarono Passo della Tempesta come base per costruire una serie di condensatori.');

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
	('Ash', 'Ash banner.png', 'Nata nelle spietate terre della Frontiera, la dott.ssa Ashleigh Reid imparò molto presto che l unica persona di cui avrebbe mai potuto fidarsi era se stessa. Un giorno fu ingaggiata da un gruppo di mercenari per un operazione molto delicata: rubare un tipo di carburante sperimentale oggetto di studio nella città di Olympus, nelle Terre Straniere. Era il lavoro perfetto per lei, così si infiltrò tra i ricercatori manipolandoli psicologicamente per anni. Quando il laboratorio andò distrutto, anche lei morì.\r\nO forse no.\r\nIl suo cervello fu trasferito nell involucro di un simulacro, ma l operazione provocò una grave amnesia. Inoltre, il trauma della "morte" finì per scindere la sua personalità. Ash è la personificazione del lato freddo, perfezionista e assetato di potere della dott.ssa Reid. Ma dietro quell apparenza forte e sicura di sé si cela qualcosa di inquietante. Quando Horizon riuscì ad accedere ai suoi codici di programmazione, la struttura che teneva in catene la fragile (ma non per questo meno intelligente) personalità sopita di Leigh iniziò a cedere. Ash si unisce agli Apex Games per dimostrare di aver trasceso la sua natura umana. Leigh, tuttavia, è determinata a dimostrare che si sbaglia.', 'Ash-c.png', 'Istigatrice tagliente', 'Ash-w.png', 'https://www.youtube.com/watch?time_continue=2&v=1R'),
	('Ballistic', 'Ballistic banner.png', 'August era l unico erede del patrimonio dei Brinkman, costruito su una fitta rete di affari illeciti. Ma quando i suoi genitori finirono nei guai, il giovane si ritrovò da solo ad amministrare la loro fortuna. Ricco, furioso e ormai sulla via dell autodistruzione, August si unì ai Thunderdome Games, i precursori degli odierni Apex Games. Fu così che, con lo pseudonimo di Ballistic, ascese rapidamente al successo. Il suo stile spietato, spericolato ed egoista lo rese la prima vera celebrità dei Thunderdome.', 'Ballistic-c.png', 'Tiratore raffinato', 'Ballistic-w.jpeg', 'https://www.youtube.com/watch?v=piOCG6ETQzI&source'),
	('Bangalore', 'Bangalore banner.png', 'Proveniente da una famiglia di militari in cui lei, i genitori e i quattro fratelli maggiori servivano l IMC, Bangalore è sempre stata eccezionale nell arte della guerra. Grande sostenitrice dell IMC, era un allieva brillante all Accademia Militare, nonché l unica cadetta in grado di smontare un Peacekeeper, equipaggiarlo con un hop-up strozzatura di precisione e riassemblarlo in meno di 20 secondi, a occhi chiusi.', 'Bangalore-c.png', 'Soldato professionista', 'Bangalore-w.jpg', 'https://www.youtube.com/watch?v=JyJhFYNob30'),
	('Bloodhound', 'Bloodhound banner.png', 'Bloodhound è unə abile cacciatorə, conosciutə in ogni angolo delle Terre Straniere e della Frrontiera per le sue capacità. Figliə di due ingegneri dello stabilimento New Dawn su Talos, venne cresciutə dallo zio Artur dopo la morte dei suoi genitori, rimasti uccisi in un esplosione che rase al suolo la struttura in cui lavoravano. Artur insegnò a Bloodhound la saggezza degli antichi, che dà grande importanza al valore della natura e si oppone all avanzare della tecnologia. Ma la tecnologia ha sempre affascinato Bloodhound, che ha persino trovato il modo di fondere vecchio e nuovo per uccidere il Goliath che tormentava la gente del suo villaggio. Quel momento ha cambiato la sua vita per sempre.', 'Bloodhound-c.png', 'Cacciatorə tecnologicə', 'Bloodhound-w.jpg', 'https://www.youtube.com/watch?v=euWTbVdRGv0&source');

-- Dump della struttura di tabella database-apex.rank
CREATE TABLE IF NOT EXISTS `rank` (
  `classifica` char(50) NOT NULL,
  PRIMARY KEY (`classifica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database-apex.rank: ~7 rows (circa)
INSERT INTO `rank` (`classifica`) VALUES
	('Bronze'),
	('Champion'),
	('Diamond'),
	('Gold'),
	('Plastic'),
	('Platinum'),
	('Silver');

-- Dump della struttura di tabella database-apex.statistiche
CREATE TABLE IF NOT EXISTS `statistiche` (
  `codice` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL DEFAULT '0',
  `uccisioni` int(11) NOT NULL DEFAULT 0,
  `livello` int(11) NOT NULL DEFAULT 0,
  `vittorie` int(11) NOT NULL DEFAULT 0,
  `leggenda_preferita` char(50) NOT NULL DEFAULT '0',
  `morti` int(11) NOT NULL DEFAULT 0,
  `rank` char(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codice`),
  KEY `FK_statistiche_utenti` (`username`),
  KEY `FK_statistiche_leggende` (`leggenda_preferita`),
  KEY `FK_statistiche_rank` (`rank`),
  CONSTRAINT `FK_statistiche_leggende` FOREIGN KEY (`leggenda_preferita`) REFERENCES `leggende` (`nome_leggenda`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_statistiche_rank` FOREIGN KEY (`rank`) REFERENCES `rank` (`classifica`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_statistiche_utenti` FOREIGN KEY (`username`) REFERENCES `utenti` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella database-apex.statistiche: ~1 rows (circa)
INSERT INTO `statistiche` (`codice`, `username`, `uccisioni`, `livello`, `vittorie`, `leggenda_preferita`, `morti`, `rank`) VALUES
	(1, 'Gianni', 1123, 192, 64, 'Bloodhound', 1000, 'Champion');

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
	('A', 'A', 'A', '../Foto/Foto-profilo/Bloodhound.png'),
	('asd', 'asd', 'ssssss', '../Foto/Foto-profilo/Bloodhound.png'),
	('b', 'b', 'b', '../Foto/Foto-profilo/Octane.webp'),
	('c', 'c', 'c', '../Foto/Foto-profilo/Gibraltar.webp'),
	('d', 'd', 'd', '../Foto/Foto-profilo/Octane.webp'),
	('e', 'e', 'e', '../Foto/Foto-profilo/Lifeline.webp'),
	('Gianni', 'a', '', '../Foto/Foto-profilo/Bloodhound.png'),
	('Tormy87', 'asd', 'Francesco.tormene@gmail.com', '../Foto/Foto-profilo/Mirage.webp');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
information_schema