<?php  
    session_start();
    $_SESSION['user_gender'] = $_POST["user_gender"];
    $_SESSION['user_age'] = $_POST["user_age"];

?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Reading Test</title>
  <meta name="description" content="Memorisation Study">
  <meta name="author" content="McKeown Research">

  <link rel="stylesheet" href="/study-1/hummus.css">
  <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
  <script type="text/javascript" src="/study-1/functions.js"></script>

</head>

<!-- Loads Easy/Hard font -->
<body onload="fontDecider()">
  <h1>Hummus the troll</h1>
  <div id="reading">
  <p>Hummus is a Troll who lives in a small troll village named Trolgia, located in Nice, France. He is 16 years old, which is quite old for a troll, as their life expectancy is 19 years. Trolls are small creatures who live in an almost perpetual state of happiness, singing, dancing and hugging most of the day. Hummus is the best singer in his village. As a child, Hummus loved to play hopscotch with his friends. His wife, Carrot, is the best dancer in the village. She is 12 years old. They have four children together. Hummus is the sole accountant in his village. He helps his fellow trolls keep track of and budget their Trollars. </p>
  <p>Altogether, there are 26,000 trolls in France. A troll village consists of no more than 100 trolls. Each troll village has their own king and queen. Every 31st of October, trolls celebrate Trolloween. Male trolls are, on average, 3’2 tall, while female trolls are 2’9 tall. Male trolls woo female trolls by giving them daffodils. Trolls are nocturnal creatures that live in burrows. They are herbivores, with their diets consisting of red rose petals, blue raspberries, oranges, and green apples.
  </p>
</div>

<!-- Count Down Clock -->
<p id="clock"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date();
countDownDate.setSeconds(countDownDate.getSeconds() + 150);

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down time
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("clock").innerHTML = minutes + "m " + seconds + "s ";
    
  // If the count down is over
  //Remove Reading Text and Display EXPIRED
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("clock").innerHTML = "EXPIRED";
    document.getElementById("reading").innerHTML = "";
  }
}, 1000);
</script>

    <!-- Submit -->
    <form id="start" action="/study-1/ducks.php" method="post">
        
    <input type="text" style="display:none" name="font" id="hiddenVal" />
    
    <button id="start-button" style="vertical-align:middle"><span>Finish </span></button> 
  </form>

</body>
</html>