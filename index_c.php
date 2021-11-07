<html>
<head> <title> Сведения о сервисных центрах </title> </head>
<body>
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
$link = mysqli_connect("127.0.0.1", "root", "", "fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
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
</body> </html>