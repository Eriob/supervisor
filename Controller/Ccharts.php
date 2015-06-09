<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/Vcharts.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>