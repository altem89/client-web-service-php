<?php

include("REST_fonctions.php");


function getArticlesEnStock($login,$password){
$uri="http://localhost:8080/WebService/api/article/list-en-stock";
return $response=getRequestJSON($uri,$login,$password);
}


function getStockArticles($login,$password){
 $uri="http://localhost:8080/WebService/api/stock/list";
 $response= getRequestJSON($uri,$login,$password);
 foreach($response->body->stock as $leStock){
 $stock[$leStock->codeStockArticle]=$leStock->stockPhysique;   
 }
 return $stock;
}


function getFamillesLibelles($login,$password){
$uri="http://localhost:8080/WebService/api/choixcode/list-famille";
$response= getRequestJSON($uri,$login,$password);
foreach($response->body->{"choixCode"} as $leCode){
$codeFam[$leCode->code]=$leCode->libelle;   
 }
 return $codeFam;
}

function getLibrearstLibelles($login,$password){
$uri="http://localhost:8080/WebService/api/choix-ext/list-libreart";
$response= getRequestJSON($uri,$login,$password);
foreach($response->body->{"choixExt"} as $leCode){
$codeLib[$leCode->code]=$leCode->libelle;   
 }
 return $codeLib;
}

function getClientCodesArticles($login,$password){
$uri="http://localhost:8080/WebService/api/user/article-tiers/";
$response4= getRequestJSON($uri,$login,$password);
foreach($response4->body->{"articleTiers"} as $unArticleTiers){
$codeArticleTiers[$unArticleTiers->gatArticle]=$unArticleTiers->refArticle;	   
}
return $codeArticleTiers;
}

function getArticlesClient($login,$password){

}

?>