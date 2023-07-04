<?php

$paragraph = $_GET['userParagraph'];

$censored = $_GET['censored'];

$censoredParagraph = str_replace($censored, '*', $paragraph);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Badwords results</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>


<body>
    <h1>
        Badwords results:
    </h1>

    <h2>
        Original paragraph:
    </h2>
    <p>
        "<?php echo $paragraph; ?>"
    </p>
    <p>
        Original paragraph lenght: <?php echo strlen($paragraph);  ?>
    </p>


    <h2>
        Censored paragraph:
    </h2>
    <p>
        <?php
        echo $censoredParagraph
        ?>
    </p>

    <p>
        Censored paragraph lenght: <?php echo strlen($censoredParagraph);  ?>
    </p>



    <script src="" async defer></script>
</body>

</html>