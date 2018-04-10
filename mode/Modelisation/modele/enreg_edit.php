<?php
	include_once('connexion_bd.php');
	chmod("../vue/images/",777);
	chmod("../vue",777);
	chmod("../",777);
	function insertionTxt($num, $contenu, $bdd)
	{
		$req1 = $bdd->query("SELECT contenu FROM contenu_txt WHERE num_contenu='".$num."'");
		$test1 = false;
		while($donne1 = $req1->fetch())
		{
			$test1 = true;
		}
		$req1->closeCursor();
		if($test1)
		{
			$bdd->exec("UPDATE contenu_txt SET contenu ='".$contenu."'  WHERE num_contenu='".$num."'");
		}
		else
		{
			$bdd->exec("INSERT INTO contenu_txt VALUES ('','".$num."','".$contenu."')");
		}
		//echo $contenu;
	}
	function insertionImg($num, $nom, $bdd)
	{
		$req2= $bdd->query("SELECT nom_image FROM contenu_img WHERE num_contenu_img='".$num."' AND nom_image='".$nom."'");
		$test2 = false;
		while($donne2 = $req2->fetch())
		{
			$test2 = true;
		}
		$req2->closeCursor();
		if(!$test2)
		{
			$bdd->exec("INSERT INTO contenu_img VALUES ('','".$num."','".$nom."')");
		}
	}
	
	if(isset($_POST['num_contenu']) AND isset($_POST['contenu']))
	{
		insertionTxt($_POST['num_contenu'], $_POST['contenu'], $bdd);
	}
		
	
	if(isset($_POST['num_contenu']) AND isset($_FILES['image']['name']) AND !empty($_FILES['image']['name']))
	{
		$nom_img = basename($_FILES['image']['name']);
		insertionImg($_POST['num_contenu'], $nom_img, $bdd);
		$chemin = "../vue/images/".$nom_img;
		move_uploaded_file($_FILES['image']['tmp_name'],$chemin);
	
	}
	
	$req3= $bdd->query("SELECT nom_image FROM contenu_img WHERE num_contenu_img='".$_POST['num_contenu']."'");
		
		while($donne2 = $req3->fetch())
		{
			$supprimer_fich = true;
			$supprimer_nom = true;
			if(isset($_POST['Imlenth']))
			{
				for($i=1 ; $i<=$_POST['Imlenth'] ; $i++)
				{
					if(isset($_POST['image'.$i]))
					{
						if($donne2['nom_image']==$_POST['image'.$i])
						{
							$supprimer_nom = false;
							$supprimer_fich = false;
						}
							
					}
				}
			}
			
			$req4= $bdd->query("SELECT nom_image FROM contenu_img WHERE nom_image='".$donne2['nom_image']."' AND num_contenu_img<>'".$_POST['num_contenu']."'");
			while($donne4 = $req4->fetch())
			{
				$supprimer_fich = false;
			}
			
			$req4->closeCursor();
			if($supprimer_fich )
			{
				$fichier = "../vue/images/".$donne2['nom_image'];
				if(file_exists($fichier))
					unlink($fichier);
			}
			if($supprimer_nom)
			{
				$bdd->exec("DELETE FROM contenu_img WHERE nom_image='".$donne2['nom_image']."' AND num_contenu_img='".$_POST['num_contenu']."'");
			}
		}
		$req3->closeCursor();
	header('location: ../ind.php?p='.$_POST['p']);
