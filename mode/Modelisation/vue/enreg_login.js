(function() {
	var b_env = document.getElementById('log_reg'),
		envoi_lr = document.getElementById('envoi_lr'),
		log_reg = document.getElementById('log_reg');
	
	b_env.addEventListener('mouseover', function(){
		log_reg.style.backgroundColor = "#122b4b";
	},true);
	
	/* b_env.addEventListener('click', function(){
		envoi_lr.submit();
	},true); */
})();
var p_login = document.getElementById('p_login'),
	p_register = document.getElementById('p_register');
function editStyle(active, inactive)
{
	inactive.className = "p_register";
	active.className = "p_login";
}