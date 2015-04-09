
<?php  
 include("entete.php"); 
 include("url_fonctions.php");
 include("service_fonctions.php");
 $articlesEnStock=getArticlesEnStock($log,$pass);
 $stockArticles=getStockArticles($log,$pass);
 $codeFamille=getFamillesLibelles($log,$pass);
 $codeArticleTiers=getClientCodesArticles($log,$pass);
 $codeLibreart=getLibrearstLibelles($log,$pass);
?>  


		<div style="width:100%;height:200px;overflow:scroll;">
			<table id = "listeArticle">
			<tr>
			<th>Code Article</th>
			<th> Ref client </th>
		    <th >Libelle</th>
			<th >Type article</th>
			<th >Familleniv1</th>
			<th >Familleniv2</th>
			<th >Familleniv3</th>
			<th >Libreart1</th>
			<th >Libreart2</th>
            <th >Libreart3</th>
             <th> Vallibre1 </th>
             <th> Stock </th>		
			

		   </tr>  
						    
	<?php				
	 if(urlAParametre("familleniv1") or urlAParametre("familleniv2") or urlAParametre("familleniv3")){
	   
	   if(urlAParametre("familleniv1")){
	   $familleniv1=urlParametreValeur("familleniv1");
	   $uri="http://localhost:8080/WebService/api/article/familleniv1/".$familleniv1;
	   $response=getRequestJSON($uri,$log,$pass); 
       }
	  else if(urlAParametre("familleniv2")){
	  $familleniv2=urlParametreValeur("familleniv2");
	  $uri="http://localhost:8080/WebService/api/article/familleniv2/".$familleniv2;
	  $response=getRequestJSON($uri,$log,$pass); 
	  }
	  else if(urlAParametre("familleniv3")){
	  $familleniv3=urlParametreValeur("familleniv3");
	  $uri="http://localhost:8080/WebService/api/article/familleniv3/".$familleniv3;
	  $response=getRequestJSON($uri,$log,$pass); 
	  }
	   foreach($response->body->{"article"} as $article){
	    echo '<tr>'; 
         echo "<td> <span style='color:#ff0000;'>" .$article->codeArticleWithoutX. '</span></td>';
		 if(isset($codeArticleTiers[$article->id])){ echo '<td>' .$codeArticleTiers[$article->id]. '</td>';} else {echo "<td></td>";}
		 echo '<td>' .$article->libelle. '</td>';                                    
		 echo '<td>' .$article->type. '</td>';
		if(!empty($article->familleniv1)){ echo '<td>' .$codeFamille[$article->familleniv1]. '</td>';} else {echo '<td></td>';}
		if(!empty($article->familleniv2)){ echo '<td>' .$codeFamille[$article->familleniv2].'</td>';} else {echo '<td></td>';}
		if(!empty($article->familleniv3)){ echo '<td>' .$codeFamille[$article->familleniv3]. '</td>';} else {echo '<td></td>';}
		if(!empty($article->libreart1)){ echo '<td>' .$codeLibreart[$article->libreart1]. '</td>';} else {echo '<td></td>';}
		if(!empty($article->libreart2)){ echo '<td>' .$codeLibreart[$article->libreart2]. '</td>';} else {echo '<td></td>';}
		if(!empty($article->libreart3)){ echo '<td>' .$codeLibreart[$article->libreart3]. '</td>';} else {echo '<td></td>';}            
		 echo '<td>' .$article->vallibre1. '</td>';
		if(!empty($stockArticles[$article->id])){ echo '<td>' .$stockArticles[$article->id].'</td>'; } else {echo '<td></td>';}
		
		 echo '</tr>';
       }	   
	  }
	  
		?>	
		</table>
		</div>
		
	<?php include("footer.php"); ?>