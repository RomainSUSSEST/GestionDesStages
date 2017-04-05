<?php include 'includes/header.php' ?>
<div class="container_stage">
	<div class="box_menu_accordeon">
		<?php include 'includes/menu_gauche.php' ?>
	</div>
		<div class="contenue_stage_acc">
			<div class="titre_principal">
			Suivi scolaire
			</div>
				<div id="ajouter_annees">
					<div id="titre_secondaire_classe">
						Ajouter une année
					</div>
					<div class="ajout_visite">
						<form method="post" action="#">
							<label>Nom :</label>
							<input type="text" name="date_visite">
							<div>
							<br>
								<input type="submit" value="   Valider   ">
							</div>
						</form>
					</div>
				</div>
			<div id="titre_secondaire_classe">
			Liste des années scolaires
			</div>
			<div id="liste_annees">
			<TABLE BORDER CELLPADDING=10 CELLSPACING=0>
				<TR>
					<TH>Année</TH>
					<TH>Action</TH>
				</TR>
				<TR>
					<TD>2016/2017</TD>
				    <TH><a href="#" class="lien_tableau">Supprimer</a></TH>
				</TR>
				<TR>
					<TD>2015/2016</TD>
				    <TH><a href="#" class="lien_tableau">Supprimer</a></TH>
				</TR>
				<TR>
					<TD>2014/2015</TD>
				    <TH><a href="#" class="lien_tableau">Supprimer</a></TH>
				</TR>
			</TABLE>
			</div>
		</div>
</div>
<?php include 'includes/footer.php' ?>