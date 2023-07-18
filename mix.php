<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Magic Mixerator Mix Results</title>
</head>
<body>
    <h1>Magic Mixerator Mix Results</h1>
    <?php
    $mixActions = array("shake", "blend", "stir", "boil");
   //$mix = $_POST[$mixActions] ?? null;
   $works = True;
  
  if(filter_var($_POST["beans"], FILTER_VALIDATE_INT)){
        echo "<p>You mixed together {$_POST['beans']} beans</p>";
      
    }
    else {
      $works = False;
        echo "<p> you didn't enter any number of beans </p>";
    }
    if(filter_var($_POST["gems"], FILTER_VALIDATE_INT)){
      echo "<p>and {$_POST['gems']} gems</p>";
      echo "<p>to make ";
    }
    else {
      $works = False;
      echo "<p> you didn't enter any number of gems </p>";
    }

    if($works){
      if(isset($_POST['mixaction'])){
        if ($_POST['mixaction'] == "shake") {
          $amount = $_POST['gems'] * $_POST['beans'] - 3;
          echo "{$amount} bouncy potions";
        }
        elseif ($_POST['mixaction'] == "blend") {
          $amount = $_POST['gems'] - $_POST['beans'];
          echo "{$amount} heaps of healing powder";
        }
        elseif ($_POST['mixaction'] == "stir") {
          $amount = $_POST['gems'] / $_POST['beans'];
          echo "{$amount} ounces of strength soup";
        }
        elseif ($_POST['mixaction'] == "boil") {
          $amount = ($_POST['gems'] + $_POST['beans']) * 1000;
          echo "{$amount} puffs of monster repellent perfume";
        }
      }
      else{
        echo "<p>You didn't choose anything</p>";
      }
    }
    else{
      echo "<p>We can't mix for you sorry</p>";
    }
  
    echo "</p>";
   ?>
   <p><a href="X5.html">Again!</a></p>
</body>
</html>