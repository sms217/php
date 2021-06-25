<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 리스트</title>
</head>
<body>
    <?php
    $connect = mysqli_connect('localhost','root','oracle','php') or die('DB CONNECTION ERROR');
    $query = "
    select rank() over(order by regDate) 
    as rank, id, regDate, updateDate, title, body 
    from board 
    order by regDate
    ";
    $result = mysqli_query($connect,$query);
    $articles = [];
    // while(true){
    //     $article = mysqli_fetch_assoc($result);
    //     if($article == null) break;
    //     $articles[] = $article;
    // }

    // $art = mysqli_fetch_array($result);
    // echo count($art);
    while($article = mysqli_fetch_assoc($result)){
        $articles[] = $article;
        // echo count($article);
    }
    // $rankSql = "select rank() over( order by regDate) as rank, id, regDate, updateDate, title, body from board order by regDate";
    // $rankQuery = mysqli_query($connect, $rankSql);
    // $rankSet = mysqli_fetch_assoc($rankQuery);
    // $rank = $rankSet['rank'];
    // echo $rank;
    // while($articles[] = mysqli_fetch_assoc($result)){}
    
    // $article2 = mysqli_fetch_assoc($result);
    // $article3 = mysqli_fetch_assoc($result);
    // // for($i=0; $i<count($article); $i++){
    //     //     echo $article[$i]."<br>";
    //     // }
    //     // var_dump($article);
    //     // var_dump($article2);
    //     // exit;
    // $articles[1] = $article2;
    // $articles[2] = $article3;


    ?>
    <h1>게시판</h1>
    <hr>
    <div>
        <?php
        foreach($articles as $article){
        ?>
        <?php
        $detailUri = "detail.php?id=${article['id']}";
        ?>
        <a href="<?=$detailUri?>">번호 : <?=$article['rank']?><br></a>
        작성 : <?=$article['regDate']?><br>
        수정 : <?=$article['updateDate']?><br>
        <a href="<?=$detailUri?>">제목 : <?=$article['title']?><br></a>
        <form action="delete.php" method="post">
            <input type="submit" value="삭제하기">
            <input type="hidden" name="id" value="<?=$article['id']?>">
        </form>
        <hr>
        <?php  
             }
        ?>
    </div>
    <a href="write.php">작성하기</a>
    
    
</body>
</html>