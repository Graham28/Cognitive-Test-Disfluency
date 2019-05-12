//Functions

//Automatically disable Start Button 
//User can't proceed without agreeing to consent form
 function disableStart() {
  document.getElementById("start-button").disabled = true;
  document.getElementById("start-button").style.backgroundColor = "#008000";
 }
 
 //Reactivate Start Button
 //Button reactivates once user has checked box to give consent
 function activateButton(element) {

      if(element.checked) {
        document.getElementById("start-button").disabled = false;
        document.getElementById("start-button").style.backgroundColor = "#00cc00";
       }
       else  {
        document.getElementById("start-button").disabled = true;
        document.getElementById("start-button").style.backgroundColor = "#008000";
      }

  }
  

//Coin flip function
//Returns True 50% of the time
//Returns False 50% of the time
function randomDecider(){
	num = Math.random();
	if (num > 0.5) {
		return true;
	}

	else {
		return false;
	}
}


//Uses randomDecider function to decide the font
//Enters the difficulty of the font in a hidden input in reading_test.php
function fontDecider() {
	var font;
	if (randomDecider()){
  		document.getElementById("reading").style.fontStyle ='verdana';
  		font = "easy";

  	}

  	else {
  		document.getElementById("reading").style.fontFamily ='Charm', 'cursive';
      document.getElementById("reading").style.fontWeight =200;
  		font = "hard";
  	}

  	document.getElementById("hiddenVal").value = font;
  	}