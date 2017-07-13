# Host: localhost  (Version: 5.5.40)
# Date: 2017-06-15 00:18:06
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "goods"
#

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `dianpu` varchar(255) DEFAULT NULL,
  `oriPrice` varchar(16) DEFAULT NULL,
  `nowPrice` varchar(16) DEFAULT NULL,
  `store` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

#
# Data for table "goods"
#

/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'白酒','53度五星茅台500ml','【1919茅台自营店】','1399.00','1299.00',20),(2,'白酒','52度剑南春（新包装）500ml','【1919剑南春自营店】','468.00','368.00',48),(3,'白酒','52度五粮液（普通版）500ml','【1919五粮液自营店】','878.00','819.00',102),(4,'白酒','52度泸州老窖特曲（老字号）500ml','【泸州老窖1919自营店】','213.00','186.00',58),(5,'白酒','52度洋河蓝色经典（海之蓝）480ml','【1919洋河自营店】','153.00','138.00',120),(6,'白酒','53度中华老字号1956老郎酒500ml','【1919郎酒自营店】','105.00','98.53',120),(7,'葡萄酒','法国拉菲传奇波尔多红葡萄酒750ml','【1919拉菲官方旗舰店】','91.00','86.00',98),(8,'葡萄酒','法国拉菲传说波尔多红葡萄酒（红标/蓝标）750ml','【1919拉菲官方旗舰店】','109.00','99.00',191),(9,'葡萄酒','澳大利亚奔富洛神山庄加本力苏维翁（赤霞珠）干红葡萄酒750ml','【1919奔富自营店】','56.00','49.00',91),(10,'葡萄酒','澳大利亚黄尾袋鼠梅洛（美乐）红葡萄酒750ml','【1919黄尾袋鼠官方旗舰店】','63.00','59.00',45),(11,'葡萄酒','澳大利亚小企鹅梅洛红葡萄酒750ml','【1919小企鹅官方旗舰店】','65.00','59.00',78),(12,'葡萄酒','澳大利亚黄尾袋鼠西拉子（设拉子）红葡萄酒750ml','【1919黄尾袋鼠官方旗舰店】','59.00','52.00',65),(13,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(14,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(15,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(16,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(17,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(18,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(19,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(20,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(21,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(22,'白酒','53°山西杏花村汾酒青花20年 500ml','【1919剑南春自营店】','2994.00','1830.00',80),(23,'葡萄酒','长城陈酿解百纳干红葡萄酒750ml','【1919拉菲官方旗舰店】','78.00','68.00',59),(24,'葡萄酒','红坊溪（限量发行）西拉赤霞珠美乐红葡萄酒750ml','【1919拉菲官方旗舰店】','99.00','94.99',59),(25,'葡萄酒','澳大利亚纷赋（禾富）酒园黄标赤霞珠干红葡萄酒750ml','【1919拉菲官方旗舰店】','108.00','105.33',59),(26,'葡萄酒','法国香奈鸽笼白长相思白葡萄酒精装系列750ml','【1919拉菲官方旗舰店】','189.00','109.00',89),(27,'葡萄酒','53度一道泓酱香老酒500ml','【1919拉菲官方旗舰店】','79.00','59.00',89),(28,'葡萄酒','法国波哈内酒庄红葡萄酒750ml','【1919拉菲官方旗舰店】','198.00','99.00',89),(29,'葡萄酒','天鹅庄孔雀西拉（干红）葡萄酒750ml','【1919拉菲官方旗舰店】','299.00','199.00',89),(30,'葡萄酒','52度老窖世家浓之雅500ml','【1919拉菲官方旗舰店】','89.00','86.00',89),(31,'葡萄酒','法国巴黎之夜起泡葡萄酒750ml','【1919拉菲官方旗舰店】','135.00','77.00',89),(32,'葡萄酒','53度紫砂郎500ml','【1919拉菲官方旗舰店】','199.00','123.00',89),(33,'葡萄酒','52度百年泸州老窖酒窖龄30年500ml','【1919拉菲官方旗舰店】','199.00','169.00',89),(34,'葡萄酒','52度洋河蓝色经典（天之蓝）480ml','【1919拉菲官方旗舰店】','345.00','318.00',89),(35,'葡萄酒','53度中华老字号1898老郎酒 500ml','【1919拉菲官方旗舰店】','188.00','138.00',89),(36,'葡萄酒','52度洋河蓝色经典（海之蓝）480ml','【1919拉菲官方旗舰店】','168.00','138.00',89),(37,'葡萄酒','法国拉菲传说波尔多红葡萄酒（红标/蓝标）750ml','【1919拉菲官方旗舰店】','2994.00','1830.00',89),(38,'葡萄酒','法国拉维亭特酿干红葡萄酒750ml','【1919拉菲官方旗舰店】','169.00','69.00',89),(39,'葡萄酒','奔富（酒园）BIN28卡琳娜设拉子（红葡萄酒） 750ml','【1919拉菲官方旗舰店】','279.00','269.00',89),(40,'葡萄酒','澳大利亚奔富酒园BIN407加本力苏维翁红葡萄酒750ml','【1919拉菲官方旗舰店】','564.00','559.00',89),(41,'葡萄酒','法国拉菲传奇波尔多红葡萄酒750ml','【1919拉菲官方旗舰店】','119.00','86.00',89),(42,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','128.00','66.00',56),(43,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','249.00','149.00',56),(44,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','859.00','819.00',56),(45,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','128.00','73.00',56),(46,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','388.00','225.00',56),(47,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','88.00','83.00',56),(48,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','89.00','86.00',56),(49,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','460.00','239.00',56),(50,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','199.00','123.00',56),(51,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','199.00','123.00',56),(52,'啤酒','德国菲德堡小麦啤酒500ml（6连包）','【1919菲德堡官方旗舰店】','199.00','123.00',56);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;

#
# Structure for table "goodsbasket"
#

DROP TABLE IF EXISTS `goodsbasket`;
CREATE TABLE `goodsbasket` (
  `userName` varchar(255) DEFAULT NULL,
  `goodsId` varchar(255) DEFAULT NULL,
  `goodsImg` varchar(255) DEFAULT NULL,
  `store` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `goodsSelect` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "goodsbasket"
#

/*!40000 ALTER TABLE `goodsbasket` DISABLE KEYS */;
INSERT INTO `goodsbasket` VALUES ('13462652275','1','images/goodsDetails/goods-left-bigimg01.jpg',20,'1299.00','5','53度五星茅台500ml',0);
/*!40000 ALTER TABLE `goodsbasket` ENABLE KEYS */;

#
# Structure for table "goodsimg"
#

DROP TABLE IF EXISTS `goodsimg`;
CREATE TABLE `goodsimg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `goodsId` varchar(255) DEFAULT NULL,
  `img01` varchar(255) DEFAULT NULL,
  `img02` varchar(255) DEFAULT NULL,
  `img03` varchar(255) DEFAULT NULL,
  `img04` varchar(255) DEFAULT NULL,
  `img05` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

#
# Data for table "goodsimg"
#

/*!40000 ALTER TABLE `goodsimg` DISABLE KEYS */;
INSERT INTO `goodsimg` VALUES (1,'1','images/goodsDetails/goods-left-bigimg01.jpg','images/goodsDetails/goods-left-bigimg02.jpg','','',''),(2,'2','images/index/wine01-body-mid02.jpg','images/index/wine01-body-mid02.jpg','images/index/wine01-body-mid02.jpg','',''),(3,'3','images/index/wine01-body-mid03.jpg','images/index/wine01-body-mid03.jpg','images/index/wine01-body-mid03.jpg','',''),(4,'4','images/index/wine01-body-mid04.jpg','images/index/wine01-body-mid04.jpg','images/index/wine01-body-mid04.jpg','',''),(5,'5','images/index/wine01-body-mid05.jpg','images/index/wine01-body-mid05.jpg','images/index/wine01-body-mid05.jpg','',''),(6,'6','images/index/wine01-body-mid06.jpg','images/index/wine01-body-mid06.jpg','images/index/wine01-body-mid06.jpg','',''),(7,'7','images/index/wine02-body-mid01.jpg','images/index/wine02-body-mid01.jpg','images/index/wine02-body-mid01.jpg','',''),(8,'8','images/index/wine02-body-mid02.jpg','images/index/wine02-body-mid02.jpg','images/index/wine02-body-mid02.jpg','',''),(9,'9','images/index/wine02-body-mid03.jpg','images/index/wine02-body-mid03.jpg','images/index/wine02-body-mid03.jpg','',''),(10,'10','images/index/wine02-body-mid04.jpg','images/index/wine02-body-mid04.jpg','images/index/wine02-body-mid04.jpg','',''),(11,'11','images/index/wine02-body-mid05.jpg','images/index/wine02-body-mid05.jpg','images/index/wine02-body-mid05.jpg','',''),(12,'12','images/index/wine02-body-mid06.jpg','images/index/wine02-body-mid06.jpg','images/index/wine02-body-mid06.jpg','',''),(13,'13','images/goodsList/1.jpg','images/goodsList/1.jpg','images/goodsList/1.jpg','',''),(14,'14','images/goodsList/2.jpg','images/goodsList/2.jpg','images/goodsList/2.jpg','',''),(15,'15','images/goodsList/3.jpg','images/goodsList/3.jpg','images/goodsList/3.jpg','',''),(16,'16','images/goodsList/4.jpg','images/goodsList/4.jpg','','',''),(17,'17','images/goodsList/5.jpg','images/goodsList/5.jpg','images/goodsList/5.jpg','images/goodsList/5.jpg',''),(18,'18','images/goodsList/6.jpg','images/goodsList/6.jpg','','',''),(19,'19','images/goodsList/7.jpg','images/goodsList/7.jpg','images/goodsList/7.jpg','',''),(20,'20','images/goodsList/8.jpg','images/goodsList/8.jpg','images/goodsList/8.jpg','',''),(21,'21','images/goodsList/9.jpg','images/goodsList/9.jpg','images/goodsList/9.jpg','',''),(22,'22','images/goodsList/10.jpg','images/goodsList/10.jpg','images/goodsList/10.jpg','',''),(23,'23','images/Wine zone/1.jpg','images/Wine zone/1.jpg','images/Wine zone/1.jpg','',''),(24,'24','images/Wine zone/2.jpg','images/Wine zone/2.jpg','images/Wine zone/2.jpg','',''),(25,'25','images/Wine zone/3.jpg','images/Wine zone/3.jpg','images/Wine zone/3.jpg','',''),(26,'26','images/Wine zone/4.jpg','images/Wine zone/4.jpg','images/Wine zone/4.jpg','images/Wine zone/4.jpg',''),(27,'27','images/Wine zone/5.jpg','images/Wine zone/5.jpg','images/Wine zone/5.jpg','',''),(28,'28','images/Wine zone/6.jpg','images/Wine zone/6.jpg','images/Wine zone/6.jpg','',''),(29,'29','images/Wine zone/7.jpg','images/Wine zone/7.jpg','images/Wine zone/7.jpg','',''),(30,'30','images/Wine zone/8.jpg','images/Wine zone/8.jpg','images/Wine zone/8.jpg','',''),(31,'31','images/Wine zone/9.jpg','images/Wine zone/9.jpg','images/Wine zone/9.jpg','',''),(32,'32','images/Wine zone/10.jpg','images/Wine zone/10.jpg','images/Wine zone/10.jpg','',''),(33,'33','images/Wine zone/11.jpg','images/Wine zone/11.jpg','images/Wine zone/11.jpg','',''),(34,'34','images/Wine zone/12.jpg','images/Wine zone/12.jpg','images/Wine zone/12.jpg','',''),(35,'35','images/Wine zone/13.jpg','images/Wine zone/13.jpg','images/Wine zone/13.jpg','',''),(36,'36','images/Wine zone/14.jpg','images/Wine zone/13.jpg','images/Wine zone/12.jpg','',''),(37,'37','images/Wine zone/15.jpg','images/Wine zone/14.jpg','images/Wine zone/13.jpg','',''),(38,'38','images/Wine zone/16.jpg','images/Wine zone/15.jpg','images/Wine zone/14.jpg','',''),(39,'39','images/Wine zone/17.jpg','images/Wine zone/16.jpg','images/Wine zone/15.jpg','',''),(40,'40','images/Wine zone/18.jpg','images/Wine zone/17.jpg','images/Wine zone/16.jpg','',''),(41,'41','images/Wine zone/19.jpg','images/Wine zone/18.jpg','images/Wine zone/17.jpg','',''),(42,'42','images/bei zone/1.jpg','images/bei zone/1.jpg','images/bei zone/1.jpg','',''),(43,'43','images/bei zone/2.jpg','images/bei zone/1.jpg','images/bei zone/1.jpg','',''),(44,'44','images/bei zone/3.jpg','images/bei zone/2.jpg','images/bei zone/1.jpg','',''),(45,'45','images/bei zone/4.jpg','images/bei zone/3.jpg','images/bei zone/2.jpg','',''),(46,'46','images/bei zone/6.jpg','images/bei zone/5.jpg','images/bei zone/4.jpg','',''),(47,'47','images/bei zone/7.jpg','images/bei zone/6.jpg','images/bei zone/5.jpg','',''),(48,'48','images/bei zone/8.jpg','images/bei zone/7.jpg','images/bei zone/6.jpg','',''),(49,'49','images/bei zone/9.jpg','images/bei zone/8.jpg','images/bei zone/7.jpg','',''),(50,'50','images/bei zone/10.jpg','images/bei zone/9.jpg','images/bei zone/8.jpg','',''),(51,'51','images/bei zone/5.jpg','images/bei zone/10.jpg','images/bei zone/9.jpg','',''),(52,'52','images/bei zone/12.jpg','images/bei zone/7.jpg','images/bei zone/10.jpg','','');
/*!40000 ALTER TABLE `goodsimg` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'13462652275','lz123456');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
