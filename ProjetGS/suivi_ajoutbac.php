<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>Suivi Scolarité</h1>
			<div class="left">
				<h2>Liste des BAC</h2>
				<table>
					<tr>
					<th>Intitulé</th>
					<th>Libellé</th>
					<th>Action</th>
					</tr>
					<?php
						$type_bac = 'SELECT * FROM type_bac';
						$req = $bdd->query($type_bac);

						while ($row = $req->fetch()) 
						{
							echo "<tr>";
							echo "<td>".$row['id_type_bac']."</td> <td>".$row['lib_typebac']."</td> <td><a href='#'>Supprimer</a></td>";
							echo "</tr>";
						};
					?>
				</table>
			</div>
			<div class="right">
				<h2>Ajouter un nouveau BAC</h2>
				<form action="/projetgs/public/php/insert_bac.php" method="GET">
					<label>Intitulé :</label>
					<input name="nouveau_idbac" />
					<br>
					<label>Libellé :</label>
					<input name="nouveau_libbac" />
					<br>
					<button>Ajouter</button>
				</form>
			</div>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>