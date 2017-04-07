<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>Gestion des Stages</h1>
			<br>
			<h2>Rechercher un élève :</h2>
			<br>
			<p>	
				<label id="classe"> Classe :</label>
				<select name="classe" id="classe">
					<option value="ajouter">Ajouter une classe</option>
				</select>
			</p>
			<p>
				<label id="eleve"> Eleve :</label>
				<select name="eleve" id="eleve">
					<option></option>
				</select>
			</p>
			<button>Rechercher</button>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>