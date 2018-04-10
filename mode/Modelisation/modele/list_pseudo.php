<?php
	//include_once('connexion_bd.php');
	$req1 = $bdd->query("SELECT Nom_util FROM login_mod");
	
	while($donne = $req1->fetch())
	{
		echo "<input type='hidden' class='nomutil' value='".$donne['Nom_util']."'>";
	}
	$req1->closeCursor();