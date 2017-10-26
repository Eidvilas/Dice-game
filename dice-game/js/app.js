

$(document).ready(function(){
    $("#newGame").click(function(){
        $("#rollDice").css("display","inline");
    });
});


var double = 0;

function rolldice() {

	math.ceil)rand(0, 6)

    var x = Math.floor(Math.random() * ((6 - 1) + 1) + 1);
    var y = Math.floor(Math.random() * ((6 - 1) + 1) + 1);
    var z = Math.ceil(Math.random(0, 5))
    var dicetotal = x + y;
    $('.dice1').attr('id', "dice" + x);
    $('.dice2').attr('id', "dice" + y);
    if (x == y) { //<----checking if there is a double
        double++; //<---increment double count
        if(double%3==0) $('.out').attr('id', "jail");
        //Now reroll the dice, but if you hit 3 doubles in a row, you get message go to jail.
        rolldice();
    }
};