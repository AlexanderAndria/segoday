<?php

class m150212_093845_tbl_target_url extends CDbMigration
{
	public function up()
	{
		$db = Yii::app()->db;
		$db->createCommand("
											CREATE TABLE `target_url` (
												`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
												`url` text NOT NULL,
												PRIMARY KEY (`id`)
											) ENGINE=InnoDB DEFAULT CHARSET=utf8;
									")->execute();
	}

	public function down()
	{
		$this->dropTable('target_url');
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