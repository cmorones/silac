<?php

class CatMatReactController extends Controller
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
				'actions'=>array('index','view'),
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
		$model=new CatMatReact;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$resultCat = CatCatMat::model()->findAll(array('order'=>'id'));
        $cat = array();
        $cat['falso'] = 'Seleccionar';
        foreach ($resultCat as $key => $value) {
            $cat[$value->id] = "$value->nombre";
        }

        $resultTipo = CatTipo::model()->findAll(array('order'=>'id'));
        $tipo = array();
        $tipo['falso'] = 'Seleccionar';
        foreach ($resultTipo as $key => $value) {
            $tipo[$value->id] = "$value->nombre";
        }

         $resultStatus = CatStatus::model()->findAll(array('order'=>'id'));
        $status = array();
        $status['falso'] = 'Seleccionar';
        foreach ($resultStatus as $key => $value) {
            $status[$value->id] = "$value->nombre";
        }

           $resultMedida = CatMedida::model()->findAll(array('order'=>'id'));
        $med = array();
        $med['falso'] = 'Seleccionar';
        foreach ($resultMedida as $key => $value) {
            $med[$value->id] = "$value->nombre";
        }

            $resultTipoMat = CatTipoMat::model()->findAll(array('order'=>'id'));
        $tipoMat = array();
        $tipoMat['falso'] = 'Seleccionar';
        foreach ($resultTipoMat as $key => $value) {
            $tipoMat[$value->id] = "$value->nombre";
        }



		if(isset($_POST['CatMatReact']))
		{
			$model->attributes=$_POST['CatMatReact'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'cat'=>$cat,
			'tipo'=>$tipo,
			'status'=>$status,
			'med'=>$med,
			'tipoMat'=>$tipoMat,

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

		if(isset($_POST['CatMatReact']))
		{
			$model->attributes=$_POST['CatMatReact'];
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
		$dataProvider=new CActiveDataProvider('CatMatReact');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CatMatReact('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CatMatReact']))
			$model->attributes=$_GET['CatMatReact'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return CatMatReact the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=CatMatReact::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CatMatReact $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cat-mat-react-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
