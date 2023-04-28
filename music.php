<!DOCTYPE html>
<html>
<head>
<title>Geography Quiz</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>

<!-- Header -->
<table border="1px solid black" align="center">
<tr>
<td>
<img src="images/quiz.png" alt="quiz" width="200px" height="70px" align="left">
</td>
<td>
<div class="typing">Your current Quiz is about: <wbr>Music &#127911</div>
</td>
</tr>
</table> 
<br> 


<!-- Quiz with Radio Buttons -->
<table border="1px solid black" align="center">
<tr>
<td>
<center><img src="images/music.gif" alt="music" width="200" height="200"></center>
</td>
</tr>
<tr>	
<td>
<p>Answer the following music related Questions. Pick the right answers and press submit.</p>
</td>
</tr>
<tr>
<form method="post">
<tr>	
<td>
<center> 
<form action="quiz.php" method="post">
<h3>Queen</h3>
Who is the lead vocalist of the band Queen?
<br>
<br>
<select name="question1">
<option value="">Pick your Answer</option>
<option value="FreddieMercury">Freddie Mercury</option>
<option value="PaulMcCartney">Paul McCartney</option>
<option value="MickJagger">Mick Jagger</option>
<option value="DavidBowie">David Bowie</option>
</select>
<br>
<h3>Pop Music</h3>
Who is known as the "King of Pop"?
<br><br>
<select name="question2">
<option value="">Pick your Answer</option>
<option value="FrankSinatra">Frank Sinatra</option>
<option value="ElvisPresley">Elvis Presley</option>
<option value="MichaelJackson">Michael Jackson</option>
<option value="JohnLennon">John Lennon</option>
</select>
<br>
<h3>Sampling</h3>
What genre of music is known for its use of turntables and samples?
<br><br>
<select name="question3">
<option value="">Pick your Answer</option>
<option value="Country"> Country</option>
<option value="Hiphop">Hip Hop</option>
<option value="HeavyMetal">Heavy metal</option>
<option value="Classical">Classical</option>
</select>
<br><br><br>
<input class="shadow__btn" type="submit" value="Submit">
</form>


<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];

    $score = 0;
    if ($question1 == "FreddieMercury") {
      $score++;
    }
    if ($question2 == "MichaelJackson") {
      $score++;
    }
    if ($question3 == "Hiphop") {
      $score++;
    }

    echo "<br><br>You got " . $score . " out of 3 correct!";
    // Redirect to next quiz if the answer is correct
    if ($score == 3) {
      echo "<p>Going to the next Quiz in <span id='countdown'>6</span> seconds ...</p>";
      echo "<script>
              let count = 6;
              const countdown = setInterval(() => {
                count--;
                document.getElementById('countdown').textContent = count;
                if (count === 0) {
                  clearInterval(countdown);
                  window.location.href = 'movies.php';
                }
              }, 1000);
            </script>";
    }
  }
?>
</center> 
</table>


<br>
<!-- Buttons -->
<center>
<a href="logic.php" class="shadow__btn">Previous</a>
<a href="index.php" class="shadow__btn">Home</a>
<a href="movies.php" class="shadow__btn">Next</a>
</center>

<!-- Pages -->
<center>
<h1>Quiz 7/8</h1>
</center>

</body>
</html>