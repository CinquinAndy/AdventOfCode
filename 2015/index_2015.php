<?php

require "../composants/header.php";
require "../config.php";
require "../composants/footer.php";


$bd = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BASE, Config::UTILISATEUR,
    Config::MOTDEPASSE);
$request = $bd->prepare("select * from `2015`");
$request->execute();
$lines2015 = $request->fetchAll();

monHeader("Accueil - 2015",1);
?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">2015</th>

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
        echo(" mx-auto' href='../2015/jours/jour" . ($i + 1) . ".php'>" . $lines2015[$i]['dateJour']);
        if ($lines2015[$i]['statut']) {
            echo(" ----> Bien joué ! Vous avez fini ce niveau ! ♥ ");
        } else {
            echo(" ----> Niveau pas encore terminé !");
        }
        echo("</a></td></tr>");

    } ?>


    </tbody>
</table>
