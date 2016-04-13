<?php

class ApiController extends Controller
{
	public function actionCalendar()
	{
		   	
/*
 {
    "title": "Long Event",
    "start": "2016-01-07",
    "end": "2016-01-10"
  },
*/

		/*	$data['title'] = "Long Event";
			$data['start'] = "2016-04-11";
			$data['end'] = "2016-04-12";

			$miArray = array("manzana"=>"verde", "uva"=>"Morada", "fresa"=>"roja");
print_r(json_encode($miArray));

		*/

		$data = array (
			array(
			'title'=>"Grupo 1024",
			'start'=>"2016-04-11T10:30:00-05:00",
			'end'=>"2016-04-11T11:30:00-06:00",
			'color'=>'#257e4a'

			),
			array(
			'title'=>"Grupo 1024",
			'start'=>"2016-04-12T10:30:00-05:00",
			'end'=>"2016-04-11T11:30:00-06:00"
			),

			array(
			'title'=>"Grupo 123",
			'start'=>"2016-04-8T10:30:00-05:00",
			'end'=>"2016-04-8T11:30:00-06:00",
			'color'=>'#257e4a'

			),
			array(
			'title'=>"Grupo 1034624",
			'start'=>"2016-04-15T10:30:00-05:00",
			'end'=>"2016-04-15T11:30:00-06:00"
			),

			array(
			'title'=>"Grupo 342",
			'start'=>"2016-04-13T10:30:00-05:00",
			'end'=>"2016-04-13T11:30:00-06:00",
			'color'=>'#257e4a'

			),
			array(
			'title'=>"Grupo 1234023424",
			'start'=>"2016-04-20T10:30:00-05:00",
			'end'=>"2016-04-20T11:30:00-06:00"
			),
		);

	


		   	header('Content-type: application/json');  
            echo json_encode($data);  
            Yii::app()->end();
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}