 <?php  include("entete.php"); ?>  


		<div style="width:100%;height:200px;overflow:scroll;">
			<table id = "listeArticle">
			<tr>
			<th>Code Article</th>
		    <th >Libelle</th>
			<th >Type article</th>
			<th >Familleniv1</th>
			<th >Familleniv2</th>
			<th >Familleniv3</th>
			<th >Libreart1</th>
			<th >Libreart2</th>
            <th >Libreart3</th>
             <th> Vallibre1 </th> 			
			

		   </tr>  
						    
	<?php				
	   include("../dependances/httpful.phar");
	   if(empty($_POST["articleType"]) and $_POST["articleType"]!=0){
	     header('Location:/projects/mtb-client-service/pages/index.php');
	    }
	    $type=$_POST["articleType"];
	
	   $uri="http://localhost:8080/WebService/api/article/type/".$type;
	  
	   $response= \Httpful\Request::get($uri)->send();
	   
	   if(!$response->hasErrors()){
	   foreach($response->body->{"article"} as $article){
	    echo '<tr>';
         echo "<td> <a href='articleStock.php?codeArticle=".$article->codeArticleWithoutX."&article=".$article->libelle."'><span style='color:#ff0000;'>" .$article->codeArticleWithoutX. '</span></td>';
		 echo '<td>' .$article->libelle. '</td>';                                    
		 echo '<td>' .$article->type. '</td>';
		 echo '<td>' .$article->familleniv1. '</td>';
		 echo '<td>' .$article->familleniv2.'</td>';
		 echo '<td>' .$article->familleniv3. '</td>';
		 echo '<td>' .$article->libreart1. '</td>';
		 echo '<td>' .$article->libreart2. '</td>';
		 echo '<td>' .$article->libreart3. '</td>';             
		 echo '<td>' .$article->vallibre1. '</td>';
		 
		 echo '</tr>';
       }	   
       }
		?>	
		</table>
		</div>
		
	<?php include("footer.php"); ?>