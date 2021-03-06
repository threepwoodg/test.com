-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 13 2017 г., 13:08
-- Версия сервера: 5.7.19-0ubuntu0.16.04.1
-- Версия PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ne_report`
--

CREATE TABLE `ne_report` (
  `NE Name` varchar(40) DEFAULT NULL,
  `NE Type` varchar(7) DEFAULT NULL,
  `NE IP Address` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ne_report`
--

INSERT INTO `ne_report` (`NE Name`, `NE Type`, `NE IP Address`) VALUES
('agg1-Lenina244.STV', 'CX600', '10.173.224.1'),
('agg2-Lenina244.STV', 'CX600', '10.173.224.2'),
('agg1-45parallel.STV', 'CX600', '10.173.224.9'),
('agg1-Shpakovskaya96.STV', 'CX600', '10.173.224.11'),
('acc4-1-Kulakova27_2.STV', 'S5300', '10.173.228.14'),
('agg1-Zhukova27.STV', 'CX600', '10.173.224.3'),
('agg1-Przhevalskogo15.STV', 'CX600', '10.173.224.4'),
('agg1-Kulakova10.STV', 'CX600', '10.173.224.5'),
('agg1-Kulakova18.STV', 'CX600', '10.173.224.6'),
('agg1-Mikhailovskoe7.STV', 'CX600', '10.173.224.7'),
('agg1-Serova460.STV', 'CX600', '10.173.224.8'),
('agg1-Perspektivnaya26.STV', 'CX600', '10.173.224.10'),
('acc15-1-Lenina244.STV', 'S5300', '10.173.228.70'),
('acc24-4-Lenina394.STV', 'S3300', '10.173.228.11'),
('agg2-Dunaevskogo26.PYATK', 'CX600', '10.173.192.2'),
('isl-hub01-Galereya_Kirova65.PYATK', 'S3300', '10.67.38.7'),
('agg1-Kislovodskaya30a.ESSTK', 'CX600', '10.173.192.3'),
('agg2-Kislovodskaya30a.ESSTK', 'CX600', '10.173.192.4'),
('acc16-7-Dovatortcev61.STV', 'S3300', '10.173.228.83'),
('acc16-6-50LetVLKSM43b.STV', 'S3300', '10.173.228.82'),
('acc17-2-Shpakovskaya88.STV', 'S3300', '10.173.228.87'),
('acc22-1-Mikhalovskoe5.STV', 'S3300', '10.173.228.89'),
('agg1-Lenina162a.MIKHL', 'CX600', '10.173.224.14'),
('acc24-1-Mira448.STV', 'S5300', '10.173.228.73'),
('acc16-9-Dovatortcev61.STV', 'S3300', '10.173.228.90'),
('acc4-4-Kulakova16a.STV', 'S3300', '10.173.228.78'),
('acc15-7-Bunimovicha7.PYATK', 'S3300', '10.173.196.32'),
('agg1-Sovetskaya47.MINVD', 'CX600', '10.173.212.1'),
('agg1-Oktyaborskaya46a.BUDVK', 'CX600', '10.173.220.1'),
('agg2-Oktyaborskaya46a.BUDVK', 'CX600', '10.173.220.2'),
('agg1-Leningradskaya63.GEORG', 'CX600', '10.173.216.1'),
('agg2-Leningradskaya63.GEORG', 'CX600', '10.173.216.2'),
('acc25-1-Promishlennaya2.STV', 'S3300', '10.173.228.74'),
('acc23-1-2Ugozapandniy2d.STV', 'S3300', '10.173.228.91'),
('acc1-7-Lenina406.STV', 'S3300', '10.173.228.95'),
('agg1-Dunaevskogo26.PYATK', 'CX600', '10.173.192.1'),
('acc16-10-Pirogova68_3.STV', 'S3300', '10.173.228.35'),
('acc7-12-Bulkina11.STV', 'S3300', '10.173.228.37'),
('acc37-10-KMarksa47-49.STV', 'S3300', '10.173.228.98'),
('acc37-11-KMarksa47-49.STV', 'S3300', '10.173.228.99'),
('acc36-1-Unosty5a.STV', 'S3300', '10.173.228.100'),
('acc16-6-Mira3.PYATK', 'S3300', '10.173.196.43'),
('agg1-Chaykovskogo.NFTK', 'CX600', '10.173.188.1'),
('acc1-3-Dzerzhinskogo199.STV', 'S3300', '10.173.228.6'),
('agg1-Sedlogorskaya.KSLV', 'CX600', '10.173.184.1'),
('agg1-Dzerjinskogo24.KSLV', 'CX600', '10.173.184.2'),
('agg1-Luksemburg50.KSLV', 'CX600', '10.173.184.3'),
('agg1-Lotos.IZOBIL', 'CX600', '10.173.248.1'),
('agg1-BeshtayDispetcher.PYATK', 'CX600', '10.173.192.6'),
('agg1-Oktjabrskaja1.PYATK', 'CX600', '10.173.192.10'),
('agg1-Ermolova30.PYATK', 'CX600', '10.173.192.7'),
('agg1-KislovodskShosse22.PYATK', 'CX600', '10.173.192.8'),
('agg1-SadovoeKolco210.PYATK', 'CX600', '10.173.192.11'),
('acc1-2-Lomonosova25.STV', 'S5300', '10.173.228.5'),
('acc24-2-Dovatortcev30v.STV', 'S3300', '10.173.228.18'),
('agg1-SovetskojArmii19.PYATK', 'CX600', '10.173.192.5'),
('agg1-Elektropodstanciya.PYATK', 'CX600', '10.173.192.12'),
('agg1-KRTPC.ALKS', 'CX600', '10.173.224.31'),
('agg1-Kosmonavtov13a.CHRKS', 'CX600', '10.173.4.1'),
('agg2-Kosmonavtov13a.CHRKS', 'CX600', '10.173.4.2'),
('acc8-7-Kislovodskaya1.ESSTK', 'S3300', '10.173.196.191'),
('acc16-11-50LetVLKSM16i.STV', 'S3300', '10.173.228.36'),
('acc16-12-50LetVLKSM16i.STV', 'S3300', '10.173.228.40'),
('acc38-3-Grashdanskaya8.STV', 'S3300', '10.173.228.128'),
('acc24-3-Dovatortcev30v.STV', 'S3300', '10.173.228.55'),
('acc29-1-Cherkesskoe4.PYATK', 'S3300', '10.173.196.209'),
('agg2-RinokVostoch.NVM', 'CX600', '10.173.252.2'),
('acc43-1-Parallelniy8.STV', 'S3300', '10.173.228.126'),
('acc43-2-Parallelniy8.STV', 'S3300', '10.173.228.127'),
('agg1-KurskayaBashnya.KRSK', 'CX600', '10.173.216.20'),
('agg1-RinokVostoch.NVM', 'CX600', '10.173.252.1'),
('acc7-2-KMarksa98.STV', 'S3300', '10.173.228.120'),
('acc16-2-Dovatortcev61.STV', 'S3300', '10.173.228.123'),
('acc5-1-Dunaevskogo26.PYATK', 'S5300', '10.173.196.10'),
('acc11-1-Cherkesskoe15.PYATK', 'S3300', '10.173.196.127'),
('acc16-2-Kozlova28.PYATK', 'S3300', '10.173.196.189'),
('agg1-Bashnya.NVPV', 'CX600', '10.173.216.4'),
('agg1-Ostrogorka.LRMN', 'CX600', '10.173.192.13'),
('agg1-5Mikrorayon.JLVD', 'CX600', '10.173.192.14'),
('agg1-Kotelnaya14.JLVD_Inozemcevo 8 marta', 'CX600', '10.173.192.15'),
('agg1-BashnyaSTS.BEZPS', 'CX600', '10.173.224.18'),
('agg1-BashnyaSTS.DMITR', 'CX600', '10.173.224.19'),
('agg1-BashnyaSTS.DONSK', 'CX600', '10.173.224.17'),
('acc1-8-Dzerzhinskogo199.STV', 'S3300', '10.173.228.17'),
('agg1-BashnyaSTS.NOVM', 'CX600', '10.173.224.32'),
('agg1-BashnyaSTS.NOVSL', 'CX600', '10.173.224.33'),
('agg1-KRTPC.BLGD', 'CX600', '10.173.224.20'),
('agg1-BashnyaSTS.KURSV', 'CX600', '10.173.252.10'),
('acc27-1-Essentukskaya29g.PYATK', 'S3300', '10.173.196.202'),
('acc27-3-Essentukskaya29g.PYATK', 'S3300', '10.173.196.204'),
('acc27-2-Essentukskaya29g.PYATG', 'S3300', '10.173.196.203'),
('acc16-13-50LetVLKSM16i.STV', 'S5300', '10.173.228.143'),
('agg1-BashnyaSTS.SVTG', 'CX600', '10.173.224.16'),
('agg1-KRTPC.IPTV', 'CX600', '10.173.224.15'),
('agg1-BashnyaSTS.DIVN', 'CX600', '10.173.224.25'),
('acc37-6-KMarksa53.STV', 'S3300', '10.173.228.153'),
('agg1-Stroymash.ZLNK', 'CX600', '10.173.188.2'),
('acc44-1-Mira319.STV', 'S3300', '10.173.228.125'),
('agg1-BashnyaSTS.NVAL', 'CX600', '10.173.244.1'),
('acc43-3-Paralellniy8.STV', 'S3300', '10.173.228.119'),
('acc51-1-Dovatortcev33a.STV', 'S3300', '10.173.228.144'),
('acc45-1-Pushkina9.STV', 'S3300', '10.173.228.118'),
('acc16-14-Dovatortcev59a.STV', 'S3300', '10.173.228.145'),
('acc37-5-KMarksa53.STV', 'S3300', '10.173.228.152'),
('acc37-4-KMarksa53.STV', 'S3300', '10.173.228.151'),
('acc16-15-Dovatortcev61a.STV', 'S3300', '10.173.228.146'),
('acc4-3-Kulon.MINVD', 'S3300', '10.173.213.17'),
('acc4-4-Kulon.MINVD', 'S3300', '10.173.213.18'),
('acc1-10-Dzerzhinskogo160.STV', 'S3300', '10.173.228.165'),
('acc1-11-Dzerzhinskogo158.STV', 'S3300', '10.173.228.166'),
('agg1-Fuchika2.PYATK', 'CX600', '10.173.192.9'),
('acc16-16-Dovatortcev63a.STV', 'S3300', '10.173.228.147'),
('acc56-1-Dovatortcev73a.STV', 'S3300', '10.173.228.173'),
('acc56-2-Dovatortcev73a.STV', 'S3300', '10.173.228.174'),
('acc57-1-Artema49a.STV', 'S3300', '10.173.228.175'),
('acc57-2-Artema49a.STV', 'S3300', '10.173.228.176'),
('isl-hub-office_Internationalnaya23.ESSTK', 'S3300', '10.67.38.8'),
('acc16-5-50LetVLKSM63b.STV', 'S3300', '10.173.228.168'),
('acc16-17-50LetVLKSM63b.STV', 'S3300', '10.173.228.167'),
('acc3-1-Podstancionnaya26.JLVD', 'S3300', '10.173.196.212'),
('acc53-1-Kulakova12v.STV', 'S3300', '10.173.228.169'),
('acc53-2-Kulakova12v.STV', 'S3300', '10.173.228.172'),
('acc52-1-Kulakova15b.STV', 'S3300', '10.173.228.148'),
('isl-hub-office_50letPionerii1.NFTK', 'S3300', '10.67.38.12'),
('isl-hub-office_Oktyabrskaya62.BUDVK', 'S3300', '10.67.38.14'),
('acc38-1-Grazhdanskaya2a.STV', 'S3300', '10.173.228.177'),
('acc38-2-Grazhdanskaya2a.STV', 'S3300', '10.173.228.178'),
('atn2-173-50letOktyabrya62.ZLNK', 'ATN910B', '10.172.240.173'),
('atn2-174-Georgievskiy29.ZLNK', 'ATN910B', '10.172.240.174'),
('atn2-175-StaroeRuslo.ZLNK', 'ATN910B', '10.172.240.175'),
('atn2-176-Kashparova132.ZLNK', 'ATN910B', '10.172.240.176'),
('atn2-177-Groznenskij3.ZLNK', 'ATN910B', '10.172.240.177'),
('atn2-178-Mira11.ZLNK', 'ATN910B', '10.172.240.178'),
('atn2-179-60letOktyabrya35.ZLNK', 'ATN910B', '10.172.240.179'),
('atn2-152-Solnechniy10.LRMN', 'ATN910B', '10.172.240.152'),
('atn2-153-Pyatigorskaya17.LRMN', 'ATN910B', '10.172.240.153'),
('atn2-154-Lermontova2.LRMN', 'ATN910B', '10.172.240.154'),
('atn2-155-Promishlennaya20.LRMN', 'ATN910B', '10.172.240.155'),
('atn2-68-Kalinina62.BUDVK', 'ATN910B', '10.172.240.68'),
('atn2-69-Partizanskaya20.BUDVK', 'ATN910B', '10.172.240.69'),
('atn2-70-VoenniyGorodok.BUDVK', 'ATN910B', '10.172.240.70'),
('atn2-73-Kochybeya80.BUDVK', 'ATN910B', '10.172.240.73'),
('atn2-71-8mikrorayon18.BUDVK', 'ATN910B', '10.172.240.71'),
('atn2-62-StolbSouthWest.BUDVK', 'ATN910B', '10.172.240.62'),
('atn2-63-ZDorozhnaya.BUDVK', 'ATN910B', '10.172.240.63'),
('atn2-64-Tamponazhniy3.BUDVK', 'ATN910B', '10.172.240.64'),
('atn2-67-Ujnaya26.BUDVK', 'ATN910B', '10.172.240.67'),
('atn2-65-6mikrorayon3.BUDVK', 'ATN910B', '10.172.240.65'),
('atn2-66-ZavodPlastmass.BUDVK', 'ATN910B', '10.172.240.66'),
('atn2-61-Shkolnaya56.BUDVK', 'ATN910B', '10.172.240.61'),
('atn2-75-Polyuschenko139.BUDVK', 'ATN910B', '10.172.240.75'),
('atn2-76-Revolucii147.BUDVK', 'ATN910B', '10.172.240.76'),
('atn2-107-Bashnya.GEORG', 'ATN910B', '10.172.240.107'),
('atn2-106-Batakskaya15.GEORG', 'ATN910B', '10.172.240.106'),
('atn2-108-Mineralovodskiy.GEORG', 'ATN910B', '10.172.240.108'),
('atn2-110-Gagarina60.GEORG', 'ATN910B', '10.172.240.110'),
('atn2-112-Vorovskogo1.GEORG', 'ATN910B', '10.172.240.112'),
('atn2-111-Gagarina1.GEORG', 'ATN910B', '10.172.240.111'),
('atn2-113-Pyatigorskaya2a.GEORG', 'ATN910B', '10.172.240.113'),
('atn2-109-Oktyabrskaya151.GEORG', 'ATN910B', '10.172.240.109'),
('atn2-115-Filatova13.GEORG', 'ATN910B', '10.172.240.115'),
('atn2-114-Krasnoarmejskaya11.GEORG', 'ATN910B', '10.172.240.114'),
('atn2-116-Ermolova35.GEORG', 'ATN910B', '10.172.240.116'),
('atn2-169-DomKylturi.NVPV', 'ATN910B', '10.172.240.169'),
('atn2-168-Shossejnaya5.NVPN', 'ATN910B', '10.172.240.168'),
('atn2-172-KvartalB.NVPV', 'ATN910B', '10.172.240.172'),
('atn2-170-BashnyaMTS.NVPV', 'ATN910B', '10.172.240.170'),
('atn2-171-VodonapornayaBashnya.NVPV', 'ATN910B', '10.172.240.171'),
('atn2-164-Transportnaya8.NFTK', 'ATN910B', '10.172.240.164'),
('atn2-160-Shosseynaya32.NFTK', 'ATN910B', '10.172.240.160'),
('atn2-165-Nasosnaya10.NFTK', 'ATN910B', '10.172.240.165'),
('atn2-161-Rabochaya8.NFTK', 'ATN910B', '10.172.240.161'),
('atn2-163-Shosseynaya18.NFTK', 'ATN910B', '10.172.240.163'),
('atn2-166-LeninaStart.NFTK', 'ATN910B', '10.172.240.166'),
('atn2-162-Vostochnaya15.NFTK', 'ATN910B', '10.172.240.162'),
('atn2-150-Centr.KRSK', 'ATN910B', '10.172.240.150'),
('atn2-149-Merkurij.KRSK', 'ATN910B', '10.172.240.149'),
('atn2-151-Neptun.KRSK', 'ATN910B', '10.172.240.151'),
('atn2-204-AgrofirmaPobeda.SVTG', 'ATN910B', '10.173.28.204'),
('atn2-205-Pushkina12.SVTG', 'ATN910B', '10.173.28.205'),
('atn2-206-Svetlaya1.SVTG', 'ATN910B', '10.173.28.206'),
('atn2-207-Trudovaya16.SVTG', 'ATN910B', '10.173.28.207'),
('atn2-208-Vystavochnaya.SVTG', 'ATN910B', '10.173.28.208'),
('atn2-165-Kollektivnaya1.MIKHL', 'ATN910B', '10.173.28.165'),
('atn2-170-Gagarina227.MIKHL', 'ATN910B', '10.173.28.170'),
('atn2-171-Pushkina45.MIKHL', 'ATN910B', '10.173.28.171'),
('atn2-172-Lenina167_2.MIKHL', 'ATN910B', '10.173.28.172'),
('atn2-173-Rostovskiy2_5.MIKHL', 'ATN910B', '10.173.28.173'),
('atn2-174-Kuleshina1.MIKHL', 'ATN910B', '10.173.28.174'),
('atn2-175-Tereshkovoi424.MIKHL', 'ATN910B', '10.173.28.175'),
('atn2-176-Traktovaya14.MIKHL', 'ATN910B', '10.173.28.176'),
('atn2-179-Svobodnaya3.NVAL', 'ATN910B', '10.173.28.179'),
('atn2-180-Severnaya2.NVAL', 'ATN910B', '10.173.28.180'),
('atn2-181-Gagarina382.NVAL', 'ATN910B', '10.173.28.181'),
('atn2-182-PrivokzalnyayaPloshad.NVAL', 'ATN910B', '10.173.28.182'),
('atn2-183-Zheleznodorozhnaya245.NVAL', 'ATN910B', '10.173.28.183'),
('atn2-77-Pushkinskaya113.BUDVK', 'ATN910B', '10.172.240.77'),
('atn2-180-Starodubskoe.ZLNK', 'ATN910B', '10.172.240.180'),
('atn2-82-Sadovaya19.ESSTK', 'ATN910B', '10.172.240.82'),
('atn2-83-Gagarina141.ESSTK', 'ATN910B', '10.172.240.83'),
('atn2-85-Pushkina124.ESSTK', 'ATN910B', '10.172.240.85'),
('atn2-87-KarlaMarksa1.ESSTK', 'ATN910B', '10.172.240.87'),
('atn2-92-BeliyYgol.ESSTK', 'ATN910B', '10.172.240.92'),
('atn2-93-Vokzalnaya37.ESSTK', 'ATN910B', '10.172.240.93'),
('atn2-96-Pyatigorskaya46.ESSTK', 'ATN910B', '10.172.240.96'),
('atn2-97-Razumovskogo5.ESSTK', 'ATN910B', '10.172.240.97'),
('atn2-98-Oktyabrskaya464.ESSTK', 'ATN910B', '10.172.240.98'),
('atn2-99-Moskovskaya41.ESSTK', 'ATN910B', '10.172.240.99'),
('atn2-100-Shosseinaya11.ESSTK', 'ATN910B', '10.172.240.100'),
('atn2-101-Avtotest.ESSTK', 'ATN910B', '10.172.240.101'),
('atn2-102-Partizanskaya4.ESSTK', 'ATN910B', '10.172.240.102'),
('atn2-103-Pavlova16.ESSTK', 'ATN910B', '10.172.240.103'),
('atn2-104-EsstntukskayaVisokaya.ESSTK', 'ATN910B', '10.172.240.104'),
('atn2-105-Vokzalnaya16.ESSTK', 'ATN910B', '10.172.240.105'),
('atn2-78-Kislovodskaya.ESSTK', 'ATN910B', '10.172.240.78'),
('atn2-127-Inozemcevo_US.JLVD', 'ATN910B', '10.172.240.127'),
('atn2-128-Pionerskaya73.JLVD', 'ATN910B', '10.172.240.128'),
('atn2-129-TCMashuk.JLVD', 'ATN910B', '10.172.240.129'),
('atn2-132-Sedlogorskaya155.KSLV', 'ATN910B', '10.172.240.132'),
('atn2-133-Engelsa23.KSLV', 'ATN910B', '10.172.240.133'),
('atn2-134-Agrokompaniya.KSLV', 'ATN910B', '10.172.240.134'),
('atn2-137-Lenina28.KSLV', 'ATN910B', '10.172.240.137'),
('atn2-1-Parkovaya13.CHRKS', 'ATN910B', '10.173.8.1'),
('atn2-2-Lenina147.CHRKS', 'ATN910B', '10.173.8.2'),
('atn2-3-Lenina53.CHRKS', 'ATN910B', '10.173.8.3'),
('atn2-4-Souzniy17.CHRKS', 'ATN910B', '10.173.8.4'),
('atn2-5-Kavkazskaya19.CHRKS', 'ATN910B', '10.173.8.5'),
('atn2-6-Stavropolskaya119.CHRKS', 'ATN910B', '10.173.8.6'),
('atn2-7-Pervomayskaya48.CHRKS', 'ATN910B', '10.173.8.7'),
('atn2-8-Oktyabrskaya26.CHRKS', 'ATN910B', '10.173.8.8'),
('atn2-9-Partizanskaya113.CHRKS', 'ATN910B', '10.173.8.9'),
('atn2-10-Svobody62.CHRKS', 'ATN910B', '10.173.8.10'),
('atn2-11-Kochubeya28.CHRKS', 'ATN910B', '10.173.8.11'),
('atn2-12-Kirova21.CHRKS', 'ATN910B', '10.173.8.12'),
('atn2-13-Furmanova157.CHRKS', 'ATN910B', '10.173.8.13'),
('atn2-16-Lermontova162.CHRKS', 'ATN910B', '10.173.8.16'),
('atn2-17-Kosmonavtov57.CHRKS', 'ATN910B', '10.173.8.17'),
('atn2-18-Oktyabrskaya335.CHRKS', 'ATN910B', '10.173.8.18'),
('atn2-20-Proletarskiy1.CHRKS', 'ATN910B', '10.173.8.20'),
('atn2-21-Dimidenko157.CHRKS', 'ATN910B', '10.173.8.21'),
('atn2-22-Vishka_RRS1.CHRKS', 'ATN910B', '10.173.8.22'),
('atn2-23-Podgornaya9.CHRKS', 'ATN910B', '10.173.8.23'),
('atn2-24-Lineiniy29.CHRKS', 'ATN910B', '10.173.8.24'),
('acc2-5-Pervomayskaya12.KSLV', 'S5300', '10.173.185.21'),
('atn2-131-Pyatigorskaya4.KSLV', 'ATN910B', '10.172.240.131'),
('atn2-135-Kominterna10.KSLV', 'ATN910B', '10.172.240.135'),
('atn2-136-Volodarskogo12.KSLV', 'ATN910B', '10.172.240.136'),
('atn2-138-Zelenogorskaya.KSLV', 'ATN910B', '10.172.240.138'),
('atn2-139-Cheluskincev5.KSLV', 'ATN910B', '10.172.240.139'),
('atn2-140-Ostrovskogo.KSLV', 'ATN910B', '10.172.240.140'),
('atn2-141-Rakitnaya.KSLV', 'ATN910B', '10.172.240.141'),
('atn2-142-Lermontova36.KSLV', 'ATN910B', '10.172.240.142'),
('atn2-143-Katihina155.KSLV', 'ATN910B', '10.172.240.143'),
('atn2-144-Kytyzova127.KSLV', 'ATN910B', '10.172.240.144'),
('atn2-72-Mendeleeva7-1.BUDVK', 'ATN910B', '10.172.240.72'),
('atn2-74-1mikrorayon.BUDVK', 'ATN910B', '10.172.240.74'),
('atn2-193-Revoluconnaya57a.NVM', 'ATN910B', '10.173.28.193'),
('atn2-194-Lunacharskogo149.NVM', 'ATN910B', '10.173.28.194'),
('atn2-195-Mayakovskogo20.NVM', 'ATN910B', '10.173.28.195'),
('atn2-196-3Internacionalnaya9.NVM', 'ATN910B', '10.173.28.196'),
('atn2-197-Gromovoy.NVM', 'ATN910B', '10.173.28.197'),
('atn2-198-Zkosmodemyanskoy1.NVM', 'ATN910B', '10.173.28.198'),
('atn2-199-Mira24.NVM', 'ATN910B', '10.173.28.199'),
('atn2-200-Kombinatskaya1.NVM', 'ATN910B', '10.173.28.200'),
('atn2-201-Vokzalnaya3MTS.NVM', 'ATN910B', '10.173.28.201'),
('atn2-86-Musirojigatelniy.ESSTK', 'ATN910B', '10.172.240.86'),
('atn2-88-VerhniyRinok.ESSTK', 'ATN910B', '10.172.240.88'),
('atn2-89-Pushkina22.ESSTK', 'ATN910B', '10.172.240.89'),
('atn2-90-BashnyaVK.ESSTK', 'ATN910B', '10.172.240.90'),
('atn2-91-AKoroleva3.ESSTK', 'ATN910B', '10.172.240.91'),
('atn2-94-Pyatigorskaya118.ESSTK', 'ATN910B', '10.172.240.94'),
('atn2-95-Kapelnaya2.ESSTK', 'ATN910B', '10.172.240.95'),
('atn2-123-Kavkaz.JLVD', 'ATN910B', '10.172.240.123'),
('atn2-124-DK_Chaykovskogo1.JLVD', 'ATN910B', '10.172.240.124'),
('atn2-125-Lenina2A.JLVD', 'ATN910B', '10.172.240.125'),
('atn2-182-Kislovodskaya41.MINVD', 'ATN910B', '10.172.240.182'),
('atn2-191-Kotelnaya.MINVD', 'ATN910B', '10.172.240.191'),
('acc52-2-Kulakova9b.STV', 'S3300', '10.173.228.149'),
('acc2-7-Progressa73.PYATK', 'S5300', '10.173.196.222'),
('atn2-79-Oktyabrskaya339.ESSTK', 'ATN910B', '10.172.240.79'),
('atn2-81-Shmidta74.ESSTK', 'ATN910B', '10.172.240.81'),
('atn2-148-Dobrovolskogo.IPTV', 'ATN910B', '10.173.28.148'),
('atn2-149-Pervomaiskaya.IPTV', 'ATN910B', '10.173.28.149'),
('atn2-150-Energetikov8.IPTV', 'ATN910B', '10.173.28.150'),
('atn2-151-Sverdlova113.IPTV', 'ATN910B', '10.173.28.151'),
('atn2-152-Lesnaya28.IPTV', 'ATN910B', '10.173.28.152'),
('atn2-153-Gagarina.IPTV', 'ATN910B', '10.173.28.153'),
('atn2-154-Gagarina7_Elevator.IPTV', 'ATN910B', '10.173.28.154'),
('atn2-155-Gagarina106b.IPTV', 'ATN910B', '10.173.28.155'),
('atn2-117-Tronina.GEORG', 'ATN910B', '10.172.240.117'),
('atn2-118-NZL_Lenina.GEORG', 'ATN910B', '10.172.240.118'),
('atn2-119-NZL_Sovetskaya215.GEORG', 'ATN910B', '10.172.240.119'),
('atn2-120-NZL_VNS.GEORG', 'ATN910B', '10.172.240.120'),
('atn2-121-Lisogorskaya.GEORG', 'ATN910B', '10.172.240.121'),
('atn2-141-Svoboda249.BLGD', 'ATN910B', '10.173.28.141'),
('atn2-142-Zavokzalnaya33.BLGD', 'ATN910B', '10.173.28.142'),
('atn2-143-Chapaeva76.BLGD', 'ATN910B', '10.173.28.143'),
('atn2-211-Suhaya-Buivala.SVTG', 'ATN910B', '10.173.28.211'),
('atn2-209-Aleksandriy.SVTG', 'ATN910B', '10.173.28.209'),
('atn2-210-Gofickoe.SVTG', 'ATN910B', '10.173.28.210'),
('atn2-213-Burlackoe.SVTG', 'ATN910B', '10.173.28.213'),
('atn2-212-Donskaya_balka.SVTG', 'ATN910B', '10.173.28.212'),
('atn2-30-Pirogova22.PYATK', 'ATN910B', '10.172.240.30'),
('atn2-34-Mira3.PYATK', 'ATN910B', '10.172.240.34'),
('atn2-35-Kraynego3a.PYATK', 'ATN910B', '10.172.240.35'),
('atn2-31-KuchuriAvto.PYATK', 'ATN910B', '10.172.240.31'),
('atn2-32-Pastyhova25.PYATK', 'ATN910B', '10.172.240.32'),
('atn2-41-Kozlova30.PYATK', 'ATN910B', '10.172.240.41'),
('atn2-21-Ermolova14.PYATK', 'ATN910B', '10.172.240.21'),
('atn2-22-Ludkevicha9.PYATK', 'ATN910B', '10.172.240.22'),
('atn2-43-Admiralskogo4.PYATK', 'ATN910B', '10.172.240.43'),
('atn2-139-Lermontova70.BLGD', 'ATN910B', '10.173.28.139'),
('atn2-140-Pervomaiskaya36.BLGD', 'ATN910B', '10.173.28.140'),
('atn2-218-Petropavlovskoe.SVTG', 'ATN910B', '10.173.28.218'),
('atn2-215-Sotnikovskoe.SVTG', 'ATN910B', '10.173.28.215'),
('atn2-219-Arzgir_KRTPC.SVTG', 'ATN910B', '10.173.28.219'),
('atn2-214-Spasskoe.SVTG', 'ATN910B', '10.173.28.214'),
('atn2-217-Chkalovskii.SVTG', 'ATN910B', '10.173.28.217'),
('atn2-216-Iskra.SVTG', 'ATN910B', '10.173.28.216'),
('atn2-183-50LetOkyabrya.MINVD', 'ATN910B', '10.172.240.183'),
('atn2-184-Sovetskaya128.MINVD', 'ATN910B', '10.172.240.184'),
('atn2-136-Blinova94.ALKS', 'ATN910B', '10.173.28.136'),
('atn2-161-Promishlennaya104a.ISOBIL', 'ATN910B', '10.173.28.161'),
('atn2-167-Sniiskh.MIKHL', 'ATN910B', '10.173.28.167'),
('atn2-168-Lenina1.MIKHL', 'ATN910B', '10.173.28.168'),
('atn2-169-Voikova553.MIKHL', 'ATN910B', '10.173.28.169'),
('atn2-177-Rabochaya10.MIKHL', 'ATN910B', '10.173.28.177'),
('atn2-145-Orlovka.KRSK', 'ATN910B', '10.172.240.145'),
('atn2-146-Gornozavodskoe.KRSK', 'ATN910B', '10.172.240.146'),
('atn2-147-SovetskayaKRTPC.KRSK', 'ATN910B', '10.172.240.147'),
('atn2-148-Rostovanovskoe.KRSK', 'ATN910B', '10.172.240.148'),
('atn2-181-Pushkina.MINVD', 'ATN910B', '10.172.240.181'),
('atn2-186-Moskovskaya29.MINVD', 'ATN910B', '10.172.240.186'),
('atn2-188-Mostovaya187.MINVD', 'ATN910B', '10.172.240.188'),
('atn2-189-Kooperativnij25.MINVD', 'ATN910B', '10.172.240.189'),
('atn2-190-Dachnaya10.MINVD', 'ATN910B', '10.172.240.190'),
('acc29-2-Cherkesskoe1.PYATK', 'S3300', '10.173.196.205'),
('atn2-156-BorcovRevol12.LVKM', 'ATN910B', '10.172.240.156'),
('atn2-157-Shossejnaya17.LVKM', 'ATN910B', '10.172.240.157'),
('atn2-158-Kalinina71.LVKM', 'ATN910B', '10.172.240.158'),
('atn2-159-KarlaMarksa74.LVKM', 'ATN910B', '10.172.240.159'),
('atn3-34-Oktyabrskaya184.STV', 'ATN910B', '10.173.28.34'),
('atn3-56-Tukhachevskogo11.STV', 'ATN910B', '10.173.28.56'),
('atn2-1-Kirova78.PYATK', 'ATN910B', '10.172.240.1'),
('atn2-37-Krasnoarmejskaya16.PYATK', 'ATN910B', '10.172.240.37'),
('atn2-36-Partizanskaya3.PYATK', 'ATN910B', '10.172.240.36'),
('atn2-46-Shosseinaya103.PYATK', 'ATN910B', '10.172.240.46'),
('atn2-48-Ubilejnaya77.PYATK', 'ATN910B', '10.172.240.48'),
('atn2-47-Kalinina357.PYATK', 'ATN910B', '10.172.240.47'),
('atn2-44-Pogat.PYATK', 'ATN910B', '10.172.240.44'),
('atn2-23-KislovodskoeShosse39.PYATK', 'ATN910B', '10.172.240.23'),
('atn2-3-Kirova47.PYATK', 'ATN910B', '10.172.240.3'),
('atn2-26-KotelnayaLenina.PYATK', 'ATN910B', '10.172.240.26'),
('atn2-25-Shosseinaya5.PYATK', 'ATN910B', '10.172.240.25'),
('atn2-29-Fabrichnaya7.PYATK', 'ATN910B', '10.172.240.29'),
('atn2-27-Bunimovicha7.PYATK', 'ATN910B', '10.172.240.27'),
('atn2-18-Pochtovaya56_1.PYATK', 'ATN910B', '10.172.240.18'),
('atn2-19-Pochtovaya56.PYATK', 'ATN910B', '10.172.240.19'),
('atn2-130-Shosseinaya76.PYATK', 'ATN910B', '10.172.240.130'),
('atn3-43-Apanasenkovskogo4.STV', 'ATN910B', '10.173.28.43'),
('acc48-1-Kotelnaya14.JLVD', 'S3300', '10.173.196.210'),
('atn2-52-Lugovaya9.PYATK', 'ATN910B', '10.172.240.52'),
('atn2-6-Kraynego53.PYATK', 'ATN910B', '10.172.240.6'),
('atn2-10-Tolyatti182.PYATK', 'ATN910B', '10.172.240.10'),
('atn2-5-Kozlova33.PYATK', 'ATN910B', '10.172.240.5'),
('atn2-45-Yablonevaya53.PYATK', 'ATN910B', '10.172.240.45'),
('atn2-56-Proletarka.PYATK', 'ATN910B', '10.172.240.56'),
('atn2-38-KarlaMarksa14.PYATK', 'ATN910B', '10.172.240.38'),
('atn3-46-Chekhova83.STV', 'ATN910B', '10.173.28.46'),
('atn3-26-Popova16.STV', 'ATN910B', '10.173.28.26'),
('atn3-47-Nadezhdensky9b.STV', 'ATN910B', '10.173.28.47'),
('atn3-82-50LetVLKSM3_6.STV', 'ATN910B', '10.173.28.82'),
('atn3-86-Dovatorcev43_2.STV', 'ATN910B', '10.173.28.86'),
('atn3-87-Frolenko22.STV', 'ATN910B', '10.173.28.87'),
('atn3-88-Osipenko70.STV', 'ATN910B', '10.173.28.88'),
('atn3-89-Michurina55.STV', 'ATN910B', '10.173.28.89'),
('atn3-90-8marta176.STV', 'ATN910B', '10.173.28.90'),
('atn3-91-Pushkina65.STV', 'ATN910B', '10.173.28.91'),
('atn3-103-Dzerzhinskogo105.STV', 'ATN910B', '10.173.28.103'),
('acc55-6-Tatarka_Ptichnik.STV', 'S5300', '10.173.228.181'),
('atn2-11-Tolyatti203.PYATK', 'ATN910B', '10.172.240.11'),
('atn2-12-Pestova36.PYATK', 'ATN910B', '10.172.240.12'),
('atn2-49-LesnayaPolyana.PYATK', 'ATN910B', '10.172.240.49'),
('atn2-50-Avtostar.PYATK', 'ATN910B', '10.172.240.50'),
('atn2-8-Gagarina39.PYATK', 'ATN910B', '10.172.240.8'),
('atn2-9-Fevralskaya54.PYATK', 'ATN910B', '10.172.240.9'),
('atn3-54-Dovatortsev36_MKS.STV', 'ATN910B', '10.173.28.54'),
('atn3-125-Lesnaya16.DEMINO', 'ATN910B', '10.173.28.125'),
('atn3-130-TatarkaKRTPC.STV', 'ATN910B', '10.173.28.130'),
('atn3-126-Yzhnii-Obhod-RTK.STV', 'ATN910B', '10.173.28.126'),
('atn3-29-Vavilova40.STV', 'ATN910B', '10.173.28.29'),
('atn3-30-Trunova71.STV', 'ATN910B', '10.173.28.30'),
('atn3-38-Dzerzhinskogo135.STV', 'ATN910B', '10.173.28.38'),
('atn3-2-Lomonosova25.STV', 'ATN910B', '10.173.28.2'),
('atn2-2-Kirova63.PYATK', 'ATN910B', '10.172.240.2'),
('atn2-192-5KM.MINVD', 'ATN910B', '10.172.240.192'),
('atn2-185-Stavropolskaya25.MINVD', 'ATN910B', '10.172.240.185'),
('atn3-1-Lenina406.STV', 'ATN910B', '10.173.28.1'),
('atn2-184-BashnyaSTS.NVAL', 'ATN910B', '10.173.28.184'),
('atn2-144-Trunovskiy-Donskoe.DONSK', 'ATN910B', '10.173.28.144'),
('atn2-58-Stankoterm.PYATK', 'ATN910B', '10.172.240.58'),
('atn2-146-Beshpagir.GRCH', 'ATN910B', '10.173.28.146'),
('atn2-4-Malygina5.PYATK', 'ATN910B', '10.172.240.4'),
('atn2-13-StrelkovojDivisii16.PYATK', 'ATN910B', '10.172.240.13'),
('atn2-14-Kalinina9.PYATK', 'ATN910B', '10.172.240.14'),
('atn2-40-Bulvarnaya46.PYATK', 'ATN910B', '10.172.240.40'),
('atn2-7-Kirova52.PYATK', 'ATN910B', '10.172.240.7'),
('atn2-39-Ukrainskaya48.PYATK', 'ATN910B', '10.172.240.39'),
('atn2-15-KRTPC.PYATK', 'ATN910B', '10.172.240.15'),
('atn2-24-SovetskojArmii127.PYATK', 'ATN910B', '10.172.240.24'),
('atn3-128-Yzhnii-Obhod-MF.STV', 'ATN910B', '10.173.28.128'),
('atn2-156-KRTPC.IPTV', 'ATN910B', '10.173.28.156'),
('acc1-3-Zavetnaya16.SVTG', 'S3300', '10.173.230.10'),
('acc1-4-Visotnaya1.SVTG', 'S3300', '10.173.230.11'),
('atn3-84-Lenina282.STV', 'ATN910B', '10.173.28.84'),
('acc1-9-Stroitelei.GEORG', 'S5300', '10.173.217.24'),
('atn3-24-Buinakskogo1.STV', 'ATN910B', '10.173.28.24'),
('atn3-23-Brusneva9.STV', 'ATN910B', '10.173.28.23'),
('atn3-27-Brusneva6_1.STV', 'ATN910B', '10.173.28.27'),
('atn3-33-Lubimaya20.STV', 'ATN910B', '10.173.28.33'),
('atn3-25-Lopirina.STV', 'ATN910B', '10.173.28.25'),
('atn3-28-Prigirodnaya70.STV', 'ATN910B', '10.173.28.28'),
('atn3-31-Prigorodnaya226.STV', 'ATN910B', '10.173.28.31'),
('atn3-32-Chapaeva4.STV', 'ATN910B', '10.173.28.32'),
('atn3-93-Kulakova24a.STV', 'ATN910B', '10.173.28.93'),
('atn3-18-Sheboldaeva2a.STV', 'ATN910B', '10.173.28.18'),
('atn3-17-Kulakova27_2.STV', 'ATN910B', '10.173.28.17'),
('atn3-21-Vasileva9.STV', 'ATN910B', '10.173.28.21'),
('atn3-19-Kulakova16_1.STV', 'ATN910B', '10.173.28.19'),
('atn3-22-Kulakova14d.STV', 'ATN910B', '10.173.28.22'),
('atn3-48-Krasnodarskiy20.STV', 'ATN910B', '10.173.28.48'),
('atn3-45-Leningradskiy24.STV', 'ATN910B', '10.173.28.45'),
('atn3-50-Komsomolskaya48.STV', 'ATN910B', '10.173.28.50'),
('atn3-49-Chehova13.STV', 'ATN910B', '10.173.28.49'),
('atn2-138-KRTPC.BLGD', 'ATN910B', '10.173.28.138'),
('atn3-115-Grazhdanskaya9.STV', 'ATN910B', '10.173.28.115'),
('atn3-116-Grazhdanskaya9.STV', 'ATN910B', '10.173.28.116'),
('atn2-137-Voitika-kot.ALKS', 'ATN910B', '10.173.28.137'),
('atn3-117-Cirk.STV', 'ATN910B', '10.173.28.117'),
('atn2-135-Pionerskaya96.ALKS', 'ATN910B', '10.173.28.135'),
('atn3-42-Zavokzalnaya7.STV', 'ATN910B', '10.173.28.42'),
('atn3-114-Kovaleva19.STV', 'ATN910B', '10.173.28.114'),
('atn3-40-Staromarievskoe16.STV', 'ATN910B', '10.173.28.40'),
('atn3-41-Staromarievskoe32.STV', 'ATN910B', '10.173.28.41'),
('atn3-44-Selekcionnaya9_1.STV', 'ATN910B', '10.173.28.44'),
('atn2-126-Proletarskaya1B.JLVD', 'ATN910B', '10.172.240.126'),
('atn3-127-Yzhnii-Obhod55-3.STV', 'ATN910B', '10.173.28.127'),
('atn3-94-Andreevskaya4.STV', 'ATN910B', '10.173.28.94'),
('atn3-61-45Parallel44.STV', 'ATN910B', '10.173.28.61'),
('atn3-59-Rodosskaya9.STV', 'ATN910B', '10.173.28.59'),
('atn3-60-Pirogova94.STV', 'ATN910B', '10.173.28.60'),
('atn2-166-Kotelnaya38-22.MIKHL', 'ATN910B', '10.173.28.166'),
('atn2-190-Gagarina95.NVM', 'ATN910B', '10.173.28.190'),
('atn3-118-Tukhachevskogo20_2.STV', 'ATN910B', '10.173.28.118'),
('atn2-167-KokBas.NFTK', 'ATN910B', '10.172.240.167'),
('atn2-164-Promishlennaya49a.ISOBIL', 'ATN910B', '10.173.28.164'),
('atn2-157-Dovatora329.ISOBIL', 'ATN910B', '10.173.28.157'),
('atn2-163-Stepnoy1.ISOBIL', 'ATN910B', '10.173.28.163'),
('atn2-158-Budennogo.ISOBIL', 'ATN910B', '10.173.28.158'),
('atn2-162-Sovhoznaya1.ISOBIL', 'ATN910B', '10.173.28.162'),
('atn2-159-Lenina9.ISOBIL', 'ATN910B', '10.173.28.159'),
('atn2-160-Zheleznodorozhnaya24.ISOBIL', 'ATN910B', '10.173.28.160'),
('atn3-14-Industrialnaya48.STV', 'ATN910B', '10.173.28.14'),
('atn3-15-ZapadnijObhod.STV', 'ATN910B', '10.173.28.15'),
('atn3-13-Lenina431.STV', 'ATN910B', '10.173.28.13'),
('atn2-53-Pervomaiskaya.PYATK', 'ATN910B', '10.172.240.53'),
('atn2-54-Nezhnova21.PYATK', 'ATN910B', '10.172.240.54'),
('atn2-55-Svobodi349.PYATK', 'ATN910B', '10.172.240.55'),
('atn3-12-Lenina466a.STV', 'ATN910B', '10.173.28.12'),
('atn2-57-Orlovskaya.PYATK', 'ATN910B', '10.172.240.57'),
('atn2-59-Kalinina346.PYATK', 'ATN910B', '10.172.240.59'),
('atn2-60-UtckiySpusk27.PYATK', 'ATN910B', '10.172.240.60'),
('atn3-57-Tuhachevskogo17.STV', 'ATN910B', '10.173.28.57'),
('atn3-85-ParkPobedi.STV', 'ATN910B', '10.173.28.85'),
('atn3-55-Stella.STV', 'ATN910B', '10.173.28.55'),
('atn2-196-Bunimovicha15.PYATK', 'ATN910B', '10.172.240.196'),
('atn3-92-Dovatortcev44.STV', 'ATN910B', '10.173.28.92'),
('atn3-53-LTolstogo117.STV', 'ATN910B', '10.173.28.53'),
('atn3-52-Abramovoy2.STV', 'ATN910B', '10.173.28.52'),
('atn3-58-Ashihina63.STV', 'ATN910B', '10.173.28.58'),
('atn3-51-Serova281a.STV', 'ATN910B', '10.173.28.51'),
('atn3-119-Biologicheskaya20.STV', 'ATN910B', '10.173.28.119'),
('atn3-3-Serova460.STV', 'ATN910B', '10.173.28.3'),
('atn3-65-50LetVLKSM85.STV', 'ATN910B', '10.173.28.65'),
('atn3-67-50LetVLKSM34_2.STV', 'ATN910B', '10.173.28.67'),
('atn3-68-50LetVLKSM22.STV', 'ATN910B', '10.173.28.68'),
('atn2-122-KomsomolecSerdi.GEORG', 'ATN910B', '10.172.240.122'),
('atn2-187-Zavodskaya3.MINVD', 'ATN910B', '10.172.240.187'),
('atn3-63-GrusheviyKRTPC.STV', 'ATN910B', '10.173.28.63'),
('atn3-62-Dzerzhinskogo149.STV', 'ATN910B', '10.173.28.62'),
('atn2-178-Rozhdestvenskaya.MIKHL', 'ATN910B', '10.173.28.178'),
('atn2-192-NizyaevaMF.NVM', 'ATN910B', '10.173.28.192'),
('atn2-189-Mendeeva14.NVM', 'ATN910B', '10.173.28.189'),
('atn2-188-Belova6.NVM', 'ATN910B', '10.173.28.188'),
('atn2-186-Apanasenko.NVM', 'ATN910B', '10.173.28.186'),
('atn2-187-Kazachya.NVM', 'ATN910B', '10.173.28.187'),
('atn2-191-GoraVoronya.NVM', 'ATN910B', '10.173.28.191'),
('atn2-185-Vodoprovodnaya360.NVM', 'ATN910B', '10.173.28.185'),
('atn2-202-Kian_vihkaRTK.NVM', 'ATN910B', '10.173.28.202'),
('atn2-203-Vodorazdel_elevator.NVM', 'ATN910B', '10.173.28.203'),
('atn3-97-Mira448.STV', 'ATN910B', '10.173.28.97'),
('atn2-19-Oktaybrskaya320.CHRKS', 'ATN910B', '10.173.8.19'),
('atn2-51-Drugar.PYATK', 'ATN910B', '10.172.240.51'),
('atn2-16-Bulvarnaya39.PYATK', 'ATN910B', '10.172.240.16'),
('atn2-145-Bashnya.GRCH', 'ATN910B', '10.173.28.145'),
('atn2-147-Krasnaya51.GRCH', 'ATN910B', '10.173.28.147'),
('atn2-197-BeshtayDispetcher.PYATK', 'ATN910B', '10.172.240.197'),
('atn3-6-Mira290.STV', 'ATN910B', '10.173.28.6'),
('atn3-5-Mira324.STV', 'ATN910B', '10.173.28.5'),
('atn3-9-Morozova10.STV', 'ATN910B', '10.173.28.9'),
('atn3-4-Dzerzhinskogo228.STV', 'ATN910B', '10.173.28.4'),
('atn2-198-Kalinina105.GEORG', 'ATN910B', '10.172.240.198'),
('atn3-104-Suvorova1.STV', 'ATN910B', '10.173.28.104'),
('atn3-108-Frunze_Gorkogo43.STV', 'ATN910B', '10.173.28.108'),
('atn3-102-KMarksa52.STV', 'ATN910B', '10.173.28.102'),
('atn2-193-Borodinovka.MINVD', 'ATN910B', '10.172.240.193'),
('atn2-15-Dovatora13a.CHRKS', 'ATN910B', '10.173.8.15'),
('atn3-37-KMarksa93.STV', 'ATN910B', '10.173.28.37'),
('atn3-36-Dzerzhinskogo114.STV', 'ATN910B', '10.173.28.36'),
('acc-37-12-Kazachiya30.STV', 'S3300', '10.173.228.185'),
('acc59-1-Tukhachevskogo28_7.STV', 'S3300', '10.173.228.183'),
('acc59-2-Rogozhnikova13.STV', 'S3300', '10.173.228.184'),
('acc3-1-Mariinskaya_Sadovaya1V.NVPV', 'S3300', '10.173.217.50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
