 <?php include("entete.php");
       
	    include("../dependances/httpful.phar");
	   ?>
	   
 <h2> FAMILLENIV1 </h2>
 <?php
   $uri1="http://localhost:8080/WebService/api/article/familleniv1/";
   $response= \Httpful\Request::get($uri1)->expects('text/plain')->send();
   
   $crochets= array('[',']');
   $extractCrochets= str_replace($crochets,'',$response);
   $famille1List=explode(',',$extractCrochets);
   
   foreach($famille1List as $fam1){
   if($fam1!=' ' and $fam1!=null and $fam1!="null"){
   $finalfam1=str_replace(' ','',$fam1);
   echo "<a href='familleniv1_articles_liste.php?familleniv1=".$finalfam1."'><span style='color:#000000'>".$finalfam1.", </span></a>";
   }
   }
  
   ?>
   <br/><br/>
   <h2> FAMILLENIV2 </h2>
 <?php
   $uri2="http://localhost:8080/WebService/api/article/familleniv2/";
   $response= \Httpful\Request::get($uri2)->expects('text/plain')->send();
   
   $crochets= array('[',']');
   $extractCrochets= str_replace($crochets,'',$response);
   $famille2List=explode(',',$extractCrochets);
   
   foreach($famille2List as $fam2){
   
   $finalfam2=str_replace(' ','',$fam2);
   if($fam2!=' ' and $fam2!=null and $fam2!="null"){
   echo "<a href='familleniv2_articles_liste.php?familleniv2=".$finalfam2."'><span style='color:#000000'>".$finalfam2.", </span></a>";
   }
   }
  
   ?>
   
    <br/><br/>
   <h2> FAMILLENIV3 </h2>
 <?php
   $uri3="http://localhost:8080/WebService/api/article/familleniv3/";
   $response= \Httpful\Request::get($uri3)->expects('text/plain')->send();
   
   $crochets= array('[',']');
   $extractCrochets= str_replace($crochets,'',$response);
   $famille3List=explode(',',$extractCrochets);
   
   foreach($famille3List as $fam3){
 
   if($fam3!=' ' and $fam3!=null and $fam3!="null" and $fam3!="NULL"){
   $finalfam3=str_replace(' ','',$fam3);
   echo "<a href='familleniv3_articles_liste.php?familleniv3=".$finalfam3."'><span style='color:#000000'>".$finalfam3.", </span></a>";
   }
   }
   
   ?>