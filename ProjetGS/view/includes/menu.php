		<div class="header">
			<div class="container">
				<div class="logo">
					<h1>Gestion des stages</h1>
				</div>
				<ul class="main-menu">
					<li>
						<a href="/projetgs/accueil.php">Accueil</a>
					</li>
					<li>
						<a href="/projetgs/stage.php">Stages</a>
					</li>
					<li>
						<a href="/projetgs/entreprises.php">Entreprises</a>
					</li>
					<li>
						<a href="/projetgs/suivi_scolarite.php">Suivi Scolarité</a>
					</li>
				</ul>
				<ul class="main-menu-right">
					<li>
						<a href="#">Bienvenue <?php echo $_SESSION['login']; ?> </a>
						<ul>
							<li><a href="/projetgs/compte_test.php">Mon compte</a></li>
							<li><a href="/projetgs/public/php/session_destroy.php">Déconnexion</a></li> 
						</ul>
					</li>
				</ul>
			</div>
		</div>
