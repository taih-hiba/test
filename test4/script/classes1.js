$(document).ready(function () {
    var id = $("#id");
    var nom = $("#nom");
    var filiere = $("#filiere");
    $.ajax({
        url: 'controller/gestionClasses.php',
        data: {op: ''},
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
            $.ajax({
        url: 'controller/gestionFiliere.php',
        data: {op: ''},
        type: 'POST',
        success: function (fata, textStatus, jqXHR) {
            var option = '<option selected>Choisi une filiere</option>';
            for (var i = 0; i < fata.length; i++) {
                option += '<option value="' + fata[i].id + '">' + fata[i].libelle + '</option>';
                remplir(data,fata);
            }
            filiere.html(option);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
        }
    });

            
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
        }
    });


    $('#btn').click(function () {
        var nom = $("#nom");
        var filiere = $("#filiere");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controller/gestionClasses.php',
                data: {op: 'add', filiere: filiere.val(), nom: nom.val()},
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    remplir(data);
                    nom.val('');
                    filiere.val('');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                }
            });
        }

    });

    $(document).on('click', '.supprimer', function () {
        var id = $(this).closest('tr').find('th').text();
        $.ajax({
            url: 'controller/gestionClasses.php',
            data: {op: 'delete', id: id},
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                remplir(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });
    });

    $(document).on('click', '.modifier', function () {
        var btn = $('#btn');
        var id = $(this).closest('tr').find('th').text();
        var nom = $(this).closest('tr').find('td').eq(0).text();
        var filiere = $(this).closest('tr').find('td').eq(1).text();
        btn.text('Modifier');
        $("#nom").val(nom);
        $("#filiere").val(filiere);
        $("#id").val(id);
        btn.click(function () {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controller/gestionClasses.php',
                    data: {op: 'update', id: $("#id").val(), filiere: $("#filiere").val(), nom: $("#nom").val()},
                    type: 'POST',
                    success: function (data, textStatus, jqXHR) {
                        remplir(data);
                        $("#nom").val('');
                        $("#filiere").val('');
                        btn.text('Ajouter');
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus);
                    }
                });
            }
        });
    });
    function remplir(data,fata) {
        var contenu = $('#table-content');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr><th scope="row">' + data[i].id + '</th>';
            ligne += '<td>' + data[i].nom + '</td>';
            ligne += '<td>' + fata[i].code + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});



