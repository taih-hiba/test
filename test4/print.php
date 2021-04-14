<?php

require('vendor/autoload.php');
$con = mysqli_connect('localhost', 'root', '', 'pointage1');
extract($_POST);

$res = mysqli_query($con, "select * from Employe where cin='" . $cin . "'");

if (mysqli_num_rows($res) > 0) {
    $html = '<style></style><table class="table">';
    $html .= '<tr><td>ID</td><td>Name</td><td>Email</td></tr>';
    while ($row = mysqli_fetch_assoc($res)) {
        $html .= '<tr><td>' . $row['cin'] . '</td><td>' . $row['nom'] . '</td><td>' . $row['email'] . '</td></tr>';
    
    $html .= '</table>';
    
    $html .= '
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="print/style.css" rel="stylesheet">


  <body>
    <div id="site-wrapper">
      <main id="card" style="background-color:white ;">
        <div class="image-block">
          <img src="img/'. $row['photo'] .'" alt="Nathan Blair&#39;s smiling face">
          <img src="print/logo-ensaj.png" alt="Nathan Blair&#39;s smiling face" style="float:right;margin-left: 14px;">
        </div>
        <div class="text-block">
          <div class="header">
            <h1>' . $row['nom'] . ' ' . $row['prenom'] . '</h1>
            <h2>' . $row['role'] . '</h2>
          </div>
          <p><a href="mailto:' . $row['email'] . '">' . $row['email'] . '</a></p>

        </div>
      </main>
    </div>
    </body>';}
} else {
    $html = "Data not found";
}
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file = 'media/' . time() . '.pdf';
$mpdf->output($file, 'I');
//D
//I
//F
//S
?>