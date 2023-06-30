<?php 
$saluto = 'Ciao';
//*commento inphp
?>


<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Php Intro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <h1>
            <?php echo $saluto ?>, benvenuto in php!
        </h1>
        

        <form action="./server.php" method="GET">
            <input type="text" name="paragraph">
            <input type="text" name="censored">

            <button type="submit"> 
                invia dati 
            </button>
        </form>



        <script src="" async defer></script>
    </body>
</html>


