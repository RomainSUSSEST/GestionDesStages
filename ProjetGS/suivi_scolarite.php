<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
		<div class="left">
			<h1>Suivi de Scolarité</h1>
			<br>
			<form action="/projetgs/suivi_classe.php">
				<h2>Rechercher une classe :</h2>
				<br>
				<label>Nom de la classe :</label>
				<select>
					<option></option>
				</select>
				<br>
				<button>Rechercher</button>
			</form>
			<br>
			<form action="/projetgs/suivi_eleve.php">
				<h2>Rechercher un élève :</h2>
				<br>
				<label>Nom de l'élève :</label>
				<select>
					<option></option>
				</select>
				<br>
				<button>Rechercher</button>
			</form>
		</div>
		<div class="right">
			<a href="suivi_ajoutclasse.php"><button>Ajouter une classe</button></a>
			<br>
			<a href="suivi_ajouteleve.php"><button>Ajouter un élève</button></a>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>