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
					<span>Listado de Periodos Activos</span>
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

				<table class="table table-hover">

  <tr><th>
  	Num.
  </th>
  <th>Ejercicio</th>
  <th>Accion</th>
  </tr>

<?php 
$contador =1;
 foreach ($model as $item) {
// $sql = "SELECT count(id) as registros from base_cap where id_periodo=$item[id]"; 
//$ejercicio = Yii::app()->db->createCommand($sql)->queryRow();
		


echo "<tr><td>$contador<td>$item->nombre</td><td>";
echo CHtml::link('Mostrar Horarios',array('sessionesEscolar/mostrar/'.$item->id),array('class'=>'btn btn-success btn-sm'));
echo "</td></tr>";
$contador++;
}
  ?>

 </table>
				
			</div>
		</div>
	</div>
</div>


