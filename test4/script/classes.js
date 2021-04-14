
$(document).ready(function () {
    table = $('#tclasses').DataTable({
        scrollX: true,
        cache: false,
        ajax: "",
        ajax: {
            url: "controller/gestionClasses.php",
            type: "POST",
            dataSrc: "",
            data: {
                "op": ""
            }
        },
        "columns": [{
                "data": "id"
            },
            {
                "data": "nom"
            },
            {
                "data": "code"
            },
            {
                "render" : function (){ return '<button type="button" class="btn btn-outline-danger supprimer">Supprimer</button>';}
            },
            {
                "render" : function (){ return '<button type="button" class="btn btn-outline-secondary modifier">Modifier</button>';}
            }
        ]
    });
    function id_to_code(sss){
            $.ajax({
            url: 'controller/gestionFiliere.php',
            data: {op: 'find', id: sss},
            type: 'POST',
            async: false,
            success: function (data, textStatus, jqXHR) {
                //remplir(data);
                console.log(data);
//                nom.val('');
//                filiere.val('');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });
    };
    var filiere = $("#filiere");
    $.ajax({
        url: 'controller/GestionFiliere.php',
        data: {op: ''},
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
            var option = '<option selected>Choisi un filiere</option>';
            for (var i = 0; i < data.length; i++) {
                option += '<option value="' + data[i].id + '">' + data[i].libelle + '</option>';
            }
            filiere.html(option);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
        }
    }); 
//    var baseurl = "http://localhost/gestionpointage/controller/gestionClasses.php";
//    var xmlhttp = new XMLHttpRequest();
//    xmlhttp.open("POST", baseurl, true);
//    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//    xmlhttp.send("op");
//    xmlhttp.onreadystatechange = function () {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            var persons = JSON.parse(xmlhttp.responseText);
//            $("#tclasses").DataTable({
//                data: persons,
//                "columns": [{
//                        "data": "id"
//                    },
//                    {
//                        "data": "nom"
//                    },
//                    {
//                        "data": "filiere"
//                    },
//                    {
//                        "render": function () {
//                            return '<button type="button" class="btn btn-outline-danger supprimer">Supprimer</button>';
//                        }
//                    },
//                    {
//                        "render": function () {
//                            return '<button type="button" class="btn btn-outline-secondary modifier">Modifier</button>';
//                        }
//                    }
//                ]
//
//            });
//        }
//    };
  


/*
 $.ajax({
 url: 'controller/gestionClasses.php',
 data: {op: ''},
 type: 'POST',
 async: false,
 success: function (data, textStatus, jqXHR) {
 remplir(data);
 },
 error: function (jqXHR, textStatus, errorThrown) {
 console.log(textStatus);
 }
 });
 */
$('#btn').click(function () {
    var nom = $("#nom");
//    var filiere = $("#filiere");
    if ($('#btn').text() === 'Ajouter') {
        $.ajax({
            url: 'controller/gestionClasses.php',
            data: {op: 'add', filiere: filiere.val(), nom: nom.val()},
            type: 'POST',
            async: false,
            success: function (data, textStatus, jqXHR) {
                //remplir(data);
                table.ajax.reload();
//                nom.val('');
//                filiere.val('');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });
        //$("#main-content").load("./pages/Classes.php");

    }

});

$(document).on('click', '.supprimer', function () {
    var id = $(this).closest('tr').find('td').eq(0).text();
    var oldLing = $(this).closest('tr').clone();
    var newLigne = '<tr style="position: relative;" class="bg-light" ><th scope="row">' + id + '</th><td colspan="4" style="height: 100%;">';
    newLigne += '<h4 class="d-inline-flex">Voulez vous vraiment supprimer ce classes? </h4>';
    newLigne += '<button type="button" class="btn btn-outline-primary btn-sm confirmer" style="margin-left: 25px;">Oui</button>';
    newLigne += '<button type="button" class="btn btn-outline-danger btn-sm annuler" style="margin-left: 25px;">Non</button></td></tr>';

    $(this).closest('tr').replaceWith(newLigne);
    $('.annuler').click(function () {
        $(this).closest('tr').replaceWith(oldLing);
    });
    $('.confirmer').click(function () {
        $.ajax({
            url: 'controller/gestionClasses.php',
            data: {op: 'delete', id: id},
            type: 'POST',
            async: false,
            success: function (data, textStatus, jqXHR) {
                if (data.includes("error") == true) {
                    $("#error").modal();
                } else {
                    table.ajax.reload();
                    //remplir(data);
                    //$("#main-content").load("./pages/Classes.php");

                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $("#error").modal();
            }
        });
    });
});

$(document).on('click', '.modifier', function () {
var btn = $('#btn');
        var id = $(this).closest('tr').find('td').eq(0).text();
        var nom = $(this).closest('tr').find('td').eq(1).text();
        var filiere = $(this).closest('tr').find('td').eq(2).text();
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
                async: false,
                success: function (data, textStatus, jqXHR) {
                table.ajax.reload();
                        //remplir(data);
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
        /*
         function remplir(data) {
         var contenu = $('#table-content');
         var ligne = "";
         for (i = 0; i < data.length; i++) {
         ligne += '<tr><th scope="row">' + data[i].id + '</th>';
         ligne += '<td>' + data[i].nom + '</td>';
         ligne += '<td>' + data[i].filiere + '</td>';
         ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
         ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
         }
         contenu.html(ligne);
         }
         */
        }
);



