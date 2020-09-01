<?php
session_start();
require "../config.php";
$bd = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BASE, Config::UTILISATEUR,
    Config::MOTDEPASSE);

$validation = filter_input(INPUT_POST,"validation");
$jourValider = filter_input(INPUT_POST, "jourValider");
$annee = filter_input(INPUT_POST, "annee");

switch ($annee){
    case '2015':
        $request = $bd->prepare('update `2015` set statut=:validation where dateJour=:jourValider');
        $request->bindParam(":jourValider",$jourValider);
        $request->bindParam(":validation",$validation);
        $request->execute();
        break;
    case '2016':
        $request = $bd->prepare('update `2016` set statut=:validation where dateJour=:jourValider');
        $request->bindParam(":jourValider",$jourValider);
        $request->bindParam(":validation",$validation);
        $request->execute();
        break;
    case '2017':
        $request = $bd->prepare('update `2017` set statut=:validation where dateJour=:jourValider');
        $request->bindParam(":jourValider",$jourValider);
        $request->bindParam(":validation",$validation);
        $request->execute();
        break;
    case '2018':
        $request = $bd->prepare('update `2018` set statut=:validation where dateJour=:jourValider');
        $request->bindParam(":jourValider",$jourValider);
        $request->bindParam(":validation",$validation);
        $request->execute();
        break;
    case '2019':
        $request = $bd->prepare('update `2019` set statut=:validation where dateJour=:jourValider');
        $request->bindParam(":jourValider",$jourValider);
        $request->bindParam(":validation",$validation);
        $request->execute();
        break;
    case '2020':
        $request = $bd->prepare('update `2020` set statut=:validation where dateJour=:jourValider');
        $request->bindParam(":jourValider",$jourValider);
        $request->bindParam(":validation",$validation);
        $request->execute();
        break;
}

header("location: ../".$annee."/index_".$annee.".php");

