
 //the following code is the js for my questionairre, which include a next and back button, as well as
 //the progress bar.
 let number = 0;
function nextpage(){ //here is the code for my next button, it removes a question and adds the next one
    if(number == 0){
        $("#intro").removeClass("see").addClass("hide");
        $("#q1").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("hide"); //for each next page i also added the progress bar update
    }
    else if(number == 1){
        $("#q1").removeClass("see").addClass("hide");
        $("#q2").removeClass("hide").addClass("see");
        $("#progressbar").addClass("progress1");
    }
    else if(number == 2){
        $("#q2").removeClass("see").addClass("hide");
        $("#q3").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("progress1").addClass("progress2");
    }
    else if(number == 3){
        $("#q3").removeClass("see").addClass("hide");
        $("#q4").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("progress2").addClass("progress3");
    }
    else if(number == 4){
        $("#q4").removeClass("see").addClass("hide");
        $("#q5").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("progress3").addClass("progress4");
    }
    else if(number == 5){
        $("#q5").removeClass("see").addClass("hide");
        $("#q6").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("progress4").addClass("progress5");
    }
    else if(number == 6){
        $("#q6").removeClass("see").addClass("hide");
        $("#q7").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("progress5").addClass("progress6");
    }
    else if(number == 7){
        $("#q7").removeClass("see").addClass("hide");
        $("#q8").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("progress6").addClass("progress7");
    }
    else if(number==8) {
        $("#q8").removeClass("see").addClass("hide");
        $("#q9").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("progress7").addClass("progress8");
    }
    else if(number==9) {
        $("#q9").removeClass("see").addClass("hide");
        $("#q10").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("progress8").addClass("progress9");
    }
    else if(number==10) {
        $("#q10").removeClass("see").addClass("hide");
        $("#q11").removeClass("hide").addClass("see");
        $("#progressbar").removeClass("progress9").addClass("progress10");
    }
    else{
        $("#q11").removeClass("see").addClass("hide");
        $("#submit").removeClass("hide");
    }
    number = number + 1;
}

function backpage(){ //here is the code for my back button, it reverses the step in my next button
    if(number == 1){
        $("#q1").removeClass("see").addClass("hide");
        $("#intro").removeClass("hide").addClass("see");
        $("#progressbar").addClass("hide");
    }
    else if(number == 2){
        $("#q2").removeClass("see").addClass("hide");
        $("#q1").removeClass("hide").addClass("see");
    }
    else if(number == 3){
        $("#q3").removeClass("see").addClass("hide");
        $("#q2").removeClass("hide").addClass("see");
    }
    else if(number == 4){
        $("#q4").removeClass("see").addClass("hide");
        $("#q3").removeClass("hide").addClass("see");
    }
    else if(number == 5){
        $("#q5").removeClass("see").addClass("hide");
        $("#q4").removeClass("hide").addClass("see");
    }
    else if(number == 6){
        $("#q6").removeClass("see").addClass("hide");
        $("#q5").removeClass("hide").addClass("see");
    }
    else if(number == 7){
        $("#q7").removeClass("see").addClass("hide");
        $("#q6").removeClass("hide").addClass("see");
    }
    else if(number == 8){
        $("#q8").removeClass("see").addClass("hide");
        $("#q7").removeClass("hide").addClass("see");
    }
    else if(number == 9){
        $("#q9").removeClass("see").addClass("hide");
        $("#q8").removeClass("hide").addClass("see");
    }
    else if(number == 10){
        $("#q10").removeClass("see").addClass("hide");
        $("#q9").removeClass("hide").addClass("see");
    }
    else if(number == 11){
        $("#q11").removeClass("see").addClass("hide");
        $("#q10").removeClass("hide").addClass("see");
    }
    else {
        $("#submit").removeClass("see").addClass("hide");
        $("#q11").removeClass("hide").addClass("see");
    }
    number = number - 1;
}
