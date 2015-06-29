<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
				<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
				<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
				<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<?php
					if(isset($_GET['index']) && $_GET['index'] == "index"){
						echo '<li class="start active">';
					}else{
						echo '<li>';
					}
					?>
						<a href="index.php?index=index">
						<span class="glyphicon glyphicon-home"></span>
						<span class="title">Dashboard</span>
						<?php
						if(isset($_GET['index']) && $_GET['index'] == "index"){
							echo '<span class="selected"></span>';
						}
						?>
						</a>
					</li>
					<?php
					if(isset($_GET['index']) && $_GET['index'] == "discoverAll"){
						echo '<li class="start active">';
					}else if(isset($_GET['index']) && $_GET['index'] == "discoverOne"){
						echo '<li class="start active">';
					}else{
						echo '<li>';
					}
					?>
						<a href="javascript:;">
						<span class="glyphicon glyphicon-globe"></span>
						<span class="title">Discover</span>
						<?php
						if(isset($_GET['index']) && $_GET['index'] == "discoverAll"){
							echo '<span class="selected"></span>';
						}else if(isset($_GET['index']) && $_GET['index'] == "discoverOne"){
							echo '<span class="selected"></span>';
						}else{
						}
						?>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="index.php?index=discoverAll">
								<span class="glyphicon glyphicon-th-list"></span> All Hosts</a>
							</li>
							<li>
								<a href="index.php?index=discoverOne">
								<span class="glyphicon glyphicon-zoom-in"></span> One Host</a>
							</li>
						</ul>
					</li>
					<?php
					if(isset($_GET['index']) && $_GET['index'] == "ToDo"){
						echo '<li class="start active">';
					}else if(isset($_GET['index']) && $_GET['index'] == "addProfileSupervision"){
						echo '<li class="start active">';
					}else if(isset($_GET['index']) && $_GET['index'] == "showTraps"){
						echo '<li class="start active">';
					}else{
						echo '<li>';
					}
					?>
						<a href="javascript:;">
						<span class="glyphicon glyphicon-briefcase"></span>
						<span class="title">Monitoring</span>
						<?php
						if(isset($_GET['index']) && $_GET['index'] == "ToDo"){
							echo '<span class="selected"></span>';
						}else if(isset($_GET['index']) && $_GET['index'] == "addProfileSupervision"){
							echo '<span class="selected"></span>';
						}else if(isset($_GET['index']) && $_GET['index'] == "showTraps"){
							echo '<span class="selected"></span>';
						}else{
						}
						?>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="index.php?index=ToDo">
								<span class="glyphicon glyphicon-th-list"></span>
								<span class="badge badge-warning">3</span>ToDo</a>
							</li>
							<li>
								<a href="index.php?index=addProfileSupervision">
								<span class="glyphicon glyphicon-user"></span>
								<span class="badge badge-success badge-roundless">new</span>Add User Profile</a>
							</li>
							<li>
								<a href="index.php?index=showTraps">
								<span class="glyphicon glyphicon-envelope"></span>
								<span class="badge badge-danger badge-roundless">5</span>Traps/Alerts</a>
							</li>
						</ul>
					</li><!--
					<?php
					if(isset($_GET['index']) && $_GET['index'] == "charts"){
						echo '<li class="start active">';
					}else{
						echo '<li>';
					}
					?>
						<a href="index.php?index=charts">
						<span class="glyphicon glyphicon-stats"></span>
						<span class="title">Charts</span>
						<?php
						if(isset($_GET['index']) && $_GET['index'] == "charts"){
							echo '<span class="selected"></span>';
						}else{
						}
						?>
						<span class="arrow "></span>
						</a>
					</li>-->
					<?php
					if(isset($_GET['index']) && $_GET['index'] == "aboutus"){
						echo '<li class="start active">';
					}else if(isset($_GET['index']) && $_GET['index'] == "products"){
						echo '<li class="start active">';
					}else if(isset($_GET['index']) && $_GET['index'] == "contactus"){
						echo '<li class="start active">';
					}else{
						echo '<li>';
					}
					?>
						<a href="javascript:;">
						<span class="glyphicon glyphicon-plus"></span>
						<span class="title">Extra</span>
						<?php
						if(isset($_GET['index']) && $_GET['index'] == "aboutus"){
							echo '<span class="selected"></span>';
						}else if(isset($_GET['index']) && $_GET['index'] == "products"){
							echo '<span class="selected"></span>';
						}else if(isset($_GET['index']) && $_GET['index'] == "contactus"){
							echo '<span class="selected"></span>';
						}else{
						}
						?>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="index.php?index=aboutus"><span class="glyphicon glyphicon-eye-open"></span>
								About Us</a>
							</li>
							<li>
								<a href="index.php?index=products"><span class="glyphicon glyphicon-book"></span>
								Products</a>
							</li>
							<li>
								<a href="index.php?index=contactus"><span class="glyphicon glyphicon-pencil"></span>
								Contact Us</a>
							</li>
						</ul>
					</li>
					<?php
					if(isset($_GET['index']) && $_GET['index'] == "manageRights"){
						echo '<li class="start active">';
					}else if(isset($_GET['index']) && $_GET['index'] == "manageUsers"){
						echo '<li class="start active">';
					}else{
						echo '<li>';
					}
					?>
						<a href="javascript:;">
						<span class="glyphicon glyphicon-wrench"></span>
						<span class="title">Settings</span>
						<?php
						if(isset($_GET['index']) && $_GET['index'] == "manageRights"){
							echo '<span class="selected"></span>';
						}else if(isset($_GET['index']) && $_GET['index'] == "manageUsers"){
							echo '<span class="selected"></span>';
						}else{
						}
						?>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="index.php?index=manageRights">
								Manage Rights</a>
							</li>
							<li>
								<a href="index.php?index=manageUsers">
								Manage Users</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->