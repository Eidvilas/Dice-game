<?php 
    session_start();
    
?>


<!doctype html>
<html lang="en">
<head>
    <title>Dice game</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--<link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4"><a class="btn btn-info" href="statistics.php"><?php echo $_SESSION['username']?></a>&nbsp<a class="btn btn-info" href="login.php" >Logout</a></div>
        </div>

        <div class="row">
            
            <div class="col-md-2"></div>
            <div class="col"><h1>Dice game</h1></div>
        </div>
        <div class="row">
            
            <div class="col-md-3"></div>
            <div class="col"><h3>roll dice, two matching dice - 10 ct win. </h3></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <img id="dice1" src="images/1.png" alt="Mountain View">
            </div>

            <div class="col">
                <img id="dice2" src="images/1.png" alt="Mountain View">
            </div>
            
             <div class="col">
                <img id="dice3" src="images/1.png" alt="Mountain View">
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <button class="col btn btn-primary btn-lg" id="newGame" >New Game</button>
            </div>
            <div class="col">
                <button class="col btn btn-primary btn-lg" id="rollDice" style="display: none;" >Roll dice</button>
            </div>
            <div class="col">
                <div>
                    <h3 id="yourWin">Your win:</h3><h2 id="yourWin2"> 0 ct</h2>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    <button id="iii">stat array</button>
    <p id="ggg"></p>
<script src="js/app.js"></script>
</body>
</html>