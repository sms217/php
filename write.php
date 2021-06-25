<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 작성</title>
</head>
<body>
    <h1>게시물 작성</h1>
    <form action="doWrite.php" method="POST">
        <span>제목</span>
        <div><p><input required type="text" placeholder="제목을 입력하세요." name="title"></p></div>
        <span>내용</span>
        <div><p><textarea required name="body" placeholder="내용을 입력하세요."></textarea></p></div>
        <div><p><input type="submit" value="작성하기"></p></div>
    </form>
</body>
</html>