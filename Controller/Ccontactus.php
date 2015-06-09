<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/Vcontactus.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>