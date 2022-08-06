-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2022 at 08:21 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `Id_Act` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Act` varchar(30) NOT NULL,
  `Name_Act` varchar(40) NOT NULL,
  `Desc_Act` text NOT NULL,
  `Duration` int(11) NOT NULL,
  `Price_Act` float NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Act`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`Id_Act`, `Type_Act`, `Name_Act`, `Desc_Act`, `Duration`, `Price_Act`, `photo`) VALUES
(1, 'Sport', 'Gym', 'Regular physical activity can improve your muscle strength and boost your endurance. Exercise delivers oxygen and nutrients to your tissues and helps your cardiovascular system work more efficiently. And when your heart and lung health improve, you have more energy to tackle daily chores.', 0, 20, 'gym.jpg'),
(2, 'Relax', 'Spa', 'Taking a spa day is often encouraged, not just because of its relaxation benefits, but also because there are several skin and health benefits which often apply. A spa experience combines aesthetic treatments with relaxation therapy, allowing you reap numerous health benefits.', 0, 150, 'Spa.jpg'),
(3, 'Sport', 'Swimming-Pool', 'It improves cardiovascular fitness and provides a full body work out. A pool is also a good way to get kids outdoors, active, and enjoying the fresh air.', 0, 100, 'pool.jpg'),
(4, 'Sport', 'Tennis-Golf', 'If you don\'t have enough space for a golf course, you can always opt for a tennis court instead. Both of these activities will get attention from your guests, especially if you offer lessons as well. Sport is a great way to use the excess energy and maintenance won\'t cost you a lotchores.', 0, 20, 'tennis.jpg'),
(5, 'subrelax', 'spab', 'Back Message', 60, 125, 'backmessage.jpg'),
(6, 'subrelax', 'spaf', 'Facial Spa Treatement', 60, 65, 'treatement.jpg'),
(7, 'subrelax', 'spas', 'Thai Stone Message', 70, 75, 'stone.jpg'),
(8, 'subrelax', 'spa', 'Thai Foot Message', 60, 65, 'foot.jpg'),
(9, 'Relax', 'Jacuzzi', 'Opening the blood vessels to improve circulation, relaxing the muscles and providing an escape from the pressures of daily life.', 90, 75, 'jacuzzi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `activitiesbooking`
--

DROP TABLE IF EXISTS `activitiesbooking`;
CREATE TABLE IF NOT EXISTS `activitiesbooking` (
  `Id_Book` int(11) NOT NULL,
  `Id_Act` int(11) NOT NULL,
  `StartDate_AB` date NOT NULL,
  `EndDate_AB` date NOT NULL,
  `Time_Act` time NOT NULL,
  `Price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitiesbooking`
--

INSERT INTO `activitiesbooking` (`Id_Book`, `Id_Act`, `StartDate_AB`, `EndDate_AB`, `Time_Act`, `Price`) VALUES
(19, 5, '2022-07-12', '2022-07-12', '08:44:00', 125);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `Id_Book` int(11) NOT NULL AUTO_INCREMENT,
  `CheckIn_Date` date NOT NULL,
  `CheckOut_Date` date NOT NULL,
  `NbrOfPers` int(11) NOT NULL,
  `Nights` int(11) NOT NULL,
  `Id_TR` int(11) NOT NULL,
  `Id_Room` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Credit_Card_Number` bigint(35) NOT NULL,
  `CVV_credit_card` bigint(20) NOT NULL,
  `Expiration_date_credit_card_number` date NOT NULL,
  PRIMARY KEY (`Id_Book`),
  KEY `Test` (`Id_TR`),
  KEY `fk100` (`Id_Room`),
  KEY `can` (`Id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id_Book`, `CheckIn_Date`, `CheckOut_Date`, `NbrOfPers`, `Nights`, `Id_TR`, `Id_Room`, `Id_User`, `Credit_Card_Number`, `CVV_credit_card`, `Expiration_date_credit_card_number`) VALUES
(17, '2022-07-12', '2022-07-13', 1, 1, 1, 1, 51, 83483098340979, 335, '2022-06-28'),
(18, '2022-07-15', '2022-07-20', 1, 5, 2, 4, 51, 83483098340979, 335, '2022-06-28'),
(19, '2022-07-11', '2022-07-14', 1, 3, 4, 8, 60, 234411776892, 2345, '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `clientfood`
--

DROP TABLE IF EXISTS `clientfood`;
CREATE TABLE IF NOT EXISTS `clientfood` (
  `Id_FI` int(11) NOT NULL,
  KEY `fk9` (`Id_FI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientfood`
--

INSERT INTO `clientfood` (`Id_FI`) VALUES
(2),
(3),
(5),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `Name_contact` varchar(20) NOT NULL,
  `Email_contact` varchar(50) NOT NULL,
  `Phone_contact` bigint(20) NOT NULL,
  `Subject_contact` varchar(40) NOT NULL,
  `Message_contact` text NOT NULL,
  PRIMARY KEY (`Id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id_contact`, `Name_contact`, `Email_contact`, `Phone_contact`, `Subject_contact`, `Message_contact`) VALUES
(2, 'Ricardo Hanna', 'ricardo.hanna.com@gmail.com', 11233234, 'Activities', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `Id_Client` int(11) NOT NULL AUTO_INCREMENT,
  `Client_FirstName` text NOT NULL,
  `Client_LastName` text NOT NULL,
  `Client_Email` text NOT NULL,
  `Client_Password` text NOT NULL,
  `Client_PhoneNbr` bigint(20) NOT NULL,
  `Client_City` text NOT NULL,
  PRIMARY KEY (`Id_Client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

DROP TABLE IF EXISTS `menu_item`;
CREATE TABLE IF NOT EXISTS `menu_item` (
  `Id_Item` int(11) NOT NULL,
  `Type_Item` varchar(20) NOT NULL,
  `Name_Item` varchar(30) NOT NULL,
  `Desc_Item` text NOT NULL,
  `Price_Item` float NOT NULL,
  `photo` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`Id_Item`, `Type_Item`, `Name_Item`, `Desc_Item`, `Price_Item`, `photo`) VALUES
(1, 'Breakfast', 'Shakshuka', 'Shakshuka with Cream Cheese Spread and Baguetted', 9.5, 'shakshuka.jpg'),
(2, 'Breakfast', 'EggsTomato', 'Khobez with Tomato Scrambled Eggs and Cream Cheese Spread', 10, 'eggstomato.jpg'),
(3, 'Breakfast', 'Samoon', 'Samoon Bread Filled with Cream Cheese Spread and Egg', 6.5, 'samoon.jpg'),
(4, 'Breakfast', 'BakedMoroccan', 'Home Baked Moroccan Msemmen with Citrus Fruit Salad and Cream Cheese Spreadr', 10.5, 'moroccan.jpg'),
(5, 'Breakfast', 'Manakeesh', 'Home Baked Manekeesh with Zaatar and Cheese Triangles', 20, 'manekeesh.jpg'),
(6, 'Breakfast', 'Omelette', 'Fresh Herb Omelette with Tomato Slices and Cream Cheese Spread', 25, 'omelette.jpg'),
(7, 'Breakfast', 'SavouryCroissant', 'Savoury Croissant Bread Pudding with Cream Cheese Spread, Olives and Nigella Seeds', 13, 'savoury.jpg'),
(8, 'Breakfast', 'Saffron', 'Saffron & Rosewater Pancakes with Dried Fruits and Natural Cream Cheese', 16, 'saffron.jpg'),
(9, 'lunch', 'Focaccia', 'Slices of this pretty sandwich make any casual get-together more special. Add or change ingredients to your taste', 40, 'focaccia.jpg'),
(10, 'lunch', 'Grilled', 'Fire up the grill for this tasty salad. The meat will be done in a snap, leaving you more time to enjoy the summer evening', 45, 'grilled.jpg'),
(11, 'lunch', 'QuickTangy ', 'I adjusted three different recipes to come up with this one. Kids like the tangy taste and request the sandwiches for birthday parties', 50, 'quick.jpg'),
(12, 'lunch', 'ChickenSalad', 'My Caesar with grilled chicken is a healthier alternative to heavy meat and potatoes dishes. After grilling the kabobs, we serve them family style', 55, 'salf.jpg'),
(13, 'lunch', 'QuickTaco ', 'I was running late one night, so I shopped in my own fridge and came up with ingredients that became taco wraps. Everybody at the table was a happy camper', 100, 'taco.jpg'),
(14, 'lunch', 'WhiteArugula', 'My red, white and green salad is inspired by the Italian flag. Top it with shaved Parmesan', 105, 'white.jpg'),
(15, 'lunch', 'Fajitas', 'For a weekend lunch with company, we grill chicken and peppers to stuff inside pita pockets. The dressing doubles as a grilling sauce and a sandwich spread', 110, 'fajitas.jpg'),
(16, 'lunch', 'Guacamole', 'The fresh blend of avocados, tomatoes, red onion and greens in my salad gets additional pizazz from crumbled bacon and a slightly spicy vinaigrette. —Lori Fischer, Chino Hills, California', 115, 'guacamole.jpg'),
(17, 'lunch', 'MicrowaveEgg ', 'If you\'re looking for a grab-and-go breakfast for busy days, this high-protein sandwich is low in fat and keeps me full all morning. Plus, it\'s only about 200 calories', 120, 'microwave.jpg'),
(18, 'dinner', 'Soups', 'Hearty chicken tortilla soup is a delicious, wholesome and filling soup that you can make in about 30 minutes, packed with classic Mexican flavours including black beans and corn.', 20, 'soups.jpeg'),
(19, 'dinner', 'Curriedsausages', 'Take a trip down memory lane with this classic curried sausage recipe.', 34, 'sausage.jpeg'),
(20, 'dinner', 'Sanchoybau', 'The family will love these tasty little pork mince parcels wrapped in lettuce leaves.\r\n', 40, 'san.jpg'),
(21, 'dinner', 'Easybutterchicken', 'This classic Indian dish is a favourite in Aussie households. Re-create it at home in a flash.', 45, 'butter.jpeg'),
(22, 'dinner', 'Pea&hamsoup', 'This is traditional pea and ham soup at its best Theres no need to cook the onion separately  it sautes itself in the fat ', 25, 'pea.jpeg'),
(23, 'dinner', 'Spaghetti', 'Quick, easy and delicious - try this carbonara and see if you think it\'s the best!', 30, 'spaghetti.jpg'),
(24, 'dinner', 'Beefstroganoff', 'Taste members love a dash of sweet paprika in this scrumptious beef stroganoff recipe.', 40, 'beef.jpeg'),
(25, 'dinner', 'Thaigreen ', 'Recreate your favourite authentic takeaway with this easy fragrant Thai green curry with chicken and vegetables.', 45, 'thai.jpeg'),
(26, 'dessert', 'Coconutcake', 'When it comes to storing perishables like dairy, the freezer is your best friends. Milk and yoghurt can be stored in ice cube trays and popped out to use in smoothies', 45, 'coconut.jpg'),
(27, 'dessert', 'Stickyginger', 'You can never beat a pudding, unless it\'s spiced with ginger. And, don\'t forget the cream.', 50, 'sticky.jpg'),
(28, 'dessert', 'Darkchocolate ', 'Melted dark chocolate topped with cream, it doesn\'t get much better.', 55, 'dark.jpg'),
(29, 'dessert', 'Chocolatsponge', 'Turn to the dark side this spring with a decadent chocolate sponge.', 60, 'sponge.jpg'),
(30, 'dessert', 'Strawberryginger', 'Produce Awards Earth category 2015 winner, Wellington Apiary prickly box honey, is the finishing touch to this flaky spelt pastry and strawberry pie, says delicious. senior food editor (and pie connoisseur) Phoebe Wood.', 60, 'strawberry.jpg'),
(31, 'dessert', 'Butterscotch', 'This deliciously gooey and moreish dessert shows just how versatile butter can be. It\'s best eaten quickly and before anyone else!', 45, 'butterscotch.jpg'),
(32, 'dessert', 'Caramelcake', 'This cake is delicious. It’s best eaten on the day it’s made, but still tastes great the next day, says Valli. This recipe is an extract from Valli Little\'s new book, My Kind of Food (Harper Collins, $39.99), available nationwide.', 70, 'caramel.jpg'),
(33, 'dessert', 'Littleblack ', 'This is one of those reliable cakes – simple yet sexy – that will wow everyone, every time. Keep it plain or accessorise with silver or gold leaf for special effect.', 75, 'little.jpg'),
(34, 'Drinks', 'Water', 'Water', 2, 'water.jpg'),
(35, 'Drinks', 'OrangeJuice', 'Orange Juice', 5, 'orange.jpg'),
(36, 'Drinks', '7UP', '7up', 4, '7up.jpg'),
(37, 'Drinks', 'Pepsi', 'pepsi', 4, 'pepsi.jpg'),
(38, 'Drinks', 'Strawberry', 'Strawberry Drinks', 7, 'strawberrydr.jpg'),
(39, 'Drinks', 'Blueberry', 'Blueberry drink', 8, 'blueberry.jpg'),
(40, 'Drinks', 'Lemonade', 'Lemonade drinks', 8, 'lemonade.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `Id_Payment` int(11) NOT NULL AUTO_INCREMENT,
  `Amount_Payment` double NOT NULL,
  `Id_Book` int(11) NOT NULL,
  `Code_Type` int(11) NOT NULL,
  PRIMARY KEY (`Id_Payment`),
  KEY `fk4` (`Id_Book`),
  KEY `fk7` (`Code_Type`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id_Payment`, `Amount_Payment`, `Id_Book`, `Code_Type`) VALUES
(17, 250, 17, 1),
(18, 500, 18, 1),
(19, 1500, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_activity`
--

DROP TABLE IF EXISTS `payment_activity`;
CREATE TABLE IF NOT EXISTS `payment_activity` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Amount_Activity` float NOT NULL,
  `Code_Type` int(11) NOT NULL,
  `Id_Book` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fkc` (`Id_Book`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_activity`
--

INSERT INTO `payment_activity` (`Id`, `Amount_Activity`, `Code_Type`, `Id_Book`) VALUES
(4, 125, 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `payment_room_service`
--

DROP TABLE IF EXISTS `payment_room_service`;
CREATE TABLE IF NOT EXISTS `payment_room_service` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Amount_room_service` float NOT NULL,
  `Code_Type` int(11) NOT NULL,
  `Id_Book` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk` (`Code_Type`),
  KEY `fk2` (`Id_Book`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_room_service`
--

INSERT INTO `payment_room_service` (`Id`, `Amount_room_service`, `Code_Type`, `Id_Book`) VALUES
(8, 9.5, 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `Code_Role` int(11) NOT NULL,
  `Desc_Role` varchar(11) NOT NULL,
  PRIMARY KEY (`Code_Role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Code_Role`, `Desc_Role`) VALUES
(1, 'Client'),
(2, 'Admin'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `Id_Room` int(11) NOT NULL,
  `Location` varchar(40) NOT NULL,
  `Name_Room` varchar(30) NOT NULL,
  `Id_TR` int(11) NOT NULL,
  PRIMARY KEY (`Id_Room`),
  KEY `ForeignKey` (`Id_TR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Id_Room`, `Location`, `Name_Room`, `Id_TR`) VALUES
(1, 'Floor1_Room1_Right', 'Room101', 1),
(2, 'Floor1_Room2_Left', 'Room102', 1),
(3, 'Floor1_Room3_Right', 'Room103', 1),
(4, 'Floor1_Room4_Left', 'Room104', 2),
(5, 'Floor2_Room5_Right', 'Room105', 2),
(6, 'Floor2_Room6_Left', 'Room106', 3),
(7, 'Floor2_Room7_Right', 'Room107', 3),
(8, 'Floor2_Room8_Left', 'Room108', 4),
(9, 'Floor3_Room9_Right', 'Room109', 4),
(10, 'Floor3_Room10_Left', 'Room110', 4),
(11, 'Floor3_Room11_Right', 'Room111', 5),
(12, 'Floor3_Room12_Left', 'Room112', 5),
(13, 'Floor4_Room13_Right', 'Room113', 6),
(14, 'Floor4_Room14_Left', 'Room114', 6),
(15, 'Floor4_Room15_Right', 'Room115', 7),
(16, 'Floor4_Room16_Left', 'Room116', 7);

-- --------------------------------------------------------

--
-- Table structure for table `room_service`
--

DROP TABLE IF EXISTS `room_service`;
CREATE TABLE IF NOT EXISTS `room_service` (
  `Id_Room_Service` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Room_Service` date NOT NULL,
  `Time_Room_Service` time NOT NULL,
  `Cost_Room_Service` float NOT NULL,
  `Id_Book` int(11) NOT NULL,
  PRIMARY KEY (`Id_Room_Service`),
  KEY `FK102` (`Id_Book`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_service`
--

INSERT INTO `room_service` (`Id_Room_Service`, `Date_Room_Service`, `Time_Room_Service`, `Cost_Room_Service`, `Id_Book`) VALUES
(8, '2022-07-11', '08:42:06', 9.5, 19);

-- --------------------------------------------------------

--
-- Table structure for table `room_service_menu_item`
--

DROP TABLE IF EXISTS `room_service_menu_item`;
CREATE TABLE IF NOT EXISTS `room_service_menu_item` (
  `Id_Room_Service` int(11) NOT NULL,
  `Id_Item` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price_Room_Service_Menu_Item` float NOT NULL,
  KEY `fk104` (`Id_Room_Service`),
  KEY `fk105` (`Id_Item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_service_menu_item`
--

INSERT INTO `room_service_menu_item` (`Id_Room_Service`, `Id_Item`, `Quantity`, `Price_Room_Service_Menu_Item`) VALUES
(8, 1, 1, 9.5);

-- --------------------------------------------------------

--
-- Table structure for table `seasoncost`
--

DROP TABLE IF EXISTS `seasoncost`;
CREATE TABLE IF NOT EXISTS `seasoncost` (
  `Code_Season` int(11) NOT NULL AUTO_INCREMENT,
  `StartDate_Season` date NOT NULL,
  `EndDate_Season` date NOT NULL,
  `Name_Season` varchar(25) NOT NULL,
  `OffrePaymentDiscount` float NOT NULL,
  `Id_Book` int(11) NOT NULL,
  PRIMARY KEY (`Code_Season`),
  KEY `fk12` (`Id_Book`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `typeofroom`
--

DROP TABLE IF EXISTS `typeofroom`;
CREATE TABLE IF NOT EXISTS `typeofroom` (
  `Id_TR` int(11) NOT NULL,
  `Name_TR` varchar(15) NOT NULL,
  `Desc_TR` text NOT NULL,
  `Price_TR` float NOT NULL,
  `photo` varchar(80) NOT NULL,
  PRIMARY KEY (`Id_TR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typeofroom`
--

INSERT INTO `typeofroom` (`Id_TR`, `Name_TR`, `Desc_TR`, `Price_TR`, `photo`) VALUES
(1, 'Suite-Room', 'A suite in a hotel or other public accommodation, such as a cruise ship denotes, according to most dictionary definitions, connected rooms under one room number. In addition to one or more beds and a bathroom, such \"suites\" include a living or sitting area, often equipped with a sofa be', 250, 'suite.jpg'),
(2, 'Single-Room', 'A single room has one single bed for single occupancy. An additional bed (called extra bed) may be added to this room at the request of a guest and charged accordingly.', 100, 'single.jpg'),
(3, 'Double-Room', 'A double room has one double bed for double occupancy. An extra bed may\r\nbe added to this room at the request of a guest and charged accordingly. The size of the double bed is generally 4.5 feet by 6 feet.', 300, 'double.jpg'),
(4, 'Triple-Room', 'A triple room has three separate single beds and can be occupied by three\r\nguests. This type of room is suitable for groups and delegates of meetings and conferences.', 500, 'triple.jpg'),
(5, 'Quad-Room', 'A quad room has four separate single beds and can accommodate four persons together in the same room.', 550, 'quad.jpg'),
(6, 'Hollywood-Room', 'A Hollywood twin room has two single beds with a common headboard. This hotel room type is generally occupied by two guests.', 600, 'hollywood.jpg'),
(7, 'King-Room', 'A king room has a king-size bed. The size of the bed is 6 feet by 6 feet. An\r\nextra bed may be added to this room at the request of a guest and charged accordingly', 750, 'king.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `typepayment`
--

DROP TABLE IF EXISTS `typepayment`;
CREATE TABLE IF NOT EXISTS `typepayment` (
  `Code_Type` int(11) NOT NULL AUTO_INCREMENT,
  `Desc_Type` varchar(20) NOT NULL,
  PRIMARY KEY (`Code_Type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typepayment`
--

INSERT INTO `typepayment` (`Code_Type`, `Desc_Type`) VALUES
(1, 'credit  card');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id_User` int(11) NOT NULL AUTO_INCREMENT,
  `Username_User` varchar(30) NOT NULL,
  `Email_User` text NOT NULL,
  `Password_User` varchar(15) NOT NULL,
  `Cpassword_User` varchar(15) NOT NULL,
  `Code_Role` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`Id_User`),
  KEY `fk101` (`Code_Role`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Username_User`, `Email_User`, `Password_User`, `Cpassword_User`, `Code_Role`, `status`) VALUES
(12, 'Anthony Jabbour', 'AnthonyJabbour@gmail.com', 'jabbourant', 'jabbourant', 1, 1),
(13, 'Ghassan Karaan', 'GhassanKaraan@gmail.com', 'karaan', 'karaan', 1, 0),
(14, 'Elias Khoury', 'EliasKhoury@gmail.com', 'khoury123', 'khoury123', 1, 0),
(15, 'Lea Daher', 'LeaDaher@gmail.com', 'lea123', 'lea123', 1, 1),
(16, 'Khalil Abboud', 'KhalilAbboud@gmail.com', 'abboud123', 'abboud123', 1, 0),
(17, 'Maroun Abboud', 'MarounAbboud@gmail.com', 'abboud', 'abboud', 1, 0),
(18, 'Tina Alma', 'TinaAlma@gmail.com', 'TinaAlma123@#', 'TinaAlma123@#', 1, 0),
(51, 'Ricardo Hanna', 'ricardo.hanna.com@gmail.com', 'Antoun123!@#', 'Antoun123!@#', 1, 1),
(52, 'Maroun Hanna', 'marounhanna2002@gmail.com', 'Boutros123!@#', 'Boutros123!@#', 1, 1),
(58, 'Celine Abboud', 'tabesamsung206@gmail.com', 'Celine123!@#', 'Celine123!@#', 1, 1),
(60, 'Joe Antoun', 'joeantoun14@gmail.com', 'Joetoni123!@#', 'Joetoni123!@#', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `Test` FOREIGN KEY (`Id_TR`) REFERENCES `typeofroom` (`Id_TR`),
  ADD CONSTRAINT `can` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`),
  ADD CONSTRAINT `fk100` FOREIGN KEY (`Id_Room`) REFERENCES `room` (`Id_Room`);

--
-- Constraints for table `clientfood`
--
ALTER TABLE `clientfood`
  ADD CONSTRAINT `fk9` FOREIGN KEY (`Id_FI`) REFERENCES `menu_item` (`Id_Item`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`Id_Book`) REFERENCES `booking` (`Id_Book`),
  ADD CONSTRAINT `fk7` FOREIGN KEY (`Code_Type`) REFERENCES `typepayment` (`Code_Type`);

--
-- Constraints for table `payment_activity`
--
ALTER TABLE `payment_activity`
  ADD CONSTRAINT `fkc` FOREIGN KEY (`Id_Book`) REFERENCES `booking` (`Id_Book`);

--
-- Constraints for table `payment_room_service`
--
ALTER TABLE `payment_room_service`
  ADD CONSTRAINT `fk` FOREIGN KEY (`Code_Type`) REFERENCES `typepayment` (`Code_Type`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`Id_Book`) REFERENCES `booking` (`Id_Book`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `ForeignKey` FOREIGN KEY (`Id_TR`) REFERENCES `typeofroom` (`Id_TR`);

--
-- Constraints for table `room_service`
--
ALTER TABLE `room_service`
  ADD CONSTRAINT `FK102` FOREIGN KEY (`Id_Book`) REFERENCES `booking` (`Id_Book`);

--
-- Constraints for table `room_service_menu_item`
--
ALTER TABLE `room_service_menu_item`
  ADD CONSTRAINT `fk104` FOREIGN KEY (`Id_Room_Service`) REFERENCES `room_service` (`Id_Room_Service`),
  ADD CONSTRAINT `fk105` FOREIGN KEY (`Id_Item`) REFERENCES `menu_item` (`Id_Item`);

--
-- Constraints for table `seasoncost`
--
ALTER TABLE `seasoncost`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`Id_Book`) REFERENCES `booking` (`Id_Book`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk101` FOREIGN KEY (`Code_Role`) REFERENCES `role` (`Code_Role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
