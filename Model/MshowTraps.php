<?
function get_traps ($user_id){
	$sql = "SELECT id, machine_id, date_received, content, action FROM notifications WHERE user_id = '$user_id'";
	$request = mysql_query($sql) or die (mysql_error());
	$result = mysql_fetch_array($request);
	return $result;
}