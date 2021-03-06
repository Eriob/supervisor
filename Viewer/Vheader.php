<!DOCTYPE html>
<!-- Name: Metronic - Responsive Admin Dashboard -->

<html lang="fr" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>SuperVisor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/jquery.easypiechart.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="./bootstrap/css/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="./bootstrap/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="./bootstrap/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="./bootstrap/css/grey.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="./bootstrap/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="./index.html">
			<!--<img src="./Viewer/images/logo.png" alt="logo" class="logo-default"/>-->
			</a>
			<div class="menu-toggler sidebar-toggler">
			</div>
		</div>
		<!-- END LOGO -->

		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
	
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form search-form-expanded" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><span class="glyphicon glyphicon-search"></span></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="badge badge-default">0 </span>
						<span class="glyphicon glyphicon-bell"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>You are <span class="bold">not</span> logged in</h3>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="badge badge-default">0 </span>
						<span class="glyphicon glyphicon-envelope"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>Vous are <span class="bold">not</span> logged in</h3>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li>
					<!--<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">-->

					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Log In</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title"><b>Who are you ?</b></h4>
					        </div>
					        <div class="modal-body">
					          	<form class="form-horizontal" method="POST" action="index.php?index=login">
								<fieldset>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="name"></label>  
								  <div class="col-md-5">
								  <input id="name" name="username" type="text" placeholder="Identity" class="form-control input-md" required="">
								    
								  </div>
								</div>

								<!-- Password input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="password"></label>
								  <div class="col-md-5">
								    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
								    
								  </div>
								</div>

								<!-- Button -->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="login"></label>
								  <div class="col-lg-6 col-md-6">
								    <button id="login" name="login" class="btn btn-success btn-lg">Log In</button>
								  </div>
								</div>

								</fieldset>
								</form>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					      
					    </div>
					  </div>
					</li>


						<!--</span>
						<span class="glyphicon glyphicon-user"></span>
						</a>-->
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="container">
	<div class="page-container">
		