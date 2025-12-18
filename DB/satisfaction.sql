-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2025 at 09:35 PM
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
-- Database: `satisfaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `username` varchar(30) NOT NULL,
  `ip` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `IP` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `com_cat` varchar(30) NOT NULL,
  `relative_name` varchar(30) NOT NULL,
  `document_name` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `landline_phone` varchar(11) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `comp_summary` varchar(200) NOT NULL,
  `request` varchar(100) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `reply_date` varchar(20) NOT NULL,
  `code` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `status_desc` varchar(150) NOT NULL,
  `security_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;


-- --------------------------------------------------------

--
-- Table structure for table `login_status`
--

CREATE TABLE `login_status` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(18) NOT NULL,
  `ip` int(11) NOT NULL,
  `hostname` varchar(50) NOT NULL,
  `mack_address` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question1`
--

CREATE TABLE `question1` (
  `id` int(11) NOT NULL,
  `desc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `question1`
--

INSERT INTO `question1` (`id`, `desc`) VALUES
(1, 'کیفیت رنگ و آبکاری'),
(2, 'سهولت نصب'),
(3, 'سهولت بهره برداری با توجه به چیدمان قطعات'),
(4, 'حفاظت ها شامل فیوزها و وریستورها'),
(5, 'سیم بندی و اتصلات'),
(6, 'ویژگی های کنترل کننده مرکزی،نمایشگرها و آلارم ها'),
(7, 'وضعیت و کیفیت عملکردی محصول در دوره گارانتی'),
(8, 'نحوه بسته بندی و کیفیت آن');

-- --------------------------------------------------------

--
-- Table structure for table `question2`
--

CREATE TABLE `question2` (
  `id` int(11) NOT NULL,
  `desc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `question2`
--

INSERT INTO `question2` (`id`, `desc`) VALUES
(1, '-زمان مورد انتظار برای پاسخگویی'),
(2, '-نحوه تعاملات پاسخگویی و پیگیری و کیفیت ارتباطات مسئولین فروش'),
(3, '-سطح دانش فنی و توانایی مسئولین فروش'),
(4, '-انجام به موقع تعهدات مطابق شرایط توافق شده'),
(5, '-میزان انعطاف و توانایی برآورده ساختن نیازهای جدید'),
(6, '-تبلیغات و اطلاع رسانی در خصوص محصولات و شرایط جدید'),
(7, '-میزان تنوع محصولات در جهت برطرف کردن نیازها'),
(8, '-کافی و کاربردی بودن اطلاعات درج شده بر روی محصول و کتابچه راهنما'),
(9, '-نحوه بسته بندی محصولات و شرایط تحویل'),
(10, '-انطباق محصول با انتظارات مطرح شده'),
(11, '- منصفانه بودن قیمت');

-- --------------------------------------------------------

--
-- Table structure for table `question3`
--

CREATE TABLE `question3` (
  `id` int(11) NOT NULL,
  `desc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `question3`
--

INSERT INTO `question3` (`id`, `desc`) VALUES
(1, 'میزان دسترسی حسن خلق نحوه پاسخ گویی و پیگیری پروژه'),
(2, 'پیش بینی دقیق در مورد تامین و تدارکات مورد نیاز'),
(3, 'منعطف بودن در اجرای پروژه در برابر تغییر الزامات مشتری'),
(4, 'انجام تعهدات مندرج در قرارداد و برآورده سازی الزامات آن'),
(5, 'کیفیت نصب تجهیزات و اجرای پروژه خدمات مهندسی'),
(6, 'رعایت زمانبندی اعلام شده و گانت چارت پروژه'),
(7, 'میزان آگاهی، تخصص و دانش فنی عوامل اجرایی پروژه'),
(8, 'میزان رعایت کلیه قوانین عمومی،ایمنی و امنیت اطلاعات کارفرما'),
(9, 'هماهنگی و اطلاع رسانی به کارفرما در مورد انجام امور');

-- --------------------------------------------------------

--
-- Table structure for table `question4`
--

CREATE TABLE `question4` (
  `id` int(11) NOT NULL,
  `text` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `question4`
--

INSERT INTO `question4` (`id`, `text`) VALUES
(1, ' قابلیت دسترسی و کیفیت پاسخگویی کارشناسان فنی'),
(2, 'قابلیت دسترسی و کیفیت پاسخگویی کارشناسان پشتیبانی '),
(3, 'قیمت و هزینه های پشتیبانی و خدمات پس از فروش (تعمیرات اعزام کارشناس/آموزش)'),
(4, 'مدت زمان انتظار دریافت خدمات فنی پس از اعلام نیاز'),
(5, 'مدت زمان انتظار تعمیر پس از اعلام نیاز و ارسال تجهیزات'),
(6, ' میزان موثر بودن راهنمایی های فنی '),
(7, 'ارتباطات ،نحوه برخورد، جدیت در پاسخگویی و پیگیری خدمات پس از فروش '),
(8, 'قیمت و هزینه های پشتیبانی و خدمات پس از فروش (تعمیرات اعزام کارشناس/آموزش)');

-- --------------------------------------------------------

--
-- Table structure for table `question5`
--

CREATE TABLE `question5` (
  `ID` int(11) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `question5`
--

INSERT INTO `question5` (`ID`, `Text`) VALUES
(1, 'اطلاع رسانی موثر در خصوص روش های شکایت'),
(2, 'سهولت دسترسی به سامانه های طرح شکایت'),
(3, 'سرعت عمل سازمان در دریافت ،بررسی و رسیدگی به شکایت'),
(4, 'نحوه برخورد مسئولین فرآیند رسیدگی به شکایات'),
(5, 'میزان رعایت تعهدات توسط شرکت در قبال رسیدگی به شکایت طرح شده'),
(6, 'نحوه اعلام نتایج رسیدگی به شکایت '),
(7, 'میزان مطلوبیت اقدامات انجام شده پیرو شکایت طرح شده');

-- --------------------------------------------------------

--
-- Table structure for table `satisfaction1`
--

CREATE TABLE `satisfaction1` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `position` varchar(150) NOT NULL,
  `comany` varchar(150) NOT NULL,
  `prodouctname` varchar(150) NOT NULL,
  `q1` varchar(150) NOT NULL,
  `q1_score` varchar(150) NOT NULL,
  `q1_important` varchar(150) NOT NULL,
  `q2` varchar(150) NOT NULL,
  `q2_score` varchar(150) NOT NULL,
  `q2_important` varchar(150) NOT NULL,
  `q3` varchar(150) NOT NULL,
  `q3_score` varchar(150) NOT NULL,
  `q_important3` varchar(150) NOT NULL,
  `q4` varchar(150) NOT NULL,
  `q_score4` varchar(150) NOT NULL,
  `q_important4` varchar(150) NOT NULL,
  `q5` varchar(150) NOT NULL,
  `q_score5` varchar(150) NOT NULL,
  `q_important5` varchar(150) NOT NULL,
  `q6` varchar(150) NOT NULL,
  `q_score6` varchar(150) NOT NULL,
  `q_important6` varchar(150) NOT NULL,
  `q7` varchar(150) NOT NULL,
  `q_score7` varchar(150) NOT NULL,
  `q_important7` varchar(150) NOT NULL,
  `q8` varchar(150) NOT NULL,
  `q_score8` varchar(150) NOT NULL,
  `q_important8` varchar(150) NOT NULL,
  `tel` varchar(150) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `IP` int(11) NOT NULL,
  `date` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;



-- --------------------------------------------------------

--
-- Table structure for table `satisfaction2`
--

CREATE TABLE `satisfaction2` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `family` varchar(20) NOT NULL,
  `position` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `contact_subject` varchar(25) NOT NULL,
  `question1` varchar(50) NOT NULL,
  `q_d1` varchar(5) NOT NULL,
  `q_s1` varchar(8) NOT NULL,
  `question2` varchar(50) DEFAULT NULL,
  `q_d2` varchar(5) NOT NULL,
  `q_s2` varchar(8) NOT NULL,
  `question3` varchar(50) DEFAULT NULL,
  `q_d3` varchar(5) NOT NULL,
  `q_s3` varchar(8) NOT NULL,
  `question4` varchar(50) DEFAULT NULL,
  `q_d4` varchar(5) NOT NULL,
  `q_s4` varchar(8) NOT NULL,
  `question5` varchar(50) DEFAULT NULL,
  `q_d5` varchar(5) NOT NULL,
  `q_s5` varchar(8) NOT NULL,
  `question6` varchar(50) DEFAULT NULL,
  `q_d6` varchar(5) NOT NULL,
  `q_s6` varchar(8) NOT NULL,
  `question7` varchar(50) DEFAULT NULL,
  `q_d7` varchar(5) NOT NULL,
  `q_s7` varchar(8) NOT NULL,
  `question8` varchar(50) DEFAULT NULL,
  `q_d8` varchar(5) NOT NULL,
  `q_s8` varchar(8) NOT NULL,
  `question9` varchar(50) DEFAULT NULL,
  `q_d9` varchar(5) NOT NULL,
  `q_s9` varchar(8) NOT NULL,
  `question10` varchar(50) DEFAULT NULL,
  `q_d10` varchar(5) NOT NULL,
  `q_s10` varchar(8) NOT NULL,
  `question11` varchar(50) DEFAULT NULL,
  `q_d11` varchar(5) NOT NULL,
  `q_s11` varchar(8) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `name_date` varchar(25) NOT NULL,
  `start_date` varchar(50) DEFAULT NULL,
  `end_data` varchar(50) DEFAULT NULL,
  `ip` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;


-- --------------------------------------------------------

--
-- Table structure for table `satisfaction3`
--

CREATE TABLE `satisfaction3` (
  `name` varchar(200) NOT NULL,
  `family` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `campany` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `question1` varchar(150) NOT NULL,
  `q_d1` varchar(150) NOT NULL,
  `q_s1` varchar(150) NOT NULL,
  `question2` varchar(150) NOT NULL,
  `q_d2` varchar(150) NOT NULL,
  `q_s2` varchar(150) NOT NULL,
  `question3` varchar(150) NOT NULL,
  `q_d3` varchar(150) NOT NULL,
  `q_s3` varchar(150) NOT NULL,
  `question4` varchar(150) NOT NULL,
  `q_d4` varchar(150) NOT NULL,
  `q_s4` varchar(150) NOT NULL,
  `question5` varchar(150) NOT NULL,
  `q_d5` varchar(150) NOT NULL,
  `q_s5` varchar(150) NOT NULL,
  `question6` varchar(150) NOT NULL,
  `q_d6` varchar(150) NOT NULL,
  `q_s6` varchar(150) NOT NULL,
  `question7` varchar(150) NOT NULL,
  `q_d7` varchar(150) NOT NULL,
  `q_s7` varchar(150) NOT NULL,
  `question8` varchar(150) NOT NULL,
  `q_d8` varchar(150) NOT NULL,
  `q_s8` varchar(150) NOT NULL,
  `question9` varchar(150) NOT NULL,
  `q_d9` varchar(150) NOT NULL,
  `q_s9` varchar(150) NOT NULL,
  `start_date` varchar(150) NOT NULL,
  `end_date` varchar(150) NOT NULL,
  `ip` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `user_id` int(11) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;


-- --------------------------------------------------------

--
-- Table structure for table `satisfaction4`
--

CREATE TABLE `satisfaction4` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `position` varchar(150) NOT NULL,
  `comany` varchar(150) NOT NULL,
  `prodouctname` varchar(150) NOT NULL,
  `q1` varchar(150) NOT NULL,
  `q1_score` varchar(150) NOT NULL,
  `q1_important` varchar(150) NOT NULL,
  `q2` varchar(150) NOT NULL,
  `q2_score` varchar(150) NOT NULL,
  `q2_important` varchar(150) NOT NULL,
  `q3` varchar(150) NOT NULL,
  `q3_score` varchar(150) NOT NULL,
  `q_important3` varchar(150) NOT NULL,
  `q4` varchar(150) NOT NULL,
  `q_score4` varchar(150) NOT NULL,
  `q_important4` varchar(150) NOT NULL,
  `q5` varchar(150) NOT NULL,
  `q_score5` varchar(150) NOT NULL,
  `q_important5` varchar(150) NOT NULL,
  `q6` varchar(150) NOT NULL,
  `q_score6` varchar(150) NOT NULL,
  `q_important6` varchar(150) NOT NULL,
  `q7` varchar(150) NOT NULL,
  `q_score7` varchar(150) NOT NULL,
  `q_important7` varchar(150) NOT NULL,
  `q8` varchar(150) NOT NULL,
  `q_score8` varchar(150) NOT NULL,
  `q_important8` varchar(150) NOT NULL,
  `tel` varchar(150) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `IP` int(11) NOT NULL,
  `date` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;


-- --------------------------------------------------------

--
-- Table structure for table `satisfaction5`
--

CREATE TABLE `satisfaction5` (
  `ID` int(11) NOT NULL,
  `Start_Date` varchar(50) NOT NULL,
  `End_Date` varchar(50) NOT NULL,
  `IP` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Company` varchar(20) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Code` varchar(20) NOT NULL,
  `Tel` varchar(12) NOT NULL,
  `Date` text NOT NULL,
  `Q1` text NOT NULL,
  `Q1_E` varchar(8) NOT NULL,
  `Q1_D` varchar(5) NOT NULL,
  `Q2` text NOT NULL,
  `Q2_E` varchar(8) NOT NULL,
  `Q2_D` varchar(5) NOT NULL,
  `Q3` text NOT NULL,
  `Q3_E` varchar(8) NOT NULL,
  `Q3_D` varchar(5) NOT NULL,
  `Q4` text NOT NULL,
  `Q4_E` varchar(8) NOT NULL,
  `Q4_D` varchar(5) NOT NULL,
  `Q5` text NOT NULL,
  `Q5_E` varchar(8) NOT NULL,
  `Q5_D` varchar(5) NOT NULL,
  `Q6` text NOT NULL,
  `Q6_E` varchar(8) NOT NULL,
  `Q6_D` varchar(5) NOT NULL,
  `Q7` text NOT NULL,
  `Q7_E` varchar(8) NOT NULL,
  `Q7_D` varchar(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;



-- --------------------------------------------------------

--
-- Table structure for table `satisfaction_category`
--

CREATE TABLE `satisfaction_category` (
  `cat_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `satisfaction_category`
--

INSERT INTO `satisfaction_category` (`cat_id`, `title`) VALUES
(1, 'رضایت'),
(2, 'شکایت');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL,
  `IP` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `text` text NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `status_desc` varchar(150) NOT NULL,
  `security_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;


-- --------------------------------------------------------

--
-- Table structure for table `suggestion_category`
--

CREATE TABLE `suggestion_category` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(18) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `ip` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fname`, `lname`, `tel`, `email`, `company`, `ip`, `flag`, `user_id`, `login_flag`) VALUES
('admin', '1234', 'admin', 'admin', '', '', '', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `login_status`
--
ALTER TABLE `login_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question1`
--
ALTER TABLE `question1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question2`
--
ALTER TABLE `question2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question3`
--
ALTER TABLE `question3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question4`
--
ALTER TABLE `question4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question5`
--
ALTER TABLE `question5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `satisfaction1`
--
ALTER TABLE `satisfaction1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satisfaction2`
--
ALTER TABLE `satisfaction2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satisfaction3`
--
ALTER TABLE `satisfaction3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satisfaction4`
--
ALTER TABLE `satisfaction4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satisfaction5`
--
ALTER TABLE `satisfaction5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `satisfaction_category`
--
ALTER TABLE `satisfaction_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion_category`
--
ALTER TABLE `suggestion_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `login_status`
--
ALTER TABLE `login_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `question1`
--
ALTER TABLE `question1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question2`
--
ALTER TABLE `question2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `question3`
--
ALTER TABLE `question3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `question4`
--
ALTER TABLE `question4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question5`
--
ALTER TABLE `question5`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `satisfaction1`
--
ALTER TABLE `satisfaction1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `satisfaction2`
--
ALTER TABLE `satisfaction2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `satisfaction3`
--
ALTER TABLE `satisfaction3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `satisfaction4`
--
ALTER TABLE `satisfaction4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `satisfaction5`
--
ALTER TABLE `satisfaction5`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `satisfaction_category`
--
ALTER TABLE `satisfaction_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suggestion_category`
--
ALTER TABLE `suggestion_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
