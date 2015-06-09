<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/VheaderUser.php');
	}else{
		include ('./Viewer/Vheader.php');
	}
?>