<?php

$string ="";

$exec_script = sprintf('/var/www/supervisor/Scripts/host_explore.pl %s', $_GET['ip']);
exec($exec_script);

function fileCheck() {

	if(!file_exists("/var/www/supervisor/Viewer/Explored/hostname_'".$_GET['ip']."'.php'")){
		sleep(20);
		fileCheck();
	}

}

fileCheck();

?>