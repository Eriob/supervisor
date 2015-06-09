<?php
    
session_start();

header('Content-type: text/html; charset=UTF-8');

if(!isset($_GET['index'])){
    $_GET['index'] = "index";
}

include_once('./Controller/Cheader.php');
include_once('./Controller/Cnavbar.php');


    if (isset ($_GET['index'])) {
        switch ($_GET['index']) {
            case "login":
                include('./Controller/Clogin.php');
                break;
            case "discoverAll":
                include('./Controller/CdiscoverAll.php');
                break;
            case "discoverOne":
                include('./Controller/CdiscoverOne.php');
                break;
            case "myProfile":
                include('./Controller/CmyProfile.php');
                break;
            case "inbox":
                include('./Controller/Cinbox.php');
                break;
            case "disconnect":
                include('./Controller/Cdisconnect.php');
                break;
            case "manageRights":
                include('./Controller/CmanageRights.php');
                break;
            case "manageUsers":
                include('./Controller/CmanageUsers.php');
                break;
            case "charts":
                include('./Controller/Ccharts.php');
                break;
            case "aboutus":
                include('./Controller/Caboutus.php');
                break;
            case "products":
                include('./Controller/Cproducts.php');
                break;
            case "contactus":
                include('./Controller/Ccontactus.php');
                break;
            case "searchAll":
                include('./Controller/CdiscoverAll.php');
                break;
            case "ToDo":
                include('./Controller/CToDo.php');
                break;
            case "addProfileSupervision":
                include('./Controller/CaddProfileSupervision.php');
                break;
            case "showTraps":
                include('./Controller/CshowTraps.php');
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