/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.9-MariaDB : Database - olrange
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`olrange` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `olrange`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `link_article` varchar(225) DEFAULT NULL,
  `body` text,
  `status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `article` */

insert  into `article`(`id`,`title`,`image`,`link_article`,`body`,`status`) values (19,'Bank Bca','http://localhost:1234/olrange/assets/image/image/bca.jpg','http://localhost:1234/olrange/detailarticle?id=','<p><img src=\"http://localhost:1234/olrange/assets/image/image/bca.jpg\" alt=\"\" width=\"1024\" height=\"334\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id tellus tincidunt, mattis arcu eu, ornare dolor. Pellentesque vitae rhoncus elit. Vivamus vel posuere nunc. Duis tellus tortor, maximus non auctor eget, viverra in turpis. Phasellus posuere risus orci, ac maximus mauris elementum vel. Nulla in luctus dolor. Praesent et condimentum ipsum. Curabitur vehicula condimentum enim in fermentum. Nullam et bibendum dui. Nunc pulvinar urna eget auctor suscipit. Mauris rhoncus, nibh et porttitor condimentum, ligula nisl efficitur erat, eget aliquet felis ante egestas nisl. Sed eget condimentum ex, in elementum mi. Nam vel arcu mauris. Nunc vel varius velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>Nam aliquam viverra erat. Aenean at libero id leo scelerisque bibendum sed non est. Maecenas aliquet dolor at viverra lacinia. Nunc ac orci varius, accumsan sem in, malesuada ipsum. Phasellus congue enim at justo rhoncus vulputate. In auctor urna vel purus sodales congue. Curabitur finibus orci at velit pulvinar, vitae vestibulum ligula gravida. Pellentesque vehicula eu velit eu rhoncus.</p>\r\n<p>Aliquam mollis magna iaculis nibh porttitor volutpat. Praesent consequat dolor ut enim tempus hendrerit. Suspendisse dictum dapibus massa eget mollis. Pellentesque eu mauris nec mi tempor ullamcorper. Sed sagittis ante scelerisque est dignissim, vel bibendum lorem cursus. Nulla pharetra mauris massa, nec convallis orci placerat pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque tincidunt mi in odio egestas, vitae laoreet lectus fermentum. Nulla tempus risus nec nunc porta, et mattis velit faucibus. Phasellus ex tellus, viverra at consequat ut, vehicula sed purus. Mauris vehicula nec metus sed eleifend. Vivamus sed gravida enim, ac varius leo. Fusce tincidunt lobortis scelerisque. Proin vitae sem eu lectus placerat fermentum non eget lectus.</p>\r\n<p>Aliquam sollicitudin, leo eu consequat finibus, nibh dolor accumsan justo, ac congue ex tellus ut odio. Pellentesque aliquam sem ut nibh ullamcorper ornare. Cras eleifend nulla convallis dolor facilisis, sed efficitur eros lacinia. Quisque mattis imperdiet justo, egestas tristique dolor auctor eget. Maecenas efficitur, urna eget tincidunt posuere, nisi sapien ullamcorper urna, tempus volutpat orci odio eget lorem. Donec cursus porttitor mi sed tempus. Sed arcu ligula, mollis a tempor nec, pretium ut ex. Phasellus suscipit dignissim nulla at gravida. Sed sed aliquet tortor, sed gravida nibh. Sed tortor eros, feugiat in aliquam ut, venenatis a elit.</p>\r\n<p>Aliquam maximus ornare nibh et lacinia. Nam facilisis mollis eros id gravida. Quisque lectus odio, euismod ac ex ac, condimentum consectetur augue. Maecenas sit amet nibh dui. Mauris id lobortis velit. Curabitur ut erat sit amet neque malesuada faucibus nec vitae odio. Mauris posuere fermentum magna, nec laoreet quam porttitor at. Vivamus vitae cursus lorem, vitae commodo felis. Donec non tortor egestas metus posuere rhoncus. Proin sed euismod eros. Nulla mollis mauris gravida aliquam fringilla.</p>','1'),(20,'Bank BNI','http://localhost:1234/olrange/assets/image/image/bni.jpg','http://localhost:1234/olrange/detailarticle?id=','<p><img src=\"http://localhost:1234/olrange/assets/image/image/bni.jpg\" alt=\"\" width=\"1024\" height=\"343\" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id tellus tincidunt, mattis arcu eu, ornare dolor. Pellentesque vitae rhoncus elit. Vivamus vel posuere nunc. Duis tellus tortor, maximus non auctor eget, viverra in turpis. Phasellus posuere risus orci, ac maximus mauris elementum vel. Nulla in luctus dolor. Praesent et condimentum ipsum. Curabitur vehicula condimentum enim in fermentum. Nullam et bibendum dui. Nunc pulvinar urna eget auctor suscipit. Mauris rhoncus, nibh et porttitor condimentum, ligula nisl efficitur erat, eget aliquet felis ante egestas nisl. Sed eget condimentum ex, in elementum mi. Nam vel arcu mauris. Nunc vel varius velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>Nam aliquam viverra erat. Aenean at libero id leo scelerisque bibendum sed non est. Maecenas aliquet dolor at viverra lacinia. Nunc ac orci varius, accumsan sem in, malesuada ipsum. Phasellus congue enim at justo rhoncus vulputate. In auctor urna vel purus sodales congue. Curabitur finibus orci at velit pulvinar, vitae vestibulum ligula gravida. Pellentesque vehicula eu velit eu rhoncus.</p>\r\n<p>Aliquam mollis magna iaculis nibh porttitor volutpat. Praesent consequat dolor ut enim tempus hendrerit. Suspendisse dictum dapibus massa eget mollis. Pellentesque eu mauris nec mi tempor ullamcorper. Sed sagittis ante scelerisque est dignissim, vel bibendum lorem cursus. Nulla pharetra mauris massa, nec convallis orci placerat pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque tincidunt mi in odio egestas, vitae laoreet lectus fermentum. Nulla tempus risus nec nunc porta, et mattis velit faucibus. Phasellus ex tellus, viverra at consequat ut, vehicula sed purus. Mauris vehicula nec metus sed eleifend. Vivamus sed gravida enim, ac varius leo. Fusce tincidunt lobortis scelerisque. Proin vitae sem eu lectus placerat fermentum non eget lectus.</p>\r\n<p>Aliquam sollicitudin, leo eu consequat finibus, nibh dolor accumsan justo, ac congue ex tellus ut odio. Pellentesque aliquam sem ut nibh ullamcorper ornare. Cras eleifend nulla convallis dolor facilisis, sed efficitur eros lacinia. Quisque mattis imperdiet justo, egestas tristique dolor auctor eget. Maecenas efficitur, urna eget tincidunt posuere, nisi sapien ullamcorper urna, tempus volutpat orci odio eget lorem. Donec cursus porttitor mi sed tempus. Sed arcu ligula, mollis a tempor nec, pretium ut ex. Phasellus suscipit dignissim nulla at gravida. Sed sed aliquet tortor, sed gravida nibh. Sed tortor eros, feugiat in aliquam ut, venenatis a elit.</p>\r\n<p>Aliquam maximus ornare nibh et lacinia. Nam facilisis mollis eros id gravida. Quisque lectus odio, euismod ac ex ac, condimentum consectetur augue. Maecenas sit amet nibh dui. Mauris id lobortis velit. Curabitur ut erat sit amet neque malesuada faucibus nec vitae odio. Mauris posuere fermentum magna, nec laoreet quam porttitor at. Vivamus vitae cursus lorem, vitae commodo felis. Donec non tortor egestas metus posuere rhoncus. Proin sed euismod eros. Nulla mollis mauris gravida aliquam fringilla.</p>','1'),(21,'BANK BRI','http://localhost:1234/olrange/assets/image/image/bri.png','http://localhost:1234/olrange/detailarticle?id=','<p><img src=\"http://localhost:1234/olrange/assets/image/image/bri.png\" alt=\"\" width=\"1024\" height=\"284\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id tellus tincidunt, mattis arcu eu, ornare dolor. Pellentesque vitae rhoncus elit. Vivamus vel posuere nunc. Duis tellus tortor, maximus non auctor eget, viverra in turpis. Phasellus posuere risus orci, ac maximus mauris elementum vel. Nulla in luctus dolor. Praesent et condimentum ipsum. Curabitur vehicula condimentum enim in fermentum. Nullam et bibendum dui. Nunc pulvinar urna eget auctor suscipit. Mauris rhoncus, nibh et porttitor condimentum, ligula nisl efficitur erat, eget aliquet felis ante egestas nisl. Sed eget condimentum ex, in elementum mi. Nam vel arcu mauris. Nunc vel varius velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>Nam aliquam viverra erat. Aenean at libero id leo scelerisque bibendum sed non est. Maecenas aliquet dolor at viverra lacinia. Nunc ac orci varius, accumsan sem in, malesuada ipsum. Phasellus congue enim at justo rhoncus vulputate. In auctor urna vel purus sodales congue. Curabitur finibus orci at velit pulvinar, vitae vestibulum ligula gravida. Pellentesque vehicula eu velit eu rhoncus.</p>\r\n<p>Aliquam mollis magna iaculis nibh porttitor volutpat. Praesent consequat dolor ut enim tempus hendrerit. Suspendisse dictum dapibus massa eget mollis. Pellentesque eu mauris nec mi tempor ullamcorper. Sed sagittis ante scelerisque est dignissim, vel bibendum lorem cursus. Nulla pharetra mauris massa, nec convallis orci placerat pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque tincidunt mi in odio egestas, vitae laoreet lectus fermentum. Nulla tempus risus nec nunc porta, et mattis velit faucibus. Phasellus ex tellus, viverra at consequat ut, vehicula sed purus. Mauris vehicula nec metus sed eleifend. Vivamus sed gravida enim, ac varius leo. Fusce tincidunt lobortis scelerisque. Proin vitae sem eu lectus placerat fermentum non eget lectus.</p>\r\n<p>Aliquam sollicitudin, leo eu consequat finibus, nibh dolor accumsan justo, ac congue ex tellus ut odio. Pellentesque aliquam sem ut nibh ullamcorper ornare. Cras eleifend nulla convallis dolor facilisis, sed efficitur eros lacinia. Quisque mattis imperdiet justo, egestas tristique dolor auctor eget. Maecenas efficitur, urna eget tincidunt posuere, nisi sapien ullamcorper urna, tempus volutpat orci odio eget lorem. Donec cursus porttitor mi sed tempus. Sed arcu ligula, mollis a tempor nec, pretium ut ex. Phasellus suscipit dignissim nulla at gravida. Sed sed aliquet tortor, sed gravida nibh. Sed tortor eros, feugiat in aliquam ut, venenatis a elit.</p>\r\n<p>Aliquam maximus ornare nibh et lacinia. Nam facilisis mollis eros id gravida. Quisque lectus odio, euismod ac ex ac, condimentum consectetur augue. Maecenas sit amet nibh dui. Mauris id lobortis velit. Curabitur ut erat sit amet neque malesuada faucibus nec vitae odio. Mauris posuere fermentum magna, nec laoreet quam porttitor at. Vivamus vitae cursus lorem, vitae commodo felis. Donec non tortor egestas metus posuere rhoncus. Proin sed euismod eros. Nulla mollis mauris gravida aliquam fringilla.</p>','1');

/*Table structure for table `cms_menu` */

DROP TABLE IF EXISTS `cms_menu`;

CREATE TABLE `cms_menu` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `domain` varchar(50) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cms_menu` */

insert  into `cms_menu`(`id`,`menu`,`icon`,`domain`,`status`) values (1,'dashboard','fa-dashboard','home','1'),(2,'article','fa-table','dataarticle','1');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(7) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
