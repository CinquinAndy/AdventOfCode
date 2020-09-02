<?php
session_start();
$_SESSION['tableauChaine']="10";
require "composants/header.php";
require "config.php";
require "composants/footer.php";
monHeader("Accueil", 0);

$bd = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BASE, Config::UTILISATEUR,
    Config::MOTDEPASSE);
$request = $bd->prepare("select * from `2015`");
$request->execute();
$lines2015 = $request->fetchAll();

$request = $bd->prepare("select * from `2016`");
$request->execute();
$lines2016 = $request->fetchAll();

$request = $bd->prepare("select * from `2017`");
$request->execute();
$lines2017 = $request->fetchAll();

$request = $bd->prepare("select * from `2018`");
$request->execute();
$lines2018 = $request->fetchAll();

$request = $bd->prepare("select * from `2019`");
$request->execute();
$lines2019 = $request->fetchAll();

$request = $bd->prepare("select * from `2020`");
$request->execute();
$lines2020 = $request->fetchAll();

?>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">2015</th>
        <th scope="col">2016</th>
        <th scope="col">2017</th>
        <th scope="col">2018</th>
        <th scope="col">2019</th>
        <th scope="col">2020</th>
    </tr>
    </thead>
    <tbody>

        <?php for ($i = 0; $i < 25; $i++) {
//            2015
            echo("<tr><td class='");
            echo("'><a class='");
            if ($lines2015[$i]['statut']) {
                echo("text-primary");
            } else {
                echo("text-warning");
            }
            echo(" mx-auto' href='2015/jours/jour" . ($i + 1) . ".php'>" . $lines2015[$i]['dateJour'] . "</a></td>");

//            2016
            echo("<td class='");
            echo("'><a class='");
            if ($lines2016[$i]['statut']) {
                echo("text-primary");
            } else {
                echo("text-warning");
            }
            echo(" mx-auto' href='2016/jours/jour" . ($i + 1) . ".php'>" . $lines2016[$i]['dateJour'] . "</a></td>");

//            2017
            echo("<td class='");
            echo("'><a class='");
            if ($lines2017[$i]['statut']) {
                echo("text-primary");
            } else {
                echo("text-warning");
            }
            echo(" mx-auto' href='2017/jours/jour" . ($i + 1) . ".php'>" . $lines2017[$i]['dateJour'] . "</a></td>");

//            2018
            echo("<td class='");
            echo("'><a class='");
            if ($lines2018[$i]['statut']) {
                echo("text-primary");
            } else {
                echo("text-warning");
            }
            echo(" mx-auto' href='2018/jours/jour" . ($i + 1) . ".php'>" . $lines2018[$i]['dateJour'] . "</a></td>");

//            2019
            echo("<td class='");
            echo("'><a class='");
            if ($lines2019[$i]['statut']) {
                echo("text-primary");
            } else {
                echo("text-warning");
            }
            echo(" mx-auto' href='2019/jours/jour" . ($i + 1) . ".php'>" . $lines2019[$i]['dateJour'] . "</a></td>");

//            2020
            echo("<td class='");
            echo("'><a class='");
            if ($lines2020[$i]['statut']) {
                echo("text-primary");
            } else {
                echo("text-warning");
            }
            echo(" mx-auto' href='2020/jours/jour" . ($i + 1) . ".php'>" . $lines2020[$i]['dateJour'] . "</a></td></tr>");
        } ?>


    </tbody>
</table>
