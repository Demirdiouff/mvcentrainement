<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />
<title><?= $titre ?></title>
<!--  Elément spécifique -->
</head>
<body>
	<div id="global">
		<header>
			<a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
		</header>
		<div id="contenu">
		<?= $contenu ?> <!-- Element spécifique -->
		</div>
		<footer id="piedBlog"> Blog réalisé avec PHP, HTML5 et CSS. </footer>
	</div>
	<!--  #global -->
</body>
</html>