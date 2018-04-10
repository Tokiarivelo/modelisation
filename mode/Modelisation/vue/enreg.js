(function() {
	editStyle(p_register, p_login);
	
	var champs = document.getElementsByClassName('champ'),
		Lchamps = champs.length,
		envoi_lr = document.getElementById('envoi_lr'),
		b_env = document.getElementById('log_reg');
		
	function recupSpan(element) {
		while (element = element.previousSibling) {
			if (element.className === 'nom_cp') {
				return element;
			}
		} 
		return false;
	}
	function recupAvert(element) {
		while (element = element.previousSibling) {
			if (element.className === 'averissement') {
				return element;
			}
		} 
		return false;
	}
	function DesactiveAvert() {
		var avrt = document.getElementsByClassName('averissement'),
			avrtLength = avrt.length;
		for (var i = 0 ; i < avrtLength ; i++) 
		{
			avrt[i].style.display = 'none';
		}
	} 
	//pour les labels
	(function() {
		for(var i=0; i<Lchamps ; i++)
		{
			champs[i].addEventListener('focus', function(){
				var textStyle =  recupSpan(this).style;
				textStyle.textShadow = "0 0 8px rgba(82, 168, 236, 0.8)";
			},true);
			champs[i].addEventListener('blur', function(){
				var textStyle =  recupSpan(this).style;
				textStyle.textShadow = "none";
			},true);
		}
	})();
	DesactiveAvert();
	
	var check = {};
	check['nom'] = function(el){
		var el = document.getElementById(el),
			avrtStyle =  recupAvert(el).style;
		if(el.value.length <=2)
		{
			avrtStyle.display = "block";
			el.className="incorrect form-control";
			return false;
		}
		else
		{
			avrtStyle.display = "none";
			el.className="correct form-control";
			return true;
		}
	};
	check['Username'] = function(el){
		var el = document.getElementById(el),
			nomU = document.getElementById('nomU'),
			avrtStyle =  recupAvert(el).style,
			users = document.getElementsByClassName('nomutil'),
			usersLength = users.length,
			test = false;
			
		for(var j=0; j< usersLength; j++)
		{
			if(el.value == users[j].value)
				test = true;
		}
		
		if(el.value.length <=3 || test)
		{
			if(test)
			{
				nomU.innerHTML = "Ce nom d'utilisateur est dejà pris";
			}
			else
			{
				nomU.innerHTML = "Le nom d'utilisateur doit être supérieur à 3 caractères";
			}
			avrtStyle.display = "block";
			el.className="incorrect form-control";
			return false;
		}
		else
		{
			avrtStyle.display = "none";
			el.className="correct form-control";
			return true;
		}
	};
	check['Password'] = function(el){
		var el = document.getElementById(el),
			avrtStyle =  recupAvert(el).style;
		if(el.value.length <6)
		{
			avrtStyle.display = "block";
			el.className="incorrect form-control";
			return false;
		}
		else
		{
			avrtStyle.display = "none";
			el.className="correct form-control";
			return true;
		}
	};
	check['CPassword'] = function(el){
		var el = document.getElementById(el),
			avrtStyle =  recupAvert(el).style,
			pass = document.getElementById('Password');
		if(el.value!=pass.value || el.value=='')
		{
			avrtStyle.display = "block";
			el.className="incorrect form-control";
			return false;
		}
		else
		{
			avrtStyle.display = "none";
			el.className="correct form-control";
			return true;
		}
	};
	check['Motsecret'] = check['nom'];
	
	//pour les avertissements
	(function() {
		for(var i=0; i<Lchamps ; i++)
		{
			champs[i].addEventListener('keyup', function(){
				check[this.id](this.id);
			},true);
		}
		
		
		b_env.addEventListener('click', function(){
			var result = true;
			for (var i in check) {
				result = check[i](i) && result;
			} 
			if (result) {
				envoi_lr.submit();
			}
			return false;
		},true);
	})();
	
})();