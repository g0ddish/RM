-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2015 at 08:35 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bay`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`id` int(11) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `file_location` varchar(300) NOT NULL,
  `file_type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '{"admin":1,"users":1,"crudprojects":1}', '2014-09-26 13:02:50', '2015-01-21 22:32:27'),
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
  `ProgramName` varchar(100) NOT NULL,
  `S_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=954 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `ProgramName`, `S_ID`) VALUES
(143, 'Academic Upgrading for Deaf and Hard-of-Hearing Adults (A738)', 2),
(144, 'Academic Upgrading for Deaf and Hard-of-Hearing Adults (A738)', 2),
(145, 'Academic Upgrading Program (A737)', 2),
(146, 'Academic Upgrading Program (A737)', 2),
(147, 'Activation Co-ordinator/Gerontology (C102)', 2),
(148, 'Activation Co-ordinator/Gerontology Program (C102)', 2),
(149, 'American Sign Language â€“ English Interpreter Program (C110)', 2),
(150, 'American Sign Language â€“ English Interpreter Program (C110)', 2),
(151, 'American Sign Language and Deaf Studies Program (C114)', 2),
(152, 'American Sign Language and Deaf Studies Program (C114)', 2),
(153, 'Apprenticeship and Workplace Training', 2),
(154, 'Architectural Technician Program (T132)', 2),
(155, 'Architectural Technician Program (T132)', 2),
(156, 'Architectural Technology Program (T109)', 2),
(157, 'Architectural Technology Program (T109)', 2),
(158, 'Art and Design Foundation Program (G108)', 2),
(159, 'Art and Design Foundation Program (G108)', 2),
(160, 'Assistant Cook (Extended Training) (ACET) Program (A105)', 2),
(161, 'Assistant Cook (Extended Training) (ACET) Program (A105)', 2),
(162, 'Autism and Behavioural Science Program (Postgraduate) (C405)', 2),
(163, 'Autism and Behavioural Science Program (Postgraduate) (C405)', 2),
(164, 'Bachelor of Applied Business Degree - Financial Services (B301)', 2),
(165, 'Bachelor of Applied Business Degree - Financial Services (B301)', 2),
(166, 'Bachelor of Applied Business Degree - Hospitality Operations Management (H301)', 2),
(167, 'Bachelor of Applied Business Degree - Hospitality Operations Management (H301)', 2),
(168, 'Bachelor of Applied Technology - Construction Science and Management (T302)', 2),
(169, 'Bachelor of Early Childhood Leadership (Fast-Track) Program (C301)', 2),
(170, 'Bachelor of Early Childhood Leadership (Fast-Track) Program (C301)', 2),
(171, 'Bachelor of Early Childhood Leadership Program (C300)', 2),
(172, 'Bachelor of Early Childhood Leadership Program (C300)', 2),
(173, 'Bachelor of Science in Nursing (B.Sc.N.) (S118)', 2),
(174, 'Bachelor of Science in Nursing (B.Sc.N.) (S118)', 2),
(175, 'Bachelor of Technology - Construction Management (T312)', 2),
(176, 'Baker / Patissier Apprentice Program', 2),
(177, 'Baker / Patissier Apprentice Program', 2),
(178, 'Baking - Pre-employment Program (H108)', 2),
(179, 'Baking - Pre-employment Program (H108)', 2),
(180, 'Baking and Pastry Arts Management Program (H113)', 2),
(181, 'Baking and Pastry Arts Management Program (H113)', 2),
(182, 'Behavioural Science Technology (Intensive) Program (C136)', 2),
(183, 'Behavioural Science Technology (Intensive) Program (C136)', 2),
(184, 'Behavioural Science Technology Program (C116)', 2),
(185, 'Behavioural Science Technology Program (C116)', 2),
(186, 'Building Renovation Technician Program (T110)', 2),
(187, 'Building Renovation Technician Program (T110)', 2),
(188, 'Building Renovation Technology Program (T148)', 2),
(189, 'Building Renovation Technology Program (T148)', 2),
(190, 'Business - Accounting Program (B103)', 2),
(191, 'Business - Accounting Program (B103)', 2),
(192, 'Business â€“ Human Resources Program (B134)', 2),
(193, 'Business â€“ Human Resources Program (B134)', 2),
(194, 'Business â€“ Marketing Program (B120)', 2),
(195, 'Business â€“ Marketing Program (B120)', 2),
(196, 'Business Administration - Accounting Program (B107)', 2),
(197, 'Business Administration - Accounting Program (B107)', 2),
(198, 'Business Administration - Accounting Program (with co-op) (B157)', 2),
(199, 'Business Administration - Accounting Program (with co-op) (B157)', 2),
(200, 'Business Administration - Finance (B130)', 2),
(201, 'Business Administration - Finance (with co-op) (B150)', 2),
(202, 'Business Administration - Finance Program (B130)', 2),
(203, 'Business Administration - Finance Program (with co-op) (B150)', 2),
(204, 'Business Administration - Human Resources Program (B144)', 2),
(205, 'Business Administration - Human Resources Program (B144)', 2),
(206, 'Business Administration - Human Resources Program (with co-op) (B154)', 2),
(207, 'Business Administration - Human Resources Program (with co-op) (B154)', 2),
(208, 'Business Administration â€“ International Business (B131)', 2),
(209, 'Business Administration â€“ International Business (with co-op) (B161)', 2),
(210, 'Business Administration â€“ International Business Program (B131)', 2),
(211, 'Business Administration â€“ International Business Program (with co-op) (B161)', 2),
(212, 'Business Administration - Marketing Program (B108)', 2),
(213, 'Business Administration - Marketing Program (B108)', 2),
(214, 'Business Administration - Marketing Program (with co-op) (B158)', 2),
(215, 'Business Administration - Marketing Program (with co-op) (B158)', 2),
(216, 'Business Administration â€“ Project Management (B126)', 2),
(217, 'Business Administration â€“ Project Management (with co-op) (B156)', 2),
(218, 'Business Administration â€“ Project Management Program (B126)', 2),
(219, 'Business Administration â€“ Project Management Program (with co-op) (B156)', 2),
(220, 'Business Administration â€“ Supply Chain Program (B121)', 2),
(221, 'Business Administration â€“ Supply Chain Program (with co-op) (B151)', 2),
(222, 'Business Administration Program (B145)', 2),
(223, 'Business Administration Program (B145)', 2),
(224, 'Business Administration Program (with co-op) (B155)', 2),
(225, 'Business Administration Program (with co-op) (B155)', 2),
(226, 'Career and Work Counsellor Program (C109)', 2),
(227, 'Career and Work Counsellor Program (C109)', 2),
(228, 'Career and Work Counsellor Program (Fast-track) (C138)', 2),
(229, 'Career and Work Counsellor Program (Fast-track) (C138)', 2),
(230, 'Career and Work Counsellor Program (for Internationally Educated Professionals) (C129)', 2),
(231, 'Career and Work Counsellor Program (for Internationally Educated Professionals) (C129)', 2),
(232, 'Child and Youth Worker Program (C104)', 2),
(233, 'Child and Youth Worker Program (C104)', 2),
(234, 'Child and Youth Worker Program (Fast-track) (C134)', 2),
(235, 'Child and Youth Worker Program (Fast-track) (C134)', 2),
(236, 'Civil Engineering Technology Program (T164)', 2),
(237, 'Civil Engineering Technology Program (T164)', 2),
(238, 'Clinical Methods in Orthotics/Prosthetics Program (Postgraduate) (S407)', 2),
(239, 'Clinical Methods in Orthotics/Prosthetics Program (Postgraduate) (S407)', 2),
(240, 'College Teacher Training (for Internationally Educated Professionals) - Postgraduate Program (R403)', 2),
(241, 'College Teacher Training (for Internationally Educated Professionals) - Postgraduate Program (R403)', 2),
(242, 'College Vocational Program (A101)', 2),
(243, 'College Vocational Program (A101)', 2),
(244, 'Commercial Dance Studies Program (P103)', 2),
(245, 'Commercial Dance Studies Program (P103)', 2),
(246, 'Community Worker Program (C101)', 2),
(247, 'Community Worker Program (C101)', 2),
(248, 'Computer Programmer Analyst Program (T127)', 2),
(249, 'Computer Programmer Analyst Program (T127)', 2),
(250, 'Computer Systems Technician Program (T141)', 2),
(251, 'Computer Systems Technician Program (T141)', 2),
(252, 'Computer Systems Technology Program (T147)', 2),
(253, 'Computer Systems Technology Program (T147)', 2),
(254, 'Construction Craft Worker Foundations Program (A106)', 2),
(255, 'Construction Craft Worker Foundations Program (A106)', 2),
(256, 'Construction Engineering Technician Program (T161)', 2),
(257, 'Construction Engineering Technician Program (T161)', 2),
(258, 'Construction Engineering Technology Program (T105)', 2),
(259, 'Construction Engineering Technology Program (T105)', 2),
(260, 'Construction Management (for Internationally Educated Professionals) Program (Postgraduate) (T403)', 2),
(261, 'Construction Management (for Internationally Educated Professionals) Program (Postgraduate) (T403)', 2),
(262, 'Construction Trades Techniques Program (T126)', 2),
(263, 'Construction Trades Techniques Program (T126)', 2),
(264, 'Cook Apprentice', 2),
(265, 'Cook Apprentice', 2),
(266, 'Culinary Arts - Italian (Postgraduate) Program (H411)', 2),
(267, 'Culinary Arts - Italian (Postgraduate) Program (H411)', 2),
(268, 'Culinary Management â€“ Nutrition Program (H119)', 2),
(269, 'Culinary Management â€“ Nutrition Program (H119)', 2),
(270, 'Culinary Management (Integrated Learning) Program (H116)', 2),
(271, 'Culinary Management (Integrated Learning) Program (H116)', 2),
(272, 'Culinary Management Program (H100)', 2),
(273, 'Culinary Management Program (H100)', 2),
(274, 'Culinary Skills - Chef Training (H112)', 2),
(275, 'Culinary Skills - Chef Training Program (H112)', 2),
(276, 'Dance Performance Preparation Program (P101)', 2),
(277, 'Dance Performance Preparation Program (P101)', 2),
(278, 'Dance Performance Studies Program (P102)', 2),
(279, 'Dance Performance Studies Program (P102)', 2),
(280, 'Dental Assisting Program (Levels I and II) (S113)', 2),
(281, 'Dental Assisting Program (Levels I and II) (S113)', 2),
(282, 'Dental Hygiene Program (S124) (previously S112)', 2),
(283, 'Dental Hygiene Program (S124) (previously S112)', 2),
(284, 'Dental Office Administration Program (S115)', 2),
(285, 'Dental Office Administration Program (S115)', 2),
(286, 'Dental Technology Program (S100)', 2),
(287, 'Dental Technology Program (S100)', 2),
(288, 'Denturism Program (S101)', 2),
(289, 'Denturism Program (S101)', 2),
(290, 'Design Management Program (Postgraduate) (G401)', 2),
(291, 'Design Management Program (Postgraduate) (G401)', 2),
(292, 'Digital Design - Advanced Digital Design Program (Postgraduate) (G402)', 2),
(293, 'Digital Design - Advanced Digital Design Program (Postgraduate) (G402)', 2),
(294, 'Digital Design - Game Design Program (Postgraduate) (G405)', 2),
(295, 'Digital Design - Game Design Program (Postgraduate) (G405)', 2),
(296, 'Digital Media Marketing Program (Postgraduate) (B413)', 2),
(297, 'Early Childhood Assistant Program (C105)', 2),
(298, 'Early Childhood Assistant Program (C105)', 2),
(299, 'Early Childhood Education (Consecutive Diploma/Degree) Program (C118)', 2),
(300, 'Early Childhood Education (Consecutive Diploma/Degree) Program (C118)', 2),
(301, 'Early Childhood Education (Fast-Track) Program (C130)', 2),
(302, 'Early Childhood Education Program (C100)', 2),
(303, 'Early Childhood Education Program (C100)', 2),
(304, 'Electrical Techniques Program (T167)', 2),
(305, 'Electrical Techniques Program (T167)', 2),
(306, 'Electromechanical Engineering Technician Program (T146)', 2),
(307, 'Electromechanical Engineering Technician Program (T146)', 2),
(308, 'Electromechanical Engineering Technology â€“ Building Automation Program (T171)', 2),
(309, 'Electromechanical Engineering Technology â€“ Building Automation Program (T171)', 2),
(310, 'Electromechanical Engineering Technology â€“ Building Automation Program (T172) (Fast-Track)', 2),
(311, 'Electromechanical Technician Program (Distance Education) (T902)', 2),
(312, 'Electromechanical Technician Program (Distance Education) (T902)', 2),
(313, 'Electronics Technician Program (Distance Education) (T901)', 2),
(314, 'Electronics Technician Program (Distance Education) (T901)', 2),
(315, 'Family Practice Nursing (Postgraduate) Program (S415)', 2),
(316, 'Family Practice Nursing (Postgraduate) Program (S415)', 2),
(317, 'Fashion Business Industry Program (F112)', 2),
(318, 'Fashion Business Industry Program (F112)', 2),
(319, 'Fashion Management Program (F102)', 2),
(320, 'Fashion Management Program (F102)', 2),
(321, 'Fashion Techniques and Design Program (F113)', 2),
(322, 'Fashion Techniques and Design Program (F113)', 2),
(323, 'Financial Planning Program (Postgraduate) (B407)', 2),
(324, 'Financial Planning Program (Postgraduate) (B407)', 2),
(325, 'Fitness and Health Promotion Program (S125) (previously S114)', 2),
(326, 'Fitness and Health Promotion Program (S125) (previously S114)', 2),
(327, 'Food and Beverage Management Program (H102)', 2),
(328, 'Food and Beverage Management Program (H102)', 2),
(329, 'Food and Nutrition Management Program (Postgraduate) (H402)', 2),
(330, 'Food and Nutrition Management Program (Postgraduate) (H402)', 2),
(331, 'Game Development Program (G109)', 2),
(332, 'Game Development Program (G109)', 2),
(333, 'Game Programming Program (T163)', 2),
(334, 'Game Programming Program (T163)', 2),
(335, 'Gemmology Program (F105)', 2),
(336, 'Gemmology Program (F105)', 2),
(337, 'General Arts and Science - English for Academic Purposes (for International Students) (R115)', 2),
(338, 'General Arts and Science - Introduction to Performing Arts Careers Program (R102)', 2),
(339, 'General Arts and Science (R104)', 2),
(340, 'General Arts and Science One-Year (Certificate) Program (R104)', 2),
(341, 'General Arts and Science Two-Year (Diploma) Program (R101)', 2),
(342, 'General Arts and Science Two-Year Diploma Program (R101)', 2),
(343, 'General Arts and Science: English for Academic Purposes for International Students (R115)', 2),
(344, 'Graphic Design Program (G102)', 2),
(345, 'Graphic Design Program (G102)', 2),
(346, 'Health Informatics Program (Postgraduate) (T402)', 2),
(347, 'Health Informatics Program (Postgraduate) (T402)', 2),
(348, 'Health Information Management Program (C139)', 2),
(349, 'Health Information Management Program (C139)', 2),
(350, 'Hearing Instrument Specialist Program (S117)', 2),
(351, 'Hearing Instrument Specialist Program (S117)', 2),
(352, 'Heating, Refrigeration and Air Conditioning Technician Program (T160)', 2),
(353, 'Heating, Refrigeration and Air Conditioning Technician Program (T160)', 2),
(354, 'Heating, Refrigeration and Air Conditioning Technology Program (T162)', 2),
(355, 'Heating, Refrigeration and Air Conditioning Technology Program (T162)', 2),
(356, 'Hospitality Services (Pre-Hospitality) Program (H101)', 2),
(357, 'Hospitality Services Program (H101)', 2),
(358, 'Hospitality, Tourism and Leisure Program (H110)', 2),
(359, 'Hotel Management Program (H103)', 2),
(360, 'Hotel Management Program (H103)', 2),
(361, 'Human Resources Management Program (Postgraduate) (B408)', 2),
(362, 'Human Resources Management Program (Postgraduate) (B408)', 2),
(363, 'Information Systems Business Analysis Program (Postgraduate) (T405)', 2),
(364, 'Information Systems Business Analysis Program (Postgraduate) (T405)', 2),
(365, 'Information Systems Business Analysis Program (Postgraduate) (with co-op) (T407)', 2),
(366, 'Interaction Design and Development (G103)', 2),
(367, 'Interaction Design and Development program (G103)', 2),
(368, 'Interdisciplinary Design Strategy (Postgraduate) at the Institute Without Boundaries (G414)', 2),
(369, 'Interdisciplinary Design Strategy (Postgraduate) at the Institute Without Boundaries (G414)', 2),
(370, 'Interior Design Technology (T170)', 2),
(371, 'Interior Design Technology (T170)', 2),
(372, 'International Business Management Program (Postgraduate) (B411)', 2),
(373, 'International Business Management Program (Postgraduate) (B411)', 2),
(374, 'International Fashion Development and Management (Postgraduate) Program (F402)', 2),
(375, 'International Fashion Development and Management (Postgraduate) Program (F402)', 2),
(376, 'Interprofessional Acute Care Paediatric Cardiology Program (Postgraduate) (S416)', 2),
(377, 'Interprofessional Acute Care Paediatric Cardiology Program (Postgraduate) (S416)', 2),
(378, 'Intervenor for Deafblind Persons Program (C108)', 2),
(379, 'Intervenor for Deafblind Persons Program (C108)', 2),
(380, 'Jewellery Arts Program (F114)', 2),
(381, 'Jewellery Arts Program (F114)', 2),
(382, 'Jewellery Essentials Program (F111)', 2),
(383, 'Jewellery Essentials Program (F111)', 2),
(384, 'Jewellery Methods Program (F110)', 2),
(385, 'Jewellery Methods Program (F110)', 2),
(386, 'Marketing Management - Financial Services Program (Postgraduate) (B406)', 2),
(387, 'Marketing Management - Financial Services Program (Postgraduate) (B406)', 2),
(388, 'Mechanical Engineering Technology - Design Program (T121)', 2),
(389, 'Mechanical Engineering Technology - Design Program (T121)', 2),
(390, 'Mechanical Technician - CNC and Precision Machining  (T173)', 2),
(391, 'Mechanical Technician - Tool and Die (T143)', 2),
(392, 'Mechanical Techniques (Fast-Track)  (T149)', 2),
(393, 'Northern Womenâ€™s Empowerment Support and Advocacy Education (R106)', 2),
(394, 'Northern Womenâ€™s Empowerment Support and Advocacy Education (R106)', 2),
(395, 'Office Administration Program - Medical (C115)', 2),
(396, 'Office Administration Program - Medical (C115)', 2),
(397, 'Orthotic / Prosthetic Technician Program (S102)', 2),
(398, 'Orthotic / Prosthetic Technician Program (S102)', 2),
(399, 'Personal Support Worker (PSW) Pathway to Practical Nursing Program (S119)', 2),
(400, 'Personal Support Worker (PSW) Pathway to Practical Nursing Program (S119)', 2),
(401, 'Personal Support Worker (PSW) Program (C112)', 2),
(402, 'Personal Support Worker (PSW) Program (C112)', 2),
(403, 'Plumbing Techniques Program (T165)', 2),
(404, 'Plumbing Techniques Program (T165)', 2),
(405, 'Practical Nursing Program (PN) (S121)', 2),
(406, 'Practical Nursing Program (PN) (S121)', 2),
(407, 'Pre-Business Program (A146)', 2),
(408, 'Pre-Business Program (A146)', 2),
(409, 'Pre-Community Services Program (A103)', 2),
(410, 'Pre-Community Services Program (A103)', 2),
(411, 'Pre-Health Science Program (A102)', 2),
(412, 'Pre-Health Science Program (A102)', 2),
(413, 'Programmable Logic Controllers (PLC) Technician Program (Distance Education) (T903)', 2),
(414, 'Programmable Logic Controllers (PLC) Technician Program (Distance Education) (T903)', 2),
(415, 'R.P.N. Bridge to B.Sc.N. Postgraduate Program (S122)', 2),
(416, 'R.P.N. Bridge to B.Sc.N. Postgraduate Program (S122)', 2),
(417, 'Railway Conductor Program (T151)', 2),
(418, 'Registered Nurse - Critical Care Nursing Program (Online) (Postgraduate) (S422)', 2),
(419, 'Registered Nurse - Critical Care Nursing Program (Online) (Postgraduate) (S422)', 2),
(420, 'Registered Nurse - Critical Care Nursing Program (Postgraduate) (S402)', 2),
(421, 'Registered Nurse - Critical Care Nursing Program (Postgraduate) (S402)', 2),
(422, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Online Program (S424)', 2),
(423, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Online Program (S424)', 2),
(424, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Program (S414)', 2),
(425, 'Registered Nurse - Operating Room Perioperative Nursing (Postgraduate) Program (S414)', 2),
(426, 'Registered Nurse - Perinatal Intensive Care Nursing Program (S404) (Postgraduate)', 2),
(427, 'Registered Nurse - Perinatal Intensive Care Nursing Program (S404) (Postgraduate)', 2),
(428, 'Restorative Dental Hygiene (Postgraduate) Program (S400)', 2),
(429, 'Restorative Dental Hygiene (Postgraduate) Program (S400)', 2),
(430, 'Robotics Technician Program (Distance Education) (T948)', 2),
(431, 'Robotics Technician Program (Distance Education) (T948)', 2),
(432, 'Small Business Entrepreneurship Program (Postgraduate) (B410)', 2),
(433, 'Small Business Entrepreneurship Program (Postgraduate) (B410)', 2),
(434, 'Social Service Worker Program (C119)', 2),
(435, 'Social Service Worker Program (C119)', 2),
(436, 'Social Service Worker Program (Fast Track) (C135)', 2),
(437, 'Social Service Worker Program (Fast Track) (C135)', 2),
(438, 'Special Events Planning Program (H121)', 2),
(439, 'Special Events Planning Program (H121)', 2),
(440, 'Sport and Event Marketing Program (Postgraduate) (B400)', 2),
(441, 'Sport and Event Marketing Program (Postgraduate) (B400)', 2),
(442, 'Strategic Relationship Marketing Program (Postgraduate) (B409)', 2),
(443, 'Strategic Relationship Marketing Program (Postgraduate) (B409)', 2),
(444, 'Teaching English as a Second Language to Adults (TESL) Program (R400)', 2),
(445, 'Teaching English as a Second Language to Adults (TESL) Program (R400)', 2),
(446, 'Theatre Arts Program (P100)', 2),
(447, 'Theatre Arts Program (P100)', 2),
(448, 'Transitions to Post-Secondary Education Program (A107)', 2),
(449, 'Transitions to Post-Secondary Education Program (A107)', 2),
(450, 'Wireless Networking Program (Postgraduate) (T411)', 2),
(451, 'Wireless Networking Program (Postgraduate) (T411)', 2),
(703, 'Accounting', 1),
(704, 'Administrative Studies', 1),
(705, 'Advanced Management Graduate Diploma', 1),
(706, 'African Studies', 1),
(707, 'Anthropology', 1),
(708, 'Anthropology  â€“  Social', 1),
(709, 'Anti-Racist Research & Practice', 1),
(710, 'Applied Mathematics', 1),
(711, 'Art History', 1),
(712, 'Art History & Visual Culture', 1),
(713, 'Arts & Media Administration Graduate Diploma', 1),
(714, 'Asian Studies Graduate Diploma', 1),
(715, 'Athletic Therapy', 1),
(716, 'Biochemistry', 1),
(717, 'Biology', 1),
(718, 'Biology', 1),
(719, 'Biomedical Science', 1),
(720, 'Biophysics', 1),
(721, 'Biotechnology', 1),
(722, 'Business & Society', 1),
(723, 'Business & Sustainability Graduate Diploma', 1),
(724, 'Business Administration', 1),
(725, 'Business Administration', 1),
(726, 'Business Economics', 1),
(727, 'Canadian Business for Internationally Educated Professionals', 1),
(728, 'Canadian Studies', 1),
(729, 'Chemistry', 1),
(730, 'Chemistry', 1),
(731, 'Cinema & Media Studies', 1),
(732, 'Civil Engineering', 1),
(733, 'Classical Studies & Classics', 1),
(734, 'Cognitive Science', 1),
(735, 'Communication & Culture', 1),
(736, 'Communication Studies', 1),
(737, 'Community Arts Practice', 1),
(738, 'Computational Math', 1),
(739, 'Computer Engineering', 1),
(740, 'Computer Engineering', 1),
(741, 'Computer Science', 1),
(742, 'Computer Science', 1),
(743, 'Computer Security', 1),
(744, 'Conference Interpreting', 1),
(745, 'Creative Writing', 1),
(746, 'Criminology', 1),
(747, 'Critical Disability Studies', 1),
(748, 'Culture & Expression', 1),
(749, 'Curatorial Studies in Visual Culture Graduate Diploma', 1),
(750, 'Dance', 1),
(751, 'Dance', 1),
(752, 'Dance Science', 1),
(753, 'Dance Studies', 1),
(754, 'Democratic Administration Graduate Diploma', 1),
(755, 'Design', 1),
(756, 'Design', 1),
(757, 'Development Studies', 1),
(758, 'Digital Design', 1),
(759, 'Digital Media', 1),
(760, 'Disaster & Emergency Management', 1),
(761, 'Disaster & Emergency Management', 1),
(762, 'Discipline of Teaching English as an International Language (D-TEIL)', 1),
(763, 'Drama Studies', 1),
(764, 'Early Childhood Education Graduate Diploma', 1),
(765, 'Earth & Atmospheric Science', 1),
(766, 'Earth & Space Science', 1),
(767, 'East Asian Studies', 1),
(768, 'Economics', 1),
(769, 'Economics', 1),
(770, 'Ecosystem Management', 1),
(771, 'Education', 1),
(772, 'Education in Urban Environments Graduate Diploma', 1),
(773, 'Education â€“ Language, Culture & Teaching', 1),
(774, 'Electrical Engineering', 1),
(775, 'Emergency Management', 1),
(776, 'Engineering & International Development Studies', 1),
(777, 'English', 1),
(778, 'English', 1),
(779, 'English & Professional Writing', 1),
(780, 'English Studies', 1),
(781, 'Environmental & Health Studies (Multidisciplinary Studies)', 1),
(782, 'Environmental Biology', 1),
(783, 'Environmental Science', 1),
(784, 'Environmental Studies', 1),
(785, 'Environmental Studies', 1),
(786, 'Environmental/Sustainability Education Graduate Diploma', 1),
(787, 'Ã‰tudes franÃ§aises', 1),
(788, 'Ã‰tudes francophones', 1),
(789, 'European Studies', 1),
(790, 'Film', 1),
(791, 'Film', 1),
(792, 'Financial & Business Economics', 1),
(793, 'Financial Accountability', 1),
(794, 'Financial Engineering Graduate Diploma', 1),
(795, 'Financial Planning', 1),
(796, 'Fitness Assessment & Exercise Counselling', 1),
(797, 'French Studies / Ã‰tudes franÃ§aises', 1),
(798, 'General Interpreting Graduate Diploma', 1),
(799, 'Geographic Information Systems & Remote Sensing', 1),
(800, 'Geography', 1),
(801, 'Geography', 1),
(802, 'Geography & Urban Studies', 1),
(803, 'Geomatics Engineering', 1),
(804, 'German & European Studies Graduate Diploma', 1),
(805, 'German Studies', 1),
(806, 'Global Health', 1),
(807, 'Global Political Studies', 1),
(808, 'Health', 1),
(809, 'Health & Society', 1),
(810, 'Health Industry Management Graduate Diploma', 1),
(811, 'Health Informatics', 1),
(812, 'Health Psychology Graduate Diploma', 1),
(813, 'Health Services Financial Management', 1),
(814, 'Health Studies', 1),
(815, 'Hebrew & Jewish Studies: Advanced', 1),
(816, 'Hellenic Studies', 1),
(817, 'History', 1),
(818, 'History', 1),
(819, 'Human Resources Management', 1),
(820, 'Human Resources Management', 1),
(821, 'Human Resources Management', 1),
(822, 'Human Resources Management for Internationally Educated Professionals', 1),
(823, 'Human Rights & Equity Studies', 1),
(824, 'Humanities', 1),
(825, 'Humanities', 1),
(826, 'Indigenous Studies', 1),
(827, 'Individualized / Multidisciplinary Studies', 1),
(828, 'Information Systems & Technology', 1),
(829, 'Information Technology', 1),
(830, 'Information Technology Auditing & Assurance', 1),
(831, 'Information Technology for Internationally Educated Professionals', 1),
(832, 'Interdisciplinary Studies', 1),
(833, 'International & Security Studies Graduate Diploma', 1),
(834, 'International Business Administration', 1),
(835, 'International Development Studies', 1),
(836, 'International Project Management', 1),
(837, 'International Studies', 1),
(838, 'Investment Management', 1),
(839, 'Italian Culture', 1),
(840, 'Italian Studies', 1),
(841, 'Jewish Studies', 1),
(842, 'Jewish Studies Graduate Diploma', 1),
(843, 'Justice System Administration Graduate Diploma', 1),
(844, 'Kinesiology & Health Science', 1),
(845, 'Kinesiology & Health Science', 1),
(846, 'Language & Literacy Education Graduate Diploma', 1),
(847, 'Language Proficiency', 1),
(848, 'Latin American & Caribbean Studies', 1),
(849, 'Latin American & Caribbean Studies Graduate Diploma', 1),
(850, 'Law', 1),
(851, 'Law & Social Thought / Droit et pensÃ©e sociale', 1),
(852, 'Law & Society', 1),
(853, 'Law & Society', 1),
(854, 'Law (Osgoode Hall Law School)', 1),
(855, 'Law (Osgoode Professional Development)', 1),
(856, 'Linguistics', 1),
(857, 'Linguistics & Applied Linguistics', 1),
(858, 'Linguistics & Language Studies', 1),
(859, 'Logistics', 1),
(860, 'Management', 1),
(861, 'Marketing', 1),
(862, 'Mathematics', 1),
(863, 'Mathematics & Statistics', 1),
(864, 'Mathematics Education Graduate Diploma', 1),
(865, 'Mathematics for Commerce', 1),
(866, 'Mathematics for Education', 1),
(867, 'Mathematics for Teachers', 1),
(868, 'Mathematics: Applied & Industrial', 1),
(869, 'Mechanical Engineering', 1),
(870, 'Meteorology', 1),
(871, 'Multicultural & Indigenous Studies', 1),
(872, 'Music', 1),
(873, 'Music', 1),
(874, 'Neuroscience Graduate Diploma', 1),
(875, 'Non-Profit Management', 1),
(876, 'Nursing', 1),
(877, 'Nursing: Collaborative (York-Seneca-Georgian)', 1),
(878, 'Nursing: Post-RN for Internationally Educated Nurses', 1),
(879, 'Nursing: Second Entry', 1),
(880, 'Nursingâ€“Primary Health Care Nurse Practitioner (PHCNP)', 1),
(881, 'Nursingâ€“RN to MScN Alternate Admission', 1),
(882, 'Philosophy', 1),
(883, 'Philosophy', 1),
(884, 'Physics & Astronomy', 1),
(885, 'Physics & Astronomy', 1),
(886, 'Political Science', 1),
(887, 'Political Science', 1),
(888, 'Portuguese Studies', 1),
(889, 'Postsecondary Education: Community, Culture & Policy', 1),
(890, 'Practical Ethics', 1),
(891, 'Professional Ethics', 1),
(892, 'Professional Writing', 1),
(893, 'Psychology', 1),
(894, 'Psychology', 1),
(895, 'Public & International Affairs', 1),
(896, 'Public Administration', 1),
(897, 'Public Administration & Law', 1),
(898, 'Public Management Graduate Diploma', 1),
(899, 'Public Policy Analysis', 1),
(900, 'Public Policy, Administration & Law', 1),
(901, 'Real Estate', 1),
(902, 'Real Estate & Infrastructure Graduate Diploma', 1),
(903, 'RÃ©daction professionnelle', 1),
(904, 'Refugee & Migration Studies / Ã‰tudes sur la migration et sur les rÃ©fugiÃ©s', 1),
(905, 'Refugee & Migration Studies Graduate Diploma', 1),
(906, 'Rehabilitation Services', 1),
(907, 'Religious Studies', 1),
(908, 'Science & Technology Studies', 1),
(909, 'Science & Technology Studies', 1),
(910, 'Sexuality Studies', 1),
(911, 'Sexuality Studies / Ã‰tudes sur la sexualitÃ©', 1),
(912, 'Social & Political Thought', 1),
(913, 'Social & Political Thought', 1),
(914, 'Social Science', 1),
(915, 'Social Sector Managment Graduate Diploma', 1),
(916, 'Social Work', 1),
(917, 'Social Work', 1),
(918, 'Socio-Legal Studies', 1),
(919, 'Sociology', 1),
(920, 'Sociology', 1),
(921, 'Software Engineering', 1),
(922, 'South Asian Studies', 1),
(923, 'South Asian Studies', 1),
(924, 'Space Engineering', 1),
(925, 'Space Science', 1),
(926, 'Spanish', 1),
(927, 'Spanish (Hispanic Studies)', 1),
(928, 'Spanish-English Translation / TraducciÃ³n ingles-espanÃµl', 1),
(929, 'Sustainable Energy', 1),
(930, 'Teacher Education (Bachelor of Education)', 1),
(931, 'Teacher Education for French Immersion (Bachelor of Education)', 1),
(932, 'Teaching English to Speakers of Other Languages (TESOL)', 1),
(933, 'Technical & Professional Communication', 1),
(934, 'Theatre', 1),
(935, 'Theatre', 1),
(936, 'Theatre & Performance Studies', 1),
(937, 'Translation Studies', 1),
(938, 'Translation Studies', 1),
(939, 'Undecided Major', 1),
(940, 'United States Studies', 1),
(941, 'Urban Ecologies', 1),
(942, 'Urban Studies', 1),
(943, 'Urban Studies', 1),
(944, 'Urban Sustainability - York/Seneca Joint Program', 1),
(945, 'Value Theory & Applied Ethics Graduate Diploma', 1),
(946, 'Visual Arts', 1),
(947, 'Visual Arts & Art History', 1),
(948, 'Voice Teaching Graduate Diploma', 1),
(949, 'Work & Labour Studies', 1),
(950, 'Work & Labour Studies', 1),
(951, 'Work & Labour Studies', 1),
(952, 'Work & Labour Studies', 1),
(953, 'Work & Labour Studies', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(10) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `user_id`, `start_date`, `created_at`, `updated_at`) VALUES
(20, 'Web Design for Prestige Worldwide', 'Hard job for some bros', 2, '1453517043', '2015-01-23 02:44:03', '2015-01-23 02:44:03'),
(21, 'Android App for Ryerson', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', 2, '0', '2015-01-23 03:05:47', '2015-01-23 03:05:47'),
(22, 'Kitty Treat Dispenser', 'Meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow', 22, '0', '2015-01-23 03:20:10', '2015-01-23 03:20:10'),
(23, 'Meow', 'Meow', 22, '0', '2015-01-23 03:37:24', '2015-01-23 03:37:24'),
(24, 'Meow', 'Mew', 22, '0', '2015-01-23 03:37:47', '2015-01-23 03:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `project_files`
--

CREATE TABLE IF NOT EXISTS `project_files` (
`id` int(11) NOT NULL,
  `project_id` int(10) NOT NULL,
  `file_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_skills`
--

CREATE TABLE IF NOT EXISTS `project_skills` (
`id` int(11) NOT NULL,
  `project_id` int(10) NOT NULL,
  `skill_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
(28, 24, 4);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
`id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `popularity` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `popularity`) VALUES
(1, 'PHP', 0),
(2, 'C#', 0),
(3, 'Java', 0),
(4, 'AutoCAD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(4) NOT NULL DEFAULT '0',
  `banned` tinyint(4) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(2, 2, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL),
(3, 2, '::1', 0, 0, 0, NULL, NULL, NULL),
(4, 11, '::1', 0, 0, 0, NULL, NULL, NULL),
(5, 22, '::1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_id`, `email`, `avatar`, `password`, `summary`, `experience`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(2, '100864964', 'alex@solutionblender.ca', 'uploads\\UZBue6pWGzhoANwkMjWQ.jpg', '$2y$10$xNvk8acZ4bHUYldOKtdiQ.I.BAo4NQ63ligl4OrtiF0lYpdKz1lJS', '<p><strong>alex@solutionblender.ca</strong></p>\r\n\r\n<p><strong>Objective</strong></p>\r\n\r\n<p>To secure a summer position where I can utilize my strong computer skills as I work to complete my post-secondary education at George Brown College, preferably in the web and mobile field.</p>\r\n\r\n<p><strong>Education</strong></p>\r\n\r\n<p>George Brown College &ndash; 2 of 3 years complete towards an Advance Programmer Analyst Diploma</p>\r\n\r\n<p>Charlottetown Rural High School &ndash; Grade 12 Academic &ndash; Graduated July 2011.&nbsp;&nbsp;</p>\r\n\r\n<p><strong>Programming Competency</strong></p>\r\n\r\n<ul>\r\n	<li>Familiar with Terminal/DOS, Git, Linux flavors, &amp; VPS administration.</li>\r\n	<li>PHP, Composer, Laravel, PHPFuel &amp; Phalcon.</li>\r\n	<li>HTML, CSS, JS, jQuery &amp; played with AngularJS</li>\r\n	<li>C#, ASP &amp; WCF</li>\r\n	<li>Java/Android &amp; PhoneGap</li>\r\n</ul>\r\n\r\n<p><strong>Accomplishments</strong></p>\r\n\r\n<ul>\r\n	<li>Represented Prince Edward Island on the Men&rsquo;s Fencing Team at the Canada Winter Games in Whitehorse, 2006.</li>\r\n	<li>Class 5 Drivers License (Standard and Automatic Transmission) and Defensive Driving Course.</li>\r\n	<li>Attained the rank of Flight Sergeant with 60 Confederation Squadron, Royal Canadian Air Cadets.</li>\r\n	<li>Kiwanis Club Award for Community Service PE (2007).</li>\r\n	<li>Lieutenant Governor Student Aide de Camp Award PE(2007).</li>\r\n	<li>Sherwood Parkdale Minor Soccer League PE(Ages 6-15).</li>\r\n	<li>Attended UPEI courses Information Technology 111D and Student Video Game Programming (2009).</li>\r\n	<li>Strong computer literacy skills.</li>\r\n</ul>\r\n\r\n<p><strong>References</strong> :&nbsp; Available upon request</p>\r\n', '<p><strong>Work Experience</strong></p>\r\n\r\n<p><strong>Canadian Food Inspection Agency (CFIA)</strong>: Inspection Assistant&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sep 2012 &ndash; Dec 2012</strong></p>\r\n\r\n<ul>\r\n	<li>Collecting soil samples from various potato fields around Prince Edward Island.</li>\r\n	<li>Filling in forms/documentation related to the samples.</li>\r\n	<li>Loading and transporting samples from fields to local CFIA offices.</li>\r\n	<li>Transporting samples from local offices to the CFIA labs in Charlottetown, PEI for testing.</li>\r\n	<li>Security cleared to &lsquo;Reliability&rsquo; status level by the Federal Government.</li>\r\n</ul>\r\n\r\n<p><strong>Murphy&rsquo;s Pharmacy (Charlottetown)</strong>:&nbsp; Cashier / Merchandiser&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Nov. 2010 - Sep 2012</strong></p>\r\n\r\n<ul>\r\n	<li>Processed cash, debit and credit transactions.</li>\r\n	<li>Dealt effectively with customers&rsquo; questions and concerns.</li>\r\n	<li>Maintained clean working environment.</li>\r\n	<li>Stocking, facing, organizing, and cleaning shelves and aisles.</li>\r\n	<li>Building in-store displays.</li>\r\n	<li>Providing technical support &lsquo;as needed&rsquo;&nbsp; for cash registers and other computer equipment</li>\r\n</ul>\r\n\r\n<p><strong>Catherine Parkman Law Office</strong>: Office Assistant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Jun. 2009 - Aug. 2010</strong></p>\r\n\r\n<ul>\r\n	<li>File and organize information</li>\r\n	<li>Run errands to banks (deposits), law firms, court house and registry office</li>\r\n	<li>Data entry as needed</li>\r\n	<li>IT support as required</li>\r\n	<li>Operate office equipment such as scanners, copiers and fax machines</li>\r\n	<li>Familiar with MS Office suite of applications</li>\r\n	<li>Worked to support other office staff&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>Shoppers Drug Mart (Charlottetown) </strong>Merchandiser<strong>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mar. 2009 - Apr. 2009</strong></p>\r\n\r\n<ul>\r\n	<li>Short term contract setting up new store (Queen Street Store). Working with a team we were responsible for setting up displays, stocking shelves and other duties as assigned by the Team Lead in order to have the store ready for the Grand Opening.</li>\r\n</ul>\r\n', NULL, 1, NULL, NULL, '2015-01-25 02:09:54', '$2y$10$WRUy1L5sX7YRz5Jau0.qpe5jfQe1TXhs/G67SmFxxJtT23ZiOPKFG', NULL, 'Alex', 'Hughes', '2014-09-25 21:34:32', '2015-01-25 07:09:54'),
(18, '100821418', 'alex.hughes000@gmail.com', '', '$2y$10$Ruc4dU3jQXIYjFQu9jsSGO0BrXupGcc72JaudfgiPZVFC1djM5qBS', '', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-01-20 20:52:20', '2015-01-20 20:52:20'),
(19, '100821417', 'keegancaradonna@gmail.com', '', '$2y$10$sipqq.RD/Nj2vYEMpRlGXu9QTOe6MD6GYgSvoEa1VJOfQmqJuUHG2', '', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-01-20 20:54:16', '2015-01-20 20:54:16'),
(22, '100000001', 'ahughes12@georgebrown.ca', 'uploads\\2iAxGGXrcMSGQGZEpcV1.jpg', '$2y$10$8z8jopgtBjLJs.KEkjt5Yu6RxZxcv.Kpyf0tWnMjw4BikxTVedsK.', '', '', NULL, 1, NULL, NULL, '2015-01-23 12:18:02', '$2y$10$KO6CSzx10VoxLyeLg6XIy.SuQ2au9jeO3xoMl07y/QSb1Zl6yO9RW', NULL, 'Chairman', 'Meow', '2015-01-23 08:12:27', '2015-01-23 17:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(10, 2, 1),
(11, 2, 4),
(22, 22, 2),
(23, 22, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users_programs`
--

CREATE TABLE IF NOT EXISTS `users_programs` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `program_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_programs`
--

INSERT INTO `users_programs` (`id`, `user_id`, `program_id`) VALUES
(14, 2, 248),
(15, 22, 248);

-- --------------------------------------------------------

--
-- Table structure for table `users_skills`
--

CREATE TABLE IF NOT EXISTS `users_skills` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `skill_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_skills`
--

INSERT INTO `users_skills` (`id`, `user_id`, `skill_id`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 9, 0),
(4, 9, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_files`
--
ALTER TABLE `project_files`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_skills`
--
ALTER TABLE `project_skills`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_activation_code_index` (`activation_code`), ADD KEY `users_reset_password_code_index` (`reset_password_code`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_programs`
--
ALTER TABLE `users_programs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_skills`
--
ALTER TABLE `users_skills`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=954;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `project_files`
--
ALTER TABLE `project_files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_skills`
--
ALTER TABLE `project_skills`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users_programs`
--
ALTER TABLE `users_programs`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users_skills`
--
ALTER TABLE `users_skills`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
