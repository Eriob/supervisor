<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/VmanageRights.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>