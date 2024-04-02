 <?php
if(!empty($_POST['submit']))
{
    $roll = $_POST['r'];
    $fname = $_POST['f'];
    $lname = $_POST['l'];
    $email = $_POST['m'];
    $pass = $_POST['p'];

    require("fpdf/fpdf.php");
    $pdf = new FPDF();   //object create
    $pdf -> AddPage();

    $pdf-> SetFont("Arial","",16);
    $pdf-> Cell(0,10,"Registration Details",1,1,'C');
    
    $pdf-> SetFont("Arial","",12);

    $pdf->Cell(25,10,"Roll NO",1,0);
    $pdf->Cell(40,10,"First Name.",1,0);
    $pdf->Cell(40,10,"Last Name",1,0);
    $pdf->Cell(60,10,"Email",1,0);
    $pdf->Cell(0,10,"Password",1,1);

     $pdf->Cell(25,10,$roll,1,0);
    $pdf->Cell(40,10,$fname,1,0);
    $pdf->Cell(40,10,$lname,1,0);
    $pdf->Cell(60,10,$email,1,0);
    $pdf->Cell(0,10,$pass,1,1);
    
   $file=time().".pdf";

   $pdf-> output($file,'D');
   $pdf -> output();
}
 ?>

 