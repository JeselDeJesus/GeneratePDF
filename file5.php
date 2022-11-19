<?php
include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new fpdf();
$pdf->AddFont('Carmilla');
$pdf->AddPage();
$pdf->SetFont('Carmilla','',35);
$pdf->Write(10,'The Greatest Blessing comes with the hardest breaking');

$pdf->Ln(20);

$pdf->SetFont('Carmilla','',15);
$pdf->Write(10,'Said By Jentezen Franklin');
$pdf->Output('D', 'FavoriteQuotes.pdf');    
?>

// Run php vendor/fpdf/fpdf/src/Fpdf/makefont/makefont.php fonts/Carmilla.ttf 