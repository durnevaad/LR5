<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
$data_n = $_POST['data_n'];
$data_k = $_POST['data_k'];
$fridges_select = $_POST['fridges_select'];
$centr_select = $_POST['centr_select'];
$fio = $_POST['fio'];
$price = $_POST['price'];
$sql = "INSERT INTO remont (data_n, data_k, id_f, id_c, fio, price) VALUES('$data_n','$data_k', '$fridges_select', '$centr_select','$fio','$price')";
  if (mysqli_query($link, $sql)) { 
 print "<p>Все сохранено";
 print "<p><a href=\"index_c.php\"> Вернуться к списку заявок </a>"; }
 else { print "Ошибка сохранения! <a href=\"index_c.php\"> Вернуться к списку заявок </a>";}
?>