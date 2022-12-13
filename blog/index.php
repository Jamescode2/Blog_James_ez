<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mon joli blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

			<section id="header">
				<header class="major">
					<h1>Mon joli blog</h1>
					<p>Articles minimalistes pour quotidiens chargés</p>
				</header>

				<div class="container">
					<ul class="actions special">
						<?php
						if ( isset( $_SESSION[ 'login' ], $_SESSION[ 'mdp' ] ) ) {
							echo '<li>
							<a href="#footer" class="button primary scrolly">Ajouter un article</a>
						</li>
						<li>
							<a href="se-deco.php" class="button primary">Se déconnecter</a>
						</li>';
						}
						else {
							echo '<li><a href="#footer" class="button primary">Se connecter</a></li></li>';
						}
						?>
					</ul>
				</div>
			</section>

			<section id="articles" class="main">
				<div class="container">
					<div class="content">
						<article>
			                <header class="major">
			                    <h2>Recette de la tartiflette</h2>
			                </header>
			                <section>
			                    <p>
			                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pharetra sapien. Aliquam rutrum nibh nec enim luctus molestie. Cras consequat condimentum magna a gravida. Etiam sapien risus, bibendum id velit ac, congue porttitor sapien.
			                    </p>
			                        <em>
			                            Article publié par John Doe
			                        </em>
			                    <hr />
			                </section>
			            </article>
			            <article>
			                <header class="major">
			                    <h2>Recette de la raclette</h2>
			                </header>
			                <section>
			                    <p>
			                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pharetra sapien. Aliquam rutrum nibh nec enim luctus molestie. Cras consequat condimentum magna a gravida. Etiam sapien risus, bibendum id velit ac, congue porttitor sapien.
			                    </p>
			                        <em>
			                            Article publié par John Doe
			                        </em>
			                    <hr />
			                </section>
			            </article>
			            <article>
			                <header class="major">
			                    <h2>Recette de la fondue Savoyarde</h2>
			                </header>
			                <section>
			                    <p>
			                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pharetra sapien. Aliquam rutrum nibh nec enim luctus molestie. Cras consequat condimentum magna a gravida. Etiam sapien risus, bibendum id velit ac, congue porttitor sapien.
			                    </p>
			                        <em>
			                            Article publié par John Doe
			                        </em>
			                    <hr />
			                </section>
			            </article>
					</div>
				</div>
			</section>
	
			<section id="footer">
				<div class="container">
				<?php
						if ( isset( $_SESSION[ 'login' ], $_SESSION[ 'mdp' ] ) ) {
							if ( isset( $_POST['titre'], $_POST['contenu'] ) ) {
								if (empty( $_POST['titre']) && empty( $_POST['contenu'] ) && isset($_POST['submit'])) {
									echo '<p style="color:red;">Veuillez ne pas laissez de champs vide.<p>';
									echo '<header class="major">
														<h2>Ajout d\'un article</h2>
														</header>
															<form method="post" action="#footer" autocomplete="off">
														<div class="row gtr-uniform">
															<div class="col-12 col-12-xsmall">
															<input type="text" name="titre" id="titre" placeholder="Titre" /></div>
								
															<div class="col-12">
															<textarea name="contenu" id="contenu" placeholder="Contenu" rows="4"></textarea></div>
															<div class="col-12">
																<ul class="actions special">
																	<li><input type="submit" name="submit" value="Ajouter" class="primary" /></li>
																</ul>
															</div>
														</div>
													</form>';
								}
								if ( !empty( $_POST['titre'] ) ) {
									if (!preg_match('/[0-9.-]/',$_POST['titre']) ) {
										if ( strlen( $_POST['titre'] ) <= 15 ) {
											strip_tags( $_POST['titre'] );
											$_SESSION[ 'titre' ] = $_POST[ 'titre' ];
											echo '<strong>Titre de l\'article:</strong> '.$_SESSION[ 'titre' ].'<br>';
										}
									}
								}
								else if(empty( $_POST['titre'] ) && !empty( $_POST['contenu'] ) && isset($_POST['submit'])){
									echo '<strong>Il n\'y a pas de titre à l\'article.</strong> <br>';
								}
								if (!empty( $_POST['contenu'] ) ) {
									if ( !preg_match('/[0-9]/',$_POST['contenu']) ) {
										if ( strlen( $_POST['contenu']) <= 256 ) {
											strip_tags( $_POST['contenu'] );
											$_SESSION[ 'contenu' ] = $_POST[ 'contenu' ];
											echo '<strong>Contenu de l\'article :</strong>  '.$_SESSION[ 'contenu' ];
										}
									}
								}
								else if(empty( $_POST['contenu'] ) && !empty( $_POST['titre'] ) && isset($_POST['submit'])){
									echo '<strong>Il n\'y a pas de Contenu à l\'article.</strong> <br>';
								}
							
								
							}else {
								echo '<header class="major">
													<h2>Ajout d\'un article</h2>
													</header>
														<form method="post" action="#footer" autocomplete="off">
													<div class="row gtr-uniform">
														<div class="col-12 col-12-xsmall">
														<input type="text" name="titre" id="titre" placeholder="Titre" /></div>
							
														<div class="col-12">
														<textarea name="contenu" id="contenu" placeholder="Contenu" rows="4"></textarea></div>
														<div class="col-12">
															<ul class="actions special">
																<li><input type="submit" name="submit" value="Ajouter" class="primary" /></li>
															</ul>
														</div>
													</div>
												</form>';
							}
						}
						else {
							echo '<header class="major" id="connect">
							<h2>Se connecter</h2>
							</header>
								<form method="post" action="se-co.php" autocomplete="off">
							<div class="row gtr-uniform">
								<div class="col-12 col-12-xsmall">
								<input type="text" name="login" id="login" placeholder="Login" /></div>
	
								<div class="col-12 col-12-xsmall">
								<input type="password" name="mdp" id="mdp" placeholder="Mot de passe" /></div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Se connecter" class="primary" /></li>
									</ul>
								</div>
							</div>
						</form>';
						}
				?>
					
			        
				</div>
			</section>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jq.key.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>