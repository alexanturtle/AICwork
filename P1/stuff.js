//$(document).ready(() => {
 let number = 0;
function nextpage(){
    //alert(number);
    if(number == 0){
        //alert(number);
        $("#intro").removeClass("see").addClass("hide");
        $("#q1").removeClass("hide").addClass("see");
        //alert(number);
    }
    else if(number == 1){
        //alert(number);
        $("#q1").removeClass("see").addClass("hide");
        $("#q2").removeClass("hide").addClass("see");
    }
    else if(number == 2){
        $("#q2").removeClass("see").addClass("hide");
        $("#q3").removeClass("hide").addClass("see");
    }
    else if(number == 3){
        $("#q3").removeClass("see").addClass("hide");
        $("#q4").removeClass("hide").addClass("see");
    }
    else if(number == 4){
        $("#q4").removeClass("see").addClass("hide");
        $("#q5").removeClass("hide").addClass("see");
    }
    else if(number == 5){
        $("#q5").removeClass("see").addClass("hide");
        $("#q6").removeClass("hide").addClass("see");
    }
    else if(number == 6){
        $("#q6").removeClass("see").addClass("hide");
        $("#q7").removeClass("hide").addClass("see");
    }
    else if(number == 7){
        $("#q7").removeClass("see").addClass("hide");
        $("#q8").removeClass("hide").addClass("see");
    }
    else {
        $("#q8").removeClass("see").addClass("hide");
        $("#submit").removeClass("hide");
    }
    number = number + 1;
}

function backpage(){
    //alert(number);
    if(number == 1){
        //alert(number);
        $("#q1").removeClass("see").addClass("hide");
        $("#intro").removeClass("hide").addClass("see");
        //lert(number);
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
    else {
        $("#q8").removeClass("see").addClass("hide");
        $("#q7").removeClass("hide").addClass("see");
    }
    number = number - 1;
}

//})