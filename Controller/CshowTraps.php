<?php
	include('./Model/MconnectBDD.php');
	include('./Model/MshowTraps.php');
	
	if ($_SESSION['name']) {
		include ('./Viewer/VshowTraps.php');
		$traps = get_traps();
	}else{
		include('./Controller/Cindex.php');
	}
?>