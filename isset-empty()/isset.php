<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login array</title>
</head>
<body>
    <form action="isset.php" method="post">
        <label>username:</label><br>
            <input type="text" name="username"><br>
        <label>password</label><br>
            <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>
<?php
//isset() confirms true if a variable has been declared or not null
//empty() confirms true if a varibale is null or undeclared or false
// foreach($_POST as $username => $password){
//     echo"<br>".$username."<br>".$password."";
// }    
// $_POST["login"];
    if (isset($_POST["username"])) {
        echo"The username is set";
    }
    if (empty($_POST["username"])) {
        echo "The username is missing!";
    }
?>