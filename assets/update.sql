
CREATE TABLE `tourmaline_db`.`group_gallery` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `group_gallery_name` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '');


ALTER TABLE `tourmaline_db`.`gallery` 
DROP FOREIGN KEY `f_category_id`;
ALTER TABLE `tourmaline_db`.`gallery` 
CHANGE COLUMN `category_id` `group_gallery_id` INT(11) NULL DEFAULT NULL COMMENT '' ;
ALTER TABLE `tourmaline_db`.`gallery` 
ADD CONSTRAINT `f_group_gallery_id`
  FOREIGN KEY (`group_gallery_id`)
  REFERENCES `tourmaline_db`.`group_gallery` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `tourmaline_db`.`gallery` 
CHANGE COLUMN `gallery_priority` `gallery_priority` INT(11) NULL DEFAULT 1 COMMENT '' ;
