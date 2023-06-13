<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <!-- //login -->
    <form action="index.php"  method="post">
        <lebel>User Name</lebel>
        <input type="text" name="user_name" ><br>
        <lebel>Password</lebel>
        <input type="password" name="password" ><br>
        <input type="submit" name="login" value="Login">
    </form>


    <!-- payment system -->
    <br><br><br>
    <form action="index.php"  method="post">
        <input type="radio" name="payment_method" value="visa">Visa <br>
        <input type="radio" name="payment_method" value="master card">Master Card <br>
        <input type="radio" name="payment_method" value="american express">American Express<br><br>
        <input type="submit" name="payment" value="submit">
    </form>

<!-- mutli checkbox -->
<br><br><br>
<form action="index.php"  method="post">
    <input type="checkbox" name="items[]" value="tometo">Tometo <br>
    <input type="checkbox" name="items[]" value="vegetable">Vegetable <br>
    <input type="checkbox" name="items[]" value="carrot">Carrot<br>
    <input type="checkbox" name="items[]" value="ginger">Ginger<br>
    <input type="checkbox" name="items[]" value="green chilli">Green Chilli<br><br>
    <input type="submit" name="vegetable" value="submit">
</form>





    <?php
// bsic login system
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

    // basic payment system

    if(isset($_POST['payment'])){
        $card = "";
        if(isset($_POST['payment_method'])){
            $card = $_POST['payment_method'];
        }

        switch($card){
            case "visa":
                echo "you selected visa card";
                break;
            case "master card":
                echo "you selected master card";
                break;
            case "american express":
                echo "you selected American Express";
                break;
            default:
            echo "Please, Select Payment method";
        }

    }


    // multi checkbox

    if(isset($_POST['vegetable'])){
        $items = null;
       if(isset($_POST['items'])){
            $items = $_POST['items'];
            foreach($items as $item){

                echo "{$item} <br>";
            }
        }
        
    }



?>
</body>
</html>