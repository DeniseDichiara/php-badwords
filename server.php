<?php 

$paragraph = $_GET['userParagraph'];

$censored = $_GET['censored'];

$censoredParagraph = str_replace($badword, '*', $paragraph );

?>
