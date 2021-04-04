<?php
session_start();


if(!$_SESSION['usertype']=='admin'){
	header("location:index.php");
}

?>

<?php
require('fpdf/fpdf.php');
if (isset($_GET['studentid']) && isset($_GET['bookid']) ){
	
	$fineamount=$systemmessage="";
$taxamount="";
	
$studentid=$_GET['studentid'];

$bookid=$_GET['bookid'];



$servername="localhost";
$username="root";
$password="";
$database="student";
$conn=new mysqli($servername,$username,$password,$database);

$s="select * from setttings";
$re=$conn->query($s);
while($row=$re->fetch_assoc()){
	$fineamount=$row['fine'];
	$systemmessage=$row['message'];
	$taxamount=$row['tax'];
}

$querystudent="select * from members where studentid='$studentid'";
$querybook="select * from books where bookid='$bookid'";
$queryresult="select * from books_members  where bookid='$bookid' AND studentid='$studentid'";
$invoicenumber="select * from books_returned";
$studentname="";
$studentfathername="";
$studentdepartment="";
$booktitle="";
$bookauthor="";
$bookisbn="";
$bookissuedate="";
$bookduedate="";
$fine=0;
$tax=$taxamount;
$bookreturndate=date("d-m-y");
$result1=$conn->query($querystudent);
$result2=$conn->query($querybook);
$result3=$conn->query($queryresult);
$result4=$conn->query($invoicenumber);

$totalinvoices=$result4->num_rows;
if($result1->num_rows>0){
	
	
		
		while($row=$result1->fetch_assoc()){

         $studentname=$row['studentname'];
		 $studentfathername=$row['fathername'];
		 $studentdepartment=$row['department'];
		 

}
	
}

if($result2->num_rows>0){
	
	
		
		while($row=$result2->fetch_assoc()){
           $booktitle=$row['booktitle'];
		   $bookauthor=$row['bookauthor'];
		   $bookisbn=$row['bookisbn'];


}
	
}

if($result3->num_rows>0){
	
	
		
		while($row=$result3->fetch_assoc()){

         $bookissuedate=$row['issue_date'];
          $bookduedate=$row['due_date'];
		 

}
	
}
$currentdate=date("d-m-y");

$status="Pending";
$color="green";
if($bookduedate<$currentdate){
	$fine=$fineamount;
}

else{
	$fine=0;
}



$pdf = new FPDF();
$pdf->SetTitle('Invoice');
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Image('logo.png',10,10,-100);
$pdf->Cell(40,10,"");
$pdf->Cell(40,10,"");
$pdf->Cell(40,10,"");
$pdf->Cell(15,6,"Invoice No.",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,$totalinvoices,0,0,'L',false);
$pdf->Ln();


$pdf->Cell(15,6,"",0,'L',false);


$pdf->Cell(15,6,"",0,2,'L',false);

$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);

$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"Invoice Date.",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(10,6,"",0,0,'L',false);
$pdf->Cell(15,6,$currentdate,0,0,'L',false);
$pdf->Cell(15,6,"",0,2,'L',false);
$pdf->Cell(15,6,"",0,1,'L',false);
$pdf->Cell(0,20,"",0,1,'L',false);
$pdf->Cell(50,10,"Student ID",1,0,'L',false);
$pdf->Cell(50,10,"Name",1,0,'L',false);
$pdf->Cell(50,10,"Father Name",1,0,'L',false);
$pdf->Cell(45,10,"Department",1,1,'L',false);
$pdf->SetFont('');
$pdf->Cell(50,10,$studentid,1,0,'L',false);
$pdf->Cell(50,10,$studentname,1,0,'L',false);
$pdf->Cell(50,10,$studentfathername,1,0,'L',false);
$pdf->Cell(45,10,$studentdepartment,1,0,'L',false);
$pdf->Ln();

$pdf->Cell(15,6,"",0,2,'L',false);
$pdf->Cell(15,6,"",0,1,'L',false);

$pdf->Cell(50,10,"Book ID",1,0,'L',false);
$pdf->Cell(50,10,"Title",1,0,'L',false);
$pdf->Cell(50,10,"Issue Date",1,0,'L',false);
$pdf->Cell(45,10,"Due Date",1,1,'L',false);
$pdf->SetFont('');
$pdf->Cell(50,10,$bookid,1,0,'L',false);
$pdf->Cell(50,10,$booktitle,1,0,'L',false);
$pdf->Cell(50,10,$bookissuedate,1,0,'L',false);
$pdf->Cell(45,10,$bookduedate,1,0,'L',false);
$pdf->Ln();

$pdf->Ln();
$pdf->Line(120,138,200,138);
$pdf->Cell(40,15,"");
$pdf->Cell(40,15,"");
$pdf->Cell(40,15,"");

$pdf->Cell(15,6,"Tax",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,$tax,0,0,'L',false);
$pdf->Ln();


$pdf->Cell(15,6,"",0,'L',false);


$pdf->Cell(15,6,"",0,2,'L',false);

$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);

$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"Fine",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,$fine,0,0,'L',false);

$pdf->Ln();


$pdf->Cell(15,6,"",0,'L',false);


$pdf->Cell(15,6,"",0,2,'L',false);

$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);

$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"Total Charges",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(15,6,"",0,0,'L',false);
$pdf->Cell(10,6,$fine+$tax,0,0,'L',false);

$pdf->Output();




}
else{
	
	echo "Authorized Access !";
}
?>