<?php

if (isset($_GET['index'])){
	if ($_GET['index'] == "showIp") {
		include("./Viewer/Explored/hostname_".$_GET['ip'].".php");
	}
}

?>