<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>
			<?php
				$laclasse='SELECT lib_classe from classe WHERE id_classe = (SELECT id_classe from inscrit where id_etudiant = "'.$_POST['eleve'].'")';
				$req = $bdd->query($laclasse);
				while ($row = $req->fetch()) {
					$laclasse = $row['lib_classe'];
				}

				$etudiant = 'SELECT nom_etudiant, prenom_etudiant  FROM etudiant_sup where id_etudiant = "'.$_POST['eleve'].'"';
				$req = $bdd -> query($etudiant);

				while ($row = $req->fetch()) {
					echo $row['nom_etudiant']." ".$row['prenom_etudiant']." - ".$laclasse;
					$_SESSION['nom_etudiant'] =$row['nom_etudiant'];
					$_SESSION['prenom_etudiant'] =$row['prenom_etudiant'];
				}
				$_SESSION['classe'] = $laclasse;

			?>
			</h1>
			<div class="left">
				<br>
				<h2>Historique des stages</h2>
				<br>
				<table>
						<tr>
						<th>Année</th>
						<th>Entreprise</th>
						<th>Référent Pédagogique</th>
						<th>Référent Professionnel</th>
						<th>Détails</th>
						</tr>
						<?php
							$stages = 'SELECT * FROM stage WHERE id_etudiant ='.$_SESSION['id_etudiant'].'';
							$req = $bdd ->query($stages);

							while ($row = $req->fetch()) 
							{
								echo "<tr>";
								echo "<td>".$row['date_deb_stage'].$row['date_fin_stage']."</td><td>".$row['id_entreprise']."</td><td>".$row['id_rf_peda']."</td><td>".$row['id_rf_pro']."</td><td><a href='stage_detail.php?stage=".$row['id_stage']."'>Détails</a></td>";
								echo "</tr>";
							};
						?>
					</table>
				</div>
				<div>
					<button>Ajouter un stage</button>
				</div>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>