 <?php include("entete.php");
       
	    include("service_fonctions.php");
		$codeFam=getFamillesLibelles($log,$pass);
	   
	  
	   ?>
	   
 <h2> FAMILLENIV1 </h2>
 <?php
   $uri1="http://localhost:8080/WebService/api/article/familleniv1/";
   $famille1List=getRequestStringList($uri1,$log,$pass);
   
   foreach($famille1List as $fam1){
   if(!empty($codeFam[$fam1])){
   echo "<a href='familleniv_articles_liste.php?familleniv1=".$fam1."'><span style='color:#000000'>".$codeFam[$fam1].", </span></a>";
   }
  
   }
  
   ?>
   <br/><br/>
  <h2> FAMILLENIV2 </h2>
 <?php
   $uri2="http://localhost:8080/WebService/api/article/familleniv2/";
   $famille2List=getRequestStringList($uri2,$log,$pass);
   
   foreach($famille2List as $fam2){
   if(!empty($codeFam[$fam2])){
   echo "<a href='familleniv_articles_liste.php?familleniv2=".$fam2."'><span style='color:#000000'>".$codeFam[$fam2].", </span></a>";
   }
   }
  
   ?>
   
    <br/><br/>
   <h2> FAMILLENIV3 </h2>
 <?php
   $uri3="http://localhost:8080/WebService/api/article/familleniv3/";
   $famille3List=getRequestStringList($uri3,$log,$pass);
   
   foreach($famille3List as $fam3){
   if(!empty($codeFam[$fam3])){
   echo "<a href='familleniv_articles_liste.php?familleniv3=".$fam3."'><span style='color:#000000'>".$codeFam[$fam3].", </span></a>";
   }
   }
   
   include("footer.php");
   ?> 
   
   