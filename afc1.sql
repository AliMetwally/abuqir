-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 07:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES cp1256 */;

--
-- Database: `afc1`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(2) NOT NULL,
  `project_name_ar` varchar(300) NOT NULL,
  `project_name_en` varchar(300) NOT NULL,
  `images` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name_ar`, `project_name_en`, `images`) VALUES
(1, '����� ����� ���� ������ �������� �������', 'Nitric & Ammonium Nitrate Plant Revamp ', 1),
(2, '����� ��� ����� ���� ������ �������', 'Bulk Blend Mixed Fertilizer Plant Revamp ', 0),
(3, '����� ����� ���� ����� �������', 'Demineralization Unit', 4),
(4, '����� ����� ���� ������� ���� ����� �������', 'Zero-Liquid Discharge (ZLD) Unit', 6),
(5, '����� ����� ���� ������ ����� ������ �������', 'Plastic Bags Making Project', 4),
(6, '����� ����� ���� ������ ��������� ����� ��� CAN', 'Methanol and Calcium Ammonium Nitrite (CAN) Plant', 3),
(7, '����� ����� ���� �����', 'Sea Water Desalination Project', 4);

-- --------------------------------------------------------

--
-- Table structure for table `projects_contents`
--

CREATE TABLE IF NOT EXISTS `projects_contents` (
  `project_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `content_ar` varchar(2000) NOT NULL,
  `content_en` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects_contents`
--

INSERT INTO `projects_contents` (`project_id`, `head_id`, `content_id`, `content_ar`, `content_en`) VALUES
(1, 1, 1, '�� �� �������� ������� ��� ���� �� ����� ��������� ������ ����� �������� �� ����� ������ ��� �� ������ �� ������� ������ �� ����� ������� ������ ������ ����� ����� ����� �� ����� ������� ��������ɡ ������� ������� �������� ��� �� ����� ��� ������ ��������� ������ ���� �������� ������ ������� ��� ��� ��� �� ���� ������� �� ����� ������ ���������� ����� ���� ������� ����� ��������.', 'In light of the current challenges, it was necessary to study the optimal exploitation of the ammonia surplus in the company plants, where other than exporting it, the alternative was to reduce the daily operation capacity, which will lead to increasing the cost of the production operations, After studying the various alternatives, it was chosen to revamp the nitric acid and nitrate plants to increase their production capacity, as it is considered one of the best available alternatives in terms of economic feasibility and in terms of achieving the best efficient and effective exploitation of the ammonia surplus. '),
(1, 2, 1, '���� ������ ���� �������� ����� ������� 500 �� ����.', 'Nitric Acid production unit with a production capacity of 500 tons per day.'),
(1, 2, 2, '���� ������ ����� ��������� ������� ����� ������� 600 �� ����.', 'Liquid Ammonium Nitrate production unit with a capacity of 600 tons daily.'),
(1, 2, 3, '����� ������ ���� ����� ����� ����� ������� 100 ��/���.', 'Medium Steam Boiler with a capacity of 100 tons / day.'),
(1, 2, 4, '��� ����� ����� 7500 �3/���� ���� ������� �� ������� ������ ������ �������� ������� ������� ����������� �� ���� �������.', 'Cooling Tower with a capacity of 7500 m3 / hour sufficient for the project, along with exploiting the surplus to cover the needs of the existing and future plants.'),
(1, 2, 5, '���� ������ ������ �������� ������ 12�������/���� �� ������� ������ ������ �������� ������� ������ ���������� �� ��������.', 'Electric Generating Unit for producing 12 MW, along with exploiting the surplus to cover the needs of the company''s future projects.'),
(1, 2, 6, '���� ������ ����� ��������� ������� ���� 300 ��.', 'Liquid Ammonium Nitrate Storage Unit for with a capacity of 300 tons.'),
(1, 2, 7, '���� ��������� �������� ������� ������� ��������� ����� ���� ����� �� ������� �������.', 'All the Utilities and facilities required for the production process as well as the connection lines with the existing units.'),
(1, 3, 1, '������� ����������� �������: 	133 ����� ����', '133 million Euros.'),
(1, 4, 1, '������ ������ �������:	28 ��� �� ����� ������� ����� 3 ���� 					������� ���������', '28 months from the date of contracting other than 3 months for operational testing.'),
(2, 1, 1, '���� ������� ��� ����� �������� ����� ������ �� ������� �������� �������� (��� �����) ��� ������ ������� �������� ������� �� ����� �������� ��� ���� ��������� ������� ������ ���� �������� �� ����� ��� ������ ������ ������� ������� �������.', 'The project aims at meeting the needs of the domestic market of high quality, water soluble mixed fertilizers (One Grain) in addition to producing Calcium Ammonium Nitrite to contribute to the realization of the horizontal and vertical agricultural expansion and reform plans.'),
(2, 1, 2, '��� ���� ������� ��� ��� ����� ������ ����� ���� �� ����� ��������� ��� ������� ��������� ���� �� ���� ����� ������ �� ���� ��������� ������� ������ ��� ����� ������� ����� ��� ������� ��������� �������� �������.', 'The project also aims at opening up new international markets, especially in the European countries such as Germany and Ireland, by exporting the surplus of the Calcium Ammonium Nitrite to the world market as well as invading the African markets by several composite fertilizers.'),
(3, 1, 1, '��� ����� �� ����� ���� ����� ������� ������� � ����� ���� ���� ������ ������� �� ����� ���� ���� ������ ������� ��� �������� ������� ����� �������� � ���� ���� ����� ����� ����� � ����� ������ ��������� ������� �������.', 'The project was launched and a new tank for the demineralized water was erected aiming at having a new Demineralization unit to meet the needs of the production plants due to the company''s expansions that involved establishing new plants and increasing the production capacity of the existing plants.'),
(4, 1, 1, '����� ������� ���� ����� ������� �� ���� ����� ���� ������ ������� ����� ����� ������� ����� ������ ���� ������� 650 �3 / ���� ���� ���� ���� ������ ��������� ��� �������� ����� 550 �3 / ����.', 'Reuse of industrial waste water through establishing an integrated Zero-Liquid Discharge (ZLD) Unit in Abu Qir Company with a design capacity of 650 m3/ hr, where the water recovered after treatment is 550 m3/hr.'),
(4, 2, 1, '���� ����� ����� ��������� ����������� ����� ������ �������.', 'Calcium and Magnesium Salts and Suspended Materials Discharging Unit.'),
(5, 1, 1, '����� ���� ������ ����� ��������� ����� ������� ��������� �������� �������� ������ ������ �������.', 'Establishing a factory to produce plastic bags to serve the operational activities and to package the final product.'),
(6, 1, 1, '�� ���� ������ ������ ������� ��������� ������� ������� ��� ����� ����� ������/ ��� ������ ������ ��� ���� ���� ������ ������� ��� ����� ���� ����� ���� ������ ������ ��������� ����� ��������� ������� ������ �������� �������� ������ ������� ������� ������� ��� ����� ���� ���� �������������� ��� ����� ��������� ���� ��� ����� ������ �� �������� ������������ɡ ��� ����� ������� �� ��� ������ ������� ������ ������ �� ����� ������� ����� �� ������� �� ���� ���� �� ������� ����� ��� 2.21 ���� ����� �� ������ ����� ��� ��� �� ���� ������ ��� ����� ����� ������ ��� �� ���� ��� ��� ������� ���� ������ ����� ����� ������ ���� �� 80% �� ��� �����.', 'Aiming at keeping up with the Egyptian economic reform program under the patronage of President Abd El-Fattah El-Sisi, Abu Qir Fertilizers Company has been keen to launch a new integrated complex for the production of Methanol and Calcium Ammonium Nitrite (CAN) in the industrial area of the new Alamein City, which is targeted to witness the establishment of the largest petrochemical complex where methanol is a primary raw material to several petrochemical industries, The project contributes to raising the value added of Egypt''s natural gas resources, which is expected to achieve a surplus by 2021 instead of exporting it as a raw material, which is beneficial for increasing the Egyptian resources, where Abu Qir Fertilizers Company is an Egyptian joint stock company with more than 80% of its capital owned by Public Entities.'),
(7, 1, 1, '����� ����� ������� ���� ����� �� ������ ������� �������� ��������� ������ �������ɡ ��� ��� ��� ������� �� ����� �� ����� ����� ������ ������ �������� ������ �� ������ ������� ������� ���������. ���� ���� ����� �� ������ ������ ����� ����� ����� ���� ������ �� ����� �������. ���� ����� ��� RO �� ������� ������ ������ ����� ��� ��������� ������ ����� ��������� ���� ������� �� ������ ������� (Brine) ����� ��� �� ��� �������� ���������� ��� ����� ���Soda ash.', 'To fulfill the company''s operational and future water needs, in addition to supporting future expansion plans, ABU QIR  studying the possibility of implementation of Desalination unit using the most advanced technology. '),
(2, 2, 1, ' ���� ����� ������ ���� ��� CAN �� ���� DAP/MAP �� ������ ������ ����� ������� ��� ��/���.', 'Granulation Unit for producing Calcium Ammonium Nitrite (CAN), DAP/MAP or NPK fertilizer with a capacity of 1000 tons /day.'),
(2, 2, 2, '����� ������ �������� �������� �������� ��� ����� ����� ������ �����.', 'Storage Units to store both finished products and raw materials.'),
(2, 2, 3, '���� ����� ����� ������� 1100 ��/���.', 'Bagging Unit with a capacity of 1100 tons / day.'),
(2, 2, 4, '�������� ��� ��������� �������� ������� �������.', 'Required offsite & Utilities units.'),
(2, 3, 1, '���� ������� ������� ������ (CAN) ����� ������� 1000 ��� �� ����.', 'Calcium Ammonium Nitrite (CAN).'),
(2, 3, 2, '�� ���� �����/����� ������ ��������� ����� 1000 ��� �� ����. ', 'Or Mono/ Di -Ammonium Phosphate (MAP/DAP).'),
(2, 3, 3, '��������� �������� �������� (��� �����) �������� ������ ����� 1000 �� ����', 'Or Mixed granulated NPK fertilizers (One Grain) with Different grades.'),
(2, 4, 1, '���� ������� ����������� ������� ������ 120 ����� ����.', 'The total expected project cost is 120 million Euro.'),
(2, 5, 1, '34 ��� �� ����� ������� ��� ����� ������� ���������.', '34 months from the date of contracting until the end of mechanical completion.'),
(3, 2, 1, '���� ������ ��������� ������ ����� 450 �3/���� �� ���� ����� ���� ����� (���� ���� ������ 225 �3/����) ���� ���� ���� ���� �� ������� ������� �������.', 'The design capacity of the unit is about 675 m3 /hr, through 3 production lines, the capacity of each is 225 m3 /hr, where 2 operating lines are running and the third is a reserve one.'),
(3, 3, 1, '������� ������������������:	4.5 ����� ���� � 5.5 ����� ���� ����.', '4.5 million Euros and 5.5 million Egyptian Pounds.'),
(3, 5, 1, '�� �������� �� ������� ��������� ������� �������� �� ����� 2017', 'The preliminary commission and commissioning were handled and the project was put in operation in August 2017.'),
(3, 4, 1, '���� Metito', 'Metito Company'),
(4, 1, 2, '������� ����� �� ������ ������.', 'Complying with the environmental laws.'),
(4, 1, 3, '����� 70 �� ���� ����� ����� ����� �����.', 'Producing 70 Tons Ammonium Nitrate as a by-product.'),
(4, 2, 2, '���� ����� �������� ������ �� 6 ���� �� �� ����� ����� ��� �������� ������� ����� Scrubber ������ �������� ��� ����� ���������.', 'Ammonia Removal Unit, which consists of 6 lines, each having 2 discharging units and a scrubber unit to convert ammonia to ammonium sulphate.'),
(4, 2, 3, '���� ������� ���� ���� �������.', 'Neutralization Unit to adjust the acidity.'),
(4, 2, 4, '���� ����� ������� Denitrification.', 'Denitrification Unit for discharging nitrates.'),
(4, 2, 5, '. ���� ������� Ultrafiltartion.', 'Ultra-Filtration (UF) Unit.'),
(4, 2, 6, '���� ������� ������ RO ���� ������� �������.', 'Reverse Osmosis (RO) Unit to adjust the soluble salts.'),
(4, 2, 7, '���� ��� ������ �� ��� Sludge.', 'Water Discharge from the Sludge Desalination Unit.'),
(4, 3, 1, '7,8 ����� ���� � 88 ����� ���� ����.', '7.8 million Euros and 88 million Egyptian pounds.'),
(4, 4, 1, '����� ��� ����� Bamag � Samcrete.', 'Bamag and Samcrete.'),
(4, 5, 1, '�� �������� �� ����� ��������� ����� ��� ������� ���������.', 'Erection activities have been completed and commissioning is going through.'),
(5, 2, 1, '���� ���� Blowing Film.', 'Three Blowing Film lines.'),
(5, 3, 1, '����� ��������� ������� 120 ��� ������ ��� �� ����� 40 ����� ������ �����.', '120 thousands bags per day which equivalent to 40 Million Plastic Bags / Annually.'),
(5, 4, 1, '������� �����������: 5,2 ����� ����.', '5.2 Million Euros.'),
(6, 2, 1, '���� ������� ��� ��� ����������� ������� ��������� �������� ��� ��� ��������� ������� ��� ����� ���� ������ �� ����� ��� ������ ����� �������� ��������ʡ ��� �� ������� ������� ������ �� ����� ���������� �� ������� ������� �������� ������� ������ ��� ��������� �� ���� ��� �������� ������� ������� ����� ������ �������� ������� ������� ��� ��� ����� ���� ������ ���� �� ������� ��� ����� ��� 2020 ���� ����� ������ ������� ��������� ����� ����������.', 'The objective of the project is to support the economic reform strategies as well as to support the facilities and services relevant to the development of the Suez Canal from the gas shipping stations for ships and containers, The current global trend is to reduce the gas emissions causing the global warming (greenhouses gases), and since methanol doesn''t produce any sulfur emissions sulfur, it thus expected that by 2020, all the various ships and containers will be using methanol.'),
(6, 3, 1, '���� ������ �������� ����� 400 ��� �� ����.', 'Ammonia production plant with a capacity of 400,000 tons / year.'),
(6, 3, 2, '���� ������ ���� �������� ����� 600 ��� �� ����.', 'Nitric Acid production plant with a capacity of 600 thousand tons / year.'),
(6, 3, 3, '���� ������ ���� ������� ������� ������ (CAN) ����� ����� �� ����.', 'Calcium Ammonium Nitrite (CAN) Plant with a capacity of one million tons / year.'),
(6, 3, 4, '���� ������ ��������� ����� ����� �� ����.', 'Methanol production plant with a capacity of 1 million tons / year.'),
(6, 3, 5, '������� ��������.', 'Utilities and facilities needed.'),
(6, 4, 1, '��������� ����� ������� ����� �� ����.', 'Methanol.'),
(6, 4, 2, '���� ������� ������� ������ (CAN) ����� ������� ����� �� ����.', 'Calcium Ammonium Nitrate (CAN).'),
(6, 4, 3, '���� ����� �������� ����� ������� 69 ��� �� ����.', 'Ammonia with a capacity of 69 thousand tons / year.'),
(6, 5, 1, ' �� ������ ����� ��� ������ ������� ������� �������� ��� ����� ������� 100 ���� ����� ������� ������� �������� ���������� ���� �������� �������� ������� �� ����� ������.', 'It is planned to establish this industrial complex at various stages on an area of 100 acres, including the area needed for future expansions, in the industrial area of Suez or Ain Sokhna.'),
(6, 6, 1, '���� ������� ����������� �������� ������� ������ 1.8 ����� �����.', 'The total expected project cost is 1.8 Billion Euro.'),
(6, 7, 1, '36 ��� ��� ����� �������.', '36 months after the tender settlement, where the project is expected to be put in operation by the end of 2022'),
(6, 8, 2, '���� ������ ������ ������� �������� ������ ��� ��������� �������� ��������', 'Local authorities were contacted to grant the necessary approvals for the project.'),
(6, 8, 3, ' �� ������� ��� ���� Nexant ������ ������ ������ ���������� ���������� �������.', 'Nexant Company was awarded to prepare the economic and marketing feasibility studies for the project.'),
(7, 2, 1, '���� ��� Water Intake �� �����.', 'Sea Water Intake Unit.'),
(7, 2, 2, '���� ���  Pre-treatment ����� �������.', 'Pre-Treatment Unit for recharge water.'),
(7, 2, 3, '���� ��� Desalination  ���� ������ �������� �� ������ �������.', 'Desalination Unit to separate the treated water from the salt water.'),
(7, 2, 4, '���� ��� Post Treatment ������ �������.', 'Post Water Treatment Unit.'),
(7, 3, 1, '2000 �3/����.', '2000 m3/ h.'),
(7, 4, 1, '������� ����������� �������� �������: 75 ����� �����.', '$75 million.'),
(7, 5, 1, '����� ����� �������: 2022 .', 'Commissioning: 2022'),
(7, 4, 2, '������� ����������� �������� ����� ������: 25 ����� �����.', '$25 million for the water intake.'),
(7, 6, 1, '����� �������� ������� �������� �������� �������.', 'Inside industrial area '),
(7, 7, 1, '�� ��� ������ ��� ����� ������� ���������� ������� �������� �� ��� ������ ������ ������� ������� ����� ��� ���� ������ ����� ������ ���������� ������.', 'Local project consultant (PMC) is being selected who will prepare the Invitation to Bid (ITB) and FEED Engineering.'),
(2, 1, 3, '��� �������� ��� ������� ��� ������ ��������� ����� ������� ������ �� 2400 ��/��� ��� 2600��/��� �� ������ ��� ������� ������ ������ ������ ������� ������� ��� ��������� �������� ����� 1000��/��� ���� ����� ������ ������ ������ ������(UAN)', 'This is in addition to raising the production capacity of the current Nitrate Plant from 2400 to 2600 tons/day in parallel with the production of 1000 tons/day of NPK and the surplus is used for increasing the capacity of liquid fertilizer UAN.'),
(5, 2, 2, '���� �����.', 'Two Printer lines.'),
(5, 2, 3, '���� ���� ����� �����. ', 'Three Cutting& Welding lines'),
(5, 5, 1, 'Rifenhauser Blown Film', 'Rifenhauser Blown Film'),
(5, 6, 1, '�� �������� �� ������� ��������� ������� �������� �� ������ 2019.', 'The preliminary commission and commissioning were handled and the project was put in operation in February 2019.');

-- --------------------------------------------------------

--
-- Table structure for table `projects_headers`
--

CREATE TABLE IF NOT EXISTS `projects_headers` (
  `project_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `head_name_ar` varchar(500) NOT NULL,
  `head_name_en` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects_headers`
--

INSERT INTO `projects_headers` (`project_id`, `head_id`, `head_name_ar`, `head_name_en`) VALUES
(1, 1, '���� �� �������', 'Project Purpose'),
(1, 2, '������ �������', 'Project Components'),
(1, 3, '������� ����������� �������', 'Investment Cost'),
(2, 1, '���� �� �������', 'Project Purpose'),
(2, 2, '����� �������', 'Project units'),
(2, 3, '������ �������', 'Project Products'),
(2, 4, '������� ����������� �������', 'Investment Cost'),
(2, 5, '������ ������ �������', 'Schedule'),
(3, 1, '����� �� �������', 'Project Purpose'),
(3, 2, '������ ��������� ������', 'Unit Capacity'),
(3, 3, '������� ����������� �������', 'Investment Cost'),
(4, 1, '����� �� �������', 'Project Purpose'),
(4, 2, '����� �������', 'Project units'),
(4, 3, '������� ����������� �������', 'Investment Cost'),
(5, 1, '����� �� �������', 'Project Purpose'),
(5, 2, '����� �������', 'Project units'),
(5, 3, '��������', 'Capacity'),
(5, 4, '������� �����������', 'Investment Cost'),
(6, 1, '���� �� �������', 'Project Purpose'),
(6, 2, '����� �������', 'Project Goals'),
(6, 3, '����� �������', 'Project Units'),
(6, 4, '������ �������', 'Project Products'),
(6, 5, '������ ������� �������', 'Project Location'),
(6, 6, '������� ����������� �������', 'Investment Cost'),
(6, 7, '������ ������ �������', 'Schedule'),
(6, 8, '������ ������ �������', 'Current Project Position'),
(7, 1, '���� �� �������', 'Project Purpose'),
(7, 2, '����� �������', 'Project units'),
(7, 4, '������� ����������� �������', 'Investment Cost'),
(7, 6, '������ ������� �������', 'Project Location'),
(7, 7, '������ ������ �������', 'Current Project Position'),
(1, 4, '������ ������ �������', 'Schedule'),
(3, 4, '������ �������', 'Contractor'),
(3, 5, '������ ������ �������', 'Schedule'),
(4, 4, '������ �������', 'Main Contractor'),
(4, 5, '������ ������ �������', 'Project Schedule'),
(5, 5, '������ �������', 'Contractor'),
(5, 6, '������ ������ �������', 'Schedule'),
(7, 5, '������ ������ �������', 'Schedule'),
(7, 3, '����� ���������', 'Capacity');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `projects_contents`
--
ALTER TABLE `projects_contents`
  ADD PRIMARY KEY (`project_id`,`head_id`,`content_id`);

--
-- Indexes for table `projects_headers`
--
ALTER TABLE `projects_headers`
  ADD PRIMARY KEY (`project_id`,`head_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
