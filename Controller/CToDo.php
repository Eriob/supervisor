<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/VToDo.php');
	}else{
		include('./Controller/Cindex.php');
	}
?>