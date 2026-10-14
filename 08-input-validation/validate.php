<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize</title>
</head>
<body>
    <form method="post" action="validate.php">
        email:<br>
        <input type="text" name="email"><br>
        age:<br>
        <input type="text" name="age"><br><br>

        <input type="submit" name="login"
                  value="login">

    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        $email = filter_input(INPUT_POST,"email",
             FILTER_VALIDATE_EMAIL);

        $age = filter_input(INPUT_POST,"age",
             FILTER_VALIDATE_INT);

        if(empty($email)){
            echo"<br>Invalid email";
        }
        else{
            echo"<br> Your email is: {$email}";
        }
}


?>