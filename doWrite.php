<?php

$title = $_POST['title'];
$body = $_POST['body'];
if($title==null){
    echo "제목을 입력해주세요.";
}

if(!isset($body)){
    echo "내용을 입력해주세요.";
}
 
$connect = mysqli_connect('localhost','root','oracle','php');
$sql = "
INSERT INTO board
SET regDate=NOW(),
updateDate=NOW(),
title='$title',
`body`='$body'";
mysqli_query($connect,$sql);
$id = mysqli_insert_id($connect);
?>
<script>alert("게시물이 등록되었습니다.")</script>
<?php
header("location:/usr/article/list.php");
?>

<div><a href="list.php">목록</a></div>
