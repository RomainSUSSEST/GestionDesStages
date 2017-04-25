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