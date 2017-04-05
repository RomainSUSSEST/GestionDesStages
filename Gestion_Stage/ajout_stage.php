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
				<form method="post" action="#">
				<label>Entreprise existante :</label>
				<select>
					<option></option>
				</select>
				<label>ou nouvelle :</label>
					<input type="text" name="entreprise-connu" placeholder="nouvelle entreprise">
				<br>
				<br>
				<br>
				<label>Resp. pédagogique :</label>
				<select>
					<option></option>
				</select>
				<label>ou nouveau :</label>
					<input type="text" name="responsable-pedagogique" placeholder="nouveau responsable">
				</form>
				<br>
				<br>
				<br>
				<label>Resp. technique :</label>
				<select>
					<option></option>
				</select>
				<label>ou nouveau :</label>
					<input type="text" name="responsable-technique" placeholder="nouveau responsable">
				</form>
				<br>
				<br>
				<br>
				<label>Année concernée :</label>
				<select>
					<option></option>
				</select>
				<label>ou nouveau :</label>
					<input type="text" name="entreprise-connu" placeholder="nouveau responsable">
				</form>
			</div>
		</div>
<?php 
	include 'view/includes/footer.php';
?>