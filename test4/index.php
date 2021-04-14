<?php
if(session_status() != PHP_SESSION_ACTIVE) {
session_start();
}
if ($_SESSION["employe"]) {
    if ($_SESSION['role'] == "Admin") {
?>
<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <title>Gestion de classes et filieres</title>
    <script src='vendor/jquery-3.2.1.min.js'></script>
    <script src='vendor/bootstrap-4.1/popper.min.js'></script>
    <script src='vendor/bootstrap-4.1/bootstrap.min.js'></script>
    
    
    <link rel='stylesheet' href='vendor/bootstrap-4.1/bootstrap.min.css'>
    <link rel='stylesheet' href='vendor/font-awesome-5/css/fontawesome-all.min.css'>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/theme.css">
    <link rel="stylesheet" href="style/main.css">
    <link href="vendor/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">      
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/main.js"></script>


    <script src="vendor/datatable/jquery.dataTables.min.js" type="text/javascript"></script>

    <script src="vendor/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>

<!-- <script src='vendor/chartjs/Chart.bundle.min.js'></script>-->
<!--    <script src="vendor/chartjs/Chart.js" type="text/javascript"></script>-->
    <script src="vendor/chartjs/Chart.js" type="text/javascript"></script>
</head>
<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav style="background-color:#4a203e;"id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="./" class="h2 pt-2">Gestion classes et filières</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div style="background-color:#4a203e;" class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded"
                            src="img/<?php if (isset($_SESSION['photo'])) {
                                        echo $_SESSION['photo'];
                                        } else
                                            echo 'no-photo.png'
                                        ?>"
                            alt="User picture">
                    </div>
                    <div style="background-color:#4a203e;" class="user-info">
                        <span class="user-name">
                            <strong><?php
                                        if (isset($_SESSION['nom'])) {
                                            echo $_SESSION['nom'];
                                        }
                                    ?></strong>
                        </span>
                        <span class="user-role"><?php
                                        if (isset($_SESSION['role'])) {
                                            echo $_SESSION['role'];
                                        }
                                    ?></span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->

                <!-- sidebar-search  -->
                <div style="background-color:#4a203e;" class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Gestion</span>
                        </li>
<!--                        <li>
                            <a href="./index.php?p=departement"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Departements</a>
                        </li>-->
 <!--                        <li>
                            <a href="./index.php?p=employe" ><i class="zmdi zmdi-hc-1x zmdi-settings"></i>Profil</a>
                        </li>-->
 <!--                        <li>
                            <a href="./index.php?p=fonction"><i class="zmdi zmdi-hc-1x zmdi-settings"></i>Fonctions</a>
                        </li>
                        <li>
                            <a href="./index.php?p=pointage"><i class="zmdi zmdi-hc-1x zmdi-check"></i>Pointages</a>
                        </li>-->
                        <li>
                            <a href="./index.php?p=filiere"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Filiere</a>
                        </li>
                        <li>
                            <a href="./index.php?p=classes"><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>Classes</a>
                        </li>
						<li class="header-menu">
                            <span>chercher classes par filiere</span>
                        </li>
                        <li>
                            <a href="./index.php?p=Search"><i class="zmdi zmdi-hc-1x zmdi-check"></i>chercher </a>
                        </li>
                        <li class="header-menu">
                            <span>Statistique</span>
                        </li>
                        <li>
                            <a href="./index.php?p=statistiques"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Statistiques</a>
                        </li>
<!--                        <li>
                            <a href="./index.php?p=historique"><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>Historique</a>
                        </li>-->
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="./logout.php">
                    <i class="fa fa-power-off"></i>
                    <span>log out</span>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid" id="main-content">

                <?php
                    if( isset($_GET['p']) && $_GET['p'] != ""){
                        if($_GET['p']=="departement"){
                            include_once './pages/departement.php';
                        }elseif ($_GET['p']=="employe"){
                            include_once './pages/employe.php';
                        }elseif($_GET['p']=="fonction"){
                            include_once './pages/Fonction.php';
                        }elseif($_GET['p']=="pointage"){
                            include_once './pages/Pointage.php';
                        }elseif($_GET['p']=="historique"){
                            include_once './pages/historique.php';
                        }elseif($_GET['p']=="filiere"){
                            include_once './pages/Filiere.php';
                        }elseif($_GET['p']=="classes"){
                            include_once './pages/Classes.php';
                        }elseif($_GET['p']=="statistiques"){
                            include_once './pages/statistiques.php';
                        }elseif($_GET['p']=="Search"){
                        include_once './pages/Search.php';}
                    }else{
                        include_once './pages/statistiques.php';
                    }
                ?>
            </div>

        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="script/index.js"></script>

</body>
</html>
<?php
    } else {
        include_once './pages/HistoriqueSimple.php';
    }
} else {
    header('Location:./login.php');
}
?>