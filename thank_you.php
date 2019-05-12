<?php 
    session_start();
    //SET UP CONNECTION VARIABLE(SERVER,DB USER, PASSWD, DB)
    $conn = mysqli_connect("localhost","graham28_user", "keithissexy", "graham28_app");

    
    $user_gender = mysqli_real_escape_string($conn, stripcslashes($_SESSION['user_gender']));
    $user_age = mysqli_real_escape_string($conn, stripcslashes($_SESSION['user_age']));
    $population = mysqli_real_escape_string($conn, stripcslashes($_SESSION["population"]));
    $diet = mysqli_real_escape_string($conn, stripcslashes($_SESSION["diet"]));
    $house = mysqli_real_escape_string($conn, stripcslashes($_SESSION["house"]));
    $best = mysqli_real_escape_string($conn, stripcslashes($_SESSION["best"]));
    $woo = mysqli_real_escape_string($conn, stripcslashes($_SESSION["woo"]));
    $job = mysqli_real_escape_string($conn, stripcslashes($_SESSION["job"]));
    $age = mysqli_real_escape_string($conn, stripcslashes($_SESSION["age"]));
    $male_height = mysqli_real_escape_string($conn, stripcslashes($_SESSION["male_height"]));
    $village = mysqli_real_escape_string($conn, stripcslashes($_SESSION["village"]));
    $wife = mysqli_real_escape_string($conn, stripcslashes($_SESSION["wife"]));
    $kids = mysqli_real_escape_string($conn, stripcslashes($_SESSION["kids"]));
    $life = mysqli_real_escape_string($conn, stripcslashes($_SESSION["life"]));
    $guess = mysqli_real_escape_string($conn, stripcslashes($_POST['guess']));
    $font = mysqli_real_escape_string($conn, stripcslashes($_SESSION['font']));


        // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO hummus_table (user_gender, user_age, population, diet, house, best, woo, job, age, male_height, village, wife, kids, life, guess, font)
    VALUES ('$user_gender', '$user_age', '$population', '$diet', '$house', '$best', '$woo', '$job', '$age', '$male_height', '$village', '$wife', '$kids', '$life', '$guess', '$font')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    session_destroy();


  ?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Thank You</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="/study-1/hummus.css">

</head>

<body>
  
  <h1>Thank you!</h1>
  <div id="thanks">
    <p>
      <b>Project Title:</b> What impact does the ‘disfluency effect’ have on active memory?<br><br>
      <b>Student Researcher:</b> Keith McKeown<br><br>
      <b>Study Number:</b> STU61438<br><br>
      <b>Email:</b> stu61438@ardenuniversity.ac.uk<br><br>

    </p>
    <h3>Purpose of this study</h3>
    <p>You have been asked to participate in a research study about the ‘disfluency effect’. The study aims to reveal data which supports recent findings. Thank you for your participation in this study.</p><br>
    <h3>Background Information</h3>
    <p>Recent research into the ‘disfluency effect’ (Diemand-Yauman et al. 2010; Eitel et al. 2014; French et al. 2013; Sungkhasettee et al. 2011) has shown that harder-to-read texts can lead to better memory retention.
        To test whether disfluency based interventions could improve short-term memory retention, the participants read the Troll passage presented in either easy (fluent) or challenging (disfluent) fonts. The Duck’s passage was a one minute distraction.
The questions answered correctly will be examined to determine whether there is a significant difference in results between Group A, who was presented with easy text, and Group B, who was presented with challenging text.</p><br>
    <h3>References</h3>
    <p>You have been asked to participate in a research study about the ‘disfluency effect’. The study aims to reveal data which supports recent findings. Thank you for your participation in this study.</p>
    <p>Diemand-Yauman, C., Oppenheimer, D. M., & Vaughan, E. B. (2011). Fortune favors the bold (and the italicized): effects of disfluency on educational outcomes. Cognition, 118, 111–115. </p>
    <p>Eitel, A., Kühl, T., Scheiter, K., & Gerjets, P. (2014). Disfluency meets cognitive load in multimedia learning: does harder-to-read mean better-to-understand? Applied Cognitive Psychology, 28, 488–501.</p>
    <p>French, M. M. J., Blood, A., Bright, N. D., Futak, D., Grohmann, M. J., Hasthorpe, A., Heritage, J., Poland, R. L., Reece, S., & Tabor, J. (2013). Changing fonts in education: how the benefits vary with ability and dyslexia. The Journal of Educational Research, 106, 301–304. </p>
    <p>Sungkhasettee, V. W., Friedman, M. C., & Castel, A. D. (2011). Memory and metamemory for inverted words: illusions of competency and desirable difficulties. Psychonomic Bulletin and Review, 18, 973–978.</p>
  </div>
</body>
</html>