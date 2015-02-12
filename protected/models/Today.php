<?php

/**
 * This is the model class for table "today".
 *
 * The followings are the available columns in table 'today':
 * @property string $id
 * @property string $title
 * @property string $descr
 * @property string $pathImg
 * @property string $date
 * @property string $type_id
 * @property string $place
 * @property string $place_link
 *
 * The followings are the available model relations:
 * @property TypeEvent $type
 */
class Today extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'today';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, descr, date, type_id, place, place_link', 'required'),
			array('title, pathImg, place_link', 'length', 'max'=>255),
			array('type_id', 'length', 'max'=>11),
			array('place', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, descr, pathImg, date, type_id, place, place_link', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'type' => array(self::BELONGS_TO, 'TypeEvent', 'type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'descr' => 'Descr',
			'pathImg' => 'Path Img',
			'date' => 'Date',
			'type_id' => 'Type',
			'place' => 'Place',
			'place_link' => 'Place Link',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('descr',$this->descr,true);
		$criteria->compare('pathImg',$this->pathImg,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('type_id',$this->type_id,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('place_link',$this->place_link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Today the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
