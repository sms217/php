<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyper Preprocessor Practice</title>
</head>
<body>
    안녕하세요, <?php echo $_GET["name"] ?> 님

    <h1>WEB</h1>
    <ol>
        <li><a href="urlControl.php?id=HTML&name=민성">HTML</a></li>
        <li><a href="urlControl.php?id=CSS&name=민성">CSS</a></li>
        <li><a href="urlControl.php?id=JAVASCRIPT&name=민성 ">JAVA SCRIPT</a></li>
    </ol>
    <h2>
        <?php if(isset($_GET['id'])){
            echo $_GET['id'];
        }
        else {
            echo "welcome";
            }?>
    </h2>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, dolorem quasi beatae molestias possimus reiciendis expedita voluptas perspiciatis dolor fugiat aperiam totam blanditiis commodi id explicabo saepe eum quis laborum!
    <?php 
    echo "<br>";
    echo "<br>";
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    }else {
        echo "Welcome to PHP(Hyper Preprocessor)! ";
    }
        ?>

    <?php 
    $flag = false;
    echo "<br>";
    echo false; //true = 1, false = 아무것도 출력안함
    ?>
</body>
</html>