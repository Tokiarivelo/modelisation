<?php
	try
	{
		$bdd=new PDO('mysql:host=localhost; dbname=modelisation','root','');
	}
	catch (Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}