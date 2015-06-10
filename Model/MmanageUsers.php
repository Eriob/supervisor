<?php
function manageUsers(){
	
	$sql = 'SELECT * FROM users';
	
	$request = mysql_query($sql) or die (mysql_error());

	echo '<div class="row">
					<div class="col-md-1 col-xs-1">
					</div>
					<div class="col-lg-10 col-md-10 col-xs-10">
						<form class="form-horizontal" name="manage_users" method="POST" action="index.php?index=manageUsers">
						<table class="table table-bordered">
							<thead><tr><th>Nom utilisateur</th><th>Ban</th></tr></thead><tbody>';
							

	while($users = mysql_fetch_array($request)){
		if($users['ban'] == 0){
			echo "<tr><td>".$users['username']."</td><td> <input type='text' name='ban' placeholder='No'></td></tr>";
		}else{
			echo "<tr><td>".$users['username']."</td><td> <input type='text' name='ban' placeholder='Yes'> </td></tr>";
		}
	}

		echo '</tbody></table></div>
		   </div>"<div class="row">
					<div class="col-lg-1 col-md-1 col-xs-1">
					</div>
					<div class="col-lg-5 col-md-5 col-xs-5">
					<button type="submit" href="index.php?index=manageUsers" class="btn btn-primary pull-left">Manage Users Status</button>
					</form>
					</div>
			  </div>
			</div>
		</div>
	</div>';

}
?>