<?php
require('fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {

    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, iconv('UTF-8','windows-1252','Pagína ') . $this->PageNo() . '', 0, 0, 'C');
    }
}

require_once("../conexion/conexion.php");
$query = "SELECT libros.*,autores.Nombre FROM libros,autores WHERE libros.Id_autor=autores.Id_autor AND libros.Activo=1";
$resultado = $conexion->query($query);

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
// $pdf->SetX(500);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Image('../images/logo1.png', 10, 8, 40);
// Movernos a la derecha
$pdf->Cell(80);
// Título
$pdf->Cell(110, 10, iconv('UTF-8','windows-1252','Librería Catedral'), 1, 0, 'C');
// Salto de línea
$pdf->Ln(20);
// Movernos a la derecha
$pdf->Cell(40);
$pdf->Cell(50, 10, 'Libros registrados', 0, 0, 'C');
$pdf->Ln(20);
$pdf->cell(15, 10, 'ID', 1, 0, 'C', 0);
$pdf->cell(28, 10, iconv('UTF-8','windows-1252','Clasificación'), 1, 0, 'C', 0);
$pdf->cell(40, 10, 'Autor', 1, 0, 'C', 0);
$pdf->cell(45, 10, iconv('UTF-8','windows-1252','Título'), 1, 0, 'C', 0);
$pdf->cell(17, 10, iconv('UTF-8','windows-1252','Edición'), 1, 0, 'C', 0);
$pdf->cell(38, 10, 'Editorial', 1, 0, 'C', 0);
$pdf->cell(12, 10, iconv('UTF-8','windows-1252','Año'), 1, 0, 'C', 0);
$pdf->cell(40, 10, 'Lugar', 1, 0, 'C', 0);
$pdf->cell(12, 10, iconv('UTF-8','windows-1252','Pág.'), 1, 0, 'C', 0);
$pdf->cell(28, 10, 'Materia', 1, 1, 'C', 0);

$pdf->SetFont('Arial', 'I', 9);

while ($row = $resultado->fetch_assoc()) {
    $pdf->cell(15, 10, $row['Id_libro'], 1, 0, 'C', 0);
    $pdf->cell(28, 10, iconv('UTF-8','windows-1252',$row['Clasificacion']), 1, 0, 'C', 0);
    $pdf->cell(40, 10, iconv('UTF-8','windows-1252',$row['Nombre']), 1, 0, 'C', 0);
    $pdf->cell(45, 10, iconv('UTF-8','windows-1252',$row['Titulo']), 1, 0, 'C', 0);
    $pdf->cell(17, 10, $row['Edicion'], 1, 0, 'C', 0);
    $pdf->cell(38, 10, iconv('UTF-8','windows-1252',$row['Editorial']), 1, 0, 'C', 0);
    $pdf->cell(12, 10, $row['Anno'], 1, 0, 'C', 0);
    $pdf->cell(40, 10, iconv('UTF-8','windows-1252',$row['Lugar']), 1, 0, 'C', 0);
    $pdf->cell(12, 10, iconv('UTF-8','windows-1252',$row['Cant_pag']), 1, 0, 'C', 0);
    $pdf->cell(28, 10, iconv('UTF-8','windows-1252',$row['Materia']), 1, 1, 'C', 0);
}
$pdf->Output();
?>