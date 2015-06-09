<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/VshowTraps.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>