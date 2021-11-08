<?
require_once 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPExcel/Classes/PHPExcel/Writer/Excel5.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
$link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
   echo "Невозможно подключиться к серверу." ; }
$fr = array("№", "Марка", "Модель", "Тип разморозки", "Срок гарантии", "Название сервисного центра","Адрес",  "Дата начала ремонта", "Дата окончания", "ФИО клиента","Стоимость ремонта");
$xls = new PHPExcel();
$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
$sheet->setTitle('Холодильники');
$j=3;
$query = "SELECT * FROM pdf";
$result = mysqli_query($link, $query) or die("Невозможно выполнить запрос!");
while ($row=mysqli_fetch_array($result)){
for($i = 0; $i < count($row); $i++){
   $text = $row[$i];
   $sheet->setCellValueByColumnAndRow($i, $j, $text);       
}$j++;}
$sheet->setCellValueExplicit('A1', 'Холодильники', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->mergeCells('A1:I1');
$sheet->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
for($i = 0; $i < count($fr); $i++){
   $sheet->setCellValueByColumnAndRow($i, 2, $fr[$i]);
   $sheet->getStyleByColumnAndRow($i, 2)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);}
header("Content-Disposition: attachment; filename=fridge.xls");
$objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$objWriter->save('php://output');
?>