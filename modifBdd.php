<?php
require "config.php";
$bd = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BASE, Config::UTILISATEUR,
    Config::MOTDEPASSE);
$statutDefaut=0;

//for ($i=1;$i<=25;$i++){
//$request=$bd->prepare("INSERT INTO `2015`(dateJour,statut) VALUES (:dateJour,:statut)");
//$request->bindParam(":dateJour",$i);
//$request->bindParam(":statut",$statutDefaut);
//$request->execute();
//}

//for ($i=1;$i<=25;$i++){
//$request=$bd->prepare("INSERT INTO `2016`(dateJour,statut) VALUES (:dateJour,:statut)");
//$request->bindParam(":dateJour",$i);
//$request->bindParam(":statut",$statutDefaut);
//$request->execute();
//}

//for ($i=1;$i<=25;$i++){
//$request=$bd->prepare("INSERT INTO `2017`(dateJour,statut) VALUES (:dateJour,:statut)");
//$request->bindParam(":dateJour",$i);
//$request->bindParam(":statut",$statutDefaut);
//$request->execute();
//}

//for ($i=1;$i<=25;$i++){
//$request=$bd->prepare("INSERT INTO `2018`(dateJour,statut) VALUES (:dateJour,:statut)");
//$request->bindParam(":dateJour",$i);
//$request->bindParam(":statut",$statutDefaut);
//$request->execute();
//}

//for ($i=1;$i<=25;$i++){
//$request=$bd->prepare("INSERT INTO `2019`(dateJour,statut) VALUES (:dateJour,:statut)");
//$request->bindParam(":dateJour",$i);
//$request->bindParam(":statut",$statutDefaut);
//$request->execute();
//}

//for ($i=1;$i<=25;$i++){
//$request=$bd->prepare("INSERT INTO `2020`(dateJour,statut) VALUES (:dateJour,:statut)");
//$request->bindParam(":dateJour",$i);
//$request->bindParam(":statut",$statutDefaut);
//$request->execute();
//}
