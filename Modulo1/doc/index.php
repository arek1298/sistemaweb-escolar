<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    //logo
    $this->Image('logo.jpg');
	
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Alumnos Materias ',0,0,'C');
   
    // Salto de línea
    $this->Ln(20);

    $this->Cell(80,10,'Alumno',1,0,'C',0);
	$this->Cell(50,10,'Materia',1,0,'C',0);
	$this->Cell(50,10,'Profesor',1,1,'C',0);
  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("cn.php");
$consulta = "SELECT * FROM alumat";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(80,10,$row['alumnos'],1,0,'C',0);
	$pdf->Cell(50,10,$row['materias'],1,0,'C',0);
	$pdf->Cell(50,10,$row['maestros'],1,1,'C',0);

} 


	$pdf->Output();
?>