<?php

class SesionesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','mostrar', 'validar', 'cierre'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCierre()
	{
		
		$criteria = new CDbCriteria();
		$criteria->order ="id desc";
        
		$model= Sesiones::model()->findAll($criteria);

		$this->render('cierre',array(
			'model'=>$model,
		));
	}

	public function actionMostrar()
	{
		
		$criteria = new CDbCriteria();
		$criteria->order ="id desc";
        
		$model= Sesiones::model()->findAll($criteria);

		$this->render('mostrar',array(
			'model'=>$model,
		));
	}

		public function actionValidar()
	{
		
		$criteria = new CDbCriteria();
		$criteria->order ="id desc";
        
		$model= Sesiones::model()->findAll($criteria);

		$this->render('validar',array(
			'model'=>$model,
		));
	}
	/**

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Sesiones;

		$resultPer = CatPeriodos::model()->findAll(array('order'=>'id'));
        $per = array();
        $per['falso'] = 'Seleccionar';
        foreach ($resultPer as $key => $value) {
            $per[$value->id] = "$value->nombre";
        }

        $resultPlantel = CatPlanteles::model()->findAll(array('order'=>'id'));
        $plantel = array();
        $plantel['falso'] = 'Seleccionar';
        foreach ($resultPlantel as $key => $value) {
            $plantel[$value->id] = "$value->nombre";
        }

        $resultProfesor = CatProfesor::model()->findAll(array('order'=>'id'));
        $profesor = array();
        $profesor['falso'] = 'Seleccionar';
        foreach ($resultProfesor as $key => $value) {
            $profesor[$value->id] = "$value->nombre";
        }

        $resultAsignatura = CatAsignatura::model()->findAll(array('order'=>'id'));
        $asignatura = array();
        $asignatura['falso'] = 'Seleccionar';
        foreach ($resultAsignatura as $key => $value) {
            $asignatura[$value->id] = "$value->nombre";
        }

        $resultGrupos = CatGrupos::model()->findAll(array('order'=>'id'));
        $grupos = array();
        $grupos['falso'] = 'Seleccionar';
        foreach ($resultGrupos as $key => $value) {
            $grupos[$value->id] = "$value->nombre";
        }

         $resultModalidad = CatModalidad::model()->findAll(array('order'=>'id'));
        $modalidad = array();
        $modalidad['falso'] = 'Seleccionar';
        foreach ($resultModalidad as $key => $value) {
            $modalidad[$value->id] = "$value->nombre";
        }

         $resultTurno = CatTurno::model()->findAll(array('order'=>'id'));
        $turno = array();
        $turno['falso'] = 'Seleccionar';
        foreach ($resultTurno as $key => $value) {
            $turno[$value->id] = "$value->nombre";
        }

         $resultSesion = CatSesion::model()->findAll(array('order'=>'id'));
        $sesion = array();
        $sesion['falso'] = 'Seleccionar';
        foreach ($resultSesion as $key => $value) {
            $sesion[$value->id] = "$value->nombre";
        }

          $resultStatus = CatStatus::model()->findAll(array('order'=>'id'));
        $status = array();
        $status['falso'] = 'Seleccionar';
        foreach ($resultStatus as $key => $value) {
            $status[$value->id] = "$value->nombre";
        }

          $resultLabs = CatLabs::model()->findAll(array('order'=>'id'));
        $labs = array();
        $labs['falso'] = 'Seleccionar';
        foreach ($resultLabs as $key => $value) {
            $labs[$value->id] = "$value->nombre";
        }


		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sesiones']))
		{
			$model->attributes=$_POST['Sesiones'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'per'=>$per,
			'plantel'=>$plantel,
			'profesor'=>$profesor,
			'asignatura'=>$asignatura,
			'grupos'=>$grupos,
			'modalidad'=>$modalidad,
			'turno'=>$turno,
			'sesion'=>$sesion,
			'status'=>$status,
			'labs'=>$labs,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sesiones']))
		{
			$model->attributes=$_POST['Sesiones'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Sesiones');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Sesiones('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sesiones']))
			$model->attributes=$_GET['Sesiones'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Sesiones the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Sesiones::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Sesiones $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sesiones-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
