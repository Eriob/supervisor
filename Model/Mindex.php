<?php 
function get_information(){
$sql = "select * from informations";
$request = mysql_query($sql) or die (mysql_error());
$information = mysql_fetch_array($request);
return $informations;
}
?>