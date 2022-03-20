 <?php

 

include  './corePluins/PdfDinamico.class.php';



$PDFretorno = new PdfDinamico;
$PDFretorno->GerarPDF('teste', 0, 123, 'app/output/pdf', null,'0005',null);
echo '<pre>';
print_r($PDFretorno);