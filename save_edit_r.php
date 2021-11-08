<html> <body>
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_POST['id'];
 $data_n = $_POST['data_n'];
 $data_k = $_POST['data_k'];
 $fridges_select = $_POST['fridges_select'];
 $centr_select = $_POST['centr_select'];
 $fio=$_POST['fio'];
 $price=$_POST['price'];
 $sql = "UPDATE remont SET data_n = '$data_n', data_k = '$data_k', id_f = '$fridges_select', id_c = '$centr_select',fio = '$fio', price = '$price' WHERE id_r='$id' ";
if (mysqli_query($link, $sql)) {
 echo 'Все сохранено. <a href="index_c.php"> Вернуться к списку заявок </a>'; }
 else { echo 'Ошибка сохранения. <a href="index_c.php"> Вернуться к списку заявок</a> '; }
?>
</body> </html>