<?php
include("entete.php");
include("service_fonctions.php");

$codeLibreart=getLibrearstLibelles($log,$pass);

?>

<h2> LIBREART1 </h2>
 <?php
   $uri1="http://localhost:8080/WebService/api/article/libreart1/";
   $libreart1List=getRequestStringList($uri1,$log,$pass);
   
   foreach($libreart1List as $lib1){
   if(!empty($codeLibreart[$lib1])){
   echo "<a href='libreart_articles_liste.php?libreart1=".$lib1."'><span style='color:#000000'>".$codeLibreart[$lib1].", </span></a>";
   }
  
   }
  
   ?>
   <br/><br/>
  <h2> LIBREART2 </h2>
 <?php
   $uri2="http://localhost:8080/WebService/api/article/libreart2/";
   $libreart2List=getRequestStringList($uri2,$log,$pass);
   
   foreach($libreart2List as $lib2){
   if(!empty($codeLibreart[$lib2])){
   echo "<a href='libreart_articles_liste.php?libreart2=".$lib2."'><span style='color:#000000'>".$codeLibreart[$lib2].", </span></a>";
   }
   }
  
   ?>
   
    <br/><br/>
   <h2> LIBREART3 </h2>
 <?php
   $uri3="http://localhost:8080/WebService/api/article/libreart3/";
   $libreart3List=getRequestStringList($uri3,$log,$pass);
   
   foreach($libreart3List as $lib3){
   if(!empty($codeLibreart[$lib3])){
   echo "<a href='libreart_articles_liste.php?libreart3=".$lib3."'><span style='color:#000000'>".$codeLibreart[$lib3].", </span></a>";
   }
   }
   
   include("footer.php");
   ?> 
   