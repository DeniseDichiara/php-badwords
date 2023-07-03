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
            <label for="user-paragraph"></label>
            <textarea name="userParagraph" id="user-paragraph" col="30" rows="10"></textarea>

            <label for="user-paragraph"></label>
            <input type="text" name="censored" id="user-censored">

            <button type="submit"> 
                invia dati 
            </button>
        </form>



        <script src="" async defer></script>
    </body>
</html>


