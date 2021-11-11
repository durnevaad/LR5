<html> <body>
<?php
$link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_POST['id'];
 $data_n = $_POST['data_n'];
 $data_k = $_POST['data_k'];
 $id_f = $_POST['id_f'];
 $id_c = $_POST['id_c'];
 $fio=$_POST['fio'];
 $price=$_POST['price'];
 $tf = $_POST['tf'];
 $mail = $_POST['mail'];
 $sql = "UPDATE remont SET data_n = '$data_n', data_k = '$data_k', id_f = '$id_f', id_c = '$id_c',fio = '$fio', price = '$price', tf = '$tf', mail = '$mail' WHERE id_r='$id' ";
if (mysqli_query($link, $sql)) {
 echo 'Все сохранено. <a href="index_c.php"> Вернуться к списку заявок </a>'; }
 else { echo 'Ошибка сохранения. <a href="index_c.php"> Вернуться к списку заявок</a> '; }
?>
</body> </html>