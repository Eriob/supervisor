		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Discover One</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<span class="glyphicon glyphicon-home"></span>
							<a href="./index.php?index=index">Home</a>
							<span class="glyphicon glyphicon-chevron-right"></i>
						</li>
						<li>
							<a href="index.php?index=discoverOne">Discover One</a>
						</li>
					</ul>
					<div class="page-toolbar">
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-xs-4">

					</div>
					<div class="ip_oneHost"> </div>
					<div class="col-md-2 col-xs-2">
						<form class="form-horizontal" action="index.php?index=discoverOne" method="POST">
						<div class="form-group">
  								<label class="control-label" for="ip1"></label>
    							<div class="input-group">
      							<span class="input-group-addon">10 . 8 . </span>
      							<input id="ip1" name="ip1" class="form-control" placeholder="X(XX)" type="number" required="">
    							</div> 
						</div>
						<!--</form>-->
					</div>
					<div class="col-md-2 col-xs-2">
						<div class="form-group">
							<label class="control-label" for="ip2"></label>
							<div class="input-group">
							<span class="input-group-addon">. </span>
							<input id="ip2" name="ip2" class="form-control" placeholder="X(XX)" type="number" required="">
							</div>
						</div>
						<!--</form>-->
					</div>
					<div class="col-lg-2 col-md-2 col-xs-2">
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
						<button type="submit" class="btn btn-block btn-lg btn-success" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-globe"></span> Discover One Host</button>
						</form>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<?php if(isset($_GET['ip'])){ print $_GET['ip'];}?>
					</div>
				</div>
				<br><br>
				<!-- END DASHBOARD STATS -->
				<div class="clearfix">
				</div>
				<div class="row">
					
				<div class="clearfix">
				</div>
				<!-- END PORTLET-->
				</div>
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->