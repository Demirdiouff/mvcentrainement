<?php
// Accès aux données
$bdd = new PDO('mysql:host=localhost;dbname=mvcentrainement;charset=utf8', 'root', 'root');
$billets = $bdd->query('SELECT BIL_ID as id, BIL_DATE as date,' . 'BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET' . ' order by BIL_ID desc');
?>

<!-- Affichage -->
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />
<title>Mon Blog</title>
</head>

<body>
	<div id="global">
		<header>
			<a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
			<p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
		</header>
		<div id="contenu">
        <?php foreach ($billets as $billet): ?>
          <article>
				<header>
					<h1 class="titreBillet"><?= $billet['titre'] ?></h1>
					<time><?= $billet['date'] ?></time>
				</header>
				<p><?= $billet['contenu'] ?></p>
			</article>
			<hr />
        <?php endforeach; ?>
      </div>
		<!-- #contenu -->
		<footer id="piedBlog"> Blog réalisé avec PHP, HTML5 et CSS. </footer>
	</div>
	<!--  #global -->
</body>
</html>