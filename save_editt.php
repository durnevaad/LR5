<html> <body>
<?php
$link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_POST['id'];
 $brand = $_POST['brand'];
 $model = $_POST['model'];
 $defrost_type = $_POST['defrost_type'];
 $internal_volume = $_POST['internal_volume'];
 $guarantee_period = $_POST['guarantee_period'];
 $sql = "UPDATE fridges SET brand = '$brand', model = '$model', defrost_type ='$defrost_type',internal_volume ='$internal_volume',
	guarantee_period='$guarantee_period' WHERE id_f='$id' ";
if (mysqli_query($link, $sql)) {
 echo 'Все сохранено. <a href="indexx.php"> Вернуться к списку холодильников </a>'; }
 else { echo 'Ошибка сохранения. <a href="indexx.php">
Вернуться к списку холодильников</a> '; }
?>
</body> </html>