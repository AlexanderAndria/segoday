<?php

class m150212_123855_add_column_name_typeeventid extends CDbMigration
{
	public function up()
	{
		$db = Yii::app()->db;
		$db->createCommand("
											ALTER TABLE `target_url`
											ADD COLUMN `name` VARCHAR(100) NOT NULL AFTER `url`;
											
											ALTER TABLE `target_url`
											ADD COLUMN `type_event_id` INT(11) UNSIGNED NOT NULL AFTER `name`;
											
											ALTER TABLE `target_url`
											ADD CONSTRAINT `FK_type_event` FOREIGN KEY (`type_event_id`) REFERENCES `type_event` (`id`);
									")->execute();
	}

	public function down()
	{
		$this->dropColumn('target_url', 'name');
		$this->dropColumn('target_url', 'type_event_id');
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