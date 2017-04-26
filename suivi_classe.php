<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<div class="left">
				<h1>
				<form>
				<select name="annee">
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
				</select></h1>
				<br>
				<h2>Historique des élèves par année</h2>
				<br>
				<?php
					$classes = 'SELECT * FROM inscrit WHERE id_classe="'.$_GET['classe'].'"';
					$req = $bdd->query($classes);

					$eleve = 'SELECT nom_etudiant, prenom_etudiant, mail_etudiant, annee_obtention_bac FROM etudiant_sup WHERE id_etudiant = (SELECT id_etudiant FROM inscrit WHERE id_classe="'.$_GET['classe'].'")';

					$requ = $bdd->query($eleve);
					var_dump($requ);
					var_dump($eleve);

					while ($row = $req->fetch()) {
						echo "<p><h1>".$row['date_annee']."</h1></p>";
						echo "<table>";
						echo "<tr>";
						echo "<th>Nom</th>";
						echo "<th>Prénom</th>";
						echo "<th>Mail</th>";
						echo "<th>Année obtention BAC</th>";
						echo "<th>Action</th>";
						echo "</tr>";

						while ($raw = $requ->fetch()) {
							echo "<tr>";
							echo "<td>".$raw['nom_etudiant']."</td> <td>".$raw['prenom_etudiant']."</td> <td>".$raw['mail_etudiant']."</td><td>".$raw['annee_obtention_bac']."</td> <td><a href='#'>Voir détail</a></td>";
							echo "</tr>";
						}

						echo "</table>";
					}
				?>
			</div>
			<div class="right">
				<a href="suivi_ajoutannee.php"><button>Ajouter une année</button></a>
			</div>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>