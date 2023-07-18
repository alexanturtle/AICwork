<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lights Out</title>
    <meta charset="utf-8">
    <style>

    body {
        background-color: #555;
    }

    td {
        height: 75px;
        width: 75px;
        border: 1px solid #000000;
    }

    .squareon {
        background-color: yellow;
    }

    .notwin {
        display: none;
    }

    .win {
        background-color: rgba(100, 180, 100, 0.9);
        position: fixed;
        text-align: center;
        padding: 155px;
        width: 8%;
        height: 15%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        font-size: 20px;
        color: white;
    }

    </style>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <script src="X4.js"></script>
</head>
<body>
<table>
    <tr><td></td><td></td><td></td><td></td><td></td></tr>
    <tr><td></td><td></td><td></td><td></td><td class="squareon"></td></tr>
    <tr><td></td><td></td><td></td><td class="squareon"></td><td class="squareon"></td></tr>
    <tr><td></td><td></td><td></td><td></td><td class="squareon"></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td></tr>
</table>

<div id="nextbackground" class="notwin">
    <p>You win!</p>
    <button type="button" id="next" onClick="refreshPage()">Next Level</button>
</div>

<div id="resetbackground" class="notwin">
    <p>You win! forreals</p>
    <button type="button" id="reset" onClick="refreshPage()">Reset Game</button>
</div>

<script>
    let number = 0;
    function refreshPage(){
        if(number == 4) {
            window.location.reload();
        }
        else if(number == 0){
            $("td").eq(1).toggleClass("squareon");
            $("td").eq(5).toggleClass("squareon");
            $("td").eq(6).toggleClass("squareon");
            $("td").eq(7).toggleClass("squareon");
            $("td").eq(11).toggleClass("squareon");
            $(".win").removeClass("win").addClass("notwin");
        }
        else if(number == 1){
            $("td").eq(16).toggleClass("squareon");
            $("td").eq(21).toggleClass("squareon");
            $("td").eq(20).toggleClass("squareon");
            $("td").eq(22).toggleClass("squareon");
            $(".win").removeClass("win").addClass("notwin");
        }
        else if(number == 2){
            $("td").eq(3).toggleClass("squareon");
            $("td").eq(4).toggleClass("squareon");
            $("td").eq(9).toggleClass("squareon");
            $(".win").removeClass("win").addClass("notwin");
        }
        else if(number == 3){
            $("td").eq(5).toggleClass("squareon");
            $("td").eq(10).toggleClass("squareon");
            $("td").eq(15).toggleClass("squareon");
            $("td").eq(11).toggleClass("squareon");
            $(".win").removeClass("win").addClass("notwin");
        }
        number = number + 1;
    }
    </script>

</body>
</html>