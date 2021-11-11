<title> Добавление новой заявки</title> 
<html> <body>
	<script src="jquery-validation-1.15.1/lib/jquery.js"></script>
	<script src="jquery-validation-1.15.1/dist/jquery.validate.js"></script>
	<script type="text/javascript">
$(document).ready(function proverka(){
    $('f').validate({
            rules: {
				email: {required: true,
					email: true,}
		});});
</script>
<form action="save_new_r.php" method="post" name="f" onsubmit="return proverka()">
<br>Дата начала ремонта: <input name="data_n" type="date" size="20" required>
<br>Дата окончания ремонта: <input name="data_k" type="date" size="20" required>
<br>id холодильника: <input name="id_f" type="text" size="20" required>
<br>id сервиса: <input name="id_c" type="text" size="20" required>
<br>ФИО клиента: <input name="fio" type="text" size="20" required>
<br>Стоимость: <input name="price" type="text" size="20" required>
<br>Телефон: <input name="tf" type="text" minlength = "11" maxlength = "11" size="20" pattern = "^[ 0-9]+$" title = "Введите номер в формате 89*********" required>
<br>Почта: <input name="mail" type="email" size="20" required> 
<br><br><input name="add" type="submit" value="Добавить">
<input type="reset"value="Очистить">
</form> </body> </html>
<p><a href="index_c.php"> Вернуться к списку заявок </a>