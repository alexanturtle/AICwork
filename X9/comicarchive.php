<?php
require 'config.php';
date_default_timezone_set('America/Los_Angeles');

try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT `title`, `date` FROM comic");
    $sth->execute();
    $comic1 = $sth->fetchAll();
}
catch (PDOException $e) {
    echo "<p>Error connecting to database!</p>";
}
$i = 1;
echo "<table>";
foreach ($comic1 as $comic){
    $myDate = new DateTime($comic['date']);
    $prettyDate = $myDate->format("m-d-Y"); //look up format on PHP.net
    echo "<tr>";
    echo "<td><a href=comic.php?id={$i}>Link</a></td>";
    echo "<td><p>Title: {$comic['title']}</p></td>";
    echo "<td><p>Date: ".$prettyDate."</p></td>";
    echo "</tr>";

    $i = $i+1;
}
echo "</table>";
?>