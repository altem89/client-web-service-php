<table cellpadding="0" cellspacing="0" bgcolor="#999999">
<tr>
<td width="70" height="21" bgcolor="#999999"><div align="center" class="menu_haut"><font color="#CCCCCC"><a href="index.php"> Accueil </a> </font></div></td>
 <td width="1" height="21" bgcolor="#FFFFFF"><div align="center"><img border="0" src="http://www.metal-ball.com/images/pixel.gif" width="1" height="1" alt="|" /></div></td>
<td width="200" height="21" bgcolor="#999999"><div align="center"><span class="menu_haut"><a href="liste_produits.php"> Liste des produits  </a> </span></div></td>
<td width="1" height="21" bgcolor="#FFFFFF"><div align="center"><img border="0" src="http://www.metal-ball.com/images/pixel.gif" width="1" height="1" alt="|" /></div></td>
<td width="200" height="21" bgcolor="#999999"><div align="center"><span class="menu_haut"><a href="familles.php"> Liste des familles </a></span> </div></td>
  <td width="1" height="21" bgcolor="#FFFFFF"><div align="center"><img border="0" src="http://www.metal-ball.com/images/pixel.gif" width="1" height="1" alt="|" /></div></td>
  <td width="200" height="21" bgcolor="#999999"><div align="center"><span class="menu_haut"><a href="commandes.php"> Mes commandes  </a> </span></div></td>

 <td width="1" height="21" bgcolor="#FFFFFF"><div align="center"><img border="0" src="http://www.metal-ball.com/images/pixel.gif" width="1" height="1" alt="|" /></div></td>
 
  <td width="155" height="21" bgcolor="#999999"><div align="center" class="menu_haut">
 <?php if(!isset($_SESSION['login'])){
   echo "<a href='connexion.php'> Connexion  </a>  <br/> ";
   }
   else{
   echo "<a href='deconnexion.php'> Deconnexion  </a>  <br/> ";
   }
   ?>
   </div> </div></td>
 </tr>
 </table>
 
 
 
 
 
 
 
 