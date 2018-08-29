<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">
<link rel="stylesheet" href="Contenu/style.css" />
<title><?= $titre ?></title>
<!--  $titre se trouve dans vueAccueil.php -->
<!--  Elément spécifique -->
<!-- Bootstrap core CSS -->
<link href="Contenu/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="Contenu/bootstrap-3.3.7/assets/css/ie10-viewport-bug-workaround.css"
	rel="stylesheet">

<!-- Custom styles for this template -->
<link href="Contenu/styleAccueil.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="Contenu/bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <a href="index.php"><h3 class="masthead-brand">Un billet pour l'Alaska</h3></a>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="index.php">Accueil</a></li>
                  <li><a href="aPropos.php">A propos</a></li>
                  <li><a href="roman.php">Roman</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Jean Forteroche</h1>
            <p class="lead">Un billet simple pour l'Alaska est un roman qui sera écrit entièrement en ligne via le biais de ce site web. Un chapitre sera publié chaque semaine. N'hésitez pas à donner vos retours.</p>
            <p class="lead">
              <a href="aPropos.php" class="btn btn-lg btn-default">En savoir plus</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><a href="adminPage.php">Espace d'administration</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>