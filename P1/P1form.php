<!DOCTYPE html>
<html>
<head>
  <title>Best Vacation City Quiz</title>
  <link rel="stylesheet" href="stuff.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="stuff.js"></script>
</head>

<body>
<div id="intro" class="see">
    <h1>What is your ideal vacation city?<h1>
    <p id="description">Answer these questions to find out where your next travel destination should be!</p>
    <button type="button" class="button" id="take" onClick="nextpage()">Take the Quiz</button>
</div>

<div id="q1" class ="hide">
    <form action="formsolve.php" method="post">
      <label for="climate">What is your ideal climate?</label><br>
      <select id="climate" name="ideal-climate">
        <option value="Sunny">Sunny and warm</option>
        <option value="Foggy">Foggy and cool</option>
        <option value="Snowy">Snowy</option>
      </select><br>
      <button type="button" id= "back" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next" class="button" onClick="nextpage()">Next</button>
</div>

<div id="q2" class="hide">
      <p>What kind of foods do you like?</p>
      <label for="cuisine1"><input type="checkbox" id="cuisine1" name="Spicy" value="Yes">
        Spicy</label>
      <label for="cuisine2"><input type="checkbox" id="cuisine2" name="Pastries" value="Yes">
        Pastries</label>
      <label for="cuisine3"><input type="checkbox" id="cuisine3" name="Dairy" value="Yes">
        Dairy</label>
      <label for="cuisine4"><input type="checkbox" id="cuisine4" name="Noodles" value="Yes">
        Noodles</label>
      <label for="cuisine5"><input type="checkbox" id="cuisine5" name="Seafood" value="Yes">
        Seafood</label>
      <label for="cuisine6"><input type="checkbox" id="cuisine5" name="Herby" value="Yes">
        Herby</label><br> 
        <button type="button" id= "back2" class="button" onClick="backpage()">Back</button>
        <button type="button" id= "next2" class="button" onClick="nextpage()">Next</button>
</div>

<div id="q3" class="hide">
      <label for="foodstyle">What kind of food style are you craving?</label>
      <select id="foodstyle" name="food-style">
        <option value="Michellin">Michellin Star</option>
        <option value="Street">Street Food</option>
        <option value="Bakery">Bakery</option>
        <option value="Family">Family Owned</option>
      </select><br>
      <button type="button" id= "back3" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next3" class="button" onClick="nextpage()">Next</button>
</div>

<div id="q4" class="hide">
    <p>City or Nature?</p>
      <label for="city">
      <input type="radio" id="city" name="city-nature" value="city">
      City</label>
      <label for="beach">
      <input type="radio" id="nature" name="city-nature" value="nature">
      Nature</label><br>
      <button type="button" id= "back4" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next4" class="button" onClick="nextpage()">Next</button>
</div>

<div id="q5" class="hide">
    <p>Forests or Beaches?</p>
      <label for="forest">
      <input type="radio" id="forest" name="forest-beach" value="forest">
      Forest</label>
      <label for="beach">
      <input type="radio" id="beach" name="forest-beach" value="beach">
      Beach</label><br>
      <button type="button" id= "back5" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next5" class="button" onClick="nextpage()">Next</button>
</div>

<div id="q6" class="hide">
    <p>Modern or Historic Architecture?</p>
      <label for="modern">
      <input type="radio" id="modern" name="modern-historic" value="modern">
      Modern</label>
      <label for="beach">
      <input type="radio" id="historic" name="modern-historic" value="historic">
      Historic</label><br>
      <button type="button" id= "back6" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next6" class="button" onClick="nextpage()">Next</button>
</div>

<div id="q7" class="hide">
    <p>Hustle and Bustle or Relaxed and Chill?</p>
      <label for="hustle">
      <input type="radio" id="hustle" name="hustle-relaxed" value="hustle">
      Hustle</label>
      <label for="relaxed">
      <input type="radio" id="relaxed" name="hustle-relaxed" value="relaxed">
      Relaxed</label><br>
      <button type="button" id= "back7" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next7" class="button" onClick="nextpage()">Next</button>
</div>

<div id="q8" class="hide">
    <p>Are you a tea or coffee person?</p>
      <label for="tea">
      <input type="radio" id="tea" name="tea-coffee" value="tea">
      Tea</label>
      <label for="coffee">
      <input type="radio" id="coffee" name="tea-coffee" value="coffee">
      Coffee</label><br>
      <button type="button" id= "back8" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next8" class="button" onClick="nextpage()">Next</button>
</div>

<div id="submit" class="hide"> 
    <br>
    <p>Enter Your Info Below</p><br>
    <p>Name<p>
    <input type="text">
    <p>Age<p>
    <input type="number" value="age">
    <p>Email<p>
    <input type="email"><br>
    <p>Phone Number<p>
    <input type="tel"><br>
    <p>City<p>
    <input type="text"><br>
    <p>State<p>
    <input type="text"><br>
    <input type="submit" value="Submit Quiz!">
</div>

</body>
</html>