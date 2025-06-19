<?php
require_once '../../vendor/autoload.php';
use PhpOffice\PhpWord\TemplateProcessor;

$reasonLetterPath = '../../src/MS/reason_letter.docx';
$warningLetterPath = '../../src/MS/warning_letter.docx';

$type = $_POST['type'];

if ($type == "warningLetter") {
    $prefix = $_POST['prefix'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $id = $_POST['id'];
    $ic = $_POST['ic'];
    $fault = $_POST['fault'];

    
    $process = new TemplateProcessor($warningLetterPath);
    $process->setValue('prefix', $prefix);
    $process->setValue('name', $name);
    $process->setValue('position', $position);
    $process->setValue('id', $id);
    $process->setValue('ic', $ic);
    $process->setValue('fault', $fault);

    $outputPath = __DIR__ . '/Warning_letter.docx';
    $process->saveAs($outputPath);
    
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment; filename="Warning_letter.docx"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($outputPath));
    readfile($outputPath);
    unlink($outputPath);
    
    die();
}

if ($type == "ReasonLetter") {
    $prefix = $_POST['prefix'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $id = $_POST['id'];
    $ic = $_POST['ic'];
    $fault = $_POST['fault'];

    
    $process = new TemplateProcessor($warningLetterPath);
    $process->setValue('prefix', $prefix);
    $process->setValue('name', $name);
    $process->setValue('position', $position);
    $process->setValue('id', $id);
    $process->setValue('ic', $ic);
    $process->setValue('fault', $fault);

    $outputPath = __DIR__ . '/Reason_letter.docx';
    $process->saveAs($outputPath);
    
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment; filename="Reason_letter.docx"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($outputPath));
    readfile($outputPath);
    unlink($outputPath);

    die();
}

?>