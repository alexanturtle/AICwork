<?php
session_start();
require_once "config.php";
if(!isset($_SESSION['playerid'])){
    header('Location: signin.php');
    exit;
}
?>
<html>
<head>
    <title>Parkamon Catch</title>
</head>
<body>
<!-- <form id="parkamon" method="post" action="catch.php"> -->
<?php
if(isset($_SESSION['playerid'])){
$player = $_SESSION['playerid'];
    try{
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        $try = $dbh->prepare("SELECT `id` FROM player ORDER BY `id` DESC");
        $try->execute();
        $user = $try->fetch();
        $max = $user['id'];
        //var_dump($user);
        //echo $max;
        
        if(isset($player) && filter_var($player, FILTER_VALIDATE_INT) && $player >= 1 && $player <= $max){

        $sth = $dbh->prepare("SELECT * FROM parkamon ORDER BY rand()");
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
}
else{
    echo"nonexistant";
}
?>
<!-- </form> -->
<a href="game.php">Back</a>
</body>
</html>