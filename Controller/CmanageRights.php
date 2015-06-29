<?php
	include('./Model/MconnectBDD.php');
	include ('./Model/MmanageRights.php');

	if (isset($_SESSION['name'])) {
		if ($_GET['index'] == "changeRights") {

		}

		include ('./Viewer/VmanageRights.php');
		manageUsers();
	}else{
		include('./Controller/Cindex.php');
	}
?>