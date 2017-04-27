<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
		<form method="POST" action="public/php/insert_ref_pro.php">
			<h1>
				<?php
					echo $_SESSION['id_entreprise'];
				?>
			</h1>
			<br>
			<h2>Ajouter un référent professionel :</h2>
			<br>
			<label>Nom du référent :</label>
			<input type="text" name="nom_referent_pro">
			<br>
			<label>Fonction</label>
			<select name="fonction_referent_pro">
				<option>PDG</option>
				<option>Chef de projet</option>
				<option>Directeur service informatique</option>
				<option>Salarié</option>
			</select>
			<br>
			<button type="submit">Valider</button>
		</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>