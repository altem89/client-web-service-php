<?php
session_start();
if(isset($_SESSION['login'])){
	session_unset();
	session_destroy();
	header('Location:/projects/mtb-client-service/pages/index.php');
}
else{
	echo "Impossible, vous n etes pas connectez !";
}

?>