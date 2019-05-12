<?php
    session_start();
    
    //Save form submissions as a session cookie
    
    $_SESSION['population'] = $_POST["population"];
    $_SESSION['diet'] = $_POST["diet"];
    $_SESSION['house'] = $_POST["house"];
    $_SESSION['best'] = $_POST["best"];
    $_SESSION['woo'] = $_POST["woo"];
    $_SESSION['job'] = $_POST["job"];
    $_SESSION['age'] = $_POST["age"];
    $_SESSION['male_height'] = $_POST["male_height"];
    $_SESSION['village'] = $_POST["village"];
    $_SESSION['wife'] = $_POST["wife"];
    $_SESSION['kids'] = $_POST["kids"];
    $_SESSION['life'] = $_POST["life"];

?>


<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Quick guess..</title>
  <meta name="description" content="Memorisation Study">
  <meta name="author" content="McKeown Research">
  <script type="text/javascript" src="/study-1/functions.js"></script>

  <link rel="stylesheet" href="/study-1/hummus.css">

</head>

<body>
  <h1>Quick guess..</h1>
  <!-- User guesses how many answers the got correct -->
  <form id="start" action="/study-1/thank_you.php" method="post">
    
    <div id = "hummus">
    How many questions do you think you got correct? <br><br>
    <input type="radio" name="guess" value="0" checked> 0 
    <input type="radio" name="guess" value="1"> 1
    <input type="radio" name="guess" value="2"> 2
    <input type="radio" name="guess" value="3"> 3
    <input type="radio" name="guess" value="4"> 4
    <input type="radio" name="guess" value="5"> 5
    <input type="radio" name="guess" value="6"> 6
    <input type="radio" name="guess" value="7"> 7
    <input type="radio" name="guess" value="8"> 8
    <input type="radio" name="guess" value="9"> 9
    <input type="radio" name="guess" value="10"> 10
    <input type="radio" name="guess" value="11"> 11
    <input type="radio" name="guess" value="12"> 12<br><br>
    <button id="start-button" style="vertical-align:middle"><span>Finish </span></button> 
  </div>

  </form>
</body>
</html>