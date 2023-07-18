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
        $try = $dbh->prepare("SELECT `id` FROM player ORDER BY `id` DESC");
        $try->execute();
        $user = $try->fetch();
        $max = $user['id'];
        //var_dump($user);
        //echo $max;
        
        if(isset($_POST['player']) && filter_var($_POST['player'], FILTER_VALIDATE_INT) && $_POST['player'] >= 1 && $_POST['player'] <= $max){
            $player = htmlspecialchars($_POST['player']);

        $sth = $dbh->prepare("SELECT * FROM parkamon ORDER By rand()");
        $sth->execute();
        $parkamon = $sth->fetch();
        //var_dump($parkamon);
        //echo $parkamon['id'];

        $insert = $dbh->prepare("INSERT INTO ownership (player_id, parkamon_id, nickname) VALUES (:player, :parkamon, 'Richard')");
        $insert->bindValue(':player', $player);
        $insert->bindValue(':parkamon', $parkamon['id']);
        $insert->execute();
        echo "<p>Successfully added to parkadex!</p>";
        }
        else{
            echo "invalid player!<br>";
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