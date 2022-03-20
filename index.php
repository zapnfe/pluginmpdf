 <?php

include './corePluins/PdfDinamico.class.php';

$PDFretorno = new PdfDinamico;
$header = '
<div style="text-align: right; font-weight: bold;">
    Página - {PAGENO}
</div>';

$html = 'HTML'; // conteudo html

$footer = '<table width="100%" style="vertical-align: bottom; font-family: serif;
font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
<tr>
    <td width="33%"><span style="font-weight: bold; font-style: italic;"> </span></td>
    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
    <td width="33%" style="text-align: right; ">{DATE d/m/Y H:i:s}</td>
</tr>
</table>';

$habilitar_password = 0; //habilita senha no pdf
$password = 123456789; // se for habilitado for igual 1  ele requer senha digitada
$path = 'app/output/pdf'; // pasta onde vai ser salvo pdf
$Format = 'V'; // formato V= vestical |  H= horizontal
$name = 0005; // nome do aqrivo
$marca='EAD TUTORIA'; // marca d´gua

/**aqui você pode passa qualque variavel para complementar o arquivo */
$Config= [
    'empresa'=>'EAD TUTORIA',
    'CNPJ'=>225555888,
    'DESCRICAO'=>'plugin de criação de php através do HTML'
];

$PDFretorno->GerarPDF($html, $habilitar_password, $password,$path, $footer,$name, $header,$Format,$Config,$marca);


 