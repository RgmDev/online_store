CREATE DATABASE `marketpro` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `marketpro`;

CREATE TABLE IF NOT EXISTS `ofertas` (
  `sku` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introDescripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `precioOferta` decimal(10,2) DEFAULT NULL,
  `moneda` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `ofertas` (`sku`, `nombre`, `introDescripcion`, `descripcion`, `img`, `precio`, `precioOferta`, `moneda`) VALUES(001, 'Lirio de paz', 'Lorem ipsum dolor sit amet', 'Es una planta preciosa', 'plantas/lirio.png', 18.00, 18.00, 'Euros');
INSERT INTO `ofertas` (`sku`, `nombre`, `introDescripcion`, `descripcion`, `img`, `precio`, `precioOferta`, `moneda`) VALUES(002, 'Echevería', 'Lorem ipsum dolor sit amet', 'Es una planta preciosa', 'plantas/echeveria.png', 79.00, 19.00, 'Euros');
INSERT INTO `ofertas` (`sku`, `nombre`, `introDescripcion`, `descripcion`, `img`, `precio`, `precioOferta`, `moneda`) VALUES(003, 'Planta de Hule', 'Lorem ipsum dolor sit amet', 'Es una planta preciosa', 'plantas/hule.png', 249.00, 59.00, 'Euros');
INSERT INTO `ofertas` (`sku`, `nombre`, `introDescripcion`, `descripcion`, `img`, `precio`, `precioOferta`, `moneda`) VALUES(004, 'Cactus', 'Lorem ipsum dolor sit amet', 'Es una planta preciosa', 'plantas/cactus.png', 19.00, 9.00, 'Euros');

