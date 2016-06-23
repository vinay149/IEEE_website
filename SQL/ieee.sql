-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2014 at 06:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ieee`
--

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE IF NOT EXISTS `conferences` (
  `date` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `accomodation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`date`, `location`, `contact`, `accomodation`) VALUES
('11 Oct - 13 Oct 2014 ', 'Sheraton Bangalore Hotel at Brigade Gateway', 'Kathy Grise IEEE 445 Hoes Lane Piscataway NJ USA 0', '200'),
('29 Oct - 01 Nov 2014 ', 'Sheraton Bangalore Hotel at Brigade Gateway', 'Kathy Grise IEEE 445 Hoes Lane Piscataway NJ USA 0', '400'),
('29 Oct - 01 Nov 2014 ', 'Sheraton Bangalore Hotel at Brigade Gateway', 'Kathy Grise IEEE 445 Hoes Lane Piscataway NJ USA 0', '400'),
('15 Oct - 17 Oct 2014', 'Sheraton Bangalore Hotel at Brigade Gateway', 'Kathy Grise IEEE 445 Hoes Lane Piscataway NJ USA 0', '100'),
('29 Oct - 01 Nov 2014 ', 'Sheraton Bangalore Hotel at Brigade Gateway', 'Kathy Grise IEEE 445 Hoes Lane Piscataway NJ USA 0', '100'),
('11 Oct - 13 Oct 2014 ', 'Sheraton Bangalore Hotel at Brigade Gateway', 'Kathy Grise IEEE 445 Hoes Lane Piscataway NJ USA 0', '150'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eventtab`
--

CREATE TABLE IF NOT EXISTS `eventtab` (
  `description` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventtab`
--

INSERT INTO `eventtab` (`description`, `time`, `place`) VALUES
('IECON 2014 - 40th Annual Conference of the IEEE In', 'October - 1 November 2014 |', ' Dallas, TX, USA '),
('2014 IEEE International Conference on Cloud Comput', 'October - 17 October 2014 |', 'Bangalore, India ');

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE IF NOT EXISTS `executive` (
  `Name` varchar(50) NOT NULL,
  `current` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `executive`
--

INSERT INTO `executive` (`Name`, `current`, `email`) VALUES
('Dr. Ajai Jain', 'CSE Department, IIT Kanpur', 'ajain@iitk.ac.in'),
('Dr. Jayanta Chatterjee', 'IME Department, IIT Kanpur', 'jayanta@iitk.ac.in'),
('Dr. A .K. Chaturvedi', 'EE Department, IIT Kanpur', 'akc@iitk.ac.in'),
('Dr. S. P. Das', 'EE Department, IIT Kanpur ', 'spdas@iitk.ac.in'),
('Dr. Ekram Khan', ' Department of Electronics Engg, AMU, Aligarh', 'ekhan67@gmail.com'),
('Dr Yogesh S Chauhan', 'EE Department', 'chauhan@iitk.ac.in '),
(' Dr Nandini Gupta', 'EE Department', 'ngupta@iitk.ac.in'),
('Mr. Ramesh Negi', 'All-India Radio', 'rameshnegi@yahoo.com'),
(' Dr R. Gowri, Director', 'Graphic Era Hill University, Dehradun', 'ravigowri07@gmail.com'),
('Prof. R K Srivastava', 'EE Department, IIT BHU', '(rksrivastava.eee@itbhu.ac.in )'),
(' Dr. Anoop Singh', 'IME Department, IIT Kanpur', 'anoops@iitk.ac.in'),
('Dr. Satish K Singh', ' IIIT Allahabad', 'sk.singh@iiita.ac.in'),
(' Dr. Narendra Kohli', 'CSE Department, HBTI, Kanpur', 'kohli.hbti@gmail.com '),
('Dr. Mohd Rihan', ' EE Department, AMU Aligarh', 'm.rihan.ee@amu.ac.in'),
('Dr. Sanjeev Manhas', 'ECE Department IIT Roorkee', 'samanfec@iitr.ac.in'),
('Dr Aseem Chandel', ' EE Department, BSA Mathura', 'aseemchandel@gmail.com'),
('Dr Abhay Bansal', ' CSE Department, Amity University, Noida', 'abansal1@amity.edu'),
('Dr Parma Nand Astya', 'School of CSE, Galgotia University, Noida', 'astya2005@gmail.com'),
(' Mr. P Banerjee', ' IEEE Student Branch, IITK (student representative', 'param@iitk.ac.in'),
(' Dr. Sunil Kumar Khatri', 'AIIT, Amity University, Noida', 'sunilkkhatri@gmail.com'),
('Dr Seethalekshmi K', 'Director, BBDNITM, Lucknow,', 'seethalk07@gmail.com'),
('Dr Seethalekshmi K', 'Director, BBDNITM, Lucknow,', 'seethalk07@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `future`
--

CREATE TABLE IF NOT EXISTS `future` (
  `Year` varchar(20) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Sessional` int(20) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `future`
--

INSERT INTO `future` (`Year`, `Location`, `Sessional`, `Type`) VALUES
('Jan 11-16', 'Hyatt Regency Atlanta, Atlanta, GA, USA ', 149, 'Intern'),
('Sep 13-18', 'Asia  (TBD) (Note - no separate China Interim) ', 153, 'Intern '),
('Nov 8-13', 'Hyatt Regency, Dallas, TX, USA ', 154, 'Planery'),
('Jan 17-22 ', 'Sands Venetian Hotel, Macau, PRC ', 156, 'Planery'),
('Sep ', 'San Diego, CA, USA ', 158, 'Planery'),
('Nov 6-11', 'Grand Hyatt San Antonio, San Antonio, TX, USA ', 160, 'Planery'),
('Jul 9-14 ', 'Estrel Hotel and Convention Center, Berlin, German', 164, 'Planery'),
('Jul 14-19 ', 'Manchester Grand Hyatt, San Diego, CA, USA ', 170, 'Planery');

-- --------------------------------------------------------

--
-- Table structure for table `india`
--

CREATE TABLE IF NOT EXISTS `india` (
  `date` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `presenter` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `india`
--

INSERT INTO `india` (`date`, `title`, `presenter`, `time`, `venue`) VALUES
('Dec 5 to 7, 2014', '6th IEEE POWER INDIA International Conference 2014', ' organized by IEEE PES-IAS Delhi Chapter & IEEE PE', '10:00 AM', ' II-A 101, Bharti School of Telecommunication Tech'),
('Dec 5 to 7, 2014', '(Technical Talk) Hardware-Software Co-Design in Em', 'IEEE Hyderabad Section', '10:00 AM', ' II-A 101, Bharti School of Telecommunication Tech'),
('September 19-20, 2014', 'International Conference on Smart Electric Grid -2', 'Department of Electrical and Electronics Engineeri', '10:00 AM', ' II-A 101, Bharti School of Telecommunication Tech'),
('September 19 ,2014', 'Joint Chapter of Circuits and Systems and Electron', 'Austria Microsystems (AMS) – Hyderabad and Vasavi ', '10:00 AM', ' II-A 101, Bharti School of Telecommunication Tech'),
('October 3, 2013', 'IEEE All India Student Congress (AISC) 2013 kicked', 'Amrita University', '10:00 AM', ' II-A 101, Bharti School of Telecommunication Tech');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `Year` varchar(20) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Session` int(5) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`Year`, `Location`, `Session`, `Type`) VALUES
('jul 12-13 ,2014 ', 'London', 151, 'Intern'),
('July 9-14,2017 ', 'Estrel Hotel and Convention Center, Berlin, German', 164, 'Planery'),
('January 11-16,2015 ', 'Xi''an, China ', 155, 'China,Interim'),
('January 11-16,2015 ', 'Hyatt Regency Atlanta, Atlanta, GA, USA ', 149, 'Intern ');

-- --------------------------------------------------------

--
-- Table structure for table `meetingtab`
--

CREATE TABLE IF NOT EXISTS `meetingtab` (
  `description` varchar(300) NOT NULL,
  `time` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetingtab`
--

INSERT INTO `meetingtab` (`description`, `time`, `place`) VALUES
('All interested parties are welcome to attend our open Public meetings of the IEEE 802.11 Working Group, you do not have to be an IEEE member to attend.', '7-10 December, 2014', 'Hong Kong'),
('2014 IEEE PES Asia-Pacific Power & Energy Engineering Conference (APPEEC) ', '7-10 December, 2014', 'Hong Kong');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`username`, `password`) VALUES
('akash', 'akash');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `new` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new`) VALUES
('IEEE Computer Society Looks to the Future with Report on Top Technologies for 2022\r\nWhat will the technology landscape look like in 2022? Nine technologists led by IEEE Computer Society President Dejan Milojicic have spent much of this year trying to answer that question. The results can be found in the IEEE CS 2022 Report, a living document that surveys 23 future technologies that could change the world by 2022.'),
(' IEEE Journals Sustain High Rankings in Newest Citation Reports\r\nIEEE has maintained its position as one of the top publishers of science and technology journals.'),
('IEEE Statement Regarding Updating of its Standards-Related Patent Policy\r\nThe rules for the use of proprietary technologies in complex, collaborative technology platforms, such as ICT standards, should ensure an appropriate balance between the interests of technology developers, standards implementers, and consumers'),
('IEEE Experts Discuss the Future of Driverless Cars\r\nWhat will the car of the future look like? Learn more about what the future holds for driverless cars directly from IEEE experts through a series of "Driverless Car Confessions" videos and survey results collected on site at the 2014 IEEE Intelligent Vehicle Symposium and from experts around the world.'),
('Celebrating the 2014 IEEE Honors Ceremony Recipients\r\nThe accomplishments of IEEE Life Fellow B. Jayant Baliga will be recognized with the IEEE Medal of Honor during the IEEE Honors Ceremony on 23 August in Amsterdam, the Netherlands. The event will be streamed live on IEEE.tv beginning at 7:00 p.m. CEST (1700 UTC-05).');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `Committee` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `current` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`Committee`, `Name`, `current`, `email`) VALUES
('Convener, Awards & Recognition Committee', ' Dr. S. C. Srivastava', 'EE Department IITK', 'scs@iitk.ac.in'),
('Convener, Electronic Communication and Promotion C', 'Dr. Y. N. Singh', 'EE Department, IIT Kanpur', 'ynsingh@iitk.ac.in'),
('Convener, Students Activities Committee', 'Dr. Rajesh Gupta', ' Department of Electrical Engg,MNNIT Allahabad', 'rajeshgupta@mnnit.ac.in'),
('Convener, Professional Activities Committee', 'Dr. Adrish Banerjee', 'EE Department, IIT Kanpur', 'adrish@iitk.ac.in'),
('Convener, Membership Development Committee', ' Dr. Munesh Chandra Trivedi', 'ABES Engineering College, Ghaziabad', 'munesh.trivedi@gmail.com'),
('Convener, Publication & Section History Committee', 'Dr. A.R. Harish', 'EE Department, IIT Kanpur', 'arh@iitk.ac.in'),
('Convener, Educational Activities Committee ', 'Dr. Kumar Vaibhav Srivastava', 'EE Department, IIT Kanpur', 'kvs@iitk.ac.in'),
('Convener, Women in Engineering (WIE) affinity Grou', 'Dr Vineeta Agrawal', 'EE Department, MNNIT Allahabad', 'vineeta@mnnit.ac.in'),
('Convener, Young Professional/Graduate of Last Deca', 'Mr Kumar Govind', 'Graphic Era University, Dehradun,', '(kmrgovind@gmail.com'),
('Convener, Special Interest Group of Humanitarian T', 'Dr Asheesh K Singh', 'Department of Electrical Engineering, MNNIT Allaha', 'asheesh@mnnit.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `up`
--

CREATE TABLE IF NOT EXISTS `up` (
  `date` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `presenter` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up`
--

INSERT INTO `up` (`date`, `title`, `presenter`, `time`, `venue`) VALUES
('Feb 28- March 2, 2014', ' 20th National Conference on Communications', 'Indian Institute of Technology, Kanpur ', '10:00 AM', 'Indian Institute of Technology, Kanpur '),
('November 23-25, 2014,', '3rd International Conference on Multimedia Signal ', ':Department of Electronics Engineering, Aligarh Mu', '10:00 AM', ':Department of Electronics Engineering, Aligarh Mu'),
('September 03-04, 2014,', 'International Conference on Recent Advances in Com', 'United Institute of Technology, Allahabad, in Asso', '10:00 AM', 'United Institute of Technology, Allahabad, in Asso'),
('March 13 – 15, 2014,', '3rd International Conference on Advances in Contro', 'Indian Institute of Technology, Kanpur.', '10:00 AM', 'Indian Institute of Technology, Kanpur.'),
('Feb 20-21, 2014', 'International Conference on Signal Processing and ', 'AMITY University Noida', '10:00 AM', 'AMITY University Noida');

-- --------------------------------------------------------

--
-- Table structure for table `world`
--

CREATE TABLE IF NOT EXISTS `world` (
  `date` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Presenter` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Hosted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `world`
--

INSERT INTO `world` (`date`, `Title`, `Presenter`, `Time`, `Venue`, `Hosted`) VALUES
('Thursday, 2 October 2014', 'Scaling Big Data with Nutch and Solr on Hadoop', ' Dr Dengya (Simon) Zhu, School of Information Syst', '10:00am', 'Curtin University, Bentley Campus, Building 402, L', 'IEEE SMC WA Chapter and IEEE CS WA Chapter'),
('27-30 September 2014', 'The IEEE-RAS Response Robotics Summer School and W', ' Dr Dengya (Simon) Zhu, School of Information Syst', '10:00am', 'Curtin University and the Perth Artifactory', 'Joint Chapter of Computational Intelligence Societ'),
('Wednesday, 10 September 2014', ' Bombora Wave Power: Pioneering, award winning Wav', 'Shawn Ryan MIEAust Executive Director - Bombora Wa', ' 5.45 pm', ' Auditorium Engineers Australia 712 Murray Street ', 'Joint Electrical Electronic Papers'),
('Wednesday, 13 August 2014', 'Microgrid - Current Status and Future', 'Prof Arindam Ghosh, Ph.D, FIEEE - Research Academi', ' 5.45 pm', 'Auditorium Engineers Australia 712 Murray Street W', 'Joint Electrical Electronic Papers'),
('Wednesday, 13 August 2014', 'Art and Robotics: A Conversation with Stelarc', 'Stelarc ', ' 5.45 pm', ' Engineering Pavilion, Curtin University Bentley, ', 'Joint Chapter of Computational Intelligence Societ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
