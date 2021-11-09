<html>
<head> <title> Добавление новой заявки</title> </head>
<body>
<H2> Добавление новой заявки: </H2>
<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
?>
<form action="save_new_r.php" method="post">
<br>Дата начала ремонта: <input name="data_n" type="date" size="20">
<br>Дата окончания ремонта: <input name="data_k" type="date" size="20"> 

<br>Холодильник:<br>
<?php
$sql_1 = "SELECT * FROM fridges";
$sql_2 = "SELECT * FROM centr";
$result_1 = mysqli_query($link, $sql_1) or die("Невозможно выполнить запрос!");
$result_2 = mysqli_query($link, $sql_2) or die("Невозможно выполнить запрос!");
$id_1 = "fridges_select";
echo("<select name='$id_1'>");
echo("<option value=''>--Пожалуйста, выберите опцию--</option>");
while ($row=mysqli_fetch_array($result_1)){
   echo("<option value='$row[1]'> $row[1]</option>");
}
   echo("</select><br>");
   echo("Сервисный центр:<br>");
$id_2 = "centr_select";
   echo("<select name='$id_2'>");
   echo("<option value=''>--Пожалуйста, выберите опцию--</option>");
while ($row=mysqli_fetch_array($result_2)){
   echo("<option value='$row[1]'> $row[1]</option>");
}
   echo("</select><br>");
?>

<br>ФИО клиента: <input name="fio" type="text" size="20">
<br>Стоимость: <input name="price" type="text" size="20"> 
<p><input name="add" type="submit" value="Добавить">
<input type="reset"value="Очистить"><p>
</form>
<p>
<a href="index_c.php"> Вернуться к списку заявок </a>
</body>
</html>