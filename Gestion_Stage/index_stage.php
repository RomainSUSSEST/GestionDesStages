<?php
	include 'view/includes/header.php';
?>
<?php
	include 'view/includes/menu.php';
?>

<?php
	include 'view/includes/menu_vertical.php';
?>
<section id="stage">
			<div class="container">
				<div id="content">
					<div class="title">
						<h1>Gestion des stages</h1>
						<h2>Rechercher un élève</h2>
					</div>
					<div class="liste-classe">
						<form method="post" action="#">
							<label for="classe">Classe:</label>
							<div class="milieu">
								<select>
									<option value="bts1">BTS1</option>
									<option value="bts2">BTS2</option>
									<option value="licence">Licence</option>
								</select>
							</div>
							<br>
							<label for="eleve">Eleve:</label>
							<select>
								<!-- Connexion BDO pour charger la liste des élèves en fonction de la classe -->
							</select>
							<br>
							<input type="submit" name="rechercher" value="Rechercher">
						</form>
					</div>
				</div>
			</div>
		</section>
<?php
	include 'view/includes/footer.php';
?>
