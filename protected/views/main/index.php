<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Dashboard</a></li>
		</ol>
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">
	<div class="col-xs-12 col-sm-4 col-md-5">
		<h3>Administración de laboratorios</h3>
	</div>
	<div class="clearfix visible-xs"></div>
	<div class="col-xs-12 col-sm-8 col-md-7 pull-right">
		<div class="row">
			<div class="col-xs-3">
				<div class="sparkline-dashboard" id="sparkline-1"></div>
				<div class="sparkline-dashboard-info">
					756.45
					<span class="txt-primary">ENTRADAS MATERIALES</span>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="sparkline-dashboard" id="sparkline-1"></div>
				<div class="sparkline-dashboard-info">
					756.45
					<span class="txt-primary">ENTRADAS REACTIVOS</span>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="sparkline-dashboard" id="sparkline-2"></div>
				<div class="sparkline-dashboard-info">
					245.12
					<span class="txt-info">SALIDAS MATERIALES</span>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="sparkline-dashboard" id="sparkline-3"></div>
				<div class="sparkline-dashboard-info">
					107.83
					<span>SALIDAS REACTIVOS</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Dashboard 1-->
<!--Start Dashboard 2-->
<div class="row-fluid">
	<div id="dashboard_links" class="col-xs-12 col-sm-2 pull-right">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#" class="tab-link" id="overview">Materiales</a></li>
			<li><a href="#" class="tab-link" id="clients">Reactivos</a></li>
			<!--<li><a href="#" class="tab-link" id="graph">Statistics</a></li>
			<li><a href="#" class="tab-link" id="servers">Servers</a></li>
			<li><a href="#" class="tab-link" id="planning">Planning</a></li>
			<li><a href="#" class="tab-link" id="netmap">Network map</a></li>
			<li><a href="#" class="tab-link" id="stock">Yahoo finance</a></li>-->
		</ul>
	</div>
	<div id="dashboard_tabs" class="col-xs-12 col-sm-10">
		<!--Start Dashboard Tab 1-->
		<div id="dashboard-overview" class="row" style="visibility: visible; position: relative;">
			<div id="ow-marketplace" class="col-sm-12 col-md-12">
				
				<h4 class="page-header">Inventario de materiales y equipo de laboratorio por plantel</h4>
				<table id="ticker-table" class="table m-table table-bordered table-hover table-heading">
					<thead>
						<tr>
							<th>No.</th>
							<th>Descripcion</th>
							<th>Medida</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
							<th>7</th>
							<th>8</th>
							<th>9</th>
							<th>10</th>
							<th>11</th>
							<th>12</th>
							<th>13</th>
							<th>14</th>
							<th>15</th>
							<th>16</th>
							<th>17</th>
							<th>18</th>
							<th>19</th>
							<th>20</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>

					<?php

						$valores[0] = "Abatelenguas de madera";
						$valores[1] = "Acetatos tamaño carta";
						$valores[2] = "Adaptador de neopreno para embudo büchner";
						$valores[3] = "Afilador para horadador";
						$valores[4] = "Agitador de vidrio puntas redondeadas";
						$valores[5] = "Aguja de caneva recta metálica";
						$valores[6] = "Agujas de disección en forma curva";
						$valores[7] = "Agujas de disección en forma recta";
						$valores[8] = "Alambre de cobre calibre 20";
						$valores[9] = "Alambre de nicromel  calibre 24";
						$valores[10] = "Alambre de nicromel  calibre 28";
						$valores[11] = "Alambre de nicromel  calibre 32";
						$valores[12] = "Alambre magneto  calibre 22";
						$valores[13] = "Alambre magneto  calibre 24";
						$valores[14] = "Alambre magneto  calibre 26";
						$valores[15] = "Alambre magneto  calibre 28";
						$valores[16] = "Algodón de uso clínico";
						$valores[17] = "Aluminio en barra de aproximadamente 15 x 2.5 x 0.6 cm ";
						$valores[18] = "Abatelenguas";
						$valores[19] = "Abatelenguas";
						$valores[20] = "Abatelenguas";
						$valores[21] = "Abatelenguas";
						$valores[22] = "Abatelenguas";
						$valores[23] = "Abatelenguas";
						$valores[24] = "Abatelenguas";
						$valores[25] = "Abatelenguas";
						$valores[26] = "Abatelenguas";
						$valores[27] = "Abatelenguas";
						$valores[28] = "Abatelenguas";
						$valores[29] = "Abatelenguas";
						$valores[30] = "Abatelenguas";
						$valores[31] = "Abatelenguas";
						$valores[32] = "Abatelenguas";
						$valores[33] = "Abatelenguas";
						$valores[34] = "Abatelenguas";
						$valores[34] = "Abatelenguas";
						$valores[35] = "Abatelenguas";
						$valores[36] = "Abatelenguas";
						$valores[37] = "Abatelenguas";
						$valores[38] = "Abatelenguas";
						$valores[39] = "Abatelenguas";
						$valores[40] = "Abatelenguas";
						$valores[41] = "Abatelenguas";
						$valores[42] = "Abatelenguas";
						$valores[43] = "Abatelenguas";
						$valores[44] = "Abatelenguas";
						$valores[45] = "Abatelenguas";
						$valores[46] = "Abatelenguas";
						$valores[47] = "Abatelenguas";
						$valores[48] = "Abatelenguas";
						$valores[49] = "Abatelenguas";
						$valores[50] = "Abatelenguas";
						$valores[51] = "Abatelenguas";
						for ($i=0; $i < 15; $i++) { 
							# code...
						
					?>
						<tr>
							<td class="m-ticker"><b>1</b></td>
							<td class="m-price"><span><?=$valores[$i]?>
</span></td>
							<td class="m-change"><i class="fa fa-angle-up"></i> pieza</td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1000, 2000)?></td>
						</tr>

						<?php
							}
						?>
						
					</tbody>
				</table>
			</div>



			<div class="col-xs-12 col-md-12">
				<div id="ow-donut" class="row">
					<div class="col-xs-12">
						<div id="morris_donut_1" style="width:120px;height:120px;"></div>
					</div>
					<div class="col-xs-6">
						<div id="morris_donut_2" style="width:120px;height:120px;"></div>
					</div>
					<div class="col-xs-6">
						<div id="morris_donut_3" style="width:120px;height:120px;"></div>
					</div>
				</div>
			
			
			</div>
		</div>
		<!--End Dashboard Tab 1-->
		<!--Start Dashboard Tab 2-->
		<div id="dashboard-clients" class="row" style="visibility: hidden; position: absolute;">
			<div id="ow-marketplace" class="col-sm-12 col-md-12">
			<h4 class="page-header">Inventario de Reactivos y equipo de laboratorio por plantel</h4>
			<table id="ticker-table" class="table m-table table-bordered table-hover table-heading">
					<thead>
						<tr>
							<th>No.</th>
							<th>Descripcion</th>
							<th>Medida</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
							<th>7</th>
							<th>8</th>
							<th>9</th>
							<th>10</th>
							<th>11</th>
							<th>12</th>
							<th>13</th>
							<th>14</th>
							<th>15</th>
							<th>16</th>
							<th>17</th>
							<th>18</th>
							<th>19</th>
							<th>20</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>

					<?php

						$valores[0] = "Aceite de cocina";
						$valores[1] = "Aceite de almendras, de linaza, de pino, etc.";
						$valores[2] = "Abatelenguasces";
						$valores[3] = "Abatelenguas";
						$valores[4] = "Abatelenguas";
						$valores[5] = "Abatelenguas";
						$valores[6] = "Abatelenguas";
						$valores[7] = "Abatelenguas";
						$valores[8] = "Abatelenguas";
						$valores[9] = "Abatelenguas";
						$valores[10] = "Abatelenguas";
						$valores[11] = "Abatelenguas";
						$valores[12] = "Abatelenguas";
						$valores[13] = "Abatelenguas";
						$valores[14] = "Abatelenguas";
						$valores[15] = "Abatelenguas";
						$valores[16] = "Abatelenguas";
						$valores[17] = "Abatelenguas";
						$valores[18] = "Abatelenguas";
						$valores[19] = "Abatelenguas";
						$valores[20] = "Abatelenguas";
						$valores[21] = "Abatelenguas";
						$valores[22] = "Abatelenguas";
						$valores[23] = "Abatelenguas";
						$valores[24] = "Abatelenguas";
						$valores[25] = "Abatelenguas";
						$valores[26] = "Abatelenguas";
						$valores[27] = "Abatelenguas";
						$valores[28] = "Abatelenguas";
						$valores[29] = "Abatelenguas";
						$valores[30] = "Abatelenguas";
						$valores[31] = "Abatelenguas";
						$valores[32] = "Abatelenguas";
						$valores[33] = "Abatelenguas";
						$valores[34] = "Abatelenguas";
						$valores[34] = "Abatelenguas";
						$valores[35] = "Abatelenguas";
						$valores[36] = "Abatelenguas";
						$valores[37] = "Abatelenguas";
						$valores[38] = "Abatelenguas";
						$valores[39] = "Abatelenguas";
						$valores[40] = "Abatelenguas";
						$valores[41] = "Abatelenguas";
						$valores[42] = "Abatelenguas";
						$valores[43] = "Abatelenguas";
						$valores[44] = "Abatelenguas";
						$valores[45] = "Abatelenguas";
						$valores[46] = "Abatelenguas";
						$valores[47] = "Abatelenguas";
						$valores[48] = "Abatelenguas";
						$valores[49] = "Abatelenguas";
						$valores[50] = "Abatelenguas";
						$valores[51] = "Abatelenguas";
						for ($i=0; $i < 15; $i++) { 
							# code...
						
					?>
						<tr>
							<td class="m-ticker"><b>1</b></td>
							<td class="m-price"><span><?=$valores[$i]?>
</span></td>
							<td class="m-change"><i class="fa fa-angle-up"></i> pieza</td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1, 100)?></td>
							<td class="td-graph"><?=rand(1000, 2000)?></td>
						</tr>

						<?php
							}
						?>
						
					</tbody>
				</table>
		</div>
		</div>
		<!--End Dashboard Tab 2-->
		<!--Start Dashboard Tab 3-->
		<div id="dashboard-graph" class="row" style="width:100%; visibility: hidden; position: absolute;" >
			<div class="col-xs-12">
				<h4 class="page-header">OS Platform Statistics</h4>
				<div id="stat-graph" style="height: 300px;"></div>
			</div>
		</div>
		<!--End Dashboard Tab 3-->
		<!--Start Dashboard Tab 4-->
		<div id="dashboard-servers" class="row" style="visibility: hidden; position: absolute;">
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-windows"></i>#SRV-APP</h4>
				<small>Application server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-1" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-windows"></i> Windows 2008</div>
						<div class="row"><i class="fa fa-user"></i> Active users - 49</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 10 days</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-windows"></i>#DB-MASTER</h4>
				<small>SQL server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-2" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-windows"></i> Windows 2013</div>
						<div class="row"><i class="fa fa-user"></i> Active users - 39</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 2 month 1 day</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-linux"></i>#DB-WEB</h4>
				<small>MySQL server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-3" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-linux"></i> CentOS 6.5</div>
						<div class="row"><i class="fa fa-user"></i> Active users - 298</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 9 month 17 day</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-linux"></i>#WWW-SRV</h4>
				<small>Web-server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-4" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-linux"></i> Centos 6.5</div>
						<div class="row"><i class="fa fa-user"></i> Active users - 1989</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 2 years 3 month</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-linux"></i>#PHONE-OFFICE</h4>
				<small>Asterisk</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-5" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-linux"></i> Debian 6.4</div>
						<div class="row"><i class="fa fa-phone"></i> Active calls - 86</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 3 month 19 day</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-linux"></i>#DEVEL</h4>
				<small>DEV server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-6" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-linux"></i> CentOS 6.5</div>
						<div class="row"><i class="fa fa-archive"></i> Repositories - 17</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 4 month 21 day</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div id="ow-server-footer">
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-sun-o"></i> <b>287</b> <span>Hosts</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-envelope-o"></i> <b>56</b> <span>Messages</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-desktop"></i> <b>85</b> <span>Stations</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-info-circle"></i> <b>33</b> <span>Errors</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-comments-o"></i> <b>1386</b> <span>Comments</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-user"></i> <b>19985</b> <span>Clients</span></a>
			</div>
		</div>
		<!--End Dashboard Tab 4-->
		<!--Start Dashboard Tab 5-->
		<div id="dashboard-planning" class="row" style="visibility: hidden; position: absolute;">
				<div class="col-xs-12 col-sm-6">
					<h4 class="page-header">Planned projects</h4>
					<a href="#">Expense items</a><a href="#" class="pull-right">Project members</a>
					<table class="table m-table table-bordered table-hover table-heading">
						<thead>
							<tr>
								<th>Projects</th>
								<th>Ending date</th>
								<th>Cost</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="m-ticker"><b>Network upgrade</b><span>Change Dlink devices to Cisco</span></td>
								<td class="m-price">Aug</td>
								<td class="m-change">179459</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>Improved power equipment</b><span>Nevada datacenter</span></td>
								<td class="m-price">Nov</td>
								<td class="m-change">59411</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>New ticket system</b><span>developed from scratch</span></td>
								<td class="m-price">Jul</td>
								<td class="m-change">14906</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>Storage Area Network</b><span>project</span></td>
								<td class="m-price">Nov</td>
								<td class="m-change">250000</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>New optical channels</b><span>6 links</span></td>
								<td class="m-price">Nov</td>
								<td class="m-change">22359</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>Load-balance system</b><span>based on Linux</span></td>
								<td class="m-price">Dec</td>
								<td class="m-change">33950</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-6" id="planning-chart-1" style="height:250px;"><a href="#">Reports</a></div>
				<div class="col-xs-12 col-sm-8" id="planning-chart-2" style="height: 250px;"></div>
				<div class="col-xs-12 col-sm-4" id="planning-chart-3" style="height: 250px;"></div>
				<div class="col-xs-8">
					<h4 class="page-header">Quarterly forecast</h4>
					<div class="row">
						<div class="col-xs-3"><span>Q1</span>123,34234</div>
						<div class="col-xs-3"><span>Q2</span>123,34234</div>
						<div class="col-xs-3"><span>Q3</span>123,34234</div>
						<div class="col-xs-3"><span>Q4</span>123,34234</div>
					</div>
				</div>
				<div class="col-xs-4">
					<h4 class="page-header">Total forecast</h4>
					<div class="row">
						<div class="col-xs-12"><span>QE</span>732423234.34</div>
					</div>
				</div>
		</div>
		<!--End Dashboard Tab 5-->
		<!--Start Dashboard Tab 6-->
		<div id="dashboard-netmap" class="row" style="visibility: hidden; position: absolute;">
			<div class="col-xs-12">
				<h4 class="page-header">Network map(mesh topology)</h4>
				<canvas id="springy-demo" width="900" height="480" />
			</div>
		</div>
		<!--End Dashboard Tab 6-->
		<!--Start Dashboard Tab 7-->
		<div id="dashboard-stock" class="row" style="visibility: hidden; position: absolute;">
			<div class="col-xs-12">
				<h4 class="page-header">Stocks from Yahoo Finance</h4>
				<div id="inputSymbol">
					<p>Enter Stock</p>
					<input id="txtSymbol" class="required" Placeholder="Symbol" />
					<input id="startDate" class="datePick required" type="text"  Placeholder="From" />
					<input id="endDate" class="datePick" type="text" Placeholder="To"  />
					<button id="submit">Submit</button>
				</div>
				<div class="realtime" style="margin-top:40px;">
					<div class="col-xs-6"><p>Name</p><span id="symbol"></span></div>
					<div class="col-xs-6"><p>RealtimeBid</p><span id="bidRealtime"></span></div>
				</div>
				<div class="historical">
					<div class="col-xs-6"><p>Date</p><div id="date"></div></div>
					<div class="col-xs-6"><p>Price</p><div id="closeValue"></div></div>
				</div>
			</div>
		</div>
		<!--End Dashboard Tab 7-->
	</div>
	<div class="clearfix"></div>
</div>
<!--End Dashboard 2 -->
<div style="height: 40px;"></div>
<script type="text/javascript">
// Array for random data for Sparkline
var sparkline_arr_1 = SparklineTestData();
var sparkline_arr_2 = SparklineTestData();
var sparkline_arr_3 = SparklineTestData();
$(document).ready(function() {
	// Make all JS-activity for dashboard
	DashboardTabChecker();
	// Load Knob plugin and run callback for draw Knob charts for dashboard(tab-servers)
	LoadKnobScripts(DrawKnobDashboard);
	// Load Sparkline plugin and run callback for draw Sparkline charts for dashboard(top of dashboard + plot in tables)
	LoadSparkLineScript(DrawSparklineDashboard);
	// Load Morris plugin and run callback for draw Morris charts for dashboard
	LoadMorrisScripts(MorrisDashboard);
	// Load Springy plugin and run callback for draw network map for dashboard
	LoadSpringyScripts(SpringyNetmap);
	// Make beauty hover in table
	$("#ticker-table").beautyHover();
	// Run script for stock block
	CreateStockPage();
});
</script>
