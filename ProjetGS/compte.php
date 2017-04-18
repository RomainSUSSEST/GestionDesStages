<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
		<form method="POST">
			<label>Changer mon mot de passe :</label>
			<input name="newmdp" id="newmdp" type="password" />
			<br>
			<label>Confirmer votre mot de passe :</label>
			<input name="verifnewmdp" id="verifnewmdp" onblur="verifMDP()" type="password" />
			<br>
			<div id="résultat_mdp"></div>
			<div id="bouton_valider" style="display: none;">
				<button type="submit">Confirmer</button>
			</div>
		</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>

<script type="text/javascript">
	function verifMDP()
	{
		var champ1 = document.getElementById("newmdp").value;
		var champ2 = document.getElementById("verifnewmdp").value;
		var results = document.getElementById("résultat_mdp");
		 
		if(champ1 == champ2)
		{
			document.getElementById("résultat_mdp").style.display = "none";

			document.getElementById("bouton_valider").style.display = "block";
		}
		else
		{
			results.innerHTML = "Erreur, veuillez saisir des mots de passe identiques !";
		}
	}
</script>