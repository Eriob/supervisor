<?php

$tableau="";

if (file_exists("/var/www/supervisor/Scripts/hostname_'".$_GET['ip']."'.txt'"){
	
	$fichier = file("/var/www/supervisor/Scripts/hostname_'".$_GET['ip']."'.txt'");
 
	$total = count($fichier); // Nombre total des lignes du fichier

	for($i = 0; $i < $total; $i++){
		$tableau += $fichier[$i];
	}

	$open = fopen("hostname_'".$_GET['ip']."'.html", "w");
	fwrite($open, $tableau); 
	fclose($open);

	return $tableau;
}else{
	sleep(1);
}

?>