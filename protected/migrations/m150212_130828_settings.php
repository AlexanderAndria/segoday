<?php

class m150212_130828_settings extends CDbMigration
{
	public function up()
	{
		$db = Yii::app()->db;
		$db->createCommand('
											CREATE TABLE `settings` (
												`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
												`kategory_first` varchar(50) DEFAULT NULL,
												`type_event_id` int(11) unsigned NOT NULL,
												PRIMARY KEY (`id`)
											) ENGINE=InnoDB DEFAULT CHARSET=utf8;
										')->execute();
	}

	public function down()
	{
		$this->dropTable('settings');
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