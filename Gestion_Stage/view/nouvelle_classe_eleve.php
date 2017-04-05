<?php include 'includes/header.php' ?>
<div class="container_stage">
	<div class="box_menu_accordeon">
		<?php include 'includes/menu_gauche.php' ?>
	</div>
		<div class="contenue_stage_acc">
			<div class="titre_principal">
			Dupont Jean Marc
			</div>
			<div class="titre_secondaire_visite">
			Associer l'élève a une nouvelle classe
			</div>
			<div class="ajout_visite">
			<form method="post" action="#">
				<label class="label_visite_form">Classe :</label>
				<select name="pays">
				           <option value="france">BTS1</option>
				           <option value="espagne">BTS2</option>
				           <option value="italie">LICENSE</option>
				</select>
				<br>
				<br>
				<label class="label_visite_form">Année :</label>
				<select name="pays">
				           <option value="france">2016/2017</option>
				           <option value="espagne">2015/2016</option>
				           <option value="italie">2014/2015</option>
				</select>
				<br>
				<br>
				<div class="submit"><input type="submit" value="   Valider   "></div>
			</form>
			</div>
		</div>
</div>
<?php include 'includes/footer.php' ?>