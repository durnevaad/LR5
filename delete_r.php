<?php
$link = mysqli_connect("127.0.0.1", "a0594944_root", "root", "a0594944_fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_GET['id'];
 $sql = "DELETE FROM remont WHERE id_r = '$id' ";
 mysqli_query($link, $sql);
 header("Location: index_c.php");
 exit;
?>
