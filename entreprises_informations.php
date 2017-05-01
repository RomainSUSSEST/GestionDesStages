<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>
				<?php
					echo $_SESSION['nom_entreprise'];
				?>
			</h1> <br>
			Cette société totalise  stages à son actif. <br><br>
			<form method="POST" action="public/php/insert_details_entreprise.php">
				<label>Nom de l'entreprise :</label>
				<input type="text" value="<?php echo $_SESSION['nom_entreprise'];?>" name="nom_entreprise">
				<br>
				<br>
				<label>Type d'entreprise :</label>
				<select name="type_entreprise">
					<?php
						$type_entreprise = 'SELECT * FROM type ';
						$req = $bdd->query($type_entreprise);

						while ($row = $req->fetch()) 
						{
							echo "<option value=".$row['lib_type'].">";
							echo $row['lib_type'];
							echo "</option>";
						};
					?>
				</select>
				<p>ou</p> <label>nouveau type d'entreprise :</label>
				<input   type="text" name="nouveau_type">
				<br>
				<br>
				<label>Chiffre d'affaires :</label>
				<input type="number" name="ca_entreprise" value="<?php echo $_SESSION['caentreprise'];?>">
				<br>
				<br>
				<label>Adresse postale :</label>
				<textarea name="adresse_entreprise"><?php echo $_SESSION['adresse_entreprise']; ?></textarea>
				<br>
				<br>
				<label>Téléphone :</label>
				<input name="telephone_entreprise" value="<?php echo $_SESSION['tel_entreprise'];?>" />
				<br>
				<br>
				<label>Resp. technique :</label>
				<select name="resp_technique">
					<?php
						$resptech = 'SELECT * FROM rf_pro';
						$req = $bdd->query($resptech);

						while ($row = $req->fetch()) 
						{
							echo "<option value=".$row['nom_referent_pro'].">";
							echo $row['nom_referent_pro'];
							echo "</option>";
						};
						?>
				</select>
				<p>ou</p> <label>nouveau respon. technique :</label>
				<input  type="text" name="nouveau_resp_technique">
				<br>
				<button>Editer les informations</button>
			</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>