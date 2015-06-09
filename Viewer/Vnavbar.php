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
					</li>
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
					
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->