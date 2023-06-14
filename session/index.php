<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>

    <?php  session_start(); ?>
</head>
<body>

<h3> Hi <?php echo $_SESSION['email']. " " ." you are successfully login" ?></h3>
<form action="index.php" method="post">
    <button type="submit" name="logout">Logout</button>
</form>

<?php
//logout function 
if(isset($_POST['logout'])){
   session_destroy();
   header('Location: login.php');
}


?>



</body>
</html>