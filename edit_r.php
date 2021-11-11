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
<form action="save_edit_r.php" method="post" name="f" onsubmit="return proverka()">
<INPUT type="hidden" name="id" value="<?=$rowr['id_r']?>" required>
<br>Дата начала ремонта:<INPUT type="date" name="data_n" value="<?=$rowr['data_n']?>" required> 
<br>Дата окончания ремонта: <INPUT type="date" name="data_k" value="<?=$rowr['data_k']?>" required>
<br>id холодильника: <INPUT type="text" name="id_f" value="<?=$rowr['id_f']?>" required>
<br>id сервиса: <INPUT type="text" name="id_c" value="<?=$rowr['id_c']?>" required>
<br>ФИО:<INPUT type="text" name="fio" value="<?=$rowr['fio']?>" required>
<br>Стоимость:<INPUT type="text" name="price" value="<?=$rowr['price']?>" required>
<br>Телефон: <INPUT name="tf" type="text" minlength = "11" maxlength = "11" size="20" pattern = "^[ 0-9]+$" title = "Введите номер в формате 89*********" value="<?=$rowr['tf']?>" required>
<br>Почта: <INPUT type="email" name="mail" value="<?=$rowr['mail']?>" required>
<p><INPUT type="submit"value="Сохранить">
</form> </body> </html>
<a href="index_c.php"> Вернуться к списку </a>