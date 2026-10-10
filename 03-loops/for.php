<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form  method="post" action ="for.php">
        <label>Enter a number to count to:</label><br>
        <input type="text" name="determinant"><br><br>
        <input type="submit" value="count">
    </form> -->
      <form  method="post" action ="for.php">
        <label>Enter a number to count down from:</label><br>
        <input type="text" name="determinant"><br><br>
        <input type="submit" value="count">
    </form>
</body>
</html>
<!-- <?php
    $counter = $_POST["determinant"];
    for ($i = 0; $i <= $counter; $i++) {
        echo $i . "<br>";
    }
?> -->
<?php
    $counter = $_POST["determinant"];
    for ($i = $counter; $i > 0 ; $i--) {
        echo $i . "<br>";
    }
?>