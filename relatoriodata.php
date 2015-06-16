<?php
include_once 'conexao.php';
$de = $_POST ['de'];
$ate = $_POST['ate'];


require_once("pdf/fpdf.php");
$sql = "select * from atendimento where data between '$de' and '$ate'";
$pdf= new FPDF("P","pt","A4");
$pdf->AddPage();
 
$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Relatorio data de $de até $ate",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(50);
$pdf->Image('imagens/banner_help.jpg',10,10,-300);
 
//cabeï¿½alho da tabela 
$pdf->SetFont('arial','B',14);
$pdf->Cell(90,20,'N.Chamado',1,0,"L");
$pdf->Cell(100,20,'Nome cliente',1,0,"L");
$pdf->Cell(120,20,'Titulo',1,0,"L");
$pdf->Cell(70,20,'Data',1,0,"L");
$pdf->Cell(90,20,'OBS',1,0,"L");
$pdf->Cell(90,20,'Status',1,1,"L");

 
//linhas da tabela
$pdf->SetFont('arial','',11);

$query = mysql_query($sql);
$total = mysql_num_rows($query);


while($linha = mysql_fetch_array($query)){

    $pdf->Cell(90,20,$linha['id'],2,0,"L");
    $pdf->Cell(100,20,$linha['nomecliente'],2,0,"L");
    $pdf->Cell(120,20,$linha['titulo'],2,0,"L");
    $pdf->Cell(70,20,$linha['data'],2,0,"L");
    $pdf->Cell(90,20,$linha['observacao'],2,0,"L");
    $pdf->Cell(90,20,$linha['status'],2,1,"L");
    
    $pdf->Ln(2);
    $pdf->Cell(0,5,"","B",1,'C');
    
}
ob_start ();
$pdf->Output("arquivo.pdf","I");

?>

