<?php
 $link = mysqli_connect("127.0.0.1", "root", "", "fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $brand = $_POST['brand'];
 $model = $_POST['model'];
 $defrost_type = $_POST['defrost_type'];
 $internal_volume = $_POST['internal_volume'];
 $guarantee_period = $_POST['guarantee_period'];
 $sql = "INSERT INTO fridges (brand, model, defrost_type, internal_volume, guarantee_period) 
 VALUES ('$brand', '$model', '$defrost_type', '$internal_volume', '$guarantee_period')";
if (mysqli_query($link, $sql)) {
	print "<p>Все сохранено.";
 print "<p><a href=\"indexx.php\"> Вернуться к списку холодильников </a>"; }
else { print "Ошибка сохранения. <a href=\"indexx.php\">
Вернуться к списку холодильников </a>";}
?>