<?php function header($titleAnnee,$relatif)
{ ?>

    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Site web Advent Of Code - Challenging">
        <title>Advent of code - <?php echo($titleAnnee)?></title>
        <link rel="stylesheet" href="stylesheets.css">

    </head>
    <body>
    <?php if($relatif){echo("../");} ?>



    <?php
} ?>
