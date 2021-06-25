<?php
$connect = mysqli_connect('localhost','root','oracle','php');
$id = $_POST['id'];
echo $_POST['id'];
$sql = "
DELETE FROM board
WHERE id = $id";
mysqli_query($connect,$sql);

header("location:/usr/article/list.php");
?>
