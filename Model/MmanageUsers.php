<?php
function manageUsers(){
	
	$sql = 'SELECT * FROM users';
	
	$request = mysql_query($sql) or die (mysql_error());

	echo '<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-lg-10 col-md-10 col-xs-10">
				<form class="form-horizontal" name="manage_users" method="POST" action="index.php?index=manageUsers">
				<table class="table table-bordered">
				<thead><tr><th>Nom utilisateur</th><th>Ban</th></tr></thead><tbody>';
							

	while($users = mysql_fetch_array($request)){
		if($users['ban'] == 0){
			echo "<tr><td>".$users['username']."</td><td>
			<input type='radio' name='ban".$users['username']."' value='yes'> Yes 
			<input type='radio' name='ban".$users['username']."' value='no'checked> No </td></tr>";
		}else{
			echo "<tr><td>".$users['username']."</td><td>
			<input type='radio' name='ban".$users['username']."' value='yes' checked> Yes 
			<input type='radio' name='ban".$users['username']."' value='no'> No </td></tr>";
		}
	}

		echo '</tbody></table></div>
		   </div><div class="row">
					<div class="col-lg-1 col-md-1 col-xs-1">
					</div>
					<div class="col-lg-5 col-md-5 col-xs-5">
					<button type="submit" href="index.php?index=manageUsers" class="btn btn-primary pull-left">Manage Users Status</button>
					</form>
					</div>
			  </div>
			</div>
		</div>
	</div>	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2015 &copy; SuperVisor by Alababa <a href="http://intechinfo.fr" title="Alababa Theme SupervisorS4" target="_blank">IN TECH INFO</a>
		</div>
	</div>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--<script src="./bootstrap/js/jquery.min.js" type="text/javascript"></script>-->
<script src="./bootstrap/js/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<!--<script src="./bootstrap/js/jquery-ui.min.js" type="text/javascript"></script>-->
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../bootstrap/js/jquery.flot.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/pulsate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="../bootstrap/js/fullcalendar.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../bootstrap/js/metronic.js" type="text/javascript"></script>
<script src="../bootstrap/js/layout.js" type="text/javascript"></script>
<script src="../bootstrap/js/demo.js" type="text/javascript"></script>
<script src="../bootstrap/js/index.js" type="text/javascript"></script>
<script src="../bootstrap/js/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->
</html>';

}
?>