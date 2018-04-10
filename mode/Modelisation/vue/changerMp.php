<div id="pseudos" style="display :none;">
	<?php
		include_once('modele/list_pseudo.php');
	?>
</div>
<div class="enregistrement row col-xs-offset-2 col-xs-8">
	<div class="choixLR">
		<span id="p_login" class="p_login"><a href="ind.php?p=<?php p();?>&lr=login">Login</a></span>
		<span id="p_register" class="p_register"><a href="ind.php?p=<?php p();?>&confirm=check">Restauration</a></span>
	</div>
	
	<div class="row">
		<div class="col-xs-offset-3 col-xs-6">
			<img src="vue/img_Mod/P_et_M.png" class="PetM"/>
		</div>
	</div>
	<?php
		retry();
	?>
	<form id="envoi_lr" method="post" action="modele/chrMp.php">
		<input type='hidden' value='<?php p();?>' name='p'>
		
		<div>
			<label for="Username" class="nom_cp" >Votre Nom d'utilisateur *</label> 
			<span class="averissement">
				<strong class="pull-right"  id="nomU">Le nom d'utilisateur doit être supérieur à 3 caractères</strong>
			</span>
			<input type="text" class="champ form-control" placeholder="Username" id="Username" name="Username" autocomplete='off'/>
		</div>
		<div>
			<label for="Motsecret" class="nom_cp">Entrez votre mot secret *</label>
			<span class="averissement"><strong class="pull-right">Le mot secret doit être supérieure à 2 caractères</strong></span>
			<input type="text" class="champ form-control" placeholder="Mot secret" id="Motsecret" name="Motsecret" autocomplete='off'/>
		</div>
		
		
		<div>
			<label for="Password" class="nom_cp">Nouveau mot de passe *</label> 
			<span class="averissement"><strong class="pull-right">Mot de passe trop court (minimum 6 caractères)</strong></span>
			<input type="password" class="champ form-control" placeholder="Password" id="Password" name="Password"/>
		</div>
		<div>
			<label for="CPassword" class="nom_cp">Confirmation du nouveau mot de passe *</label>
			<span class="averissement"><strong class="pull-right">Le mot de passe ne correspond pas au précédent</strong></span>
			<input type="password" class="champ form-control" placeholder="Confirmation Password" id="CPassword"/>
		</div>
		
	</form>
	<div class="valid">
		<button id="log_reg" class="valider btn btn-primary btn-sm">
			Changer
		</button>
	</div>
	<div class="obli pull-right">
		<small>
			* champs obligatoires
		</small>
	</div>
	
	<script src="vue/enreg_login.js"></script>
	<script src="vue/changeMp.js"></script>
</div>