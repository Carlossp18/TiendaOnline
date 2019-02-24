<?php

spl_autoload_register(function($clase) {
    require "$clase.php";
});
require_once './PDF.php';
session_start();
Cesta::$cesta = $_SESSION['cesta'];
Cesta::$total = $_SESSION['total'];
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

$pdf->Cell(120, 7, "Nombre", 1);
$pdf->Cell(30, 7, "Cantidad", 1);
$pdf->Cell(30, 7, "Precio", 1);
$pdf->Ln();
foreach (Cesta::$cesta as $valores => $val) {
    $pdf->Cell(120, 6, Cesta::$cesta[$valores]['name'], 1);
    $pdf->Cell(30, 6, Cesta::$cesta[$valores]['cantidad'], 1);
    $pdf->Cell(30, 6, Cesta::$cesta[$valores]['pvp'], 1);
    $pdf->Ln();
}
$pdf->Cell(30, 6, "TOTAL", 1);
$pdf->Cell(150, 6, Cesta::$total, 1, 0, 'R');

$pdf->Output();
?>
