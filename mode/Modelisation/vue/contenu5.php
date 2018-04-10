<section class="col-sm-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Membres</h3>
		</div>
		<?php
			include_once('controleur/controle_lr.php');
		?>
		<div class="<?php lr(); ?> panel-body">
					
			<?php
				include_once('login.php');
				connect();
				if(!isset($_GET['lr']) AND !isset($_GET['confirm']))
				{
					?>
						<div class="row">
							<?php
								include_once('modele/list_membre.php');
								liste($bdd);
							?>
						</div>
					<?php
				}
			?>
		</div>
	</div>
</section>