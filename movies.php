<!DOCTYPE html>
<html>
<head>
<title>Bilder Quiz</title>
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
<div class="typing">Your current Quiz is about: <wbr>Movies &#127909</div>
</td>
</tr>
</table> 
<br> 

<!-- Quiz with Radio Buttons -->
<table border="1px solid black" align="center">
<tr>
<td>
<center><img src="images/movies.gif" alt="movies" width="200" height="200"></center>
</td>
</tr>
<tr>	
<td>
<p>In which movie did Leonardo DiCaprio win his first Academy Award?</p>
</td>
</tr>
<tr>
<form method="post">
<tr>	
<td>
<label>
<input type="radio" name="antwort_gruppe" value="Wrong">Titanic
</label>
</td>
</tr>
<tr>	
<td>
<label>
<input type="radio" name="antwort_gruppe" value="Wrong">The Wolf of Wall Street
</label>
</td>
</tr>
<tr>	
<td>
<label>
<input type="radio" name="antwort_gruppe" value="Wrong">Inception
</label>
</td>
</tr>
<tr>	
<td>
<label>
<input type="radio" name="antwort_gruppe" value="Right">The Revenant
</label>
</td>
</tr>
<tr>	
<td>
<center><input class="shadow__btn" type="submit" value="Submit"></center>
</td>
</tr>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<tr>";
echo "<td>";
$inhalt = $_POST;
if (array_key_exists('antwort_gruppe',$inhalt)){
echo "<p>Your answer is ". $inhalt['antwort_gruppe'] . "</p>";
}else{
echo "<p><center>Pick Answer</center></p>";
}
echo "</td>";
echo "</tr>";
}
?>
</table>

<br>
<!-- Buttons -->
<center>
<a href="music.php" class="shadow__btn">Previous</a>
<a href="index.php" class="shadow__btn">Home</a>

</center>

<center>
<h1>Quiz 8/8</h1>
</center>

</body>
</html>