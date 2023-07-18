<?php
require_once "config.php";
?>
<html>
<head>
    <title>Multiple columns with the same name</title>
</head>
<body>
<!-- <form id="parkamon" method="post" action="catch.php"> -->
<?php
    try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        $try = $dbh->prepare("SELECT `id` FROM `ownership` ORDER BY `id` DESC");
        $try->execute();
        $owner = $try->fetch();
        $max = $owner['id'];
        //var_dump($user);
        //echo $max;
        
        if(isset($_POST['parkamon']) && filter_var($_POST['parkamon'], FILTER_VALIDATE_INT) && $_POST['parkamon'] >= 1 && $_POST['parkamon'] <= $max){
        if(isset($_POST['name']) && strlen($_POST['name']) > 0 && strlen($_POST['name']) <= 8){
            $parkamon = htmlspecialchars($_POST['parkamon']);
            $name = htmlspecialchars($_POST['name']);
            //var_dump($_POST);
            $change = $dbh->prepare("UPDATE `ownership` SET `nickname` = :nickname WHERE `id` = :id");
            $change->bindValue(':nickname', $name);
            $change->bindValue(':id', $parkamon);
            $change->execute();
            echo "<p>Successfully changed name!</p>";
        }
        else{
            echo "invalid name!<br>";
        }
        }
        else{
            echo "invalid parkamon!<br>";
        }
        //echo $player;
    }
    catch (PDOException $error) {
        echo "<p>Error</p>";
    }
?>
<!-- </form> -->
<a href="game.php">Back</a>
</body>
</html>