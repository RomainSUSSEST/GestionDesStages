<?php 
	include 'view/includes/header.php';
?>
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1>Gestion des stages</h1>
				</div>
				<ul class="main-menu">
					<li>
						<a href="#" class="active">Accueil</a>
					</li>
					<li>
						<a href="#">Stages</a>
					</li>
					<li>
						<a href="#">Entreprises</a>
					</li>
					<li>
						<a href="#">Suivi Scolarité</a>
					</li>
				</ul>
				<ul class="main-menu-right">
					<li>
						<a href="#">Bienvenue Jeff</a>
						<ul>
							<li><a href="">Mon compte</a></li>
							<li><a href="">Déconnexion</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

		<?php
			include 'view/includes/menu_vertical.php';
		?>

		<div class="container">
			<div id="content">
				<h1>Suivi de Scolarité</h1> 
				<br>
				<h2>Rechercher une classe :</h2>
				<br>
				<div>
					<div>
						<form>
							<label>Nom de la classe :</label>
							<select>
								<option>BTS 1</option>
								<option>BTS 2</option>
							</select>
							<input type="submit" value="Rechercher"/>
						</form>
					</div>
					<div class="btn_add">
						<button>Ajouter une classe</button>
					</div>
					<div>
						<form>
							<label>Nom de l'élève :</label>
							<select>
								<option>DUPONT Gérard</option>
								<option></option>
							</select>
							<input type="submit" value="Rechercher"/>
						</form>
					</div>
					<div class="btn_add">
						<button>Ajouter un élève</button>
					</div>
				</div>
			</div>
		</div>
<?php 
	include 'view/includes/footer.php';
?>