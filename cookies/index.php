<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
<?php
    setcookie("user_name","jakariya Ahmed", time() + (86400 * 2), "/");
    setcookie("password","password", time() + (86400 * 3), "/");
    setcookie("email","demo@gmail.com", time() + (86400 * 4), "/");


    // foreach($_COOKIE as $key=> $val){
    //     echo "{$key} = {$val} <br>";
    // }

    if(isset($_COOKIE['email'])){
        echo "your are log in user";
    }else{
        echo "you are not our user";
    }
?>



</body>
</html>