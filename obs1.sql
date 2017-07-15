CREATE TABLE IF NOT EXISTS `mydb`.`observer-student` (
  `oid` INT NOT NULL,
  `sid` INT NOT NULL,
  `year` DATE NOT NULL,
  PRIMARY KEY (`oid`))
ENGINE = InnoDB