CREATE TABLE IF NOT EXISTS `reviews` (
	`UserId` int(11) NOT NULL AUTO_INCREMENT,
	`PackageID` int(11) NOT NULL,
	`name` varchar(255) NOT NULL,
	`review/feedback` text NOT NULL,
	`rating` tinyint(1) NOT NULL,
	`submit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `reviews` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(1, 1, 'Adam Shamree', 'Best vacation ever!', 5, '2020-01-09 20:43:02'),
(2, 1, 'John Doe', 'Great website, great content, and great support!', 4, '2020-01-09 21:00:41'),
(3, 1, 'Robert Ali', 'A bit pricey for me', 3, '2020-01-09 21:10:16'),
(4, 1, 'Daniel Mahmud', 'Great!', 5, '2020-01-09 23:51:05'),
(5, 1, 'Bobby', 'Worst service.', 2, '2020-01-14 21:54:24'),
(6, 1, 'Joshua Kennedy', 'Fantasic website, has everything I need to know.', 5, '2020-01-16 17:34:27'),
(7, 1, 'Johan Hansen', 'Really like this website, helps me out a lot!', 5, '2020-01-16 17:35:12'),
(8, 1, 'Wit Kwiatkowski', 'Please provide more places to visit.', 5, '2020-01-16 17:36:03'),
(9, 1, 'Harvey Specter', 'Thanks', 5, '2020-01-16 17:36:34'),
(10, 1, 'Jaroslava Rusia¡', '', 5, '2020-01-16 17:37:48'),
(11, 1, 'Naomi Holt', 'Appreciate the amount of hardwork you guys do.', 5, '2020-01-16 17:39:17'),
(12, 1, 'Isobel Whitehead', 'Thank you for providing a website that helps us out a lot!', 5, '2020-01-16 17:40:28'),
(13, 1, 'Warren Mills', 'Everything is awesome!', 5, '2020-01-16 19:34:08'),
(14, 1, 'Larry Johnson', 'Brilliant, thank you for providing quality tourism!', 5, '2020-01-29 18:40:36');
