CREATE TABLE `files` (
    `file_id` INT NOT NULL AUTO_INCREMENT ,
    `file_name` VARCHAR( 50 ) NOT NULL ,
    `file_size` VARCHAR( 25 ) NOT NULL ,
    `file_type` VARCHAR( 25 ) NOT NULL ,
    `file_blob` BLOB NOT NULL ,
    PRIMARY KEY ( `file_id` )
);