<?php
require 'config.php';
date_default_timezone_set('America/Los_Angeles');

try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT `title`, `fileName`, `date` FROM comic ORDER BY `date` DESC");
    $sth->execute();
    $comic1 = $sth->fetch(); //stores in associative array
}
catch (PDOException $e) {
    echo "<p>Error connecting to database!</p>";
}

echo "<h1>First query</h1>";
echo "<p>Comic from {$comic1['title']}</p>";
echo "<img src=https://atdpsites.berkeley.edu/chalkboardmanifesto/{$comic1['fileName']} alt=sry>";
$myDate = new DateTime($comic1['date']);
$prettyDate = $myDate->format("m-d-Y"); //look up format on PHP.net

echo "<p>Date: ".$prettyDate."</p>";
?>
