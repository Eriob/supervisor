<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/VmanageUsers.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>