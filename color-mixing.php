<!DOCTYPE html>
<html>
<head>
<title>Bilder Quiz</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>


<!-- Header -->
<table border="1px solid black" align="center">
<tr>
<td>
<img src="images/quiz.png" alt="quiz" width="200px" height="70px" align="left">
<h3 align="right">You are currently playing: Color Mixing &#10024</h3>
</td>
</tr>
</table> 
<br> 

<!-- Quiz with multiple choices -->
<table border="1px solid black" align="center">
<tr>
<td>
<center><img src="images/colormix.gif" alt="Color" width="200" height="200"  > </center>
</td>
</tr>
<tr>	
<td>
<p>How do you mix Green Color? Pick 2 Colors from the options bellow and press the "Mix Color" button.</p>
</td>
</tr>
<tr>
<form method="post">
<td>
<label>
<input type="checkbox" name="Color[]" value="Wrong">Red
</label>
</td>
</tr>
<tr>
<td>
<label>
<input type="checkbox" name="Color[]" value="Right">Yellow
</label>
</td>
</tr>
<tr>
<td>
<label>
<input type="checkbox" name="Color[]" value="Right">Blue
</label>
</td>
</tr>
<tr>
<td>
<label>
<input type="checkbox" name="Color[]" value="Wrong">Black
</label>
</td>
</tr>
<tr>
<td>
<center><input class="shadow__btn" type="submit" value="Mix Color"></center>
</td>
</tr>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<tr>";
echo "<td>";
$inhalt = $_POST;
if (array_key_exists('Color',$inhalt)){
$num_right = 0;
$colors = $inhalt['Color'];
foreach ($colors as $color) {
if ($color == "Right") {
$num_right++;
}
}
if ($num_right == 2) {
echo "<p>Your answer is correct!</p>";
} else {
echo "<p>Your answer is incorrect!</p>";
}
} else {
echo "<p><center>Pick Answer</center></p>";
}
echo "</td>";
echo "</tr>";
}
?>
</tr>
</table>

<br>
<!-- Buttons -->
<center>
<a href="world-quiz.php" class="shadow__btn">Previous</a>
<a href="index.php" class="shadow__btn">Home</a>
<a href="word-quiz.php" class="shadow__btn">Next</a>
</center>

<!-- Pages -->
<center>
<h1>Quiz 2/8</h1>
</center>

</body>
</html>