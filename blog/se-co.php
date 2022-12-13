<?php
session_start();
$login = 'James';
$mdp = 'Ez';
if ( isset( $_POST[ 'login' ], $_POST[ 'mdp' ] ) ) {
    if ( !empty( $_POST[ 'login' ] ) && !empty( $_POST[ 'mdp' ] ) ) {
		if ($_POST[ 'login' ] == $login && $_POST[ 'mdp' ] == $mdp) {
			$_SESSION[ 'login' ] = $_POST[ 'login' ];
			$_SESSION[ 'mdp' ] = $_POST[ 'mdp' ];
			$bouton = '<li><a href = "index.php" class = "button primary">revenir à l\'accueil</a></li>';
			$read = "Bonjour ".$_SESSION['login']." ! <br>Votre mot de passe est ".$_SESSION['mdp'];
		} else {
			$bouton = '<li><a href = "index.php" class = "button primary">revenir à l\'accueil</a></li>';
			$read = 'Bonjour jeune inconnu(e) ! <br>Votre login ou votre mot de passe est faux : veuillez revenir à l\'accueil pour les ressaisir. <br>
			<strong style="color:red;">Merci !</strong>';
		}
    }
	else {
		$bouton = '<li><a href = "index.php" class = "button primary">revenir à l\'accueil</a></li>';
		$read = 'Bonjour jeune inconnu(e) ! <br>Vous n\'avez  ni de login ni mot de passe : veuillez revenir à l\'accueil pour les ressaisir. <br>
		<strong style="color:red;">Merci !</strong>';
	}
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Mon joli blog</title>
<meta charset = 'utf-8' />
<meta name = 'viewport' content = 'width=device-width, initial-scale=1, user-scalable=no' />
<link rel = 'stylesheet' href = 'assets/css/main.css' />
</head>
	<body class = 'is-preload'>

	<section id = 'header'>
	<header class = 'major'>
	<h1>Mon joli blog</h1>
	<p>Articles minimalistes pour quotidiens chargés</p>
	</header>

	<div class = 'container'>
	<ul class = "actions special">
	<?php
	echo $bouton;
	?>
	</ul>
	<?php
	echo $read;
	?>
	</div>
	</section>

	<script src = 'assets/js/jquery.min.js'></script>
	<script src = 'assets/js/jquery.scrollex.min.js'></script>
	<script src = 'assets/js/jquery.scrolly.min.js'></script>
	<script src = 'assets/js/jq.key.js'></script>
	<script src = 'assets/js/browser.min.js'></script>
	<script src = 'assets/js/breakpoints.min.js'></script>
	<script src = 'assets/js/util.js'></script>
	<script src = 'assets/js/main.js'></script>

	</body>
</html>