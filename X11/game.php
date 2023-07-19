<?php
session_start();
require_once "config.php";
?>
<html>
<head>
    <title>Parkamon Game</title>
</head>
<body>
<?php
 try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    if (isset($_POST['player'])){
        $player = $_POST['player'];
        $password = $dbh->prepare("SELECT `password_hash` FROM player WHERE `id` = :id");
        $password->bindValue(':id', $player);
        $password->execute();
        $hash = $password->fetch();
        if(isset($_POST['password'])){
            $password = $_POST['password'];
            if (password_verify($password, $hash['password_hash'])) {
                echo "Password correct";
            }
            else {
                echo "Password incorrect";
                header('Location: signin.php');
                exit;
            }
        }
    }
}
catch (PDOException $error) {
    echo "<p>Error</p>";
}
    ?> 
<?php
if (isset($_POST['player'])){
    $player = $_POST['player'];
    $_SESSION['playerid'] = $player;
}
else if (isset($_SESSION['playerid'])){
    $player = $_SESSION['playerid'];
}
else if(!isset($_SESSION['playerid'])){
    header('Location: signin.php');
    exit;
}
    try {
        
        $ord = $dbh->prepare("SELECT player.name, parkamon.breed, parkamon.location, `nickname`, ownership.id FROM ownership JOIN player ON ownership.player_id=player.id JOIN parkamon ON ownership.parkamon_id=parkamon.id WHERE ownership.player_id=:player ORDER BY player.name, parkamon.breed, nickname");
        $ord->bindValue(':player', $player);
        $ord->execute();
        $table = $ord->fetchAll();
        //var_dump($table);
        $sth = $dbh->prepare("SELECT * FROM player");
        $sth->execute();
        $players = $sth->fetchAll();
        //var_dump($players);
        $playerid = $dbh->prepare("SELECT `name` FROM player WHERE `id` = :id");
        $playerid->bindValue(':id', $player);
        $playerid->execute();
        $name = $playerid->fetch();
        echo"<h1>Parkamon :D!</h1>";
        //var_dump($name);
        echo $name['name'];
        echo"<table>";
        foreach ($table as $row){
            echo"<tr>";
                //echo"<td>" . $row['id'] . "</td>";
                echo"<td>" . $row['name'] . "</td>";
                echo"<td>" . $row['breed'] . "</td>";
                echo"<td>" . $row['location'] . "</td>";
                echo"<td>" . $row['nickname'] . "</td>";
            echo"</tr>";
        }
        echo"</table><br>";

        echo"<form id='parkamon' method='post' action='catch.php'>";

        echo"<label for='catch'>Catch a pokemon!</label>";
        echo"<br><input type='submit' name='catch'><br><br>";
        echo"</form>";

        echo"<form id='name' method='post' action='rename.php'>";

        echo"<label for='parkamon'>Choose a parkamon to change!</label>";
        echo"<select name='parkamon' id='parkamon'>";
        foreach ($table as $row){
            echo"<option value=" . $row['id'] . ">" . $row['breed'] . "</option>";
        }
        echo"</select>";
        echo"<br>New name: <br>";
        echo"<input type='text' name='name' maxlength='8'>";
        echo"<br><input type='submit' id='newname'>";
        echo"</form>";

        echo"<form id='name' method='post' action='release.php'>";

        echo"<label for='parkamon'>Choose a parkamon to release!</label>";
        echo"<select name='parkamon' id='releaseparkamon'>";
        foreach ($table as $row){
            echo"<option value=" . $row['id'] . ">" . $row['breed'] . "</option>";
        }
        echo"</select>";
        echo"<br><input type='submit' id='release'>";
        echo"</form>";

        echo"<a href='signout.php'>Sign Out</a>";
    }
    catch (PDOException $error) {
        echo "<p>Error</p>";
    }
?>

</body>
</html>