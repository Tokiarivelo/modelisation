(function() {
				function createThumbnail(file) {
					var reader = new FileReader();
					reader.onload = function() {
						var imgElement = document.getElementById("f_img");
						imgElement.style.width = '100%';
						imgElement.style.height = '100%';
						imgElement.src = this.result;
						
					};
					reader.readAsDataURL(file);
				};
				var allowedTypes = ['png', 'jpg', 'jpeg', 'gif'],
					fileInput = document.querySelector('#parcourir'),
					prev = document.querySelector('#prev'),
					chemin = document.getElementById('chemin_img');
				fileInput.onchange = function() {
					var files = this.files,
						filesLen = files.length,
						imgType;
					for (var i = 0 ; i < filesLen ; i++) {
						imgType = files[i].name.split('.');
						imgType = imgType[imgType.length - 1];
						if(allowedTypes.indexOf(imgType) != -1) {
							createThumbnail(files[i]);
							chemin.value = "http://localhost/Modelisation/vue/images/"+fileInput.files[i].name;
						}
					}
				};
	
})();