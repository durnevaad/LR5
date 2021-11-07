<?php
$link = mysqli_connect("127.0.0.1", "root", "", "fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_GET['id'];
 $sql = "DELETE FROM remont WHERE id_r = '$id' ";
 mysqli_query($link, $sql);
 header("Location: index_c.php");
 exit;
?>
