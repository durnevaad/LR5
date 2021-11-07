<?php
$link = mysqli_connect("127.0.0.1", "root", "", "fridge"); 
 if (!$link) {
    echo "Невозможно подключиться к серверу." ;
}
 $id = $_GET['id'];
 $sql = "DELETE FROM centr WHERE id_c = '$id' ";
 mysqli_query($link, $sql);
 header("Location: index_c.php");
 exit;
?>
