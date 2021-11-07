<html> <body>
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_POST['id'];
 $name_c = $_POST['name_c'];
 $adres_c = $_POST['adres_c'];
 $sql = "UPDATE centr SET name_c = '$name_c', adres_c = '$adres_c' WHERE id_c='$id' ";
if (mysqli_query($link, $sql)) {
 echo 'Все сохранено. <a href="index_c.php"> Вернуться к списку сервисов </a>'; }
 else { echo 'Ошибка сохранения. <a href="index_c.php">
Вернуться к списку сервисов</a> '; }
?>
</body> </html>