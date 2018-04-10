(function() {
	//editStyle( p_register, p_login);
	function blink()
	{
		elnt = document.getElementById('succes').style;
		
		if(elnt.display == 'none')
			elnt.display = 'block';
		else
			elnt.display = 'none';
	}
	setInterval(blink, 1000);
	
})();

