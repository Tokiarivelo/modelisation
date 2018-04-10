<form id="form_img" method="post" action="modele/enreg_edit.php" enctype="multipart/form-data">
				<?php
					include_once('tools_wysi.php');
					function NumContenu($numero)
					{
						echo '<input type="hidden" name="num_contenu" value="contenu'.$numero.'" />';
						echo '<input type="hidden" name="p" value="'.$numero.'" />';
					}
				?>
		<ul class="nav nav-pills">
			<li id="Modif" class="active"><a>Modifier</a></li>
			<li id="Voir"><a>Voir</a></li>
		</ul>
					