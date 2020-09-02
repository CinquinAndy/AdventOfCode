<?php
session_start();
require "../../composants/header.php";
require "../../config.php";
require "../../composants/footer.php";
require "../../composants/input.php";

monHeader("jour3", 2);
?>

<?php
monInput(2);
?>

<div class="card text-center">
    <div class="card-header">
        Jour 3 - Input entrée :
    </div>
    <div class="card-body">
        <p class="card-text"><?php foreach ($_SESSION['tableauChaine'] as $line) {
                echo($line);
            } ?></p>
    </div>
</div>

<?php
// faire les traitements dans partie ! à vous de vous débrouiller ;)
$tableauChaine = $_SESSION['tableauChaine'];
$resultat=0;

// ma Solution Etape 1 :
//$positionX = 0;
//$positionY = 0;
//$tabChar = str_split($tableauChaine[0]);
//$tabPositionPasser[0]="0|0";
//foreach ($tabChar as $caractereActuel) {
//    if ($caractereActuel === '^') {
//        $positionY++;
//    } elseif ($caractereActuel === 'v') {
//        $positionY--;
//    } elseif ($caractereActuel === '>'){
//        $positionX++;
//    } elseif ($caractereActuel === '<'){
//        $positionX--;
//    }
//
//    (in_array($positionX.'|'.$positionY,$tabPositionPasser)) ? $no="nothing" :  $tabPositionPasser[]=(string)$positionX.'|'.(string)$positionY ;
//}
//$resultat=count($tabPositionPasser);

// Ma solution etape 2 :
//$positionX = 0;
//$positionY = 0;
//$robot_positionX = 0;
//$robot_positionY = 0;
//$tabChar = str_split($tableauChaine[0]);
//$tabPositionPasser[0]="0|0";
//$compteur=0;
//foreach ($tabChar as $caractereActuel) {
//    if($compteur%2){
//        if ($caractereActuel === '^') {
//            $positionY++;
//        } elseif ($caractereActuel === 'v') {
//            $positionY--;
//        } elseif ($caractereActuel === '>'){
//            $positionX++;
//        } elseif ($caractereActuel === '<'){
//            $positionX--;
//        }
//    } else {
//        if ($caractereActuel === '^') {
//            $robot_positionY++;
//        } elseif ($caractereActuel === 'v') {
//            $robot_positionY--;
//        } elseif ($caractereActuel === '>'){
//            $robot_positionX++;
//        } elseif ($caractereActuel === '<'){
//            $robot_positionX--;
//        }
//    }
//$compteur++;
//
//    (in_array($positionX.'|'.$positionY,$tabPositionPasser)) ?  :  $tabPositionPasser[]=$positionX.'|'.$positionY ;
//    (in_array($robot_positionX.'|'.$robot_positionY,$tabPositionPasser)) ?  :  $tabPositionPasser[]=$robot_positionX.'|'.$robot_positionY ;
//}
//$resultat=count($tabPositionPasser);
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
        <input type="hidden" id="jourValider" name="jourValider" value="<?php echo 3 ?>">
        <input type="hidden" id="annee" name="annee" value="<?php echo 2015 ?>">
        <input type="hidden" id="validation" name="validation" value="<?php echo 1 ?>">
        <button type="submit" class="btn btn-primary">Validation du jour</button>
    </form>
    <form action="../../actions/validationJour.php" method="post">
        <input type="hidden" id="jourValider" name="jourValider" value="<?php echo 3 ?>">
        <input type="hidden" id="annee" name="annee" value="<?php echo 2015 ?>">
        <input type="hidden" id="validation" name="validation" value="<?php echo 0 ?>">
        <button type="submit" class="btn btn-danger">dé-Validation du jour</button>
    </form>
</div>


