function fontDecider() {
	var font;
	if (randomDecider()){
  		document.getElementById("hummus").style.fontFamily ='verdana';
  		font = "easy";

  	}

  	else {
  		document.getElementById("hummus").style.fontFamily ='Bonbon';
  		font = "hard";
  	}

  	console.log(font)
  	}


function randomDecider(){
	num = Math.random();
	if (num > 0.5) {
		return true;
	}

	else {
		return false;
	}
}