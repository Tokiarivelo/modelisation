<section class="col-sm-10 ">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Matières S9 </h3>
		</div>
		<div id="corps" class="panel-body ewrapper" contentEditable="false">
			<?php
				include_once('debu_wysit.php');
				NumContenu(3);
			?>
					<div id="editeur" class="editable" data-placeholder="Enter text ...">
						<?php
							//contenu 2
							selectF('contenu3', $bdd);
						?>
					</div>
			<?php
				include_once('fin_wysi.php');
			?>
		</div>
	</div>
</section>