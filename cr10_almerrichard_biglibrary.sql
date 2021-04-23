-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Apr 2021 um 21:44
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_almerrichard_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_almerrichard_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_almerrichard_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `img` text DEFAULT NULL,
  `author_first_name` varchar(55) DEFAULT NULL,
  `author_last_name` varchar(55) DEFAULT NULL,
  `isbn` varchar(55) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `publisher_date` year(4) DEFAULT NULL,
  `publisher_name` varchar(55) DEFAULT NULL,
  `publisher_address` varchar(100) DEFAULT NULL,
  `publisher_size` varchar(55) DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL,
  `status` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `img`, `author_first_name`, `author_last_name`, `isbn`, `description`, `publisher_date`, `publisher_name`, `publisher_address`, `publisher_size`, `type`, `status`) VALUES
(5, 'The Lion King', 'https://images-na.ssl-images-amazon.com/images/I/81WZJ-y1knL.jpg', 'Roger', 'Allers', '15664564', 'The Lion King is a movie about an animal kingdom', 1994, 'Disney', 'Florida', 'big', 'DVD', 'Available'),
(8, 'Pinocchio', 'https://images-na.ssl-images-amazon.com/images/I/5131X6uSxhL._SX370_BO1,204,203,200_.jpg', 'Hamilton ', 'Luske', '5465166541684', 'Pinocchio is a movie about a puppet which become a real boy.', 1940, 'Disney', 'Florida', 'big', 'DVD', 'Available'),
(9, 'Iron Man', 'https://images-na.ssl-images-amazon.com/images/I/517EnJmL7%2BL.jpg', 'John', 'Favreau', '5464651', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.', 2008, 'Marvel Comics', 'California', 'Medium', 'DVD', 'Available'),
(10, 'Ant Man', 'https://de.web.img2.acsta.net/pictures/15/07/20/18/06/476503.jpg', 'Peyton ', 'Reed', '516546516', 'Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help his mentor, Dr. Hank Pym, plan and pull of', 2015, 'Marvel Comics', 'California', 'medium', 'DVD', 'Available'),
(11, 'The Beauty and the Beast', 'https://media1.jpc.de/image/w600/front/0/8717418532802.jpg', 'Gary ', 'Trousdale', '84645165', 'A prince cursed to spend his days as a hideous monster sets out to regain his humanity by earning a young womans love.', 1991, 'Disney', 'Florida', 'big', 'DVD', 'Available'),
(12, 'Die Tote im Kaffeehaus', 'https://assets.thalia.media/img/artikel/4053c30930bcae9afb72bef25bf4b0fcc1f65dc1-00-00.jpeg', 'Beate ', 'Maxian', '978-3-442-49016-5', 'In Wien sorgt der Mord an der Grande Dame einer Kaffeehausdynastie für Schlagzeilen …', 2021, 'Goldmann', 'München, Germany', 'small', 'Book', 'Available'),
(13, 'Der verlorene Sommer', 'https://assets.thalia.media/img/artikel/d0e7d175f9ba8ef6b4df8bfbfb3b651cbcbc46c5-00-00.jpeg', 'Wladimir ', 'Kaminer', '978-3-442-20624-7', 'Mit unerschütterlichem Humor blickt Wladimir Kaminer auf die Monate, die unser Leben veränderten.', 2021, 'Goldmann', 'München, Germany', 'small', 'Book', 'Available'),
(14, 'Der Herr der Ringe', 'https://assets.thalia.media/img/artikel/f65aed64c4b51d0045d84f2eb74abc930422ae9f-00-00.jpeg', 'J. R. R. ', 'Tolkien', '978-3-608-93981-1', 'Neun Gefährten machen sich auf eine gefährliche Reise, um die Zukunft Mittelerdes zu retten.', 2019, 'Klett Cotta', 'Stuttgard, Germany', 'small', 'Book', 'Available'),
(15, 'Der Herr der Ringe - Die zwei Türme', 'https://assets.thalia.media/img/artikel/7a59a3fa9dd6cd771be018a54b571c6c9b5a1063-00-00.jpeg', 'J. R. R. ', 'Tolkien', '978-3-608-93982-8', 'Durch einen merkwürdigen Zufall fällt dem Hobbit Bilbo Beutlin ein Zauberring zu, dessen Kraft, käme er in die falschen Hände, zu einer absoluten Herrschaft des Bösen führen würde.', 2012, 'Klett Cotta', 'Stuttgard, Germany', 'small', 'Book', 'Available'),
(16, 'Der Herr der Ringe - Die Rückkehr des Königs', 'https://assets.thalia.media/img/artikel/726e0e43a42aa0b11b9392354c83293c63b504d2-00-00.jpeg', 'J. R. R.', 'Tolkien', '978-3-608-93983-5', 'Der Schauplatz des Herrn der Ringe ist Mittelerde, eine alternative Welt, und erzählt wird von der gefahrvollen Quest einiger Gefährten, die in einem dramatischen Kampf gegen das Böse endet.', 2012, 'Klett Cotta', 'Stuttgard, Germany', 'small', 'Book', 'Available'),
(17, 'Rewind, Replay, Rebound', 'https://images-na.ssl-images-amazon.com/images/I/81nUlyIdo6L._SL1400_.jpg', 'Volbeat', 'Volbeat', '6546465', 'Rewind, Replay, Rebound ist das siebte Studioalbum der dänischen Metal-Band Volbeat.', 2019, 'Vertigo Berlin', 'Germany', 'small', 'CD', 'Available'),
(18, 'Californication', 'https://images-na.ssl-images-amazon.com/images/I/81EhgcJGTNL._SL1448_.jpg', 'Red Hot Chili Peppers', 'Red Hot Chili Peppers', '516546565', 'Californication ist ein Funk-Rock-Musikalbum der kalifornischen Rockband Red Hot Chili Peppers, das im Juni 1999 veröffentlicht wurde.', 1999, 'Warner Bros.', 'Burbank, Kalifornien', 'medium', 'CD', 'Available'),
(19, 'By the Way', 'https://images-na.ssl-images-amazon.com/images/I/81RM%2BS0I9wL._SL1425_.jpg', 'Red Hot Chili Peppers', 'Red Hot Chili Peppers', '65165651', 'By the Way ist das achte Studioalbum der US-amerikanischen Rockband Red Hot Chili Peppers.', 2002, 'Warner Music', 'Chateau Marmont, Los Angeles', 'medium', 'CD', 'Available'),
(20, 'Master of Puppets', 'https://www.emp.at/dw/image/v2/BBQV_PRD/on/demandware.static/-/Sites-master-emp/default/dw4270ad56/images/4/2/2/8/422893.jpg?sfrm=png', 'Metallica', 'Metallica', '516516651', 'Master of Puppets ist das dritte Studioalbum der US-amerikanischen Metal-Band Metallica.', 1986, 'Elektra Records', 'Kopenhagen, Dänemark', 'small', 'CD', 'Available'),
(21, 'Metallica', 'https://www.metal1.info/wordpress/wp-content/uploads/reviews/2013/04/metallica-metallica.jpg', 'Metallica', 'Metallica', '651654165', 'Metallica ist das fünfte Studioalbum der US-amerikanischen Heavy-Metal-Band Metallica.', 1991, 'Elektra Records', 'Los Angeles, Kalifornien', 'medium', 'CD', 'Available');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
