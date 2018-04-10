<div class="login row col-xs-offset-3 col-xs-5">
	<div class="choixLR">
		<span id="p_login" class="p_login"><a href="ind.php?p=<?php p();?>&lr=login">Login</a></span>
		<span id="p_register" class="p_register"><a href="ind.php?p=<?php p();?>&lr=register">Register</a></span>
	</div>
	
	<div class="row">
		<div class="col-xs-offset-3 col-xs-6">
			<img src="vue/img_Mod/P_et_M.png" class="PetM"/>
		</div>
	</div>
	<?php
		succes();
	?>
	
	<form id="envoi_lr" method="post" action="modele/verification_log.php" >
		<div class="form-group has-feedback">
			<span class="glyphicon glyphicon-user form-control-feedback" style="color:#ffffff;"></span>
			<input type="text" class="champ form-control" placeholder="Username"/>
		</div>
		<div class="form-group has-feedback">
			<input type="password" class="champ form-control" placeholder="Password"/>
			<span class="glyphicon glyphicon-lock form-control-feedback" style="color:#ffffff;"></span>
		</div>
	</form>
	<div class="valid">
		<button class="valider btn btn-primary btn-sm">
			Login
		</button>
	</div>
	
	<div id="forgot" class="p_oubli pull-right">
		<a href="ind.php?p=<?php p();?>&confirm=check">Mot de passe oublié?</a>
	</div>
	<script src="vue/enreg_login.js"></script>
	<script src="vue/login.js"></script>
</div>