<?php
	//include_once('connexion_bd.php');
	function liste($bdd)
	{
		$req1 = $bdd->query("SELECT * FROM login_mod");
	
		while($donne = $req1->fetch())
		{
			echo "<div class='membre col-xs-11 col-sm-7 col-md-7 col-lg-5'>";
				echo "<div class='profil col-lg-offset-3 col-sm-offset-1 col-md-offset-3 col-xs-offset-1 '><img src='vue/img_Mod/incn.png'/></div>";
				echo "<label class = 'info' >Nom d'utilisateur </label> :  ".$donne['Nom_util']."<br/>";
				echo "<label class = 'info' >Nom </label> :  ".$donne['Nom_login']."<br/>";
				echo "<label class = 'info' >Prénom(s) </label> :  ".$donne['Prenom_login']."<br/>";
				echo "<label class = 'info' >Profession </label> :  ".$donne['profession_log']."<br/>";
			echo "</div>";
		}
		$req1->closeCursor();
	}
	function detail($bdd)
	{
		$req1 = $bdd->query("SELECT * FROM login_mod WHERE Nom_util='anjaniaina'");
	
		while($donne = $req1->fetch())
		{
			echo "<div class='membre col-xs-11 col-sm-11 col-md-11 col-lg-11'>";
				
				echo "<div class='profil col-lg-offset-3 col-sm-offset-1 col-md-offset-3 col-xs-offset-1'><img src='vue/img_Mod/incn.png'/></div>";
				echo "<table id='modif'>";
					echo "<tr><td><label class = 'info' >Nom d'utilisateur </label> </td><td>:  <input class='modifiable' type='text' value='".$donne['Nom_util']."' disabled='disabled'/></td></tr>";
					echo "<tr><td><label class = 'info' >Nom </label> </td><td>:  <input class='modifiable' type='text' value='".$donne['Nom_login']."' disabled='disabled'/></td></tr>";
					echo "<tr><td><label class = 'info' >Prénom(s) </label> </td><td>:  <input class='modifiable' type='text' value='".$donne['Prenom_login']."' disabled='disabled'/></td></tr>";
					echo "<tr><td><label class = 'info' >Profession </label> </td><td>:  <input class='modifiable' type='text' value='".$donne['profession_log']."' disabled='disabled'/></td></tr>";
				echo "</table>";
			echo "</div>";
		}
		$req1->closeCursor();
	}