<?php

$installer = $this;
$installer->startSetup();
$installer->run("CREATE TABLE oralce_mod_entities (
        `oralce_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `title` VARCHAR(255) NOT NULL,
        `content` TEXT NOT NULL,
        `created` DATETIME,

        PRIMARY KEY (`oralce_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->endSetup();