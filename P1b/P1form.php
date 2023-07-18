<!DOCTYPE html>
<html>
<head>
  <title>Best Vacation City Quiz</title>
  <link rel="stylesheet" href="P1form4.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="P1form.js"></script>
</head>

<body id="form-body">
<?php //this is me calling my header
    require_once "header.php";
    myheader();
  ?>
<!-- here i created the progress bar the header -->
  <div id="progressbar" class="hide"> 
    <p><strong>Progress</strong></p>
</div>
<!-- this is my introductory page where somebody can start the quiz -->
<div id="intro" class="see">
    <h1>What is your ideal vacation city?<h1>
    <p id="description">Answer these questions to find out where your next travel destination should be!</p>
    <button type="button" class="button" id="take" onClick="nextpage()">Take the Quiz</button>
</div>
<!-- here is my first question, which is about ideal climate -->
<div id="q1" class ="hide">
    <form action="formsolve.php" method="post">
      <p class="question" id="question1">What is your ideal climate?</p>
      <!-- i created a table to store each of my questions so it is formatted correctly -->
      <table id="q1table" class="table">
      <tr>
        <td>
      <label for="sunny">
      <input type="radio" id="sunny" name="ideal-climate" value="sunny">
      Sunny and Warm</label>
        </td>
        <td>
      <label for="snowy">
      <input type="radio" id="snowy" name="ideal-climate" value="snowy">
      Snowy</label>
        </td>
      </tr>
      <tr>
        <td>
      <label for="foggy">
      <input type="radio" id="foggy" name="ideal-climate" value="foggy">
      Foggy and Cool</label>
        </td>
        <td>
      <label for="rainy">
      <input type="radio" id="rainy" name="ideal-climate" value="rainy">
      Rainy</label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next" class="button" onClick="nextpage()">Next</button>
</div>
<!-- here is my second question, which is about favorite food/foodstyles -->
<div id="q2" class="hide">
      <p id="q2text" class="question">What kind of foods do you like?</p>
  <table id="q2table" class="table" >
    <tr>
        <td>
      <label for="cuisine1"><input type="checkbox" id="cuisine1" name="Spicy" value="Yes">
        Spicy</label>
        </td>
        <td>
      <label for="cuisine2"><input type="checkbox" id="cuisine2" name="Pastries" value="Yes">
        Pastries</label><br>
        </td>
        <td>
      <label for="cuisine3"><input type="checkbox" id="cuisine3" name="Dairy" value="Yes">
        Dairy</label>
        </td>
    </tr>
    <tr>
        <td>
      <label for="cuisine4"><input type="checkbox" id="cuisine4" name="Noodles" value="Yes">
        Noodles</label><br>
        </td>
      <td>
      <label for="cuisine5"><input type="checkbox" id="cuisine5" name="Seafood" value="Yes">
        Seafood</label>
        </td>
        <td>
      <label for="cuisine6"><input type="checkbox" id="cuisine5" name="Herby" value="Yes">
        Herby</label><br>
        </td>
    </tr> 
  </table>
        <button type="button" id= "back2" class="button2" onClick="backpage()">Back</button>
        <button type="button" id= "next2" class="button2" onClick="nextpage()">Next</button>
  </div>
<!-- here is my third question, is is about the kind of restaurants you wanna go, ya know -->
<div id="q3" class="hide">
      <p id="q3text" class="question">What kind of food style are you craving?</p>
      <table id="q3table" class="table">
      <tr>
        <td>
      <label for="Michellin">
      <input type="radio" id="Michellin" name="food-style" value="Michellin">
      Michellin</label>
        </td>
        <td>
      <label for="Street">
      <input type="radio" id="Street" name="food-style" value="Street">
      Street Food</label>
        </td>
      </tr>
      <tr>
        <td>
      <label for="Bakery">
      <input type="radio" id="Bakery" name="food-style" value="Bakery">
      Bakery</label>
        </td>
        <td>
      <label for="Family">
      <input type="radio" id="Family" name="food-style" value="Family">
      Family Owned</label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back3" class="button3" onClick="backpage()">Back</button>
      <button type="button" id= "next3" class="button3" onClick="nextpage()">Next</button>
</div>
<!-- here for question 4 i asked about the attractions you like-->
<div id="q4" class="hide">
    <p id="q4text"class="question">Favorite Attraction?</p>
    <table id="q4table" class="table">
      <tr>
        <td>
      <label for="skyscraper">
      <input type="radio" id="skyscraper" name="attraction" value="skyscraper">
      Tall Skyscrapers</label>
        </td>
        <td>
      <label for="house">
      <input type="radio" id="house" name="attraction" value="house">
      Unique Houses</label>
        </td>
      </tr>
      <tr>
        <td>
      <label for="boardwalk">
      <input type="radio" id="boardwalk" name="attraction" value="boardwalk">
      Fun Boardwalks</label>
        </td>
        <td>
      <label for="ruin">
      <input type="radio" id="ruin" name="attraction" value="ruin">
      Ancient Ruins</label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back4" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next4" class="button" onClick="nextpage()">Next</button>
</div>
<!-- for question 5, its natural scenery instead -->
<div id="q5" class="hide">
    <p id="q5text" class="question">Favorite natural scenery?</p>
    <table id="q5table" class="table" class="table">
      <tr>
        <td>
      <label for="beach">
      <input type="radio" id="beach" name="scenery" value="beach">
      Beach</label>
        </td>
        <td>
      <label for="mountain">
      <input type="radio" id="mountain" name="scenery" value="mountain">
      Mountain</label>
        </td>
      </tr>
      <tr>
        <td>
      <label for="forest">
      <input type="radio" id="forest" name="scenery" value="forest">
      Forest</label>
        </td>
        <td>
      <label for="park">
      <input type="radio" id="park" name="scenery" value="park">
      Park</label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back5" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next5" class="button" onClick="nextpage()">Next</button>
</div>
<!-- favorite architecture for question 6! -->
<div id="q6" class="hide">
    <p id="q6text" class="question">Favorite Architecture?</p>
      <table id="q6table" class="table">
      <tr>
        <td>
      <label for="modern">
      <input type="radio" id="modern" name="architecture" value="modern">
      Modern</label>
        </td>
        <td>
      <label for="classic">
      <input type="radio" id="classic" name="architecture" value="classic">
      Classical</label>
        </td>
      </tr>
      <tr>
        <td>
      <label for="beach">
      <input type="radio" id="beach" name="architecture" value="beach">
      Beachside</label>
        </td>
        <td>
      <label for="ancient">
      <input type="radio" id="ancient" name="architecture" value="ancient">
      Ancient</label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back6" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next6" class="button" onClick="nextpage()">Next</button>
</div>
<!-- now for question 7 we move on to how you like the environment of your city -->
<div id="q7" class="hide">
    <p id="q7text" class="question">How do you like the environment?</p>
      <table id="q7table" class="table">
      <tr>
        <td>
      <label for="busy">
      <input type="radio" id="busy" name="environment" value="busy">
      Crowded and Hectic</label>
        </td>
        <td>
      <label for="chill">
      <input type="radio" id="chill" name="environment" value="chill">
      Chill and Relaxed</label>
        </td>
      </tr>
      <tr>
        <td>
      <label for="quiet">
      <input type="radio" id="quiet" name="environment" value="quiet">
      Quiet and Peaceful</label>
        </td>
        <td>
      <label for="fun">
      <input type="radio" id="fun" name="environment" value="fun">
      Fun and Exciting</label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back7" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next7" class="button" onClick="nextpage()">Next</button>
</div>
<!-- continuing from foods, for question 8 its favorite drinks -->
<div id="q8" class="hide">
    <p id="q8text" class="question">What's your favorite drink?</p>
      <table id="q8table" class="table">
      <tr>
        <td>
      <label for="coffee">
      <input type="radio" id="coffee" name="drink" value="coffee">
      Coffee</label>
        </td>
        <td>
      <label for="soda">
      <input type="radio" id="soda" name="drink" value="soda">
      Soda</label>
        </td>
      </tr>
      <tr>
        <td>
      <label for="tea">
      <input type="radio" id="tea" name="drink" value="tea">
      Tea</label>
        </td>
        <td>
      <label for="wine">
      <input type="radio" id="wine" name="drink" value="wine">
      Wine</label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back8" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next8" class="button" onClick="nextpage()">Next</button>
</div>
<!-- question 9 and its how you would want to spend you day on vacation-->
<div id="q9" class="hide">
    <p id="q9text" class="question">How would you spend your day?</p>
      <table id="q9table" class="table">
      <tr>
        <td>
      <label for="coffee">
      <input type="radio" id="museum" name="day" value="museum">
      At the museum</label>
        </td>
        <td>
      <label for="hike">
      <input type="radio" id="hike" name="day" value="hike">
      Hiking</label>
        </td>
      </tr>
      <tr>
        <td>
      <label for="sightsee">
      <input type="radio" id="sightsee" name="day" value="sightsee">
      Sightseeing</label>
        </td>
        <td>
      <label for="wine">
      <input type="radio" id="shop" name="day" value="shop">
      Shopping and eating</label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back9" class="button" onClick="backpage()">Back</button>
      <button type="button" id= "next9" class="button" onClick="nextpage()">Next</button>
</div>
<!-- for question 10 i asked about what peaks your interest when travelling -->
<div id="q10" class="hide">
    <p id="q10text" class="question">What are you most interested in when visiting a city?</p>
      <table id="q10table" class="table">
      <tr>
        <td>
      <label for="history">
      <input type="radio" id="history" name="interest" value="history">
      Learning the history and culture</label>
        </td>
        <td>
      <label for="view">
      <input type="radio" id="view" name="interest" value="view">
      Soaking in the views</label>
        </td>
      </tr>
      <tr>
      <td>
      <label for="culture">
      <input type="radio" id="citylife" name="interest" value="citylife">
      Experiencing the city life</label>
        </td>
        <td>
      <label for="luxury">
      <input type="radio" id="luxury" name="interest" value="luxury">
      Living in luxury</label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back10" class="button10" onClick="backpage()">Back</button>
      <button type="button" id= "next10" class="button10" onClick="nextpage()">Next</button>
</div>
<!-- for the last question, it is an aesthetic one, based on images -->
<div id="q11" class="hide">
    <p id="q11text" class="question">What's your favorite aesthetic?</p>
      <table id="q11table" class="table">
      <tr>
        <td>
      <label for="clean">
      <input type="radio" id="clean" name="aesthetic" value="clean">
      <img id="cleanimg" src="https://images.squarespace-cdn.com/content/v1/58855e82d482e9d57943118d/1524278313365-81AJKFWDS7BI5JQT2JJD/California+street+sunrise-1.jpg" alt="Clean City"></label>
        </td>
        <td>
      <label for="cyber">
      <input type="radio" id="cyber" name="aesthetic" value="cyber">
      <img id="cyberimg" src="https://i.pinimg.com/originals/ea/85/c3/ea85c3be1f0d8622474d807b3d0727f7.jpg" alt="Cyberpunk"></label>
        </td>
      </tr>
      <tr>
      <td>
      <label for="europe">
      <input type="radio" id="europe" name="aesthetic" value="europe">
      <img id="europeimg" src="https://media.istockphoto.com/id/1176361308/photo/balcony-frame-with-the-university-of-paris-blurred-in-the-background.jpg?s=612x612&w=0&k=20&c=8OrYISM_fXTjHkZMdDdXQD80ehqWcC91bs52UpkAhek=" alt="European"></label>
        </td>
        <td>
      <label for="seaside">
      <input type="radio" id="seaside" name="aesthetic" value="seaside">
      <img id="seasideimg" src="https://media.cntraveler.com/photos/60e612ae0a709e97d73d9c60/1:1/w_3840,h_3840,c_limit/Beach%20Vacation%20Packing%20List-2021_GettyImages-1030311160.jpg" alt="Seaside"></label>
        </td>
      </tr>
    </table>
      <button type="button" id= "back11" class="button11" onClick="backpage()">Back</button>
      <button type="button" id= "next11" class="button11" onClick="nextpage()">Next</button>
</div>
<!-- and this is the submit page, where you can put your personal info and then submit the quiz -->
<div id="submit" class="hide"> 
    <br>
    <p id="submithead" class="question">Enter Your Info Below</p><br>
    <p>Name<p>
    <input type="text" name="name"class="submitinfo">
    <p>Age<p>
    <input type="number" name="age" class="submitinfo">
    <p>Email<p>
    <input type="email" name="email" class="submitinfo"><br>
    <p>Phone Number<p>
    <input type="tel" name="phone" class="submitinfo"><br>
    <p>City<p>
    <input type="text" name="city" class="submitinfo"><br>
    <p>State<p>
    <input type="text" name="state" class="submitinfo"><br><br>
    <button type="button" id= "backsubmit" onClick="backpage()">Back</button>
    <input type="submit" value="Submit Quiz!">
</div>
</body>
</html>