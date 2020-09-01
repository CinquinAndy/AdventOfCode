<?php
session_start();
require "../../composants/header.php";
require "../../config.php";
require "../../composants/footer.php";
require "../../composants/input.php";

monHeader("jour1", 2);
?>

<?php
monInput(2);
?>

<div class="card text-center">
    <div class="card-header">
        Jour 1 - Input entrée :
    </div>
    <div class="card-body">
        <p class="card-text"><?php foreach ($_SESSION['tableauChaine'] as $line) {
                echo($line);
            } ?></p>
    </div>
</div>

<?php
// faire les traitements dans cette partie ! à vous de vous débrouiller ;)
$tableauChaine = $_SESSION['tableauChaine'];

// premier jour 2015 :
// si on obtient '(' , on passe à l'étage supérieur, si on a ')' , on passe à l'inférieur.
// Solution Etape 1 :
//$etage = 0;
//$tabChar = str_split($tableauChaine[0]);
//
//foreach ($tabChar as $caractereActuel) {
//    if ($caractereActuel === '(') {
//        $etage++;
//    } elseif ($caractereActuel === ')') {
//        $etage--;
//    }
//}
// $resultat = $etage;
//
// Solution Etape 2 :
//$etage = 0;
//$tabChar = str_split($tableauChaine[0]);
//$compteur = 0;
//$resultat = 0;
//
//foreach ($tabChar as $caractereActuel) {
//    if ($caractereActuel === '(') {
//        $etage++;
//    } elseif ($caractereActuel === ')') {
//        $etage--;
//    }
//    $compteur++;
//    if ($etage<0 && $resultat===0){
//        $resultat=$compteur;
//    }
//}

?>


<?php // affichage de votre résultat ?>
<div class="card text-center">
    <div class="card-header">
        Résultat :
    </div>
    <div class="card-body">
        <p class="card-text"><?= $resultat ?></p>
    </div>
</div>


<?php // affichage des boutons de validations / dé-validation ?>
<div class="card text-center">
    <br>
    <form action="../../actions/validationJour.php" method="post">
        <input type="hidden" id="jourValider" name="jourValider" value="<?php echo 1 ?>">
        <input type="hidden" id="annee" name="annee" value="<?php echo 2015 ?>">
        <input type="hidden" id="validation" name="validation" value="<?php echo 1 ?>">
        <button type="submit" class="btn btn-primary">Validation du jour</button>
    </form>
    <form action="../../actions/validationJour.php" method="post">
        <input type="hidden" id="jourValider" name="jourValider" value="<?php echo 1 ?>">
        <input type="hidden" id="annee" name="annee" value="<?php echo 2015 ?>">
        <input type="hidden" id="validation" name="validation" value="<?php echo 0 ?>">
        <button type="submit" class="btn btn-danger">dé-Validation du jour</button>
    </form>
</div>


