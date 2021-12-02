<?
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

require_once('fdpi/src/autoload.php');
require('pdf/fpdf.php');
class PDF extends FPDF
{
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Simple table
function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}

// Better table
function ImprovedTable($header, $data)
{
    // Column widths
    $w = array(40, 35, 40, 45);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(40, 35, 40, 45);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}


$pdf2 = new PDF();

//получаем данные для таблицы из файла
$data = $pdf2->LoadData('countries.txt');
//создаем заголовок таблицы
$header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
// Data loading

//устанавливаем шрифт и размер
$pdf2->SetFont('Arial','',14);
//добавляем страницу
$pdf2->AddPage();
//добавляем 1 вариант таблицы
$pdf2->BasicTable($header,$data);
$pdf2->AddPage();
//добавляем 2 вариант таблицы
$pdf2->ImprovedTable($header,$data);
$pdf2->AddPage();
//добавляем 3 вариант таблицы
$pdf2->FancyTable($header,$data);
//сохраняем pdf файл, что бы потом его использовать
$pdf2->Output('F', 'temp.pdf');



$pdf = new Fpdi();

//получаем файл pdf
$pageCount = $pdf->setSourceFile('FFF.pdf');
$pageId = $pdf->importPage(1, PdfReader\PageBoundaries::MEDIA_BOX);

//добавляем файл на страницу
$pdf->addPage();
$pdf->useImportedPage($pageId);

//получаем созданный выше файл pdf
$pageCount = $pdf->setSourceFile('test.pdf');
$pageId = $pdf->importPage(1, PdfReader\PageBoundaries::MEDIA_BOX);

$pdf->addPage();
$pdf->useImportedPage($pageId);

//добавляем простой текст Hello World!
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
//добавляем изображение на страницу
$pdf->AddPage();
$pdf->Image('meta2.jpg',10,10,-300);
//показываем пользователю файл pdf
$pdf->Output('I', 'generated.pdf');
?>