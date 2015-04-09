 <?php
  include("../dependances/httpful.phar");
 
function getRequestJSON($uri,$login,$password){

 return $response= \Httpful\Request::get($uri)->authenticateWith($login,$password)->send();
 
}


function getRequestStringList($uri,$login,$password){
 $response= \Httpful\Request::get($uri)->expects('text/plain')->authenticateWith($login,$password)->send();
   
   $crochets= array('[',']');
   $extractCrochets= str_replace($crochets,'',$response);
   $extractSpaces=str_replace(' ','',$extractCrochets);
  return  $familleList=explode(',',$extractSpaces);
  
   
}


?>