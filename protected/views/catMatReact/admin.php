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

				<h4 class="page-header">Listado de Materiales</h4>
				  <p><a href="<?php echo CController::createUrl('catMatReact/create'); ?>" class="btn-sm btn btn-warning pull-left"><i class="glyphicon glypicon-plus"></i>Agregar Material y/o Reactivo</a></p>

				
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-mat-react-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
            'name'=>'tipo',
            'value'=>'$data->tipoMat->nombre',
             'filter'=>CatTipo::model()->options,
            'htmlOptions'=>array('style'=>'width: 120px;  text-align:center;'),
                    ),
		array(
            'name'=>'categoria',
            'value'=>'$data->categoriaMat->nombre',
             'filter'=>CatCatMat::model()->options,
            'htmlOptions'=>array('style'=>'width: 70px;  text-align:center;'),
                    ),
		
		array(
            'name'=>'tipo_des',
            'value'=>'$data->tipoMatDes->nombre',
             'filter'=>CatTipoMat::model()->options,
            'htmlOptions'=>array('style'=>'width: 100px;  text-align:center;'),
                    ),
		'clave',
		'nombre',
		/*
		'imagen',*/
		'unidad',
		'status',
	
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('style'=>'width: 100px;  text-align:center;'),
		),
	),
)); ?>
				
			</div>
		</div>
	</div>
</div>

