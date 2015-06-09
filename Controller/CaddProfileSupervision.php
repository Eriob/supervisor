<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/VaddProfileSupervision.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>