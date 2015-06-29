<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Model/MmanageUsers.php');
		if ($_GET['index'] == "changeUsers") {
		}else{
			include ('./Viewer/VmanageUsers.php');
			manageUsers();
		}
	}else{
		include('./Controller/Cindex.php');
	}
?>