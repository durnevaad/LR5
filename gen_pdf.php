<?php
require_once 'TCPDF/TCPDF.php';
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;}
$fr = array("№", "Марка", "Модель", "Тип разморозки", "Срок гарантии", "Название сервисного центра","Адрес",  "Дата начала ремонта", "Дата окончания", "ФИО клиента","Стоимость ремонта");
$pdf = new TCPDF("L", 'mm', 'A4', true, 'UTF-8');
$pdf->SetAuthor('Дурнева А.Д.');
$pdf->SetTitle('Холодильники');
$pdf->SetFont('dejavusans', '', 8, '', true);
$pdf->AddPage();
$tab = '<h1>Холодильники</h1><br>';
$tab .= "<table border='1'>";
$tab .= "<tr>";
for($i = 0; $i < count($fr); $i++){
   $tab .= "<th>$fr[$i]</th>";}
$tab .= "</tr>";
$sql = "SELECT * FROM pdf";
$result = mysqli_query($link, $sql) or die("Невозможно выполнить запрос!");
while ($row=mysqli_fetch_array($result)){
    $tab .= "<tr>";
for($i = 0; $i < count($row); $i++){
    $text = $row[$i];
$tab .= "<td>$text</td>";}
$tab .= "</tr>";}
$tab .= "</table>";
$pdf->writeHTMLCell(0, 0, '', '', $tab, 0, 1, 0, true, '', true);
$pdf->Output('fridge.pdf');
?>