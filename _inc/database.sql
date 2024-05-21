-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2024 at 10:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Skultety-SJ-Projekt-Linux`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `accept_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `accept_status`) VALUES
(1, 'test', 'test@test.test', 'test', 1),
(2, 'Test', 'test@mail.org', 'This is a line of text.', 1),
(4, 'Test Testovací', 'test.testovaci@testmail.test', 'Táto veta bola napísaná pre testovacie účely.', 1),
(5, 'Meno Priezvisko', 'meno@priklad.org', 'Sem napíšte Vašu správu', 1),
(6, 'John Doe', 'john.doe@lorem.net', 'Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1),
(7, 'Jane Doe', 'jane.doe@lorem.net', 'Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1),
(8, 'Držgroš McDuck', 'drzgros.mcduck@mcduck.com', 'Držím všetky groše, ba aj všetky dukáty.  ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `content_creators`
--

CREATE TABLE `content_creators` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `image_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `content_creators`
--

INSERT INTO `content_creators` (`id`, `name`, `link`, `image`, `image_description`) VALUES
(1, 'The Linux Experiment (YouTube)', 'https://youtube.com/channel/UC5UAwBUum7CPN5buc-_N1Fw/', '/Skultety-SJ-Projekt-Linux/assets/img/community/content-creators/the-linux-experiment.png', 'the-linux-experiment-logo'),
(2, 'Learn Linux TV (YouTube)', 'https://youtube.com/channel/UCxQKHvKbmSzGMvUrVtJYnUA/', '/Skultety-SJ-Projekt-Linux/assets/img/community/content-creators/learn-linux-tv.png', 'learn-linux-tv-logo'),
(3, 'DistroTube (YouTube)', 'https://youtube.com/channel/UCVls1GmFKf6WlTraIb_IaJg/', '/Skultety-SJ-Projekt-Linux/assets/img/community/content-creators/distrotube.png', 'distrotube-logo'),
(4, 'TechHut (YouTube)', 'https://youtube.com/channel/UCjSEJkpGbcZhvo0lr-44X_w/', '/Skultety-SJ-Projekt-Linux/assets/img/community/content-creators/techhut.png', 'techhut-logo'),
(5, 'Linux Tex (Youtube)', 'https://youtube.com/channel/UCS25Y-2DUke9uOU5OtLwwgg', '/Skultety-SJ-Projekt-Linux/assets/img/community/content-creators/linux-tex.png', 'linux-tex-logo'),
(6, 'Chris Titus Tech (YouTube)', 'https://youtube.com/channel/UCg6gPGh8HU2U01vaFCAsvmQ/', '/Skultety-SJ-Projekt-Linux/assets/img/community/content-creators/ctt.png', 'chris-titus-tech-logo');

-- --------------------------------------------------------

--
-- Table structure for table `distributions`
--

CREATE TABLE `distributions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `image_description` text NOT NULL,
  `logo` text NOT NULL,
  `logo_description` text NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `distributions`
--

INSERT INTO `distributions` (`id`, `name`, `description`, `image`, `image_description`, `logo`, `logo_description`, `website`) VALUES
(1, 'Linux Mint', 'Linux Mint sa stal jednou z najlepších distribúcií pre začínajúcich používateľov Linuxu vďaka jednoduchému použitiu. Je to operačný systém založený na Ubuntu, ktorý je vhodný na každodenné používanie a hranie hier. Vďaka pocitu Mintu ako Windows sa používatelia, ktorí prechádzajú z Windowsu, cítia ako doma a je jedným z hlavných predajných bodov distribúcie.', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/mint.png', 'linux-mint', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/logo/mint.svg', 'linux-mint-logo', 'https://linuxmint.com/'),
(2, 'Manjaro', 'Manjaro sa špeciálne zameriava na dostupnosť a užívateľskú prívetivosť. Vyznačuje sa rolovacím uvoľňovacím modelom. Jeho jednoduchosť, stabilita a výkon z neho robí vhodnú alternatívu OS k MacOS a Windows. Ponúka viacero desktopových prostredí.', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/manjaro.png', 'manjaro', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/logo/manjaro.svg', 'manjaro-logo', 'https://manjaro.org/'),
(3, 'Fedora', 'Fedora, postavená a udržiavaná projektom Fedora (a sponzorovaná Red Hat), celosvetovou komunitou dobrovoľníkov a vývojárov, je už roky jednou z najpoužívanejších distribúcií. Snáď najvýraznejšou charakteristikou Fedory je, že je vždy na čele integrácie nových verzií balíkov a technológií do distribúcie.', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/fedora.png', 'fedora', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/logo/fedora.svg', 'fedora-logo', 'https://fedoraproject.org/'),
(4, 'Debian', 'Debian je rozšírenou alternatívou pre používateľov, ktorí chcú maximálnu odolnosť a dôveryhodnosť. Funguje od roku 1993 a stále pravidelne uvádza na trh najnovšie verzie. Počas životnosti každého balíka poskytuje racionálnu predvolenú konfiguráciu a časté aktualizácie zabezpečenia. Okrem toho Debian slúži ako framework pre mnohé známe distribúcie Linuxu, najmä Ubuntu, Knoppix, PureOS a Tails.', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/debian.png', 'debian', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/logo/debian.svg', 'debian-logo', 'https://www.debian.org/'),
(5, 'OpenSUSE Leap', 'OpenSUSE Leap je zameraná na profesionálne použitie. Je založená na SUSE Linux Enterprise Server a bola vytvorená s cieľom poskytnúť robustný, dôveryhodný a bezpečný operačný systém. OpenSUSE Leap tiež prichádza s množstvom nástrojov, ktoré sú navrhnuté tak, aby zefektívnili vašu prácu. Má ďalšie funkcie, ktoré z neho robia fantastickú možnosť pre podniky. V prvom rade ide o veľmi stabilnú distribúciu.', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/opensuse-leap.png', 'opensuse-leap', '/Skultety-SJ-Projekt-Linux/assets/img/distributions/logo/opensuse-leap.svg', 'opensuse-leap-logo', 'https://www.opensuse.org/');

-- --------------------------------------------------------

--
-- Table structure for table `linux_info`
--

CREATE TABLE `linux_info` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `linux_info`
--

INSERT INTO `linux_info` (`id`, `title`, `text`) VALUES
(1, 'Prečo používať Linux?', 'Toto je otázka, ktorú si kladie väčšina ľudí. Prečo sa obťažovať učením sa úplne iného počítačového prostredia, keď operačný systém dodávaný s väčšinou stolných počítačov, notebookov a serverov funguje dobre?\r\n</p>\r\n\r\n<p>\r\nPre zodpovedanie tejto otázky, položme si ďalšiu otázku. Funguje operačný systém, ktorý momentálne používate, naozaj „v pohode“? Alebo sa ocitnete v boji s prekážkami, ako sú vírusy, malvér, spomalenia, zlyhania, nákladné opravy a licenčné poplatky?\r\n</p>\r\n\r\n<p>\r\nAk bojujete s vyššie uvedeným, Linux môže byť pre vás ideálnou platformou. Linux sa vyvinul do jedného z najspoľahlivejších počítačových ekosystémov na planéte. Skombinujte túto spoľahlivosť s nulovými vstupnými nákladmi a máte dokonalé riešenie pre platformu stolných počítačov.'),
(2, 'Open source', 'Linux je tiež distribuovaný pod licenciou open source. Open source sa riadi týmito kľúčovými princípmi:\r\n</p>\r\n\r\n<ul>\r\n<li>\r\nSloboda spustiť program na akýkoľvek účel.\r\n</li>\r\n\r\n<li>\r\nSloboda študovať, ako program funguje, a meniť ho tak, aby robil to, čo chcete.\r\n</li>\r\n\r\n<li>\r\nSloboda redistribúcie kópií, aby ste mohli pomôcť svojmu blížnemu.\r\n</li>\r\n\r\n<li>\r\nSloboda distribuovať kópie vašich upravených verzií ostatným.\r\n</li>\r\n</ul>\r\n\r\n<p>\r\nTieto princípy sú kľúčové pre pochopenie komunity, ktorá spolupracuje na vytváraní platformy Linux. Linux je bezpochyby operačný systém, ktorý je „od ľudí, pre ľudí“. Takisto sú hlavným faktorom, prečo si veľa ľudí vyberá Linux. Ide o slobodu a slobodu používania a slobodu výberu.'),
(3, 'Inštalovanie Linuxu', 'Pre mnohých ľudí sa myšlienka inštalácie operačného systému môže zdať ako veľmi náročná úloha. Verte tomu alebo nie, Linux ponúka jednu z najjednoduchších inštalácií zo všetkých operačných systémov.\r\n</p>\r\n\r\n<p>\r\nV skutočnosti väčšina verzií Linuxu ponúka to, čo sa nazýva Live distribúcia, čo znamená, že operačný systém spúšťate z USB flash disku bez toho, aby ste na pevnom disku robili akékoľvek zmeny. Získate plnú funkčnosť bez toho, aby ste sa museli zaviazať k inštalácii.\r\n</p>\r\n\r\n<p>\r\nKeď ho vyskúšate a rozhodnete sa ho použiť, jednoducho dvakrát kliknite na ikonu „Inštalovať“ a prejdite jednoduchým sprievodcom inštaláciou. to je všetko. Po dokončení inštalácie systém reštartujte a ste pripravení ho využívať.');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `title`, `author`, `text`, `date`) VALUES
(1, 'Lorem Ipsum', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2024-05-21 08:28:08'),
(2, 'Lorem Ipsum', 'Jane Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2024-05-21 08:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `popular_webpages`
--

CREATE TABLE `popular_webpages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `image_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `popular_webpages`
--

INSERT INTO `popular_webpages` (`id`, `name`, `link`, `image`, `image_description`) VALUES
(1, 'It\'s FOSS', 'https://itsfoss.com/', '/Skultety-SJ-Projekt-Linux/assets/img/community/webpages/itsfoss.png', 'its-foss-logo'),
(2, '9to5linux', 'https://9to5linux.com/', '/Skultety-SJ-Projekt-Linux/assets/img/community/webpages/9to5linux.png', '9to5linux-logo'),
(3, 'How-To Geek (Linux Category)', 'https://www.howtogeek.com/category/linux/', '/Skultety-SJ-Projekt-Linux/assets/img/community/webpages/htg-logo.png', 'how-to-geek-logo'),
(4, 'OMG! Ubuntu', 'https://omgubuntu.co.uk/', '/Skultety-SJ-Projekt-Linux/assets/img/community/webpages/omg-ubuntu.png', 'omg-ubuntu-logo'),
(5, 'Ask Ubuntu', 'https://askubuntu.com/', '/Skultety-SJ-Projekt-Linux/assets/img/community/webpages/ask-ubuntu.png', 'ask-ubuntu-logo'),
(6, 'nixCraft', 'https://nixcraft.com/', '/Skultety-SJ-Projekt-Linux/assets/img/community/webpages/nixcraft.png', 'nixcraft-logo');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `image_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`, `image_description`) VALUES
(1, '/Skultety-SJ-Projekt-Linux/assets/img/slider/tux.svg', 'maskot-linuxu'),
(2, '/Skultety-SJ-Projekt-Linux/assets/img/slider/tux2.png', 'maskot-linuxu-neoficialne');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@admin.sk', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'user@user.sk', 'ee11cbb19052e40b07aac0ca060c23ee', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_creators`
--
ALTER TABLE `content_creators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributions`
--
ALTER TABLE `distributions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linux_info`
--
ALTER TABLE `linux_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_webpages`
--
ALTER TABLE `popular_webpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `content_creators`
--
ALTER TABLE `content_creators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `distributions`
--
ALTER TABLE `distributions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `linux_info`
--
ALTER TABLE `linux_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `popular_webpages`
--
ALTER TABLE `popular_webpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
