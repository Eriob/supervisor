<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Model/MmanageRights.php');
		include ('./Viewer/VmanageRights.php');
		manageUsers();
	}else{
		include('./Controller/Cindex.php');
	}
?>