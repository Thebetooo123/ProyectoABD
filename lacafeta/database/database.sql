-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: coffeebase2
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `becario`
--

DROP TABLE IF EXISTS `becario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `becario` (
  `becario_id` int(11) NOT NULL AUTO_INCREMENT,
  `No_control` varchar(8) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido_pat` varchar(50) NOT NULL,
  `Apellido_mat` varchar(50) NOT NULL,
  `Fecha_nac` datetime NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Ingreso_mensual` double NOT NULL,
  PRIMARY KEY (`becario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `becario`
--

LOCK TABLES `becario` WRITE;
/*!40000 ALTER TABLE `becario` DISABLE KEYS */;
INSERT INTO `becario` VALUES (1,'15551435','Hector','Rosales','Arcubia','1994-02-12 00:00:00','6141571731',4400),(2,'15551094','Ana','Gutierrez','Lopez','1996-05-24 00:00:00','6148462338',4500),(3,'14553548','Abraham','Lechuga','Rangel','1997-12-31 00:00:00','6147826952',5000),(4,'15556168','Beatriz','Rodrigez','Villa','1997-11-03 00:00:00','6148952366',4500),(5,'16663543','Yair','Luna','Lopez','1996-01-22 00:00:00','6145789568',4400),(6,'12225468','Edgar','Jaquez','Soto','1998-03-26 00:00:00','6145328958',5500),(7,'13335468','Oscar','Arcubia','Acosta','1995-04-26 00:00:00','6143546855',4500),(8,'15555483','Nohemi','Rangel','Luna','1996-06-25 00:00:00','6145464546',4600),(9,'12226546','Linda','Lopez','Espinoza','1998-08-24 00:00:00','6145986528',6000),(10,'13336548','Raul','Guerra','Anaya','1998-09-23 00:00:00','6142225863',4800),(11,'14445564','Luis','Flores','Rosales','1999-01-21 00:00:00','6145518541',5200),(12,'15554684','Jose','Quintana','Lopez','1997-02-06 00:00:00','6146846166',5300),(13,'16665486','Marco','Saens','Gutierrez','1998-03-08 00:00:00','6146526461',4900),(14,'17776546','Rosa','Anaya','Lara','1998-05-05 00:00:00','6146846681',5200),(15,'18885483','Carmen','Corral','Arcubia','1999-04-06 00:00:00','6142352325',5100),(16,'15551434','Luis','Peña','Rangel','1996-06-27 00:00:00','6146586411',4300),(17,'14445698','Julieta','Lopez','Rojas','1997-08-20 00:00:00','6146526516',4600),(18,'12224654','Luisa','Obrador','Salas','1998-07-17 00:00:00','6145268654',5900),(19,'15558918','Antonio','Rosales','Tomate','1999-09-17 00:00:00','6144684548',7000),(20,'14446541','Jose','Gonzalez','Lozano','1997-10-12 00:00:00','6143522674',6500),(21,'14446468','Laura','Nunes','Rocha','1998-11-15 00:00:00','6145864556',4600),(22,'15555468','Alberto','Cordoba','Vega','1997-12-04 00:00:00','6146568648',4700),(23,'16664681','Fernanda','Salasar','De Leon','1999-05-06 00:00:00','6146518446',5800),(24,'13336551','Gabriel','Murrillo','Huerta','1998-06-05 00:00:00','6146516168',7600),(25,'14446565','William','Rocha','Arana','1997-05-27 00:00:00','6143568165',4500),(26,'17771651','Gabriela','Trejo','Chavez','1998-03-21 00:00:00','6146456816',7600),(27,'15551151','Joseline','Galaz','Chavira','1997-04-22 00:00:00','6146486828',5500),(28,'15554642','Wenndy','Fernandez','Torres','1997-06-23 00:00:00','6146521681',5600),(29,'12226185','Edgar','Villa','Galvan','1998-06-14 00:00:00','6146516815',5700),(30,'14446151','Juan','Portillo','Yapoor','1998-04-23 00:00:00','6141168462',4900),(31,'13331652','Aylin','Gardea','Mora','1999-08-22 00:00:00','6141864565',4500);
/*!40000 ALTER TABLE `becario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora` (
  `bitacora_id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `cantidad` double NOT NULL,
  PRIMARY KEY (`bitacora_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_ordenes`
--

DROP TABLE IF EXISTS `detalle_ordenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_ordenes` (
  `detalle_ordenes_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario_id` int(11) NOT NULL,
  `orden_id` int(11) NOT NULL,
  `fecha_ordenes` datetime NOT NULL,
  `costo_total` double NOT NULL,
  PRIMARY KEY (`detalle_ordenes_id`),
  KEY `fk_orden_id_idx` (`orden_id`),
  KEY `fk_tipo_usuario_id_idx` (`tipo_usuario_id`),
  CONSTRAINT `fk_orden_id` FOREIGN KEY (`orden_id`) REFERENCES `ordenes` (`orden_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_tipo_usuario_id` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuario` (`tipo_usuario_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_ordenes`
--

LOCK TABLES `detalle_ordenes` WRITE;
/*!40000 ALTER TABLE `detalle_ordenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_ordenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `no_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido_pat` varchar(50) NOT NULL,
  `apellido_mat` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) NOT NULL,
  `puesto` enum('Caja','Cocina') NOT NULL,
  PRIMARY KEY (`no_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'Roberto','Gomez','Rangel','6145689553','Caja'),(2,'Alfredo','Lechuga','Palacios','6145116554','Caja'),(3,'Alexis','Corral','Villa','6145681618','Cocina'),(4,'Jacobo','Duarte','Najera','6146115618','Cocina'),(5,'Anai','Trejo','Lechuga','6146516516','Cocina'),(6,'Nia','Huerta','De leon','6141651651','Cocina'),(7,'Kristel','Meza','Lopez','6154151168','Cocina'),(8,'Punie','Gutierrez','Torres','6145168165','Cocina'),(9,'Tania','Jaquez','Lindo','6146516816','Cocina');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenes`
--

DROP TABLE IF EXISTS `ordenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordenes` (
  `orden_id` int(11) NOT NULL AUTO_INCREMENT,
  `platillo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`orden_id`),
  KEY `fk_platillo_id_idx` (`platillo_id`),
  CONSTRAINT `fk_platillo_id` FOREIGN KEY (`platillo_id`) REFERENCES `platillos` (`platillo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenes`
--

LOCK TABLES `ordenes` WRITE;
/*!40000 ALTER TABLE `ordenes` DISABLE KEYS */;
INSERT INTO `ordenes` VALUES (1,1,3,'2018-05-21 19:23:19'),(2,1,2,'0000-00-00 00:00:00'),(3,1,4,'0000-00-00 00:00:00'),(4,1,2,'0000-00-00 00:00:00'),(5,1,1,'0000-00-00 00:00:00'),(6,1,2,'0000-00-00 00:00:00'),(7,1,2,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ordenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platillos`
--

DROP TABLE IF EXISTS `platillos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `platillos` (
  `platillo_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_platillo` varchar(100) NOT NULL,
  `costo` double NOT NULL,
  PRIMARY KEY (`platillo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platillos`
--

LOCK TABLES `platillos` WRITE;
/*!40000 ALTER TABLE `platillos` DISABLE KEYS */;
INSERT INTO `platillos` VALUES (1,'Enchiladas',50),(2,'Tacos c/arroz',45),(3,'Huevos al gusto c/chilaquiles frijoles y cafe',60),(4,'Huevos al gusto c/frijoles, papas fritas y cafe',60),(5,'Guisado, frijoles chilaquiles y cafe',65),(6,'Hotcakes (3) fruta y cafe',60),(7,'Fruta de temporada con yogurth y juego de naranja',55),(8,'Pan con mantequilla o mermelada, fruta y cafe',55),(9,'Pan dulce con cafe',25),(10,'Pan c/mantequilla y avena',35),(11,'Burrito guisado del dia',14),(12,'Burrito lomo c/aguacate y verdura',28),(13,'Burrito de chile relleno',22),(14,'Montado',25),(15,'Torta  lomo c/jamon queso y aguacate',45),(16,'Torta desebrada c/aguacate',33),(17,'Torta milanesa c/aguacate',50),(18,'Torta jamon c/queso y aguacate ',33),(19,'Torta del chavo salchicha, repollo y tomate',25),(20,'Hamburgesa c/jamon y queso',35),(21,'Hamburgesac/papas',45),(22,'Hot dog c/papas',25),(23,'Pizza',14),(24,'Enchiladas rojas c/arroz',50),(25,'Tacos c/arroz',45),(26,'Flautas c/arroz',50),(27,'Chilaquiles sencillos',30),(28,'Chilaquiles c/frijoles refritos',35),(29,'Mollete sencillo',20),(30,'Mollete montado',35),(31,'Cuernito c/jamon y queso amarillo',20),(32,'Papas francesas',25),(33,'Papas francesas c/queso',35),(34,'Quesadilla de maiz',30),(35,'Quesadilla de harina',35),(36,'Sincronizada',40),(37,'Sandwich Atun',32),(38,'Sandwich Pollo',30),(39,'Sandwich Jamon c/queso',30),(40,'Panini polloc/queso',45),(41,'Panini jamon c/queso',35),(42,'Panini combinado',45),(43,'Ensalada Lechuga con fruta',45),(44,'Coctel de fruta',30),(45,'Coctel de yogurth y granola',35),(46,'Licuado de platano',28),(47,'Jugo naranja',22),(48,'Jugo toronja',22),(49,'Jugo zanahoria',32),(50,'Combinado',28),(51,'Leche con chocolate',28),(52,'Cafe',15);
/*!40000 ALTER TABLE `platillos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `no_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `no_proveedor` int(11) NOT NULL,
  PRIMARY KEY (`no_producto`),
  KEY `no_proveedor` (`no_proveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `tipo_usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `becario_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tipo_usuario_id`),
  KEY `fk_becario_id_idx` (`becario_id`),
  CONSTRAINT `fk_becario_id` FOREIGN KEY (`becario_id`) REFERENCES `becario` (`becario_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_cliente` int(11) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'coffeebase2'
--

--
-- Dumping routines for database 'coffeebase2'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-23 20:07:20
