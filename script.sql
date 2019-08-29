CREATE TABLE IF NOT EXISTS `user` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `lastName` VARCHAR(50) NOT NULL ,
    `firstName` VARCHAR(50) NOT NULL ,
    `birthDate` DATETIME NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `zipCode` VARCHAR(5) NOT NULL,
    `phone` VARCHAR(10) NOT NULL ,
    `idService` INT,
    CONSTRAINT PK_id_user PRIMARY KEY(`id`)
) 
ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS `service` (
    `idService` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `description` VARCHAR(50) NOT NULL,
    CONSTRAINT PK_idService_service PRIMARY KEY(`idService`)
) 
ENGINE=INNODB;

ALTER TABLE user ADD CONSTRAINT FK_service_idService FOREIGN KEY(`idService`) REFERENCES service(`idService`) ON DELETE CASCADE;

-- peuplement de la table

INSERT INTO `service` (`name`, `description`) VALUES 
('Maintenance', 'Les spécialistes du Hardware'),
('Web Developer', 'Pour eux tout est code'),
('Web Designer', 'Y a que le CSS dans la vie'),
('Reférenceur', 'Regarde les Serps Google du matin au soir et du soir au matin');


