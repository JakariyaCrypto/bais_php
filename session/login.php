<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="login.php" method="post">
    email<br>
    <input type="email" name="email"><br>
    password: <br>
    <input type="password" name="password">
    <br>
    <input type="submit" value="login" name="login">
</form>

<?php
session_start();

if(isset($_POST['login'])){
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];

    if(!empty($_POST['email']) && !empty( $_POST['password'])){
        header("location: index.php");
    }else{
        echo "Something is wrong";
    }
}

?>



</body>
</html>