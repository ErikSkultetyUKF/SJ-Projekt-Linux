-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2024 at 10:18 PM
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
-- Table structure for table `distribucie`
--

CREATE TABLE `distribucie` (
  `id` int(11) NOT NULL,
  `nazov` text NOT NULL,
  `popis` text NOT NULL,
  `obrazok` text NOT NULL,
  `popis_obrazku` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `distribucie`
--

INSERT INTO `distribucie` (`id`, `nazov`, `popis`, `obrazok`, `popis_obrazku`) VALUES
(1, 'Linux Mint', 'Linux Mint sa stal jednou z najlepších distribúcií pre začínajúcich používateľov Linuxu vďaka jednoduchému použitiu. Je to operačný systém založený na Ubuntu, ktorý je vhodný na každodenné používanie a hranie hier. Vďaka pocitu Mintu ako Windows sa používatelia, ktorí prechádzajú z Windowsu, cítia ako doma a je jedným z hlavných predajných bodov distribúcie.', './assets/img/distribucie/mint.png', 'linux-mint'),
(2, 'Manjaro', 'Manjaro sa špeciálne zameriava na dostupnosť a užívateľskú prívetivosť. Vyznačuje sa rolovacím uvoľňovacím modelom. Jeho jednoduchosť, stabilita a výkon z neho robí vhodnú alternatívu OS k MacOS a Windows. Ponúka viacero desktopových prostredí.', './assets/img/distribucie/manjaro.png', 'manjaro'),
(3, 'Fedora', 'Fedora, postavená a udržiavaná projektom Fedora (a sponzorovaná Red Hat), celosvetovou komunitou dobrovoľníkov a vývojárov, je už roky jednou z najpoužívanejších distribúcií. Snáď najvýraznejšou charakteristikou Fedory je, že je vždy na čele integrácie nových verzií balíkov a technológií do distribúcie.', './assets/img/distribucie/fedora.png', 'fedora'),
(4, 'Debian', 'Debian je rozšírenou alternatívou pre používateľov, ktorí chcú maximálnu odolnosť a dôveryhodnosť. Funguje od roku 1993 a stále pravidelne uvádza na trh najnovšie verzie. Počas životnosti každého balíka poskytuje racionálnu predvolenú konfiguráciu a časté aktualizácie zabezpečenia. Okrem toho Debian slúži ako framework pre mnohé známe distribúcie Linuxu, najmä Ubuntu, Knoppix, PureOS a Tails.', './assets/img/distribucie/debian.png', 'debian'),
(5, 'OpenSUSE Leap', 'OpenSUSE Leap je zameraná na profesionálne použitie. Je založená na SUSE Linux Enterprise Server a bola vytvorená s cieľom poskytnúť robustný, dôveryhodný a bezpečný operačný systém. OpenSUSE Leap tiež prichádza s množstvom nástrojov, ktoré sú navrhnuté tak, aby zefektívnili vašu prácu. Má ďalšie funkcie, ktoré z neho robia fantastickú možnosť pre podniky. V prvom rade ide o veľmi stabilnú distribúciu.', './assets/img/distribucie/opensuse-leap.png', 'opensuse-leap');

-- --------------------------------------------------------

--
-- Table structure for table `linux_info`
--

CREATE TABLE `linux_info` (
  `id` int(11) NOT NULL,
  `nadpis` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `linux_info`
--

INSERT INTO `linux_info` (`id`, `nadpis`, `text`) VALUES
(1, 'Prečo používať Linux?', 'Toto je otázka, ktorú si kladie väčšina ľudí. Prečo sa obťažovať učením sa úplne iného počítačového prostredia, keď operačný systém dodávaný s väčšinou stolných počítačov, notebookov a serverov funguje dobre?\r\n</p>\r\n\r\n<p>\r\nPre zodpovedanie tejto otázky, položme si ďalšiu otázku. Funguje operačný systém, ktorý momentálne používate, naozaj „v pohode“? Alebo sa ocitnete v boji s prekážkami, ako sú vírusy, malvér, spomalenia, zlyhania, nákladné opravy a licenčné poplatky?\r\n</p>\r\n\r\n<p>\r\nAk bojujete s vyššie uvedeným, Linux môže byť pre vás ideálnou platformou. Linux sa vyvinul do jedného z najspoľahlivejších počítačových ekosystémov na planéte. Skombinujte túto spoľahlivosť s nulovými vstupnými nákladmi a máte dokonalé riešenie pre platformu stolných počítačov.'),
(2, 'Open source', 'Linux je tiež distribuovaný pod licenciou open source. Open source sa riadi týmito kľúčovými princípmi:\r\n</p>\r\n\r\n<ul>\r\n<li>\r\nSloboda spustiť program na akýkoľvek účel.\r\n</li>\r\n\r\n<li>\r\nSloboda študovať, ako program funguje, a meniť ho tak, aby robil to, čo chcete.\r\n</li>\r\n\r\n<li>\r\nSloboda redistribúcie kópií, aby ste mohli pomôcť svojmu blížnemu.\r\n</li>\r\n\r\n<li>\r\nSloboda distribuovať kópie vašich upravených verzií ostatným.\r\n</li>\r\n</ul>\r\n\r\n<p>\r\nTieto princípy sú kľúčové pre pochopenie komunity, ktorá spolupracuje na vytváraní platformy Linux. Linux je bezpochyby operačný systém, ktorý je „od ľudí, pre ľudí“. Takisto sú hlavným faktorom, prečo si veľa ľudí vyberá Linux. Ide o slobodu a slobodu používania a slobodu výberu.'),
(3, 'Inštalovanie Linuxu', 'Pre mnohých ľudí sa myšlienka inštalácie operačného systému môže zdať ako veľmi náročná úloha. Verte tomu alebo nie, Linux ponúka jednu z najjednoduchších inštalácií zo všetkých operačných systémov.\r\n</p>\r\n\r\n<p>\r\nV skutočnosti väčšina verzií Linuxu ponúka to, čo sa nazýva Live distribúcia, čo znamená, že operačný systém spúšťate z USB flash disku bez toho, aby ste na pevnom disku robili akékoľvek zmeny. Získate plnú funkčnosť bez toho, aby ste sa museli zaviazať k inštalácii.\r\n</p>\r\n\r\n<p>\r\nKeď ho vyskúšate a rozhodnete sa ho použiť, jednoducho dvakrát kliknite na ikonu „Inštalovať“ a prejdite jednoduchým sprievodcom inštaláciou. to je všetko. Po dokončení inštalácie systém reštartujte a ste pripravení ho využívať.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribucie`
--
ALTER TABLE `distribucie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linux_info`
--
ALTER TABLE `linux_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribucie`
--
ALTER TABLE `distribucie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `linux_info`
--
ALTER TABLE `linux_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
