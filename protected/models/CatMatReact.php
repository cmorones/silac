<?php

/**
 * This is the model class for table "cat_matyreact".
 *
 * The followings are the available columns in table 'cat_matyreact':
 * @property integer $id
 * @property integer $categoria
 * @property integer $tipo
 * @property string $clave
 * @property string $nombre
 * @property integer $unidad
 * @property integer $status
 */
class CatMatReact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatMatReact the static model class
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
		return 'cat_matyreact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imagen, tipo_des,categoria, tipo, unidad, status', 'numerical', 'integerOnly'=>true),
			array('clave, nombre', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, categoria, tipo, clave, nombre, unidad, status', 'safe', 'on'=>'search'),
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
			'categoriaMat'=>array(self::BELONGS_TO, 'CatCatMat', 'categoria'),
			'tipoMat'=>array(self::BELONGS_TO, 'CatTipo', 'tipo'),
			'tipoMatDes'=>array(self::BELONGS_TO, 'CatTipoMat', 'tipo_des'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'categoria' => 'Categoria',
			'tipo' => 'Material o Reactivo',
			'tipo_des' => 'Tipo',
			'clave' => 'Clave',
			'nombre' => 'Nombre',
			'unidad' => 'Unidad',
			'status' => 'Status',
			'imagen' => 'Imagen',
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
		$criteria->compare('categoria',$this->categoria);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('tipo_des',$this->tipo_des);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('unidad',$this->unidad);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array('pageSize' => 30),
		));
	}
}