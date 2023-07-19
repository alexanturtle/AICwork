<?php
require_once "config.php";
?>
<html>
<head>
    <title>Signout</title>
</head>
<body>
<?php
    try {
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        //var_dump($table);
        $sth = $dbh->prepare("SELECT * FROM player");
        $sth->execute();
        $players = $sth->fetchAll();
        //var_dump($players);
        echo"<h1>Parkamon Login :D!</h1>";

        echo"<form id='parkamon' method='post' action='game.php'>";

        echo"<label for='player'>Choose your player!</label>";
        echo"<select name='player' id='player'>";
        foreach ($players as $player){
            echo"<option value=" . $player['id'] . ">" . $player['name'] . " (" . $player['id'] . ")</option>";
        }
        echo"</select><br>";

        echo"<br>Password: ";
        echo"<input type='text' name='password'>";

        echo"<br><input type='submit'><br><br>";
        echo"</form>";
    }
    catch (PDOException $error) {
        echo "<p>Error</p>";
    }
?>

</body>
</html>