<?php
function manageUsers(){
	
	$sql = 'SELECT * FROM users';
	
	$request = mysql_query($sql) or die (mysql_error());

	echo '<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-lg-10 col-md-10 col-xs-10">
				<form class="form-horizontal" name="manage_rights" method="POST" action="index.php?index=manageRights">
				<table class="table table-bordered">
				<thead><tr><th>Nom utilisateur</th><th>Rights</th></tr></thead><tbody>';
							

	while($users = mysql_fetch_array($request)){
		if($users['rights'] == "user"){
			echo "<tr><td>".$users['username']."</td><td>
			<select><option value='user' name='rights".$users['username']."' selected> User </option>
					<option value='administrator' name='rights".$users['username']."'> Administrator </option></select>";
		}else{
			echo "<tr><td>".$users['username']."</td><td>
			<select><option value='user' name='rights".$users['username']."'> User </option>
					<option value='administrator' name='rights".$users['username']."' selected> Administrator </option></select>";
		}
	}

		echo '</tbody></table></div>
		   </div><div class="row">
					<div class="col-lg-1 col-md-1 col-xs-1">
					</div>
					<div class="col-lg-5 col-md-5 col-xs-5">
					<button type="submit" href="index.php?index=manageRights" class="btn btn-primary pull-left">Manage Rights</button>
					</form>
					</div>
			  </div>
			</div>
		</div>
	</div>';

}
?>