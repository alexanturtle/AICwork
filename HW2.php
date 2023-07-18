<!DOCTYPE html>
<html>
<head>
  <title>Spoilers oh no</title>
<style>
    body {
        text-align: center;
        font-size: 30px;
    }
    table, td, th {
      border: 2px solid black;
    }
    table {
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        font-size: 20px;
        border-collapse: collapse;
    }
    .hot {
        background-color: red;
        background-repeat: no-repeat;
    }
</style>  
</head>

<body>
    <h1>Hot Takes</h1>
    
<?php
    function compare($hottake1, $hottake2) {
        $ignorechars = ["A ", "An ", "The "];
        foreach($ignorechars as $chars) {
            if(strpos($hottake1, $chars) === 0) {
                $hottake1 = str_replace($chars, "", $hottake1);
            }
            if(strpos($hottake2, $chars) === 0) {
                $hottake2 = str_replace($chars, "", $hottake2); 
            }
        }
        return strcasecmp($hottake1, $hottake2);
    }

    $hottakes["Among Us"] = "Among Us was a good game, but the memes ruined it";
    $hottakes["Avengers"] = "Avengers movies are too flashy";
    $hottakes["The Harry Potter Series"] = "The first movie was the best";
    $hottakes["Great Expectations"] = "Most of the book was boring";
    $hottakes["AOT"] = "hot: Levi should have chose Erwin, not Armin";
    $hottakes["Disney"] = "Old disney movies are better";
    $hottakes["Roblox"] = "fire: Roblox's bad graphics ruins the gameplay";

    uksort($hottakes, "compare");

    echo "<table>";
    foreach($hottakes as $popref => $hottake) {
        echo "<tr>";
            echo "<td>{$popref}";
            if(str_contains($hottake, "hot") || str_contains($hottake, "fire")){
                $hidden = str_rot13($hottake);
                echo "<td class=hot>{$hidden}</td>";
            }
            else{
                $hidden = str_rot13($hottake);
                echo "<td>{$hidden}</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>