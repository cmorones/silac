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

				<h4 class="page-header">Registro de sessiones</h4>

				<?php echo $this->renderPartial('_form', array(
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
				)); ?>
				
			</div>
		</div>
	</div>
</div>
