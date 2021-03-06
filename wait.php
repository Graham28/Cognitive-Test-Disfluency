<?php  
    session_start();
    $_SESSION['font'] = $_POST["font"];

?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Wait</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="/study-1/hummus.css">

</head>

<body>
  <h1>Please wait...</h1>
  <p id="hummus">Thanks for your patience. It's for science.</p>
  <p id="wait_clock"></p>
  <script>
// Set the date we're counting down to
var countDownDate = new Date();
countDownDate.setSeconds(countDownDate.getSeconds() + 60);

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  
  // If the count down is over, write some text 
  if (distance <= 0) {
    clearInterval(x);
    window.location = '/study-1/questions.html';
  }
  else {
  	// Output the result in an element with id="demo"
  document.getElementById("wait_clock").innerHTML = seconds + "s ";
    
  }
}, 1000);
</script>
</body>
</html>