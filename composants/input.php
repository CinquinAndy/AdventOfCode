<?php
function monInput($relatif){
?>
<form action="<?php if ($relatif === 1) { echo("../"); } elseif ($relatif === 2) {echo("../../");}?>/actions/traitementChaine.php" method="post">
<div class="form-group">
    <label for="textAreaTraitementTexte">Input puzzle :</label>
    <textarea class="form-control" id="textAreaTraitementTexte" name="textAreaTraitementTexte" rows="1"></textarea>
</div>
    <button type="submit" class="btn btn-primary">Envoi du puzzle</button>
</form>
<?php } ?>
