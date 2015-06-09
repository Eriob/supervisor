<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/Vinbox.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>