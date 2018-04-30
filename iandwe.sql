-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2018 at 07:52 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iandwe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@iandwe.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `rating` int(11) NOT NULL,
  `genre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `description`, `price`, `rating`, `genre`, `created_at`, `updated_at`, `cover_image`) VALUES
(14, 'Harry Potter and the Chamber of Secrets', 'J.K Rowling', 'Harry Potter\'s summer has included the worst birthday ever, doomy warnings from a house-elf called Dobby, and rescue from the Dursleys by his friend Ron Weasley in a magical flying car! Back at Hogwarts School of Witchcraft and Wizardry for his second year, Harry hears strange whispers echo through empty corridors - and then the attacks start. Students are found as though turned to stone . Dobby\'s sinister predictions seem to be coming true.These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers. It\'s time to PASS THE MAGIC ON .', 2000, 5, 'Drama', '2018-04-29 10:29:58', '2018-04-29 17:54:26', 'harry-potter-and-the-chamber-of-secrets-original-imaf48fkpcnrupwe_1525017598.jpeg'),
(15, 'Harry Potter and the Prisoner of Azkaban', 'J.K Rowling 3', 'When the Knight Bus crashes through the darkness and screeches to a halt in front of him, it\'s the start of another far from ordinary year at Hogwarts for Harry Potter. Sirius Black, escaped mass-murderer and follower of Lord Voldemort, is on the run - and they say he is coming after Harry. In his first ever Divination class, Professor Trelawney sees an omen of death in Harry\'s tea leaves . But perhaps most terrifying of all are the Dementors patrolling the school grounds, with their soul-sucking kiss.These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers. It\'s time to PASS THE MAGIC ON .', 3000, 2, 'Comic', '2018-04-29 10:34:14', '2018-04-29 10:34:14', 'harry-potter-and-the-prisoner-of-azkaban-original-imaf48fkhpbrczfr_1525017854.jpeg'),
(16, 'Harry Potter and the Goblet of Fire', 'J.K Rowling 4', 'Harry starts his fourth year at Hogwarts, and yet again, he and his friends invite a danger so wicked, that it finally dawns on Harry why He Who Must Not Be Named is actually dreaded.\r\n\r\nSummary of the Book\r\n\r\nHarry\'s summer has been quite uneventful as he is at the Dursleys, who are afraid of his godfather being a murderer. But the Weasleys come to whisk Harry away to go to the Quidditch World Tournament finals, in a disastrous, yet funny way. But this comedy is ensued by fear, as the tournament is ruined by the return of the Death Eaters, the followers of the Dark Lord. Harry then returns to Hogwarts, and Albus Dumbledore has a bizarre announcement to make. Danger follows the Boy Who Lived yet again, but this time, Hogwarts thinks Harry asked for it! How will Harry, Ron, and Hermione fight against evil in Harry Potter and the Goblet of Fire?\r\n\r\nAbout J. K. Rowling\r\n\r\nJoanne Rowling is an English writer. She achieved cult-status with seven Harry Potter books, The Tales of Beedle the Bard, Fantastic Beasts and Where to Find Them, and Quidditch through the Ages. She has also written two murder mystery novels under the pseudonym of Robert Galbraith. Jo completed her B.A. in French and Classics at the University of Exeter. She was awarded the title of Officer of the Most Excellent Order of the British Empire for her contributions to charity and literature.', 4000, 3, 'Mystery', '2018-04-29 10:37:05', '2018-04-29 10:40:47', 'harry-potter-and-the-goblet-of-fire-original-imaf48fkdd2bejyx_1525018025.jpeg'),
(18, 'Harry Potter and the Order of the Phoenix', 'J.K Rowling 5', 'Harry Potter returns to Hogwarts for his fifth year at the school, but it is a changed world that he comes to, for the Dark Lord has returned and he has yet to make his move. Harry Potter and the Order of the Phoenix is the fifth part of J. K. Rowling’s bestselling Harry Potter series of fantasy novels.\r\n\r\nSummary of the Book\r\n\r\nThe world doesn’t make sense anymore. The Dark Lord, He Who Must Not Be Named, returned to power a few weeks ago. So why are the issues of the Daily Prophet covered with ordinary stories? Why is there no mention of Voldemort’s return, let alone no mention of the efforts that are being taken to prevent his complete return to power? Harry Potter can’t understand why the world seems so strange these days. To add to his chagrin, the Ministry decides to slap an expulsion order citing the Decree for the Reasonable Restriction of Underage Sorcery and demands that Harry appear for a hearing in front of the entire Wizarding judiciary like a wanted criminal. However, Harry only used magic in front of his cousin to protect him from a deadly Dementor. For that matter, what was a dementor doing in Little Whinging? Harry Potter can’t seem to put a finger on these events, but he knows one thing for certain: there is one man who has all the answers, the great and powerful Albus Percival Wulfric Brian Dumbledore, the Headmaster of the Hogwarts School of Witchcraft and Wizardry and the only one Voldemort fears. But for some reason, Dumbledore refuses to so much as make eye contact with Harry this year! Return to Hogwarts and join Harry, Ron and Hermione for another year of adventures and magic.\r\n\r\nAbout J. K. Rowling\r\n\r\nJoanne Rowling is an English novelist, best known for her Harry Potter series of fantasy novels. Rowling is famous the world over for her rags-to-riches story and she is largely credited with getting kids to read again. Her books sold record numbers and inspired a series of films and video games.\r\n\r\nMedia Note\r\n\r\nThe Harry Potter series was adapted into eight movies. This novel was adapted into the hit eponymous film starring Daniel Radcliffe, Emma Watson and Rupert Grint. The movie is available on DVD and Blu-Ray, so catch a copy today!\r\n\r\nSeries Reading Order\r\n\r\nHarry Potter and his friends begin the long-awaited battle against the secrets of Lord Voldemort in Harry Potter and the Half Blood Prince, the sixth book in the series.', 5000, 5, 'Horror', '2018-04-29 10:47:28', '2018-04-29 10:47:28', 'harry-potter-and-the-order-of-the-phoenix-original-imaf48fkr95pcwgh_1525018648.jpeg'),
(19, 'Harry Potter and the Half-Blood Prince', 'J.K Rowling 6', 'When Dumbledore arrives at Privet Drive one summer night to collect Harry Potter, his wand hand is blackened and shrivelled, but he does not reveal why. Secrets and suspicion are spreading through the wizarding world, and Hogwarts itself is not safe. Harry is convinced that Malfoy bears the Dark Mark: there is a Death Eater amongst them. Harry will need powerful magic and true friends as he explores Voldemort\'s darkest secrets, and Dumbledore prepares him to face his destiny.These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers. It\'s time to PASS THE MAGIC ON .', 6000, 4, 'Romance', '2018-04-29 10:48:59', '2018-04-29 10:48:59', 'harry-potter-and-the-half-blood-prince-original-imaf48fkqgasrwbq_1525018739.jpeg'),
(20, 'Harry Potter and the Deathly Hallows', 'J.K Rowling 7', 'The Deathly Hallows is the final instalment of J.K. Rowling\'s bestselling series, Harry Potter. This title has Harry and his friends reeling after the death of the world\'s greatest wizard, Albus Dumbledore.\r\n\r\nSummary of the Book\r\n\r\nHarry, Hermione and Ron have no other choice but to find all the remaining Horcruxes and destroy them forever, before Lord Voldemort can get his hands on them and kill Harry eventually. On the other hand, with Dumbledore\'s passing, hope seems to be at its dreariest. The Death-Eaters create chaos for the Muggles to struggle with, slaughtering several of them every day. To make things worse, the Ministry of Magic has also been compromised and is now under the control of the Dark Lord. Everyone seems to be a foe now. But Harry, Ron and Hermione are certain that they have to complete Dumbledore\'s remaining journey and destroy all the Horcruxes. Will they be successful?\r\n\r\nAbout J. K. Rowling\r\n\r\nJoanne Rowling is an English writer. She achieved cult-status with seven Harry Potter books, The Tales of Beedle the Bard, Fantastic Beasts and Where to Find Them, and Quidditch Through the Ages. She has also written two murder mystery novels under the pseudonym, Robert Galbraith. Jo completed her B.A. in French and Classics at the University of Exeter. She was awarded the title of Officer of the Most Excellent Order of the British Empire for her contributions to charity and literature.', 7000, 5, 'Action', '2018-04-29 10:51:12', '2018-04-29 10:51:12', 'harry-potter-and-the-deathly-hallows-original-imaf48fkkhwdx4w3_1525018872.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `id` (`id`,`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `id`, `book_id`) VALUES
(12, 1, 15),
(11, 2, 20),
(10, 2, 13),
(7, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_24_142223_create_books_table', 2),
(4, '2018_04_28_103619_add_cover_image_to_books', 3),
(5, '2018_04_29_141708_add_cover_image_to_post', 4),
(6, '2018_04_29_143440_add_cover_image_to_book', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sahil Jaiswal', 'sahil131196@gmail.com', '$2y$10$MfOgi4PIAQ3nruIeFOvnp.6Okxkop2qCaFFjmG.V2/8zD/KYCZHHe', 'kmIFnAYdvfLHinJTC5JAoyDCXQfpQtuhcceQfO4jtiSCt5E2B4HER4t7CrY9', '2018-04-24 12:27:22', '2018-04-24 12:27:22'),
(2, 'user', 'u@u.u', '$2y$10$DfL/ZBSlLCcUCerFTBlvfejJHzaF9IGlmfMJevM14WYSOHrkm4Uiy', 'ReVLgAMlIYh9EdIntrT3WfyGPV30P7gdTh3eBnAJwSxfVGJJVqx7gTOL4iYa', '2018-04-28 04:55:53', '2018-04-28 04:55:53'),
(3, 'newuser', 'n@n.n', '$2y$10$uIbKGYaYt/sM7mtYQOgYv.sQnX7zSyTSqXhhIPl9AcABcsMli3dlS', 'XqKsVYK032a5YmaFmR9Q4ZdCac5v61vXUDvvB5ajy63XSFdoBfDkhBRN2WpC', '2018-04-29 03:27:11', '2018-04-29 03:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int(10) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  PRIMARY KEY (`wishlist_id`),
  KEY `id` (`id`,`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `id`, `book_id`) VALUES
(4, 1, 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
