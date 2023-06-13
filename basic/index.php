<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


<?php
    $countries = array(
        "japan" => "japan",
        "Bangladesh" => "BD",
        "usa" => "United South Asia",
        "uk" => "United Kingdom",
    );

    foreach($countries as $kay => $value){
        echo "{$kay} = {$value}";
    }

?>

<script>

</script>
</body>
</html>