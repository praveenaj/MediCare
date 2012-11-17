<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $nic
 * @property string $mobile
 * @property string $tel
 * @property string $email
 * @property string $address
 * @property string $country
 * @property string $gender
 * @property string $city
 * @property string $province
 * @property string $fax
 * @property string $hashid
 * @property string $birthday
 *
 * The followings are the available model relations:
 * @property Login[] $logins
 * @property Prescription[] $prescriptions
 */
class Patient extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Patient the static model class
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
		return 'patient';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, lastname, email, address, country, city, province, fax, hashid, birthday', 'length', 'max'=>255),
			array('nic, gender', 'length', 'max'=>10),
			array('mobile, tel', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, firstname, lastname, nic, mobile, tel, email, address, country, gender, city, province, fax, hashid, birthday', 'safe', 'on'=>'search'),
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
			'logins' => array(self::HAS_MANY, 'Login', 'patientid'),
			'prescriptions' => array(self::HAS_MANY, 'Prescription', 'patientid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'nic' => 'Nic',
			'mobile' => 'Mobile',
			'tel' => 'Tel',
			'email' => 'Email',
			'address' => 'Address',
			'country' => 'Country',
			'gender' => 'Gender',
			'city' => 'City',
			'province' => 'Province',
			'fax' => 'Fax',
			'hashid' => 'Hashid',
			'birthday' => 'Birthday',
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
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('nic',$this->nic,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('hashid',$this->hashid,true);
		$criteria->compare('birthday',$this->birthday,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}