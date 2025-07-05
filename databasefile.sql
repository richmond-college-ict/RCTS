-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2025 at 09:43 PM
-- Server version: 8.0.42
-- PHP Version: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bxvhsavv_rcgtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_tbl`
--

CREATE TABLE `banner_tbl` (
  `id` int NOT NULL,
  `img_path` varchar(50) NOT NULL,
  `is_countdown` tinyint(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_papers`
--

CREATE TABLE `exam_papers` (
  `id` int NOT NULL,
  `paper_name` text NOT NULL,
  `year` year NOT NULL,
  `category` text NOT NULL,
  `subject` text NOT NULL,
  `file` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `exam_papers`
--

INSERT INTO `exam_papers` (`id`, `paper_name`, `year`, `category`, `subject`, `file`) VALUES
(1, 'ICT', '2018', '3rd term', 'ICT', '../uploads/exam_papers/G12 P1_EM_final.pdf'),
(2, 'sfsf', '2018', '3rd term', 'ET', '../uploads/exam_papers/Exam Results - Department of Examinations - Sri Lanka.pdf'),
(3, 'G12 southern province EM ICT PART1', '2022', '3rd term', 'ICT', '../uploads/exam_papers/G12 P1_EM_final.pdf'),
(4, 'G12 southern province EM ICT PART2', '2022', '3rd term', 'ICT', '../uploads/exam_papers/G12 P2_EM_final.pdf'),
(5, 'G13 southern province EM ICT PART1', '2020', '2nd term', 'ICT', '../uploads/exam_papers/2020-Grade 13-Term2-en.pdf'),
(6, 'G13 southern province SM ICT ', '2020', '2nd term', 'ICT', '../uploads/exam_papers/2020-Grade 13-Term2-si.pdf'),
(7, 'G13 Richmond College EM ICT ', '2021', '3rd term', 'ICT', '../uploads/exam_papers/2021 AL ICT Paper Part A-B.pdf'),
(8, 'G13 southern province EM ICT PART1', '2022', '3rd term', 'ICT', '../uploads/exam_papers/G13 ICT P1_ EM.pdf'),
(9, 'G13 southern province EM ICT PART2', '2022', '3rd term', 'ICT', '../uploads/exam_papers/G13 ICT P2_ EM.pdf'),
(10, 'G13 southern province SM ICT PART1', '2022', '3rd term', 'ICT', '../uploads/exam_papers/G13_ICT_P1_SM.pdf'),
(11, 'G13 southern province SM ICT PART2', '2022', '3rd term', 'ICT', '../uploads/exam_papers/G13_ICT_P2_SM.pdf'),
(12, 'G13 southern province SM ICT PART2', '2018', '3rd term', 'ICT', '../uploads/exam_papers/G13_ICT_P2_SM.pdf'),
(13, 'G13 southern province SM ICT PART1', '2019', '3rd term', 'ICT', '../uploads/exam_papers/ICT-Southern Province-Grade 13-3rd Term-2019.pdf'),
(14, 'G13 southern province EM ICT PART2', '2024', '3rd term', 'ICT', '../uploads/exam_papers/G13 THIRD TERM ICT 2024 SP.pdf'),
(15, 'G13 southern province EM ICT PART1', '2024', '3rd term', 'ICT', '../uploads/exam_papers/G13 southern province EM ICT PART1 2024.pdf'),
(16, 'G13 southern province SM ICT PART2', '2024', '3rd term', 'ICT', '../uploads/exam_papers/G13 southern province SM ICT PART2.pdf'),
(17, 'G13 southern province SM ICT PART1', '2024', '3rd term', 'ICT', '../uploads/exam_papers/G13 southern province SM ICT PART1.pdf'),
(18, '12 EM MCQ (2025 AL)-v5', '2024', '2nd term', 'ICT', '../uploads/exam_papers/12 EM MCQ (2025 AL)-v5.pdf'),
(19, '12 SM MCQ (2025 AL)-v5', '2024', '2nd term', 'ICT', '../uploads/exam_papers/G_12_ICT_P1_SM v5.pdf'),
(20, '12 ICT_P2_EM_Edit_v7', '2024', '2nd term', 'ICT', '../uploads/exam_papers/ICT_P2_EM_Edit_v7.pdf'),
(21, '12 ICT_P2_SM_Edit_v7', '2024', '2nd term', 'ICT', '../uploads/exam_papers/ICT_P2_SM_EDIT_two v3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int NOT NULL,
  `school_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `feedback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rate` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `device_info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ip` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aprove` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `school_name`, `name`, `feedback`, `rate`, `device_info`, `ip`, `aprove`) VALUES
(1, 'G/Pilana Vidyarthodaya MV', 'Prasanna', 'Good....', '4', 'unknown', '175.157.27.44', 0),
(2, 'sample ', 'rusiru', 'wfjsnfjf', '5', 'unknown', '175.157.96.76', 0),
(3, '', '', '', '', '', '', 0),
(4, 'sample ', 'rusiru', 'very nice hodatama kra', '4', 'unknown', '175.157.96.76', 0),
(5, 'G/Pilana Vidyarthodaya MV', 'Amal', 'Nice...', '4', 'unknown', '123.231.106.13', 0),
(6, 'sample ', 'rusiru', 'dsvfdfgd', '4', 'unknown', '112.134.242.80', 0),
(7, 'rusiru ', 'rusiru', 'afafsfs', '4', 'unknown', '123.231.106.13', 0),
(8, '', '', '', '', 'unknown', '123.231.111.185', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_tbl`
--

CREATE TABLE `gallery_tbl` (
  `id` int NOT NULL,
  `img_path` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `role` text NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `role`, `img`) VALUES
(1, 'Rakitha Sandeep', 'President', 'uploads/members/jfyj.JPG'),
(2, 'Pamiru Imanjith', 'Secretary', 'uploads/members/xbc.JPG'),
(3, 'Nethmika Thimanjana', 'Treasurer', 'uploads/members/Screenshot 2024-11-14 174245.png');

-- --------------------------------------------------------

--
-- Table structure for table `member_tbl`
--

CREATE TABLE `member_tbl` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `role_id` int NOT NULL,
  `img_path` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `id` int NOT NULL,
  `news_header` varchar(50) NOT NULL,
  `news_description` text NOT NULL,
  `date_time` date NOT NULL,
  `img_path` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`id`, `news_header`, `news_description`, `date_time`, `img_path`) VALUES
(21, '2022 (2023) G. C. E. A/L Examination results analy', '<section id=\"scrollToSection2\">\r\n<h2>Result Analyze</h2>\r\n<div class=\"container\">\r\n<table class=\"table table-borderless mt-3\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\">Name</th>\r\n<th scope=\"col\">District Rank</th>\r\n<th scope=\"col\">Island Rank</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">KOPANA PALANAGE SAMUDITHA NAYANAPRIYA</th>\r\n<td>1</td>\r\n<td>1</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">KAHANDA POLHENE KANKANAMGE DINIL HANSARA</th>\r\n<td>2</td>\r\n<td>4</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">YASANDU PARAMITH INDURUWA GAMAGE</th>\r\n<td>4</td>\r\n<td>12</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table class=\"table table-borderless mt-5\">\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">No of 3A</th>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">No of 2A 1 B</th>\r\n<td>4</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">No. Qualified for University Entrance (Yes)</th>\r\n<td>85</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table class=\"table table-striped table-bordered mt-5\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\">Subject</th>\r\n<th scope=\"col\">No. of Applied</th>\r\n<th scope=\"col\">No. of ab</th>\r\n<th scope=\"col\">No. Sat</th>\r\n<th scope=\"col\">No. of A</th>\r\n<th scope=\"col\">No. of B</th>\r\n<th scope=\"col\">No. of C</th>\r\n<th scope=\"col\">No. of S</th>\r\n<th scope=\"col\">No. of F</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">ICT</th>\r\n<td>98</td>\r\n<td>3</td>\r\n<td>95</td>\r\n<td>11</td>\r\n<td>23</td>\r\n<td>33</td>\r\n<td>21</td>\r\n<td>7</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">SFT</th>\r\n<td>98</td>\r\n<td>8</td>\r\n<td>90</td>\r\n<td>5</td>\r\n<td>22</td>\r\n<td>29</td>\r\n<td>30</td>\r\n<td>4</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">ET</th>\r\n<td>98</td>\r\n<td>3</td>\r\n<td>95</td>\r\n<td>16</td>\r\n<td>29</td>\r\n<td>23</td>\r\n<td>20</td>\r\n<td>7</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</section>\r\n<section id=\"scrollToSection3\">\r\n<h2>All-Island Result Analyze</h2>\r\n<div class=\"container\"><br>Performance of All Candidates by Subject Stream\r\n<table class=\"table table-striped table-bordered mt-2\">\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">Stream</th>\r\n<th scope=\"row\">No of Sat</th>\r\n<th scope=\"row\">Eligible for University Entrance</th>\r\n<th scope=\"row\">Obtained 3A\'s</th>\r\n<th scope=\"row\">Failed in All Subjects</th>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">Engineering Technology</th>\r\n<td>16,051</td>\r\n<td>10,633</td>\r\n<td>90</td>\r\n<td>845</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">Bio System Technology</th>\r\n<td>8,082</td>\r\n<td>5,981</td>\r\n<td>73</td>\r\n<td>443</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<br><br>All Candidates - Results by Grades in each subject\r\n<table class=\"table table-striped table-bordered mt-2\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\">Subject No.</th>\r\n<th scope=\"col\">Subject</th>\r\n<th scope=\"col\">No. of Sat</th>\r\n<th scope=\"col\">No. of A</th>\r\n<th scope=\"col\">No. of B</th>\r\n<th scope=\"col\">No. of C</th>\r\n<th scope=\"col\">No. of S</th>\r\n<th scope=\"col\">No. of F</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">20</th>\r\n<th scope=\"row\">ICT</th>\r\n<td>37,600</td>\r\n<td>1,664</td>\r\n<td>3,461</td>\r\n<td>11,050</td>\r\n<td>12,425</td>\r\n<td>9,000</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">65</th>\r\n<th scope=\"row\">ET</th>\r\n<td>16,077</td>\r\n<td>138</td>\r\n<td>948</td>\r\n<td>4, 691</td>\r\n<td>7,433</td>\r\n<td>2,867</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">66</th>\r\n<th scope=\"row\">BST</th>\r\n<td>8,104</td>\r\n<td>296</td>\r\n<td>1,282</td>\r\n<td>2,156</td>\r\n<td>3,364</td>\r\n<td>1,006</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">67</th>\r\n<th scope=\"row\">SFT</th>\r\n<td>27,352</td>\r\n<td>957</td>\r\n<td>2,263</td>\r\n<td>5,886</td>\r\n<td>12,791</td>\r\n<td>5,455</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<br><br>\r\n<h6>* The analyses of this report are based on the data of the G.C.E. (A.L) Examination - 2022(2023) collected by&nbsp;<strong>Department of Examinations</strong> before the re-scrutiny of the examination.</h6>\r\n</div>\r\n</section>', '2024-10-17', 'uploads/news_img/rankers2.png'),
(22, 'Nexgen\'24 coming soon.', '<div class=\"flex max-w-full flex-col flex-grow\">\r\n<div class=\"min-h-8 text-message flex w-full flex-col items-end gap-2 whitespace-normal break-words [.text-message+&amp;]:mt-5\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"69959ecb-3b90-4cd5-a689-06a0e141fac5\" data-message-model-slug=\"gpt-4o\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p>Get ready for <strong>Nextgen\'25</strong>, the highly anticipated Tech Day organized by the Richmond College Technology Society! This event promises to showcase the cutting-edge innovations and talents of young tech enthusiasts. With exciting competitions such as Coding, Graphic Design, Practical Challenges, and Quizzes, students will compete to demonstrate their technical skills. NextGen\'25 is more than just a competition; it&rsquo;s a platform for collaboration, creativity, and technological discovery. Whether you\'re a participant or a spectator, this is a chance to experience the future of tech firsthand. Don&rsquo;t miss out on this exciting event&mdash;join us and be part of the next generation!</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"mb-2 flex gap-3 empty:hidden -ml-2\">\r\n<div class=\"items-center justify-start rounded-xl p-1 flex\">\r\n<div class=\"flex items-center\">&nbsp;</div>\r\n</div>\r\n</div>', '2024-11-15', 'uploads/news_img/example.png'),
(23, 'The Official T- Shirt of  Technology Society', '<p>We are thrilled to announce the release of the Official T-Shirt for the Richmond College Technology Society 24/25! This exclusive T-shirt is now available for pre-order, and you don&rsquo;t want to miss out.</p>\r\n<p>For just Rs. 2500/=, you can own this limited-edition T-shirt and proudly represent Richmond College Technology Society. Pre-orders are open until <strong>19th October</strong>, so hurry and secure yours using the link below:</p>\r\n<p>👉 <a href=\"https://forms.gle/12Wizi2Whhiw6CQT8\" target=\"_new\" rel=\"noopener\">Pre-order here</a></p>\r\n<p>For more details, contact:</p>\r\n<ul>\r\n<li><strong>Sanuka</strong>: 077 616 1244</li>\r\n<li><strong>Prasanna</strong>: 077 828 2807</li>\r\n</ul>\r\n<p>For any issues, feel free to reach out via WhatsApp at 077 616 1244.</p>\r\n<p>Don&rsquo;t wait&mdash;grab yours now and gear up for <strong>NextGen\'25</strong>! ✌🏻🔥</p>\r\n<table dir=\"ltr\" style=\"height: 207px; width: 90.0662%;\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\" data-sheets-root=\"1\" data-sheets-baot=\"1\"><colgroup><col style=\"width: 24.9695%;\" width=\"100\"><col style=\"width: 24.9695%;\" width=\"100\"><col style=\"width: 24.9695%;\" width=\"100\"><col class=\"table\" style=\"width: 25.0914%;\" width=\"100\"></colgroup>\r\n<tbody>\r\n<tr style=\"height: 23.625px;\">\r\n<td style=\"height: 23.625px;\"><strong>Size</strong></td>\r\n<td style=\"height: 23.625px;\"><strong>Chest (Inches)</strong></td>\r\n<td style=\"height: 23.625px;\"><strong>Length (Inches)</strong></td>\r\n<td style=\"height: 23.625px;\"><strong>Sleeve (Inches)</strong></td>\r\n</tr>\r\n<tr style=\"height: 23.625px;\">\r\n<td style=\"height: 23.625px;\"><strong>XS</strong></td>\r\n<td style=\"height: 23.625px;\">17.25</td>\r\n<td style=\"height: 23.625px;\">25.25</td>\r\n<td style=\"height: 23.625px;\">7.5</td>\r\n</tr>\r\n<tr style=\"height: 23.625px;\">\r\n<td style=\"height: 23.625px;\"><strong>S</strong></td>\r\n<td style=\"height: 23.625px;\">17.5</td>\r\n<td style=\"height: 23.625px;\">26.5</td>\r\n<td style=\"height: 23.625px;\">7.75</td>\r\n</tr>\r\n<tr style=\"height: 23.625px;\">\r\n<td style=\"height: 23.625px;\"><strong>M</strong></td>\r\n<td style=\"height: 23.625px;\">19</td>\r\n<td style=\"height: 23.625px;\">27.75</td>\r\n<td style=\"height: 23.625px;\">8</td>\r\n</tr>\r\n<tr style=\"height: 23.625px;\">\r\n<td style=\"height: 23.625px;\"><strong>L</strong></td>\r\n<td style=\"height: 23.625px;\">20.25</td>\r\n<td style=\"height: 23.625px;\">28.5</td>\r\n<td style=\"height: 23.625px;\">8.25</td>\r\n</tr>\r\n<tr style=\"height: 23.625px;\">\r\n<td style=\"height: 23.625px;\"><strong>XL</strong></td>\r\n<td style=\"height: 23.625px;\">21.75</td>\r\n<td style=\"height: 23.625px;\">29.75</td>\r\n<td style=\"height: 23.625px;\">9</td>\r\n</tr>\r\n<tr style=\"height: 23.625px;\">\r\n<td style=\"height: 23.625px;\"><strong>2XL</strong></td>\r\n<td style=\"height: 23.625px;\">23</td>\r\n<td style=\"height: 23.625px;\">30.75</td>\r\n<td style=\"height: 23.625px;\">9.25</td>\r\n</tr>\r\n<tr style=\"height: 41.625px;\">\r\n<td style=\"height: 41.625px;\"><strong>3XL</strong></td>\r\n<td style=\"height: 41.625px;\">24</td>\r\n<td style=\"height: 41.625px;\">31.75</td>\r\n<td style=\"height: 41.625px;\">10</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>#RCTS<br>#NextGen25<br>#RichmondCollege</p>', '2024-10-17', 'uploads/news_img/WhatsApp Image 2024-10-16 at 08.04.57_a8cfce5b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nextgen`
--

CREATE TABLE `nextgen` (
  `id` int NOT NULL,
  `news_header` varchar(50) NOT NULL,
  `news_description` text NOT NULL,
  `date_time` date NOT NULL,
  `img_path` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nextgen`
--

INSERT INTO `nextgen` (`id`, `news_header`, `news_description`, `date_time`, `img_path`) VALUES
(20, 'School Registration for NexGen\'25 is Now Open! ', '<p>We are excited to announce that school registration for <strong>NextGen\'25</strong>, the much-awaited Tech Day organized by Richmond College Technology Society, is officially open! Schools from across the region can now register and be part of this incredible event, which will feature exciting competitions like Coding, Graphic Design, Quiz Challenges, and more.</p>\r\n<p>To register your school, simply follow the link below:</p>\r\n<p><a href=\"../forms/tech_day.php\">Register your school here</a></p>\r\n<p>Don&rsquo;t miss this opportunity to showcase your students&rsquo; talents and creativity! The <strong>final deadline</strong> for registration is <strong>1st November</strong>, so be sure to sign up before it\'s too late.</p>\r\n<p>#NextGen25<br>#RCTS<br>#SchoolRegistration</p>', '2024-11-14', 'uploads/nextgen/design.png'),
(23, 'Competition Details', '<div class=\"flex max-w-full flex-col flex-grow\">\r\n<div class=\"min-h-8 text-message flex w-full flex-col items-end gap-2 whitespace-normal break-words [.text-message+&amp;]:mt-5\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"b140d5d1-ece2-41ec-a698-f367bade727f\" data-message-model-slug=\"gpt-4o\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p>Welcome to <strong>NextGen\'25 Competitions</strong>, where technology meets innovation! This year, Richmond College Technology Society invites schools from across the region to participate in a series of thrilling tech challenges. From coding battles and graphic design showcases to practical problem-solving and quiz challenges, there\'s something for every tech enthusiast. Test your skills, collaborate with peers, and compete for glory in an event that promises excitement and learning. Register your school today and be part of the future of technology!</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"mb-2 flex gap-3 empty:hidden -ml-2\">\r\n<div class=\"items-center justify-start rounded-xl p-1 flex\">\r\n<div class=\"flex items-center\">\r\n<ol style=\"color: black;\">\r\n<li><a class=\"link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover\" href=\"#coding\">Programming Competition</a></li>\r\n<li><a class=\"link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover\" href=\"#graphic\">Graphic Designing</a></li>\r\n<li><a class=\"link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover\" href=\"#quiz\">Quiz Competition</a></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p id=\"coding\"><strong>01.Coding Challenge&nbsp; &nbsp;</strong></p>\r\n<ul>\r\n<li><strong>Description</strong>: Candidates are expected to solve a probelem withing the given time period&nbsp;</li>\r\n<li><strong>Eligibility</strong>: Open to Technology students from Grades 12/13. Maximum of 2 student from a school&nbsp;</li>\r\n<li><strong>Date</strong>: November 19, 2024.</li>\r\n<li><strong>languages: &nbsp;</strong>java, php+html, python</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p id=\"graphic\"><strong>02.Graphic Design</strong>&nbsp; &nbsp;&nbsp;</p>\r\n<ul>\r\n<li><strong>Eligibility:&nbsp;</strong>Open to Technology students from Grades 12/13.</li>\r\n<li><strong>Categories:&nbsp;</strong><br>\r\n<ul>\r\n<li>Post Designing\r\n<ul>\r\n<li>theme:&nbsp; <strong>මෝටර් රථ නිෂ්පාදන කර්මාන්තශාලාවක් මගින් එලිදක්වු නව මෝටර් රථයක් සමාජ මාධ්&zwj;ය ඔස්සේ ප්&zwj;රචාරය කිරීමට සුදුසු Post එකක් නිර්මාණය කළ යුතුය.</strong></li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li style=\"list-style-type: none;\">\r\n<ul>\r\n<li>Logo Designing\r\n<ul>\r\n<li>themes:\r\n<ol>\r\n<li>\r\n<div class=\"flex max-w-full flex-col flex-grow\">\r\n<div class=\"min-h-8 text-message flex w-full flex-col items-end gap-2 whitespace-normal break-words [.text-message+&amp;]:mt-5\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"80a19a14-b086-40d6-a427-443b99b42d51\" data-message-model-slug=\"gpt-4o\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p><strong>අලුතින් ආරම්භ කල Service Center එකක් සෙහා සුදුසු නවීන Logo එකක් නිර්මාණය කළ යුතු්ේ</strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</li>\r\n<li style=\"font-weight: bold;\"><strong>අලුතින් ආරම්භ කල Real estate වයාපාරයක් සෙහා සුදුසු නවීන Logo එකක් නිර්මාණය කළ යුතු්ේ.</strong></li>\r\n</ol>\r\n</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</li>\r\n<li><strong>Rules and regulations:</strong>\r\n<ul>\r\n<li>one candidate can only apply for only one category</li>\r\n<li>Several contestants from one school can compete individually for this.</li>\r\n<li>Candidates have complete freedom to use Photos, Logo, Texts of your choice in making the design</li>\r\n<li>project files should be submitted only by .zip format&nbsp;</li>\r\n<li>It is compusory to upload all the project files with the final design&nbsp;</li>\r\n<li>Students\' creations must be submitted by the given link before November 12. Subsequent submissions will not be accepted.</li>\r\n<li>For more Information please free to reach us out\r\n<ul>\r\n<li>Mr. Prasanna &ndash; 077 828 2807</li>\r\n<li>Mrs. Ruchika (MIC) &ndash; 077 231 6869</li>\r\n</ul>\r\n</li>\r\n<li>click here to view the <a href=\"../uploads/nextgen/Creative%20Clash%20Guid%20Lines%20PDF.pdf\">guidline pdf</a></li>\r\n<li style=\"font-weight: bold;\"><strong><a href=\"https://docs.google.com/forms/d/e/1FAIpQLSd0cx4vlzDLox45fH8rs0lCesHm8aSiB3F_5DvxF48qS9iLew/viewform?usp=sf_link\">Click here for project submission link&nbsp;</a></strong></li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p id=\"quiz\"><strong>03.Quiz Challenge</strong></p>\r\n<ul>\r\n<li><strong>Description</strong>: A tech-themed quiz to challenge your knowledge in IT, coding, and current technology trends.</li>\r\n<li><strong>Eligibility</strong>: Teams of 3 students per school.</li>\r\n<li><strong>Rules</strong>:\r\n<ul>\r\n<li>Maximum 1 team per school.</li>\r\n<li>Participating students must be engineering technology students.</li>\r\n</ul>\r\n</li>\r\n<li><strong>Procedure</strong>: In the first round, all participating teams will receive a paper with short questions. The two teams with the highest scores will be selected for the second round. The winning team is decided based on the number of points scored in the second round. Certificates and trophies will be awarded to the two winning schools.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<hr>\r\n<h4>&nbsp;</h4>\r\n</div>\r\n</div>\r\n</div>', '2024-11-08', 'uploads/nextgen/design copy.png'),
(24, 'Photographic competition ', '<p>heres some content&nbsp;</p>', '2024-10-16', 'uploads/nextgen/images.png'),
(25, 'Practical competition ', '<p>content here</p>', '2024-10-16', 'uploads/nextgen/images.png'),
(26, 'quiz  competition ', '<p>content here</p>', '2024-10-16', 'uploads/nextgen/images.png'),
(27, 'Event Details', '<p>sgddg</p>', '2024-10-21', 'uploads/nextgen/design copy 2.png'),
(28, 'Get Ready for the Ultimate Car Wash Experience!', '<p><br>Tickets are now available to purchase!<br>Don&rsquo;t miss the chance to make your car shine and support the Richmond College Technology Society.</p>\r\n<p>Secure your ticket today!<br>&nbsp;Sanuka - 077 616 1244<br>&nbsp;Nethmika - 070 262 6745</p>\r\n<p>Be a part of this exciting event and drive away with a sparkling clean car!</p>\r\n<p>#RCTS #RCG #richmondcollege #carwash #intocare #nexgen25</p>', '2024-10-29', 'uploads/nextgen/WhatsApp Image 2024-10-29 at 18.14.52_1f41bf63.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page_views`
--

CREATE TABLE `page_views` (
  `id` int NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `visit_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `page_views`
--

INSERT INTO `page_views` (`id`, `ip_address`, `visit_time`) VALUES
(1, '::1', '2024-10-14 13:58:01'),
(2, '::1', '2024-10-15 17:18:07'),





-- --------------------------------------------------------

--
-- Table structure for table `review_tbl`
--

CREATE TABLE `review_tbl` (
  `id` int NOT NULL,
  `message` text NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `school` varchar(100) NOT NULL,
  `year` year NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_tbl`
--

CREATE TABLE `role_tbl` (
  `role_id` int NOT NULL,
  `role_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role_tbl`
--

INSERT INTO `role_tbl` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Master In Charge'),
(3, 'President'),
(4, 'Secretary'),
(5, 'Treasurure'),
(6, 'Vice President'),
(7, 'Vice Secretary'),
(8, 'Organizer'),
(9, 'Coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `social_tbl`
--

CREATE TABLE `social_tbl` (
  `id` int NOT NULL,
  `facebook_link` varchar(150) DEFAULT NULL,
  `instagram_link` varchar(150) DEFAULT NULL,
  `twitter_link` varchar(150) DEFAULT NULL,
  `youtube_link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `social_tbl`
--

INSERT INTO `social_tbl` (`id`, `facebook_link`, `instagram_link`, `twitter_link`, `youtube_link`) VALUES
(1, 'https://www.facebook.com/profile.html?id=100090979585946', 'https://instagram.com/rctsenovus?igshid=MTIzZWQxMDU=', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qualification` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `subject`, `qualification`, `status`, `img`) VALUES
(1, 'Kavinda Jayawardana', 'Information and Communication Technology', 'BSC In BUSINESS & ACCOUNTING', 'active', 'assets/img/user2.png'),
(2, 'Mr. M. G. P. Prasanna', 'Information and Communication Technology', 'BIT(UCSC), NCOE(ICT-EM), NIE(AL-ICT)', 'active', 'assets/img/img7.png'),
(3, 'Mrs. Achini Gunawardhana', 'Engineering Technology', 'HNDE, B.ED(ET) HONORS', 'active', 'assets/img/img5.jpg'),
(4, 'Mrs. Ruchika Wijayathunga', 'Engineering Technology', 'NDES, B.ED(ET) HONORS', 'active', 'assets/img/img3.jpg'),
(5, 'Mrs. H. K. Achini Ruvangi', 'Science For Technology', 'BSC In PHYSICAL SCIENCE, PGDE', 'active', 'assets/img/achini_mis_sft.jpg'),
(6, 'Mrs. Sanuja Samanmali', 'SCIENCE FOR TECHNOLOGY', 'BSC (HONORS) IN PHYSICAL SCIENCE, PGDE', 'active', 'assets/img/img4.jpg'),
(7, 'Mr. M. G. U. K. Senavirathna', 'ENGINEERING TECHNOLOGY', 'NCOE(MT), B. ED(HONORS) ET', 'former', 'assets/img/img1.jpg'),
(8, 'Mr. Wedika Vidurinda', 'INFORMATION AND COMMUNICATION TECHNOLOGY', 'BSC IT(SLIIT), PGDE, NIE(AL-ICT)', 'former', 'assets/img/img2.jpg'),
(9, 'Mr. M. L. Nishantha Kumara', 'SCIENCE FOR TECHNOLOGY', 'NCOE(SCIENCE), B.ED', 'former', 'assets/img/img6.png');

-- --------------------------------------------------------

--
-- Table structure for table `techday`
--

CREATE TABLE `techday` (
  `id` int NOT NULL,
  `school_name` text NOT NULL,
  `school_address` text NOT NULL,
  `census_number` text NOT NULL,
  `city` text NOT NULL,
  `school_no` int NOT NULL,
  `school_email` text NOT NULL,
  `principal_name` text NOT NULL,
  `tic_name` text NOT NULL,
  `tic_no` int NOT NULL,
  `tic_email` text NOT NULL,
  `comp` text NOT NULL,
  `notices` text NOT NULL,
  `participants` int NOT NULL,
  `year` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `techday`
--

INSERT INTO `techday` (`id`, `school_name`, `school_address`, `census_number`, `city`, `school_no`, `school_email`, `principal_name`, `tic_name`, `tic_no`, `tic_email`, `comp`, `notices`, `participants`, `year`) VALUES
(1, 'Mahinda College', 'pisan kotuwa Angoda ', '10001', 'galle', 94, 'rct@gmail.com', 'rusira manawadu', 'senavirathne', 716258860, 'mgpprasan@gmail.com', 'Graphic Design', 'gsgs', 250, 2024),
(2, 'G/Pilana Vidyarthodaya MV', 'Pilana, Wanchawala', '06397', 'Pilana', 778282807, 'mgpprasan@gmail.com', 'Mr. Amal', 'Mr. Kamal', 778282807, 'mgpprasan@gmail.com', 'Quiz, Graphic Design, Coding, Practical', 'No...', 10, 2024),
(3, 'G/Pilana Vidyarthodaya MV', 'Pilana, Wanchawala', '06398', 'Pilana', 778282807, 'mgpprasan@gmail.com', 'Amal', 'Kamal', 778282807, 'mgpprasan@gmail.com', '', '', 10, 2024),
(4, '', '', '', '', 0, '', '', '', 0, '', '', '', 0, 2024),
(5, 'MR/Mahinda Rajapaksha Collage', 'MR/Mahinda Rajapaksha Collage, Sarasavi Uyana,Matara', '07406', 'Matara', 412236675, 'mrcmnews@gmail.com', 'Mrs.Dulani Kamal Renuka', 'Mrs.Gayani Abeygunawardana', 771025858, 'gayaniab@gmail.com', 'Quiz, Graphic Design, Coding, Practical', '', 7, 2024),
(6, 'Nagoda Royal National College ', 'Nagoda ,Galle', '07307', 'Nagoda ', 2147483647, 'nagodaroyal5@gmail.com', 'Saman jayalal', 'K.V.Sahan suranjith ', 773579008, 'sahansuranjithkv@gmail.com', 'Quiz, Graphic Design, Practical', '', 20, 2024);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `name`, `email`, `password`, `status`) VALUES
(1, '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_papers`
--
ALTER TABLE `exam_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_tbl`
--
ALTER TABLE `member_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nextgen`
--
ALTER TABLE `nextgen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_views`
--
ALTER TABLE `page_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_tbl`
--
ALTER TABLE `review_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_tbl`
--
ALTER TABLE `role_tbl`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techday`
--
ALTER TABLE `techday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_papers`
--
ALTER TABLE `exam_papers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member_tbl`
--
ALTER TABLE `member_tbl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `nextgen`
--
ALTER TABLE `nextgen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `page_views`
--
ALTER TABLE `page_views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4136;

--
-- AUTO_INCREMENT for table `review_tbl`
--
ALTER TABLE `review_tbl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `techday`
--
ALTER TABLE `techday`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_tbl`
--
ALTER TABLE `member_tbl`
  ADD CONSTRAINT `member_tbl_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role_tbl` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
