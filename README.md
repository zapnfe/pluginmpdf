# pluginmpdf
plugin de criação de PDF através do HTML
Para inciar nosso pluginmpdf devemos instalar a lib abaixo.


mPDF is a PHP library which generates PDF files from UTF-8 encoded HTML.

Installation
Official installation method is via composer and its packagist package mpdf/mpdf.

$ composer require mpdf/mpdf

PHP versions and extensions
mPDF >=7.0 is supported on PHP ^5.6 || ~7.0.0 || ~7.1.0 || ~7.2.0
PHP 7.3 is supported since mPDF v7.1.7
PHP 7.4 is supported since mPDF v8.0.4
PHP 8.0 is supported since mPDF v8.0.10
PHP 8.1 is supported as of mPDF v8.0.13
PHP mbstring and gd extensions have to be loaded.

Usage
The simplest usage (since version 7.0) of the library would be as follows:

 Fonte de estudo:
 
 https://github.com/mpdf/mpdf


 INSTALAÇÃO NA APLICAÇÃO:

include './corePluins/PdfDinamico.class.php';
$PDFretorno = new PdfDinamico;

$header = 'conteudo do cabeçario ';

$html = 'HTML'; // conteudo html

$footer = 'footer' // conteudo do roda pé 

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

