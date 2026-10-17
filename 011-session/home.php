<?php
    session_start();

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: session.php");
        echo"vn";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>NICE AND ENJOY</h2>
<form>
    <input type="submit" value="logout" name="logout">
</form>
    
</body>
</html>
