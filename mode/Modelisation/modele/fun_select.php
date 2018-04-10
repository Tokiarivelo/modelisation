<?php
	function selectF($num, $bdd)
	{
		$req = $bdd->query("SELECT contenu FROM contenu_txt WHERE num_contenu='".$num."'");
		while($donne = $req->fetch())
		{
			echo $donne['contenu'];
		}
		$req->closeCursor();
	}