<head> <title> Редактирование данных о холодильниках </title> </head>
<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_GET['id'];
 $rows = mysqli_query($link,"SELECT * FROM fridges WHERE id_f='$id'");
 $row = mysqli_fetch_assoc($rows);
?>
<FORM  method="post" action="save_editt.php">
<INPUT type="hidden" name="id" value="<?=$row['id_f']?>">
<br>Марка:<INPUT type="text" name="brand" value="<?=$row['brand']?>"> 
<br>Модель: <INPUT type="text" name="model" value="<?=$row['model']?>"> 
<br>Тип разморозки:<INPUT type="text" name="defrost_type" value="<?=$row['defrost_type']?>">
<br>Внутренний объем:<INPUT type="text" name="internal_volume" value="<?=$row['internal_volume']?>">
<br>Срок гарантии:<INPUT type="text" name="guarantee_period" value="<?=$row['guarantee_period']?>">
<p><INPUT type="submit"value="Сохранить">
</FORM>
<a href="indexx.php"> Вернуться к списку холодильников </a>