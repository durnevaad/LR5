<html>
<head> <title> Сведения о сервисных центрах </title> </head>
<body>

<h2>Холодильники:</h2>
<table border="1">
		<tr>
			<th> Номер</th>
			<th> Марка</th>
			<th> Модель</th>
			<th> Внутренний объем</th>
			<th> Редактировать</th>
			<th> Удалить</th>
		</tr>
<?php	
$link = mysqli_connect("127.0.0.1", "root", "", "fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
$result = mysqli_query($link, "SELECT id_f, brand, model, internal_volume FROM fridges");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['id_f'] . "</td>";
 echo "<td>" . $row['brand'] . "</td>";
 echo "<td>" . $row['model'] . "</td>";
 echo "<td>" . $row['internal_volume'] . "</td>";
 echo "<td><a href='editt.php?id=" . $row['id_f']. "'>Редактировать</a></td>"; 
 echo "<td><a href='deletee.php?id=" . $row['id_f']. "'>Удалить</a></td>"; 
 echo "</tr>";}
print "</table>";
$num_rows = mysqli_num_rows($result); 
print("<P>Всего моделей холодильников: $num_rows </p>");
?>
<p> <a href="neww.php"> Добавить модель холодильника </a>

<h2>Сервисные центры:</h2>
<table border="1">
		<tr>
			<th> Номер</th>
			<th> Название</th>
			<th> Адрес</th>
			<th> Редактировать</th>
			<th> Удалить</th>
		</tr>
<?php	
$result = mysqli_query($link, "SELECT id_c, name_c, adres_c FROM centr");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['id_c'] . "</td>";
 echo "<td>" . $row['name_c'] . "</td>";
 echo "<td>" . $row['adres_c'] . "</td>";
 echo "<td><a href='edit_c.php?id=" . $row['id_c']. "'>Редактировать</a></td>"; 
 echo "<td><a href='delete_c.php?id=" . $row['id_c']. "'>Удалить</a></td>"; 
 echo "</tr>";}
print "</table>";
$num_rows = mysqli_num_rows($result); 
print("<P>Всего сервисов: $num_rows </p>");
?>
<p> <a href="new_c.php"> Добавить сервис </a>

<h2>Заявки на ремонт:</h2>
<table border="1">
		<tr>
			<th> Номер</th>
			<th> Начало ремонта</th>
			<th> Окончание ремонта</th>
			<th> № холодильника</th>
			<th> № сервисного центра</th>
			<th> ФИО</th>
			<th> Стоимость</th>
			<th> Редактировать</th>
			<th> Удалить</th>
		</tr>
<?php	
$result = mysqli_query($link, "SELECT *, DATE_FORMAT(`data_n`, '%d/%m/%Y') AS `data_n`, DATE_FORMAT(`data_k`, '%d/%m/%Y') AS `data_k` FROM remont");
while ($row=mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>" . $row['id_r'] . "</td>";
 echo "<td>" . $row['data_n'] . "</td>";
 echo "<td>" . $row['data_k'] . "</td>";
 echo "<td>" . $row['id_f'] . "</td>";
 echo "<td>" . $row['id_c'] . "</td>";
 echo "<td>" . $row['fio'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";
 echo "<td><a href='edit_r.php?id=" . $row['id_r']. "'>Редактировать</a></td>"; 
 echo "<td><a href='delete_r.php?id=" . $row['id_r']. "'>Удалить</a></td>"; 
 echo "</tr>";}
print "</table>";
$num_rows = mysqli_num_rows($result); 
print("<P>Всего заявок: $num_rows </p>");
?>
<p> <a href="new_r.php"> Добавить заявку </a>
<p> <a href="gen_pdf.php"> Сгенерировать pdf файл </a><p>	
<p> <a href="gen_xls.php"> Сгенерировать xls файл </a><p>
</body> </html>