<?php
			function lr()
			{
				if((isset($_GET['lr']) AND ($_GET['lr']=='login' OR $_GET['lr']=='register' )) OR (isset($_GET['confirm']) AND ($_GET['confirm']=='check' OR $_GET['confirm']=='none')))
					echo 'connexion';
			}
			function p()
			{
				if(isset($_GET['p']))
					echo $_GET['p'];
			}
			function connect()
			{
				if(!isset($_GET['lr']) AND !isset($_GET['confirm']))
				{
					?>
						<div>
							<a href="ind.php?p=<?php p();?>&lr=login"> Se connecter</a>
						</div>
					<?php
				}
					
				
			}
			
			function succes()
			{
				if(isset($_GET['register']))
				{
					?>
						<div class="inscrit row">
							<div id='succes' class="succes col-xs-12">
								Vous êtes inscrit, vous pouvez vous connecter maintenant!!!
							</div>
						</div>
					<?php
				}
				if(isset($_GET['changed']))
				{
					?>
						<div class="inscrit row">
							<div id='succes' class="succes col-xs-12">
								Mot de passe réinitialisé, vous pouvez vous connecter maintenant!!!
							</div>
						</div>
					<?php
				}
					
				
			}
			
			function retry()
			{
				if(isset($_GET['confirm']) AND $_GET['confirm']=='none')
				{
					?>
						<div class="inscrit row">
							<div id='succes' class="succes col-xs-12">
								Le mot secret est incorrecte, veuillez réessayer!!!
							</div>
						</div>
					<?php
				}	
				
			}

