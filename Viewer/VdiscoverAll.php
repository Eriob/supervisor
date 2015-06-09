		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Discover All</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<span class="glyphicon glyphicon-home"></span>
							<a href="./index.php?index=index">Home</a>
							<span class="glyphicon glyphicon-chevron-right"></i>
						</li>
						<li>
							<a href="index.php?index=discoverAll">Discover All</a>
						</li>
					</ul>
					<div class="page-toolbar">
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
						<a href="index.php?index=searchAll" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-globe"></span> Discover All Hosts</a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-lg-1 col-md-1 col-xs-1"></div>
					<div class="col-lg-5 col-md-5 col-xs-5">
						<form class="form-horizontal">
							<fieldset>
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="sort">Trié par</label>
							  <div class="col-md-7">
							    <select id="sort" name="sort" class="form-control">
							      <option value="OS">Adresse IP</option>
							      <option value="constructeur">Constructeur</option>
							    </select>
							  </div>
							</div>
							</fieldset>
						</form>
					</div>
					<div class="col-lg-5 col-md-5 col-xs-5">
						<form class="form-horizontal">
							<fieldset>
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="show">Affichage en</label>
							  <div class="col-md-6">
							    <select id="show" name="show" class="form-control">
							      <option value="mosaique">Mosaïque</option>
							      <option value="liste">Liste</option>
							    </select>
							  </div>
							</div>
							</fieldset>
						</form>
					</div>
				</div>
				<br><br>
				<?php
				if ($_GET['index'] == "discoverAll") {
					echo "<br><br><br><br><br><br><br><br>";
					echo "<br><br><br><br><br><br><br><br>";
					echo "<br><br><br><br><br><br><br><br>";
				}
				?>