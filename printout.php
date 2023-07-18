<!DOCTYPE html>
<html>
<head>
  <title>Questionairre printout</title>
  <style>

</style>  
</head>

<body>
    <?php
    require_once "header.php";
    myheader();

    $answers = $_POST;
    //var_dump($answers);
    $favoritecolor = $answers['Favorite_color'];
    echo "<p>Favorite color: " . htmlspecialchars($favoritecolor) . "</p>";
    echo "<p>Languages known: </p>";

    echo "<ul>";
    foreach($answers as $question => $answer){
        if(str_contains($question, 'Knows_')){
            $language = str_replace('Knows_', "", $question);
            echo "<li>" . htmlspecialchars($language) . "</li>";
        }
    }
    echo "</ul>";

    $favoritelanguage = $answers['Favorite_language'];
    echo "<p>Favorite language: " . htmlspecialchars($favoritelanguage) . "</p>";

    $hourscoded = (int)$answers['Hours_coded'];
    if($hourscoded >= 18){
        echo "<p>Hours coded: " . htmlspecialchars($hourscoded) . " (woww that's a lot)</p>";
    }
    elseif($hourscoded >= 5){
        echo "<p>Hours coded: " . htmlspecialchars($hourscoded) . " (that's great)</p>";
    }
    else{
        echo "<p>Hours coded: " . htmlspecialchars($hourscoded) . " (nice)</p>";
    }
    if(in_array("Favorite_tool", $answers)){
        $favoritetool = $answers['Favorite_tool'];
        echo "<p>Favorite tool: " . htmlspecialchars($favoritetool) . "</p>";
    }
    else{
        echo "<p>Favorite tool: </p>";
    }

    $reason = $answers['Reason_for_joining_the_class'];
    echo "<p>Reason for joining the class: " . htmlspecialchars($reason) . "</p>";
    ?>
</body>
