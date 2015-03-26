<?php include("entete.php"); ?>


<?php

if(isset($_SESSION['login'])){
	echo 'Vous etes deja connecte !';
	header('Location:/projects/mtb-client-service/pages/index.php ');
	exit();
}
else{
	
?>
<br/><br/>
<div align="center">
<form class="myform" action="verification_connexion.php" method="post">
<label> Login :</label>    <input type="text" name="login"><br/> <br/>  
<label> password :</label> <input type="password" name="password"><br/> <br/>
<input type="submit" value="OK">
</form>
</div>


<?php } ?>



<?php include("footer.php"); ?>