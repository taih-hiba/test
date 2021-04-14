<?php

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_SESSION['employe'])) {
    ?>
    <script src="script/Search.js" type="text/javascript"></script>
    <div class="container-fluid">
        <div class="card bg-white" >
            <div class="card-header card-color">
                <p class="h2 text-center text-uppercase font-weight-bold pt-2">List classes par filiere</p>
            </div>
            <div class="card-body container-fluid" >
                <div class="row">


                    <div class="col-sm-6 mb-2">
                        <label for="filiere">Filiere : </label>
                        <select id="filiere" class="custom-select" style="width: 892px;"></select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-outline-success mt-3 mb-3" id="btn">Rechercher</button>
                    </div>
                </div>
                <div class="row table-responsive m-auto rounded">
                    <table id="tsearch" class="table table-hover" style="width: 100%;">
                        <thead>
                            <tr class="text-uppercase bg-light">
                                <th scope="col">classes</th>
                            </tr>
                        </thead>
                        <tbody id="table-content">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php

} else {
    header("Location: ../index.php");
}
?>
