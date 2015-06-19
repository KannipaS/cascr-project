-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2015 at 04:22 PM
-- Server version: 5.5.42
-- PHP Version: 5.5.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `work`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(4) NOT NULL,
  `ad_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ad_password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ad_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_password`, `ad_name`) VALUES
(1, 'benz', 'benz1', 'benz');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10006 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(10001, 'KODERA'),
(10002, 'Ture Soltec'),
(10003, 'STAR TEC PACIFIC (STP)'),
(10004, 'KM DIGITECH'),
(10005, 'OTHER');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(5) NOT NULL,
  `news_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `news_create` date NOT NULL,
  `news_show` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_detail`, `news_create`, `news_show`) VALUES
(1, '1', '&lt;p&gt;1&lt;/p&gt;\n', '2015-05-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(5) NOT NULL,
  `pro_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_title` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_create` datetime NOT NULL,
  `pro_show` int(1) NOT NULL,
  `pro_pic` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_title`, `pro_detail`, `pro_create`, `pro_show`, `pro_pic`, `cat_id`) VALUES
(1, 'C370A', 'C370A', '<h3><img alt="Specifications" src="http://www.kodera.co.jp/english/img/page/text_seihin.gif" style="margin:0px" /></h3><table style="width:530px">	<thead>		<tr>			<th colspan="2">MODEL</th>			<td>C370A</td>		</tr>	</thead>	<tbody>		<tr>			<th colspan="2">OUTER DIMENSIONS</th>			<td>W430mm &times;D450mm &times;H270mm</td>		</tr>		<tr>			<th colspan="2">WEIGHT</th>			<td>26kg</td>		</tr>		<tr>			<th colspan="2">POWER SUPPLY</th>			<td>AC100V～AC240V（Single phase）50Hz/60Hz</td>		</tr>		<tr>			<th colspan="2">POWER CONSUMPTION（100V）</th>			<td>50W（Rated）250W（Max）</td>		</tr>		<tr>			<th colspan="2">CUTTING LENGTH</th>			<td>0.1mm～99,999mm</td>		</tr>		<tr>			<th colspan="2">CUTTING TOLERANCES</th>			<td>&plusmn;（ 0.1＋0.0005&times;L ）mm※2 L:indicates a cutting length.&nbsp;</td>		</tr>		<tr>			<th rowspan="2">STRIPPING LENGTH</th>			<th>FRONT END</th>			<td>0.1～30mm</td>		</tr>		<tr>			<th>REAR END</th>			<td>0.1～30mm</td>		</tr>		<tr>			<th rowspan="3">APPLICABLE WIRES</th>			<th>TYPE</th>			<td>AVSS,VSF, IV, KV, UL,Teflon , Glass Wire, etc</td>		</tr>		<tr>			<th>SIZE</th>			<td>AWG#10（5.5sq）～AWG#32（0.03sq）※2</td>		</tr>		<tr>			<th>O.D.</th>			<td>Max &phi;6mm※2</td>		</tr>		<tr>			<th colspan="2">WIRE FEED SPEED</th>			<td>Variable</td>		</tr>		<tr>			<th colspan="2">CUTTER MATERIAL</th>			<td>Ultra fine particle alloy&nbsp;</td>		</tr>		<tr>			<th colspan="2">DRIVE SUPPLY</th>			<td>Stepping puls motor</td>		</tr>	</tbody></table><p>※2. Depending on the wire type.</p><h3><img alt="Processing capacity (Actual data)&lt;Number of processed wires per hour&gt; " src="http://www.kodera.co.jp/english/img/page/text_kakou.gif" style="margin:0px" /></h3><table style="width:310px">	<thead>		<tr>			<th>Total Length</th>			<th>Pieces</th>		</tr>	</thead>	<tbody>		<tr>			<td>　　50mm</td>			<td>10,500</td>		</tr>		<tr>			<td>　100mm</td>			<td>10,300</td>		</tr>		<tr>			<td>　200mm</td>			<td>　9,100</td>		</tr>		<tr>			<td>　300mm</td>			<td>　8,700</td>		</tr>		<tr>			<td>　500mm</td>			<td>　7,600</td>		</tr>		<tr>			<td>　800mm</td>			<td>　6,400</td>		</tr>		<tr>			<td>1000mm</td>			<td>　5,800</td>		</tr>		<tr>			<td>1500mm</td>			<td>　4,700</td>		</tr>		<tr>			<td>2000mm</td>			<td>　3,900</td>		</tr>		<tr>			<td>3000mm</td>			<td>　3,000</td>		</tr>	</tbody></table><h3><img alt="Processing conditions" src="http://www.kodera.co.jp/english/img/page/text_jouken.gif" style="margin:0px" /></h3><p>Both ends stripping 3mm<br />Setting of speed : 9<br />Thin wire mode<br />Wire : UL1007／AWG#22</p>', '2015-01-16 00:00:00', 1, 'no_pic.jpg', 10005),
(2, 'C370A667', 'C370A', '<p>C370A</p>\n\n<p>&quot;</p>\n', '2015-01-16 03:24:36', 1, 'no_pic.jpg', 10002),
(3, 'C370A', 'C370A', '<p>C370A</p>\n\n<p>&quot;</p>\n', '2015-01-16 09:32:35', 1, '1421402930935688549-C370A.PNG', 10002),
(6, 'be edit', 'rrt edit', '<p>editediteditediteditediteditediteditediteditedit</p>\n\n<p>&quot;</p>\n\n<p>&quot;</p>\n', '2015-01-16 02:10:50', 1, '14214029062025464703-be_edit.png', 10002),
(7, 'benz', 'rrt', '<p>ksdfdsklfjdlskfjldkfs</p>\n', '2015-01-16 02:11:25', 1, '14213922852070844943-benz.png', 10001),
(8, 'qwe', 'qwe', '<p>qwe</p>\n', '2015-01-16 02:18:38', 1, 'no_pic.jpg', 10001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10006;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
