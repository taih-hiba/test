<?php
if(session_status() != PHP_SESSION_ACTIVE) {
    session_start();
    }
  if(isset($_SESSION['employe'])){

 ?>
<link rel='stylesheet' href='vendor/bootstrap-4.1/bootstrap.min.css'>
    <link rel='stylesheet' href='vendor/font-awesome-5/css/fontawesome-all.min.css'>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/theme.css">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="style/main.css">

    <script src='vendor/jquery-3.2.1.min.js'></script>
    <script src='vendor/bootstrap-4.1/popper.min.js'></script>
    <script src='vendor/bootstrap-4.1/bootstrap.min.js'></script>
    <script src="vendor/datatable/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendor/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="vendor/chartjs/Chart.min.js"></script>

<div class="container-fluid">
    <div class="card bg-white" >
        <div class="card-header card-color">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2">Gestion des employés</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="cin">CIN : </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="text" id="cin" required>

                </div>
                <div class="col-sm-6 mb-2">
                    <label for="nom">Nom : </label>
                    <input class="form-control" type="text" id="nom" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="prenom">Prenom : </label>
                    <input class="form-control" type="text" id="prenom" required>

                </div>
                <div class="col-sm-6 mb-2">
                    <label for="email">Email : </label>
                    <input class="form-control" type="email" id="email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="telephone">Telephone : </label>
                    <input class="form-control" type="tel" id="telephone" required>

                </div>
                <div class="col-sm-6 mb-2">
                    <label for="adresse">Adresse : </label>
                    <input class="form-control" type="text" id="adresse" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="password">Password : </label>
                    <input class="form-control" type="password" id="password" required>

                </div>
                <div class="col-sm-6 mb-2">
                    <label for="role">Role : </label>
                    <input class="form-control" type="text" id="role" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="departement">Departement : </label>
                    <select id="departement" class="custom-select" ></select>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="fonction">Fonction : </label><br>
                    <select id="fonction" class="custom-select" ></select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="photo">Photo : </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" required>
                        <label class="custom-file-label" for="photo">Choose file...</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-success mt-3 mb-3" id="btn">Ajouter</button>
                </div>
            </div>
            <div class="row table-responsive m-auto rounded">
                <table id="temploye" class="table table-hover" >
                    <thead>
                        <tr class="text-uppercase bg-light">
                            <th></th>
                            <th scope="col">Photo</th>
                            <th scope="col">Cin</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Fonction</th>
                            <th scope="col">Departement</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col">Modifier</th>
                        </tr>
                    </thead>
                    <tbody id="table-content">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="script/employe.js" type="text/javascript"></script>
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="script/index.js"></script>
    <script src="js/main.js"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
