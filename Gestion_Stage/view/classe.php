<?php
$classe = $_GET['classe'];
var_dump($classe)
?>

<?php include 'includes/header.php' ?>
<div class="container_stage">
	<div class="box_menu_accordeon">
		<?php include 'includes/menu_gauche.php' ?>
	</div>
		<div class="contenue_stage_acc">
			<div id="titre_principal_classe">
			Classe <?php echo $classe ?>
			</div>
			<div class="btn_ajout">
			<input type="button" value="   Ajouter une année   " onClick="javascript:document.location.href='#'" />
			</div>
			<div id="titre_secondaire_classe">
			Historique des élèves par année
			</div>
			<div id="tableau_histo_stage">
				<?php 
				$requete= $con->query( 'SELECT Nom_etudiant,Prenom_etudiant,telephone_etudiant,annee_obtention_bac FROM etudiant,bac,classe,appartient,annee WHERE etudiant.Id_bac = Bac.Id_bac and etudiant.Id_etudiant = appartient.Id_etudiant and classe.Id_classe = appartient.Id_classe and annee.Id_annee = appartient.Id_annee and Nom_classe = "'.$classe.'" And annee like "2016"'); ?>
			<TABLE BORDER CELLPADDING=10 CELLSPACING=0>
				<TR>
					<p><strong>2016/2017</strong></p>
					<TH>Nom</TH>
					<TH>Prénom</TH>
					<TH>N°téléphone</TH>
					<TH>Année obtention BAC</TH>
					<TH>Action</TH>
				</TR>
				<?php  while($donnees=$requete->fetch()) { ?>
				<TR>
						<TD><?php echo($donnees['Nom_etudiant']); ?></TD>
				    	<TD><?php echo($donnees['Prenom_etudiant']); ?></TD>
				    	<TD><?php echo($donnees['telephone_etudiant']); ?></TD>
				    	<TD><?php echo($donnees['annee_obtention_bac']); ?></TD>
				    	<TH><a href="#" class="lien_tableau">Voir détail</a></TH>
				</TR>
				<?php } ?>
			</TABLE>
			<br>
			<br>
			<?php 
			$requete2= $con->query( 'SELECT Nom_etudiant,Prenom_etudiant,telephone_etudiant,annee_obtention_bac FROM etudiant,bac,classe,appartient,annee WHERE etudiant.Id_bac = Bac.Id_bac and etudiant.Id_etudiant = appartient.Id_etudiant and classe.Id_classe = appartient.Id_classe and annee.Id_annee = appartient.Id_annee and Nom_classe = "'.$classe.'" And annee like "2015"'); ?>
			<TABLE BORDER CELLPADDING=10 CELLSPACING=0>
				<TR>
					<p><strong>2015/2016</strong></p>
					<TH>Nom</TH>
					<TH>Prénom</TH>
					<TH>N°téléphone</TH>
					<TH>Année obtention BAC</TH>
					<TH>Action</TH>
				</TR>
				<?php  while($donnees2=$requete2->fetch()) { ?>
				<TR>
					<TD><?php echo($donnees2['Nom_etudiant']); ?></TD>
				    <TD><?php echo($donnees2['Prenom_etudiant']); ?></TD>
				    <TD><?php echo($donnees2['telephone_etudiant']); ?></TD>
				    <TD><?php echo($donnees2['annee_obtention_bac']); ?></TD>
				    <TH><a href="#" class="lien_tableau">Voir détail</a></TH>
				</TR>
				<?php } ?>
			</TABLE>
			</div>
			<div class="page_select">
				<ul class="page_selector">
					<li>
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
				</ul>
			</div>
		</div>			
</div>
<?php include 'includes/footer.php' ?>