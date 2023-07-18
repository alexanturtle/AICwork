<!DOCTYPE html>
<html>
<head>
  <title>Questionairre</title>
  <style>
    body {
      font-family: Roboto, sans-serif;
      text-align: center;
      margin: 0;
      background-color: rgb(49, 65, 49);
      background-image: url("https://img.freepik.com/premium-photo/square-background-natural-green-leaves_232693-453.jpg");
      background-attachment: fixed; 
      background-size: cover;
      background-position: center;
      font-size: 20px;
    }

    .background{
        background-color: rgba(63, 100, 63, 0.6);
    }

    h1 {
      font-size: 75px;
    }

    .section {
      margin-bottom: 40px;
    }

    form {
      max-width: 400px;
      margin: auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      margin-top: 10px;
    }

    .stuff {
      margin: 100px;
    }

    h1, p, .section {
      color: #ffffff;
    }

    #name {
        color: rgb(143, 179, 143);
        padding: 30px;
    }

    .question2 {
        text-align: left;
        padding-left: 50px; 
    }

    .question5 {
        text-align: left;
        padding-left: 50px;
    }

</style>  
</head>

<body>
  <?php
    require_once "header.php";
    myheader();
  ?>
  <div class="section">
    <form action="printout.php" method="post">
      <label for="question1">What is your favorite color?</label>
      <input type="text" id="question1" name="Favorite color">

      <label for="question2">What programming languages do you know?</label>
      <div class="question2">
      <label for="question2-1"><input type="checkbox" id="question2-1" name="Knows HTML/CSS" value="Yes">
      HTML/CSS</label>
      <label for="question2-2"><input type="checkbox" id="question2-2" name="Knows JavaScript" value="Yes">
      JavaScript</label>
      <label for="question2-3"><input type="checkbox" id="question2-3" name="Knows Python" value="Yes">
      Python</label>
      <label for="question2-4"><input type="checkbox" id="question2-4" name="Knows Java" value="Yes">
      Java</label>
      <label for="question2-5"><input type="checkbox" id="question2-5" name="Knows C++" value="Yes">
      C++</label> 
      </div> 
        <label for="question3">Which programming language do you enjoy the most?</label>
      <select id="question3" name="Favorite language">
        <option value="None">None</option>
        <option value="HTML/CSS">HTML/CSS</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
        <option value="C++">C++</option>
        <option value="Other">Other</option>
      </select>

      <label for="question4">How many hours do you spend coding each week?</label>
      <input type="number" id="question4" name="Hours coded">

      <label for="question5">Which is your favorite programming tool?</label>
    <div class="question5">
      <label for="question5-1">
      <input type="radio" id="question5-1" name="Favorite tool" value="text-editor">
      Text Editor</label>
      <label for="question5-2">
      <input type="radio" id="question5-2" name="Favorite tool" value="IDE">
      Integrated Development Environment (IDE)</label>
    </div>

      <label for="question6">Why did you decide to join the Web Development class?</label>
      <textarea style="width: 250px; height: 80px;" id="question6" name="Reason for joining the class"></textarea><br><br>
      <input type="submit" value="Submit">
</form>
</body>