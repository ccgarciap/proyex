-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para bd_drogueria
CREATE DATABASE IF NOT EXISTS `bd_drogueria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bd_drogueria`;

-- Volcando estructura para tabla bd_drogueria.drogueria
CREATE TABLE IF NOT EXISTS `drogueria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bd_drogueria.drogueria: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `drogueria` DISABLE KEYS */;
INSERT INTO `drogueria` (`id`, `nombre`, `direccion`, `telefono`) VALUES
	(1, 'dralex', 'mz h', '987'),
	(2, 'drcir', 'circasiaQ', '123'),
	(3, 'drogueria Armenia', 'armneia mz h casa ', '321526');
/*!40000 ALTER TABLE `drogueria` ENABLE KEYS */;

-- Volcando estructura para tabla bd_drogueria.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_drogueria_id` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `valor_total` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C4EC16CE388C75CC` (`id_drogueria_id`),
  CONSTRAINT `FK_C4EC16CE388C75CC` FOREIGN KEY (`id_drogueria_id`) REFERENCES `drogueria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bd_drogueria.pedido: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` (`id`, `id_drogueria_id`, `cantidad`, `valor_total`) VALUES
	(1, 1, 5, 5000),
	(2, 2, 5, 4000),
	(3, 1, 6, 0),
	(4, 3, 200, 0),
	(5, 1, 5, 0);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Volcando estructura para tabla bd_drogueria.pedido_producto
CREATE TABLE IF NOT EXISTS `pedido_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto_id` int(11) NOT NULL,
  `id_pedido_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DD333C26E57A479` (`id_producto_id`),
  UNIQUE KEY `UNIQ_DD333C2C861D91D` (`id_pedido_id`),
  CONSTRAINT `FK_DD333C26E57A479` FOREIGN KEY (`id_producto_id`) REFERENCES `producto` (`id`),
  CONSTRAINT `FK_DD333C2C861D91D` FOREIGN KEY (`id_pedido_id`) REFERENCES `pedido` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bd_drogueria.pedido_producto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pedido_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_producto` ENABLE KEYS */;

-- Volcando estructura para tabla bd_drogueria.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `unidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bd_drogueria.producto: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`id`, `nombre`, `valor`, `unidad`) VALUES
	(1, 'acetaminofen', 1000, 10),
	(2, 'ppp', 500, 25),
	(4, 'eee', 2000, 63),
	(5, 'hhhh', 30000, 2);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla bd_drogueria.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_drogueria_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_usuario_drogueria` (`id_drogueria_id`),
  CONSTRAINT `FK_usuario_drogueria` FOREIGN KEY (`id_drogueria_id`) REFERENCES `drogueria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla bd_drogueria.usuario: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `id_drogueria_id`, `nombre`, `telefono`, `tipo_usuario`, `correo`, `clave`) VALUES
	(9, 1, 'alejandra', '30252', '2', 'aleja@dkkf', '12345678'),
	(11, NULL, 'alexander', '5236', '1', 'crist_9424@hotmail.com', '654321'),
	(12, 2, 'clarita', '12345', '1', 'clara@a.com', '12345'),
	(13, 3, 'camilo', '5236', '2', 'all@st.com', '222'),
	(14, NULL, 'oward', '632', '2', 'o@wr', '44444');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
