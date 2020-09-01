<?php
session_start();
$chaineTraitement = filter_input(INPUT_POST, "textAreaTraitementTexte");

$tableauChaine = explode("\n",$chaineTraitement);

$_SESSION['tableauChaine']=$tableauChaine;

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);
