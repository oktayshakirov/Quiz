<!DOCTYPE html>
<html>
<head>
<title>Logic Quiz</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>

<!-- Header -->
<table border="1px solid black" align="center">
<tr>
<td>
<img src="images/quiz.png" alt="quiz" width="200px" height="70px" align="left">
<h3 align="right">You are currently playing: Logic Quiz &#129488</h3>
</td>
</tr>
</table> 
<br> 


<!-- Quiz with Radio Buttons -->
<table border="1px solid black" align="center">
<tr>
<td>
<center><img src="images/logic.gif" alt="World" width="200" height="200"></center>
</td>
</tr>
<tr>	
<td>
<p>Test your logical thinking by solving the quiz bellow.</p>
</td>
</tr>
<tr>
<form method="post">
<tr>	
<td>
<center> 
<form action="quiz.php" method="post">
<h3>Question 1</h3>
Does a cat have more legs than a bicycle??
<br>
Yes <input type="range" min="0" max="1" name="question1" step="0"> No
<br><br>

<h3>Question 2</h3>
Pick the right answer
<br>
Right <input type="range" min="0" max="1" name="question2" step="1"> Left
<br><br>

<h3>Question 3</h3>
Did you enjoy this Quiz?
<br><br>
<input type="checkbox" name="question3">No
<br><br><br>

<input class="shadow__btn" type="submit" value="Submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = isset($_POST["question3"]) ? 1 : 0;

$score = 0;
if ($question1 == 0) {
$score++;
}
if ($question2 == 0) {
$score++;
}
if ($question3 == 1) {
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
<a href="geography.php" class="shadow__btn">Previous</a>
<a href="index.php" class="shadow__btn">Home</a>
<a href="music.php" class="shadow__btn">Next</a>
</center>

<!-- Pages -->
<center>
<h1>Quiz 6/8</h1>
</center>

</body>
</html>