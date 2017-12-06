-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 06, 2017 at 04:24 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Sport_System`
--

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `organizer_ID` int(20) NOT NULL,
  `organizer_name` varchar(100) NOT NULL,
  `organizer_description` varchar(600) NOT NULL,
  `org_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`organizer_ID`, `organizer_name`, `organizer_description`, `org_featured`) VALUES
(301, 'Happy Inc.', 'Happy sports happy life', 0),
(302, 'Sad Sports', 'make sad more fun', 1),
(303, 'Cry sports', 'turn cry into energy', 0),
(304, 'ABC Sports', 'Artifacts and structures suggest sport in China as early as 2000 BC.[16] Gymnastics appears to have been popular in China\'s ancient past. Monuments to the Pharaohs indicate that a number of sports, including swimming and fishing, were well-developed and regulated several', 1),
(305, 'Over-power Inc.', 'Sportsmanship is an attitude that strives for fair play, courtesy toward teammates and opponents, ethical behaviour and integrity, and grace in victory or defeat.[21][22][23]\r\n\r\nSportsmanship expresses an aspiration or ethos that the activity will be enjoyed for its own sake.', 1),
(306, 'Never-S Inc.', 'Key principles of sport include that the result should not be predetermined, and that both sides should have equal opportunity to win. Rules are in place to ensure that fair play to occur, but participants can break these rules in order to gain advantage.', 0),
(307, 'U&M Sports', 'The competitive nature of sport encourages some participants to attempt to enhance their performance through the use of medicines, or through other means such as increasing the volume of blood in their bodies through artificial means.', 0),
(308, 'KC Sports', 'Disabled sports also adaptive sports or parasports, are sports played by persons with a disability, including physical and intellectual disabilities. As many of these based on existing sports modified to meet the needs of persons with a disability, they are sometimes referred to as adapted sports. However, not all disabled sports are adapted; several sports that have been specifically created for persons with a disability have no equivalent in able-bodied sports.', 1),
(309, 'College Sports', 'Youth sports present children with opportunities for fun, socialization, forming peer relationships, physical fitness, and athletic scholarships. ', 0),
(310, 'Disabled Sports', 'Disabled sports also adaptive sports or parasports, are sports played by persons with a disability, including physical and intellectual disabilities. ', 1),
(311, 'BF Inc.', 'Technology plays an important part in modern sports. With it being a necessary part of some sports (such as motorsport), it is used in others to improve performance. Some sports also use it to allow off-field decision making.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_ID` int(10) NOT NULL,
  `session_title` varchar(50) NOT NULL,
  `session_photo` int(1) DEFAULT NULL,
  `short_description` varchar(200) NOT NULL,
  `long_description` varchar(500) NOT NULL,
  `format` varchar(20) NOT NULL,
  `sport_cat` int(3) NOT NULL,
  `date` date NOT NULL,
  `start_time` time(3) NOT NULL,
  `end_time` time(3) NOT NULL,
  `no_of_tickets` int(3) NOT NULL,
  `ticket_available` int(3) NOT NULL,
  `ticket_price` float NOT NULL,
  `level` varchar(20) NOT NULL,
  `is_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_ID`, `session_title`, `session_photo`, `short_description`, `long_description`, `format`, `sport_cat`, `date`, `start_time`, `end_time`, `no_of_tickets`, `ticket_available`, `ticket_price`, `level`, `is_featured`) VALUES
(101, 'Gym exercise', 1, 'Gym Training', 'Gym Training', 'Group', 4, '2017-12-28', '10:00:00.000', '12:00:00.000', 30, 10, 150, 'Let me try', 0),
(102, 'Gym Training', 2, 'Gym Training', 'Gym Training', 'Group', 4, '2017-12-31', '13:00:00.000', '15:00:00.000', 15, 6, 160, 'Beginner', 1),
(103, 'American football is FUN', 3, 'American football', 'American football', 'Group', 1, '2018-01-26', '07:00:00.000', '10:00:00.000', 10, 6, 320, 'Advanced', 1),
(104, 'Yoga !!!!!', 4, 'Yoga is a group of physical, mental, and spiritual practices or disciplines which originated in ancient India. ', 'Yoga is a group of physical, mental, and spiritual practices or disciplines which originated in ancient India. There is a broad variety of yoga schools, practices, and goals in Hinduism, Buddhism, and Jainism. Among the most well-known types of yoga are Hatha yoga and R?ja yoga. The origins of yoga', 'Group', 7, '2017-12-26', '18:00:00.000', '19:00:00.000', 20, 0, 170, 'Beginner', 1),
(105, 'Badminton competition', 5, '\"There\'s no guarantee you\'ll be picked for a team or bought. Everyone has a base price and you enter into the auction, basically it\'s just a simple bidding war between the teams.', 'For a player trying to cope with the loss of around £30,000 per year due to funding cuts, the £38,000 she will earn for 24 days of competition could not have come at a better time.\r\n\r\nBut for Scotland\'s number one, the chance to train and compete with the world\'s best players is just as important as the cash she will pocket.\r\n\r\n\"Someone from one of the teams got in touch with me asking if I wanted to be involved,\" Gilmour, 24, told BBC Scotland.\r\n\r\n', 'Group', 2, '2018-02-15', '09:00:00.000', '11:00:00.000', 10, 10, 50, 'Intermediate', 1),
(106, 'Learn to swim', 6, 'British Swimming said he \"acknowledged mistakes had been made\" but he remains in post at the Manchester-based organisation. Furber was not found to have been abusive or discriminatory. ', 'Earlier this week, Greenwood issued a statement in which he said: \"I wholly reject the allegations of bullying, intimidation and all other criticisms made of me.\" He insisted \"no swimmer or member of staff ever raised any concerns with me about an alleged \'climate of fear\'. I do not consider I was ever knowingly offensive or insulting\". He has said the training techniques he employed were approved by both other staff and athletes. ', 'Group', 8, '2018-01-07', '14:00:00.000', '15:00:00.000', 30, 15, 100, 'Let me try', 0),
(107, 'Tennis lesson', 7, 'Andy Murray using management company to develop Britain\'s next sports stars', 'For the first time, double Wimbledon champion Murray has spoken about his new venture in sports management.\r\n\r\nIn an exclusive interview with BBC Sport, the 30-year-old Scot explains his plan to recruit and mentor top prospects, while still competing at the highest level himself - and how he will use his own experiences of the pressure and pitfalls faced by an up-and-coming athlete.', 'Group', 5, '2017-12-21', '15:00:00.000', '16:00:00.000', 20, 11, 120, 'Intermediate', 1),
(108, 'Diving lesson(easy)', 8, 'Tonia Couch: three-time Olympian to take up coaching role after retirement', 'Three-time Olympian Tonia Couch has announced her retirement from diving, after a 12-year senior career.\r\n\r\nCouch, 28, is one of Britain\'s most decorated female divers having won silver at Glasgow\'s Commonwealth Games in 2014 and three European medals.\r\n\r\nShe last competed at the World Championships in July, but will now take up a coaching role in her home city of Plymouth.', 'Group', 3, '2017-12-24', '16:00:00.000', '17:00:00.000', 30, 12, 120, 'Let me try', 1),
(109, 'Advanced football traning', 9, 'FA Cup third-round draw: Liverpool v Everton, Man Utd v Derby, Forest v Arsenal', 'Liverpool will face Everton in the FA Cup third round, while holders Arsenal will travel to Nottingham Forest.\r\n\r\nPremier League leaders Manchester City have a home tie against Burnley, Manchester United host Derby and Chelsea are away at Norwich.\r\n\r\nSeventh-tier Hereford, the lowest-ranked side left, will face Leicester if they overcome Fleetwood at the second attempt.', 'Group', 1, '2018-01-19', '09:00:00.000', '12:00:00.000', 10, 1, 420, 'Advanced', 0),
(110, 'Heavy training in GYM room', 10, 'Eddie van Hoof: British Gymnastics suspends coach amid investigation', 'Eddie van Hoof has been suspended by British Gymnastics as an independent investigation is conducted into allegations of misconduct.\r\n\r\nVan Hoof, men\'s technical director at the Rio Olympics as Britain won five medals, was UK coach of the year 2016.\r\n\r\nIn Rio, Max Whitlock won two golds and a bronze, Louis Smith took silver, while Nile Wilson won bronze.', 'Group', 4, '2018-04-06', '09:00:00.000', '12:00:00.000', 10, 10, 500, 'Advanced', 0),
(111, 'Personal Table Tennis Training', 11, 'Welsh Para table tennis player Paul Karabardak wins European team title', 'Welsh Para table tennis player Paul Karabardak has won team gold at the European Championships in Slovenia, alongside Martin Perry and David Wetherill.\r\n\r\nThe British trio took gold in the men\'s class 6 team event, beating world silver medallists Croatia in the final.\r\n\r\n\"My first major gold is special and I\'m pleased I could play my best,\" said Karabardak.', 'Personal Training', 6, '2018-02-17', '12:00:00.000', '13:00:00.000', 1, 0, 300, 'Intermediate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `session_book`
--

CREATE TABLE `session_book` (
  `book_ID` int(10) NOT NULL,
  `session_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_book`
--

INSERT INTO `session_book` (`book_ID`, `session_ID`) VALUES
(601, 102),
(602, 106),
(603, 104),
(604, 103),
(605, 101);

-- --------------------------------------------------------

--
-- Table structure for table `session_organizer`
--

CREATE TABLE `session_organizer` (
  `session_ID` int(10) NOT NULL,
  `organizer_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_organizer`
--

INSERT INTO `session_organizer` (`session_ID`, `organizer_ID`) VALUES
(101, 304),
(101, 307),
(102, 303),
(103, 307),
(104, 305),
(105, 310),
(106, 309),
(107, 306),
(108, 301),
(109, 311),
(110, 308),
(111, 302);

-- --------------------------------------------------------

--
-- Table structure for table `session_trainer`
--

CREATE TABLE `session_trainer` (
  `session_ID` int(10) NOT NULL,
  `trainer_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_trainer`
--

INSERT INTO `session_trainer` (`session_ID`, `trainer_ID`) VALUES
(101, 203),
(101, 204),
(102, 201),
(103, 206),
(104, 208),
(105, 214),
(107, 214),
(108, 205),
(108, 207),
(109, 210),
(110, 212),
(111, 209),
(106, 213);

-- --------------------------------------------------------

--
-- Table structure for table `session_venue`
--

CREATE TABLE `session_venue` (
  `session_ID` int(10) NOT NULL,
  `venue_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_venue`
--

INSERT INTO `session_venue` (`session_ID`, `venue_ID`) VALUES
(101, 406),
(102, 401),
(103, 408),
(104, 407),
(105, 403),
(106, 404),
(107, 402),
(108, 403),
(109, 408),
(110, 406),
(111, 407);

-- --------------------------------------------------------

--
-- Table structure for table `sport_cat`
--

CREATE TABLE `sport_cat` (
  `cat_id` int(1) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sorting` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport_cat`
--

INSERT INTO `sport_cat` (`cat_id`, `category`, `sorting`) VALUES
(1, 'American Football', 1),
(2, 'Badminton', 2),
(3, 'Diving', 3),
(4, 'Gymnastics', 4),
(5, 'Tennis', 5),
(6, 'Table Tennis', 6),
(7, 'Yoga', 7),
(8, 'Swimming', 8);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_ID` int(20) NOT NULL,
  `trainer_name` varchar(50) NOT NULL,
  `trainer_description` varchar(600) NOT NULL,
  `trainer_curriculum` varchar(600) NOT NULL,
  `tr_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_ID`, `trainer_name`, `trainer_description`, `trainer_curriculum`, `tr_featured`) VALUES
(201, 'Jacky Chan', '1 year history', 'gym', 0),
(202, 'Ashley Ma', '4 Year History', 'Basketball', 1),
(203, 'Ben Ng', '5 year history', 'Everything', 1),
(204, 'Peter Chan', 'PE teacher', 'gym', 0),
(205, 'Elvis Leung', 'PE teacher in primary school', 'Everything', 1),
(206, 'Mary Choi', 'Coach in American football', 'American football', 1),
(207, 'Jason Wong', '10 years teaching experience', 'Diving', 1),
(208, 'Tommy Kok', 'Part time yoga teacher', 'Yoga', 0),
(209, 'Paul Karabardak', 'The British trio took gold in the men\'s class 6 team event, beating world silver medallists Croatia in the final.', 'Table tennis', 1),
(210, 'Alex Lau', 'Only teach newbies', 'volleyball,football', 0),
(211, 'Kristy Choi', 'NULL', 'Everything', 0),
(212, 'Cliff Cheung', 'NULL', 'Everything', 1),
(213, 'Ken Cheung', 'NULL', 'Everything', 0),
(214, 'Kevin Chuk', 'NULL', 'Everything', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `fristname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `username`, `password`, `is_admin`, `email`, `phone_no`, `fristname`, `lastname`) VALUES
(501, 'ksleung45', '123456', 0, 'leung1234@gmail.com', '45678912', '', ''),
(502, 'mary123', 'abcd1234', 1, 'mary12mary@outlook.com', '87456871', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_book`
--

CREATE TABLE `user_book` (
  `session_ID` int(10) NOT NULL,
  `user_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_book`
--

INSERT INTO `user_book` (`session_ID`, `user_ID`) VALUES
(102, 501);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_ID` int(20) NOT NULL,
  `venue_name` varchar(100) NOT NULL,
  `venue_description` varchar(600) NOT NULL,
  `city` varchar(100) NOT NULL,
  `venue_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_ID`, `venue_name`, `venue_description`, `city`, `venue_location`) VALUES
(401, 'Mei Foo Sports Center', 'Sport Center', 'Hong Kong', 'Mei Foo'),
(402, 'Mong Kok Sports Center', 'Sports Center', 'Hong Kong', 'Mong Kok'),
(403, 'Ma On Shan Swimming Pool', 'fee: 30HKD', 'Hong Kong', '33 On Chun Street,Ma On Shan'),
(404, 'Sha Tin Jockey Club Swimming Pool', '*Main pool, Secondary pool, Training pool, Teaching pool (2), Diving pool, Children pool, Spectator stand (700 seats), Electronic scoreboard, Family changing room\r\nThe toddlers\' pool (water depth under 0.5 metre) is open from June to August free of charge', 'Hong Kong', '10 Yuen Wo Road, Sha Tin'),
(405, 'KK Sports Centre', 'Organize sports activities', 'Hong Kong', '56 KK street,Tai Wo'),
(406, 'ABC GYM Romm', 'gym room', 'Hong Kong', '2048 ABC street,Causeway Bay'),
(407, 'PTK Sports Center', '100% free', 'Hong Kong', '12 mad street,Kowloon Tong'),
(408, 'OK Sports Center', 'NULL', 'Hong Kong', '147 rich street,Shek Kip Mei'),
(409, 'National parks', 'The Statue of Liberty National Monument and Ellis Island Immigration Museum are managed by the National Park Service and are in both the states of New York and New Jersey. They are joined in the harbor by Governors Island National Monument, in New York.', 'New York', '26 Wall St, New York');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`organizer_ID`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_ID`);

--
-- Indexes for table `sport_cat`
--
ALTER TABLE `sport_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `organizer_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `sport_cat`
--
ALTER TABLE `sport_cat`
  MODIFY `cat_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;
