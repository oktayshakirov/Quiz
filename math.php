<!DOCTYPE html>
<html>
<head>
<title>Math Quiz</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>

<!-- Header -->
<table border="1px solid black" align="center">
<tr>
<td>
<img src="images/quiz.png" alt="quiz" width="200px" height="70px" align="left">
<h3 align="right">You are currently playing: Math Quiz &#10135</h3>
</td>
</tr>
</table> 
<br> 


<!-- Quiz with Radio Buttons -->
<table border="1px solid black" align="center">
<tr>
<td>
<center><img src="images/brain.gif" alt="World" width="200" height="200"></center>
</td>
</tr>
<tr>	
<td>
<p>Solve the following math questions and press submit to check how many you did correctly.</p>
</td>
</tr>
<tr>
<form method="post">
<tr>	
<td>
<center> 
<?php
$questions = [
["What number follows 15?", ["16"]],
["How much is 5 x 5?", ["25"]],
["How much is 39 + 12", ["51"]],
];
$number_of_questions = count($questions);
$score = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
for ($i = 0; $i < $number_of_questions; $i++) {
$answer = $_POST["answer" . $i];
if ($answer == implode(",", $questions[$i][1])) {
$score++;
}
}
echo "<p>You got " . $score . " out of " . $number_of_questions . " correct!</p>";
} else {
?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<?php 
for ($i = 0; $i < $number_of_questions; $i++) {
echo "<p>" . $questions[$i][0] . "</p>";
echo "<input type='text' name='answer" . $i . "'>";
}
?>
<br>
<br>
<br>
<input class="shadow__btn" type="submit" value="Submit">
</form>
<?php
}
?>
</center> 
</table>


<br>
<!-- Buttons -->
<center>
<a href="word-quiz.php" class="shadow__btn">Previous</a>
<a href="index.php" class="shadow__btn">Home</a>
<a href="geography.php" class="shadow__btn">Next</a>
</center>

<!-- Pages -->
<center>
<h1>Quiz 4/8</h1>
</center>

</body>
</html>