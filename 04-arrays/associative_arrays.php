<!-- <?php 
$results = array(
    "John" => 86,
    "Mary" => 77,
    "Prudence" => 36,
    "Theon" => 21,
    "Bran" => 78,
    "Ned" => 90,
    "Rob" => 88,
    "Sansa" => 62,
    "Dany" => 70,
    "Tyrion" => 56,
    "Jamie" => 44,
    "Arya" => 58,
    "Cersei" => 68,
);

foreach ($results as $keys => $values) {
    echo"$keys has scored $values%<br>";
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science scores</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <label>Enter student name:</label>
        <input type="text" name="student"><br><br>
        <button type="submit">Enter</button>
    </form>
</body>
</html>
<?php
    $results = array(
    "John" => 86,
    "Mary" => 77,
    "Prudence" => 36,
    "Theon" => 21,
    "Bran" => 78,
    "Ned" => 90,
    "Rob" => 88,
    "Sansa" => 62,
    "Dany" => 70,
    "Tyrion" => 56,
    "Jamie" => 44,
    "Arya" => 58,
    "Cersei" => 68,
);
    $x = $_POST["student"];

    if($results[$x]){
         echo"<br> $x has scored $results[$x]% in Science.";
        }
    else{
        echo"<br> The student isn't found in the system";
    }

   


?>