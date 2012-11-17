<?php

/**
 * This is the model class for table "prescription".
 *
 * The followings are the available columns in table 'prescription':
 * @property integer $id
 * @property integer $patientid
 * @property integer $doctorname
 * @property integer $doctorid
 * @property string $date
 * @property string $added
 * @property string $description
 * @property string $diagnosis
 *
 * The followings are the available model relations:
 * @property Doctor $doctor
 * @property Patient $patient
 * @property Drug[] $drugs
 */
class Prescription extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prescription the static model class
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
		return 'prescription';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patientid, doctorid', 'required'),
			array('patientid, doctorname, doctorid', 'numerical', 'integerOnly'=>true),
			array('added, description, diagnosis', 'length', 'max'=>255),
			array('date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, patientid, doctorname, doctorid, date, added, description, diagnosis', 'safe', 'on'=>'search'),
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
			'doctor' => array(self::BELONGS_TO, 'Doctor', 'doctorid'),
			'patient' => array(self::BELONGS_TO, 'Patient', 'patientid'),
			'drugs' => array(self::MANY_MANY, 'Drug', 'prescription_drug(prescriptionid, drugid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'patientid' => 'Patientid',
			'doctorname' => 'Doctorname',
			'doctorid' => 'Doctorid',
			'date' => 'Date',
			'added' => 'Added',
			'description' => 'Description',
			'diagnosis' => 'Diagnosis',
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
		$criteria->compare('patientid',$this->patientid);
		$criteria->compare('doctorname',$this->doctorname);
		$criteria->compare('doctorid',$this->doctorid);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('added',$this->added,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('diagnosis',$this->diagnosis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}