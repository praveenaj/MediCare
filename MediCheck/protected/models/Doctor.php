<?php

/**
 * This is the model class for table "doctor".
 *
 * The followings are the available columns in table 'doctor':
 * @property integer $id
 * @property string $regid
 * @property string $type
 * @property string $firstname
 * @property string $lastname
 * @property string $nic
 * @property string $mobile
 * @property string $tel
 * @property string $email
 * @property string $gender
 * @property string $address
 *
 * The followings are the available model relations:
 * @property Hospital[] $hospitals
 * @property Login[] $logins
 * @property Prescription[] $prescriptions
 */
class Doctor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Doctor the static model class
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
		return 'doctor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('regid, nic, gender', 'length', 'max'=>10),
			array('type, firstname, lastname, email, address', 'length', 'max'=>255),
			array('mobile, tel', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, regid, type, firstname, lastname, nic, mobile, tel, email, gender, address', 'safe', 'on'=>'search'),
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
			'hospitals' => array(self::MANY_MANY, 'Hospital', 'doctor_hospital(doctorid, hospitalid)'),
			'logins' => array(self::HAS_MANY, 'Login', 'doctorid'),
			'prescriptions' => array(self::HAS_MANY, 'Prescription', 'doctorid'),
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
			'type' => 'Type',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'nic' => 'Nic',
			'mobile' => 'Mobile',
			'tel' => 'Tel',
			'email' => 'Email',
			'gender' => 'Gender',
			'address' => 'Address',
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
		$criteria->compare('regid',$this->regid,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('nic',$this->nic,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}