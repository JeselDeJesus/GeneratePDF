<?php
require "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Jesel De Jesus!',0,5);
$pdf->Cell(0,10,'CCS!',0,5);
$pdf->Cell(0,10,'dejesus.jeselaurvic@auf.edu.ph',0,5);
$pdf->Cell(0,10,'18-0379-373!',0,5);
$pdf->Output();
?>