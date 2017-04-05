<?php 
	include 'view/includes/header.php';
?>
<?php 
	include 'view/includes/menu.php';
?>

<?php
	include 'view/includes/menu_vertical.php';
?>

		<div class="container">
			<div id="content">
				<div>
					<p id="eleve-title"><!--nom de l'élève plus sa classe --></p>
				</div>
				<div>
					<h3>Historique des stages</h3>
					<a href="ajout_stage" id="add-stage">Ajouter un stage</a>
				</div>

				<table>
					<thead>
					<tr>
						<td>Année</td>
						<td>Entreprise</td>
						<td>Référent pédagogique</td>
						<td>Référent professionnel</td>
						<td>Action</td>
					</tr>
					</thead>
					<tbody>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tbody>
				</table>
			</div>
		</div>
<?php 
	include 'view/includes/footer.php';
?>