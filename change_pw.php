<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<?php
	$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

	try {
	$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
	} catch(Exeption $e) {
		die($e);
	}

	if ($_POST['mdp']==$_POST['mdpConfirm'])
	{
		$password=$_POST['mdp'];
		$req = $bdd->prepare('UPDATE utilisateur SET mdp=? WHERE login= ?');
		$req->execute(array(
		$password,
		$_SESSION['login']
	));
	 
	echo '<p>La modification de mot de passe a été prise en compte !<p><br/>';
	?>
	<button><a href="/projetgs/compte_test.php">Retour à la page d'accueil !</a></button>
	<?php
	}
	else{
	echo'<p>Vous n\'avez pas tapé deux fois le même mot de passe.</p>'?>
	<button><a href="/projetgs/compte_test.php">Retour</a></button><?php
	}
	 
?>

		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>