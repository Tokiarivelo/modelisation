<?php
	include_once('connexion_bd.php');
	function testMot($username, $msecret, $bdd)
	{
		$req = $bdd->query("SELECT Nom_util FROM login_mod WHERE Nom_util='".$username."' AND Mot_Secret='".$msecret."'" );
		$test = false;
		while($donnee = $req ->fetch() )
		{
			$test = true;
		}
		return $test;
	}
	function changerMp($username, $mdp, $msecret, $bdd)
	{
		$bdd->exec("UPDATE login_mod SET  Password_login='".$mdp."' WHERE Nom_util='".$username."' AND Mot_Secret='".$msecret."'");
	}
	if(isset($_POST['Username']) AND isset($_POST['Password']) AND isset($_POST['Motsecret']))
	{
		$testM = testMot($_POST['Username'], $_POST['Motsecret'], $bdd);
		if($testM)
		{
			changerMp($_POST['Username'], $_POST['Password'], $_POST['Motsecret'], $bdd);
			header('location: ../ind.php?p='.$_POST['p']."&lr=login&changed=success");
		}
		else
			header('location: ../ind.php?p='.$_POST['p']."&confirm=none");
	}
