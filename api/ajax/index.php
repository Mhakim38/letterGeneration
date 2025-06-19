<?php
require_once '../vendor/autoload.php';
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

    $outputPath = __DIR__ . '/output_letter.docx';
    $process->saveAs($outputPath);
    
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

    $outputPath = __DIR__ . '/output_letter.docx';
    $process->saveAs($outputPath);
    
    die();
}

?>