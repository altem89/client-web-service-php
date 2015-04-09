<?php	
        session_start();
      if(isset($_SESSION["login"])){	
	  $log=$_SESSION["login"];
	  $pass=$_SESSION["password"];		
	   include("../dependances/httpful.phar");
	   
	   if(empty($_GET["numero"])){
	   header('Location:/projects/mtb-client-service/pages/commandes.php');
	   }
	   else{
	   header('Content-type: application/pdf');
	   $numero=$_GET["numero"];
	   $uri="http://localhost:8080/WebService/api/user/commande/facture/pdf/".$numero;
	   $response= \Httpful\Request::get($uri)->authenticateWith($log,$pass)->expects('application/pdf')->send();
	   echo $response;
	   }
	   }
	   else{
	    header('Location:/projects/mtb-client-service/pages/index.php');
	   }
	   
	   ?>