<html>
<head> <title> Добавление новой модели холодильника</title> </head>
<body>
<H2> Добавление новой модели холодильника: </H2>
<form action="save_neww.php" method="post">
<br>Марка: <input name="brand" type="text" size="20">
<br>Модель: <input name="model" type="text" size="20"> 
<br>Тип разморозки: <input name="defrost_type" type="text" size="20">
<br>Внутренний объем: <input name="internal_volume" type="text" size="20"> 
<br>Срок гарантии: <input name="guarantee_period" type="text" size="20"> 
<p><input name="add" type="submit" value="Добавить">
<input type="reset"value="Очистить"><p>
</form>
<p>
<a href="index_c.php"> Вернуться к списку холодильников </a>
</body>
</html>