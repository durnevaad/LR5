<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $name_c = $_POST['name_c'];
 $adres_c = $_POST['adres_c'];
 $sql = "INSERT INTO centr (name_c, adres_c) VALUES('$name_c','$adres_c')";
  if (mysqli_query($link, $sql)) { 
 print "<p>Все сохранено";
 print "<p><a href=\"index_c.php\"> Вернуться к списку сервисов </a>"; }
 else { print "Ошибка сохранения! <a href=\"index_c.php\"> Вернуться к списку сервисов </a>";}
?>