<?php

/**
 * This is the model class for table "sesiones_escolar".
 *
 * The followings are the available columns in table 'sesiones_escolar':
 * @property integer $id
 * @property integer $id_periodo
 * @property integer $id_plantel
 * @property integer $id_profesor
 * @property string $clave
 * @property string $clave_materia
 * @property string $descripcion
 * @property string $sesion_dia
 * @property string $hora_ini
 * @property string $hora_fin
 * @property integer $id_grupo
 */
class SessionesEscolar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SessionesEscolar the static model class
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
		return 'sesiones_escolar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_periodo, id_plantel, id_profesor, id_grupo', 'numerical', 'integerOnly'=>true),
			array('clave, clave_materia, descripcion, sesion_dia, hora_ini, hora_fin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_periodo, id_plantel, id_profesor, clave, clave_materia, descripcion, sesion_dia, hora_ini, hora_fin, id_grupo', 'safe', 'on'=>'search'),
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
			'id_periodo' => 'Id Periodo',
			'id_plantel' => 'Id Plantel',
			'id_profesor' => 'Id Profesor',
			'clave' => 'Clave',
			'clave_materia' => 'Clave Materia',
			'descripcion' => 'Descripcion',
			'sesion_dia' => 'Sesion Dia',
			'hora_ini' => 'Hora Ini',
			'hora_fin' => 'Hora Fin',
			'id_grupo' => 'Id Grupo',
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
		$criteria->compare('id_periodo',$this->id_periodo);
		$criteria->compare('id_plantel',$this->id_plantel);
		$criteria->compare('id_profesor',$this->id_profesor);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('clave_materia',$this->clave_materia,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('sesion_dia',$this->sesion_dia,true);
		$criteria->compare('hora_ini',$this->hora_ini,true);
		$criteria->compare('hora_fin',$this->hora_fin,true);
		$criteria->compare('id_grupo',$this->id_grupo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}