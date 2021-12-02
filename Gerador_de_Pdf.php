<?php

include_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\options;

$Dompdf= new Dompdf();
// php
ob_start();
include_once 'Listar_relatorio_pdf.php';
$Dompdf->loadHtml(ob_get_clean());
// html
$Dompdf->setpaper("A4");
$Dompdf->render();
header('Content-type:application/pdf');
echo $Dompdf->output();















?>