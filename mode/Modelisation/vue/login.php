<?php
	if(isset($_GET['lr']) AND $_GET['lr']=='login')
		include_once('login1.php');
	if(isset($_GET['lr']) AND $_GET['lr']=='register')
		include_once('enregistrer.php');
	if(isset($_GET['confirm']) AND ($_GET['confirm']=='check' OR $_GET['confirm']=='none'))
		include_once('changerMp.php');
