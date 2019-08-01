function previewImage() {
	document.getElementById("pic-preview").style.display = "block";
	var reader = new FileReader();
	reader.readAsDataURL(document.getElementById("photo").files[0]);
	reader.onload = function(event) {
		document.getElementById("pic-preview").src = event.target.result;
	};
};