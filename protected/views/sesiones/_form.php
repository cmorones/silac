

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sesiones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	 'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'clientOptions'=>array(
        //'validateOnSubmit'=>true,
        //'validateOnChange'=>true,
        //'validateOnType'=>true,
        ),
    'htmlOptions'=>array('class'=>'form-horizontal',
     'role'=>'form'),

)); ?>

					<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_periodo'); ?></label>
						<div class="col-sm-4">
							
							
							 <?php echo $form->dropDownList($model, 'id_periodo', $per, array('id' => 'id_periodo'));?>
							<?php echo $form->error($model,'id_periodo'); ?>
						</div>
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_plantel'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->dropDownList($model, 'id_plantel', $plantel, array('id' => 'id_plantel'));?>
								<?php echo $form->error($model,'id_plantel'); ?>
							</div>


						
					</div>

						<div class="form-group">
						
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_profesor'); ?></label>
							<div class="col-sm-4">
								
								
								<?php echo $form->dropDownList($model, 'id_profesor', $profesor, array('id' => 'id_profesor'));?>
								<?php echo $form->error($model,'id_profesor'); ?>
							</div>


						
					</div>


						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_asignatura'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->dropDownList($model, 'id_asignatura', $asignatura, array('id' => 'id_asignatura'));?>
								<?php echo $form->error($model,'id_asignatura'); ?>
							</div>
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_grupo'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->dropDownList($model, 'id_grupo', $grupos, array('id' => 'id_grupo'));?>
								<?php echo $form->error($model,'id_grupo'); ?>
							</div>

						</div>

					

						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_modalidad'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->dropDownList($model, 'id_modalidad', $modalidad, array('id' => 'id_modalidad'));?>
								<?php echo $form->error($model,'id_modalidad'); ?>
							</div>
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'fecha'); ?></label>
							<div class="col-sm-4">
								
								 <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'model'=>$model,
                            'attribute'=>'fecha',


                            // additional javascript options for the date picker plugin
                            'options' => array(
                                'dateFormat'=>'yy-mm-dd',
                                'showAnim' => 'fold',
                                'changeMonth' => true,
                                'changeYear' => true,
                                'monthNames' => array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'),
                                'monthNamesShort' => array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'),
                                'dayNames' => array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'),
                                'dayNamesShort' => array('Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'),
                                'dayNamesMin' => array('Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'),
                               // 'yearRange' => '2013:2014'
                            ),
                            'htmlOptions' => array(
                                'style' => 'height:30px;width:100px;',
                                'id'=>'fecha',
                                //'class'=>'span12'
                               
                            ),
                        ));
                      
 ?>
								<?php echo $form->error($model,'fecha'); ?>
							</div>
						</div>

					

						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'hora_ini'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->textField($model,'hora_ini', array('class'=>'col-sm-3', 'placeholder'=>'Inicio', 'data-toggle'=>'tooltip', 'data-placement'=>'bottom', 'title'=>'Tooltip for name')); ?>
								<?php echo $form->error($model,'hora_ini'); ?>
							</div>
								<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'hora_fin'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->textField($model,'hora_fin', array('class'=>'col-sm-3', 'placeholder'=>'Termino', 'data-toggle'=>'tooltip', 'data-placement'=>'bottom', 'title'=>'Tooltip for name')); ?>
								<?php echo $form->error($model,'hora_fin'); ?>
							</div>
						</div>

					
						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'num_estudiantes'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->textField($model,'num_estudiantes', array('class'=>'col-sm-3', 'placeholder'=>'Numero', 'data-toggle'=>'tooltip', 'data-placement'=>'bottom', 'title'=>'Tooltip for name')); ?>
								<?php echo $form->error($model,'num_estudiantes'); ?>
							</div>
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'turno'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->dropDownList($model, 'turno', $turno, array('id' => 'turno'));?>
								<?php echo $form->error($model,'turno'); ?>
							</div>
						</div>


						

						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'tipo_sesion'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->dropDownList($model, 'tipo_sesion', $sesion, array('id' => 'tipo_sesion'));?>
								<?php echo $form->error($model,'tipo_sesion'); ?>
							</div>
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'status'); ?></label>
							<div class="col-sm-4">
								
								<?php echo $form->dropDownList($model, 'status', $status, array('id' => 'status'));?>
								<?php echo $form->error($model,'status'); ?>
							</div>
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_lab'); ?></label>
							
						</div>

						<div class="form-group">
							<div class="col-sm-4">
								
								<?php echo $form->dropDownList($model, 'id_lab', $labs, array('id' => 'id_lab'));?>
								<?php echo $form->error($model,'id_lab'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'actividades'); ?></label>
							<div class="col-sm-6">
								
								<?php echo $form->textArea($model,'actividades', array('id'=>'actividades','class'=>'col-sm-9','rows'=>"4", 'cols'=>"230")); ?>
								<?php echo $form->error($model,'actividades'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'observaciones'); ?></label>
							<div class="col-sm-6">
								
								<?php echo $form->textArea($model,'observaciones', array('id'=>'observaciones','class'=>'col-sm-9','rows'=>"4", 'cols'=>"230")); ?>
								<?php echo $form->error($model,'observaciones'); ?>
							</div>
						</div>

						


						
						
					</div>


		
	



	

	
						
					<!--<div class="form-group has-success has-feedback">
						<label class="col-sm-2 control-label">Company</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Company">
						</div>
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Address">
							<span class="fa fa-check-square-o txt-success form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Residence</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="City">
							<span class="fa fa-key txt-warning form-control-feedback"></span>
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="Country">
							<span class="fa fa-frown-o txt-danger form-control-feedback"></span>
						</div>
						<label class="col-sm-1 control-label">CODE</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="Another info" data-toggle="tooltip" data-placement="top" title="Hello world!">
						</div>
						<div class="col-sm-2">
							<div class="checkbox">
								<label>
									<input type="checkbox" checked> No exist
									<i class="fa fa-square-o small"></i>
								</label>
							</div>
						</div>
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Select you OS</label>
						<div class="col-sm-4">
							<select id="s2_with_tag" multiple="multiple" class="populate placeholder">
								<option>Linux</option>
								<option>Windows</option>
								<option>OpenSolaris</option>
								<option>FirefoxOS</option>
								<option>MeeGo</option>
								<option>Android</option>
								<option>Sailfish OS</option>
								<option>Plan9</option>
								<option>DOS</option>
								<option>AIX</option>
								<option>HP/UP</option>
							</select>
						</div>
						<label class="col-sm-2 control-label">Tooltip for inputs</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="Another info" data-toggle="tooltip" data-placement="top" title="Hello world!">
						</div>
						<span class="help-inline col-xs-12 col-sm-2">
							<span class="middle txt-default">only example</span>
						</span>
					</div>
					<div class="form-group has-error has-feedback">
						<label class="col-sm-2 control-label">Date</label>
						<div class="col-sm-2">
							<input type="text" id="input_date" class="form-control" placeholder="Date">
							<span class="fa fa-calendar txt-danger form-control-feedback"></span>
						</div>
						<div class="col-sm-2">
							<input type="text" id="input_time" class="form-control" placeholder="Time">
							<span class="fa fa-clock-o txt-danger form-control-feedback"></span>
						</div>
						<label class="col-sm-2 control-label">Disabled input</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" placeholder="No info" data-toggle="tooltip" data-placement="top" title="Hello world!" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Relative Sizing</label>
						<div class="col-sm-10">
							<div class="row">
								<div class="col-sm-2">
									<input class="form-control" id="form-styles" placeholder=".col-sm-2" type="text">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<p><small>Dynamic resizing col</small></p>
									<div class="progress progress-ui">
										  <div class="progress-bar progress-bar-success slider-style slider-range-min" style="width: 100%;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Textarea</label>
						<div class="col-sm-10">
								<textarea class="form-control" rows="5" id="wysiwig_simple"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Extreme Textarea</label>
						<div class="col-sm-10">
								<textarea class="form-control" rows="5" id="wysiwig_full"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Input groups</label>
						<div class="col-sm-2">
							<div class="input-group">
							  <span class="input-group-addon"><i class="fa fa-github-square"></i></span>
							  <input type="text" class="form-control" placeholder="GitHub">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="input-group">
							  <input type="text" class="form-control" placeholder="Group">
							  <span class="input-group-addon"><i class="fa fa-group"></i></span>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="input-group">
							  <span class="input-group-addon"><i class="fa fa-money"></i></span>
							  <input type="text" class="form-control" placeholder="Money">
							  <span class="input-group-addon"><i class="fa fa-usd"></i></span>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
							<button type="cancel" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancel
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-warning btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Send later
							</button>
						</div>
					
					</div>-->
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">

							<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Save', array('class'=>'btn btn-primary btn-label-left')); ?>
							
						
						</div>
				</form>

	

<?php $this->endWidget(); ?>

