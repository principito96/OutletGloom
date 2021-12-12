-- -----------------------------------------------------
-- Table `productos`.`pantalones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pantalones`;
CREATE TABLE IF NOT EXISTS `pantalones` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `foto` VARCHAR(100) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `stock` INT(100) NOT NULL,
  `descripcion` VARCHAR(1000) NOT NULL,
  `precio` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `productos`.`sudaderas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sudaderas`;
CREATE TABLE IF NOT EXISTS `sudaderas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `foto` VARCHAR(100) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `stock` INT(100) NOT NULL,
  `descripcion` VARCHAR(1000) NOT NULL,
  `precio` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `productos`.`vestidos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `vestidos`;
CREATE TABLE IF NOT EXISTS `vestidos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `foto` VARCHAR(100) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `stock` INT(100) NOT NULL,
  `descripcion` VARCHAR(1000) NOT NULL,
  `precio` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `productos`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `password` VARCHAR(1000) NOT NULL,
  `email` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `pantalones` values('1','../Fotos/pantalones.png','Pantalones grises deportivos','1000', 'Pantalones grises deportivos temporada invierno 2021', '50');
INSERT INTO `pantalones` values('2','../Fotos/pantalones.png','Pantalones grises deportivos','1000', 'Pantalones grises deportivos temporada invierno 2021', '50');
INSERT INTO `pantalones` values('3','../Fotos/pantalones.png','Pantalones grises deportivos','1000', 'Pantalones grises deportivos temporada invierno 2021', '50');

INSERT INTO `sudaderas` values('1','../Fotos/sudadera.png','Sudadera roja Outlet Gloom','3000', 'Sudadera roja Outlet Gloom diseño personalizado y original', '30');
INSERT INTO `sudaderas` values('2','../Fotos/sudadera.png','Sudadera roja Outlet Gloom','3000', 'Sudadera roja Outlet Gloom diseño personalizado y original', '30');
INSERT INTO `sudaderas` values('3','../Fotos/sudadera.png','Sudadera roja Outlet Gloom','3000', 'Sudadera roja Outlet Gloom diseño personalizado y original', '30');

INSERT INTO `vestidos` values('1','../Fotos/vestido1.png','Vestido negro elegante','100', 'Vestido negro elegante exclusivo y unico', '200');
INSERT INTO `vestidos` values('2','../Fotos/vestido1.png','Vestido negro elegante','100', 'Vestido negro elegante exclusivo y unico', '200');
INSERT INTO `vestidos` values('3','../Fotos/vestido1.png','Vestido negro elegante','100', 'Vestido negro elegante exclusivo y unico', '200');
INSERT INTO `vestidos` values('4','../Fotos/vestido1.png','Vestido negro elegante','100', 'Vestido negro elegante exclusivo y unico', '200');
INSERT INTO `vestidos` values('5','../Fotos/vestido1.png','Vestido negro elegante','100', 'Vestido negro elegante exclusivo y unico', '200');
INSERT INTO `vestidos` values('6','../Fotos/vestido1.png','Vestido negro elegante','100', 'Vestido negro elegante exclusivo y unico', '200');

