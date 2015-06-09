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
<link href="./bootstrap//css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
			<a href="index.php?index=index">
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
			<form class="search-form search-form-expanded" action="index.php?index=search" method="POST">
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
						<span class="badge badge-default">5 </span>
						<span class="glyphicon glyphicon-bell"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold">5 dernières</span> notifications</h3>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 160px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">just now</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										</span>
										New user registered. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">10 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										</span>
										Server not responding. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										</span>
										A user IP blocked. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">just now</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										</span>
										New user registered. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">10 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										</span>
										Server not responding. </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="badge badge-default">2 </span>
						<span class="glyphicon glyphicon-envelope"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>Vous avez <span class="bold">2</span> Messages</h3>
								<a href="index.php?index=inbox">Voir tout</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 180px;" data-handle-color="#637283">
									<li>
										<a href="inbox.html?a=view">
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">Just Now </span>
										</span>
										<span class="message">
										Salut, tu peux superviser mon réseau ?</span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">16 mins </span>
										</span>
										<span class="message">
										Bonjour, je te transmet mes coordonnées :)</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						<?php 
							if(isset($_SESSION['name'])){
								echo $_SESSION['name'];
							}

						?>
						</span>
						<span class="glyphicon glyphicon-user"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="index.php?index=myProfile">
								<span class="glyphicon glyphicon-user"></span> My Profile </a>
							</li>
							<li>
								<a href="index.php?index=inbox">
								<span class="glyphicon glyphicon-envelope"></span> My Inbox <span class="badge badge-danger">
								2 </span>
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="index.php?index=disconnect">
								<span class="glyphicon glyphicon-log-out"></span> Log Out </a>
							</li>
						</ul>
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
		