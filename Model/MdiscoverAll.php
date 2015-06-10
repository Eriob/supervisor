<?php
function discoverAll() {

	$sql = "SELECT * FROM machines";
	$request = mysql_query($sql) or die(mysql_error());
	
	$count = 0;

	while($discover = mysql_fetch_array($request)){
		if($count %4 == 0) echo '<div class="row">';
			echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<form class="form-horizontal" action="index.php?index=discoverOne" method="POST">
					<input type="hidden" name="ip" value="'.$discover['ip'].'">
					<button type="submit" class="dashboard-discover dashboard-discover-light blue-soft">
					<div class="visual"></div>
					<div class="details">
						<div class="hostname">
							'.$discover['hostname'].'
						</div>
						<div class="ip">
							'.$discover['ip'].'
						</div>
						<div class="mac">
							'.$discover['mac'].'
						</div>
						<div class="constructeur">
							'.$discover['constructeur'].'
						</div>
					</div>
					</button>
					</form>
				</div>';
			$count++;

		if($count %4 == 0) echo '</div><br>';
	}

		echo "<br><br><br><br><br>";
		echo '</div><div class="clearfix"></div><div class="row"><div class="clearfix"></div></div></div></div></div></div></div>';
}
?>