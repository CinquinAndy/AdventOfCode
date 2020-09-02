<?php
session_start();
require "../../composants/header.php";
require "../../config.php";
require "../../composants/footer.php";
require "../../composants/input.php";

monHeader("jour4", 2);
?>

<?php
monInput(2);
?>

<div class="card text-center">
    <div class="card-header">
        Jour 4 - Input entrée :
    </div>
    <div class="card-body">
        <p class="card-text"><?php foreach ($_SESSION['tableauChaine'] as $line) {
                echo($line);
            } ?></p>
    </div>
</div>

<?php
// faire les traitements dans partie ! à vous de vous débrouiller ;)
// Solution jour 1
//$tableauChaine = $_SESSION['tableauChaine'];
//$trouver=0;
//$chiffre=0;
//while($trouver===0){
//    $valeurTest = md5($tableauChaine[0].(string)$chiffre);
//    if(strpos($valeurTest,"00000")===0){
//        $trouver=1;
//        $resultat=$chiffre;
//    }
//    $chiffre++;
//}

// Solution jour 2
$tableauChaine = $_SESSION['tableauChaine'];
$trouver=0;
$chiffre=0;
while($trouver===0){
    $valeurTest = md5($tableauChaine[0].(string)$chiffre);
    if(strpos($valeurTest,"000000")===0){
        $trouver=1;
        $resultat=$chiffre;
    }
    $chiffre++;
}
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
        <input type="hidden" id="jourValider" name="jourValider" value="<?php echo 4 ?>">
        <input type="hidden" id="annee" name="annee" value="<?php echo 2015 ?>">
        <input type="hidden" id="validation" name="validation" value="<?php echo 1 ?>">
        <button type="submit" class="btn btn-primary">Validation du jour</button>
    </form>
    <form action="../../actions/validationJour.php" method="post">
        <input type="hidden" id="jourValider" name="jourValider" value="<?php echo 4 ?>">
        <input type="hidden" id="annee" name="annee" value="<?php echo 2015 ?>">
        <input type="hidden" id="validation" name="validation" value="<?php echo 0 ?>">
        <button type="submit" class="btn btn-danger">dé-Validation du jour</button>
    </form>
</div>


