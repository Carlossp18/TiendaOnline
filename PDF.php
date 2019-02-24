<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDF
 *
 * @author alumno
 */
require 'fpdf181/fpdf.php';

class PDF extends FPDF {

// Cabecera de página
    function Header() {
        // Logo
        //$this->Image('images/icon.png', 10, 10, 16);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(40, 10, 'mi empresa', 1, 0, 'C');
        // Salto de línea
        $this->Ln(30);
    }

// Pie de página
    function Footer() {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

?>
