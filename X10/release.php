<?php
require_once "config.php";
?>
<html>
<head>
    <title>Multiple columns with the same name</title>
</head>
<body>

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
            $parkamon = htmlspecialchars($_POST['parkamon']);
            //var_dump($_POST);
            $delete = $dbh->prepare("DELETE FROM `ownership` WHERE `id` = :id");
            $delete->bindValue(':id', $parkamon);
            $delete->execute();
            echo "<p>Successfully released parkamon!</p>";
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

<a href="game.php">Back</a>
</body>
</html>