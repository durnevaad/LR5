<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $data_n = $_POST['data_n'];
 $data_k = $_POST['data_k'];
 $id_f = $_POST['id_f'];
 $id_c = $_POST['id_c'];
 $fio = $_POST['fio'];
 $price = $_POST['price'];
 $tf = $_POST['tf'];
 $mail = $_POST['mail'];
 $sql = "INSERT INTO remont (data_n, data_k, id_f, id_c, fio, price, tf, mail) VALUES('$data_n','$data_k', '$id_f', '$id_c', '$fio', '$price', '$tf', '$mail')";
  if (mysqli_query($link, $sql)) { 
 print "<p>Все сохранено";
 print "<p><a href=\"index_c.php\"> Вернуться к списку заявок </a>"; }
 else { print "Ошибка сохранения! <a href=\"index_c.php\"> Вернуться к списку заявок </a>";}
?>