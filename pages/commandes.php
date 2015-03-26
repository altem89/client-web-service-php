<?php include("entete.php");
      
	  if(isset($_SESSION["login"])){	
	  $log=$_SESSION["login"];
	  $pass=$_SESSION["password"];
?>
<div style="width:100%;height:200px;overflow:scroll;">
<table id = "listeArticle">
<tr>
<th> CLIENT </th>
<th> NUMERO </th>
<th> NUMERO ORDRE </th>
<th> NATURE PIECE</th>
<th> ARTICLE </th>
<th> LIBELLE COMPLEMENTAIRE </th>
<th> SOUCHE </th>
<th> MONTANT HT </th>
<th> MONTANT TTC </th>
<th> DEVISE </th>
<th> DATE COMMANDE</th>

</tr>

<?php			
	   include("../dependances/httpful.phar");
	   
	   $uri="http://localhost:8080/WebService/api/user/commande/";
	   $response= \Httpful\Request::get($uri)->authenticateWith($log,$pass)->send();
	   
	   foreach($response->body->{"commande"} as $commande){
	   echo '<tr>';
	   echo '<td>'.$commande->client.'</td>';
	   echo '<td>'.$commande->numero.'</td>';
	   echo '<td>'.$commande->numeroOrdre.'</td>';
	   echo '<td>'.$commande->naturePiece.'</td>';
	   echo '<td>'.$commande->libelleArticle.'</td>';
	   echo '<td>'.$commande->libCompl.'</td>';
	   echo '<td>'.$commande->souche.'</td>';
	   echo '<td>'.$commande->montantHT.'</td>';
	   echo '<td>'.$commande->montantTTC.'</td>';
   	   echo '<td>'.$commande->devise.'</td>';
	   echo '<td>'.$commande->dateCreation.'</td>';
	   echo '</tr>';
	   }
	   
	   ?>	
		</table>
		</div>
		<?php } else{
		             echo "VOUS DEVEZ ETRE CONNECTE";
		}
		?>
	<?php include("footer.php"); ?>