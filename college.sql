-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 03:33 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--
CREATE DATABASE IF NOT EXISTS `college` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `college`;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `Department` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Sem` varchar(30) NOT NULL,
  `Assign_material` varchar(30) NOT NULL,
  `Document` varchar(200) NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`Department`, `Subject`, `Sem`, `Assign_material`, `Document`, `Id`) VALUES
('CSE', 'Basic Maths', '1', 'Assignment', 'assignments&materials\\assign.docx', 1),
('CSE', 'Basic Maths', '1', 'Material', 'assignments&materials\\mat.pdf', 2),
('CSE', 'Basic Maths', '1', 'Assignment', 'assignments&materials\\assign.pdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_faculty`
--

CREATE TABLE IF NOT EXISTS `attendance_faculty` (
  `User_id` varchar(25) NOT NULL,
  `Data` varchar(30) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_student`
--

CREATE TABLE IF NOT EXISTS `attendance_student` (
  `User_id` varchar(25) NOT NULL,
  `total_days` varchar(30) NOT NULL,
  `total_periods` varchar(25) NOT NULL,
  `present_days` varchar(25) NOT NULL,
  `present_periods` varchar(25) NOT NULL,
  `attendance_percentage` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `attendance_student`
--

INSERT INTO `attendance_student` (`User_id`, `total_days`, `total_periods`, `present_days`, `present_periods`, `attendance_percentage`, `semester`, `Id`) VALUES
('shahzeb@mail.com', '120', '600', '80', '400', '75%', '1', 1),
('shahzeb@mail.com', '120', '600', '80', '400', '75%', '2', 2),
('shahzeb@mail.com', '120', '600', '80', '400', '75%', '3', 3),
('shahzeb@mail.com', '120', '600', '80', '400', '75%', '4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule`
--

CREATE TABLE IF NOT EXISTS `class_schedule` (
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  `Department` varchar(30) NOT NULL,
  `Semester` varchar(30) NOT NULL,
  `Routine` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`Id`, `Department`, `Semester`, `Routine`) VALUES
(1, 'CSE', '1', 'schedule\\Routine_CSE_7TH.pdf'),
(2, 'ME', '2', 'schedule\\Routine_CSE_7TH.pdf'),
(3, 'CE', '3', 'schedule\\Routine_CSE_7TH.pdf'),
(4, 'ECE', '4', 'schedule\\Routine_CSE_7TH.pdf'),
(5, 'EE', '5', 'schedule\\Routine_CSE_7TH.pdf'),
(6, 'IT', '6', 'schedule\\Routine_CSE_7TH.pdf'),
(7, 'CSE', '7', 'schedule\\Routine_CSE_7TH.pdf'),
(8, 'ECE', '8', 'schedule\\Routine_CSE_7TH.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `Adhaar` varchar(25) NOT NULL,
  `Birth_Certificate` varchar(25) NOT NULL,
  `Class_X` varchar(25) NOT NULL,
  `Class_XII/Diploma` varchar(25) NOT NULL,
  `WBJEE` varchar(100) NOT NULL,
  `JEE-MAINS` varchar(100) NOT NULL,
  `User_id` varchar(40) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`Adhaar`, `Birth_Certificate`, `Class_X`, `Class_XII/Diploma`, `WBJEE`, `JEE-MAINS`, `User_id`) VALUES
('Verified', 'Not Verified', 'Verified', 'Verified', 'Verified', 'Not Verified', 'shahzeb@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `external_result`
--

CREATE TABLE IF NOT EXISTS `external_result` (
  `User_id` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Marksheet` varchar(200) NOT NULL,
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `external_result`
--

INSERT INTO `external_result` (`User_id`, `Semester`, `Marksheet`, `Id`) VALUES
('shahzeb@mail.com', '1', '69', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `Name` varchar(35) NOT NULL,
  `User_id` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Year of Joining` varchar(10) NOT NULL,
  `Date of Birth` varchar(10) NOT NULL,
  `Designation` varchar(25) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Blood_Group` varchar(10) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Name`, `User_id`, `Address`, `Contact`, `Year of Joining`, `Date of Birth`, `Designation`, `Department`, `Image`, `Blood_Group`) VALUES
('Amit Das', 'amitdas@mail.com', 'Hoogly', '123456789', '2018', '07/11/1989', 'Asst. Professor', 'CSE', 'images\\avatar_men.png', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `User_id` varchar(30) NOT NULL,
  `Sem` varchar(30) NOT NULL,
  `Course_fee` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Payment_date` varchar(30) NOT NULL,
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`User_id`, `Sem`, `Course_fee`, `Status`, `Payment_date`, `Id`) VALUES
('shahzeb@mail.com', '8', '40000', 'Paid', '02/03/2022', 1),
('shahzeb@mail.com', '7', '40000', 'Paid', '12/11/2021', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE IF NOT EXISTS `hod` (
  `Name` varchar(50) NOT NULL,
  `User_id` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Year_of _Joining` varchar(10) NOT NULL,
  `Date_of _Birth` varchar(10) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Blood_Group` varchar(15) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`Name`, `User_id`, `Address`, `Contact`, `Year_of _Joining`, `Date_of _Birth`, `Designation`, `Department`, `Image`, `Blood_Group`) VALUES
('Sagar', 'sagar@mail.com', 'Howrah', '123456789', '2018', '02/5/1988', 'Asst. Professor', 'CSE', 'images\\avatar_men.png', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `internal_result`
--

CREATE TABLE IF NOT EXISTS `internal_result` (
  `User_id` varchar(30) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Phase` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Marks` varchar(50) NOT NULL,
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `internal_result`
--

INSERT INTO `internal_result` (`User_id`, `Semester`, `Phase`, `Subject`, `Marks`, `Id`) VALUES
('shahzeb@mail.com', '1', 'CA_1', 'Physics - I (GR - A)', '24', 1),
('shahzeb@mail.com', '1', 'CA_1', 'Mathematics - IA', '25', 2),
('shahzeb@mail.com', '1', 'CA_1', 'Basic Electrical Engineering', '25', 3),
('shahzeb@mail.com', '1', 'PA_1', 'Physics - 1 Laboratory (GR - A)', '38', 4),
('shahzeb@mail.com', '1', 'PA_1', 'Basic Electrical Engineering Laboratory', '35', 5),
('shahzeb@mail.com', '1', 'PA_1', 'workshop/Manufacturing Practices (GR - A)', '40', 6),
('shahzeb@mail.com', '2', 'CA_1', 'Chemistry-1 (GR-A)', '22', 7),
('shahzeb@mail.com', '2', 'CA_1', 'Mathematics - IIA', '23', 8),
('shahzeb@mail.com', '2', 'CA_1', 'Programming for Problem Solving', '21', 9),
('shahzeb@mail.com', '2', 'CA_1', 'English', '23', 10),
('shahzeb@mail.com', '2', 'PA_1', 'Chemistry-I Laboratory (GR-A)', '38', 11),
('shahzeb@mail.com', '2', 'PA_1', 'Programming for Problem Solving', '38', 12),
('shahzeb@mail.com', '2', 'PA_1', 'Engineering Graphics & Design(GR-A)', '38', 13),
('shahzeb@mail.com', '2', 'PA_1', 'Language Laboratory', '40', 14),
('shahzeb@mail.com', '3', 'CA_1', 'Analog and Digital Electronics', '23', 15),
('shahzeb@mail.com', '3', 'CA_1', 'Data Structure & Algorithms', '23', 16),
('shahzeb@mail.com', '3', 'CA_1', 'Computer Organisation', '23', 17),
('shahzeb@mail.com', '3', 'CA_1', 'Mathematics-III (Differential Calculus)', '23', 18),
('shahzeb@mail.com', '3', 'CA_1', 'Economics for Engineers (Humanities-II)', '23', 19),
('shahzeb@mail.com', '3', 'PA_1', 'IT Workshop (Sci Lab/Matlab/Python/R)', '38', 20),
('shahzeb@mail.com', '3', 'PA_1', 'Analog and Digital Electronics Lab', '40', 21),
('shahzeb@mail.com', '3', 'PA_1', 'Data Structure & Algorithms Lab', '40', 22),
('shahzeb@mail.com', '3', 'PA_1', 'Computer Organisation Lab', '38', 23),
('shahzeb@mail.com', '4', 'CA_1', 'Compiler Design', '20', 24);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `Name` varchar(50) NOT NULL,
  `Grade` varchar(25) NOT NULL,
  `User_id` varchar(50) NOT NULL,
  `Pass` varchar(25) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`Name`, `Grade`, `User_id`, `Pass`) VALUES
('Afsar', 'Student', 'afsar@mail.com', '123'),
('Ahsan', 'Student', 'ahsan@mail.com', '123'),
('Alhamd', 'Student', 'alhamd@mail.com', '123'),
('Amit', 'Office_Admin', 'amit@mail.com', '123'),
('Amit Das', 'Faculty', 'amitdas@mail.com', '123'),
('Debojit', 'Student', 'debojit@mail.com', '123'),
('Dip', 'Student', 'dip@mail.com', '123'),
('Falah', 'Student', 'falah@mail.com', '123'),
('Kumar', 'Student', 'kumar@mail.com', '123'),
('Mallick', 'Student', 'mallick@mail.com', '123'),
('Paul', 'Student', 'paul@mail.com', '123'),
('Sagar Chakraborty', 'HOD', 'sagar@mail.com', '123'),
('Shahzeb ', 'Student', 'shahzeb@mail.com', '123'),
('Zeb', 'Master_Admin', 'zeb@mail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `master_admin`
--

CREATE TABLE IF NOT EXISTS `master_admin` (
  `Name` varchar(35) NOT NULL,
  `User_id` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Year_of _Joining` varchar(10) NOT NULL,
  `Date_of _Birth` varchar(10) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Blood_Group` varchar(15) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_admin`
--

INSERT INTO `master_admin` (`Name`, `User_id`, `Address`, `Contact`, `Year_of _Joining`, `Date_of _Birth`, `Designation`, `Department`, `Image`, `Blood_Group`) VALUES
('Zeb', 'zeb@mail.com', 'Taltala', '123456789', '2018', '07/02/1999', 'Director', 'Office', 'images\\avatar_men.png', 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `office_admin`
--

CREATE TABLE IF NOT EXISTS `office_admin` (
  `Name` varchar(50) NOT NULL,
  `User_id` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Year_of _Joining` varchar(10) NOT NULL,
  `Date_of _Birth` varchar(10) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Blood_Group` varchar(15) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_admin`
--

INSERT INTO `office_admin` (`Name`, `User_id`, `Address`, `Contact`, `Year_of _Joining`, `Date_of _Birth`, `Designation`, `Department`, `Image`, `Blood_Group`) VALUES
('Amit', 'amit@mail.com', 'Hoogly', '123456789', '2018', '07/11/1990', 'Office Staff', 'Office', 'images\\avatar_men.png', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Name` varchar(35) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Date of Birth` varchar(15) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Blood Group` varchar(10) NOT NULL,
  `University Roll Number` varchar(20) NOT NULL,
  `Year of Admission` varchar(15) NOT NULL,
  `User_id` varchar(25) NOT NULL,
  `Student's Contact Number` varchar(15) NOT NULL,
  `Guardian's Contact Number` varchar(15) NOT NULL,
  `Sem` varchar(30) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Department`, `Address`, `Date of Birth`, `Image`, `Blood Group`, `University Roll Number`, `Year of Admission`, `User_id`, `Student's Contact Number`, `Guardian's Contact Number`, `Sem`) VALUES
('Afsar', 'ECE', 'Taltala', '07/02/1999', 'images\\avatar_men.png', 'AB+', '20600118020', '2018', 'afsar@mail.com', '123456789', '987654321', '4'),
('Ahsan', 'ME', 'Taltala', '07/02/1999', 'images\\avatar_men.png', 'AB+', '20600118026', '2018', 'ahsan@mail.com', '123456789', '987654321', '2'),
('Alhamd', 'CSE', 'Ripon Street', '20/10/1999', 'images\\avatar_men.png', 'O+', '20600118030', '2018', 'alhamd@mail.com', '123456789', '987654321', '7'),
('Debojit', 'ECE', 'Howrah', '05/12/1999', 'images\\avatar_men.png', 'B+', '20600118029', '2018', 'debojit@mail.com', '123456789', '987654321', '4'),
('Dip', 'EE', 'Alipur', '20/10/1999', 'images\\avatar_men.png', 'O+', '20600118028', '2018', 'dip@mail.com', '123456789', '987654321', '5'),
('Falah', 'IT', 'Ripon Street', '20/10/1999', 'images\\avatar_men.png', 'AB+', '20600118027', '2018', 'falah@mail.com', '123456789', '987654321', '6'),
('Kumar', 'CSE', 'Chandannagar', '05/12/1999', 'images\\avatar_men.png', 'B+', '20600118022', '2018', 'kumar@mail.com', '123456789', '987654321', '1'),
('Mallick', 'CE', 'Taltala', '07/02/1999', 'images\\avatar_men.png', 'AB+', '20600118026', '2018', 'mallick@mail.com', '123456789', '987654321', '3'),
('Paul', 'ECE', 'Howrah', '20/10/1999', 'images\\avatar_men.png', 'O-', '20600118021', '2018', 'paul@mail.com', '123456789', '987654321', '8'),
('Shahzeb ', 'CSE', 'Taltala', '07/02/1999', 'images\\author-image1.jpg', 'AB+', '20600118023', '2018', 'shahzeb@mail.com', '9748784638', '8420258513', '7');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `Department` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Sem` varchar(30) NOT NULL,
  `Course` varchar(200) NOT NULL,
  `Id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`Department`, `Subject`, `Sem`, `Course`, `Id`) VALUES
('CSE', 'Basic Maths', '1', 'syllabus&courses/BTECH.pdf', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
