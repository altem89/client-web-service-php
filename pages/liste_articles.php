<?php  include("entete.php"); 
 
?>  


		<div style="width:100%;height:200px;overflow:scroll;">
			<table id = "listeArticle">
			<tr>
			<th><div class="th-inner">Code Article </div></th>
			<th> <div class="th-inner">Ref client </div></th>
		    <th> <div class="th-inner">Libelle</div></th>
			<th> <div class="th-inner">Type article</div></th>
			<th> <div class="th-inner">Familleniv1</div></th>
			<th><div class="th-inner">Familleniv2</div></th>
			<th><div class="th-inner">Familleniv3</div></th>
			<th><div class="th-inner">Libreart1</div></th>
			<th><div class="th-inner">Libreart2</div></th>
            <th><div class="th-inner">Libreart3</div></th>
            <th><div class="th-inner"> Vallibre1 </div></th>
            <th><div class="th-inner"> Stock </div></th>			 
			

		   </tr>  
						    
	<?php				
	    include("service_fonctions.php");
	   
	   
	   $articlesEnStock=getArticlesEnStock($log,$pass);
	   $stockArticles=getStockArticles($log,$pass);
	   $codeFamille=getFamillesLibelles($log,$pass);
	   $codeArticleTiers=getClientCodesArticles($log,$pass);
	   $codeLibreart=getLibrearstLibelles($log,$pass);
	      
	   
	   foreach($articlesEnStock->body->{"article"} as $article){
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

		?>	
		</table>
		</div>
		
	<?php include("footer.php"); ?>