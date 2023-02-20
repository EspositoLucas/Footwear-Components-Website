var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

var inputFile = document.getElementById("output");
removeImg=()=>{
   inputFile.src="http://placehold.it/180"; 
   inputFile.value=""; 
}