<!DOCTYPE html>
<html>
<head>
  <title>Best Vacation City Quiz Solver</title>
  <link href="P1form4.css" rel="stylesheet">
</head>

<body id="resultbody">
    <!-- here i call my header function -->
<?php
    require_once "header.php";
    myheader();
  ?>
    <?php 
        $answers = $_POST;
        $chosen = ""; // here i create a chosen variable that is the city that is chosen ultimately after calculations
        $chosenvalue = 0; //here is the points for the city that is chosen
        //here i create an associative array for all of my cities, where the value is the points they have
        $cities["San Francisco"] = 0;
        $cities["Los Angeles"] = 0;
        $cities["New York City"] = 0;
        $cities["Miami"] = 0;
        $cities["Honolulu"] = 0;
        $cities["Paris"] = 0;
        $cities["London"] = 0;
        $cities["Rome"] = 0;
        $cities["Santorini, Greece"] = 0;
        $cities["Geneva, Switzerland"] = 0;
        $cities["Singapore"] = 0;
        $cities["Tokyo"] = 0;
        $cities["Seoul"] = 0;

        // here is where i add points for the answers on ideal climate
        if(isset($_POST['ideal-climate'])){
            if($answers['ideal-climate'] == "sunny"){
                $cities["Honolulu"] = $cities["Honolulu"] + 1;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 2;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
            }
            else if($answers['ideal-climate'] == "foggy"){
                $cities["London"] = $cities["London"] + 2;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
            }
            else if($answers['ideal-climate'] == "snowy"){
                $cities["New York City"] = $cities["New York City"] + 1;
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 3;
            }
            else if($answers['ideal-climate'] == "rainy"){
                $cities["Miami"] = $cities["Miami"] + 1;
                $cities["London"] = $cities["London"] + 1;
                $cities["Seoul"] = $cities["Seoul"] + 1;
            $cities["Singapore"] = $cities["Singapore"] + 1;
            }
        }
        // here is where i add points for the answers on food
        if(isset($_POST['Spicy'])){
            $cities["Seoul"] = $cities["Seoul"] + 2;
            $cities["Singapore"] = $cities["Singapore"] + 1;
        }
        if(isset($_POST['Pastries'])){
            $cities["Paris"] = $cities["Paris"] + 2;
            $cities["San Francisco"] = $cities["San Francisco"] + 1;
        }
        if(isset($_POST['Dairy'])){
            $cities["Rome"] = $cities["Rome"] + 2;
            $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
            $cities["New York City"] = $cities["New York City"] + 1;
        }
        if(isset($_POST['Noodles'])){
            $cities["Tokyo"] = $cities["Tokyo"] + 2;
            $cities["Seoul"] = $cities["Seoul"] + 1;
            $cities["Rome"] = $cities["Rome"] + 1;
        }
        if(isset($_POST['Seafood'])){
            $cities["Tokyo"] = $cities["Tokyo"] + 2;
            $cities["San Francisco"] = $cities["San Francisco"] + 1;
            $cities["Honolulu"] = $cities["Honolulu"] + 2;
            $cities["Miami"] = $cities["Miami"] + 1;
        }
        if(isset($_POST['Herby'])){
            $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 2;
            $cities["Rome"] = $cities["Rome"] + 1;
        }
        // here is where i add points for the answers on food style
        if(isset($_POST['food-style'])){
            if($answers['food-style'] == "Michellin"){
                $cities["Tokyo"] = $cities["Tokyo"] + 2;
                $cities["New York City"] = $cities["New York City"] + 2;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["London"] = $cities["London"] + 1;
                $cities["Paris"] = $cities["Paris"] + 1;
            }
            else if($answers['food-style'] == "Street"){
                $cities["Singapore"] = $cities["Singapore"] + 2;
                $cities["Seoul"] = $cities["Seoul"] + 2;
                $cities["New York City"] = $cities["New York City"] + 1;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
            }
            else if($answers['food-style'] == "Bakery"){
                $cities["Paris"] = $cities["Paris"] + 2;
                $cities["New York City"] = $cities["New York City"] + 1;

            }
            else if($answers['food-style'] == "Family"){
                $cities["Rome"] = $cities["Rome"] + 1;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
            }

        }
        // here is where i add points for the answers on favorite attractions
        if(isset($_POST['attraction'])){
            if($answers['attraction'] == "skyscraper"){
                $cities["Seoul"] = $cities["Seoul"] + 1;
                $cities["New York City"] = $cities["New York City"] + 2;
                $cities["Tokyo"] = $cities["Tokyo"] + 1;
                $cities["Singapore"] = $cities["Singapore"] + 1;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["London"] = $cities["London"] + 1;
            }
            else if($answers['attraction'] == "house"){
                $cities["San Francisco"] = $cities["San Francisco"] + 2;
                $cities["Greece"] = $cities["Greece"] + 1;
                $cities["Paris"] = $cities["Paris"] + 1;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
            }
            else if($answers['attraction'] == "boardwalk"){
                $cities["Miami"] = $cities["Miami"] + 1;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["Honolulu"] = $cities["Honolulu"] + 1;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 2;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
            }
            else if($answers['attraction'] == "ruin"){
                $cities["Rome"] = $cities["Rome"] + 2;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
                $cities["London"] = $cities["London"] + 1;
            }
        }
        // here is where i add points for the answers on favorite natural scenery
        if(isset($_POST['scenery'])){
            if($answers['scenery'] == "beach"){
                $cities["Miami"] = $cities["Miami"] + 3;
                $cities["Honolulu"] = $cities["Honolulu"] + 3;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 3;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
            }
            else if($answers['scenery'] == "mountain"){
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
                $cities["Rome"] = $cities["Rome"] + 1;
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 3;
                $cities["Tokyo"] = $cities["Tokyo"] + 1;
            }
            else if($answers['scenery'] == "forest"){
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 3;
                $cities["San Francisco"] = $cities["San Francisco"] + 2;
                $cities["Seoul"] = $cities["Seoul"] + 1;
            }
            else if($answers['scenery'] == "park"){
                $cities["Singapore"] = $cities["Singapore"] + 1;
                $cities["London"] = $cities["London"] + 1;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["New York City"] = $cities["New York City"] + 2;
                $cities["Paris"] = $cities["Paris"] + 1;
            }
        }
        // here is where i add points for the answers on favorite architecture
        if(isset($_POST['architecture'])){
            if($answers['architecture'] == "modern"){
                $cities["Singapore"] = $cities["Singapore"] + 2;
                $cities["New York City"] = $cities["New York City"] + 1;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["Singapore"] = $cities["Singapore"] + 2;
                $cities["Seoul"] = $cities["Seoul"] + 2;
                $cities["Tokyo"] = $cities["Tokyo"] + 2;
                $cities["London"] = $cities["London"] + 1;
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 1;
            }
            else if($answers['architecture'] == "classic"){
                $cities["Rome"] = $cities["Rome"] + 2;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
                $cities["Paris"] = $cities["Paris"] + 2;
                $cities["London"] = $cities["London"] + 2;
            }
            else if($answers['architecture'] == "beachstyle"){
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 2;
                $cities["Miami"] = $cities["Miami"] + 1;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 2;
                $cities["Honolulu"] = $cities["Honolulu"] + 2;
            }
            else if($answers['architecture'] == "ancient"){
                $cities["Rome"] = $cities["Rome"] + 2;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
                $cities["London"] = $cities["London"] + 1;
            }
        }
        // here is where i add points for the answers on favorite environment
        if(isset($_POST['environment'])){
            if($answers['environment'] == "busy"){
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["London"] = $cities["London"] + 1;
                $cities["Miami"] = $cities["Miami"] + 1;
                $cities["Seoul"] = $cities["Seoul"] + 2;
                $cities["Tokyo"] = $cities["Tokyo"] + 2;
                $cities["Singapore"] = $cities["Singapore"] + 2;
                $cities["New York City"] = $cities["New York City"] + 2;
            }
            else if($answers['environment'] == "chill"){
                $cities["Miami"] = $cities["Miami"] + 1;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 2;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["Rome"] = $cities["Rome"] + 1;
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 1;
                $cities["Paris"] = $cities["Paris"] + 1;
                $cities["Honolulu"] = $cities["Honolulu"] + 2;
            }
            else if($answers['environment'] == "quiet"){
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 2;
                $cities["Honolulu"] = $cities["Honolulu"] + 1;
                $cities["Rome"] = $cities["Rome"] + 1;
            }
            else if($answers['environment'] == "fun"){
                $cities["Seoul"] = $cities["Seoul"] + 2;
                $cities["Tokyo"] = $cities["Tokyo"] + 2;
                $cities["Singapore"] = $cities["Singapore"] + 1;
                $cities["San Francisco"] = $cities["San Francisco"] + 2;
                $cities["New York City"] = $cities["New York City"] + 1;
            }
        }
        // here is where i add points for the answers on favorite drink
        if(isset($_POST['drink'])){
            if($answers['drink'] == "coffee"){
                $cities["New York City"] = $cities["New York City"] + 1;
                $cities["San Francisco"] = $cities["San Francisco"] + 2;
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 1;
                $cities["Paris"] = $cities["Paris"] + 2;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
            }
            else if($answers['drink'] == "soda"){
                $cities["Honolulu"] = $cities["Honolulu"] + 1;
                $cities["Miami"] = $cities["Miami"] + 1;
                $cities["New York City"] = $cities["New York City"] + 1;
            }
            else if($answers['drink'] == "tea"){
                $cities["Seoul"] = $cities["Seoul"] + 2;
                $cities["Tokyo"] = $cities["Tokyo"] + 2;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["London"] = $cities["London"] + 2;
                $cities["Singapore"] = $cities["Singapore"] + 1;
            }
            else if($answers['drink'] == "wine"){
                $cities["Rome"] = $cities["Rome"] + 2;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
            }
        }
        // here is where i add points for the answers on what to do during the day
        if(isset($_POST['day'])){
            if($answers['day'] == "museum"){
                $cities["Paris"] = $cities["Paris"] + 2;
                $cities["New York City"] = $cities["New York City"] + 2;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["London"] = $cities["London"] + 1;
            }
            else if($answers['day'] == "hike"){
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 2;
                $cities["Rome"] = $cities["Rome"] + 1;
            }
            else if($answers['day'] == "sightsee"){
                $cities["New York City"] = $cities["New York City"] + 1;
                $cities["Paris"] = $cities["Paris"] + 1;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
                $cities["London"] = $cities["London"] + 1;
            }
            else if($answers['day'] == "shop"){
                $cities["Seoul"] = $cities["Seoul"] + 2;
                $cities["Tokyo"] = $cities["Tokyo"] + 2;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["Singapore"] = $cities["Singapore"] + 1;
                $cities["Paris"] = $cities["Paris"] + 1;
                $cities["Honolulu"] = $cities["Honolulu"] + 1;
            }
        }
        // here is where i add points for the answers on what is the interest is when travelling
        if(isset($_POST['interest'])){
            if($answers['interest'] == "history"){
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 1;
                $cities["Rome"] = $cities["Rome"] + 2;
                $cities["London"] = $cities["London"] + 1;
            }
            else if($answers['interest'] == "view"){
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 2;
                $cities["Honolulu"] = $cities["Honolulu"] + 1;
                $cities["Miami"] = $cities["Miami"] + 1;
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 2;
            }
            else if($answers['interest'] == "citylife"){
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["Singapore"] = $cities["Singapore"] + 1;
                $cities["Seoul"] = $cities["Seoul"] + 2;
                $cities["Tokyo"] = $cities["Tokyo"] + 2;
                $cities["New York City"] = $cities["New York City"] + 2;
                $cities["San Francisco"] = $cities["San Francisco"] + 1;
            }
            else if($answers['interest'] == "luxury"){
                $cities["Paris"] = $cities["Paris"] + 2;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["New York City"] = $cities["New York City"] + 1;
                $cities["Singapore"] = $cities["Singapore"] + 1;
            }
        }

        if(isset($_POST['aesthetic'])){
            if($answers['aesthetic'] == "clean"){
                $cities["San Francisco"] = $cities["San Francisco"] + 2;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 2;
                $cities["London"] = $cities["London"] + 1;
                $cities["New York City"] = $cities["New York City"] + 1;
            }
            else if($answers['aesthetic'] == "cyber"){
                $cities["Singapore"] = $cities["Singapore"] + 1;
                $cities["Seoul"] = $cities["Seoul"] + 2;
                $cities["Tokyo"] = $cities["Tokyo"] + 2;
            }
            else if($answers['aesthetic'] == "europe"){
                $cities["Paris"] = $cities["Paris"] + 2;
                $cities["Geneva, Switzerland"] = $cities["Geneva, Switzerland"] + 1;
                $cities["Santorini, Greece"] = $cities["Santorini, Greece"] + 2;
                $cities["Rome"] = $cities["Rome"] + 2;
                $cities["London"] = $cities["London"] + 1;
            }
            else if($answers['aesthetic'] == "seaside"){
                $cities["Honolulu"] = $cities["Honolulu"] + 2;
                $cities["Miami"] = $cities["Miami"] + 2;
                $cities["Los Angeles"] = $cities["Los Angeles"] + 1;
            }
        }
        //here is where i loop through each of the cities and see which city has the most points
        foreach ($cities as $city => $value){
            //echo "$value";
            if((int)$value > $chosenvalue){
                $chosen = $city;
                $chosenvalue = $value;
                //echo "$chosen";
            }
        }
    ?>
    <!-- here is the results page html -->
     <div class="background">
        <h1>Your Ideal Vacation Spot Is...</h1>
    <?php
        //here i test to see if there is a chosen city, where if there is i print it out, and if there
        //isn't, i print out "nowhere"
        if(strlen($chosen) > 0){
            echo"<h2 class=solveh2>$chosen</h2>";
            //echo"<p class=solvep>$chosen is famous for their... </p>";
        }
        else{
            echo"<h2 class=solveh2>Nowhere!</h2>";
            //echo"<p class=solvep>Nowhere is famous for their amazing nothing and fantastic nothing!</p>";
        }
        //here i validate the users info and print it out
        echo"<table id=formtable>";
            echo"<tr>";
        echo "<p class=solvep><td>Name: </td><td>" . htmlspecialchars($answers["name"]) . "</td></p>";
            echo"</tr>";

            echo"<tr>";
        if(filter_var($answers["age"], FILTER_VALIDATE_INT)){
            echo "<p class=solvep><td>Age: </td><td>" . htmlspecialchars($answers["age"]) . "</td></p>";
        }
        else{
            echo "<p class=solvep><td>Age: </td></p>";
        }
            echo"</tr>";

            echo"<tr>";
        if(filter_var($answers["email"], FILTER_VALIDATE_EMAIL)){
            echo "<p class=solvep><td>Email: </td><td>" . htmlspecialchars($answers["email"]) . "</td></p>";
        }
        else{
            echo "<p class=solvep><td>Email: </td></p>";
        }
            echo"</tr>";

            echo"<tr>";
        echo "<p class=solvep><td>Phone Number: </td><td>" . htmlspecialchars($answers["phone"]) . "</td></p>";
            echo"</tr>";

            echo"<tr>";
        echo "<p class=solvep><td>City: </td><td>" . htmlspecialchars($answers["city"]) . "</td></p>";
            echo"</tr>";

            echo"<tr>";
        echo "<p class=solvep><td>State: </td><td>" . htmlspecialchars($answers["state"]) . "</td></p>";
            echo"</tr>";
        echo"</table>";
    ?>
    </div>
</body>
