<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grading system</title>
</head>
<body>
<form action="index.php" method="post">
  <label>score:</label><br>
  <input type="text" name="score"><br><br>
  <input type="submit" value="grade"><br>
</form>  
</body>
</html>
<?php
#grading system
    $x = $_POST["score"];

    if ($x >= 70){
      echo "<br> GRADE A = DISTINCTION";
    }
    elseif ($x >= 60){
      echo "<br> GRADE B = GOOD";
    }
    elseif ($x >= 50){
      echo "<br> GRADE C = AVERAGE";
    }
    elseif ($x >= 40){
      echo "<br> GRADE D = PASS";
    }
    else{
      echo "<br>GRADE F = SUPPLEMENTARY";
    }
?>