
<?php
session_start();
include("user_fonctions.php");
$login = $password = $errLog = $errPass = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// verification des champs vides
		if(empty($_POST["login"])){
			$errLog = "Veillez entrer votre identifiant";
		}
		else{
			$login = $_POST["login"];
		}

		if(empty($_POST["password"])){
			$errPass = "Veillez entrer votre mot de passe";
		}
		else{
			$password = $_POST["password"];
			// SHA256 du mdp
			//$encryptPassword = hash ( "sha256" , $password); 
		}
	}

	if(!empty($login) && !empty($password)){
		
		if(userAndPasswordIsValid($login,$password)){
			echo "OK redirection";
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $password;

			header('Location:/projects/mtb-client-service/pages/index.php');
	  		exit();
		}
		else{
			
			header('Location:/projects/mtb-client-service/pages/connexion.php');
			exit();
		}
	}
	else{
		
		header('Location:/projects/mtb-client-service/pages/connexion.php');
		exit();
	}
?>