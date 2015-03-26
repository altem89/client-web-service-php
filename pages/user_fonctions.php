<?php

function userAndPasswordIsValid($login,$pass){

 include("../dependances/httpful.phar");
  $uri="http://localhost:8080/WebService/api/user/".$login."/".$pass;
	   $response= \Httpful\Request::get($uri)->authenticateWith('lloyd','toto')->send();
	   if(!$response->hasErrors()){
	     return true;
	   }
	   else{
	   return false;
	   }

}


?>