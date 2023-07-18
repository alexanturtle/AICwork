<!DOCTYPE html>
<html>
<head>
  <title>Penn's Favorite things</title>
<style>
    body {
        padding: 20px;
        background-color: lightblue;
    }
    td {
        border: 2px solid black;
        padding: 5px;
    }
    #Thai {
        background-color: orange;
    }
    #Greek-Salad {
        background-color: lightgreen;
    }
    #Brownies {
        background-color: brown;
    }
</style>  
</head>

<body>
    <h1>Penn's Favorites</h1>
    <h2>Favorite Foods</h2>
    <table>
        <tr>
    <?php
        $foods = ["Thai", "Greek-Salad", "Brownies"];
        for($i=0; $i < count($foods); $i++) {
            echo "<td id=" . $foods[$i] . ">" . $foods[$i] . "</td>";
        }
    ?>
        </tr>
    </table>
    <h2 name="animals">Favorite Animals</h2>
    <?php
        $animals = ["Frogs", "Whales", "Starnosed moles"];
        $animals[] = "Giraffes";
        for($i=0; $i < count($animals); $i++) {
            echo "<input type=radio id=$animals[$i] name=animals><label for=$animals[$i]>" . $animals[$i] . "</label><br>";
        }
    ?>
    <h2 name="hobbies">Favorite Hobbies</h2>
    <ul>
    <?php
        $hobbies = ["Frisbee", "FRC", "Reading"];
        unset($hobbies[2]);
        for($i=0; $i < count($hobbies); $i++) {
            echo "<li>" . $hobbies[$i];
        }
    ?>
    </ul>
</body>