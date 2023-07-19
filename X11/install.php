<html>
<head>
    <title>Install</title>
</head>
<body>
<?php
require_once "config.php";
try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    //create comic table
    $query = file_get_contents('parkamon2.sql');
    $dbh->exec($query);
    // $query = file_get_contents('info.sql');
    // $dbh->exec($query);
    echo "<p>Successfully installed databases</p>";
}
catch (PDOException $e) {
    echo "<p>Error: {$e->getMessage()}</p>";
}
//https://www.php.net/manual/en/function.file-get-contents 
//https://www.php.net/manual/en/function.exec
//https://www.php.net/manual/en/pdo.exec.php
?>
</body>
</html>