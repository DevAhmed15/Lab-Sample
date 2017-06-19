<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'REPORT',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('localhost','root','root');
mysql_select_db('lab');

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table('SELECT `id`, `name`,`email` , `password` , `gender` ,`age` from human order by `id`');
$pdf->AddPage();
//Second table: specify 3 columns
$pdf->AddCol('ID',40,'','C');
$pdf->AddCol('name',40,'','C');
$pdf->AddCol('email',40,'','C');
$pdf->AddCol('password',40,'','C');
$pdf->AddCol('gender',40,'','C');
$pdf->AddCol('age',40,'','C');

$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table('select id,name,email, password ,gender,age  from human order by id limit 0,20',$prop);

//$pdf->Output("C:\Users\John\Desktop/somename.pdf",'F'); 


$pdf->Output($downloadfilename.".pdf"); 
header('Location: '.$downloadfilename.".pdf");
?>
