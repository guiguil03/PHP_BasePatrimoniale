$(function() {
    $('#btnConnexion').on('click', function() {
        let nom = $('#nom').val();
        let mail = $('#adresseMail').val();

        $.ajax({
            url: '{{ base_url("connexionForm") }}',  
            method: "GET",
            data: {
                'nom': nom,
                'adresseMail': mail
            },
            dataType: "json",
            success: function (data) {
                if (!data.connected) {
                    $('#btnMsg').text('Erreur de corrnnexion');
                    $('#btnMsg').removeClass('d-none');
                } else {
                    $('#btnMsg').addClass('d-none');  // Cacher le message d'erreur
                    $('#userName').removeClass('d-none');
                    alert("Vous etes connecter sous le pseudo " + nom)
                    
                    window.location = '/';
                }
            },
            error: function() {
                $('#btnMsg').removeClass('d-none').text('Erreur de connexion.');        
            }    
        });
    });

    // Si vous avez un bouton pour revenir au formulaire de connexion
    $('#btnLogin').on('click', function(){
        window.location = '/ConnexionForm';
    });
});
