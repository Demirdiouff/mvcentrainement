<?php 


//------------- Vue (affichage à l'utilisateur, renvoi à template.php) ----------------//


$titre = 'Mon Blog'; ?>


<?php ob_start() ?>
<p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>