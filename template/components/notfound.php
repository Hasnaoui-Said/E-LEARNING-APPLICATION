<?php
    session_start();
    require_once(dirname(__FILE__) . './../data/models/data_provider.php');
    $pro = new DataProvider();
    $isloged = $pro->isLoged();
    if(!$isloged){
        $pro->redirect("./../../index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notfound</title>
</head>
<body>
    <h1>notfound</h1>
</body>
</html>