


<?php
require('fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'egc');

$query=mysqli_query($con,"select * from student where lecturer = '".$_POST['lec']."' ORDER BY cst");
$invoice=mysqli_fetch_array($query);


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('L','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )
$pdf->Image('logo/logo.png',100,5);
$pdf->Cell(189	,10,'',0,1);//end of line

//$pdf->Cell(59	,5,'DRIVER ID',0,1);//end of line
$pdf->Cell(189	,10,'',0,1);//end of line
$pdf->Cell(250	,5,'ATTENDANCE REGISTER',0,1,'C');//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

//$pdf->Cell(130	,5,'[did]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line
$pdf->SetFont('Arial','B',10);
$date = date('Y-m-d');

$pdf->Cell(30	,5,'DATE PRINTED',1,0);
$pdf->Cell(60	,5,'LECTURER',1,1);
$qq=mysqli_query($con,"select * from lecturer where name = '".$_POST['lec']."'");
$pdf->SetFont('Arial','',10);
while($item=mysqli_fetch_array($qq)){
	$pdf->Cell(30	,5,$date,1,0);
	$pdf->Cell(60,5,$item['name'],1,1);
	
	}

$pdf->Cell(59	,5,'',0,1);//end of line
//invoice contents
$pdf->SetFont('Arial','B',10);

$pdf->Cell(30	,4,'NAME',1,0);
$pdf->Cell(50	,4,'Course',1,0);
$pdf->Cell(20	,4,'From',1,0);
$pdf->Cell(20	,4,'To',1,0);
$pdf->Cell(20	,4,' End Date',1,0);
$pdf->Cell(15	,4,' MON',1,0);
$pdf->Cell(15	,4,' TUE',1,0);
$pdf->Cell(15	,4,' WED',1,0);
$pdf->Cell(15	,4,' THUR',1,0);
$pdf->Cell(15	,4,' FRI',1,0);
$pdf->Cell(15	,4,' SAT',1,0);
$pdf->Cell(50	,4,' REMARKS',1,1);//end of line
$pdf->SetFont('Arial','',10);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query=mysqli_query($con,"select * from student where lecturer = '".$_POST['lec']."' order by cst");

while($item=mysqli_fetch_array($query)){
	$pdf->Cell(30,4,$item['name'],1,0);

	$pdf->Cell(50,4,$item['course'],1,0);
	$pdf->Cell(20,4,$item['cst'],1,0);
	$pdf->Cell(20,4,$item['cet'],1,0);
	$pdf->Cell(20,4,$item['cd'],1,0);
    $pdf->Cell(15,4," ",1,0);
	$pdf->Cell(15,4," ",1,0);
	$pdf->Cell(15,4," ",1,0);
	$pdf->Cell(15,4," ",1,0);
	$pdf->Cell(15,4," ",1,0);
	$pdf->Cell(15,4," ",1,0);
	$pdf->Cell(50,4," ",1,1,'L');


	//end of line
	//end of line
	}
	

$ww=mysqli_query($con,"select * from lecturer where name = '".$_POST['lec']."'");

while($item=mysqli_fetch_array($ww)){
$pdf->Output($item['name'].".pdf", "I");
}
?>
