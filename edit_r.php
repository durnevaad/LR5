<head> <title> Редактирование данных о заявке </title> </head>
<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_GET['id'];
 $rows = mysqli_query($link,"SELECT * FROM remont WHERE id_r='$id'");
 $rowr = mysqli_fetch_assoc($rows);
?>
<FORM  method="post" action="save_edit_r.php">
<INPUT type="hidden" name="id" value="<?=$rowr['id_r']?>">
<br>Дата начала ремонта:<INPUT type="date" name="data_n" value="<?=$rowr['data_n']?>"> 
<br>Дата окончания ремонта: <INPUT type="date" name="data_k" value="<?=$rowr['data_k']?>">
<br>Холодильник:<br>
<?
$sql_1 = "SELECT * FROM fridges";
$sql_2 = "SELECT * FROM centr";
$res_1 = mysqli_query($link, $sql_1) or die("Невозможно выполнить запрос!");
$res_2 = mysqli_query($link, $sql_2) or die("Невозможно выполнить запрос!");
$id_1 = "fridges_select";
echo("<select name='$id_1'>");
echo("<option value=''>--Пожалуйста, выберите опцию--</option>");
while ($row=mysqli_fetch_array($res_1)){
   echo("<option value='$row[1]'> $row[1]</option>");}
   echo("</select><br>");
   echo("<br>Сервисный центр:<br>");
$id_2 = "centr_select";
   echo("<select name='$id_2'>");
   echo("<option value=''>--Пожалуйста, выберите опцию--</option>");
while ($row=mysqli_fetch_array($res_2)){
   echo("<option value='$row[1]'> $row[1]</option>");}
   echo("</select><br>");
?>
<br>ФИО:<INPUT type="text" name="fio" value="<?=$rowr['fio']?>">
<br>Стоимость:<INPUT type="text" name="price" value="<?=$rowr['price']?>">
<p><INPUT type="submit"value="Сохранить">
</FORM>
<a href="index_c.php"> Вернуться к списку </a>