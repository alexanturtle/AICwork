$(document).ready(() => {
    let count = 0;

    $("table").on('click', (event) => {
		let target = $(event.target)
        let cellcol = target.index();
        let cellrow = target.parent().index();
        let cellpos = (cellrow * 5) + cellcol;

		if (target.hasClass("squareon")) {
			target.removeClass("squareon");
		}
		else {
			target.addClass("squareon");
		}

        let up = cellpos - 5;
        if(up >= 0) {
            $("td").eq(up).toggleClass("squareon");
        }

        let down = cellpos + 5;
        if(down <= 24) {
            $("td").eq(down).toggleClass("squareon");
        }

        let left = cellpos - 1;
        if(cellpos % 5 != 0) {
            $("td").eq(left).toggleClass("squareon");
        }

        let right = cellpos + 1
        if((cellpos - 4) % 5 != 0) {
            $("td").eq(right).toggleClass("squareon");
        }

        console.log("length " + $(".squareon").length);
        if($(".squareon").length == 0){
            console.log("count " + count);
            if(count!=4){
                $("#nextbackground").removeClass("notwin").addClass("win");
                // $("#reset").addClass("notwin");
                count = count + 1;
            }
            else{
                $("#resetbackground").removeClass("notwin").addClass("win");
                // $("#next").addClass("notwin");
                count = 0;
            }

        }
	});

})