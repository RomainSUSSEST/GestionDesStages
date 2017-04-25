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
			<form action="/projetgs/suivi_classe.php" method="GET">
				<h2>Rechercher une classe :</h2>
				<br>
				<label>Nom de la classe :</label>
				<select name="classe">
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
				<button>Rechercher</button>
			</form>
			<br>
			<form action="/projetgs/suivi_eleve.php" method="GET">
				<h2>Rechercher un élève :</h2>
				<br>
				<label>Nom de l'élève :</label>
				<select name="eleve">
					<?php
					$id_eleve = 'SELECT * FROM etudiant_sup';
					$req = $bdd->query($id_eleve);

					while ($row = $req->fetch()) 
					{
						echo "<option value=".$row['id_etudiant'].">";
						echo $row['nom_etudiant']." ".$row['prenom_etudiant'];
						echo "</option>";
					};
					?>
				</select>
				<br>
				<button>Rechercher</button>
			</form>
		</div>
		<div class="right">
			<p>
				<a href="suivi_ajoutclasse.php"><button>Ajouter une classe</button></a>
			</p>
			<br>
			<p>
				<a href="suivi_ajouteleve.php"><button>Ajouter un élève</button></a>
			</p>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>