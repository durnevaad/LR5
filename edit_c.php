<head> <title> Редактирование данных о сервисе</title> </head>
<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_GET['id'];
 $rows = mysqli_query($link,"SELECT * FROM centr WHERE id_c='$id'");
 $row = mysqli_fetch_assoc($rows);
?>
<FORM  method="post" action="save_edit_c.php">
<INPUT type="hidden" name="id" value="<?=$row['id_c']?>">
<br>Название:<INPUT type="text" name="name_c" value="<?=$row['name_c']?>"> 
<br>Адрес: <INPUT type="text" name="adres_c" value="<?=$row['adres_c']?>"> 
<p><INPUT type="submit"value="Сохранить">
</FORM>
<a href="index_c.php"> Вернуться к списку сервисов </a>