$(function() {
    $('#btnConnexion').on('click', function() {
        console.log('le bouton est cliqué');
        let nom = $('#nom').val();
        let mail = $('#adresseMail').val();

        $.ajax({
            url: 'connexion',  
            method: "POST",
            data: {
                'nom': nom,
                'mail': mail
            },
            dataType: "json",
            success: function (data) {
                if (!data.connected) {
                    $('#btnMsg').text('Erreur de connexion');
                    $('#btnMsg').removeClass('d-none');
                } else {
                    $('#btnMsg').addClass('d-none');  // Cacher le message d'erreur
                    $('#userName').removeClass('d-none');
                    alert("Vous etes connecter sous le pseudo " + nom)
                    
                    window.location = '/';
                }
            },
            error: function() {
                // Gérer les erreurs réseau ou autres
        
            }    
        });
    });

    // Si vous avez un bouton pour revenir au formulaire de connexion
    $('#btnLogin').on('click', function(){
        window.location = '/ConnexionForm';
    });
});
