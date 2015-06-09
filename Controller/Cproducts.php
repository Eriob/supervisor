<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/Vproducts.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>