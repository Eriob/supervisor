<?php

$string ="";

$exec_script = sprintf('/var/www/supervisor/Scripts/host_explore.pl %s', $_GET['ip']);
exec($exec_script);

function fileCheck() {

	if(file_exists("/var/www/supervisor/Scripts/hostname_'".$_GET['ip']."'.txt'")){

		$fichier = file("/var/www/supervisor/Scripts/hostname_'".$_GET['ip']."'.txt'");
	 
		$total = count($fichier); // Nombre total des lignes du fichier

		for($i = 0; $i < $total; $i++){
			$string += $fichier[$i]."\n";
		}

		$open = fopen("/var/www/supervisor/Viewer/Explored/hostname_'".$_GET['ip']."'.php", "w");
		fwrite($open, $string); 
		fclose($open);

		return $string;
	}else{
		sleep(30);
		fileCheck();
	}

}

?>