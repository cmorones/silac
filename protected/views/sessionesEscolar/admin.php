<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Sesiones</a></li>
			<li><a href="#">Registro</a></li>
			
		</ol>
		
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Formato</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">

				<h4 class="page-header">Listado de Horarios Contro Escolar</h4>

				
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sessiones-escolar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_periodo',
		'id_plantel',
		'id_profesor',
		'clave',
		'clave_materia',
		
		'descripcion',
		'sesion_dia',
		'hora_ini',
		'hora_fin',
		'id_grupo',
		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{confirmar}',
			'buttons'=>array(

				'confirmar'=>array
				(
				'label'=>'entrada',
				'imageUrl'=>Yii::app()->request->baseUrl.'/images/editar.png',
				'url'=>'yii::app()->createUrl("documentos/update",array("id"=>$data->id))',
				),
			),

		),
	),
)); ?>

				
			</div>
		</div>
	</div>
</div>


