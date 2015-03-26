 <?php  include("entete.php"); ?>  


		<div style="width:100%;height:200px;overflow:scroll;">
			<table id = "listeArticle">
			<tr>
			<th>Code Article</th>
		    <th >Libelle</th>
			<th> Stock </th>		
			

		   </tr>  
						    
	<?php				
	   include("../dependances/httpful.phar");
	   if(!empty($_GET["codeArticle"]) and !empty($_GET["article"])){
	    
	    $codeArticle=$_GET["codeArticle"];
		$article=$_GET["article"];
		
	
	   $uri="http://localhost:8080/WebService/api/stock/".$codeArticle;
	   $response= \Httpful\Request::get($uri)->send();
	  
	   foreach($response->body as $art){
	    echo '<tr>';
         echo '<td>' .$codeArticle. '</td>';
		 echo '<td>' .$article. '</td>';
		 echo '<td>' .$art->stockPhysique. '</td>';
		 
		
		 echo '</tr>';
       }	   
     }
		?>	
		</table>
		</div>
		
	<?php include("footer.php"); ?>