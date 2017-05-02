<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>
			<?php 
				$eleve = 'SELECT * FROM etudiant_sup WHERE id_etudiant = '.$_SESSION['eleve'].'';
				$req = $bdd->query($eleve); 

				while ($row = $req->fetch()) 
						{
							echo $row['nom_etudiant']." ".$row['prenom_etudiant'];
						};
			?>
			</h1>
			<br>
			Associer l'élève à une nouvelle classe :
			<form method="POST" action=
			<?php echo "insert_newclasse.php?eleve=";
			echo $_SESSION['eleve'];
			echo "";
			?>>
				<label id="classe"> Classe :</label>
				<select name="classe" id="classe">
					<?php
					$id_classe = 'SELECT * FROM classe';
					$req = $bdd->query($id_classe);

					while ($row = $req->fetch()) 
					{
						echo "<option value=".$row['id_classe'].">";
						echo $row['id_classe'];
						echo "</option>";
					};
					?>
				</select>
				<br>
				<label id="annee"> Année :</label>
				<select name="annee" id="annee">
					<?php
					$id_annee = 'SELECT * FROM annee';
					$req = $bdd->query($id_annee);

					while ($row = $req->fetch()) 
					{
						echo "<option value=".$row['date_annee'].">";
						echo $row['date_annee'];
						echo "</option>";
					};
					?>
				</select>
				<br>
				<button>Valider</button>
			</form>
		</div>

	</div>
<?php 
	include '/view/includes/footer.php';
?>
