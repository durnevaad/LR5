<html>
<head> <title> Добавление новой заявки </title> </head>
<body>
<H2> Добавление новой заявки: </H2>
<?php
 $link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
?>
<FORM  action="save_new_r.php" method="post">
<br>Дата начала ремонта:<INPUT type="date" name="data_n"> 
<br><br>Дата окончания ремонта: <INPUT type="date" name="data_k"> 
<br><br>Холодильник:<br>
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
<br>ФИО:<INPUT type="text" name="fio" size="30">
<br><br>Стоимость:<INPUT type="text" name="price" size="30">
<p><INPUT type="submit"value="Добавить">
<INPUT type="reset"value="Очистить"><p>
</FORM>
<p>
<a href="index_c.php"> Вернуться к списку заявок</a>
</body>
</html>