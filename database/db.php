<!-- //connte database -->
<?php
$db_name = "php_db";
$db_server = "localhost";
$db_user = "root";
$db_pass = "";

$conn = "";

$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if($conn){
    echo "Database Connected";
}else{
    echo "Could not connect";
}


?>