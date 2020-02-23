function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$("#image-profile").attr("src", e.target.result);
			$("#image-profile").css("background-image", e.target.result);
			
			var file = document.getElementById("file").files[0];
			   var reader = new FileReader();
			   reader.onloadend = function(){
			      document.getElementById("image-profile").style.backgroundImage = "url(" + reader.result + ")";        
			   };
			   
			   if(file){
			      reader.readAsDataURL(file);
			    }else{
			    }
		};

		reader.readAsDataURL(input.files[0]);

	}
}

function preview_image(event){
	var reader = new FileReader();
	reader.onload = function()
	{
		var output = document.getElementById('image-profile');
		output.src = reader.result;
	};
		reader.readAsDataURL(event.target.files[0]);
}
