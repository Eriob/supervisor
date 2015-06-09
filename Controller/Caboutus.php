<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/Vaboutus.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>