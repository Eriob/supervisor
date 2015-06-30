<?php

$exec_script = sprintf('/var/www/supervisor/Scripts/host_explore.pl %s', $_GET['ip']);
exec($exec_script);

sleep(1);

/*function fileCheck() {

	if(file_exists("/var/www/supervisor/Viewer/Explored/hostname_'".$_GET['ip']."'.php'")){
		exit;
	}else{
		sleep(10);
		fileCheck();
	}
}

fileCheck();*/

?>