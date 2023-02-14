-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 02:34 PM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(199) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category_id`, `title`, `slug`, `description`, `image`) VALUES
(78, 81, 'Cryptocurrency Growth Rate', 'jigu', '&lt;h4&gt;So here are the tips to gain profit in crypto trading:&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Always make proper research about crypto token in which you are investing.&lt;/li&gt;&lt;li&gt;Always read the white papers of the company who has launched the crypto token.&lt;/li&gt;&lt;li&gt;You should gain the knowledge about the technical and fundamental analysis.&lt;/li&gt;&lt;li&gt;You should have patience because sometime you need to hold your cryptocurrency in order to earn maximum profit.&lt;/li&gt;&lt;li&gt;Take out your profit whenever you feel bearish chart is forming.&lt;/li&gt;&lt;li&gt;Always have specific target profits in crypto and add stop loss.&lt;/li&gt;&lt;li&gt;You should be always stay updated with the market and it&#039;s news. Because a good market condition will give you high profit.&lt;/li&gt;&lt;li&gt;Always determine when is the bear market and when is the bull market. Because in bear market you can invest your money and then you will gain maximum return during the bull market.&lt;/li&gt;&lt;li&gt;Don&#039;t be greedy. Whenever you feel that your crypto has reached to specific targeted amount try to sell it don&#039;t wait for more profit it might turn your profit in loses.&lt;/li&gt;&lt;li&gt;You should know the concept of spot trading, future trading and option trading.&lt;/li&gt;&lt;li&gt;Don&#039;t make decisions on the based on emotions, be practical and make practical decisions.&lt;/li&gt;&lt;li&gt;You should also learn about the crypto exchanges/platforms from where you have bought your cryptocurrency because if the exchange becomes bankrupt then it will lock your cryptos and you will result in your loss. Currently binance is the trusted and leading crypto exchange.&lt;/li&gt;&lt;li&gt;You should know about risk vs reward ratio. Try to take profit by analysing risk reward ratio and gain maximum profit.&lt;/li&gt;&lt;li&gt;Always know about the area of support and resistance and try to trade according to that then you will definitely get the profit.&lt;/li&gt;&lt;li&gt;You should also know the concept of staking and lending of the crypto.&lt;/li&gt;&lt;/ul&gt;', '../assets/image/blog5aimg.jpg'),
(79, 82, 'How To Start Investing In Cryptocurrency?', 'jinal', '&lt;p&gt;Bitcoin Mining is a technological process in which we use some tools or websites to mine Bitcoin and follow the process to mine it.…&lt;/p&gt;', '../assets/image/blog4a.jpg'),
(80, 83, 'Exchange Bitcoin to USD', 'you', '&lt;h4&gt;Advantages of cryptocurrency&lt;/h4&gt;&lt;p&gt;1. The exchange of coins (cryptocurrencies) has become more efficient because it does not require the participation of a middleman, such as a bank, in order to finish the transaction; rather, it is immediately sent and received by both parties.&lt;/p&gt;&lt;p&gt;2. Each and every transaction is protected by employing either public or private keys and an incentive mechanism, such as proof of the job that you have completed or proof of the stake that you own.&lt;/p&gt;&lt;p&gt;3. There are certain processing fees associated with these transactions; however, these prices are quite minor as compared to the substantial charge fees that the financial institution imposes on wire transactions.&lt;/p&gt;&lt;p&gt;4. The impact of inflation cannot be exerted on cryptocurrencies since they are issued with a predetermined value. Instead, the limited supply and growing demand will force the value of cryptocurrencies to rise in order for them to remain competitive in the market.&lt;/p&gt;&lt;p&gt;5. Due to the decentralized structure of this money, it does not give anyone monopoly rights over it. This means that no individual or organization can control the value of the currency or the flow of it in order to maintain its stability and safety.&lt;/p&gt;', '../assets/image/blog4a.jpg'),
(81, 81, 'The future of Bitcoin', 'each-and-every-transaction-is-protedted', '&lt;p&gt;2. Each and every transaction is protected by employing either public or private keys and an incentive mechanism, such as proof of the job that you have completed or proof of the stake that you own.&lt;/p&gt;', '../assets/image/blog5aimg.jpg'),
(82, 81, 'How Does a Mining Pool Work?', 'iam', '&lt;p&gt;&quot;Among these factors may be found, but are not limited to, the following:&quot;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Equipment Costs&lt;/li&gt;&lt;li&gt;Electricity prices&lt;/li&gt;&lt;li&gt;How long will it take to make back the money spent on machinery?&lt;/li&gt;&lt;li&gt;The possible effects of difficulty adjustment on profits&lt;/li&gt;&lt;li&gt;The potential effects of Bitcoin price changes on business success&lt;/li&gt;&lt;li&gt;To what point will it be essential to get new software and hardware?&lt;/li&gt;&lt;/ul&gt;', '../assets/image/photo_6296112883171438093_y.jpg'),
(83, 84, 'Conclusion', 'you', '&lt;h2&gt;What should a person know about the cryptocurrency mining pool?&lt;/h2&gt;&lt;p&gt;&lt;strong&gt;B&lt;/strong&gt;itcoin mining has gotten harder and more energy-intensive over time. Since this is the &quot;case, it can be less difficult and more cost-effective to start mining Bitcoins if enough people pool their resources together.&quot;&lt;/p&gt;&lt;p&gt;Multiple users of a network pool their processing resources to mine Bitcoins. The pool&#039;s participants divide the block rewards following the processing power each participant provided.&lt;/p&gt;', '../assets/image/photo_6226293366526685083_y.jpg'),
(84, 81, 'How Does a Mining Pool Work?', 'are', '&lt;h4&gt;Is a Bitcoin Mining Pool Worth it?&lt;/h4&gt;&lt;p&gt;&quot;A miner pool may be the only viable alternative for the typical person considering Bitcoin mining if they wish to make a profit. However, the answer to this &quot;&quot;is a Bitcoin mining pool worthwhile?&quot;&quot; is very contextual.&quot;&lt;/p&gt;&lt;p&gt;&quot;However, mining is tedious and time-consuming, even for the most technically-inclined&quot; &quot;cryptocurrency users. Although there are services that make it simpler for the average person to get started, the profitability of mining still depends on several criteria.&quot;&lt;/p&gt;', '../assets/image/photo_6266816022187191859_y.jpg'),
(85, 82, 'Equipment Costs', 'how', '&lt;h4&gt;How Does a Mining Pool Work?&lt;/h4&gt;&lt;p&gt;Proof-of-work cryptocurrencies like Bitcoin need many miners to work together to find and &quot;solve a block on a blockchain. When a block is found, the miner who found it first gets a reward in the form of a new Bitcoin.&quot;&lt;/p&gt;&lt;p&gt;&quot;At the moment, each block gives out 6.25 Bitcoin. In addition, a Bitcoin can be mined by a&quot; pool of miners after around 10 minutes.&lt;/p&gt;', '../assets/image/blog5aimg.jpg'),
(87, 83, 'gIs a Bitcoin Mining Pool Worth it?', 'hi', '&lt;p&gt;&quot;This is done by giving each miner a fixed &quot;&quot;Share Difficulty&quot;&quot; and the whole pool a fixed &quot;&quot;Share&quot; &quot;Time.&quot;&quot; All miners will send a &quot;&quot;share&quot;&quot; of their hashes at regular intervals, with miners with a higher difficulty rate getting more shares. In return, those in the pool get block rewards equal&quot; to the amount they put into it.&lt;/p&gt;', '../assets/image/photo_6296112883171438093_y.jpg'),
(89, 84, 'Future of crypto currency in 2025', 'hello', '&lt;p&gt;cryptocurrency is a form of digital currency, in contrast to traditional currencies such as paper money, which can be thought of as an asset. This currency cannot be physically transferred or exchanged at this time. Coins or tokens are used to represent the various cryptocurrencies. Blockchain technology and decentralized network architecture are the foundations of these technologies.&lt;/p&gt;&lt;p&gt;Their very presence serves to bind a ledger that is both dispersed and decentralized. Cryptography serves to safeguard the cryptocurrency, making it extremely difficult, if not impossible, for impostors to copy it. Another feature of cryptocurrencies is that they are theoretically exempt from the government authorities.&lt;/p&gt;', '../assets/image/blog5aimg.jpg'),
(93, 110, 'modiji', 'jinal', '&lt;p&gt;dfff&lt;/p&gt;', '../assets/image/banner_second_3.jpeg'),
(94, 111, 'tttttttttttt', 'sdfsfdf', '&lt;p&gt;sdsdff&lt;/p&gt;', '../assets/image/blog1.png'),
(95, 82, 'How are you... I&#039;am Fine! What about you? @jinal', 'how-are-you-i-039-am-fine-what-about-you-jinal', '&lt;p&gt;How are you... I&#039;am Fine! What about you? @jinal&lt;/p&gt;', '../assets/image/banner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `category_name` text NOT NULL,
  `slug` varchar(199) NOT NULL,
  `show_in_nav` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogcategory`
--

INSERT INTO `blogcategory` (`id`, `parent_id`, `category_name`, `slug`, `show_in_nav`) VALUES
(81, 0, 'New', 'jignesh', 'yes'),
(82, 0, 'Crypto Blogs', 'jignasha', 'yes'),
(83, 0, 'Blockchain', 'mansi', 'yes'),
(84, 0, 'Bitcoin', 'janvi', 'yes'),
(101, 82, 'gthbty', 'jay', 'yes'),
(102, 84, 'sdffd', 'chirag', 'yes'),
(103, 101, 'gbhfhbtygty', 'hardik', 'yes'),
(104, 84, 'tytyu', 'mayur', 'yes'),
(105, 84, 'fghghg', 'kuldip', 'yes'),
(106, 0, 'dsfdfdfdf', 'sdsdfdsf', 'yes'),
(107, 82, 'sdfsfdf', 'sdfsdf', 'yes'),
(108, 82, 'dsfdfd', 'dgfdfgdf', 'yes'),
(109, 84, 'sdsds', 'sdss', 'yes'),
(110, 0, 'jinal suhagiya', 'jinal', 'yes'),
(111, 110, 'kevin suhagiya', 'ffdf', 'yes');

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
(-1, 'Jignesh', 'Dobariya', 'jkdobariya', '7a3436805cade3f9a014198a419ad601', 'jigneshkdobariya@gmail.com', 'a'),
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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `blogcategory`
--
ALTER TABLE `blogcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

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
