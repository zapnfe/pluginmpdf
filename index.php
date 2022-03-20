 <?php

include './corePluins/PdfDinamico.class.php';

$PDFretorno = new PdfDinamico;
$header = '
<div style="text-align: right; font-weight: bold;">
    Página - {PAGENO}
</div>';

$html = 'HTML';

$footer = '<table width="100%" style="vertical-align: bottom; font-family: serif;
font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
<tr>
    <td width="33%"><span style="font-weight: bold; font-style: italic;"> </span></td>
    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
    <td width="33%" style="text-align: right; ">{DATE d/m/Y H:i:s}</td>
</tr>
</table>';

$habilitar_password = 0;
$password = 1;
$path = 'app/output/pdf';
$Format = 'V';
$name = 0005;
$marca='EAD TUTORIA';

$Config= [
    'empresa'=>'EAD TUTORIA',
    'CNPJ'=>225555888
];

$PDFretorno->GerarPDF($html, $habilitar_password, $password,$path, $footer,$name, $header,$Format,$Config,$marca);


 