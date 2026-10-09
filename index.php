<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Radius</label><br>
        <input type="text" name="Radius"><br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
<?php
   $y = $_POST["Radius"];

   $circumfrence = round(2 * pi() * $y);
   $area = round(2 * pi() * pow($y,2));
   $volume = round(4/3 * pi() * pow($y,3));

   echo "The Circumfrence of the circle is: $circumfrence cm<br>";
   echo "The Area of the circle is : $area cm^2<br>";
   echo "The Volume of a sphere with such a radius is : $volume cm^3<br>";

?>