<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/Vindex.php');
	}else{
		include('./Viewer/Vindex.php');
	}
?>