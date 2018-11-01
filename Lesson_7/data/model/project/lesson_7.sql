-- MySQL Script generated by MySQL Workbench
-- 10/29/18 10:09:23
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lesson_6
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lesson_6
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lesson_6` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
USE `lesson_6` ;

-- -----------------------------------------------------
-- Table `lesson_6`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lesson_6`.`product` ;

CREATE TABLE IF NOT EXISTS `lesson_6`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `url` VARCHAR(45) NOT NULL,
  `count` VARCHAR(45) NOT NULL,
  `count_view` INT NULL,
  `price` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lesson_6`.`comment_site`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lesson_6`.`comment_site` ;

CREATE TABLE IF NOT EXISTS `lesson_6`.`comment_site` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;