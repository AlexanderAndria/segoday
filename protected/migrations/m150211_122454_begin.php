<?php

class m150211_122454_begin extends CDbMigration
{
	public function up()
	{
		$db = Yii::app()->db;
		$db->createCommand("
											CREATE TABLE `type_event` (
												`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
												`type` varchar(50) NOT NULL,
												PRIMARY KEY (`id`)
											) ENGINE=InnoDB DEFAULT CHARSET=utf8;
									
											CREATE TABLE `today` (
											`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
											`title` varchar(255) NOT NULL,
											`descr` text NOT NULL,
											`pathImg` varchar(255) DEFAULT NULL,
											`date` datetime NOT NULL,
											`type_id` int(11) unsigned NOT NULL,
											`place` varchar(50) NOT NULL,
											`place_link` varchar(255) NOT NULL,
											PRIMARY KEY (`id`),
											KEY `FK1_type_event` (`type_id`),
											CONSTRAINT `FK1_type_event` FOREIGN KEY (`type_id`) REFERENCES `type_event` (`id`)
										) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='события'; 
									")->execute();
	}

	public function down()
	{
		echo "m150211_122454_begin не может бвть сброшенна так как это начальная точка.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}