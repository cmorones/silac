<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DevOOPS</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="../css/style_v2.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->

		  <?php
        error_reporting(0);
        $baseUrl = Yii::app()->request->baseUrl; 
        $cs = Yii::app()->getClientScript();
        //Yii::app()->clientScript->registerCoreScript('jquery');
        $cs->registerCssFile($baseUrl.'/plugins/bootstrap/bootstrap.css');
        $cs->registerCssFile($baseUrl.'/css/style_v2.css');
        
       ?>
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">


			
			<div class="box">
				<div class="box-content">
					<?php echo $content; ?> 
					
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
