<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
		<h1>Changer mon mot de passe</h1>
		<br>
       	<form method="post" action="change_pw.php">
	      <label for="pseudo">Votre nouveau mot de passe :</label><input type="password" name="mdp" id="mdp" required/>
	      <br>
	      <label for="pseudoConfirm">Retapez votre nouveau mot de passe :</label><input type="password" name="mdpConfirm" id="mdpConfirm" required/>
	      <br>
	     <input type="submit" value="Valider">
	     </form>
		</div>
	</div>

<?php 
	include '/view/includes/footer.php';
?>