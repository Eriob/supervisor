<?php
function get_id ($user_id){
	$sql = "SELECT id FROM supervision WHERE user_id = '$user_id'";
	$request = mysql_query($sql) or die (mysql_error());
	return $request;
}

function get_services ($id){
	$sql = "SELECT name, minimum, maximum FROM services WHERE supervision_id = '$id'";
	$request = mysql_query($sql) or die (mysql_error());
	$result = mysql_fetch_array($request);
	return $result;
}

function get_disks ($id){
	$sql = "SELECT name, charge FROM services WHERE supervision_id = '$id'";
	$request = mysql_query($sql) or die (mysql_error());
	$result = mysql_fetch_array($request);
	return $result;
}


function addSupervision($user_id, $public_com, $private_com, $syscontact, $syslocation){

	$sql= 'INSERT INTO supervision VALUES("", "'.$user_id.'", "'.$public_com.'","'.$private_com.'","'.$syscontact.'", "'.$syslocation.'")';

	$request = mysql_query($sql) or die (mysql_error());
}

function addDisk($supervision_id, $disk_name, $charge){
	
	$sql = 'INSERT INTO disk VALUES("", "'.$supervision_id.'", "'.$disk_name.'","'.$charge.'")';

	$request = mysql_query($sql) or die (mysql_error());
}
	
function addService($supervision_id, $service_name, $minimum, $maximum){
	
	$sql = 'INSERT INTO services VALUES("", "'.$supervision_id.'", "'.$service_name.'","'.$minimum.'","'.$maximum.'")';

	$request = mysql_query($sql) or die (mysql_error());
}

?>