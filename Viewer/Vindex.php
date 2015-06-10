		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Dashboard</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<span class="glyphicon glyphicon-home"></span>
							<a href="./index.php">Home</a>
							<span class="glyphicon glyphicon-chevron-right"></i>
						</li>
						<li>
							<a href="./index.php">Dashboard</a>
						</li>
					</ul>
					<div class="page-toolbar">
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue-soft" href="javascript:;">
						<div class="visual">
						</div>
						<div class="details">
							<div class="number">
								 64
							</div>
							<div class="desc">
								 Connected
							</div>
						</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light red-soft" href="javascript:;">
						<div class="visual">
						</div>
						<div class="details">
							<div class="number">
								 17
							</div>
							<div class="desc">
								 Lost Packets Today
							</div>
						</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light green-soft" href="javascript:;">
						<div class="visual">
						</div>
						<div class="details">
							<div class="number">
								 99%
							</div>
							<div class="desc">
								 Availability of itinet Today
							</div>
						</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light purple-medium" href="javascript:;">
						<div class="visual">
						</div>
						<div class="details">
							<div class="number">
								 0,041ms
							</div>
							<div class="desc">
								 Response Time
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- END DASHBOARD STATS -->
				<div class="clearfix">
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<!-- BEGIN PORTLET-->
						<div class="portlet light ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-bar-chart font-blue-sharp hide"></i>
									<span class="caption-subject font-blue-sharp bold uppercase">Number of connected</span>
									<span class="caption-helper">Per month</span>
								</div>
							</div>
							<div class="portlet-body">
								<div id="site_connected_loading">
								</div>
								<div id="site_connected_content" class="display-none">
									<div id="site_connected" class="chart">
									</div>
								</div>
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
					<div class="col-md-6 col-sm-6">
						<!-- BEGIN PORTLET-->
						<div class="portlet light ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-share font-red-sunglo hide"></i>
									<span class="caption-subject font-red-sunglo bold uppercase">Lost packets</span>
									<span class="caption-helper">Per month</span>
								</div>
							</div>
							<div class="portlet-body">
								<div id="site_activities_loading">
								</div>
								<div id="site_activities_content" class="display-none">
									<div id="site_activities" style="height: 228px;">
									</div>
								</div>
								<div style="margin: 20px 0 10px 30px">
									<div class="row">
										<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
											<span class="label label-sm label-success">
											Success</span>
											<h3>98%</h3>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
											<span class="label label-sm label-danger">
											Total Send</span>
											<h3>10,39 M</h3>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
											<span class="label label-sm label-primary">
											Total Recepted</span>
											<h3>6,78 M</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="clearfix">
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<!-- BEGIN PORTLET-->
						<div class="portlet light ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-bar-chart font-green-sharp hide"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Availability of Itinet</span>
									<span class="caption-helper">Per day</span>
								</div>
							</div>
							<div class="portlet-body">
								<div id="site_availability_loading">
								</div>
								<div id="site_availability_content" class="display-none">
									<div id="site_availability" class="chart">
									</div>
								</div>
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
					<div class="col-md-6 col-sm-6">
						<!-- BEGIN PORTLET-->
						<div class="portlet light ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-bar-chart font-purple-sharp hide"></i>
									<span class="caption-subject font-purple-sharp bold uppercase">Response Time</span>
									<span class="caption-helper">Per hour</span>
								</div>
							</div>
							<div class="portlet-body">
								<div id="site_response_loading">
								</div>
								<div id="site_response_content" class="display-none">
									<div id="site_response" class="chart">
									</div>
								</div>
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
				<div class="clearfix">
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="portlet light ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-share font-blue-steel hide"></i>
									<span class="caption-subject font-blue-steel bold uppercase">Recent Activities</span>
								</div>
							</div>
							<div class="portlet-body">
								<div class="scroller" style="height: 120px;" data-always-visible="1" data-rail-visible="0">
									<ul class="feeds">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<a class="dashboard-stat dashboard-stat-light green-soft" href="javascript:;">
											<div class="visual">
											</div>
											<div class="details">
												<div class="number">
													 UP
												</div>
												<div class="desc">
													 DHCP
												</div>
											</div>
											</a>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<a class="dashboard-stat dashboard-stat-light green-soft" href="javascript:;">
											<div class="visual">
											</div>
											<div class="details">
												<div class="number">
													 UP
												</div>
												<div class="desc">
													 DNS
												</div>
											</div>
											</a>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<a class="dashboard-stat dashboard-stat-light red-soft" href="javascript:;">
											<div class="visual">
											</div>
											<div class="details">
												<div class="number">
													 DOWN
												</div>
												<div class="desc">
													 Mail
												</div>
											</div>
											</a>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<a class="dashboard-stat dashboard-stat-light green-soft" href="javascript:;">
											<div class="visual">
											</div>
											<div class="details">
												<div class="number">
													 UP
												</div>
												<div class="desc">
													 Web
												</div>
											</div>
											</a>
										</div>
									</ul>
								</div>
								<div class="scroller-footer">
									<div class="btn-arrow-link pull-right">
										<!--<a href="javascript:;">See All Records</a>
										<span class="glyphicon glyphicon-chevron-right"></span>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix">
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="portlet light ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-cursor font-purple-intense hide"></i>
									<span class="caption-subject font-purple-intense bold uppercase">General Stats</span>
								</div>
								<div class="actions">
									<a href="javascript:;" class="btn btn-sm btn-circle btn-default easy-pie-chart-reload">
									<span class="glyphicon glyphicon-repeat"></span> Reload </a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="row">
									<div class="col-md-4">
										<div class="easy-pie-chart">
											<div class="number transactions" data-percent="55">
												<span>
												+30 </span>
												%
											</div>
											<a class="title" href="javascript:;">
											CPU
											</a>
										</div>
									</div>
									<div class="margin-bottom-10 visible-sm">
									</div>
									<div class="col-md-4">
										<div class="easy-pie-chart">
											<div class="number visits" data-percent="85">
												<span>
												+65 </span>
												%
											</div>
											<a class="title" href="javascript:;">
											RAM
											</a>
										</div>
									</div>
									<div class="margin-bottom-10 visible-sm">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-sm-8">
						<div class="portlet light ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-equalizer font-purple-plum hide"></i>
									<span class="caption-subject font-red-sunglo bold uppercase">Server Stats</span>
									<span class="caption-helper">monthly stats...</span>
								</div>
								<div class="tools">
									<a href="" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="" class="reload">
									</a>
									<a href="" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="row">
									<div class="col-md-4">
										<div class="sparkline-chart">
											<div class="number" id="sparkline_bar"></div>
											<a class="title" href="javascript:;">
											Network <i class="icon-arrow-right"></i>
											</a>
										</div>
									</div>
									<div class="margin-bottom-10 visible-sm">
									</div>
									<div class="col-md-4">
										<div class="sparkline-chart">
											<div class="number" id="sparkline_bar2"></div>
											<a class="title" href="javascript:;">
											CPU Load <i class="icon-arrow-right"></i>
											</a>
										</div>
									</div>
									<div class="margin-bottom-10 visible-sm">
									</div>
									<div class="col-md-4">
										<div class="sparkline-chart">
											<div class="number" id="sparkline_line"></div>
											<a class="title" href="javascript:;">
											Load Rate <i class="icon-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix">
				</div>
				<!-- END PORTLET-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
