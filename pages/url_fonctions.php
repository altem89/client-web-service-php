<?php

function urlAParametre($param){
if(!empty($_POST[$param]) or !empty($_GET[$param])){
return true;
}
return false;
}

function urlParametreValeur($param){
if(!empty($_POST[$param])){
return $_POST[$param];
}
else{
return $_GET[$param];
}
}

?>
