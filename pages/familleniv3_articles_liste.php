  <?php  include("entete.php"); ?>  
<?php include("menu.php"); ?>

		<div style="width:100%;height:345px;overflow:scroll;">
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
	   if(empty($_POST["familleniv3"]) and empty($_GET["familleniv3"])){
	     header('Location:/projects/mtb-client-service/pages/index.php');
	    }
		if(!empty($_POST["familleniv3"])){
	    $familleniv3=$_POST["familleniv3"];
		}
		else{
		$familleniv3=$_GET["familleniv3"];
		}
	
	   $uri="http://localhost:8080/WebService/api/article/familleniv3/".$familleniv3;
	   $response= \Httpful\Request::get($uri)->send();
	  
	   foreach($response->body->{"article"} as $article){
	    echo '<tr>';
         echo '<td>' .$article->codeArticleWithoutX. '</td>';
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

		?>	
		</table>
		</div>
		
	<?php include("footer.php"); ?>