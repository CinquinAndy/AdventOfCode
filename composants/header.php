<?php function monHeader($titleAnnee, $relatif)
{ ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site web Advent Of Code - Challenging">
    <title><?php echo($titleAnnee) ?> - Advent of code</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/wza2auj.css">
    <link rel="stylesheet" href="<?php if ($relatif===1) {echo("../");}elseif($relatif===2){echo ("../../");}?>stylesheets.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php if ($relatif===1) {echo("../");}elseif($relatif===2){echo ("../../");}?>index.php">AdventOfCode</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php if ($relatif===1) {echo("../");}elseif($relatif===2){echo ("../../");}?>2015/index_2015.php">2015</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php if ($relatif===1) {echo("../");}elseif($relatif===2){echo ("../../");}?>2016/index_2016.php">2016</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php if ($relatif===1) {echo("../");}elseif($relatif===2){echo ("../../");}?>2017/index_2017.php">2017</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php if ($relatif===1) {echo("../");}elseif($relatif===2){echo ("../../");}?>2018/index_2018.php">2018</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php if ($relatif===1) {echo("../");}elseif($relatif===2){echo ("../../");}?>2019/index_2019.php">2019</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php if ($relatif===1) {echo("../");}elseif($relatif===2){echo ("../../");}?>2020/index_2020.php">2020</a>
            </li>
        </ul>
    </div>
</nav>
<main class="container-fluid">




<?php
} ?>
