<?php 

$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Server</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <body>

        <h1> 
            Spiacente, <?php echo $paragraph ?> la parola <?php echo $censored ?> è stata censurata
        </h1>
        
        <script src="" async defer></script>
    </body>
</html>