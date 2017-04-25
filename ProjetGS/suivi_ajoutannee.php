<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>Suivi Scolarité</h1>
			<div class="left">
				<h2>Liste des années scolaires</h2>
				<table>
					<tr>
					<th>Année</th>
					<th>Action</th>
					</tr>
					<?php
						$annee = 'SELECT * FROM annee';
						$req = $bdd->query($annee);

						while ($row = $req->fetch()) 
						{
							echo "<tr>";
							echo "<td>".$row['date_annee']."</td> <td><a href='/ProjetGS/public/php/delete_annee.php?id=".$row['date_annee']."'>Supprimer</a></td>";
							echo "</tr>";
						};
					?>
				</table>
			</div>
			<div class="right">
				<h2>Ajouter une année</h2>
				<form action="/projetgs/public/php/insert_annee.php" method="GET">
					<label>Année :</label>
					<input name="nouvelle_annee" />
					<br>
					<button>Ajouter</button>
				</form>
			</div>
		</div>
	</div>
<?php
	include '/view/includes/footer.php';
?>