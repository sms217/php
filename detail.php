<?php
if(!isset($_GET['id'])){
    echo "id가 없습니다.";
    exit;
}
$id = intval($_GET['id']);
$sql = "select * from board as a where a.id = '${id}'";
$connect = mysqli_connect('localhost','root','oracle','php');

$result = mysqli_query($connect, $sql);
$article = mysqli_fetch_assoc($result);

if($article==null){
    echo "${id} 번 게시물은 존재하지 않습니다.";
    exit;
}

// print_r($article);
// echo "<br>";
// var_dump($article);
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>게시물 상세페이지, <?=$id?>번 게시물</title>
    </head>
    <body>
        <h1>게시물 상세페이지, <?=$id?>번 게시물</h1>
        <hr>
     <div>제목 : <?=$article['title']?></div><hr><br>
     <fieldset>    
         <legend> 
             내용<br>
             <?=$article['body']?>
         </legend>
     </fieldset>
    <div><a href="list.php">목록</a></div>
 </body>
 
 </html>

