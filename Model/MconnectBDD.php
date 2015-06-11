<?php

//CONNEXION A MYSQL
mysql_connect('localhost', 'root', 'secret')
or die ('ERROR TO CONNECT WITH DATABASE');

//SELECTION DE LA BDD
mysql_select_db('supervisor')
or die ('ERROR NAME DATABASE');

?>