/***
This code is used to write PDF in you folder path and It is help full to write any language text like (chinese, arabic, italian etc etc)
***/

include 'mpdf/mpdf.php'; //include mpdf library

$fileName = date("Ymdhi", time()) . ".pdf";
$filePath = UPLOAD_PATH; //where to write pdf?
$date = new Zend_Db_Expr('NOW()');
if (!file_exists($filePath)) {
    mkdir($filePath, 0755, TRUE);
}

$html = $_POST["html"];

$mpdf = new mPDF('UTF-8',
    'A4', '', '',
    15, 15, 10, 14, 0, 0
);
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true; // required to display Chinese characters
$mpdf->allow_charset_conversion = false;

$mpdf->WriteHTML(utf8_encode($html), 2);
$mpdf->Output($filePath . $fileName, "F");
