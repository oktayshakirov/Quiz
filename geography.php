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
<div class="typing">Your current Quiz is about: <wbr>Capital Cities &#128509</div>
</td>
</tr>
</table> 
<br> 


<!-- Quiz with Radio Buttons -->
<table border="1px solid black" align="center">
<tr>
<td>
<center><img src="images/map.gif" alt="World" width="200" height="200"></center>
</td>
</tr>
<tr>	
<td>
<p>What are the capital cities of the following countries ? Pick the right answers and press submit.</p>
</td>
</tr>
<tr>
<form method="post">
<tr>	
<td>
<center> 
<form action="quiz.php" method="post">
<h3>France</h3>
What is the capital of France?
<br>
<br>
<select name="question1">
<option value="">Select a city</option>
<option value="Paris">Paris</option>
<option value="London">London</option>
<option value="Berlin">Berlin</option>
<option value="Vienna">Vienna</option>
<option value="Oslo">Oslo</option>
<option value="Hamburg">Hamburg</option>
</select>
<br>
<h3>Spain</h3>
What is the capital of Spain?
<br><br>
<select name="question2">
<option value="">Select a city</option>
<option value="Lisbon">Lisbon</option>
<option value="Barcelona">Barcelona</option>
<option value="Madrid">Madrid</option>
<option value="Rome">Rome</option>
<option value="Valencia">Valencia</option>
<option value="Frankfurt">Frankfurt</option>
</select>
<br>
<h3>Bulgaria</h3>
What is the capital of Bulgaria?
<br><br>
<select name="question3">
<option value="">Select a city</option>
<option value="Sofia">Sofia</option>
<option value="Bucharest">Bucharest</option>
<option value="Belgrade">Belgrade</option>
<option value="Istanbul">Istanbul</option>
<option value="Varna">Varna</option>
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
    if ($question1 == "Paris") {
      $score++;
    }
    if ($question2 == "Madrid") {
      $score++;
    }
    if ($question3 == "Sofia") {
      $score++;
    }

    echo "You got " . $score . " out of 3 correct!";
  }
?>
</center> 
</table>


<br>
<!-- Buttons -->
<center>
<a href="math.php" class="shadow__btn">Previous</a>
<a href="index.php" class="shadow__btn">Home</a>
<a href="logic.php" class="shadow__btn">Next</a>
</center>

<!-- Pages -->
<center>
<h1>Quiz 5/8</h1>
</center>

</body>
</html>