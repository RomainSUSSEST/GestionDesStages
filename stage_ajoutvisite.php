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
			<form method="POST" action="public/php/insert_visite.php">
				<h2>Ajouter une nouvelle visite :</h2>
				<br>
				<label>IDvisite :</label>
				<input name="idvisite" />
				<input type="hidden" name="idstage" value=<?php echo $_SESSION['idstage']; ?>>
				<label>Date de visite :</label>
				<input name="date_visite" />
				<label>Observations :</label>
				<input name="observations" />
				<button>Valider</button>
			</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>