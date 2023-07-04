<?php 
$saluto = 'Ciao';
//*commento inphp
?>


<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Php-badwords</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <h1>
            <?php echo $saluto ?>, benvenuto in php!
        </h1>
        

        <form action="./server.php" method="get">
            <label for="user-paragraph">
                Insert a pareagraph to be censored
            </label>
            <textarea name="userParagraph" id="user-paragraph" col="30" rows="10"></textarea>

            <label for="user-paragraph">
                Insert a badword to censor 
            </label>
            <input type="text" name="censored" id="user-censored">

            <input type="submit" value="Send">
        </form>



        <script src="" async defer></script>
    </body>
</html>


