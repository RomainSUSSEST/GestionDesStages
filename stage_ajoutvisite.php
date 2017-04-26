<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>
				<?php
					echo $_SESSION['etudiant']." - ".$_SESSION['classe'];
				?>
			</h1>
			<br>
			<h2>Ajouter une nouvelle visite :</h2>
			<br>
			<form method="POST" action="insert_visiter.php">
				<label>Date de visite :</label>
				<input type="text" value="date_visite">
				<label>Observations :</label>
				<textarea value="observations"></textarea>
				<button>Valider</button>
			</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>