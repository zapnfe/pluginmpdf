
<?php
include 'vendor/autoload.php';
class PdfDinamico
{

    public $html;
    public $header;
    public $footer;
    public $habilitar_password;
    public $password;
    public $path;
    public $Format;
    public $name;
//, $header, $footer, $habilitar_password, $password, $path, $Format
    public function GerarPDF($html,string $habilitar_password, $password, $path, $footer,$name,$header)
    {
    
        $caminho = $path . $name.'.pdf';

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetHeader($header);
        $mpdf->WriteHTML($html);
    
        $mpdf->SetFooter($footer);
        if ($habilitar_password == 1) {
            $mpdf->SetProtection(array(), 'UserPassword', $password);
        }

        $mpdf->showWatermarkText = true;
        $arquivo = $mpdf->Output($caminho, 'F');
        $PDF = $mpdf->Output();

        if (is_dir($path)) //VERIFICA SE REALMENTE É UM DIRETORIO
        {
            $resultado = '';
            $types = array('pdf');
            if ($handle = opendir($path)) {
                while ($entry = readdir($handle)) {
                    $ext = strtolower(pathinfo($entry, PATHINFO_EXTENSION));
                    if (in_array($ext, $types)) {
                        if ($entry == $name) {

                        } else {

                            $resultado = unlink($path . $entry);

                        }
                    }

                }}}

        return $arquivo;
    }
}


