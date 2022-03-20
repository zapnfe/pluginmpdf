 <?php

 
include  './corePluins/PdfDinamico.class.php';

$PDFretorno = new PdfDinamico;

$baixo = '<table width="100%" style="vertical-align: bottom; font-family: serif;
font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
<tr>
    <td width="33%"><span style="font-weight: bold; font-style: italic;"> </span></td>
    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
    <td width="33%" style="text-align: right; ">{DATE d/m/Y H:i:s}</td>
</tr>
</table>';



$PDFretorno->GerarPDF('teste', 0, 123, 'app/output/pdf', $baixo,'0005',null);
echo '<pre>';
print_r($PDFretorno);