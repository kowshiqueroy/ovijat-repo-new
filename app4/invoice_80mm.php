<?php


require("fpdf182/fpdf.php");



include_once "connectdb.php";

$id=$_GET['id'];

$select=$pdo->prepare("select * from tbl_in_info where invoice_id=$id");
$select->execute();
$row=$select->fetch(PDO::FETCH_OBJ);








$pdf = new FPDF ('P','mm',array(80,145));

$pdf->AddPage();


$pdf->SetFont('Arial','B',16);

$pdf->Cell(60,8,'Kowshique POS',1,1,'C');

$pdf->SetFont('Arial','B',8);

$pdf->Cell(60,5,'Nilphamari',0,1,'C');








//Line break
$pdf->Ln(1);


$pdf->SetFont('Arial','BI',8);
$pdf->Cell(20,4,'Name: ',0,0,'');

$pdf->SetFont('Arial','BI',8);
$pdf->Cell(10,4,$row->cname,0,1,'');

$pdf->SetFont('Arial','BI',8);
$pdf->Cell(20,4,'Name: ',0,0,'');

$pdf->SetFont('Arial','BI',8);
$pdf->Cell(10,4,$row->cname,0,1,'');


$pdf->SetFont('Arial','BI',8);
$pdf->Cell(16,4,'Invoice no: ',0,0,'');

$pdf->SetFont('Arial','BI',8);
$pdf->Cell(8,4,$row->invoice_id,0,0,'');



$pdf->SetFont('Arial','BI',8);
//$pdf->Cell(20,4,'Date : ',0,0,'');
$pdf->Cell(8,4,'Date: ',0,0,'');
//$pdf->SetFont('Arial','BI',8);
$pdf->Cell(16,4,$row->order_date,0,0,'');


//$pdf->SetFont('Arial','BI',8);


$pdf->SetFont('Arial','BI',8);
$pdf->Cell(20,4,$row->order_time,0,1,'');



/////////////////////////



$pdf->SetX(7);
$pdf->SetFont('Courier','B',8);
$pdf->SetFillColor(208,208,208);
$pdf->Cell(34,5,'PRODUCT',1,0,'C'); //100
$pdf->Cell(11,5,'QTY',1,0,'C');
$pdf->Cell(8,5,'PRC',1,0,'C');
$pdf->Cell(12,5,'TOTAL',1,1,'C');


$select=$pdo->prepare("select * from tbl_in_data where invoice_id=$id");
$select->execute();
//$item=$select->fetch(PDO::FETCH_OBJ)
    
    
    while($item=$select->fetch(PDO::FETCH_OBJ)){
        
     $pdf->SetX(7);   
        $pdf->SetFont('Helvetica','B',8);
$pdf->Cell(34,5,$item->item_name,1,0,'L'); //100
$pdf->Cell(11,5,$item->qty,1,0,'C');
$pdf->Cell(8,5,$item->buyprice,1,0,'C');
$pdf->Cell(12,5,$item->buyprice*$item->qty,1,1,'C');
        
    }











//product table code

$pdf->SetX(7);
$pdf->SetFont('courier','B',8);
$pdf->Cell(20,5,'',0,0,'L'); //100
//$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(25,5,'SUBTOTAL',1,0,'C');
$pdf->Cell(20,5,$row->subtotal,1,1,'C');


//$pdf->SetX(7);
//$pdf->SetFont('courier','B',8);
//$pdf->Cell(20,5,'',0,0,'L'); //100
////$pdf->Cell(20,5,'',0,0,'C');
//$pdf->Cell(25,5,'TAX',1,0,'C');
//$pdf->Cell(20,5,$row->tax,1,1,'C');



$pdf->SetX(7);
$pdf->SetFont('courier','B',8);
$pdf->Cell(20,5,'',0,0,'L'); //100
//$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(25,5,'DISCOUNT',1,0,'C');
$pdf->Cell(20,5,$row->discount,1,1,'C');




$pdf->SetX(7);
$pdf->SetFont('courier','B',10);
$pdf->Cell(20,5,'',0,0,'L'); //100
//$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(25,5,'GRANDTOTAL',1,0,'C');
$pdf->Cell(20,5,$row->total,1,1,'C');


//$pdf->SetX(7);
//$pdf->SetFont('courier','B',8);
//$pdf->Cell(20,5,'',0,0,'L'); //100
////$pdf->Cell(20,5,'',0,0,'C');
//$pdf->Cell(25,5,'PAID',1,0,'C');
//$pdf->Cell(20,5,$row->paid,1,1,'C');



//$pdf->SetX(7);
//$pdf->SetFont('courier','B',8);
//$pdf->Cell(20,5,'',0,0,'L'); //100
////$pdf->Cell(20,5,'',0,0,'C');
//$pdf->Cell(25,5,'DUE',1,0,'C');
//$pdf->Cell(20,5,$row->due,1,1,'C');


$pdf->SetX(7);
$pdf->SetFont('courier','B',8);
$pdf->Cell(20,5,'',0,0,'L'); //100
//$pdf->Cell(20,5,'',0,0,'C');
$pdf->Cell(25,5,'PAYMENT TYPE',1,0,'C');
$pdf->Cell(20,5,$row->payment_type,1,1,'C');


//$pdf->Cell(60,5,'Invoice',0,1,'C');

//$pdf->SetFont('Arial','',8);
//$pdf->Cell(85,5,'Invoice :' .$row->invoice_id,0,1,'R');
//
//$pdf->SetFont('Arial','',8);
//$pdf->Cell(87,5,'Date : '.$row->order_date,0,1,'R');





$pdf->Cell(20,5,'',0,1,'');

$pdf->SetX(7);
$pdf->SetFont('Courier','B',8);
$pdf->Cell(65,5,'Thankyou for choosing us',0,1,'C');//100

$pdf->SetX(7);
$pdf->Cell(20,7,'--------------------------------------',0,1,'');




$pdf->SetX(7);
$pdf->SetFont('Courier','BI',8);
$pdf->Cell(65,5,'Developed By : Kowshiqueroy',0,1,'C');


$pdf->SetX(7);
$pdf->SetFont('Courier','BI',8);
$pdf->Cell(65,5,'Contact: kowshiqueroy@gmail.com',0,1,'C');




$pdf->Output();
?>