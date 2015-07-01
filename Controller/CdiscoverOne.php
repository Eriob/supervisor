<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		if (isset($_POST['ip1']) && isset($_POST['ip2'])) {
			if ($_POST['ip1'] > 0 && $_POST['ip1'] < 256 && $_POST['ip2'] > 0 && $_POST['ip2'] < 256) {
				$_GET['ip'] = "10.8.". $_POST['ip1'] . "." . $_POST['ip2'];
			}else{
				include ('./Viewer/VdiscoverOne.php');
			}
		}else{
			include ('./Viewer/VdiscoverOne.php');
		}
	}else{
		include('./Controller/Cindex.php');
	}
?>