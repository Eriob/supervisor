<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Model/MmanageUsers.php');
		include ('./Viewer/VmanageUsers.php');
		$users = manageUsers();
	}else{
		include('./Controller/Cindex.php');
	}
?>