<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8"/>
		<link rel="shortcut icon" href="vue/img_Mod/logo.png"/>
		<title>Physique et Modélisation</title>
		
		<link href="vue/bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<link href="vue/style.css" rel="stylesheet"/>
		<link rel="stylesheet" href="vue/stylesheet.css" type="text/css" media="screen" title="no title" charset="utf-8">
	</head>
	<body>
		<?php
			include_once('controleur/c_activer.php');
			include_once('modele/fun_select.php');
			include_once('style_wysi.php');
		?>
		<div class="container">
			<header class="row col-sm-12">
				<div class="page-header">
					<h1 id="titre">Physique et Modélisation <img id="logo" src="vue/img_Mod/mode.png" class="pull-right"/></h1>
				</div>
			</header>
			
			<div class="row col-sm-12">
				<nav class="col-sm-2">
					<ul class="nav nav-pills nav-stacked">
						<li <?php if(isset($_GET['p'])) activer($_GET['p'],1,'class="active"');?>> <a href="?p=1"> <span class="glyphicon glyphicon-home"></span> Accueil </a> </li>
						<li <?php if(isset($_GET['p'])) activer_s($_GET['p'],2,3,4);?>> <a id="mat" href="#"> <span id="icone_fold" class="glyphicon glyphicon-folder-close"></span> Matières <span id="icone" class="glyphicon glyphicon-chevron-right pull-right"></span></a>
							<ul id="list_mat" class="list-group collapse">
								<li class="list-group-item <?php if(isset($_GET['p'])) activer($_GET['p'],2,'activ');?>">
									<span class="glyphicon glyphicon-book text-primary"></span>
									<a href="?p=2"> Semestre 8</a>
								</li>
								<li class="list-group-item <?php if(isset($_GET['p'])) activer($_GET['p'],3,'activ');?>">
									<span class="glyphicon glyphicon-book text-primary"></span>
									<a href="?p=3"> Semestre 9</a>
								</li>
								<li class="list-group-item <?php if(isset($_GET['p'])) activer($_GET['p'],4,'activ');?>">
									<span class="glyphicon glyphicon-book text-primary"></span>
									<a href="?p=4"> Semestre 10</a>
								</li>
							</ul>
						 </li>
						<li <?php if(isset($_GET['p'])) activer($_GET['p'],5,'class="active"');?>> <a href="?p=5"> <span class="glyphicon glyphicon-user"></span> Membres </a> </li>
						<li <?php if(isset($_GET['p'])) activer($_GET['p'],6,'class="active"');?>> <a href="?p=6"> <span class="glyphicon glyphicon-wrench"></span> Paramètre du Compte </a> </li>
						<li <?php if(isset($_GET['p'])) activer($_GET['p'],7,'class="active"');?>> <a href="?p=7"> <span class="glyphicon glyphicon-comment"></span> Discussions </a> </li>
					</ul>
				</nav>
				<?php
					
					include_once('controleur/c_contenu.php');
				?>
			</div>
		</div>
			<footer>
					<small>powered by Tokiarivelo</small>
			</footer>
		<script src="vue/bootstrap/js/jquery.js"></script>
		<script src="vue/bootstrap/js/bootstrap.js"></script>
		<script src="controleur/s1.js"></script>
		
		<script src="vue/wysihtml/dist/wysihtml.js"></script>
		<script src="vue/wysihtml/dist/wysihtml.all-commands.js"></script>
		<script src="vue/wysihtml/dist/wysihtml.table_editing.js"></script>
		<script src="vue/wysihtml/dist/wysihtml.toolbar.js"></script>
		  
		<script src="vue/wysihtml/parser_rules/advanced_and_extended.js"></script>
		<script src="vue/apercu.js"></script>
		<script>
			$(".modal").on('shown.bs.modal', function(){
				$('#parcourir').click();
			});
			$(function() {
				var get = <?php if(isset($_GET['p'])) echo $_GET['p'];?>;
				$('#mat').click(function() {
					$('#list_mat').collapse('toggle');
				});
				if(get==2 || get==3 || get==4)
					$('#list_mat').collapse('toggle');
			});
		</script>
		<script src="vue/init_wysi.js"></script>
	</body>
</html>