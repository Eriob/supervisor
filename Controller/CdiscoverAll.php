<?php
	include('./Model/MconnectBDD.php');

	if ($_GET['index'] == "discoverAll") {
		if(isset($_SESSION['name'])) {
			include('./Viewer/VdiscoverAll.php');
			echo '</div></div></div>';
		}
	}elseif($_GET['index'] == "searchAll") {
		if(isset($_SESSION['name'])) {
			include ('./Viewer/VdiscoverAll.php');
			include('./Model/MdiscoverAll.php');
			discoverAll();
		}
	}else{
		include('./Controller/Cindex.php');
	}
?>