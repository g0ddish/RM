-- phpMyAdmin SQL Dump
-- version 4.0.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2015 at 10:02 AM
-- Server version: 5.5.41-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zadmin_rm`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(300) NOT NULL,
  `file_location` varchar(300) NOT NULL,
  `file_type` varchar(300) NOT NULL,
  `project_files` varchar(50) NOT NULL,
  `user_files` int(20) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `file_location`, `file_type`, `project_files`, `user_files`, `updated_at`, `created_at`) VALUES
(13, 'aD5fHuDf1fTqMRjxBMz8.log', 'uploads/100864964/project/aD5fHuDf1fTqMRjxBMz8.log', 'text/plain', '21', 0, '2015-02-17 01:16:51', '2015-02-17 01:16:51'),
(14, 'Yfpl6cqQCSaLNUZ9xc99.doc', 'uploads/100864964/project/Yfpl6cqQCSaLNUZ9xc99.doc', 'application/msword', '21', 0, '2015-02-17 01:21:57', '2015-02-17 01:21:57'),
(15, 'l7xJcVDtq8cohFpW7tvn.ppt', 'uploads/100864964/project/l7xJcVDtq8cohFpW7tvn.ppt', 'application/vnd.ms-powerpoint', '21', 0, '2015-02-17 01:28:40', '2015-02-17 01:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '{"admin":1,"users":1,"crudprojects":1,"requestprojects":1}', '2014-09-26 13:02:50', '2015-03-18 21:09:59'),
(2, 'Research Office Staff', '{"users":1,"crudprojects":1}', '2014-09-28 00:17:00', '2015-01-12 19:59:48'),
(4, 'Student', '{"users":1}', '2014-09-28 00:17:23', '2014-09-28 00:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(11) NOT NULL,
  `ProgramName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `ProgramName`) VALUES
(143, 'Academic Upgrading for Deaf and Hard-of-Hearing Adults (A738)'),
(145, 'Academic Upgrading Program (A737)'),
(147, 'Activation Co-ordinator/Gerontology (C102)'),
(148, 'Activation Co-ordinator/Gerontology Program (C102)'),
(149, 'American Sign Language â€“ English Interpreter Program (C110)'),
(151, 'American Sign Language and Deaf Studies Program (C114)'),
(153, 'Apprenticeship and Workplace Training'),
(154, 'Architectural Technician Program (T132)'),
(156, 'Architectural Technology Program (T109)'),
(158, 'Art and Design Foundation Program (G108)'),
(160, 'Assistant Cook (Extended Training) (ACET) Program (A105)'),
(162, 'Autism and Behavioural Science Program (Postgraduate) (C405)'),
(164, 'Bachelor of Applied Business Degree - Financial Services (B301)'),
(166, 'Bachelor of Applied Business Degree - Hospitality Operations Management (H301)'),
(168, 'Bachelor of Applied Technology - Construction Science and Management (T302)'),
(169, 'Bachelor of Early Childhood Leadership (Fast-Track) Program (C301)'),
(171, 'Bachelor of Early Childhood Leadership Program (C300)'),
(173, 'Bachelor of Science in Nursing (B.Sc.N.) (S118)'),
(175, 'Bachelor of Technology - Construction Management (T312)'),
(176, 'Baker / Patissier Apprentice Program'),
(178, 'Baking - Pre-employment Program (H108)'),
(180, 'Baking and Pastry Arts Management Program (H113)'),
(182, 'Behavioural Science Technology (Intensive) Program (C136)'),
(184, 'Behavioural Science Technology Program (C116)'),
(186, 'Building Renovation Technician Program (T110)'),
(188, 'Building Renovation Technology Program (T148)'),
(190, 'Business - Accounting Program (B103)'),
(192, 'Business â€“ Human Resources Program (B134)'),
(194, 'Business â€“ Marketing Program (B120)'),
(196, 'Business Administration - Accounting Program (B107)'),
(198, 'Business Administration - Accounting Program (with co-op) (B157)'),
(200, 'Business Administration - Finance (B130)'),
(201, 'Business Administration - Finance (with co-op) (B150)'),
(202, 'Business Administration - Finance Program (B130)'),
(203, 'Business Administration - Finance Program (with co-op) (B150)'),
(204, 'Business Administration - Human Resources Program (B144)'),
(206, 'Business Administration - Human Resources Program (with co-op) (B154)'),
(208, 'Business Administration â€“ International Business (B131)'),
(209, 'Business Administration â€“ International Business (with co-op) (B161)'),
(210, 'Business Administration â€“ International Business Program (B131)'),
(211, 'Business Administration â€“ International Business Program (with co-op) (B161)'),
(212, 'Business Administration - Marketing Program (B108)'),
(214, 'Business Administration - Marketing Program (with co-op) (B158)'),
(216, 'Business Administration â€“ Project Management (B126)'),
(217, 'Business Administration â€“ Project Management (with co-op) (B156)'),
(218, 'Business Administration â€“ Project Management Program (B126)'),
(219, 'Business Administration â€“ Project Management Program (with co-op) (B156)'),
(220, 'Business Administration â€“ Supply Chain Program (B121)'),
(221, 'Business Administration â€“ Supply Chain Program (with co-op) (B151)'),
(222, 'Business Administration Program (B145)'),
(224, 'Business Administration Program (with co-op) (B155)'),
(226, 'Career and Work Counsellor Program (C109)'),
(228, 'Career and Work Counsellor Program (Fast-track) (C138)'),
(230, 'Career and Work Counsellor Program (for Internationally Educated Professionals) (C129)'),
(232, 'Child and Youth Worker Program (C104)'),
(234, 'Child and Youth Worker Program (Fast-track) (C134)'),
(236, 'Civil Engineering Technology Program (T164)'),
(238, 'Clinical Methods in Orthotics/Prosthetics Program (Postgraduate) (S407)'),
(240, 'College Teacher Training (for Internationally Educated Professionals) - Postgraduate Program (R403)'),
(242, 'College Vocational Program (A101)'),
(244, 'Commercial Dance Studies Program (P103)'),
(246, 'Community Worker Program (C101)'),
(248, 'Computer Programmer Analyst Program (T127)'),
(250, 'Computer Systems Technician Program (T141)'),
(252, 'Computer Systems Technology Program (T147)'),
(254, 'Construction Craft Worker Foundations Program (A106)'),
(256, 'Construction Engineering Technician Program (T161)'),
(258, 'Construction Engineering Technology Program (T105)'),
(260, 'Construction Management (for Internationally Educated Professionals) Program (Postgraduate) (T403)'),
(262, 'Construction Trades Techniques Program (T126)'),
(264, 'Cook Apprentice'),
(266, 'Culinary Arts - Italian (Postgraduate) Program (H411)'),
(268, 'Culinary Management â€“ Nutrition Program (H119)'),
(270, 'Culinary Management (Integrated Learning) Program (H116)'),
(272, 'Culinary Management Program (H100)'),
(274, 'Culinary Skills - Chef Training (H112)'),
(275, 'Culinary Skills - Chef Training Program (H112)'),
(276, 'Dance Performance Preparation Program (P101)'),
(278, 'Dance Performance Studies Program (P102)'),
(280, 'Dental Assisting Program (Levels I and II) (S113)'),
(282, 'Dental Hygiene Program (S124) (previously S112)'),
(284, 'Dental Office Administration Program (S115)'),
(286, 'Dental Technology Program (S100)'),
(288, 'Denturism Program (S101)'),
(290, 'Design Management Program (Postgraduate) (G401)'),
(292, 'Digital Design - Advanced Digital Design Program (Postgraduate) (G402)'),
(294, 'Digital Design - Game Design Program (Postgraduate) (G405)'),
(296, 'Digital Media Marketing Program (Postgraduate) (B413)'),
(297, 'Early Childhood Assistant Program (C105)'),
(299, 'Early Childhood Education (Consecutive Diploma/Degree) Program (C118)'),
(301, 'Early Childhood Education (Fast-Track) Program (C130)'),
(302, 'Early Childhood Education Program (C100)'),
(304, 'Electrical Techniques Program (T167)'),
(306, 'Electromechanical Engineering Technician Program (T146)'),
(308, 'Electromechanical Engineering Technology â€“ Building Automation Program (T171)'),
(310, 'Electromechanical Engineering Technology â€“ Building Automation Program (T172) (Fast-Track)'),
(311, 'Electromechanical Technician Program (Distance Education) (T902)'),
(313, 'Electronics Technician Program (Distance Education) (T901)'),
(315, 'Family Practice Nursing (Postgraduate) Program (S415)'),
(317, 'Fashion Business Industry Program (F112)'),
(319, 'Fashion Management Program (F102)'),
(321, 'Fashion Techniques and Design Program (F113)'),
(323, 'Financial Planning Program (Postgraduate) (B407)'),
(325, 'Fitness and Health Promotion Program (S125) (previously S114)'),
(327, 'Food and Beverage Management Program (H102)'),
(329, 'Food and Nutrition Management Program (Postgraduate) (H402)'),
(331, 'Game Development Program (G109)'),
(333, 'Game Programming Program (T163)'),
(335, 'Gemmology Program (F105)'),
(337, 'General Arts and Science - English for Academic Purposes (for International Students) (R115)'),
(338, 'General Arts and Science - Introduction to Performing Arts Careers Program (R102)'),
(339, 'General Arts and Science (R104)'),
(340, 'General Arts and Science One-Year (Certificate) Program (R104)'),
(341, 'General Arts and Science Two-Year (Diploma) Program (R101)'),
(342, 'General Arts and Science Two-Year Diploma Program (R101)'),
(343, 'General Arts and Science: English for Academic Purposes for International Students (R115)'),
(344, 'Graphic Design Program (G102)'),
(346, 'Health Informatics Program (Postgraduate) (T402)'),
(348, 'Health Information Management Program (C139)'),
(350, 'Hearing Instrument Specialist Program (S117)'),
(352, 'Heating, Refrigeration and Air Conditioning Technician Program (T160)'),
(354, 'Heating, Refrigeration and Air Conditioning Technology Program (T162)'),
(356, 'Hospitality Services (Pre-Hospitality) Program (H101)'),
(357, 'Hospitality Services Program (H101)'),
(358, 'Hospitality, Tourism and Leisure Program (H110)'),
(359, 'Hotel Management Program (H103)'),
(361, 'Human Resources Management Program (Postgraduate) (B408)'),
(363, 'Information Systems Business Analysis Program (Postgraduate) (T405)'),
(365, 'Information Systems Business Analysis Program (Postgraduate) (with co-op) (T407)'),
(366, 'Interaction Design and Development (G103)'),
(367, 'Interaction Design and Development program (G103)'),
(368, 'Interdisciplinary Design Strategy (Postgraduate) at the Institute Without Boundaries (G414)'),
(370, 'Interior Design Technology (T170)'),
(372, 'International Business Management Program (Postgraduate) (B411)'),
(374, 'International Fashion Development and Management (Postgraduate) Program (F402)'),
(376, 'Interprofessional Acute Care Paediatric Cardiology Program (Postgraduate) (S416)'),
(378, 'Intervenor for Deafblind Persons Program (C108)'),
(380, 'Jewellery Arts Program (F114)'),
(382, 'Jewellery Essentials Program (F111)'),
(384, 'Jewellery Methods Program (F110)'),
(386, 'Marketing Management - Financial Services Program (Postgraduate) (B406)'),
(388, 'Mechanical Engineering Technology - Design Program (T121)'),
(390, 'Mechanical Technician - CNC and Precision Machining  (T173)'),
(391, 'Mechanical Technician - Tool and Die (T143)'),
(392, 'Mechanical Techniques (Fast-Track)  (T149)'),
(393, 'Northern Womenâ€™s Empowerment Support and Advocacy Education (R106)'),
(395, 'Office Administration Program - Medical (C115)'),
(397, 'Orthotic / Prosthetic Technician Program (S102)'),
(399, 'Personal Support Worker (PSW) Pathway to Practical Nursing Program (S119)'),
(401, 'Personal Support Worker (PSW) Program (C112)'),
(403, 'Plumbing Techniques Program (T165)'),
(405, 'Practical Nursing Program (PN) (S121)'),
(407, 'Pre-Business Program (A146)'),
(409, 'Pre-Community Services Program (A103)'),
(411, 'Pre-Health Science Program (A102)'),
(413, 'Programmable Logic Controllers (PLC) Technician Program (Distance Education) (T903)'),
(415, 'R.P.N. Bridge to B.Sc.N. Postgraduate Program (S122)'),
(417, 'Railway Conductor Program (T151)'),
(418, 'Registered Nurse - Critical Care Nursing Program (Online) (Postgraduate) (S422)'),
(420, 'Registered Nurse - Critical Care Nursing Program (Postgraduate) (S402)'),
(422, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Online Program (S424)'),
(424, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Program (S414)'),
(426, 'Registered Nurse - Perinatal Intensive Care Nursing Program (S404) (Postgraduate)'),
(428, 'Restorative Dental Hygiene (Postgraduate) Program (S400)'),
(430, 'Robotics Technician Program (Distance Education) (T948)'),
(432, 'Small Business Entrepreneurship Program (Postgraduate) (B410)'),
(434, 'Social Service Worker Program (C119)'),
(436, 'Social Service Worker Program (Fast Track) (C135)'),
(438, 'Special Events Planning Program (H121)'),
(440, 'Sport and Event Marketing Program (Postgraduate) (B400)'),
(442, 'Strategic Relationship Marketing Program (Postgraduate) (B409)'),
(444, 'Teaching English as a Second Language to Adults (TESL) Program (R400)'),
(446, 'Theatre Arts Program (P100)'),
(448, 'Transitions to Post-Secondary Education Program (A107)'),
(450, 'Wireless Networking Program (Postgraduate) (T411)'),
(703, 'Accounting'),
(704, 'Administrative Studies'),
(705, 'Advanced Management Graduate Diploma'),
(706, 'African Studies'),
(707, 'Anthropology'),
(708, 'Anthropology  â€“  Social'),
(709, 'Anti-Racist Research & Practice'),
(710, 'Applied Mathematics'),
(711, 'Art History'),
(712, 'Art History & Visual Culture'),
(713, 'Arts & Media Administration Graduate Diploma'),
(714, 'Asian Studies Graduate Diploma'),
(715, 'Athletic Therapy'),
(716, 'Biochemistry'),
(717, 'Biology'),
(719, 'Biomedical Science'),
(720, 'Biophysics'),
(721, 'Biotechnology'),
(722, 'Business & Society'),
(723, 'Business & Sustainability Graduate Diploma'),
(724, 'Business Administration'),
(726, 'Business Economics'),
(727, 'Canadian Business for Internationally Educated Professionals'),
(728, 'Canadian Studies'),
(729, 'Chemistry'),
(731, 'Cinema & Media Studies'),
(732, 'Civil Engineering'),
(733, 'Classical Studies & Classics'),
(734, 'Cognitive Science'),
(735, 'Communication & Culture'),
(736, 'Communication Studies'),
(737, 'Community Arts Practice'),
(738, 'Computational Math'),
(739, 'Computer Engineering'),
(741, 'Computer Science'),
(743, 'Computer Security'),
(744, 'Conference Interpreting'),
(745, 'Creative Writing'),
(746, 'Criminology'),
(747, 'Critical Disability Studies'),
(748, 'Culture & Expression'),
(749, 'Curatorial Studies in Visual Culture Graduate Diploma'),
(750, 'Dance'),
(752, 'Dance Science'),
(753, 'Dance Studies'),
(754, 'Democratic Administration Graduate Diploma'),
(755, 'Design'),
(757, 'Development Studies'),
(758, 'Digital Design'),
(759, 'Digital Media'),
(760, 'Disaster & Emergency Management'),
(762, 'Discipline of Teaching English as an International Language (D-TEIL)'),
(763, 'Drama Studies'),
(764, 'Early Childhood Education Graduate Diploma'),
(765, 'Earth & Atmospheric Science'),
(766, 'Earth & Space Science'),
(767, 'East Asian Studies'),
(768, 'Economics'),
(770, 'Ecosystem Management'),
(771, 'Education'),
(772, 'Education in Urban Environments Graduate Diploma'),
(773, 'Education â€“ Language, Culture & Teaching'),
(774, 'Electrical Engineering'),
(775, 'Emergency Management'),
(776, 'Engineering & International Development Studies'),
(777, 'English'),
(779, 'English & Professional Writing'),
(780, 'English Studies'),
(781, 'Environmental & Health Studies (Multidisciplinary Studies)'),
(782, 'Environmental Biology'),
(783, 'Environmental Science'),
(784, 'Environmental Studies'),
(786, 'Environmental/Sustainability Education Graduate Diploma'),
(787, 'Ã‰tudes franÃ§aises'),
(788, 'Ã‰tudes francophones'),
(789, 'European Studies'),
(790, 'Film'),
(792, 'Financial & Business Economics'),
(793, 'Financial Accountability'),
(794, 'Financial Engineering Graduate Diploma'),
(795, 'Financial Planning'),
(796, 'Fitness Assessment & Exercise Counselling'),
(797, 'French Studies / Ã‰tudes franÃ§aises'),
(798, 'General Interpreting Graduate Diploma'),
(799, 'Geographic Information Systems & Remote Sensing'),
(800, 'Geography'),
(802, 'Geography & Urban Studies'),
(803, 'Geomatics Engineering'),
(804, 'German & European Studies Graduate Diploma'),
(805, 'German Studies'),
(806, 'Global Health'),
(807, 'Global Political Studies'),
(808, 'Health'),
(809, 'Health & Society'),
(810, 'Health Industry Management Graduate Diploma'),
(811, 'Health Informatics'),
(812, 'Health Psychology Graduate Diploma'),
(813, 'Health Services Financial Management'),
(814, 'Health Studies'),
(815, 'Hebrew & Jewish Studies: Advanced'),
(816, 'Hellenic Studies'),
(817, 'History'),
(821, 'Human Resources Management'),
(822, 'Human Resources Management for Internationally Educated Professionals'),
(823, 'Human Rights & Equity Studies'),
(825, 'Humanities'),
(826, 'Indigenous Studies'),
(827, 'Individualized / Multidisciplinary Studies'),
(828, 'Information Systems & Technology'),
(829, 'Information Technology'),
(830, 'Information Technology Auditing & Assurance'),
(831, 'Information Technology for Internationally Educated Professionals'),
(832, 'Interdisciplinary Studies'),
(833, 'International & Security Studies Graduate Diploma'),
(834, 'International Business Administration'),
(835, 'International Development Studies'),
(836, 'International Project Management'),
(837, 'International Studies'),
(838, 'Investment Management'),
(839, 'Italian Culture'),
(840, 'Italian Studies'),
(841, 'Jewish Studies'),
(842, 'Jewish Studies Graduate Diploma'),
(843, 'Justice System Administration Graduate Diploma'),
(845, 'Kinesiology & Health Science'),
(846, 'Language & Literacy Education Graduate Diploma'),
(847, 'Language Proficiency'),
(848, 'Latin American & Caribbean Studies'),
(849, 'Latin American & Caribbean Studies Graduate Diploma'),
(850, 'Law'),
(851, 'Law & Social Thought / Droit et pensÃ©e sociale'),
(853, 'Law & Society'),
(854, 'Law (Osgoode Hall Law School)'),
(855, 'Law (Osgoode Professional Development)'),
(856, 'Linguistics'),
(857, 'Linguistics & Applied Linguistics'),
(858, 'Linguistics & Language Studies'),
(859, 'Logistics'),
(860, 'Management'),
(861, 'Marketing'),
(862, 'Mathematics'),
(863, 'Mathematics & Statistics'),
(864, 'Mathematics Education Graduate Diploma'),
(865, 'Mathematics for Commerce'),
(866, 'Mathematics for Education'),
(867, 'Mathematics for Teachers'),
(868, 'Mathematics: Applied & Industrial'),
(869, 'Mechanical Engineering'),
(870, 'Meteorology'),
(871, 'Multicultural & Indigenous Studies'),
(873, 'Music'),
(874, 'Neuroscience Graduate Diploma'),
(875, 'Non-Profit Management'),
(876, 'Nursing'),
(877, 'Nursing: Collaborative (York-Seneca-Georgian)'),
(878, 'Nursing: Post-RN for Internationally Educated Nurses'),
(879, 'Nursing: Second Entry'),
(880, 'Nursingâ€“Primary Health Care Nurse Practitioner (PHCNP)'),
(881, 'Nursingâ€“RN to MScN Alternate Admission'),
(882, 'Philosophy'),
(884, 'Physics & Astronomy'),
(886, 'Political Science'),
(888, 'Portuguese Studies'),
(889, 'Postsecondary Education: Community, Culture & Policy'),
(890, 'Practical Ethics'),
(891, 'Professional Ethics'),
(892, 'Professional Writing'),
(893, 'Psychology'),
(895, 'Public & International Affairs'),
(896, 'Public Administration'),
(897, 'Public Administration & Law'),
(898, 'Public Management Graduate Diploma'),
(899, 'Public Policy Analysis'),
(900, 'Public Policy, Administration & Law'),
(901, 'Real Estate'),
(902, 'Real Estate & Infrastructure Graduate Diploma'),
(903, 'RÃ©daction professionnelle'),
(904, 'Refugee & Migration Studies / Ã‰tudes sur la migration et sur les rÃ©fugiÃ©s'),
(905, 'Refugee & Migration Studies Graduate Diploma'),
(906, 'Rehabilitation Services'),
(907, 'Religious Studies'),
(908, 'Science & Technology Studies'),
(910, 'Sexuality Studies'),
(911, 'Sexuality Studies / Ã‰tudes sur la sexualitÃ©'),
(912, 'Social & Political Thought'),
(914, 'Social Science'),
(915, 'Social Sector Managment Graduate Diploma'),
(916, 'Social Work'),
(918, 'Socio-Legal Studies'),
(919, 'Sociology'),
(921, 'Software Engineering'),
(923, 'South Asian Studies'),
(924, 'Space Engineering'),
(925, 'Space Science'),
(926, 'Spanish'),
(927, 'Spanish (Hispanic Studies)'),
(928, 'Spanish-English Translation / TraducciÃ³n ingles-espanÃµl'),
(929, 'Sustainable Energy'),
(930, 'Teacher Education (Bachelor of Education)'),
(931, 'Teacher Education for French Immersion (Bachelor of Education)'),
(932, 'Teaching English to Speakers of Other Languages (TESOL)'),
(933, 'Technical & Professional Communication'),
(934, 'Theatre'),
(936, 'Theatre & Performance Studies'),
(937, 'Translation Studies'),
(939, 'Undecided Major'),
(940, 'United States Studies'),
(941, 'Urban Ecologies'),
(942, 'Urban Studies'),
(944, 'Urban Sustainability - York/Seneca Joint Program'),
(945, 'Value Theory & Applied Ethics Graduate Diploma'),
(946, 'Visual Arts'),
(947, 'Visual Arts & Art History'),
(948, 'Voice Teaching Graduate Diploma'),
(949, 'Work & Labour Studies');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(10) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `user_id`, `start_date`, `status_id`, `created_at`, `updated_at`) VALUES
(21, 'Android App for Ryerson', 'Students will be required to build an Android application and work on existing PHP API for access to data.', 2, '1428451200', 1, '2015-01-23 03:05:47', '2015-04-01 01:21:44'),
(22, 'Kitty Treat Dispenser', 'Meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow', 22, '1429056000', 1, '2015-01-23 03:20:10', '2015-04-01 01:17:12'),
(37, 'Web Design for Prestige Worldwide', 'advf', 2, '1432252800', 1, '2015-02-07 18:48:28', '2015-04-01 01:18:58'),
(38, 'Web Design for Prestige Worldwide', 'advf', 24, '1431129600', 1, '2015-02-07 18:48:28', '2015-04-01 01:19:27'),
(39, 'Android App for Ryerson', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', 2, '1440720000', 1, '2015-01-23 03:05:47', '2015-04-01 01:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `project_skills`
--

CREATE TABLE IF NOT EXISTS `project_skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) NOT NULL,
  `skill_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `project_skills`
--

INSERT INTO `project_skills` (`id`, `project_id`, `skill_id`) VALUES
(21, 20, 4),
(22, 20, 1),
(23, 20, 3),
(24, 21, 3),
(25, 21, 1),
(26, 22, 3),
(27, 22, 4),
(28, 24, 4),
(29, 25, 4),
(30, 26, 4),
(31, 27, 3),
(32, 27, 4),
(33, 28, 3),
(34, 28, 1),
(36, 30, 9),
(37, 23, 4),
(38, 31, 4),
(39, 31, 1),
(40, 31, 3),
(41, 31, 2),
(42, 32, 4),
(43, 32, 1),
(44, 32, 3),
(45, 32, 2),
(46, 33, 4),
(47, 33, 1),
(48, 33, 3),
(49, 33, 2),
(50, 34, 4),
(51, 37, 1),
(52, 37, 10),
(53, 37, 9),
(54, 37, 11);

-- --------------------------------------------------------

--
-- Table structure for table `project_user`
--

CREATE TABLE IF NOT EXISTS `project_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `project_user`
--

INSERT INTO `project_user` (`id`, `project_id`, `user_id`, `status`) VALUES
(7, 21, 22, 2),
(8, 21, 33, 2),
(9, 22, 34, 0),
(10, 38, 34, 0),
(11, 21, 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `popularity` int(10) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `popularity`, `updated_at`, `created_at`) VALUES
(1, 'PHP', 0, '', ''),
(2, 'C#', 0, '', ''),
(3, 'Java', 0, '', ''),
(4, 'AutoCAD', 0, '', ''),
(5, 'C++', 0, '2015-02-01 23:22:37', '2015-02-01 23:22:37'),
(6, 'HTML', 0, '2015-02-03 16:01:26', '2015-02-03 16:01:26'),
(7, 'CSS', 0, '2015-02-03 16:01:27', '2015-02-03 16:01:27'),
(8, 'Javascript', 0, '2015-02-03 16:01:27', '2015-02-03 16:01:27'),
(9, 'Swift', 0, '2015-02-04 19:45:25', '2015-02-04 19:45:25'),
(10, 'Objective-C', 0, '2015-02-07 18:48:28', '2015-02-07 18:48:28'),
(11, 'Android', 0, '2015-02-07 18:49:22', '2015-02-07 18:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(4) NOT NULL DEFAULT '0',
  `banned` tinyint(4) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(7, 2, '::1', 0, 0, 0, NULL, NULL, NULL),
(8, 22, '::1', 0, 0, 0, NULL, NULL, NULL),
(9, 2, '70.26.54.58', 0, 0, 0, NULL, NULL, NULL),
(10, 2, '198.96.85.111', 0, 0, 0, NULL, NULL, NULL),
(11, 2, '70.29.36.185', 0, 0, 0, NULL, NULL, NULL),
(12, 24, '198.96.85.111', 0, 0, 0, NULL, NULL, NULL),
(13, 24, '173.32.215.105', 0, 0, 0, NULL, NULL, NULL),
(14, 24, '24.114.67.122', 0, 0, 0, NULL, NULL, NULL),
(15, 24, '99.238.26.178', 0, 0, 0, NULL, NULL, NULL),
(16, 2, '70.26.53.173', 0, 0, 0, NULL, NULL, NULL),
(17, 25, '173.33.195.50', 0, 0, 0, NULL, NULL, NULL),
(18, 26, '173.33.195.50', 0, 0, 0, NULL, NULL, NULL),
(19, 34, '173.33.195.50', 0, 0, 0, NULL, NULL, NULL),
(20, 33, '70.26.53.173', 0, 0, 0, NULL, NULL, NULL),
(21, 2, '70.26.58.77', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `experience` text COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(4) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courses` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_id`, `email`, `avatar`, `password`, `summary`, `experience`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `courses`, `created_at`, `updated_at`) VALUES
(2, '100864964', 'alex@solutionblender.ca', 'uploads\\100864964\\wRB2nOXCNnqZp4gUkYGp.jpg', '$2y$10$xNvk8acZ4bHUYldOKtdiQ.I.BAo4NQ63ligl4OrtiF0lYpdKz1lJS', '<p><strong>alex@solutionblender.ca</strong></p>\r\n\r\n<p><strong>Objective</strong></p>\r\n\r\n<p>To secure a summer position where I can utilize my strong computer skills as I work to complete my post-secondary education at George Brown College, preferably in the web and mobile field.</p>\r\n\r\n<p><strong>Education</strong></p>\r\n\r\n<p>George Brown College &ndash; 2 of 3 years complete towards an Advance Programmer Analyst Diploma</p>\r\n\r\n<p>Charlottetown Rural High School &ndash; Grade 12 Academic &ndash; Graduated July 2011.&nbsp;&nbsp;</p>\r\n\r\n<p><strong>Programming Competency</strong></p>\r\n\r\n<ul>\r\n	<li>Familiar with Terminal/DOS, Git, Linux flavors, &amp; VPS administration.</li>\r\n	<li>PHP, Composer, Laravel, PHPFuel &amp; Phalcon.</li>\r\n	<li>HTML, CSS, JS, jQuery &amp; played with AngularJS</li>\r\n	<li>C#, ASP &amp; WCF</li>\r\n	<li>Java/Android &amp; PhoneGap</li>\r\n</ul>\r\n\r\n<p><strong>Accomplishments</strong></p>\r\n\r\n<ul>\r\n	<li>Represented Prince Edward Island on the Men&rsquo;s Fencing Team at the Canada Winter Games in Whitehorse, 2006.</li>\r\n	<li>Class 5 Drivers License (Standard and Automatic Transmission) and Defensive Driving Course.</li>\r\n	<li>Attained the rank of Flight Sergeant with 60 Confederation Squadron, Royal Canadian Air Cadets.</li>\r\n	<li>Kiwanis Club Award for Community Service PE (2007).</li>\r\n	<li>Lieutenant Governor Student Aide de Camp Award PE(2007).</li>\r\n	<li>Sherwood Parkdale Minor Soccer League PE(Ages 6-15).</li>\r\n	<li>Attended UPEI courses Information Technology 111D and Student Video Game Programming (2009).</li>\r\n	<li>Strong computer literacy skills.</li>\r\n</ul>\r\n\r\n<p><strong>References</strong> :&nbsp; Available upon request</p>\r\n', '<p><strong>Work Experience</strong></p>\r\n\r\n<p><strong>Canadian Food Inspection Agency (CFIA)</strong>: Inspection Assistant&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sep 2012 &ndash; Dec 2012</strong></p>\r\n\r\n<ul>\r\n	<li>Collecting soil samples from various potato fields around Prince Edward Island.</li>\r\n	<li>Filling in forms/documentation related to the samples.</li>\r\n	<li>Loading and transporting samples from fields to local CFIA offices.</li>\r\n	<li>Transporting samples from local offices to the CFIA labs in Charlottetown, PEI for testing.</li>\r\n	<li>Security cleared to &lsquo;Reliability&rsquo; status level by the Federal Government.</li>\r\n</ul>\r\n\r\n<p><strong>Murphy&rsquo;s Pharmacy (Charlottetown)</strong>:&nbsp; Cashier / Merchandiser&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Nov. 2010 - Sep 2012</strong></p>\r\n\r\n<ul>\r\n	<li>Processed cash, debit and credit transactions.</li>\r\n	<li>Dealt effectively with customers&rsquo; questions and concerns.</li>\r\n	<li>Maintained clean working environment.</li>\r\n	<li>Stocking, facing, organizing, and cleaning shelves and aisles.</li>\r\n	<li>Building in-store displays.</li>\r\n	<li>Providing technical support &lsquo;as needed&rsquo;&nbsp; for cash registers and other computer equipment</li>\r\n</ul>\r\n\r\n<p><strong>Catherine Parkman Law Office</strong>: Office Assistant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Jun. 2009 - Aug. 2010</strong></p>\r\n\r\n<ul>\r\n	<li>File and organize information</li>\r\n	<li>Run errands to banks (deposits), law firms, court house and registry office</li>\r\n	<li>Data entry as needed</li>\r\n	<li>IT support as required</li>\r\n	<li>Operate office equipment such as scanners, copiers and fax machines</li>\r\n	<li>Familiar with MS Office suite of applications</li>\r\n	<li>Worked to support other office staff&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>Shoppers Drug Mart (Charlottetown) </strong>Merchandiser<strong>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mar. 2009 - Apr. 2009</strong></p>\r\n\r\n<ul>\r\n	<li>Short term contract setting up new store (Queen Street Store). Working with a team we were responsible for setting up displays, stocking shelves and other duties as assigned by the Team Lead in order to have the store ready for the Grand Opening.</li>\r\n</ul>\r\n', NULL, 1, NULL, NULL, '2015-04-01 13:25:34', '$2y$10$UacgSK5ovua0zNo6ULFI5.nAN52DKPQcgF1ELqyDIFL1I/FEoR5hy', NULL, 'Alex', 'Hughes', '{"dfv":"fd"}', '2014-09-25 21:34:32', '2015-04-01 17:25:34'),
(22, '100000001', 'ahughes12@georgebrown.ca', 'uploads\\2iAxGGXrcMSGQGZEpcV1.jpg', '$2y$10$WlNixc3kb24Z618DvesSdeczdJ0Ha1ZUQRwhl.14g8BegJPaAaPhi', '', '', NULL, 1, NULL, NULL, '2015-02-16 22:36:46', '$2y$10$GLcl2Rt3hzP6b0X0VfmO3ewIw2cMTWiQubqbKR91XOr2WvRyb7.BW', NULL, 'Chairman', 'Meow', '', '2015-01-23 08:12:27', '2015-02-17 03:36:46'),
(23, '000000000', 's2834932@gmail.com', '', '$2y$10$zLlT/uP2uJmdup4v.U3nie4WRr3e5c9YMl3HWxmCgUk6tWvV.4bhW', '', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2015-03-18 23:03:13', '2015-03-18 23:03:13'),
(24, '100854239', 'uriasan1@gmail.com', 'uploads/100854239/JMSdqqKPVgj6KVD4JKWd.jpg', '$2y$10$jZ4Vcr7TiGNeYk2/Hx109eX/L5oj44wHdYZhT7Ov5ueFIMW1LcD1C', '<p>This is Summary</p>\r\n', '<p>This is experience</p>\r\n', NULL, 1, NULL, NULL, '2015-04-01 13:57:26', '$2y$10$D9bXg4e17HqmCkwp36vJJOxsBehwlWtaB8/aqQ4FHOpXEDic5PDQ6', NULL, 'Stan', 'Pak', '[]', '2015-03-19 01:22:14', '2015-04-01 17:57:26'),
(25, '100821410', 'joe_schmoe42@hotmail.com', 'uploads/100821410/h10brOOw2onoekOTKLB3.jpg', '$2y$10$mWEiHV4BILFOAeXtBrHKR.sdrqOTx/XfmGUfyFp58yqaFjZUxAs4m', '', '', NULL, 1, NULL, NULL, '2015-04-01 02:23:56', '$2y$10$/zD0q8VcIGmxncoq9UMNF.YCsAjfw81UM3vSyTs3rN7ntxv9uJ3Qa', NULL, 'James', 'Smith', '{"asdsd":"","":""}', '2015-04-01 05:21:43', '2015-04-01 06:23:56'),
(26, '100821419', 'keegancaradonna@hotmail.com', 'uploads/100821419/qd7LCCXUNWBeIaBt7u7g.jpg', '$2y$10$VjYoXsGM4/nkth1mQcrxCOT7HVMCJWVlhMdRU.QkTIjsxI1uPewcC', '', '', NULL, 1, NULL, NULL, '2015-04-01 01:31:34', '$2y$10$TURHBI4FDpXRDArOnv0rve3V8tgDjX79n6ICEiUIvF4v7KbRythVC', NULL, 'Richard', 'Norris', '{"":""}', '2015-04-01 05:30:50', '2015-04-01 05:32:37'),
(33, '222222222', 'alex.hughes000@gmail.com', 'uploads/222222222/GlTmgEzOP1AAhoCJ9aPI.jpg', '$2y$10$B7wmatWYAN/v.jtJvB9C7edbVkwnAPbT4S9mVjSL0OMlVrmpgz.Ly', '', '', NULL, 1, NULL, NULL, '2015-04-01 02:18:45', '$2y$10$r05SFlDJX4WZVJ68M45ECOoZrqx6xG7xQnNXQ9rW7HAXegfGpJM06', NULL, 'Alex', 'Hughes', '', '2015-04-01 05:38:18', '2015-04-01 06:19:12'),
(34, '100821415', 'keegancaradonna@gmail.com', '', '$2y$10$4saIT42hF4Mo6L1421yI1.QLowpMmfztri9bgbcTNYHvJWwxT79v2', '', '', NULL, 1, NULL, NULL, '2015-04-01 01:39:30', '$2y$10$NtdcUh4dAhyDdfIi1iVX6u28rhNSfBfJNUbrPSdKimE7Y/xOvd/cu', NULL, 'John', 'Matthews', '', '2015-04-01 05:39:01', '2015-04-01 05:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(10, 2, 1),
(11, 2, 4),
(35, 22, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users_programs`
--

CREATE TABLE IF NOT EXISTS `users_programs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `program_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users_programs`
--

INSERT INTO `users_programs` (`id`, `user_id`, `program_id`) VALUES
(15, 22, 248),
(16, 24, 248),
(18, 2, 248),
(19, 25, 258),
(20, 26, 222),
(21, 34, 248),
(22, 33, 248);

-- --------------------------------------------------------

--
-- Table structure for table `users_skills`
--

CREATE TABLE IF NOT EXISTS `users_skills` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `skill_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users_skills`
--

INSERT INTO `users_skills` (`id`, `user_id`, `skill_id`) VALUES
(3, 9, 0),
(4, 9, 0),
(10, 2, 1),
(11, 2, 3),
(12, 24, 4),
(13, 24, 1),
(14, 24, 3),
(15, 2, 5),
(16, 2, 2),
(17, 2, 6),
(18, 2, 7),
(20, 2, 8),
(21, 25, 4),
(22, 34, 1),
(23, 34, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
