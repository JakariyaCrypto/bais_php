<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="index.php"  method="post">
        <lebel>User Name</lebel>
        <input type="text" name="user_name" ><br>
        <lebel>Password</lebel>
        <input type="password" name="password" ><br>
        <input type="submit" name="login" value="Login">
    </form>


    <?php

    // foreach($_POST as $key => $val){
    //     echo "{$key} = $val <br>";
    // }

    if(isset($_POST['login'])){
        $userName = $_POST['user_name'];
        $password = $_POST['password'];

        if(empty($userName)){
            echo "userName is not match";
        }elseif(empty($password)){
            echo "password is not match";
        }else{
            echo "Suucessfully login";
        }
    }
    ?>
</body>
</html>