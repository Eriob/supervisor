<?php
function get_traps (){
	$sql = "SELECT id, machine_id, date_received, content, action FROM notifications WHERE user_id = '1'";
	$request = mysql_query($sql) or die (mysql_error());
	$result = mysql_fetch_array($request);
	
		while($trap = mysql_fetch_array($request)){
		if($count %4 == 0) echo '<div class="row">';
			echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<button  onclick="" class="dashboard-supervision dashboard-supervision-light purple-soft" id="bouton_achanger">
					<div class="visual"></div>
					<div class="details">
						<div class="hostname">
							'.$trap['date_received'].'
						</div>
						<div class="ip">
							'.$trap['machine_id'].'
						</div>
						<div class="mac">
							'.$trap['content'].'
						</div>
						<div class="constructeur">
							'.$trap['action'].'
						</div>
					</div>
					</button>

				</div>';
			$count++;
			$i++;

		if($count %4 == 0) echo '</div><br>';
	}

		echo "<br><br><br><br><br></div></div></div>";
		
	
}

?>