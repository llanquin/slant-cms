CREATE TABLE IF NOT EXISTS `accounts` (
  `userid` INT NOT NULL AUTO_INCREMENT,
  `username` TEXT NOT NULL,
  `password` TEXT NOT NULL,
  `email` TEXT NOT NULL,
  `displayname` TEXT NOT NULL,
  `role` INT NOT NULL,
  `lastlogin` TIMESTAMP NOT NULL,
  `lastip` TEXT NOT NULL,
  PRIMARY KEY (`userid`))
ENGINE = MyISAM;

CREATE TABLE IF NOT EXISTS `blogposts` (
  `postid` INT NOT NULL AUTO_INCREMENT,
  `title` TEXT NOT NULL,
  `content` TEXT NOT NULL,
  `userid` INT NOT NULL,
  `datetime` TIMESTAMP NOT NULL,
  `category` INT NOT NULL,
  PRIMARY KEY (`postid`))
ENGINE = MyISAM;

CREATE TABLE IF NOT EXISTS `categories` (
  `catid` INT NOT NULL AUTO_INCREMENT,
  `categoryname` TEXT NOT NULL,
  PRIMARY KEY (`catid`))
ENGINE = MyISAM;