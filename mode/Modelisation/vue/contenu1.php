<section class="col-sm-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Bienvenue sur le site de la <strong>Physique et Modélisation </strong></h3>
		</div>
		<div id="corps" class="panel-body ewrapper" contentEditable="false">
			<?php
				include_once('debu_wysit.php');
				NumContenu(1);
			?>
					<div id="editeur" class="editable" data-placeholder="Enter text ...">
						<?php
							//contenu 1
							selectF('contenu1', $bdd);
						?>
					</div>
			<?php
				include_once('fin_wysi.php');
			?>		
		</div>
	</div>
</section>