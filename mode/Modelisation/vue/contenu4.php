<section class="col-sm-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Matière S10 </h3>
		</div>
		<div id="corps" class="panel-body ewrapper" contentEditable="false">
			<?php
				include_once('debu_wysit.php');
				NumContenu(4);
			?>
					<div id="editeur" class="editable" data-placeholder="Enter text ...">
						<?php
							//contenu 4
							selectF('contenu4', $bdd);
						?>
					</div>
			<?php
				include_once('fin_wysi.php');
			?>
		</div>
	</div>
</section>