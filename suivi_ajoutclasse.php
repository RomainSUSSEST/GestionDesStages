<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>Nouvelle Classe</h1>
			<br>
			<form method="GET" action="/projetgs/public/php/insert_classe.php">
				<h2>Ajouter une nouvelle classe :</h2>
				<br>
				<label>Libellé :</label>
				<input name="libclasse" />
				<br>
				<button>Valider</button>
			</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>