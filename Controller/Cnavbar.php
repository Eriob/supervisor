<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/VnavbarAdmin.php');
	}else{
		include ('./Viewer/Vnavbar.php');
	}
?>