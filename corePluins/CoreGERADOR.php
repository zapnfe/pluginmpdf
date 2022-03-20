<?php


//include 'vendor/autoload.php';
  

// function GeraPDF ($htmls)
//     {




// $mpdf = new \Mpdf\Mpdf();
// $mpdf->WriteHTML($html);
// $mpdf->Output();


class PdfDinamico{

public $html;
public $header;
public $footer;
public $habilitar_password;
public $password;
public $path;
public $Format;

public function GerarPDF($html, $header, $footer, $habilitar_password,$password, $path, $Format){




}


}


$PDFretorno= new  PdfDinamico;
$PDFretorno->html='teste';

var_dump($PDFretorno);

