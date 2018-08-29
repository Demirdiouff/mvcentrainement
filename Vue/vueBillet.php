<?php 


//------------- Vue (affichage à l'utilisateur, renvoi à template.php) ----------------//


$titre = "Un billet simple pour l'\Alaska - " . $billet['titre']; ?>

<article> 
	<header>
		<h1 class="titreBillet"><?= $billet['titre'] ?></h1>
		<time><?= $billet['date'] ?></time>
	</header>
	<p><?= $billet['contenu'] ?></p>
</article>
<hr />
<header>
	<h1 id="titreReponses">Réponses à <?= $billet['titre'] ?></h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
	<p><?= $commentaire['auteur'] ?> dit :</p>
	<p><?= $commentaire['contenu'] ?></p>
<?php endforeach; ?>

