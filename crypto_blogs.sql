-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 06:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto_blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category_id`, `title`, `description`, `image`) VALUES
(55, 54, 'Future of crypto currency in 2025', '<p>cryptocurrency is a form of digital currency, in contrast to traditional currencies such as paper money, which can be thought of as an asset. This currency cannot be physically transferred or exchanged at this time. Coins or tokens are used to represent the various cryptocurrencies. Blockchain technology and decentralized network architecture are the foundations of these technologies.</p><p>Their very presence serves to bind a ledger that is both dispersed and decentralized. Cryptography serves to safeguard the cryptocurrency, making it extremely difficult, if not impossible, for impostors to copy it. Another feature of cryptocurrencies is that they are theoretically exempt from the government authorities.</p><p>This means that the government authorities are unable to control or manipulate the regulations that pertain to cryptocurrencies. In the year 2021, the cryptocurrency market reached its zenith, and during this time, we saw the greatest price swings of any of the cryptocurrencies, including Bitcoin, that were being traded on the market.</p><p>In the course of these kinds of deals, there have been individuals who have lost millions of dollars while others have made millions of dollars in profits.</p><p>There are now various uncertainties surrounding the future of cryptocurrencies in the year 2025, and because of this, we can try to analyse the historical growth records of cryptocurrencies, which range from $923 million to $6.6 billion by May of 2021.</p>', '../assets/image/blog5aimg.jpg'),
(56, 54, 'Bitcoin, How To Mine And Use It?', '<h4>What describes Bitcoin mining?<br>&nbsp;</h4><p>Bitcoin mining is considered as a process to generate new Bitcoins. While it may sound simple, the process involves a lot of work. Bitcoin miners are those who provide their computing power to verify transactions occurring in Bitcoin network and mint new Bitcoins in return. To carry out this process and mine new Bitcoins, you need a hardware called ASIC. It is an electronic circuit that is highly customized for a particular use and by itself worthless unless it\'s used for that purpose only.</p>', '../assets/image/blog4a.jpg'),
(57, 55, 'How does Bitcoin mining work ?', '<h4>Bitcoin technology?</h4><p>Blockchain is a method of recording information that makes it impossible or difficult for the system to be changed, hacked, or manipulated. A blockchain is a distributed ledger that duplicates and distributes transactions across the network of computers participating in the blockchain.</p>', '../assets/image/blog5aimg.jpg'),
(58, 55, 'Ethereum price prediction 2025', '<h4>Ethereum price highs and lows</h4><p><br>&nbsp;</p><p>Up to now, you would have a good idea about Ethereum\'s performance from the last few years to 2022. Now, let us have a look at statistics from 2015 to 2022.</p><ul><li>2015 - It first steps in the market at price of $ 0.75</li><li>October 2015 -$_COOKIE Ethereum proves to be highly volatile and goes to a low of $0.52</li><li>January 2018 - It hits a milestone of $ 1360</li><li>November 2021 - Again hits a high of $4800</li><li>September 2022 - Due to over, Ethereum drops to $ 1200 and becomes red after one month.</li></ul>', '../assets/image/blog4a.jpg'),
(60, 56, 'How does Bitcoin mining work ?', '<h4>Necessary procedure for mining Bitcoin are :</h4><p><br>&nbsp;</p><ul><li>Wallet : This is the place where your bitcoins will get stored after you start earn as a result of your bitcoin mining efforts of the process will be stored. A wallet is an online account that allows you to store and transfer bitcoin or other cryptocurrencies.</li><li>Mining software : There are many types of provides of mining software, Most of the software is free and used and can be easily downloaded from their respective websites, these are very compatible and can be easily run on Mac computers and windows. Once the software is connected with the important part which is hardware, you can start the process of Bitcoin mining .</li><li>Computer equipment : The crucial component of bitcoin mining is the hardware of computer. Mining will require a powerful computer that uses a huge amount of electricity for successful mining. this hardware is very costly and can go up to $ 10000 or even more.</li></ul>', '../assets/image/blog5aimg.jpg'),
(61, 56, 'Future of crypto currency in 2025', '<h4><br>Advantages of cryptocurrency</h4><p>1. The exchange of coins (cryptocurrencies) has become more efficient because it does not require the participation of a middleman, such as a bank, in order to finish the transaction; rather, it is immediately sent and received by both parties.</p><p>2. Each and every transaction is protected by employing either public or private keys and an incentive mechanism, such as proof of the job that you have completed or proof of the stake that you own.</p><p>3. There are certain processing fees associated with these transactions; however, these prices are quite minor as compared to the substantial charge fees that the financial institution imposes on wire transactions.</p><p>4. The impact of inflation cannot be exerted on cryptocurrencies since they are issued with a predetermined value. Instead, the limited supply and growing demand will force the value of cryptocurrencies to rise in order for them to remain competitive in the market.</p><p>5. Due to the decentralized structure of this money, it does not give anyone monopoly rights over it. This means that no individual or organization can control the value of the currency or the flow of it in order to maintain its stability and safety.</p>', '../assets/image/blog4a.jpg'),
(62, 54, 'Tips to follow for profitable crypto trading', '<h4>Conclusion:</h4><p>Crypto currency can be subject to high risk but you can avoid risk by knowing proper risk management techniques. You could gain high reward by perfectly analysing risk factors and studying economic condition of the market.</p><p>Inflation and depression can also give you losses but knowing all this before hand you might be able to convert your losses into profit. So always make the proper research and use proper tool while doing trade in crypto market.</p><p>So after going through this article we have come across various tips that will make our crypto trading profitable. So follow the tips and see the magic. Good luck!</p>', '../assets/image/blog5aimg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `show_in_nav` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogcategory`
--

INSERT INTO `blogcategory` (`id`, `category_name`, `show_in_nav`) VALUES
(54, 'News', 'yes'),
(55, 'CryptoBlogs', 'yes'),
(56, 'Blogs', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `member_fname` varchar(25) NOT NULL,
  `member_lname` varchar(25) NOT NULL,
  `member_name` varchar(25) NOT NULL,
  `member_pass` char(40) NOT NULL,
  `member_email` varchar(30) NOT NULL,
  `member_status` enum('a','d') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_fname`, `member_lname`, `member_name`, `member_pass`, `member_email`, `member_status`) VALUES
(-1, 'Jignesh', 'Dobariya', 'jkdobariya', 'd121b51b6cb53b5ee16798f535bd57c0', 'jigneshkdobariya@gmail.com', 'a'),
(0, 'Ashvin', 'Lathiya', 'ashvin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', '', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `blogcategory`
--
ALTER TABLE `blogcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `member_name` (`member_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `blogcategory`
--
ALTER TABLE `blogcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `blogcategory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
