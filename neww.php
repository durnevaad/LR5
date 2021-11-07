<html>
<head> <title> Добавление новой модели холодильника </title> </head>
<body>
<H2>Добавление новой модели холодильника:</H2>
<form action="save_neww.php" metod="post">
Марка:<input name="brand" size="30" type="text">
<br>Модель: <input name="model" size="30" type="text">
<br>Тип разморозки: <input name="defrost_type" size="30" type="text">
<br>Внутренний объем: <input name="internal_volume" size="30" type="text">
<br>Срок гарантии: <input name="guarantee_period" size="30" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="indexx.php"> Вернуться к списку холодильников </a>
</body>
</html>