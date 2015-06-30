<?php
	include('./Model/MconnectBDD.php');
	include('./Model/MshowTraps.php');

	if (isset($_SESSION['id'])) {
		include ('./Viewer/VshowTraps.php');
		$traps = get_traps($_SESSION['id']); /* Sort un tableau contenant les traps */
	}else{
		include('./Controller/Cindex.php');
	}
?>