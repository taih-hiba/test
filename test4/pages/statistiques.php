<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
  if(isset($_SESSION['employe'])){
?>
 
<script src="script/statistique.js" type="text/javascript"></script>
<script src="script/test.js" type="text/javascript"></script>

<div class="container-fluid" style="margin-top: 5%;">
    <div class="">
        <p class="h2 text-center text-dark text-uppercase font-weight-bold">Statistiques des Filieres & Classes</p>
        <hr class="line-seprate">
        <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <a href="./index.php?p=classes" class="col-md-6 col-lg-3" style="left: 190px;">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">...</h2>
                                <span class="desc">Classes</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-accounts"></i>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?p=filiere" class="col-md-6 col-lg-3" style="left: 300px;"  >

                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">...</h2>
                                <span class="desc">Filiere</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-group-work"></i>
                                </div>
                            </div>
                        </a>
<!--                        <a href="./index.php?p=pointage" class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">...</h2>
                                <span class="desc">pointages</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-check"></i>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?p=fonction" class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">...</h2>
                                <span class="desc">fonctions</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                            </div>
                        </a>-->
<hr class="line-seprate" style="margin-bottom: 20px;">
<!--<div class="row" style="margin-left:200px;">   -->
<div class="row">
<canvas id="myChart" width="900" height="400"></canvas>
</div>



            </div>
                    </div>
                </div>
            </section>
    </div>
</div>

<?php
}
else{
  header("Location: ../index.php");
}
 ?>