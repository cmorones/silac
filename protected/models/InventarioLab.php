<?php

/**
 * This is the model class for table "invetario_lab".
 *
 * The followings are the available columns in table 'invetario_lab':
 * @property integer $id
 * @property integer $id_catmat
 * @property integer $id_plantel
 * @property double $entrada
 * @property integer $user_reg
 * @property integer $user_mod
 * @property string $fecha_reg
 * @property string $fecha_mod
 */
class InventarioLab extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InventarioLab the static model class
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
		return 'invetario_lab';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_catmat, id_plantel, user_reg, user_mod', 'numerical', 'integerOnly'=>true),
			array('entrada', 'numerical'),
			array('fecha_reg, fecha_mod', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_catmat, id_plantel, entrada, user_reg, user_mod, fecha_reg, fecha_mod', 'safe', 'on'=>'search'),
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
			'id_catmat' => 'Seleccionar Material y/o Reactivo:',
			'id_plantel' => 'Plantel:',
			'entrada' => 'Cantidad:',
			'user_reg' => 'User Reg',
			'user_mod' => 'User Mod',
			'fecha_reg' => 'Fecha Reg',
			'fecha_mod' => 'Fecha Mod',
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
		$criteria->compare('id_catmat',$this->id_catmat);
		$criteria->compare('id_plantel',$this->id_plantel);
		$criteria->compare('entrada',$this->entrada);
		$criteria->compare('user_reg',$this->user_reg);
		$criteria->compare('user_mod',$this->user_mod);
		$criteria->compare('fecha_reg',$this->fecha_reg,true);
		$criteria->compare('fecha_mod',$this->fecha_mod,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}