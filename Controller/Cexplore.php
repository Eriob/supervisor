<?php

$exec_script = sprintf('/var/www/supervisor/Scripts/host_explore.pl %s', $_GET['ip']);
exec($exec_script);

sleep(1);

?>