<?php
	include('./Model/MconnectBDD.php');
	include('./Model/Mindex.php');
	$informations = get_information();
	include ('./Viewer/Vindex.php');
?>