-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 10:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideal_village`
--

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_digiproducts`
--

CREATE TABLE `marketplace_digiproducts` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `cat_id` varchar(50) NOT NULL,
  `sub_cat_id` varchar(50) NOT NULL,
  `child_cat_id` varchar(50) NOT NULL,
  `product_title` varchar(500) NOT NULL,
  `product_description` varchar(10000) NOT NULL,
  `specifictaions` varchar(500) NOT NULL,
  `tags` varchar(50) NOT NULL,
  `files_included` varchar(500) NOT NULL,
  `version` varchar(50) NOT NULL,
  `compatible_browsers` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `created_date` date NOT NULL,
  `documentation` varchar(255) NOT NULL,
  `views` varchar(255) NOT NULL,
  `license_type` int(1) NOT NULL,
  `instalation_support` varchar(100) NOT NULL,
  `updated_dated` date NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `main` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_digiproducts`
--

INSERT INTO `marketplace_digiproducts` (`id`, `site_id`, `vendor_id`, `parent_id`, `cat_id`, `sub_cat_id`, `child_cat_id`, `product_title`, `product_description`, `specifictaions`, `tags`, `files_included`, `version`, `compatible_browsers`, `price`, `created_date`, `documentation`, `views`, `license_type`, `instalation_support`, `updated_dated`, `status`, `verified`, `main`) VALUES
(1, 2, 1, -1, 'Fashion', 'Men', 'Casual', 'Hoodie', 'teytktecgtr idgfk sdgfkiu ssgfkusg ssddgvkisgu hgdkcyugs', 'sdkjf asdcusygd jadghcuysg jaghdcug mashscafdc jshfjafc', 'amyd, nsafdu, hasdfjf, atysdfj, ajshfd', 'jsaf.pdf, madh.doc, mayds.mp4, jmdf.mp3', '10.2.2', 'chrome. safari, firefox', 30, '2022-06-16', 'jasdjyf dgkus dfkugy audyfu jdfkuysg aygdfkuy uyuyfdk', '20005', 0, 'jefg kuyef uyufdkuy sygdkfuy sgdfkyu sygfk skygf', '2022-04-22', 1, 1, 1),
(2, 2, 2, -1, 'Beverages', 'Drinks', 'Cold Drink', 'CocaCola', 'jdsghc gfous sjsgfiul idgfsu sydgclo wdgky suduygf kuaytfil isidyfg', 'jdg ugfusgd gdfkyug uyugfky dsgfuig sdgv sydgfyg dgcuky sdygckiys', 'hgad, sajgc, ajdfh, ashgcf', 'hgas.jpg, ysefd.jpg, dyf.doc', '2.0.10', 'Chrome, Safari, Internet Explorer', 80, '2022-05-16', 'sjdgk jtadfu uayadfkuy kuayegdfkyu sudyfcgusy kyusdgfyu', '66224', 1, 'jhdfs uafsduky afsdkuyf ausfcu ast', '2022-02-17', 1, 1, 1),
(3, 2, 3, -1, 'Beverages', 'Green Tea', 'Tea', 'Green Tea', 'aefhui adkuyfgu akusydfkyu asdfckuyf asfdku', 'dafs,dhgf kuydgfkyug udfgkusygd kudgf', 'sfwrf, efwe, eferf, efwef', 'efer.jpg', '5.5.1', 'chrome, safari', 15, '2021-06-16', 'jdfygku kusuyegfukyguydsgfuyfg uydfyf yasfdyc', '5013', 0, 'sdgfkyuuhyg iddugfkyug kudgu', '2022-06-24', 1, 1, 1),
(4, 2, 1, -1, 'Fashion', 'Women', 'Casual', 'T-Shirt', 'aeg sifg sdgfkug sdfgsg sfgvkuyg skuyfygvuysg sudgykuyg skudyvkuy', 'amfwd sagd khgdc gdckyu udyfc hdck ydzfcg ydc', 'ajydf, uegyf, jyefg, jeyf, uyafd, gadc', 'sduf.jpg, jsdgh.jpg', '8.2.2', 'Chrome, Firefox', 60, '2022-06-13', 'jhjfg siuf suygf kuyusdgfk suydufgu ksdhgku sdkgv', '3101', 1, 'ejhgf uudgf kusydgfy udgc kuydgf', '2022-06-22', 1, 1, 1),
(5, 2, 2, -1, 'Beverages', 'kyaegf ', 'rwhfguy', 'Red Bull', 'sidygf kuuydg dfc ydfjy jytefd jdfj dfj sdfyfd fdf dufugi kdfg sdgfkg dgkgdfs kgydfkg gdkuyfg uysdg', 'jhagsd jasdgh yweer egf kdhvh hzdgf jdgf ysuefu yudf ydgfu vdcd aghf', 'kagef, disf, gefh, jdg, udg', 'hagd.jpg, hdsg.jpg', '12.0.7', 'Microsoft Edge, Safari', 95, '2022-05-11', 'sfdhg auygdy adyfi dusayfg dsuyfg udysfc jydtft', '223', 0, 'ejajdgh ysdygfkyu ydgf kyadg ydgc', '2022-06-01', 1, 1, 1),
(6, 2, 3, -1, 'Fashion', 'Children', 'Shoes', 'Adidas Sports shoes', 'ajfd audfuy hdhgv iseyt jydguy siuyf zdfky kdkuysf dyfuy audyft uydfuya auyftauydtf ydtfudytfuyt dfuydf', 'jagsdfuk kuaydf yadf iuadfy ydtfy kyduf uyetdf udys', 'efdwe, dfui, uydsgc, ydsg, eugf', 'defsa.jpeg, uiaef.png', '3.3.2', 'Opera, Chrome', 40, '2021-06-03', 'ajeyd uyadfi uyft7 atdru dtyf7etf sdygf suyfuyf uyfsydgf uyfygfuwygefuyg', '3005', 1, 'ajeyd uyadfi uyft7 atdru dtyf7etf sdygf suyfuyf uyfsydgf uyfygfuwygefuyg', '2022-03-17', 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
