$(function() {
    $('#btnConnexion').on('click', function () {
        let nom = $('#nom').val();
        let mail = $('#adresseMail').val();

        $.ajax({
            url: '/connexion',
            method: 'POST',
            data: {
                'nom': nom,
                'adresseMail': mail,
            },
            dataType: 'json',
            success: function (response) {
                if (response.status === 'error') {
                    alert(response.message); // Pop-up en cas d'erreur
                } else {
                    alert(response.message); // Pop-up en cas de succès
                    window.location.href = "/MapController";
               }
            },
            error: function () {
                alert('Une erreur réseau s\'est produite.');
            },
        });
    });

    // Si vous avez un bouton pour revenir au formulaire de connexion
    $('#btnLogin').on('click', function(){
        window.location = '/ConnexionForm';
    });
});
