<!DOCTYPE html>
<html>
<head>
  <title>Best Vacation City Quiz Solver</title>
  <link href="Style.css" rel="stylesheet">
</head>

<body>
    <?php 
        $answers = $_POST;
        var_dump($answers);
        $chosen = "";
        //echo "work in progress lol";
        $cities["San Francisco"] = 0;
        $cities["Los Angeles"] = 0;
        $cities["New York City"] = 0;
        $cities["Miami"] = 0;
        $cities["Honolulu"] = 0;
        $cities["Paris"] = 0;
        $cities["London"] = 0;
        $cities["Rome"] = 0;
        $cities["Greece"] = 0;
        $cities[""] = 0;
        $cities["Singapore"] = 0;
        $cities["Tokyo"] = 0;
        $cities["Seoul"] = 0;

        if(isset($_POST['ideal-climate'])){
            if($answers['ideal-climate'] == "Sunny"){

            }
            else if($answers['ideal-climate'] == "Foggy"){
                $cities["London"] = $cities["London"] + 2;
            }
            else if($answers['ideal-climate'] == "Snowy"){
                
            }
        }
        if(isset($_POST['Spicy'])){
            $cities["Seoul"] = $cities["Seoul"] + 1;
            $cities["Singapore"] = $cities["Singapore"] + 1;
        }
        if(isset($_POST['Pastries'])){
            $cities["Paris"] = $cities["Paris"] + 2;
            $cities["San Francisco"] = $cities["San Francisco"] + 1;
        }
        if(isset($_POST['Dairy'])){
            $cities["Rome"] = $cities["Rome"] + 1;
            $cities["Greece"] = $cities["Greece"] + 1;
            $cities["New York City"] = $cities["New York City"] + 1;
        }
        if(isset($_POST['Noodles'])){
            $cities["Tokyo"] = $cities["Tokyo"] + 1;

        }
        if(isset($_POST['Seafood'])){
            $cities["Tokyo"] = $cities["Tokyo"] + 1;
            $cities["San Francisco"] = $cities["San Francisco"] + 1;
            $cities["Honolulu"] = $cities["Honolulu"] + 1;
            $cities["Miami"] = $cities["Miami"] + 1;

        }
        if(isset($_POST['Herby'])){
            $cities["Greece"] = $cities["Greece"] + 1;

        }
        if(isset($_POST['food-style'])){

        }
        if(isset($_POST['city-nature'])){

        }
        if(isset($_POST['forest-beach'])){

        }
        if(isset($_POST['modern-historic'])){

        }
        if(isset($_POST['hustle-relaxed'])){

        }
        if(isset($_POST['tea-coffee'])){

        }

        foreach ($cities as $city => $value){
            //echo "$value";
            if((int)$value > 0){
                $chosen = $city;
                //echo "$chosen";
            }
        }
    ?>
     <div class="background">
        <h1>Your Ideal Vacation Spot Is...</h1>
    <?php
        if(strlen($chosen) > 0){
            echo"<h2>$chosen</h2>";
            echo"<p>$chosen is famous for their... </p>";
        }
        else{
            echo"<h2>Nowhere!</h2>";
            echo"<p>Nowhere is famous for their amazing nothing and fantastic nothing!</p>";
        }
    ?>
    </div>
</body>
