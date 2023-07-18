
$(document).ready(() => {
    $(".oldclassfrom1997").removeClass("oldclassfrom1997");
    $("#irrationalsongs").addClass("songerrors");
    $("#longsongs").addClass("songerrors");
    $("#futuremovies > h4").remove("h4");

    $("#futuremovies").append($("#futuremovies > p"));

    //$("#longsongs").append($("header"));
    $("body").prepend($("header"));

    ////$("#longsongs").remove($("header"));
    //$("#longsongs > header").remove("header");
    //prepend puts something as first child of an element [at the top (inside an element)], before puts something before the designated element

    $("#irrationalsongs > ul > li").last().addClass("metairony");

    $("input:text").prop("required", true);

    $("#dogs > ul > li").eq(-3).addClass("lessemphasis");

    //ec

    $("#futuremovies").removeAttr("style");
    $("#deadmovies").removeAttr("style");

    $("#deadmovies > .repeat").remove("h4");

    $("#futuremovies").addClass("movieerrors");
    $("#deadmovies").addClass("movieerrors");

    $("#longsongs > ul").empty();
    $("#longsongs > .oldclassfrom1998").append($("#longsongs > li"));

    //remove removes specific elements specified, empty removes everything inside an element

})
