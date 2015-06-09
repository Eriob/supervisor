<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/VmyProfile.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>