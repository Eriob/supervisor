<?php

$tableau="";

if (file_exists("/var/www/supervisor/Scripts/hostname_'".$_GET['ip']."'.txt'"){
	if (isset($_GET['showIp'])) {
		include("./Viewer/Explored/hostname_'".$_GET['ip']."'.php'")
	}
	
	$fichier = file("/var/www/supervisor/Scripts/hostname_'".$_GET['ip']."'.txt'");
 
	$total = count($fichier); // Nombre total des lignes du fichier

	for($i = 0; $i < $total; $i++){
		$tableau += $fichier[$i];
	}

	$open = fopen("/var/www/supervisor/Viewer/Explored/hostname_'".$_GET['ip']."'.php", "w");
	fwrite($open, $tableau); 
	fclose($open);

	return $tableau;
}else{
	sleep(1);
}

?>