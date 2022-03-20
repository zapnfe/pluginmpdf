
<?php
include 'vendor/autoload.php';

use Mpdf\Mpdf;

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
    public $marca;
//, $header, $footer, $habilitar_password, $password, $path, $Format
    public function GerarPDF($html, $habilitar_password, $password, $path, $footer, $name, $header, $Format, $Config,$marca)
    {

        $caminho = $path . $name . '.pdf';

        switch ($Format) {
            case 'V':
                $mpdf = new Mpdf(['mode' => 'utf-8', 'format' => [190, 236]]);
                break;
            case 'H':
                $mpdf = new Mpdf(['orientation' => 'L']);
                break;
        }
        $mpdf->SetHeader($header);

        $mpdf->SetFooter($footer);
        if ($habilitar_password == 1) {
            $mpdf->SetProtection(array(), 'UserPassword', $password);
        }

        $mpdf->SetProtection(array('print'));
        $mpdf->SetTitle($Config['empresa']);
        $mpdf->SetAuthor($Config['CNPJ']);
        $mpdf->SetWatermarkText($marca);
        $mpdf->showWatermarkText = true;
        $mpdf->watermark_font = 'DejaVuSansCondensed';
        $mpdf->watermarkTextAlpha = 0.1;
        $mpdf->SetDisplayMode('fullpage');

        $mpdf->WriteHTML($html);

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

        return $PDF;
    }
}
