<?php
session_start();
extract($_POST);
// echo $editor1; die;

require_once __DIR__ . '/pdf/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

//$content = file_get_contents('<h1>Hello world</h1>');
$content =  $editor1;
$mpdf->WriteHTML($content);
$mpdf->Output();