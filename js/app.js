
var win=0;
var win_total=0;
var stat=[];

$(document).ready(function(){
    $("#newGame").click(function(){
        $("#rollDice").css("display","inline");
         win_total=0;
         win=0;
    });
});



$(document).ready(function(){
    
    var win_total = 0;
    var win_single = 0;
    
    $("#newGame").click(function(){
        $("#rollDice").css("display","inline");
        document.getElementById("yourWin2").innerHTML ='';
    });
    
    
    $('#rollDice').click(function() {
       
        var x = Math.floor(Math.random() * ((6 - 1) + 1) + 1);
        var y = Math.floor(Math.random() * ((6 - 1) + 1) + 1);
        var z = Math.floor(Math.random() * ((6 - 1) + 1) + 1);
       
        $('#dice1').attr('src', "images/" + x + ".png");
        $('#dice2').attr('src', "images/" + y + ".png");
        $('#dice3').attr('src', "images/" + z + ".png");
         
        if (x === y) {
            win_total +=  x * 10;
            win_single = x * 10;
        } else if (y === z) {
            win_total +=  y * 10;
            win_single = x * 10;
        } else if (x === z) {
            win_total +=  x * 10;
            win_single = x * 10;
        } 
        
        win=Math.round(win_total)/100;
        document.getElementById("yourWin2").innerHTML = win + " eur";
        
        if (win_single > 0) {
            stat.push(win_single);
        } else {
            stat.push("0");
        }
        
        win_single=0;
    });
});

$('#iii').click(function() {
document.getElementById("ggg").innerHTML = stat;
});