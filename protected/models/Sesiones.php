<?php

/**
 * This is the model class for table "sesiones".
 *
 * The followings are the available columns in table 'sesiones':
 * @property integer $id
 * @property integer $id_periodo
 * @property integer $id_profesor
 * @property integer $id_asignatura
 * @property integer $id_grupo
 * @property integer $id_modalidad
 * @property string $fecha
 * @property string $hora_ini
 * @property string $hora_fin
 * @property integer $num_estudiantes
 * @property integer $turno
 * @property integer $tipo_sesion
 * @property string $actividades
 * @property string $observaciones
 * @property integer $status
 * @property string $fecha_reg
 * @property string $fecha_mod
 */
class Sesiones extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sesiones the static model class
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
		return 'sesiones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_plantel, id_lab ,id_periodo, id_profesor, id_asignatura, id_grupo, id_modalidad, num_estudiantes, turno, tipo_sesion, status', 'numerical', 'integerOnly'=>true),
			array('fecha, hora_ini, hora_fin, actividades, observaciones, fecha_reg, fecha_mod', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_plantel, id_lab, id_periodo, id_profesor, id_asignatura, id_grupo, id_modalidad, fecha, hora_ini, hora_fin, num_estudiantes, turno, tipo_sesion, actividades, observaciones, status, fecha_reg, fecha_mod', 'safe', 'on'=>'search'),
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
			'id_plantel' => 'Plantel',
			'id_lab' => 'Laboratorio',
			'id_periodo' => 'Semestre',
			'id_profesor' => 'Profesor',
			'id_asignatura' => 'Asignatura',
			'id_grupo' => 'Grupo',
			'id_modalidad' => 'Modalidad',
			'fecha' => 'Fecha',
			'hora_ini' => 'Hora Inicio',
			'hora_fin' => 'Hora Final',
			'num_estudiantes' => 'Número de estudiantes que asistieron',
			'turno' => 'Turno',
			'tipo_sesion' => 'Tipo Sesion',
			'actividades' => 'Actividades',
			'observaciones' => 'Observaciones',
			'status' => 'Status',
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
		$criteria->compare('id_periodo',$this->id_periodo);
		$criteria->compare('id_plantel',$this->id_plantel);
		$criteria->compare('id_lab',$this->id_lab);
		$criteria->compare('id_profesor',$this->id_profesor);
		$criteria->compare('id_asignatura',$this->id_asignatura);
		$criteria->compare('id_grupo',$this->id_grupo);
		$criteria->compare('id_modalidad',$this->id_modalidad);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora_ini',$this->hora_ini,true);
		$criteria->compare('hora_fin',$this->hora_fin,true);
		$criteria->compare('num_estudiantes',$this->num_estudiantes);
		$criteria->compare('turno',$this->turno);
		$criteria->compare('tipo_sesion',$this->tipo_sesion);
		$criteria->compare('actividades',$this->actividades,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('fecha_reg',$this->fecha_reg,true);
		$criteria->compare('fecha_mod',$this->fecha_mod,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}