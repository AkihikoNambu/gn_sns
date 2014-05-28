
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- blog
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blog`;


CREATE TABLE `blog`
(
	`user_id` INTEGER,
	`title` VARCHAR(50),
	`image` TEXT,
	`body` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `blog_FI_1` (`user_id`),
	CONSTRAINT `blog_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
);

#-----------------------------------------------------------------------------
#-- blog_comment
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blog_comment`;


CREATE TABLE `blog_comment`
(
	`blog_id` INTEGER,
	`user_id` INTEGER,
	`body` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `blog_comment_FI_1` (`blog_id`),
	CONSTRAINT `blog_comment_FK_1`
		FOREIGN KEY (`blog_id`)
		REFERENCES `blog` (`id`),
	INDEX `blog_comment_FI_2` (`user_id`),
	CONSTRAINT `blog_comment_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
);

#-----------------------------------------------------------------------------
#-- user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;


CREATE TABLE `user`
(
	`nickname` VARCHAR(50),
	`first_name` VARCHAR(100),
	`last_name` VARCHAR(100),
	`sex` VARCHAR(20),
	`user_type` VARCHAR(30),
	`occupation` TEXT,
	`birth_country` VARCHAR(100),
	`country` VARCHAR(100),
	`email` VARCHAR(100),
	`facebook_url` TEXT,
	`sha1_password` VARCHAR(40),
	`salt` VARCHAR(32),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

#-----------------------------------------------------------------------------
#-- blog_interested
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blog_interested`;


CREATE TABLE `blog_interested`
(
	`blog_id` INTEGER,
	`user_id` INTEGER,
	`created_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `blog_interested_FI_1` (`blog_id`),
	CONSTRAINT `blog_interested_FK_1`
		FOREIGN KEY (`blog_id`)
		REFERENCES `blog` (`id`),
	INDEX `blog_interested_FI_2` (`user_id`),
	CONSTRAINT `blog_interested_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
);

#-----------------------------------------------------------------------------
#-- friend
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `friend`;


CREATE TABLE `friend`
(
	`user_id` INTEGER,
	`image` TEXT,
	`body` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `friend_FI_1` (`user_id`),
	CONSTRAINT `friend_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
);

#-----------------------------------------------------------------------------
#-- friend_comment
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `friend_comment`;


CREATE TABLE `friend_comment`
(
	`friend_id` INTEGER,
	`user_id` INTEGER,
	`body` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `friend_comment_FI_1` (`friend_id`),
	CONSTRAINT `friend_comment_FK_1`
		FOREIGN KEY (`friend_id`)
		REFERENCES `friend` (`id`),
	INDEX `friend_comment_FI_2` (`user_id`),
	CONSTRAINT `friend_comment_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
);

#-----------------------------------------------------------------------------
#-- report
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `report`;


CREATE TABLE `report`
(
	`image` TEXT,
	`year` INTEGER,
	`host_country` VARCHAR(100),
	`body` TEXT,
	`reportfile` TEXT,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
