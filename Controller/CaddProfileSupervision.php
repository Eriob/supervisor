<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		include ('./Viewer/VaddProfileSupervision.php');
		
	}
	else{
		include('./Controller/Cindex.php');
	}
	
	$snmpd_conf = fopen('snmpd.conf', 'w');

if (isset($_POST['public_com'])&& ($_POST['public_com']!= '')){
		$public_com = $_POST['public_com'];
	}
	
if (isset($_POST['private_com'])&& ($_POST['private_com']!= '')){
		$private_com = $_POST['private_com'];
	}
	
if (isset($_POST['syscontact'])&& ($_POST['syscontact']!= '')){
		$syscontact = $_POST['syscontact'];
	}

if (isset($_POST['syslocation'])&& ($_POST['syslocation']!= '')){
		$syslocation = $_POST['syslocation'];
	}

if (isset($_POST['service'])&& ($_POST['service']!= '')){
		$service = $_POST['service'];
	}

if (isset($_POST['ins_min'])&& ($_POST['ins_min']!= '')){
		$ins_min = $_POST['ins_min'];
	}

if (isset($_POST['ins_max'])&& ($_POST['ins_max']!= '')){
		$ins_max = $_POST['ins_max'];
	}
	
if (isset($_POST['partition'])&& ($_POST['partition']!= '')){
		$partition = $_POST['partition'];
	}
	
if (isset($_POST['charge'])&& ($_POST['charge']!= '')){
		$charge = $_POST['charge'];
	}
	
$snmpd_conf = fopen('snmpd.conf', 'a+');

fputs($snmpd_conf, "##############################\n#Fichier de configuration snmp\n#Généré automatiquement par Supervisor\n##############################\nrocommunity $public_com \nrwcommunity $private_com \nsyscontact $syscontact \nsyslocation $syslocation \ninformsink 10.8.96.6 \nauthtrapenable 2 \ndefaultMonitors yes \nlinkUpDownNotifications yes \ndisk $partition $charge\nproc $service $ins_max $ins_min \nprocfix $service /etc/init.d/$service restart \n");
fclose($snmpd_conf);

$file = "snmpd.conf";
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>