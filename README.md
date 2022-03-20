# pluginmpdf
plugin de criação de php através do HTML

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

 
como chamar a lib
//require_once __DIR__ . '/vendor/autoload.php';

//$mpdf = new \Mpdf\Mpdf();
//$mpdf->WriteHTML('<h1>Hello world!</h1>');
//$mpdf->Output();
