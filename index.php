<?php
    
session_start();

header('Content-type: text/html; charset=UTF-8');

if(isset($_SESSION['name'])){
    //include_once('./Viewer/VheaderUser.php');
}else{
    include_once('./Viewer/Vheader.php');
}

    if (isset ($_GET['index'])) {
        switch ($_GET['index']) {
            case "subscribe":
                include('./Controller/Csubscribe.php');
                break;
            default:
                include('./Controller/Cindex.php');
                break;
        }   
    }else{
        include_once('./Controller/Cindex.php');
    }

        include_once('./Viewer/Vfooter.php');

?>