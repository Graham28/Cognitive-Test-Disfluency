<?php  
    session_start();
    $_SESSION['font'] = $_POST["font"];

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

<body>
  <h1>Ducks</h1>
  <div id="reading">
  <p>The Anaheim Ducks are a professional ice hockey team based in Anaheim, California. They are members of the Pacific Division of the Western Conferenceof the National Hockey League (NHL). Since their inception, the Ducks have played their home games at the Honda Center (formerly The Arrowhead Pond of Anaheim). The club was founded in 1993 by The Walt Disney Company.</p>
  <p>The official mascot for the Anaheim Ducks is an anthropomorphized duck by the name of Wild Wing. He has been the team's mascot since its inaugural season, and his name was chosen through fan voting. He wears a Ducks jersey with the number 93 on the back, referring to the year the Ducks became an NHL team. He regularly descends from the rafters of the arena when making his in-game entrances. In one such descent the rigging that lowered Wild Wing from the rafters malfunctioned leaving the mascot trapped fifty feet above the ice for several minutes.</p>
  <p>The Ducks have two rivalries with two teams out of geographical proximity. The Freeway Face-Off with the Los Angeles Kings as both teams arenas are accessible via Interstate 5 in California and the fact that both teams are within the greater Los Angeles metropolitan area. The Ducks also have a rivalry with the San Jose Sharks. Despite the arenas being six hours away from each other, the teams have developed a strong rivalry, primarily from the 2009 and 2018 Stanley Cup playoffs. The Ducks won the series in 2009, but the Sharks came back in 2018.</p>
</div>

<!-- Count Down Clock -->
<p id="clock"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date();
countDownDate.setSeconds(countDownDate.getSeconds() + 60);

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
    window.location = '/study-1/wait.php';
  }
}, 1000);
</script>

    <!-- Submit -->
    <form id="start" action="/study-1/wait.php">
    
    <button id="start-button" style="vertical-align:middle"><span>Finish </span></button> 
  </form>

</body>
</html>