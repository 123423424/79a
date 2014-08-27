<?php

/**
 * This is the model class for table "homeowners".
 *
 * The followings are the available columns in table 'homeowners':
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property string $patronymicName
 * @property integer $room
 * @property string $phone
 * @property string $password
 * @property integer $validation
 * @property string $email
 * @property string $hireDate
 * @property string $registerDate
 * @property string $ip
 */
class Homeowners extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'homeowners';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstName, lastName, password, registerDate, ip', 'required'),
			array('room, validation', 'numerical', 'integerOnly'=>true),
			array('firstName, lastName, patronymicName, phone, password, email', 'length', 'max'=>255),
			array('ip', 'length', 'max'=>10),
			array('hireDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, firstName, lastName, patronymicName, room, phone, password, validation, email, hireDate, registerDate, ip', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'firstName' => 'Имя',
			'lastName' => 'Фамилия',
			'patronymicName' => 'Patronymic Name',
			'room' => 'Room',
			'phone' => 'Phone',
			'password' => 'Password',
			'validation' => 'Validation',
			'email' => 'Email',
			'hireDate' => 'Hire Date',
			'registerDate' => 'Register Date',
			'ip' => 'Ip',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('patronymicName',$this->patronymicName,true);
		$criteria->compare('room',$this->room);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('validation',$this->validation);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('hireDate',$this->hireDate,true);
		$criteria->compare('registerDate',$this->registerDate,true);
		$criteria->compare('ip',$this->ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Homeowners the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
