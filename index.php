<?php
    
session_start();

header('Content-type: text/html; charset=UTF-8');

include_once('./Controller/Cheader.php');
include_once('./Controller/Cnavbar.php');

    if (isset ($_GET['index'])) {
        switch ($_GET['index']) {
            case "login":
                include('./Controller/Clogin.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "discoverAll":
                include('./Controller/CdiscoverAll.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "discoverOne":
                include('./Controller/CdiscoverOne.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "myProfile":
                include('./Controller/CmyProfile.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "inbox":
                include('./Controller/Cinbox.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "disconnect":
                include('./Controller/Cdisconnect.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "manageRights":
                include('./Controller/CmanageRights.php');
                break;
            case "manageUsers":
                include('./Controller/CmanageUsers.php');
                break;
            case "charts":
                include('./Controller/Ccharts.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "aboutus":
                include('./Controller/Caboutus.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "products":
                include('./Controller/Cproducts.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "contactus":
                include('./Controller/Ccontactus.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "searchAll":
                include('./Controller/CdiscoverAll.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "ToDo":
                include('./Controller/CToDo.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "addProfileSupervision":
                include('./Controller/CaddProfileSupervision.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "showTraps":
                include('./Controller/CshowTraps.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "createUser":
                include('./Controller/CcreateUser.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "validNewUser":
                include('./Controller/CcreateUser.php');
                break;
            case "explore":
                include_once('./Controller/Cexplore.php');
                include_once('./Viewer/Vfooter.php');
                break;
            case "showIp":
                include_once('./Controller/CshowIp.php');
                include_once('./Viewer/Vfooter.php');
                break;
            default:
                include_once('./Controller/Cindex.php');
                include_once('./Viewer/Vfooter.php');
                break;
        }   
    }else{
        $_GET['index'] = "index";
        include_once('./Controller/Cindex.php');
        include_once('./Viewer/Vfooter.php');
    }

?>