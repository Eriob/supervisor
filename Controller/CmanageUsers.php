<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Model/MmanageUsers.php');

		$users = manageUsers();
		
		include ('./Viewer/VmanageUsers.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>