<?php
require 'config.php';
date_default_timezone_set('America/Los_Angeles');

    try{
        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        $sth = $dbh->prepare("SELECT `comicID` FROM comic ORDER BY `date` DESC");
        $sth->execute();
        $comic1 = $sth->fetch(); //stores in associative array
        $max = $comic1['comicID'];
        //echo"$max";
        if(isset($_GET["id"])){
            $id = $_GET["id"];
        }
        else{
            $id=0;
        }

        $ec = $dbh->prepare("SELECT `text`, `comicID` FROM info");
        $ec->execute();
        $info = $ec->fetchAll(); 

    if(isset($id) && filter_var($id, FILTER_VALIDATE_INT) && $id >= 1 && $id <= $max){
            $sth = $dbh->prepare("SELECT `title`, `fileName`, `date`, `comicID` FROM comic WHERE `comicID` = :id");
            $sth->bindValue(':id', $id);
            $sth->execute();
            $comic1 = $sth->fetch(); //stores in associative array

            echo "<h1>Your Comic</h1>";
            foreach ($info as $comic){
                if($comic['comicID'] == $comic1['comicID']){
                    echo "<p>{$comic['text']}</p>";
                }
            }
            echo "<p>Comic from {$comic1['title']}</p>";
            echo "<img src=https://atdpsites.berkeley.edu/chalkboardmanifesto/{$comic1['fileName']} alt=sry>";
            $myDate = new DateTime($comic1['date']);
            $prettyDate = $myDate->format("m-d-Y"); //look up format on PHP.net
            echo "<p>Date: ".$prettyDate."</p>";
    }
    else{
            $sth = $dbh->prepare("SELECT `title`, `fileName`, `date` FROM comic ORDER BY `date` DESC");
            $sth->execute();
            $comic1 = $sth->fetch(); //stores in associative array
            echo "<h1>Your Comic</h1>";
            echo "<p>Comic from {$comic1['title']}</p>";
            echo "<img src=https://atdpsites.berkeley.edu/chalkboardmanifesto/{$comic1['fileName']} alt=sry>";
            $myDate = new DateTime($comic1['date']);
            $prettyDate = $myDate->format("m-d-Y"); //look up format on PHP.net
            echo "<p>Date: ".$prettyDate."</p>";
    }
    if($id > 1 && $id <= 892){
        $previousid = htmlspecialchars($id -1);
        echo "<a href=comic.php?id={$previousid}>Previous</a><br><br>";
    }
    elseif($id == 1){
        $previousid = htmlspecialchars($max);
        echo "<a href=comic.php?id={$previousid}>Previous</a><br><br>";
    }
    else{
        $previousid = htmlspecialchars($max -1);
        echo "<a href=comic.php?id={$previousid}>Previous</a><br><br>";
    }
    if($id >= 1 && $id < 892){
        $nextid = htmlspecialchars($id + 1);
        echo "<a href=comic.php?id={$nextid}>Next</a><br><br>";
    }
    else{
        echo "<a href=comic.php?id=1>Next</a><br><br>";
    }
    echo "<a href=comic.php?id=1>First</a><br><br>";
    echo "<a href=comic.php?id=$max>Latest</a><br><br>";

    }
    catch (PDOException $e) {
        echo "<p>Error connecting to database!</p>";
    }
    echo "<a href=comicarchive.php>Index</a>";

?>
