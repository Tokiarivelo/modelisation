<?php
	include_once('connexion_bd.php');
	function insertionLogin($nom, $prenom, $username, $mdp, $profession, $msecret, $bdd)
	{
		$bdd->exec("INSERT INTO login_mod VALUES ('','".$nom."','".$prenom."','".$username."','".$mdp."','".$msecret."','".$profession."','', NOW())");
	}
	if(isset($_POST['nom']) AND isset($_POST['Prenom']) AND isset($_POST['Username']) AND isset($_POST['Password']) AND isset($_POST['Motsecret']) AND isset($_POST['Profession']))
	{
		 insertionLogin($_POST['nom'], $_POST['Prenom'], $_POST['Username'], $_POST['Password'], $_POST['Profession'],$_POST['Motsecret'], $bdd);
	}
	header('location: ../ind.php?p='.$_POST['p']."&lr=login&register=success");
