<?php
function login($username, $password){
	
	$sql = 'SELECT id, username, password FROM users WHERE username = \''.$username.'\' AND password = \''.$password.'\';';
	
	$request = mysql_query($sql) or die (mysql_error());
	$result = mysql_fetch_array($request);
	return $result;
}
?>