<!DOCTYPE html>
<html>
<head>    
<title>QUIZ</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-icon" href="images/favicon.png">
</head> 
<body>
<form method="get" action="quiz.php"></form>
<table>

<!-- Header -->
<table border="1px solid black" align="center">
<tr>
<td>
<img src="images/quiz.png" alt="quiz" width="200px" height="70px" align="left">
<!-- Typing Text Effect -->
</td>
<td>
<div class="typing">Pick a random Quiz and Play &#128293</div>
</td>
</tr>
</table> 
<br> 

<!-- Row 1 -->
<!-- Images -->    
<table border="1px solid black" align="center">
<tr>
<td>
<img src="images/earth.png" alt="earth" width="200" height="200" class="img_index" > 
</td>
<td>
<img src="images/colors.png" alt="colors" width="200" height="200" class="img_index" > 
</td>
<td>
<img src="images/spelling.png" alt="spelling" width="200" height="200" class="img_index" > 
</td>
</tr>

<!-- Descriptions -->
<tr>
<td>
<center><p>Quiz about the Earth</p></center>
</td>
<td>
<center> <p>Mix 2 Colors </p> </center>
</td>
<td>
<center> <p>Spell the word backwards</p> </center>
</td>
</tr>

<!-- Buttons -->
<tr>
<td>
<center>
<form action="world-quiz.php">
<input class="shadow__btn" type="submit" value="Start Quiz">
</form>
</button>
</center>
</td>
<td>
<center>
<form action="color-mixing.php">
<input class="shadow__btn" type="submit" value="Start Quiz">
</form>
</button>
</center>
</td>
<td>
<center>
<form action="word-quiz.php">
<input class="shadow__btn" type="submit" value="Start Quiz">
</form>
</button>
</center>
</td>
</tr>

<!-- Row 2 -->
<!-- Images -->    
<tr>
<td>
<img src="images/math.png" alt="math" width="200" height="200" class="img_index" > 
</td>
<td>
<img src="images/maps.png" alt="maps" width="200" height="200" class="img_index" > 
</td>
<td>
<img src="images/brain.jpg" alt="logic" width="200" height="200" class="img_index" > 
</td>
</tr>

<!-- Descriptions -->
<tr>
<td>
<center><p>Answer Math Questions</p></center>
</td>
<td>
<center> <p>World Capitals Quiz</p> </center>
</td>
<td>
<center> <p>Test your Logic</p> </center>
</td>
</tr>

<!-- Buttons -->
<tr>
<td>
<center>
<form action="math.php" >
<input class="shadow__btn" type="submit" value="Start Quiz">
</form>
</button>
</center>
</td>
<td>
<center>
<form action="geography.php">
<input class="shadow__btn" type="submit" value="Start Quiz">
</form>
</button>
</center>
</td>
<td>
<center>
<form action="logic.php">
<input class="shadow__btn" type="submit" value="Start Quiz">
</form>
</button>
</center>

<!-- Row 3 -->
<!-- Images -->    
<tr>
<td>
<img src="images/music.png" alt="music" width="200" height="200" class="img_index" > 
</td>
<td>
<img src="images/movies.png" alt="movies" width="200" height="200" class="img_index" > 
</td>
<td>
<img src="images/random.png" alt="logic" width="200" height="200" class="img_index" > 
</td>
</tr>

<!-- Descriptions -->
<tr>
<td>
<center><p>Quiz about Music</p></center>
</td>
<td>
<center> <p>Cinema Quiz</p> </center>
</td>
<td>
<center> <p>Pick a random Quiz</p> </center>
</td>
</tr>

<!-- Buttons -->
<tr>
<td>
<center>
<form action="music.php" >
<input class="shadow__btn" type="submit" value="Start Quiz">
</form>
</button>
</center>
</td>
<td>
<center>
<form action="movies.php">
<input class="shadow__btn" type="submit" value="Start Quiz">
</form>
</button>
</center>
</td>
<!-- Random Quiz Generator -->
<td>
<center>
<form action="<?php echo $random_quiz_url; ?>">
<input class="shadow__btn" type="submit" value="Random Quiz">
<?php
$quiz_urls = [
    "color-mixing.php",
    "geography.php",
    "logic.php",
    "math.php",
    "word-quiz.php",
    "world-quiz.php",
    "movies.php",
    "music.php",
];
$random_index = array_rand($quiz_urls);
$random_quiz_url = $quiz_urls[$random_index];
?>
</form>
</center>
</td>
</tr>
</table>
</td>
</tr>
</table>
<br>

<!-- Footer -->
<table border="1px solid black" align="center">
<tr>
<td>
<center><p>You can find the code for this project at <a href="https://github.com/oktayshakirov/quiz">
<img src="images/github.png" alt="github" width="100px" height="20px"></a></p>
<center><p>Check out <a href="https://oktayshakirov.github.io/portfolio/">my portfolio</a> to see more things i builded. </p>
</center>
</center>
</td>
</tr>
</table> 

</body>
</html>