(function($) {
	if($("#login_form").length) {
		$("#login_form").submit(function(e) {
			e.preventDefault();
		    $.post(
            'commons/database/traitement_session.php', // Un script PHP que l'on va créer juste après
            {
                login : $("#login").val(),  // Nous récupérons la valeur de nos inputs que l'on fait passer à connexion.php
                mdp : $("#mdp").val()
            },

            function(data){ // Cette fonction ne fait rien encore, nous la mettrons à jour plus tard
            	console.log(data);
            	if(data == 1){
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.

                     location.href = "/projetgs/accueil.php";
                }
                else{
                     // Le membre n'a pas été connecté. (data vaut ici "failed")
                     swal({title: 'Erreur : Connexion Echouée', confirmButtonText : 'Se reconnecter'})
                }
            },

            'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !
         );
		})
	}
})(jQuery)