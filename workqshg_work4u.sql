-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2021 at 03:28 AM
-- Server version: 10.3.27-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workqshg_work4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `employment_statuses`
--

CREATE TABLE `employment_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employment_statuses`
--

INSERT INTO `employment_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Full Time', '2020-09-20 23:10:59', '2020-09-20 23:10:59'),
(2, 'Part Time', '2020-09-20 23:11:05', '2020-09-20 23:11:05'),
(3, 'Contractual', '2020-09-20 23:11:12', '2020-09-20 23:11:12'),
(4, 'Internship', '2020-09-20 23:11:26', '2020-09-20 23:11:26'),
(5, 'Freelance', '2020-09-20 23:11:33', '2020-09-20 23:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_questions`
--

CREATE TABLE `f_a_q_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_questions`
--

INSERT INTO `f_a_q_questions` (`id`, `question`, `answers`, `created_at`, `updated_at`) VALUES
(1, 'What is Lorem Ipsum?', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum&lt;/span&gt;', '2020-09-23 21:08:18', '2020-09-23 21:08:18'),
(2, 'Where does it come from?', '&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;The standard chunk of Lorem Ipsum used since the 1500s&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Finibus Bonorum et Malorum&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Cicero are also reproduced in their exact original form&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;', '2020-09-23 21:09:21', '2020-09-23 21:09:21'),
(3, 'Why do we use it?', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/span&gt;', '2020-09-23 21:09:50', '2020-09-23 21:09:50'),
(4, 'Where can I get some?', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&lt;/span&gt;', '2020-09-23 21:10:27', '2020-09-23 21:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `immigration_applications`
--

CREATE TABLE `immigration_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `seeker_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seeker_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `immigration_applications`
--

INSERT INTO `immigration_applications` (`id`, `post_id`, `seeker_name`, `seeker_email`, `application_subject`, `cv_url`, `application_message`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md.Shohanur Rahman', 'test@gmail.com', 'Immigration Application for : Immigration to Australia', '/uploads/September_2020/23/1600880031_cv-of-shohanur-rahman.pdf', 'Immigration Application for : Immigration to AustraliaImmigration Application for : Immigration to AustraliaImmigration Application for : Immigration to Australia', 0, '2020-09-23 20:53:51', '2020-09-23 20:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `immigration_categories`
--

CREATE TABLE `immigration_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `immigration_categories`
--

INSERT INTO `immigration_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'DOCTOR', '2020-09-20 23:46:36', '2020-09-20 23:46:36'),
(2, 'Engineer', '2020-09-20 23:46:43', '2020-09-20 23:46:43'),
(3, 'MEDICAL LAB TECHNICIAN', '2020-09-20 23:46:53', '2020-09-20 23:46:53'),
(4, 'NURSE', '2020-09-20 23:47:03', '2020-09-20 23:47:03'),
(5, 'PHYSIOTHERAPIST', '2020-09-20 23:47:11', '2020-09-20 23:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `immigration_comments`
--

CREATE TABLE `immigration_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `auth_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `immigration_comments`
--

INSERT INTO `immigration_comments` (`id`, `user_id`, `comment_id`, `post_id`, `auth_name`, `auth_email`, `comment_text`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, 'nur eman', 'emannur155@gmzaill.com', 'I am interested but no IELTS.', NULL, '2020-10-11 15:45:13', '2020-10-11 15:45:13'),
(2, NULL, NULL, 2, 'Dr Ahmed Syed', 'syeditu48@gmail.com', 'Interested. Currently I am working at Saudi Arabia as GP. I am 45 yrs old now. I want to shift to Denmark as GP with family. Please email me in details regarding cost of your processing.', NULL, '2020-12-07 12:48:35', '2020-12-07 12:48:35'),
(3, NULL, NULL, 2, 'Srijana Bhattarai', 'bahattarai.srijana227@gmail.com', 'Want to study', NULL, '2020-12-13 13:34:00', '2020-12-13 13:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `immigration_countries`
--

CREATE TABLE `immigration_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `flag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `immigration_countries`
--

INSERT INTO `immigration_countries` (`id`, `name`, `is_published`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Australia', 1, 'uploads/October_2020/02/1601612595_australia.jpg', '2020-09-20 23:46:11', '2020-10-01 22:23:19'),
(2, 'DENMARK', 1, NULL, '2020-09-20 23:46:19', '2020-09-20 23:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `immigration_offers`
--

CREATE TABLE `immigration_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `submit_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'work4u.consultancy@yahoo.com',
  `country_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_requirment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts_requirment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_instruction` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_description1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_description2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_description3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `immigration_offers`
--

INSERT INTO `immigration_offers` (`id`, `is_published`, `submit_email`, `country_id`, `category_id`, `age`, `name`, `summary`, `educational_requirment`, `ielts_requirment`, `apply_instruction`, `extra_title1`, `extra_description1`, `extra_title2`, `extra_description2`, `extra_title3`, `extra_description3`, `created_at`, `updated_at`) VALUES
(1, 1, 'shohanur.rahman57@gmail.com', 1, 2, '48', 'Immigration to Australia', 'Immigration to Australia', 'If you are the graduate&amp;nbsp; from following subjects&lt;br /&gt;&lt;br /&gt;1) Bachelor in Computer Science and Engineering ( CSE)&amp;nbsp;&lt;br /&gt;&lt;br /&gt;or&lt;br /&gt;&lt;br /&gt;2) Bachelor in Computer Science&lt;br /&gt;&lt;br /&gt;or&lt;br /&gt;&lt;br /&gt;3) Bachelor in Information Technology ( IT)&amp;nbsp;&lt;br /&gt;&lt;br /&gt;or&lt;br /&gt;&lt;br /&gt;4) Bachelor in Electrical Engineering&lt;br /&gt;&lt;br /&gt;or&lt;br /&gt;&lt;br /&gt;5) Bachelor&amp;nbsp; in Electrical and Electronics Engineering&lt;br /&gt;&lt;br /&gt;', '&lt;br /&gt;IELTS ( GT)&amp;nbsp; required is overall Band score 7( Not less then 6 in any Band)&lt;br /&gt;&lt;br /&gt;IELTS must be valid date for at least 1 year.', '&amp;nbsp;', 'You must have the relevant Experience  minimum 8 years.', 'You must have the relevant Experience&amp;nbsp; minimum 8 years.', 'Age maximum 38 years', 'Age maximum 38 years&amp;nbsp;', NULL, NULL, '2020-09-20 23:48:47', '2020-09-23 20:52:52'),
(2, 1, 'denmark@work4u.com.bd', 2, 1, 'ANY', 'DOCTOR IMMIGRATION TO DENMARK', 'DOCTOR IMMIGRATION TO DENMARK', 'MBBS/BDS&amp;nbsp; Degree&amp;nbsp;&lt;br /&gt;&lt;br /&gt;+1 year Internship&lt;br /&gt;&lt;br /&gt;', 'NO IELTS required&amp;nbsp;', '&lt;blockquote&gt;&lt;span style=\"font-size:10.5pt;font-family:\'Arial\',\'sans-serif\';color:#5C5C5C;\"&gt;Please send us scan copy for the following documents&amp;nbsp; to our email : denmark@work4u.com.bd&amp;nbsp;&lt;/span&gt;&lt;br style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;word-spacing:0px;\" /&gt;&lt;br style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;word-spacing:0px;\" /&gt;&lt;span style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;float:none;word-spacing:0px;\"&gt;1) passport copy&lt;/span&gt;&lt;br style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;word-spacing:0px;\" /&gt;&lt;br style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;word-spacing:0px;\" /&gt;&lt;span style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;float:none;word-spacing:0px;\"&gt;2) MBBS certificate&lt;/span&gt;&lt;br style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;word-spacing:0px;\" /&gt;&lt;br style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;word-spacing:0px;\" /&gt;&lt;span style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;float:none;word-spacing:0px;\"&gt;3) MBBS transcript&lt;/span&gt;&lt;br style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;word-spacing:0px;\" /&gt;&lt;br style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;word-spacing:0px;\" /&gt;&lt;span style=\"font-variant-ligatures:normal;font-variant-caps:normal;orphans:2;text-align:start;widows:2;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;float:none;word-spacing:0px;\"&gt;4) BMDC registration&amp;nbsp;&lt;/span&gt;&lt;/blockquote&gt;&lt;blockquote&gt;&lt;span style=\"font-size:10.5pt;font-family:\'Arial\',\'sans-serif\';color:#5C5C5C;\"&gt;&amp;nbsp;5) CV &lt;/span&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;br /&gt;', 'DISADVANTAGES', '&lt;ul style=\"box-sizing:border-box;margin:0px 0px 0px 40px;padding:0px;color:#333333;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;There are Three disadvantages of this position :&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;1. You must have the capability to learn the danish language. Because after going to Denmark you have to learn the Danish Language.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;2. it`s a Lengthy process almost 18 moths time will require to get the visa.So , you have to keep patience until that period.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;3.It`s Expensive . ( if your not financially solvent then this program is not suitable for you)&lt;br /&gt;&lt;/li&gt;&lt;/ul&gt;', 'ADVANTAGES', '&lt;ul style=\"padding:0px;box-sizing:border-box;margin:0px 0px 0px 40px;color:#333333;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;There are Five advantages of this Job&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;1. It`s a sure shot visa. Because it`s a first come first serve basis visa system. It`s not like Point based visa system.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;2. You can take your spouse and children with you . Your spouse will also get full time work permit . Your children education will also free.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;3. There is no IELTS required&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;4. You can apply for Permanent residency ( PR)&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;5. After passing Licensing exam your further specialization degree is fully free.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;The following Notes you have to remember&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;NB : This advertisement is for MBBS/ BDS doctor who wants to build their carrier in Europe and settle down in Europe&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;NB : This program is ideal for couple doctor who wants to be GP/Specialist doctor in Europe.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;Any questions: 01718833391 email : denmark@work4u.com.bd&lt;/li&gt;&lt;/ul&gt;', 'CLIENT RESPONSIBILITY ( AFTER ARRIVED INTO DENMARK)', '&lt;ul style=\"box-sizing:border-box;margin:0px 0px 0px 40px;padding:0px;color:#333333;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;After arrived into Denmark you have to Pass Denmark Medical council Exam.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;There are Two steps to pass the License Exam&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;STEP 1: ( Language Test ) You have to pass the Danish Language exam .There are 3 module of the Language. You have to get score 1st module 10 , second module 7 and third module 7.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;You can do the Language course after going to Denmark. Or , If you want we can arrange Online Danish Language Course ( One to One) . But it\'s totally depends on you .You can learn the Language either going to Denmark or from Bangladesh.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;STEP 2 :( Theoretical) After passing Language exam you can appear into Theoretical Licensing exam .( It\'s Just like Final proof examination ) .But It will be Conduct via Danish Language.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;NB : At first you will get 2 years visa with work permit to clear the Licensing exam .If you can not clear within this 2 year your visa will be extended another 2 years.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;So , you will get 4 years time to clear all the Licensing exam. If you are unable to clear Licensing exam you have to switch into non clinical like health management /Health assistant/Health social worker etc.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;After passing Licensing exam you will get 4,50,000 ( Four Lacs fifty thousand taka)&amp;nbsp;&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;Any Confusion Call : 01718833391&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;NB : Noted that we are not a Volunteer organization or Charity worker so that we will process your paper from our own pocket. This advertisement is for a health professional who wants to move Europe with their full family. So , you have to bare your cost by yourself.&lt;/li&gt;&lt;/ul&gt;', '2020-09-20 23:50:17', '2020-09-29 13:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `job_benefites`
--

CREATE TABLE `job_benefites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_benefites`
--

INSERT INTO `job_benefites` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TA', '2020-09-20 23:07:37', '2020-09-20 23:07:37'),
(2, 'Mobile Bill', '2020-09-20 23:07:52', '2020-09-20 23:07:52'),
(3, 'Pension policy', '2020-09-20 23:08:02', '2020-09-20 23:08:02'),
(4, 'Tour allowance', '2020-09-20 23:08:28', '2020-09-20 23:08:28'),
(5, 'Credit card', '2020-09-20 23:08:44', '2020-09-20 23:08:44'),
(6, 'Medical allowance', '2020-09-20 23:08:57', '2020-09-20 23:08:57'),
(7, 'Performance bonus', '2020-09-20 23:09:12', '2020-09-20 23:09:12'),
(8, 'Profit share', '2020-09-20 23:09:23', '2020-09-20 23:09:23'),
(9, 'Provident fund', '2020-09-20 23:09:41', '2020-09-20 23:09:41'),
(10, 'Weekly 2 holidays', '2020-09-20 23:09:55', '2020-09-20 23:09:55'),
(11, 'Insurance', '2020-09-20 23:10:08', '2020-09-20 23:10:08'),
(12, 'Gratuity', '2020-09-20 23:10:14', '2020-09-20 23:10:14'),
(13, 'Over time allowance', '2020-09-20 23:10:24', '2020-09-20 23:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `job_benefite_mapers`
--

CREATE TABLE `job_benefite_mapers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) DEFAULT NULL,
  `benefite_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_benefite_mapers`
--

INSERT INTO `job_benefite_mapers` (`id`, `job_id`, `benefite_id`, `created_at`, `updated_at`) VALUES
(2, 3, 13, '2020-09-20 23:24:39', '2020-09-20 23:24:39'),
(3, 4, 13, '2020-09-20 23:27:30', '2020-09-20 23:27:30'),
(4, 5, 13, '2020-09-20 23:29:50', '2020-09-20 23:29:50'),
(6, 7, 6, '2020-09-20 23:34:35', '2020-09-20 23:34:35'),
(7, 7, 10, '2020-09-20 23:34:35', '2020-09-20 23:34:35'),
(8, 7, 11, '2020-09-20 23:34:35', '2020-09-20 23:34:35'),
(11, 6, 10, '2020-09-23 20:50:53', '2020-09-23 20:50:53'),
(13, 1, 8, '2020-10-08 13:48:40', '2020-10-08 13:48:40'),
(14, 8, 10, '2020-10-15 14:33:22', '2020-10-15 14:33:22'),
(16, 9, 13, '2020-12-02 11:46:42', '2020-12-02 11:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Agricultural Worker', '2020-09-20 23:11:56', '2020-09-20 23:11:56'),
(2, 'Associate Professor', '2020-09-20 23:12:10', '2020-09-20 23:12:10'),
(3, 'Construction Worker', '2020-09-20 23:12:21', '2020-09-20 23:12:21'),
(4, 'CONSULTANT', '2020-09-20 23:12:28', '2020-09-20 23:12:28'),
(5, 'Doctor', '2020-09-20 23:12:36', '2020-09-20 23:12:36'),
(6, 'Intern Job', '2020-09-20 23:12:50', '2020-09-20 23:12:50'),
(7, 'Java Programmer', '2020-09-20 23:13:00', '2020-09-20 23:13:00'),
(8, 'Labor', '2020-09-20 23:13:09', '2020-09-20 23:13:09'),
(9, 'Lecturer ( Medical College)', '2020-09-20 23:13:27', '2020-09-20 23:13:27'),
(10, 'Medical Officer', '2020-09-20 23:14:26', '2020-09-20 23:14:26'),
(11, 'NURSE', '2020-09-20 23:14:40', '2020-09-20 23:14:40'),
(12, 'Paramedics', '2020-09-20 23:14:48', '2020-09-20 23:14:48'),
(13, 'Specialist Doctor', '2020-09-20 23:15:01', '2020-09-20 23:15:01'),
(14, 'Trainee ( Apprenticeship)', '2020-09-20 23:15:23', '2020-09-20 23:15:23'),
(15, 'Welder', '2020-09-20 23:15:36', '2020-09-20 23:15:36'),
(16, 'Pharmacist', '2020-12-02 11:02:19', '2020-12-02 11:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `job_countries`
--

CREATE TABLE `job_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `flag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_countries`
--

INSERT INTO `job_countries` (`id`, `name`, `is_published`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'CHINA', 1, 'uploads/October_2020/02/1601611194_china.jpg', '2020-09-20 23:15:58', '2020-10-01 22:10:02'),
(2, 'CROTIA', 1, 'uploads/October_2020/02/1601611282_croatia.jpg', '2020-09-20 23:16:05', '2020-10-01 22:01:22'),
(3, 'DENMARK', 1, 'uploads/October_2020/02/1601611352_denmark.jpg', '2020-09-20 23:16:14', '2020-10-01 22:02:32'),
(4, 'Germany', 1, NULL, '2020-09-20 23:16:21', '2020-09-20 23:16:21'),
(5, 'JAPAN', 1, NULL, '2020-09-20 23:16:29', '2020-09-20 23:16:29'),
(6, 'Maldives', 1, NULL, '2020-09-20 23:16:37', '2020-09-20 23:16:37'),
(7, 'POLAND', 1, NULL, '2020-09-20 23:16:45', '2020-09-20 23:16:45'),
(8, 'U.A.E ( United Arab Emirates)', 1, NULL, '2020-09-20 23:16:56', '2020-09-20 23:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `job_employment_status_maps`
--

CREATE TABLE `job_employment_status_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) DEFAULT NULL,
  `status_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_employment_status_maps`
--

INSERT INTO `job_employment_status_maps` (`id`, `job_id`, `status_id`, `created_at`, `updated_at`) VALUES
(4, 4, 1, '2020-09-20 23:27:30', '2020-09-20 23:27:30'),
(5, 5, 1, '2020-09-20 23:29:50', '2020-09-20 23:29:50'),
(7, 7, 1, '2020-09-20 23:34:35', '2020-09-20 23:34:35'),
(10, 6, 1, '2020-09-23 20:50:52', '2020-09-23 20:50:52'),
(11, 1, 1, '2020-09-24 11:13:41', '2020-09-24 11:13:41'),
(12, 1, 3, '2020-09-24 11:13:41', '2020-09-24 11:13:41'),
(13, 1, 1, '2020-10-08 13:48:40', '2020-10-08 13:48:40'),
(14, 1, 3, '2020-10-08 13:48:40', '2020-10-08 13:48:40'),
(15, 8, 1, '2020-10-15 14:33:22', '2020-10-15 14:33:22'),
(17, 9, 1, '2020-12-02 11:46:42', '2020-12-02 11:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `job_offers`
--

CREATE TABLE `job_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'work4u.consultancy@yahoo.com',
  `hot_job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_mid_level` tinyint(1) DEFAULT NULL,
  `is_entry_level` tinyint(1) DEFAULT NULL,
  `is_top_level` tinyint(1) DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_required` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_vacancy` int(11) DEFAULT NULL,
  `deadline_date` date DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `salary_range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_context` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_instruction` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_procedure` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_responsibility` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aditional_salary_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_requirment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_offers`
--

INSERT INTO `job_offers` (`id`, `is_published`, `name`, `submit_email`, `hot_job_title`, `is_mid_level`, `is_entry_level`, `is_top_level`, `company_name`, `experience_required`, `no_of_vacancy`, `deadline_date`, `category_id`, `country_id`, `salary_range`, `job_context`, `special_instruction`, `apply_procedure`, `job_responsibility`, `aditional_salary_info`, `educational_requirment`, `company_information`, `created_at`, `updated_at`) VALUES
(1, 0, 'Paramedics', 'ceo@work4u.com.bd', 'Paramedics', 0, 1, 0, 'Work4u Consultancy Ltd.', 'At least 2 year(s)', 20, '2020-09-30', 12, 6, 'Tk. 80000 - 82000 (Monthly)', '&lt;p&gt;It`s a paramedics jobs in the Maldives&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Please send us the following documents scan copy to our email: mats@work4u.com.bd&lt;/li&gt;&lt;/ol&gt;&lt;ol&gt;&lt;li&gt;CV( must have skype id )&lt;/li&gt;&lt;li&gt;passport copy&amp;nbsp; or voter id&lt;/li&gt;&lt;li&gt;Diploma in MATS certificate&lt;/li&gt;&lt;li&gt;Diploma in MATS mark sheet&lt;/li&gt;&lt;li&gt;Field training certificate&lt;/li&gt;&lt;li&gt;Experience certificate ( must have 2 years experience)&lt;/li&gt;&lt;li&gt;MATS registration certificate from BMDC&lt;/li&gt;&lt;li&gt;One copy passport size photo with white background&lt;/li&gt;&lt;li&gt;SSC marksheet and certificate&lt;/li&gt;&lt;/ol&gt;&lt;ul&gt;&lt;li&gt;Any questions: 01718833391&lt;/li&gt;&lt;li&gt;NB : Please don`t send us scan copy from photocopy or mobile phone picture of the documents.&lt;/li&gt;&lt;/ul&gt;', '&lt;p&gt;Please send us the following documents to our email :&amp;nbsp; mats@work4u.com.bd&lt;/p&gt;&lt;ol&gt;&lt;li&gt;CV( must have skype id )&amp;nbsp;&lt;/li&gt;&lt;li&gt;passport copy ( mandatory)&lt;/li&gt;&lt;li&gt;Diploma in MATS certificate&lt;/li&gt;&lt;li&gt;Diploma in MATS marksheet&amp;nbsp;&lt;/li&gt;&lt;li&gt;Internship certificate ( 9 months + 3 months)&lt;/li&gt;&lt;li&gt;Experience certificate ( must&amp;nbsp; have 2 years experience)&lt;/li&gt;&lt;li&gt;MATS&amp;nbsp; BMDC registration&amp;nbsp;&lt;/li&gt;&lt;li&gt;One copy passport size photo with white background&lt;/li&gt;&lt;li&gt;SSC marksheet&amp;nbsp; and certificate&lt;/li&gt;&lt;/ol&gt;&lt;ul&gt;&lt;li&gt;NB : Without BMDC regurgitation it\'s not possible to process your JOB.&lt;/li&gt;&lt;/ul&gt;', '&lt;h2&gt;&lt;strong&gt;Send your CV to hello@work4u.com.bd&lt;/strong&gt;&lt;/h2&gt;', '&lt;ul&gt;&lt;li&gt;Send your CV to hello@work4u.com.bd&lt;/li&gt;&lt;/ul&gt;', 'Basic Salary&amp;nbsp; $572USD + Service Allowance $162USD +&amp;nbsp; Risk Allowance $194USD + Food Allowance $116USD = $1044USD&amp;nbsp;&lt;br /&gt;&lt;br /&gt;1USD = 85 taka. So you will get = $1044USD * 85 Taka = 88,740 taka ( Eighty seven thousand seven hundred and forty taka only)&amp;nbsp;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;NB : Full free accommodation will be provided.', '&lt;ul&gt;&lt;li&gt;Diploma in Medical in MATS&lt;/li&gt;&lt;li&gt;MATS must have the BMDC registrations.&lt;/li&gt;&lt;li&gt;After 1 year Internship&amp;nbsp; you must have to 2 years experience.&lt;/li&gt;&lt;/ul&gt;', 'Work4u Consultancy Ltd.&lt;br /&gt;Address : work4u Consultancy Ta-131 .Wakil Tower (Lift # 6 , shuru campus) . Gulshan - Badda Link Road ,Gulshan, Dhaka-1212 .Contact: 01913655566&lt;br /&gt;Business : We are the consulting firm for Overseas Job placement / Study and immigration at MALDIVES/ CHINA /RUSSIA/ AUSTRALIA/JAPAN/UAE. to know more about our latest news join our Facebook group&amp;nbsp;&lt;br /&gt;https://www.facebook.com/groups/work4urecruitment/', '2020-09-20 23:20:33', '2020-10-08 13:48:40'),
(3, 1, 'Medical Officer', 'work4u.consultancy@yahoo.com', 'Medical Officer in Maldives', 1, 1, 0, 'Work4u Consultancy Ltd.', 'At least 2 year(s)', 50, '2020-08-24', 5, 6, '150000 - 160000 BDT Monthly', '&lt;ol&gt;&lt;li&gt;&lt;strong&gt;Job is under ministry of&amp;nbsp; Heath.&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;It\'s a 100% Govt Jobs.&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;To get this job you must have to attend the Skype interview with ministry. If you pass the Skype interview then we can process your Jobs. otherwise it\'s not possible to process your jobs.&lt;/strong&gt;&lt;/li&gt;&lt;/ol&gt;', '&lt;p&gt;&lt;strong&gt;Candidate have to send&amp;nbsp; us the scanning copy of your documents to our email: maldives@work4u.com.bd&lt;/strong&gt;&lt;br /&gt;&lt;strong&gt;Any questions: 01718833391&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;&lt;strong&gt;CV ( must include the skype id )&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Passport copy&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;MBBS certificate&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;BMDC registration&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;MBBS transcripts/mark sheet&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;SSC certificate &amp;amp; mark sheet&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Internship certificate&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Experience&amp;nbsp; certificate ( After internship must have 1 year experience )&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;One copy passport size photo with white background.&lt;/strong&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;strong&gt;NB : SInce the Interview will conducted via skype so plz don\'t forget to incule skype id into the CV.&lt;/strong&gt;&lt;/p&gt;', '&lt;p&gt;&lt;strong&gt;Candidate have to send&amp;nbsp; us the scanning copy of your documents to our email: maldives@work4u.com.bd&lt;/strong&gt;&lt;br /&gt;&lt;strong&gt;Any questions: 01718833391&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;&lt;strong&gt;CV ( must include the skype id )&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Passport copy&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;MBBS certificate&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;BMDC registration&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;MBBS transcripts/mark sheet&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;SSC certificate &amp;amp; mark sheet&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Internship certificate&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Experience&amp;nbsp; certificate ( After internship must have 1-year experience )&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;One copy passport size photo with white background.&lt;/strong&gt;&lt;/li&gt;&lt;/ol&gt;', '&lt;ol&gt;&lt;li&gt;&lt;strong&gt;Candidate from any medical college is accepted.&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;But you must have one 1 year experience after Internship.&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;weekly duty 48 hours. After 48 hours every hour will count as a overtime. overtime policy is Basic&amp;nbsp; 1.25% /per hour in week day and 1.5% in weekend.&lt;/strong&gt;&lt;/li&gt;&lt;/ol&gt;', '&lt;p&gt;&lt;strong&gt;BASIC 1000 USD + Service allowance is 500USD + 300USD overtime + 150 USD food allowance =1950 USD&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;1USD = 85 taka , so you will get 85 *1950USD = 1,65,750 taka.&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;NB : Full free accommodation will be provided.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Airfare : Airfare will reimburse by ministry 200USD. But your family Airafre they will not provide.&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;You can take your family member with you. In that case you have to expense&amp;nbsp; 350USD per person.&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;be noted that you have to staty 7 days in Male city for joining . In this 7 days your medical examination cost ( 80USD ) + Registration Cost (1000MVR)&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Food and accommodation cost must have to bare by you. You will get back all the expense from the ministry with the first month salary. So,&amp;nbsp; our suggestion is&amp;nbsp;to prepare your self according to our guideline.&amp;nbsp;&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;', '&lt;strong&gt;Bachelor of Medicine and Bachelor of Surgery(MBBS)&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;what\'s app +8801913655566&lt;/strong&gt;', 'Work4u Consultancy Ltd.&lt;br /&gt;Address : work4u Consultancy Ta-131 .Wakil Tower (Lift # 6 , shuru campus) . Gulshan - Badda Link Road ,Gulshan, Dhaka-1212 .Contact: 01718833391&lt;br /&gt;Business : We are the consulting firm for Overseas Job placement / Study and immigration at MALDIVES/ CHINA /RUSSIA/ AUSTRALIA/JAPAN/UAE. to know more about our latest news join our Facebook group&lt;br /&gt;https://www.facebook.com/groups/work4urecruitment/', '2020-09-20 23:24:39', '2020-09-20 23:24:39'),
(4, 1, 'Construction Worker', 'work4u.consultancy@yahoo.com', 'Construction Worker Needed for Japan', 1, 1, 0, 'Work4u Consultancy Ltd.', 'At least 2 year(s)', 100, '2019-12-31', 3, 5, '100000', '&lt;ul&gt;&lt;li&gt;It\'s a construction worker job in Japan&lt;/li&gt;&lt;li&gt;Minimum SSC pass is required&lt;/li&gt;&lt;li&gt;Age maximum 30 years&lt;/li&gt;&lt;/ul&gt;', '&lt;ul&gt;&lt;li&gt;You must Need to the Japanese Language&lt;/li&gt;&lt;li&gt;You must have the JLPT 5 or NAT 5 certificate&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;NB : Be noted that without knowing Japanese Language it\'s not possible to do the placement for you in Japan.&lt;/p&gt;', 'Please send us your documents scan copy to our email :&amp;nbsp;&lt;strong&gt;Japan.labor@work4u.com.bd&lt;/strong&gt;', 'It\'s a construction worker jobs in japan.', 'You will get the free accommodation&amp;nbsp;', 'Minimum SSC pass&amp;nbsp;', 'Please send us your documents scan copy to our email :&amp;nbsp;&lt;strong&gt;Japan.labor@work4u.com.bd.&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Documents required : 1) CV 2) passport 3) SSC certificate 5) JLPT5 or NAT 5 certificate&lt;/strong&gt;', '2020-09-20 23:27:30', '2020-09-20 23:27:30'),
(5, 1, 'Medical Officer Needed for UAE', 'work4u.consultancy@yahoo.com', 'Medical Officer Needed for UAE', 1, 1, 0, 'Work4u Consultancy Ltd.', 'At least 2 year(s)', 10, '2020-01-31', 10, 8, '2,20,000 Taka', '&lt;ul&gt;&lt;li&gt;It\'s a Medical officer Jobs in United Arab Emirates ( U.A.E)&amp;nbsp;&lt;/li&gt;&lt;li&gt;It\'s a private hospital or Clinic Jobs.&lt;/li&gt;&lt;li&gt;NB : it\'s not Govt Jobs&lt;/li&gt;&lt;/ul&gt;', '&lt;strong&gt;After&amp;nbsp; Internship 2 years experience is mandatory&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;NB : Without proper experience&amp;nbsp; it\'s not possible&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;To get the job you have to&amp;nbsp; pass the Licensing exam in Bangladesh. We will&amp;nbsp; provide you the previous 5 years exam questions paper.&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;From that questions paper you will get an idea&amp;nbsp; what the questions paper will be. We will also provide you the book for the exam.&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;NB : noted that without passing Licensing Exam it\'s not possible to arrange the job offer for U.A.E&lt;/strong&gt;', '&lt;p&gt;Please send the following documents scan copy to our email : uae@work4u.com.bd&amp;nbsp;&lt;br /&gt;Any questions : 01718833391.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;CV ( Must include the details Experience)&lt;/li&gt;&lt;li&gt;MBBS certificate&lt;/li&gt;&lt;li&gt;Internship certificate&lt;/li&gt;&lt;li&gt;Passport copy&lt;/li&gt;&lt;li&gt;BMDC registration&lt;/li&gt;&lt;/ol&gt;', 'Your Job role as&amp;nbsp; General Physician in United Arab Emirates( U.A.E)&amp;nbsp;&amp;nbsp;', 'Full furnished accommodation will be provided&amp;nbsp;&lt;br /&gt;&lt;br /&gt;You can take your family with you.', 'MBBS degree .&lt;br /&gt;&lt;br /&gt;After Internship completion&amp;nbsp; 2 years experience is mandatory', 'Work4u Consultancy Ltd.&lt;br /&gt;Address : work4u Consultancy Ta-131 .Wakil Tower (Lift # 6 , shuru campus) . Gulshan - Badda Link Road ,Gulshan, Dhaka-1212 .Contact: 01913655566&lt;br /&gt;Business : We are the consulting firm for Overseas Job placement / Study and immigration at MALDIVES/ CHINA /RUSSIA/ AUSTRALIA/JAPAN/UAE. to know more about our latest news join our Facebook group&amp;nbsp;&lt;br /&gt;https://www.facebook.com/groups/work4urecruitment/', '2020-09-20 23:29:50', '2020-09-20 23:29:50'),
(6, 1, 'Medical College Lecturer for CHINA', 'work4u.consultancy@yahoo.com', 'Medical College Lecturer for CHINA', 0, 1, 0, 'Work4u Consultancy Ltd.', 'At least 2 year(s)', 5, '2020-01-31', 9, 1, '1,20,000 Taka', 'It\'s a Medical college Lecturer Job in china.&lt;br /&gt;&lt;br /&gt;You have to teach International Students to the medical college.', 'you can take full family with you.&lt;br /&gt;&lt;br /&gt;If you are a couple of doctor then it\'s possible to arrange the job into the same medical college.&lt;br /&gt;&lt;br /&gt;But your Spouse must have a masters degree after MBBS .', '&lt;p&gt;you have to send the following documents scan copy to our email : work4u.consultancy@yahoo.com&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Any questions: 01718833391&lt;/p&gt;&lt;ol&gt;&lt;li&gt;CV&lt;/li&gt;&lt;li&gt;Passport copy&lt;/li&gt;&lt;li&gt;MBBS certificate&lt;/li&gt;&lt;li&gt;MBBS trasncript&lt;/li&gt;&lt;li&gt;Internship certificate&lt;/li&gt;&lt;li&gt;Masters certificate&lt;/li&gt;&lt;li&gt;Masters marksheet&lt;/li&gt;&lt;li&gt;BMDC registration&lt;/li&gt;&lt;li&gt;One copy passport size photo with a white background.&lt;/li&gt;&lt;/ol&gt;', 'You have to deliver lecture to the university for international MBBS students .', 'you will get fully furnished accommodation free of cost.', 'MBBS Degree Plus you must have a master\'s degree in Any discipline like Anatomy or physiology or Biochemistry etc.&lt;br /&gt;&lt;br /&gt;NB :&amp;nbsp; Without a masters degree, it\'s not possible to get a work permit in china.', 'Work4u Consultancy Ltd.&lt;br /&gt;Address : work4u Consultancy Ta-131 .Wakil Tower (Lift # 6 , shuru campus) . Gulshan - Badda Link Road ,Gulshan, Dhaka-1212 .Contact: 01913655566&lt;br /&gt;Business : We are the consulting firm for Overseas Job placement / Study and immigration at MALDIVES/ CHINA /RUSSIA/ AUSTRALIA/JAPAN/UAE. to know more about our latest news join our Facebook group&amp;nbsp;&lt;br /&gt;https://www.facebook.com/groups/work4urecruitment/', '2020-09-20 23:32:01', '2020-09-23 20:50:52'),
(7, 1, 'NURSE NEEDED FOR CROTIA', 'work4u.consultancy@yahoo.com', 'NURSE NEEDED FOR CROTIA', 0, 1, 0, 'Work4u Consultancy Ltd.', 'At least 2 year(s)', 50, '2020-07-31', 11, 2, '1,20,000 Taka', '&lt;ol&gt;&lt;li&gt;It\'s Hospital Nurse Job in Croatia.&lt;/li&gt;&lt;li&gt;You have to go to Delhi for visa stamping in the Croatian embassy if the embassy wants to take the Interview with you ( We will arrange the embassy appointment in Croatia ).&lt;/li&gt;&lt;li&gt;NB: We will accept both Male and female . But for female nurse, we suggest you discuss with your family members first .&lt;/li&gt;&lt;/ol&gt;', '&lt;p&gt;&lt;strong&gt;Employment Status&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Full-time&lt;/li&gt;&lt;li&gt;1 year&lt;/li&gt;&lt;li&gt;This contract is renewable&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Skill Type&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;skilled&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Experience Requirements&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;At least 1 year(s)&lt;/li&gt;&lt;li&gt;The applicants should have experience in the following area(s):&lt;/li&gt;&lt;/ul&gt;&lt;ol&gt;&lt;li&gt;Hospital Nurse&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;strong&gt;Additional Requirements&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Age at most 45 years&lt;/li&gt;&lt;li&gt;Duty Times: 48 Hours/ weekly.&lt;/li&gt;&lt;/ul&gt;', '&lt;p&gt;you have to send the following documents scan copy to our email : work4u.consultancy@yahoo.com&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Any questions: 01718833391&lt;/p&gt;&lt;ol&gt;&lt;li&gt;CV&lt;/li&gt;&lt;li&gt;Bachelor Degree of Nursing&lt;/li&gt;&lt;li&gt;Bachelor degree marksheet&lt;/li&gt;&lt;li&gt;Internship certificate&lt;/li&gt;&lt;li&gt;Experience certificate&lt;/li&gt;&lt;li&gt;Nursing council certificate&lt;/li&gt;&lt;li&gt;One copy passport size photograph with white background.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;strong&gt;NB : without passport don;t apply here.It will be a waste of your time.&lt;/strong&gt;&lt;/p&gt;', '&lt;ul&gt;&lt;li&gt;It\'s a Hospital Nurse job in Croatia.&lt;/li&gt;&lt;li&gt;There is a 3 months probation period of this job. Hospital will arrange the training on this period. You must be able to follow the instructions of the hospital in that period.&lt;/li&gt;&lt;li&gt;So, If you are not good in English we are suggesting you not apply in here. It\'s a International Job so you have to act accordingly&lt;/li&gt;&lt;/ul&gt;', '&lt;ul&gt;&lt;li&gt;TK.120000 - 150000 (Monthly)&lt;/li&gt;&lt;li&gt;Accommodation will be provided. First 3 months you will get 1,20,000( one lacs twenty thousand taka ) . After the probation period you will get 1,50,000( One lacs fifty thousand taka ) .You can not take your family during this probation period. After completing your probation you can take your family with you.&lt;/li&gt;&lt;/ul&gt;', '&lt;ul&gt;&lt;li&gt;Bachelor of Science (BSc) in Nursing&lt;/li&gt;&lt;/ul&gt;', 'Work4u Consultancy Ltd.&lt;br /&gt;Address : work4u Consultancy Ta-131 .Wakil Tower (Lift # 6 , shuru campus) . Gulshan - Badda Link Road ,Gulshan, Dhaka-1212 .Contact: 01913655566&lt;br /&gt;Business : We are the consulting firm for Overseas Job placement / Study and immigration at MALDIVES/ CHINA /RUSSIA/ AUSTRALIA/JAPAN/UAE. to know more about our latest news join our Facebook group&amp;nbsp;&lt;br /&gt;https://www.facebook.com/groups/work4urecruitment/', '2020-09-20 23:34:35', '2020-09-20 23:34:35'),
(8, 1, 'Agricultural Intern Needed  in Denmark', 'work4u.consultancy@yahoo.com', 'Agricultural Intern Needed  in Denmark', 0, 1, 0, 'Work4u Consultancy Ltd.', 'N/A', 50, '2020-12-31', 1, 3, '1,50,000 Taka', '&lt;ul&gt;&lt;li&gt;It\'s a Intern&amp;nbsp; Job in agricultural sector&amp;nbsp; Denmark&lt;/li&gt;&lt;li&gt;You must be a running students in Agricultural sector&amp;nbsp;&lt;/li&gt;&lt;li&gt;This job is only for agricultural students .&lt;/li&gt;&lt;li&gt;Your age maximum can be 27 years .&lt;/li&gt;&lt;li&gt;After 27 years age is not acceptable.&lt;/li&gt;&lt;/ul&gt;', '&lt;ul&gt;&lt;li&gt;You must need the IELTS score minimum 4.5 .&lt;/li&gt;&lt;li&gt;Without IELTS score it\'s not possible to process your paper.&lt;/li&gt;&lt;li&gt;So , If you really interested please do the IELTS first .&lt;/li&gt;&lt;/ul&gt;', '&lt;p&gt;you have to send the following documents scan copy to our email : agriculture@work4u.com.bd&amp;nbsp;&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Any questions: 01718833391&lt;/p&gt;&lt;ol&gt;&lt;li&gt;CV( Format will provide by us )&lt;/li&gt;&lt;li&gt;Passport ( Full copy with cover page )&amp;nbsp;&lt;/li&gt;&lt;li&gt;IELTS score copy&amp;nbsp;&lt;/li&gt;&lt;li&gt;Autobiography ( Motivational Letter )&lt;/li&gt;&lt;li&gt;Academic transcript&lt;/li&gt;&lt;li&gt;Students ID card&lt;/li&gt;&lt;li&gt;Reference Letter from your university teacher.&lt;/li&gt;&lt;li&gt;Medical Check up report ( After selection )&amp;nbsp;&lt;/li&gt;&lt;li&gt;Police clearance certificate ( After selection )&amp;nbsp;&lt;/li&gt;&lt;li&gt;Video presentation about your self ( 1-2 minutes)&lt;/li&gt;&lt;li&gt;One copy passport size photo With white background&lt;/li&gt;&lt;li&gt;Agreement copy ( We will provide it )&lt;/li&gt;&lt;/ol&gt;&lt;strong&gt;NB : after selection you have to learn driving and before flying you have to submit driving licensee copy&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Any questions: 01718833391&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;email : australia@work4u.com.bd&lt;/strong&gt;', '&lt;p&gt;&lt;strong&gt;Your Job responsibility will be into the following category&amp;nbsp; section in agriculture&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Horticulture&lt;/li&gt;&lt;li&gt;Dairy&amp;nbsp; Firm&amp;nbsp;&lt;/li&gt;&lt;li&gt;Poultry&lt;/li&gt;&lt;li&gt;Field corp&lt;/li&gt;&lt;li&gt;Pig breeding farm&lt;/li&gt;&lt;/ol&gt;', '&lt;ul&gt;&lt;li&gt;You will get 1500 EURO ( 1,50,000 thousand taka for first 6 months )&lt;/li&gt;&lt;li&gt;After 6 months you will get 1700 EURO ( 1,70,000 One lacs seventy thousand taka after six months )&amp;nbsp;&lt;/li&gt;&lt;/ul&gt;', '&lt;p&gt;&lt;strong&gt;You must be the students any one of the following subjects&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Diploma in Engineering in Agriculture( running students )&lt;/li&gt;&lt;li&gt;BSC in Agriculture ( running students)&lt;/li&gt;&lt;li&gt;BSC in Animal Husbandry (running&amp;nbsp; students)&lt;/li&gt;&lt;li&gt;BSC in Veterinary&amp;nbsp; &amp;nbsp;Medicine ( running students)&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;NB:&amp;nbsp; You must be running students into the agricultural sector.&lt;/strong&gt;&lt;/p&gt;', 'Work4u Consultancy Ltd.&lt;br /&gt;Address : work4u Consultancy Ta-131 .Wakil Tower (Lift # 6 , shuru campus) . Gulshan - Badda Link Road ,Gulshan, Dhaka-1212 .Contact: 01913655566&lt;br /&gt;Business : We are the consulting firm for Overseas Job placement / Study and immigration at MALDIVES/ CHINA /RUSSIA/ AUSTRALIA/JAPAN/UAE. to know more about our latest news join our Facebook group&amp;nbsp;&lt;br /&gt;https://www.facebook.com/groups/work4urecruitment/', '2020-09-20 23:36:32', '2020-10-15 14:33:22'),
(9, 1, 'Pharmacist Needed for U.A.E', 'pharmacist@work4u.com.bd', 'Pharmacist Needed for U.A.E', 0, 1, 0, 'work For You Consultancy', '2 years', 100, '2020-12-27', 16, 8, '120000', '&lt;ul style=\"box-sizing:border-box;margin:0px 0px 0px 40px;padding:0px;color:#333333;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;Job is in U.A.E private clinic/hospital&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;To get the Job offer You must have to Achieve the practicing License For United Arab Emirates(U.A.E) .we can arrange it from Bangladesh.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;There are 3 steps to get the Licensee&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;STEP 1 : You have to do the Primary source verification ( PSV ). We will arrange it .&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;NB : For Step 1 PSV + Study materials cost is : 80,000( Eighty thousand taka). We will give you the books and 1500 Questions bank with answer.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;STEP 2 : You have to pass the Licencing exam .The Exam will held in Bangladesh . We will give you guidebook and online question bank. If you follow that you will pass for sure.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;NB : Exam cost is 50,000 ( Fifty thousand taka) . There will be 150 MCQ questions. You have to get 90 marks. Exam Duration : 3 hours. Exam will be held in Dhaka. Exam&amp;nbsp; &amp;nbsp;Goes on Every months&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;STEP 3 : After passing exam you will get License registration.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;NB : After getting Licensee you have to pay 50,000 ( Fifty thousand taka) &lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;STEP 4 : After getting License number you are entitled to get the Job.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;After getting Job offer you have to pay 2,00,000 ( Two lacs taka ) .&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;NB : Be noted that without Licensing it`s not possible to arrange job in U.A.E&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;For UAE Full Licencing will be completed from Bangladesh.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;Total cost to get the job including License is : 3,80,000 ( Three lacs eighty thousand taka ) &lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;Any questions : 01307168889 email : pharmacist@work4u.com.bd&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;To know the details and update latest job offer please join our facebook group&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;https://www.facebook.com/groups/work4urecruitment/&lt;br /&gt;&lt;/li&gt;&lt;/ul&gt;', '&lt;div class=\"rba\" style=\"box-sizing:border-box;color:#5c5c5c;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;&lt;div class=\"s-sug-txt\" style=\"box-sizing:border-box;margin:20px 0px 0px;\"&gt;&lt;div class=\"instruction-details\" style=\"box-sizing:border-box;padding:0px;margin:0px;\"&gt;&lt;p style=\"text-align:left;\"&gt;It\'s a Clinical Pharmacist jobs in U.A.E .&lt;/p&gt;&lt;p style=\"text-align:left;\"&gt;you must have to pass the exam for U.A.E .&lt;/p&gt;&lt;p style=\"text-align:left;\"&gt;If you can not pass the exam is in here we can not do anything for you but&lt;/p&gt;&lt;p style=\"text-align:left;\"&gt;we will give you guidebook and sample exam questions pattern where you will get an idea about exam.&lt;/p&gt;&lt;p style=\"text-align:left;\"&gt;Any questions : 01307168889&lt;/p&gt;&lt;p style=\"text-align:left;\"&gt;email : pharmacist@work4u.com.bd&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;', '&lt;div class=\"rba\" style=\"box-sizing:border-box;color:#5c5c5c;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;text-align:center;background-color:#ffffff;\"&gt;&lt;div class=\"s-sug-txt\" style=\"box-sizing:border-box;margin:20px 0px 0px;\"&gt;&lt;div class=\"instruction-details\" style=\"box-sizing:border-box;padding:0px;margin:0px;\"&gt;&lt;p&gt;Please send us the scan copy of the following documents to our email : pharmacist@work4u.com.bd .&lt;/p&gt;&lt;p&gt;1) CV&lt;/p&gt;&lt;p&gt;2) passport copy&lt;/p&gt;&lt;p&gt;3) Diploma/BSC certificate&lt;/p&gt;&lt;p&gt;4) Diploma/Bsc mark sheet&lt;/p&gt;&lt;p&gt;5) Pharmacy council registration&lt;/p&gt;&lt;p&gt;6) Work experience certificate&lt;/p&gt;&lt;p&gt;7) one copy passport size photo with white background.&lt;/p&gt;&lt;p&gt;Any questions : 01307168889&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=\"apto\" style=\"box-sizing:border-box;color:#5c5c5c;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;text-align:center;background-color:#ffffff;\"&gt;&lt;h2 class=\"appprocedure\" style=\"font-size:14px;box-sizing:border-box;font-family:inherit;line-height:1.1;color:#333333;margin:0px;padding:0px;\"&gt;&lt;br /&gt;&lt;/h2&gt;&lt;/div&gt;', '&lt;ul style=\"box-sizing:border-box;margin:0px 0px 0px 40px;padding:0px;color:#333333;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;It\'s a pharmacist job in a private clinic or hospital&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;NB : Be noted that this is not Industrial Pharmacist Job. We don\'t have any Industrial pharmacist Job.&lt;/li&gt;&lt;/ul&gt;', '&lt;ul style=\"box-sizing:border-box;margin:0px 0px 0px 40px;padding:0px;color:#333333;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;Accommodation will be free.&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;For a Diploma Degree holder salary will be minimum 1,00,000(One lacs taka ) .&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;For Bsc Degree holder salary will be minimum 1,20,000( one lacs twenty thousand taka )&lt;/li&gt;&lt;/ul&gt;', '&lt;ul style=\"box-sizing:border-box;margin:0px 0px 0px 40px;padding:0px;color:#333333;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;Diploma in Medical in Pharmacy, or&amp;nbsp;&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;Bachelor of Science (BSc) in Pharmacy&lt;/li&gt;&lt;li style=\"box-sizing:border-box;color:#5c5c5c;line-height:24px;padding-bottom:5px;\"&gt;After completing a Diploma or Bsc you must need 2 years of experience.&lt;/li&gt;&lt;/ul&gt;', '&lt;p&gt;&lt;span style=\"box-sizing:border-box;display:block;color:#5c5c5c;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;Work4u Consultancy Ltd.&lt;/span&gt;&lt;span style=\"box-sizing:border-box;display:block;color:#5c5c5c;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;Address : work4u Consultancy Ta-131 .Wakil Tower (Lift # 6 , shuru campus) . &lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"box-sizing:border-box;display:block;color:#5c5c5c;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;Gulshan - Badda Link Road ,Gulshan, Dhaka-1212 .&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"box-sizing:border-box;display:block;color:#5c5c5c;font-family:Arial, Helvetica, sans-serif, solaimanlipi;font-size:14px;background-color:#ffffff;\"&gt;Contact: 01307168889&lt;/span&gt;&lt;/p&gt;', '2020-12-02 11:39:44', '2020-12-02 11:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `job_offer_applications`
--

CREATE TABLE `job_offer_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `seeker_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seeker_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_offer_applications`
--

INSERT INTO `job_offer_applications` (`id`, `post_id`, `seeker_name`, `seeker_email`, `application_subject`, `cv_url`, `application_message`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 6, 'Md.Shohanur Rahman', 'test@gmail.com', 'Study Application for : Medical College Lecturer for CHINA', '/uploads/September_2020/23/1600879774_cv-of-md-shohanur-rahman.pdf', 'Our success is driven by the highest quality of customer service. We can meet the requirements even of the whimsical clients; there are no complex tasks for us! Our company is focused on different areas. We are guided by the equity principle. But equity approach is not only right in principle. It is right in practice. This means, in practice, doing a better job of mapping the areas of greatest need – looking beyond averages and disaggregating the data so as better to target the hardest to reach.', 0, '2020-09-23 20:49:34', '2020-09-23 20:49:34'),
(2, 1, 'Sheikh Faisol Ahmed', 'work4u.consultancy@yahoo.com', 'Study Application for : Paramedics', '/uploads/September_2020/24/1600931724_TAX AND VAT.pdf', 'Thistest', 1, '2020-09-24 11:15:24', '2020-09-24 11:16:51'),
(3, 7, 'Md.Mejbah Uddin Jewel', 'Jewel.mejbah@yahoo.com', 'Study Application for : NURSE NEEDED FOR CROTIA', '/uploads/November_2020/26/1606396869_CV_TEMPLATE_nurse.3.pdf', 'I am interested to work in Crotia. I need to know that the Embassy of Crotia in India (Delhi is open or, not in this Covid-19 situation.', 0, '2020-11-26 18:21:09', '2020-11-26 18:21:09'),
(4, 5, 'Dr.MD.MIZANUR RAHMAN', 'mizan768@gmail.com', 'Study Application for : Medical Officer Needed for UAE', '/uploads/January_2021/07/1610014985_Dr  . Mizan CV Update.docx', 'urgently need.', 0, '2021-01-07 15:23:05', '2021-01-07 15:23:05'),
(5, 5, 'Dr.MD.MIZANUR RAHMAN', 'mizan768@gmail.com', 'Study Application for : Medical Officer Needed for UAE', '/uploads/January_2021/07/1610014989_Dr  . Mizan CV Update.docx', 'urgently need.', 0, '2021-01-07 15:23:09', '2021-01-07 15:23:09'),
(6, 6, 'Dr.MD.MIZANUR RAHMAN', 'mizan768@gmail.com', 'Study Application for : Medical College Lecturer for CHINA', '/uploads/January_2021/07/1610015041_Dr  . Mizan CV Update.docx', 'urgent need', 0, '2021-01-07 15:24:01', '2021-01-07 15:24:01'),
(7, 3, 'Dr.MD.MIZANUR RAHMAN', 'mizan768@gmail.com', 'Study Application for : Medical Officer', '/uploads/January_2021/07/1610015131_Dr  . Mizan CV Update.docx', 'applied several times and interviewed', 0, '2021-01-07 15:25:31', '2021-01-07 15:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `job_offer_comments`
--

CREATE TABLE `job_offer_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `auth_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_offer_comments`
--

INSERT INTO `job_offer_comments` (`id`, `user_id`, `comment_id`, `post_id`, `auth_name`, `auth_email`, `comment_text`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 7, 'Md.Mejbah Uddin Jewel', 'Jewelmejbah80@gmail.com', 'In this pandemic situation how the clint travel to India for visa. Because the corona situation in India is not so good.', NULL, '2020-09-28 20:23:18', '2020-09-28 20:23:18'),
(2, NULL, NULL, 1, 'Shosan', 'md.rofiqul.islam294@gmail.com', 'ei circular er last date kobe.', NULL, '2020-10-05 07:48:34', '2020-10-05 07:48:34'),
(3, NULL, NULL, 5, 'nur eman', 'emannur155@gmzaill.com', 'dear sir, I am an engineer nur eman .  any GCC country job opportunity please inform me. \r\nmy cell 01400391291', NULL, '2020-10-11 15:31:46', '2020-10-11 15:31:46'),
(4, NULL, NULL, 7, 'Md.Mejbah Uddin Jewel', 'Jewel.mejbah@yahoo.com', 'I am interested. I need to know the embassy of Crotia is open or, not in this Covid situations.', NULL, '2020-11-26 17:49:25', '2020-11-26 17:49:25'),
(5, NULL, NULL, 9, 'Md. Mizanur Rahman', 'mdmrn.ph@gmail.com', 'Can  freshly graduated person apply for this job?', NULL, '2020-12-02 23:48:23', '2020-12-02 23:48:23'),
(6, NULL, NULL, 7, 'Tarek Aziz', 'tarekaziztamjid12@gmail.com', 'Good morning sir/mem.\r\nMy name is Tarek Aziz. I am from Noakhali,Banglades.  I am a registered Medical Assistant under Bangladesh Medical & Dental Council(BMDC). I completed my medical diploma degree from NPC-MATS, Noakhali.. \r\nNow I am working as a Medical Assistant at American Specialized Hospital,Noakhali from last 2 years....! \r\nCan apply for this post...???', NULL, '2020-12-11 10:01:20', '2020-12-11 10:01:20'),
(7, NULL, NULL, 7, 'inquirm', 'keypesync@margel.xyz', 'Can You Buy Diflucan Online  spusercusa <a href=https://bansocialism.com/>safe cialis online</a> Drigillino Uses Of Amoxicillin Trihydrate Bp', NULL, '2020-12-18 03:45:46', '2020-12-18 03:45:46'),
(8, NULL, NULL, 9, 'Md.Al Amin prodhania', 'hosenfarhad9@gmail.com', 'Interested', NULL, '2020-12-21 10:18:06', '2020-12-21 10:18:06'),
(9, NULL, NULL, 4, 'md.muzibur rahman', 'tufanbabu9@gmail.com', 'sir i intestate for japan work visa , i\'m MBS PASS & I HAVE LAVEL 5 PASS , HOW TO APPLY TALL ME PLZ . 01613666644', NULL, '2021-01-02 08:22:16', '2021-01-02 08:22:16'),
(10, NULL, NULL, 1, 'Sheikh sharif', 'knock.sharif95@gmail.com', 'Cost koto', NULL, '2021-01-05 14:03:43', '2021-01-05 14:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(60, '2014_10_12_000000_create_users_table', 1),
(61, '2014_10_12_100000_create_password_resets_table', 1),
(62, '2019_08_19_000000_create_failed_jobs_table', 1),
(63, '2020_07_28_165845_create_study_countries_table', 1),
(64, '2020_07_28_200609_create_study_offers_table', 1),
(65, '2020_07_29_064107_create_study_offer_comments_table', 1),
(66, '2020_07_30_091854_create_study_offer_applications_table', 1),
(67, '2020_07_31_095640_create_user_emails_table', 1),
(68, '2020_08_02_060142_create_notifications_table', 1),
(69, '2020_08_02_075247_create_job_countries_table', 1),
(70, '2020_08_02_100736_create_job_benefites_table', 1),
(71, '2020_08_02_103716_create_employment_statuses_table', 1),
(72, '2020_08_02_105702_create_job_categories_table', 1),
(73, '2020_08_02_110631_create_job_offers_table', 1),
(74, '2020_08_02_160315_create_job_employment_status_maps_table', 1),
(75, '2020_08_02_160505_create_job_benefite_mapers_table', 1),
(76, '2020_08_04_054349_create_job_offer_comments_table', 1),
(77, '2020_08_04_062551_create_job_offer_applications_table', 1),
(78, '2020_08_04_102137_create_web_site_settings_table', 1),
(79, '2020_08_14_040617_create_immigration_countries_table', 1),
(80, '2020_08_14_042739_create_immigration_categories_table', 1),
(81, '2020_08_14_045849_create_immigration_offers_table', 1),
(82, '2020_08_15_042541_create_immigration_comments_table', 1),
(83, '2020_08_18_104606_create_immigration_applications_table', 1),
(84, '2020_08_18_114651_create_s_m_s_records_table', 1),
(85, '2020_08_21_050329_create_f_a_q_questions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `is_seen` tinyint(1) DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `post_id`, `is_seen`, `from`, `type`, `title`, `subject`, `created_at`, `updated_at`) VALUES
(1, 6, 0, 'study', 'application', 'New Application From Study', 'Study Application for : Medical College Lecturer for CHINA', '2020-09-23 20:49:34', '2020-09-23 20:49:34'),
(2, 1, 0, 'study', 'application', 'New Application From Study', 'Study Application for : Approbation Program for Medical Officer in Germany', '2020-09-23 20:52:01', '2020-09-23 20:52:01'),
(3, 1, 0, 'study', 'application', 'New Application From Immigration', 'Immigration Application for : Immigration to Australia', '2020-09-23 20:53:51', '2020-09-23 20:53:51'),
(4, 1, 0, 'study', 'application', 'New Application From Study', 'Study Application for : Paramedics', '2020-09-24 11:15:24', '2020-09-24 11:15:24'),
(5, 7, 0, 'study', 'comment', 'New Comment From Study', 'Md.Mejbah Uddin Jewel', '2020-09-28 20:23:18', '2020-09-28 20:23:18'),
(6, 1, 0, 'study', 'comment', 'New Comment From Study', 'Shosan', '2020-10-05 07:48:34', '2020-10-05 07:48:34'),
(7, 5, 0, 'study', 'comment', 'New Comment From Study', 'nur eman', '2020-10-11 15:31:46', '2020-10-11 15:31:46'),
(8, 1, 0, 'immigration', 'comment', 'New Comment From Immigration', 'nur eman', '2020-10-11 15:45:13', '2020-10-11 15:45:13'),
(9, 4, 0, 'study', 'comment', 'New Comment From Study', 'Himel', '2020-10-20 10:50:00', '2020-10-20 10:50:00'),
(10, 7, 0, 'study', 'comment', 'New Comment From Study', 'Md.Mejbah Uddin Jewel', '2020-11-26 17:49:25', '2020-11-26 17:49:25'),
(11, 7, 0, 'study', 'application', 'New Application From Study', 'Study Application for : NURSE NEEDED FOR CROTIA', '2020-11-26 18:21:09', '2020-11-26 18:21:09'),
(12, 9, 0, 'study', 'comment', 'New Comment From Study', 'Md. Mizanur Rahman', '2020-12-02 23:48:23', '2020-12-02 23:48:23'),
(13, 2, 0, 'immigration', 'comment', 'New Comment From Immigration', 'Dr Ahmed Syed', '2020-12-07 12:48:35', '2020-12-07 12:48:35'),
(14, 7, 0, 'study', 'comment', 'New Comment From Study', 'Tarek Aziz', '2020-12-11 10:01:20', '2020-12-11 10:01:20'),
(15, 2, 0, 'immigration', 'comment', 'New Comment From Immigration', 'Srijana Bhattarai', '2020-12-13 13:34:00', '2020-12-13 13:34:00'),
(16, 7, 0, 'study', 'comment', 'New Comment From Study', 'inquirm', '2020-12-18 03:45:46', '2020-12-18 03:45:46'),
(17, 9, 0, 'study', 'comment', 'New Comment From Study', 'Md.Al Amin prodhania', '2020-12-21 10:18:06', '2020-12-21 10:18:06'),
(18, 4, 0, 'study', 'comment', 'New Comment From Study', 'md.muzibur rahman', '2021-01-02 08:22:16', '2021-01-02 08:22:16'),
(19, 1, 0, 'study', 'comment', 'New Comment From Study', 'Sheikh sharif', '2021-01-05 14:03:43', '2021-01-05 14:03:43'),
(20, 5, 0, 'study', 'application', 'New Application From Study', 'Study Application for : Medical Officer Needed for UAE', '2021-01-07 15:23:05', '2021-01-07 15:23:05'),
(21, 5, 0, 'study', 'application', 'New Application From Study', 'Study Application for : Medical Officer Needed for UAE', '2021-01-07 15:23:09', '2021-01-07 15:23:09'),
(22, 6, 0, 'study', 'application', 'New Application From Study', 'Study Application for : Medical College Lecturer for CHINA', '2021-01-07 15:24:01', '2021-01-07 15:24:01'),
(23, 3, 0, 'study', 'application', 'New Application From Study', 'Study Application for : Medical Officer', '2021-01-07 15:25:31', '2021-01-07 15:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `study_countries`
--

CREATE TABLE `study_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `flag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_countries`
--

INSERT INTO `study_countries` (`id`, `name`, `is_published`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Australia', 1, 'uploads/October_2020/02/1601612203_australia.jpg', '2020-09-20 23:38:55', '2020-10-01 22:16:43'),
(2, 'Germany', 1, NULL, '2020-09-20 23:39:02', '2020-09-20 23:39:02'),
(3, 'RUSSIA', 1, NULL, '2020-09-20 23:39:10', '2020-09-20 23:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `study_offers`
--

CREATE TABLE `study_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'work4u.consultancy@yahoo.com',
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_requirment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `financial_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents_required` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_details1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_document2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_document3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_offers`
--

INSERT INTO `study_offers` (`id`, `country_id`, `name`, `submit_email`, `summary`, `educational_requirment`, `financial_requirement`, `documents_required`, `extra_title1`, `extra_details1`, `extra_title2`, `extra_document2`, `extra_title3`, `extra_document3`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 2, 'Approbation Program for Medical Officer in Germany', 'shohanur.rahman57@gmail.com', 'Approbation Program for Medical Officer in Germany', 'You must have the valid MBBS degree with 1 years Internship .&lt;br /&gt;&lt;br /&gt;You must Need to know the&amp;nbsp; the German Language Level B2 .&lt;br /&gt;&lt;br /&gt;Minimum IELTS score is 6&amp;nbsp; required.&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;It\'s a Medical License exam courses for Germany .After completing this course you can appear into the Medical&amp;nbsp;&lt;br /&gt;&lt;br /&gt;practitioner Licensing exam in Germany which is call ed approbation&amp;nbsp; If you pass the exam you will get the license to practice as a doctor in Germany.&amp;nbsp;&lt;br /&gt;&lt;br /&gt;In clinic&amp;nbsp; or hospital in Germany', '&lt;br /&gt;For one year tuition fees is&amp;nbsp; 9500( Nine thousand five hundred Euro)&lt;br /&gt;&lt;br /&gt;For 1 year accommodation and food you also need to submit 8600( Eight thousand six hundred euro)&lt;br /&gt;&lt;br /&gt;into the Block account for German Visa .&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;so , total expense is (9500+8600) = 18,100 ( Eighteen thousand and&amp;nbsp; one hundred euro )&amp;nbsp;&lt;br /&gt;&lt;br /&gt;1 Euro = 100 taka , So , total cost in taka is 18,10000 ( Eighteen lacs ten thousand taka )&amp;nbsp;&lt;br /&gt;&lt;br /&gt;SO , for 1 year tuition fees + food+ accommodation+ pocket money + exam fees total cost is 18,10000 ( Eighteen lacs ten thousand taka )&amp;nbsp;', 'Please send&amp;nbsp; us the following documents to our email : work4u.consultancy@yahoo.com&amp;nbsp;&lt;br /&gt;&lt;br /&gt;1. CV&lt;br /&gt;&lt;br /&gt;2. Passport copy&lt;br /&gt;&lt;br /&gt;3. MBBS certificate&lt;br /&gt;&lt;br /&gt;4. MBBS mark sheet&lt;br /&gt;&lt;br /&gt;5. Internship certificate&lt;br /&gt;&lt;br /&gt;6. BMDC registration&lt;br /&gt;&lt;br /&gt;7. German Language proficiency certificate(B2)&amp;nbsp;&lt;br /&gt;&lt;br /&gt;8. IELTS score&amp;nbsp;', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-09-20 23:40:24', '2020-09-23 20:51:29'),
(2, 2, 'BSC In Computer Science', 'work4u.consultancy@yahoo.com', 'Inidia Offered BSC Study For Computer Science and Engineering', '&lt;h1&gt;Why do we use it?&lt;/h1&gt;&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.&lt;/p&gt;', '&lt;h1&gt;Why do we use it?&lt;/h1&gt;&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.&lt;/p&gt;', '&lt;h1&gt;Why do we use it?&lt;/h1&gt;&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.&lt;/p&gt;', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-09-20 23:42:39', '2020-09-20 23:42:39'),
(3, 3, 'Clinical Residency program in Russia', 'work4u.consultancy@yahoo.com', 'Clinical Residency ( Clinical Ordinaltola) In Russia for MBBS doctor', 'MBBS degree completion&amp;nbsp;&lt;br /&gt;&lt;br /&gt;Internship completion certificate is mandatory&lt;br /&gt;&lt;br /&gt;NB :Be noted that our university and&amp;nbsp; the degree is fully recognized by BMDC.&lt;br /&gt;&lt;br /&gt;We are ensuring you&amp;nbsp; After returning to the country you will get Diploma Equivalence BMDC registration .&lt;br /&gt;&lt;br /&gt;&amp;nbsp;Program duration is 3 year.&lt;br /&gt;&lt;br /&gt;Program is Conducted via Russian Language .', 'The Tuition Fee details are:&amp;nbsp; &amp;nbsp;&lt;br /&gt;&lt;br /&gt;Tuition Fee for Preparatory Department: 3 000 US$&lt;br /&gt;&lt;br /&gt;Accommodation: 500 US$&lt;br /&gt;&lt;br /&gt;Other Expenses (medical Insurance, medical checkup, visa Extension from FMS): 300 US$ every year&lt;br /&gt;&lt;br /&gt;Other Expenses only for 1st year (Home office registration charges, residence permit issuance, admission charges, administrative fee, service charges, Etc. Included): 1800 US$ only first year&lt;br /&gt;&lt;br /&gt;Certification and Equalization of all Educational Documents from Ministry of Education of Russia: 400 US$&lt;br /&gt;&lt;br /&gt;Complete 1st Year&amp;nbsp; expenses: 6 000 US$&lt;br /&gt;&lt;br /&gt;1USD @86 taka. So, expense is 6000*86= 5,16,000 taka ( Five lacs&amp;nbsp; sixteen thousand&amp;nbsp; taka only)&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;Second Year Expense :&lt;br /&gt;&lt;br /&gt;Tuition fee for PG: 4 000 US$&lt;br /&gt;&lt;br /&gt;Accommodation: 500 US$&lt;br /&gt;&lt;br /&gt;Other Expenses (medical Insurance, medical checkup, visa Extension from FMS): 300 US$ every year&lt;br /&gt;&lt;br /&gt;Second Year&amp;nbsp; Total&amp;nbsp; expenses: 4 800 US$&lt;br /&gt;&lt;br /&gt;1USD @86 taka. So, expense is 4800*86= 4,12,800 taka ( Four lacs twelve thousand and eight hundred taka)&amp;nbsp;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;Third Year Expense&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;Tuition fee for PG: 4 000 US$&lt;br /&gt;&lt;br /&gt;Accommodation: 500 US$&lt;br /&gt;&lt;br /&gt;Other Expenses (medical Insurance, medical checkup, visa Extension from FMS): 300 US$ every year&lt;br /&gt;&lt;br /&gt;Third&amp;nbsp; Year&amp;nbsp; Total&amp;nbsp; expenses: 4 800 US$&lt;br /&gt;&lt;br /&gt;1USD @86 taka. So, expense is 4800*86= 4,12,800 taka ( Four lacs twelve thousand and eight hundred taka)&amp;nbsp;&lt;br /&gt;&lt;br /&gt;SO total expense for 3 year is = 5,16,000+4,12,800 +4,12,800 = 13,41,600 taka ( Thirteen lacs forty one thousand six hudnred taka only)&lt;br /&gt;&lt;br /&gt;', 'Documents&amp;nbsp; Required for admission&amp;nbsp;&lt;br /&gt;&lt;br /&gt;1. CV&lt;br /&gt;&lt;br /&gt;2. Passport copy&lt;br /&gt;&lt;br /&gt;3. MBBS certificate&lt;br /&gt;&lt;br /&gt;4. MBBS transcript&lt;br /&gt;&lt;br /&gt;5. Internship certificate&lt;br /&gt;&lt;br /&gt;Please send us the documents to our email : russia@work4u.com.bd', 'CLINICAL RESIDENCY PROGRAM AVAILABLE FOR THE SUBJECT', 'Medicine of urgent conditions&lt;br /&gt;&lt;br /&gt;&amp;bull;Dermatology and Venerology&lt;br /&gt;&lt;br /&gt;&amp;bull; Infectious Diseases&lt;br /&gt;&lt;br /&gt;Neurology;&amp;bull;&lt;br /&gt;&lt;br /&gt;Pathological Anatomy;&lt;br /&gt;&lt;br /&gt;&amp;bull;Psychiatry;&lt;br /&gt;&lt;br /&gt;&amp;bull;Obstetrics and Gynaecology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Anaesthesiology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Traumatology and Orthopaedics;&lt;br /&gt;&lt;br /&gt;&amp;bull;Ophthalmology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Urology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Surgery;&lt;br /&gt;&lt;br /&gt;&amp;bull;Pediatrics;&lt;br /&gt;&lt;br /&gt;Childhood Gynecology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Pediatric Infectious Diseases&lt;br /&gt;&lt;br /&gt;Pediatric Surgery;&lt;br /&gt;&lt;br /&gt;&amp;bull;Hygiene of Children and Teenagers;&lt;br /&gt;&lt;br /&gt;&amp;bull;General Hygiene;&lt;br /&gt;&lt;br /&gt;&amp;bull;Public Hygiene;&lt;br /&gt;&lt;br /&gt;&amp;bull;Occupational Hygiene;&lt;br /&gt;&lt;br /&gt;&amp;bull;Radiation Hygiene;&lt;br /&gt;&lt;br /&gt;&amp;bull;Hygiene of Nutrition;&lt;br /&gt;&lt;br /&gt;&amp;bull;Epidemiology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Therapeutic Dentistry;&lt;br /&gt;&lt;br /&gt;&amp;bull;Pediatric Dentistry;&lt;br /&gt;&lt;br /&gt;Orthopaedics;&lt;br /&gt;&lt;br /&gt;&amp;bull;Orthopaedic Dentistry;&lt;br /&gt;&lt;br /&gt;&amp;bull;Surgical Dentistry;&lt;br /&gt;&lt;br /&gt;&amp;bull;Obstetrics and Gynaecology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Anaesthesiology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Traumatology and Orthopaedics;&lt;br /&gt;&lt;br /&gt;&amp;bull;Ophthalmology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Urology;&lt;br /&gt;&lt;br /&gt;&amp;bull;Surgery;&lt;br /&gt;&lt;br /&gt;&amp;bull;Pediatrics;', NULL, NULL, NULL, NULL, 1, '2020-09-20 23:43:56', '2020-09-20 23:43:56'),
(4, 1, 'STUDY IN AUSTRALIA', 'work4u.consultancy@yahoo.com', 'STUDY IN AUSTRALIA', 'HSC&amp;nbsp;&lt;br /&gt;&lt;br /&gt;IELTS : Minimum 5', 'We will arrange sponsorship.&lt;br /&gt;&lt;br /&gt;You Don\'t need to worries about the Sponsorship&amp;nbsp;', 'Please send us the scan copy of Documents into the following email : australia@work4u.com..bd&lt;br /&gt;&lt;br /&gt;1. SSC/HSC certificate&lt;br /&gt;&lt;br /&gt;2. SSC/HSC marksheet&lt;br /&gt;&lt;br /&gt;3. IELTS copy&lt;br /&gt;&lt;br /&gt;4. passport copy&lt;br /&gt;&lt;br /&gt;5. One passport size photograph', 'AVAILABLE SUBJECTS', '1. Electrician&lt;br /&gt;2. Motor Mechanic&lt;br /&gt;3. Air conditioning &amp;amp; Refrigeration&lt;br /&gt;4. Cook&lt;br /&gt;5. Pastry chef&lt;br /&gt;6. Aviation', 'VISA PROCEDURE & GUIDANCE', '&lt;br /&gt;&lt;br /&gt;STEP 1 : You have to send us the following documents scan copy to our email: australia@work4u.com.bd&amp;nbsp;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;1) Passport copy&lt;br /&gt;2) IELTS score&lt;br /&gt;3) SSC &amp;amp; HSC mark sheet&lt;br /&gt;4) SSC &amp;amp; HSC certificate&lt;br /&gt;5) One copy passport size photo&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;STEP 2 : After receiving your documents university will issue the offer letter&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;STEP 3 : After receiving the offer letter students have to send one-semester triton fees. One semester tuition fees will be a minimum of 8000AUD. 1Australian dollar = 60 taka. So, students need to send 8,000 AUD* 60 = 4,80,000 ( Four lacs eighty thousand taka)&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;STEP 4: after forwarding tuition Fees University will issue the visa letter. With that visa letter, students will submit the paper for the visa&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;NB : After getting a visa our service charges is 1,00,000( One lac taka only ).The sponsorship guidance and support arrange by us. You don&amp;rsquo;t need to worry about sponsorship.&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;NB : Our policy is simple NO VISA NO FEES. We don&amp;rsquo;t take any file opening charges.&lt;br /&gt;&lt;br /&gt;Our Contact Number: 01718833391&lt;br /&gt;email: Australia@work4u.com.bd', 'OUR ADDRESS', 'Work4u Consultancy&lt;br /&gt;Ta-131, Wakil Tower (Lift # 6 , Shuru Campus).&lt;br /&gt;Gulshan Badda Link Road.Dhaka.1212.Bangladesh&lt;br /&gt;Cell : 01718833391&lt;br /&gt;Email : australia@work4u.com.bd&lt;br /&gt;Web : www.work4u.com.bd', 1, '2020-09-20 23:45:51', '2020-09-20 23:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `study_offer_applications`
--

CREATE TABLE `study_offer_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `seeker_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seeker_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_offer_applications`
--

INSERT INTO `study_offer_applications` (`id`, `post_id`, `seeker_name`, `seeker_email`, `application_subject`, `cv_url`, `application_message`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md.Shohanur Rahman', 'test@gmail.com', 'Study Application for : Approbation Program for Medical Officer in Germany', '/uploads/September_2020/23/1600879921_md-shohanur-rahman_uits_4.pdf', 'jhjhgjhg', 0, '2020-09-23 20:52:01', '2020-09-23 20:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `study_offer_comments`
--

CREATE TABLE `study_offer_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `auth_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_offer_comments`
--

INSERT INTO `study_offer_comments` (`id`, `user_id`, `comment_id`, `post_id`, `auth_name`, `auth_email`, `comment_text`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 4, 'Himel', 'himelkhan388@gmail.com', 'Study gap acceptable', NULL, '2020-10-20 10:50:00', '2020-10-20 10:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_m_s_records`
--

CREATE TABLE `s_m_s_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receipoints` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_m_s_records`
--

INSERT INTO `s_m_s_records` (`id`, `receipoints`, `message`, `status_code`, `created_at`, `updated_at`) VALUES
(1, '8801750519157', 'This is a test sms', '200', '2020-10-02 00:08:23', '2020-10-02 00:08:23'),
(2, '8801913655566,8801750519157,8801933979658,8801718833391,8801748754309', 'Hello Dear,\r\nThis sms sending from Work4U server. Thank you for your activities.\r\n\r\nWork4U Team', '200', '2020-10-18 09:51:25', '2020-10-18 09:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sheikh Faisol Ahmed', 'work4u.consultancy@yahoo.com', NULL, '$2y$10$GGz/cUTH9NFqdeOxMk5Rq.06NUdjn9WUvMwcblAHrRpnIY.YHz6de', 'P7iQ7rgXLRRwMnpurm83uvViU6MitwlvMVaHM8uHxxdqjkbdPOYePz3DzQAa', '2020-09-20 23:05:50', '2020-09-20 23:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_emails`
--

CREATE TABLE `user_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `to_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_seen` tinyint(1) DEFAULT NULL,
  `outbox` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_emails`
--

INSERT INTO `user_emails` (`id`, `to_email`, `to_name`, `from_email`, `from_name`, `subject`, `cv_url`, `message`, `is_seen`, `outbox`, `created_at`, `updated_at`) VALUES
(1, 'work4u.consultancy@yahoo.com ', 'Work4u', 'test@gmail.com', 'Md.Shohanur Rahman', 'Study Application for : Medical College Lecturer for CHINA', '/uploads/September_2020/23/1600879774_cv-of-md-shohanur-rahman.pdf', 'Our success is driven by the highest quality of customer service. We can meet the requirements even of the whimsical clients; there are no complex tasks for us! Our company is focused on different areas. We are guided by the equity principle. But equity approach is not only right in principle. It is right in practice. This means, in practice, doing a better job of mapping the areas of greatest need – looking beyond averages and disaggregating the data so as better to target the hardest to reach.', 0, 0, '2020-09-23 20:49:37', '2020-09-23 20:49:37'),
(2, 'work4u.consultancy@yahoo.com ', 'Work4u', 'test@gmail.com', 'Md.Shohanur Rahman', 'Study Application for : Approbation Program for Medical Officer in Germany', '/uploads/September_2020/23/1600879921_md-shohanur-rahman_uits_4.pdf', 'jhjhgjhg', 0, 0, '2020-09-23 20:52:29', '2020-09-23 20:52:29'),
(3, 'work4u.consultancy@yahoo.com ', 'Work4u', 'test@gmail.com', 'Md.Shohanur Rahman', 'Immigration Application for : Immigration to Australia', '/uploads/September_2020/23/1600880031_cv-of-shohanur-rahman.pdf', 'Immigration Application for : Immigration to AustraliaImmigration Application for : Immigration to AustraliaImmigration Application for : Immigration to Australia', 0, 0, '2020-09-23 20:53:53', '2020-09-23 20:53:53'),
(4, 'shohanur.rahman57@gmail.com', '', 'noreply@rams-app.co.uk', 'Work4u', 'This is a test message', NULL, '&lt;span style=\"color:#666666;font-family:Poppins, sans-serif;font-size:16px;background-color:#ffffff;\"&gt;Our success is driven by the highest quality of customer service. We can meet the requirements even of the whimsical clients; there are no complex tasks for us! Our company is focused on different areas. We are guided by the equity principle. But equity approach is not only right in principle. It is right in practice. This means, in practice, doing a better job of mapping the areas of greatest need &amp;ndash; looking beyond averages and disaggregating the data so as better to target the hardest to reach.&lt;/span&gt;', 1, 1, '2020-09-23 20:54:30', '2020-09-23 20:54:30'),
(5, 'shohanur.rahman57@gmail.com', '', 'noreply@rams-app.co.uk', 'Work4u', 'This is a test message', NULL, '&lt;span style=\"color:#666666;font-family:Poppins, sans-serif;font-size:16px;background-color:#ffffff;\"&gt;Our success is driven by the highest quality of customer service. We can meet the requirements even of the whimsical clients; there are no complex tasks for us! Our company is focused on different areas. We are guided by the equity principle. But equity approach is not only right in principle. It is right in practice. This means, in practice, doing a better job of mapping the areas of greatest need &amp;ndash; looking beyond averages and disaggregating the data so as better to target the hardest to reach.&lt;/span&gt;', 1, 1, '2020-09-23 20:59:04', '2020-09-23 20:59:04'),
(6, 'work4u.consultancy@yahoo.com ', 'Work4u', 'work4u.consultancy@yahoo.com', 'Sheikh Faisol Ahmed', 'Study Application for : Paramedics', '/uploads/September_2020/24/1600931724_TAX AND VAT.pdf', 'Thistest', 0, 0, '2020-09-24 11:15:28', '2020-09-24 11:15:28'),
(7, 'work4u.consultancy@yahoo.com ', 'Work4u', 'Jewel.mejbah@yahoo.com', 'Md.Mejbah Uddin Jewel', 'Study Application for : NURSE NEEDED FOR CROTIA', '/uploads/November_2020/26/1606396869_CV_TEMPLATE_nurse.3.pdf', 'I am interested to work in Crotia. I need to know that the Embassy of Crotia in India (Delhi is open or, not in this Covid-19 situation.', 0, 0, '2020-11-26 18:21:12', '2020-11-26 18:21:12'),
(8, 'work4u.consultancy@yahoo.com ', 'Work4u', 'mizan768@gmail.com', 'Dr.MD.MIZANUR RAHMAN', 'Study Application for : Medical Officer Needed for UAE', '/uploads/January_2021/07/1610014985_Dr  . Mizan CV Update.docx', 'urgently need.', 0, 0, '2021-01-07 15:23:07', '2021-01-07 15:23:07'),
(9, 'work4u.consultancy@yahoo.com ', 'Work4u', 'mizan768@gmail.com', 'Dr.MD.MIZANUR RAHMAN', 'Study Application for : Medical Officer Needed for UAE', '/uploads/January_2021/07/1610014989_Dr  . Mizan CV Update.docx', 'urgently need.', 0, 0, '2021-01-07 15:23:11', '2021-01-07 15:23:11'),
(10, 'work4u.consultancy@yahoo.com ', 'Work4u', 'mizan768@gmail.com', 'Dr.MD.MIZANUR RAHMAN', 'Study Application for : Medical College Lecturer for CHINA', '/uploads/January_2021/07/1610015041_Dr  . Mizan CV Update.docx', 'urgent need', 0, 0, '2021-01-07 15:24:03', '2021-01-07 15:24:03'),
(11, 'work4u.consultancy@yahoo.com ', 'Work4u', 'mizan768@gmail.com', 'Dr.MD.MIZANUR RAHMAN', 'Study Application for : Medical Officer', '/uploads/January_2021/07/1610015131_Dr  . Mizan CV Update.docx', 'applied several times and interviewed', 0, 0, '2021-01-07 15:25:33', '2021-01-07 15:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `web_site_settings`
--

CREATE TABLE `web_site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `important_news` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_numbers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_conditions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_site_settings`
--

INSERT INTO `web_site_settings` (`id`, `about_us`, `company_address`, `mobile_number`, `company_email`, `office_time`, `facebook_link`, `twitter_link`, `linkdin_link`, `important_news`, `logo_url`, `support_numbers`, `admin_email`, `website_title`, `website_tag`, `seo_keywords`, `seo_description`, `google_analytics_id`, `privacy_policy`, `terms_conditions`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to the leading company on the market! We are Work4U Consultancy Ltd. We work for you. Building a sustainable future for you through our expertise using your excellence. We provide staffing solutions for you and new approaches to recruiting.&lt;br /&gt;&lt;br /&gt;Our success is driven by the highest quality of customer service. We can meet the requirements even of the whimsical clients; there are no complex tasks for us! Our company is focused on different areas. We are guided by the equity principle. But equity approach is not only right in principle. It is right in practice. This means, in practice, doing a better job of mapping the areas of greatest need &amp;ndash; looking beyond averages and disaggregating the data so as better to target the hardest to reach.', 'Ta-131, Wakil Tower(Lift # 6, Shuru Campus), Gulshan Badda Link Road, Dhaka 1212, Bangladesh', '+880 1718833391', 'info@work4u.com.bd', 'Office Time: 10:00 am - 5:30 pm, (Sat-Thursday)', 'https://facebook.com/work4u.consultancy/', NULL, NULL, 'Denmark Immigration for Doctor/Nurse/Physiotherapist is going on , Please call 01718833391 / Internship Placement in Europe  for Students is going on  , please call 01718833391', '/uploads/September_2020/20/1600631714_logo.png', '+880 1718833391, +880 1913-655-566', 'work4u.consultancy@yahoo.com', 'Work4U', 'make your self comfortable', 'work4u, find job', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vestibulum ante', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vestibulum ante, sit amet blandit tellus. Pellentesque sit amet viverra lorem. Sed non diam egestas ex aliquam feugiat. Nullam urna mauris, rutrum sed erat quis, gravida scelerisque enim. Cras dapibus orci magna, sit amet fringilla est porttitor sit amet. Proin eget justo mauris. Proin leo urna, ornare quis lacus id, pretium ullamcorper libero. Suspendisse congue tortor pellentesque diam accumsan, vel dictum tellus tincidunt. Vivamus dapibus dignissim posuere. Aliquam eget sem semper, feugiat mauris eget, convallis nisi. Curabitur interdum, mi vitae commodo mattis, lacus erat aliquet urna, ut malesuada elit quam quis justo.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vestibulum ante, sit amet blandit tellus. Pellentesque sit amet viverra lorem. Sed non diam egestas ex aliquam feugiat. Nullam urna mauris, rutrum sed erat quis, gravida scelerisque enim. Cras dapibus orci magna, sit amet fringilla est porttitor sit amet. Proin eget justo mauris. Proin leo urna, ornare quis lacus id, pretium ullamcorper libero. Suspendisse congue tortor pellentesque diam accumsan, vel dictum tellus tincidunt. Vivamus dapibus dignissim posuere. Aliquam eget sem semper, feugiat mauris eget, convallis nisi. Curabitur interdum, mi vitae commodo mattis, lacus erat aliquet urna, ut malesuada elit quam quis justo.', '2020-09-20 23:55:14', '2020-10-15 14:22:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employment_statuses`
--
ALTER TABLE `employment_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_questions`
--
ALTER TABLE `f_a_q_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immigration_applications`
--
ALTER TABLE `immigration_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immigration_categories`
--
ALTER TABLE `immigration_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immigration_comments`
--
ALTER TABLE `immigration_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immigration_countries`
--
ALTER TABLE `immigration_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immigration_offers`
--
ALTER TABLE `immigration_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_benefites`
--
ALTER TABLE `job_benefites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_benefite_mapers`
--
ALTER TABLE `job_benefite_mapers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_countries`
--
ALTER TABLE `job_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_employment_status_maps`
--
ALTER TABLE `job_employment_status_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_offers`
--
ALTER TABLE `job_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_offer_applications`
--
ALTER TABLE `job_offer_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_offer_comments`
--
ALTER TABLE `job_offer_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `study_countries`
--
ALTER TABLE `study_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_offers`
--
ALTER TABLE `study_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_offer_applications`
--
ALTER TABLE `study_offer_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_offer_comments`
--
ALTER TABLE `study_offer_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_m_s_records`
--
ALTER TABLE `s_m_s_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_emails`
--
ALTER TABLE `user_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_site_settings`
--
ALTER TABLE `web_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employment_statuses`
--
ALTER TABLE `employment_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_questions`
--
ALTER TABLE `f_a_q_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `immigration_applications`
--
ALTER TABLE `immigration_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `immigration_categories`
--
ALTER TABLE `immigration_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `immigration_comments`
--
ALTER TABLE `immigration_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `immigration_countries`
--
ALTER TABLE `immigration_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `immigration_offers`
--
ALTER TABLE `immigration_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_benefites`
--
ALTER TABLE `job_benefites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job_benefite_mapers`
--
ALTER TABLE `job_benefite_mapers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `job_countries`
--
ALTER TABLE `job_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_employment_status_maps`
--
ALTER TABLE `job_employment_status_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `job_offers`
--
ALTER TABLE `job_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_offer_applications`
--
ALTER TABLE `job_offer_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_offer_comments`
--
ALTER TABLE `job_offer_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `study_countries`
--
ALTER TABLE `study_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `study_offers`
--
ALTER TABLE `study_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `study_offer_applications`
--
ALTER TABLE `study_offer_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `study_offer_comments`
--
ALTER TABLE `study_offer_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `s_m_s_records`
--
ALTER TABLE `s_m_s_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_emails`
--
ALTER TABLE `user_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `web_site_settings`
--
ALTER TABLE `web_site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
