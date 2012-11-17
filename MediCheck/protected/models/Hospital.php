<?php

/**
 * This is the model class for table "hospital".
 *
 * The followings are the available columns in table 'hospital':
 * @property integer $id
 * @property integer $regid
 * @property string $name
 * @property string $address
 * @property string $tel
 * @property string $email
 * @property string $fax
 * @property string $city
 *
 * The followings are the available model relations:
 * @property Doctor[] $doctors
 */
class Hospital extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hospital the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hospital';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('regid', 'numerical', 'integerOnly'=>true),
			array('name, address, email, city', 'length', 'max'=>255),
			array('tel, fax', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, regid, name, address, tel, email, fax, city', 'safe', 'on'=>'search'),
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
			'doctors' => array(self::MANY_MANY, 'Doctor', 'doctor_hospital(hospitalid, doctorid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'regid' => 'Regid',
			'name' => 'Name',
			'address' => 'Address',
			'tel' => 'Tel',
			'email' => 'Email',
			'fax' => 'Fax',
			'city' => 'City',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('regid',$this->regid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('city',$this->city,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}