<?php
session_start();
require "../../composants/header.php";
require "../../config.php";
require "../../composants/footer.php";
require "../../composants/input.php";

monHeader("jour2", 2);
?>

<?php
monInput(2);
?>

<div class="card text-center">
    <div class="card-header">
        Jour 2 - Input entrée :
    </div>
    <div class="card-body">
        <p class="card-text"><?php foreach ($_SESSION['tableauChaine'] as $line) {
                echo($line);
            } ?></p>
    </div>
</div>

<?php
// faire les traitements dans partie ! à vous de vous débrouiller ;)
// Solution étape 1 :
//$tableauChaine = $_SESSION['tableauChaine'];
//$resultat=0;
//$compteur=0;
//foreach ($tableauChaine as $ligne){
//    $tableauChiffre[$compteur]=explode('x',$ligne);
//    $compteur++;
//}
//
//foreach ($tableauChiffre as $ligne){
//    $resultatLxW=(2*(int)$ligne[0]*(int)$ligne[1]);
//    $resultatLxH=(2*(int)$ligne[0]*(int)$ligne[2]);
//    $resultatWxH=(2*(int)$ligne[1]*(int)$ligne[2]);
//    $resultat+=$resultatLxW+$resultatLxH+$resultatWxH;
//    if ($resultatLxW<=$resultatLxH&&$resultatLxW<=$resultatWxH){
//        $resultat+=$resultatLxW/2;
//    } else if ($resultatLxH<=$resultatLxW&&$resultatLxH<=$resultatWxH){
//        $resultat+=(int)$resultatLxH/2;
//    } else {
//        $resultat+=(int)$resultatWxH/2;
//    }
//}
//
// Solution etape 2 :
//$tableauChaine = $_SESSION['tableauChaine'];
//$resultat=0;
//$compteur=0;
//foreach ($tableauChaine as $ligne){
//    $tableauChiffre[$compteur]=explode('x',$ligne);
//    $compteur++;
//}
//
//foreach ($tableauChiffre as $ligne){
//    sort($ligne,SORT_NUMERIC);
//    $resultatL2_W2=((2*(int)$ligne[0])+(2*(int)$ligne[1]));
//    $resultatLxWxH=((int)$ligne[0]*(int)$ligne[1]*(int)$ligne[2]);
//    $resultat+=$resultatL2_W2+$resultatLxWxH;
//}
//?>


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
        <input type="hidden" id="jourValider" name="jourValider" value="<?php echo 2 ?>">
        <input type="hidden" id="annee" name="annee" value="<?php echo 2015 ?>">
        <input type="hidden" id="validation" name="validation" value="<?php echo 1 ?>">
        <button type="submit" class="btn btn-primary">Validation du jour</button>
    </form>
    <form action="../../actions/validationJour.php" method="post">
        <input type="hidden" id="jourValider" name="jourValider" value="<?php echo 2 ?>">
        <input type="hidden" id="annee" name="annee" value="<?php echo 2015 ?>">
        <input type="hidden" id="validation" name="validation" value="<?php echo 0 ?>">
        <button type="submit" class="btn btn-danger">dé-Validation du jour</button>
    </form>
</div>


