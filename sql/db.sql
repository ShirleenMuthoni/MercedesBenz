USE `mercedes`;

drop database if exists mercedes;
create database if not exists mercedes;
use mercedes;

CREATE TABLE .`users`
 (`userId` bigint(10) NOT NULL AUTO_INCREMENT , 
`fullname` VARCHAR(50) NULL DEFAULT NULL ,
 `email` VARCHAR(50)  NOT NULL DEFAULT NULL , 
`password` VARCHAR(60) NULL DEFAULT NULL ,
roleId tinyint(1) not null DEFAULT 0,
genderId int(1) not null DEFAULT 0,
datecreated datetime DEFAULT CURRENT_TIMESTAMP()
dateupdated datetime DEFAULT CURRENT_TIMESTAMP() on UPDATE CUREENT_TIMESTAMP(), 
PRIMARY KEY (`userId`), 
UNIQUE `email` (`email`) 
);