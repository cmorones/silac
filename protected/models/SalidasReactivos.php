<?php

/**
 * This is the model class for table "salidas_reactivos".
 *
 * The followings are the available columns in table 'salidas_reactivos':
 * @property integer $id
 * @property integer $id_sesion
 * @property integer $id_material
 * @property integer $id_plantel
 * @property integer $id_medida
 * @property double $cantidad
 * @property integer $user_reg
 * @property integer $user_mod
 * @property string $fecha_reg
 * @property string $fecha_mod
 */
class SalidasReactivos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalidasReactivos the static model class
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
		return 'salidas_reactivos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sesion, id_material, id_plantel, id_medida, user_reg, user_mod', 'numerical', 'integerOnly'=>true),
			array('cantidad', 'numerical'),
			array('fecha_reg, fecha_mod', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_sesion, id_material, id_plantel, id_medida, cantidad, user_reg, user_mod, fecha_reg, fecha_mod', 'safe', 'on'=>'search'),
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
			'id_sesion' => 'Id Sesion',
			'id_material' => 'Id Material',
			'id_plantel' => 'Id Plantel',
			'id_medida' => 'Id Medida',
			'cantidad' => 'Cantidad',
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
		$criteria->compare('id_sesion',$this->id_sesion);
		$criteria->compare('id_material',$this->id_material);
		$criteria->compare('id_plantel',$this->id_plantel);
		$criteria->compare('id_medida',$this->id_medida);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('user_reg',$this->user_reg);
		$criteria->compare('user_mod',$this->user_mod);
		$criteria->compare('fecha_reg',$this->fecha_reg,true);
		$criteria->compare('fecha_mod',$this->fecha_mod,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}