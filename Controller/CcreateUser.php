<?php
	include('./Model/MconnectBDD.php');

	if (isset($_SESSION['name'])) {
		if ($_GET['index'] == "createUser") {
			include('./Viewer/VcreateUser.php');
		}else if($_GET['index'] == "validNewUser"){
			if(isset($_POST['username']) || isset($_POST['email']) || isset($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['password']) || isset($_POST['password2'])) {
				
				if(!empty ($_POST['username']) && !empty ($_POST['email']) && !empty($_POST['firstname']) && !empty ($_POST['lastname']) && !empty($_POST['password']) && !empty ($_POST['password2'])) {
					
					if ($_POST['password'] != $_POST['password2']) {
						include('./Viewer/VcreateUser.php');
					}else{
						$password=md5($_POST['password']);
						include('./Model/MmanageUsers.php');
						createNewUser($_POST['username'], $password, $_POST['firstname'], $_POST['lastname'], $_POST['email']);
						include('./Viewer/VmanageUsers.php');
						manageUsers();
					}
				}
			}
		}else{
			include('./Controller/Cindex.php');
		}
	}
?>