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
        
        $ord = $dbh->prepare("SELECT player.name, parkamon.breed, parkamon.location, `nickname`, ownership.id FROM ownership JOIN player ON ownership.player_id=player.id JOIN parkamon ON ownership.parkamon_id=parkamon.id ORDER BY player.name, parkamon.breed, nickname");
        $ord->execute();
        $table = $ord->fetchAll();
        //var_dump($table);
        $sth = $dbh->prepare("SELECT * FROM player");
        $sth->execute();
        $players = $sth->fetchAll();
        //var_dump($players);
        echo"<h1>Parkamon :D!</h1>";
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

        echo"<label for='player'>Choose your player!</label>";
        echo"<select name='player' id='player'>";
        foreach ($players as $player){
            echo"<option value=" . $player['id'] . ">" . $player['name'] . "</option>";
        }
        echo"</select>";
        echo"<br><input type='submit'><br><br>";
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
    }
    catch (PDOException $error) {
        echo "<p>Error</p>";
    }
?>

</body>
</html>