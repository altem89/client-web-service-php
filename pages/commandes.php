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
<th> FACTURE </th>

</tr>

<?php			
	   include("REST_fonctions.php");
	   
	   $uri="http://localhost:8080/WebService/api/user/commande/";
	   $response= getRequestJSON($uri,$log,$pass);
	   
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
	   echo "<td>  <a href='facture.php?numero=".$commande->numero."'><span style='color:#ff0000;'> Telecharger<span></a></td>";
	   echo '</tr>';
	   }
	   
	   ?>	
		</table>
		</div>
		<?php } else{
		             echo "<div align='center'><h2> VOUS DEVEZ ETRE CONNECTE </h2></div>";
		}
		?>
	<?php include("footer.php"); ?>