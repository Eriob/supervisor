<?php
	include ('./Model/Mlogin.php');

	// On vérifie si la combinaison name/pwd est correct
	if (isset($_POST['username'],$_POST['password'])) {		
		$password = md5($_POST['password']);
		$login = login($_POST['username'],$password);
	
		if ($password == $login['password']) {
			$_SESSION['name'] = $login['username'];
			$_SESSION['id'] = $login['id'];
		
		/*function curPageURL() {
			$pageURL = strstr ( $_SERVER['HTTP_REFERER'] , '/');
			return $pageURL;
		}
		
		$page = curPageURL();
		
		if(isset($page)){
			header('location: '.$page);
		}else{		
			header('location: index.php');
		}
		
		}else{
			$msg = "Mauvais mot de passe";
			header('location: index.php');*/
			sleep(4);
			include('./Controller/Cindex.php');

		}	
	}

?>