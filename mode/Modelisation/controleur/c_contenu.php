<?php 
	if(isset($_GET['p']) AND $_GET['p']==2)
		include_once('vue/contenu2.php');
	elseif(isset($_GET['p']) AND $_GET['p']==3)
		include_once('vue/contenu3.php');
	elseif(isset($_GET['p']) AND $_GET['p']==4)
		include_once('vue/contenu4.php');
	elseif(isset($_GET['p']) AND $_GET['p']==5)
		include_once('vue/contenu5.php');
	elseif(isset($_GET['p']) AND $_GET['p']==6)
		include_once('vue/contenu6.php');
	elseif(isset($_GET['p']) AND $_GET['p']==7)
		include_once('vue/contenu7.php');
	else
		include_once('vue/contenu1.php');