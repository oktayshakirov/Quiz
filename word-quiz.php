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
<div class="typing">Your current Quiz is about: <wbr>Spelling &#9997</div>
</td>
</tr>
</table> 
<br> 

<!-- Word Quiz -->
<table border="1px solid black" align="center">
<tr>
<td>
<center><img src="images/spelling.gif" alt="Color" width="200" height="200"  > </center>
</td>
</tr>
<tr>	
<td>
<p>Spell the word "computer" backwards correctly. Write your answer in the form bellow and click "Done".</p>
</td>
</tr>
<tr>	
<td>
<center><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="word">
<input class="shadow__btn" type="submit" name="submit" value="Done"></center>
</form>
<?php
if (isset($_POST['submit'])) {
$word = $_POST['word'];
$correct_word = 'retupmoc';
if ($word === $correct_word) {
echo '<br>';
echo 'The word is correct!';
} 
 // Redirect to next quiz if the answer is correct
 if ($word === $correct_word) {
    echo "<p>Going to the next Quiz in <span id='countdown'>6</span> seconds ...</p>";
    echo "<script>
            let count = 6;
            const countdown = setInterval(() => {
              count--;
              document.getElementById('countdown').textContent = count;
              if (count === 0) {
                clearInterval(countdown);
                window.location.href = 'math.php';
              }
            }, 1000);
          </script>";
  }
  else {
echo '<center>The word is incorrect!</center>';
}
}
?>
</td>
</tr>
</table>

<br>
<!-- Buttons -->
<center>
<a href="color-mixing.php" class="shadow__btn">Previous</a>
<a href="Index.php" class="shadow__btn">Home</a>
<a href="math.php" class="shadow__btn">Next</a>
</center>

<!-- Pages -->
<center>
<h1>Quiz 3/8</h1>
</center>

</body>
</html>