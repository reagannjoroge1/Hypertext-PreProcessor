<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Welcome to Instagram!</p>
    <form action="session.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="login" name="login"> 
    </form>
</body>
</html>
<?php
    if (isset($_POST["login"])) {
        if(!empty($POST["username"]) &&
           !empty($POST["password"])){
           
           $_SESSION["username"] = $_POST["username"];
           $_SESSION["password"] = $_POST["password"];

           header("Location: home.php");
           
        }
        
        else{
            echo"<br>The username/password is blank";
        }  
    }
?>