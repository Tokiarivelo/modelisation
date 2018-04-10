(function() {
	var editeur = document.getElementById('editeur'),
		valRemplace;
		valRemplace = editeur.innerHTML;
		editeur.innerHTML = valRemplace.replace(/IapostI/g, '\'');
})();

(function() {
	var editors = [];

	$('.ewrapper').each(function(idx, wrapper) {
		var e = new wysihtml.Editor($(wrapper).find('.editable').get(0), {
			toolbar:        $(wrapper).find('.toolbar').get(0),
			parserRules:    wysihtmlParserRules,
			pasteParserRulesets: wysihtmlParserPasteRulesets
			//showToolbarAfterInit: false
		});
		editors.push(e);
					
		e.on("showSource", function() {
			alert(e.getValue(true));
		});
					
	});
})();
(function() {
	var bouton = document.getElementById('bouton'),
		form_img = document.getElementById('form_img'),
		contenu = document.getElementById('contenu_i'),
		editeur = document.getElementById('editeur'),
		valRemplace;
	bouton.addEventListener('click', function(){
		valRemplace = editeur.innerHTML;
		contenu.value = valRemplace.replace(/'/g, 'IapostI');
		recupereImage();
		form_img.submit();
	},true);
	
})();

	(function() {
				var confirmer = document.getElementById('b_img_valider'),
					form_img = document.getElementById('form_img'),
					contenu = document.getElementById('contenu_i'),
					ok = document.getElementById('OK'),
					editeur = document.getElementById('editeur'),
					valRemplace;
				confirmer.addEventListener('click', function(){
					ok.click();
					valRemplace = editeur.innerHTML;
					contenu.value = valRemplace.replace(/'/g, 'IapostI');
					setTimeout( function(){
						recupereImage();
						form_img.submit();
						}, 600);
				},true);
	})();
	
	function recupereImage() {
		var recepteur = document.getElementById('recepteur'),
			imgs = document.querySelectorAll('#editeur img');
			inptl = document.createElement('input'),
			nbimg = imgs.length;
			
			inptl.type="hidden";
			inptl.name = "Imlenth";
			inptl.value = nbimg;
			recepteur.appendChild(inptl);
			
		function creationNom(nom)
		{
			inp.type="hidden";
			inp.name = nom;
		}
		function recupVal(valeur)
		{
			var valTab = valeur.split('/'),
				valLength = valTab.length;
				
			inp.value = valTab[valLength-1];
		}
		
		for(i=0 ; i < nbimg ; i++ )
		{
			var inp = document.createElement('input');
			creationNom('image'+(i+1));
			recupVal(imgs[i].src);
			recepteur.appendChild(inp);
		}
		
	};
	
	(function() {
				var Modifier = document.getElementById('Modif'),
					Voir = document.getElementById('Voir'),
					tools = document.getElementById('tools'),
					corps = document.getElementById('corps'),
					editeur = document.getElementById('editeur'),
					bouton = document.getElementById('bouton');
				Modifier.addEventListener('click', function(){
					Modifier.className="active";
					Voir.className="";
					tools.style.display="block";
					corps.className="panel-body ewrapper";
					editeur.className="editable";
					bouton.style.display="block";
					editeur.contentEditable="true"
				},true);
				Voir.addEventListener('click', function(){
					Voir.className="active";
					Modifier.className="";
					tools.style.display="none";
					corps.className="panel-body";
					bouton.style.display="none";
					editeur.contentEditable="false"
					
					
				},true);
	})();
